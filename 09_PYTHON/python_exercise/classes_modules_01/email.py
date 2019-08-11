import datetime


class Email:

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
