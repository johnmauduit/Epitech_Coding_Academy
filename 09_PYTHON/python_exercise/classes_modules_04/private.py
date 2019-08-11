from sendable import Sendable
import datetime


class ObfuscatedDate(datetime.datetime):
    def __init__(self):
        super().__init__(1, 1, 1, 0, 0)


class Private(Sendable):

    def __init__(self, **kwargs):
        super().__init__(**kwargs)

    def send(self):
        ''' The DataAlreadySent error has to be triggered if the message is
        sent twice. We must remember the state of the message one one way or
        another. Anyway, an attacker could know if it has already been sent by
        using _send_ and catching the error. I don't know how we could be
        smarter than that without being pointless'''
        if self._sent_at is not None:
            self._raise_already_sent_error()
        self._sent_at = ObfuscatedDate()
