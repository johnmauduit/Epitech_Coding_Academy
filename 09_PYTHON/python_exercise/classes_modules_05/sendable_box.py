import time
import threading


class SendableBox:
    '''Too lazy to finish this because the exercise is vague and I'm too
    hangover to imagine a plan to make it work'''

    all = dict()

    def __init__(self, address):
        self.address = address
        self.all[address] = self
        self.thread = threading.Thread(target=self._listen_for_mails,
                                       name=address)
        self.thread.start()

    def _listen_for_mails(self):
        while True:
            time.sleep(1)
            if self._new_message:
                m = self._inbox[-1]
                print('\nNew message from %s:' % str(m._from))
                print('\n' + m._subject if m._subject else m._body)
