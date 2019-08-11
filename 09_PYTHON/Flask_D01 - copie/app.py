import os
import sqlite3
import click
# from . import db
from flask_wtf import FlaskForm
from wtforms import StringField, PasswordField, BooleanField
from wtforms.validators import InputRequired, Email, Length
from flask import current_app, g
from flask.cli import with_appcontext
from flask import Flask, request, session, g, redirect, url_for, abort, render_template, flash
from werkzeug.security import check_password_hash, generate_password_hash

app = Flask(__name__, static_folder='static') # that means that your app name will be the same as the file
app.config.from_object(__name__) # load config from this file , app.py

# Load default config and override config from an environment variable

app.config.update(dict(
    DATABASE = os.path.join(app.root_path, 'flaskr.db'),
    SECRET_KEY = 'developpment key',
    USERNAME = 'admin',
    PASSWORD = 'default'
))
app.config.from_envvar('FLASKR_SETTINGS', silent = True)

# class LoginForm(FlaskForm):

#     username = StringField('username', validators = [InputRequired(), Length(min = 4, max = 15 )])
#     password = PasswordField('password', validators = [InputRequired(), Length(min = 8, max = 80 )])
#     remember = BooleanField('remember me')



@app.route( '/') # yeah this is a route , nicer than in Symfony isn ’t it? 
def index():
    return render_template('home.html')

@app.route( '/home') # yeah this is a route , nicer than in Symfony isn ’t it? 
def home():
    return render_template('home.html')

@app.route('/login', methods=('GET', 'POST'))
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        db = get_db()
        error = None
        user = db.execute(
            'SELECT * FROM users WHERE username = ?', (username,)
        ).fetchone()

        if user is None:
            error = 'Incorrect username.'
        elif not check_password_hash(user['password'], password):
            error = 'Incorrect password.'

        if error is None:
            session.clear()
            session['user_id'] = user['id']
            return redirect(url_for('index'))

        flash(error)

    return render_template('login.html') #('auth/login.html')
# def login():
#     form = LoginForm()
#     return render_template('login.html', form = form)


@app.route('/register', methods=('GET', 'POST'))
def register():
    if request.method == 'POST':
        username = request.form['username']
        email = request.form['email']
        password = request.form['password']
        db = get_db()
        error = None

        if not username:
            error = 'Username is required.'
        elif not email:
            error = 'Email is required.'
        elif not password:
            error = 'Password is required.'
        elif db.execute(
            'SELECT id FROM users WHERE username = ?', (username,)
        ).fetchone() is not None:
            error = 'User {} is already registered.'.format(username)

        if error is None:
            db.execute(
                'INSERT INTO users (username, email, password) VALUES (?, ?, ?)',
                (username, email, generate_password_hash(password))
            )
            db.commit()
            return redirect(url_for('login'))#('auth.login')

        flash(error)

    return render_template('/register.html')#('auth/register.html')
# def register():
#     return render_template('register.html')



######################### DATABASE #########################
def connect_db():
    pass



def init_db():
    db = get_db()

    with current_app.open_resource('schema.sql') as f:
        db.executescript(f.read().decode('utf8'))

app.cli.add_command(init_db)

@click.command()
@with_appcontext
def init_db_command():
    """Clear the existing data and create new tables."""
    init_db()
    click.echo('Initialized the database.')

def get_db():

    if 'db' not in g:
        g.db = sqlite3.connect(
            current_app.config['DATABASE'],
            detect_types = sqlite3.PARSE_DECLTYPES
        )
        g.db.row_factory = sqlite3.Row

    return g.db

def query_db(query, args = (), one = False):

    cur = get_db().execute(query, args)
    rv = cur.fetchall()
    cur.close()
    return (rv[0] if rv else None) if one else rv

def close_db(e = None):

    db = g.pop('db', None)

    if db is not None:
        db.close()

def init_app(app):
    app.teardown_appcontext(close_db)
    app.cli.add_command(init_db_command)