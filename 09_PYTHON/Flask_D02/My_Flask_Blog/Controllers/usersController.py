from flask import request
from sqlalchemy.orm import sessionmaker
from flask_sqlalchemy import SQLAlchemy

from My_Flask_Blog.Models.Model import User
from My_Flask_Blog import app
from My_Flask_Blog.Config import db

def showAll():

    users = db.session.query(User).all()
    return(users)


def show(id):
    
    user = db.session.query(User).get(id)
    return(user)



def create():

    user = User(request.form['username'], request.form['email'], "Hello", request.form['password'])
    db.session.add(user)
    db.session.commit()


def update():
    pass


def delete():
    pass

