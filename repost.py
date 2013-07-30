#!/usr/bin/python
# coding: utf-8

# https://gist.github.com/4659409 [file_upload_sample.py]

import pprint
import requests  # pip install requests
import simplejson as json
import sys

from os.path import expanduser

base_url = 'https://alpha-api.app.net/stream/0'
token = sys.argv[2]

r = requests.session()
r.headers.update({'Authorization': 'Bearer %s' % (token)})

post_resp = r.post(base_url + '/posts/' + sys.argv[1] + '/repost')
pprint.pprint('RP:' + post_resp.json()['data']['id'])
