import socket
import threading
import time
import sys
 
class Server:
    
    sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    connections = []
    host = '127.0.0.1'
    port = 5000

    def __init__(self):
        
        self.sock.bind((self.host, self.port))
        self.sock.listen(1)


    def handler(self, c, a):
        while True:
            data = c.recv(1024) #recieve data of 1024 bytes
            for connection in self.connections:
                connection.send(data)
            if not data:
                print(str(a[0]) + ":" + str(a[1]), "disconnected")
                self.connections.remove(c)
                c.close()
                break

    def run(self):
        while True:
            c, a = self.sock.accept() #c is the connexion /a is a tuple of the address and port of th connected person
            cThread = threading.Thread(target = self.handler, args = (c, a))
            cThread.daemon = True
            cThread.start()
            self.connections.append(c)
            print(str(a[0]) + ":" + str(a[1]), "connected")



class Client():
    
        sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

        def sendMsg(self):
            while True:
                self.sock.send(bytes(input(""), 'utf-8'))

        def __init__(self, address):
            
            self.sock.connect((address, 5000))

            iThread = threading.Thread(target = self.sendMsg)
            iThread.daemon = True
            iThread.start() #iThread is going to run the sendMsg in the background

            while True:
                data = self.sock.recv(1024)
                if not data:
                    break
                print(str(data, 'utf-8'))



if (len(sys.argv) > 1):
    client = Client(sys.argv[1])
else:
    server = Server()
    server.run()
    
