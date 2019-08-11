from flask import Flask
from My_Flask_Blog import app
from My_Flask_Blog.Config import db
from My_Flask_Blog.Routes import route

db.init_db()

if __name__ == '__main__':
    app.run(debug = True)