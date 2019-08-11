import os
from flask import Flask
from flask_sqlalchemy import SQLAlchemy
import sys
sys.path.append("..")
from My_Flask_Blog import Config
from flask_debugtoolbar import DebugToolbarExtension

app = Flask(__name__)
app.config.from_object(__name__) # load config from this file , app.py
app.config['SECRET_KEY'] = 'developpment key' # utiliser un token, aller dans l'interpreteur->import secrets->secrets.token_hex(16) et ca donne ça '522916dfefbf8ea37d0dc09d3d6a66c9'
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///database.db'
db = SQLAlchemy(app)
app.debug = True
toolbar = DebugToolbarExtension



from My_Flask_Blog import Routes

app.run(debug = True)