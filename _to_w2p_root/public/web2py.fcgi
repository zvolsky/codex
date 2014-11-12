#!/usr/bin/python

import os, sys
_PROJECT_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
#if not _PROJECT_DIR in sys.path:
sys.path.insert(0, _PROJECT_DIR)
sys.path.insert(0, os.path.join(_PROJECT_DIR,'site-packages')) 
os.chdir(_PROJECT_DIR)

import gluon.main
import gluon.contrib.gateways.fcgi as fcgi
fcgi.WSGIServer(gluon.main.wsgibase, environ={'web2py_path': _PROJECT_DIR}).run()
