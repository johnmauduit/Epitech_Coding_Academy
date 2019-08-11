from My_Flask_Blog import app
from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
from My_Flask_Blog.forms import RegistrationForm, LoginForm
from My_Flask_Blog.Models import Model
from My_Flask_Blog.Controllers import usersController


# this is our routes
@app.route( '/', methods = ['GET', 'POST']) # index is home here 
def index():
    return render_template('home.html', title = 'Welcome')



@app.route( '/home') # home can be read without login but not editable
def home():
    return render_template('home.html', title = 'Home')



@app.route('/register', methods = ['GET', 'POST'])
def register():
    form = RegistrationForm()
    if request.method == "POST":
        usersController.create()
        return render_template('home.html', title = 'Welcome')
    return render_template('register.html', form = form)



@app.route('/login', methods = ['GET', 'POST'])
def login():
    form = LoginForm()
    return render_template('login.html', form = form)



@app.route('/admin', methods = ['GET', 'POST'])
def admin():
    users = usersController.showAll()
    
    # if request.method == "GET":
    #     return render_template('admin.html', title = 'Welcome')
    return render_template('admin.html', users = users)



@app.route('/user/<int:id>', methods = ['GET', 'POST'])
def user(id):
    user = usersController.show(id)
    return render_template('test.html', user = user)


''' truc de quentin a mettre dans les models
from models import Base, User, Post
check = db.session.query(User).filter_by(email = form.email.data, password = form.password.data).first()
'''