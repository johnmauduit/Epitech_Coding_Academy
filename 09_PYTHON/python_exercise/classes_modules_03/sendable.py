import datetime
from collections import defaultdict


def _get_list_defaultdict():
    return defaultdict(list)


class DataAlreadySent(Exception):
    pass


class Sendable:

    __history = defaultdict(_get_list_defaultdict)

    def __init__(self, **kwargs):

        n_args = len(kwargs)
        if n_args != 4:
            raise ValueError("Expected %d arguments, got %d." % (4, n_args))

        valid_fields = {'_body', '_subject', '_from', '_to'}
        for field in kwargs:
            if field not in valid_fields:
                raise ValueError("%s is an invalid argument." % str(field))
            setattr(self, field, kwargs[field])

        now = datetime.datetime.now()
        self._created_at = now
        self._updated_at = now
        self._sent_at = None

    @staticmethod
    def _raise_already_sent_error():
        raise DataAlreadySent

    def send(self):
        if self._sent_at is not None:
            self._raise_already_sent_error()
        self._sent_at = datetime.datetime.now()
        self.__history[self._from][self._to].append(self._sent_at)

    @property
    def history(self):
        return self.__history
