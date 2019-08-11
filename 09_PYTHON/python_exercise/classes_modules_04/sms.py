from sendable import Sendable
import warnings


class Sms(Sendable):

    def __init__(self, **kwargs):
        if '_subject' in kwargs:
            warnings.warn("Setting a _subject is not supported for SMS, "
                          "ignoring.")
        kwargs['_subject'] = ''
        super().__init__(**kwargs)
        del self._subject
