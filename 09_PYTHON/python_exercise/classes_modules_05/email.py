from sendable import Sendable


class Email(Sendable):

    def __init__(self, **kwargs):
        super().__init__(**kwargs)
