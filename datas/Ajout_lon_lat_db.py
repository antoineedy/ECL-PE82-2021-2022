#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Mar 16 15:18:26 2022

@author: nathanbauerle
"""

import json, sqlite3

conn = sqlite3.connect('base.db')

with open('pvo_patrimoine_voirie.json') as json_data_all:
    data_dict_all = json.load(json_data_all)

with open('base_parking.json') as json_data:
    data_dict = json.load(json_data)
    
c = conn.cursor()

for parking_all in data_dict_all['values']:
    for parking in data_dict['values']:
        if parking['nom']==parking_all['nom']:
            tuple_data = (parking['nom'], parking_all['voieentree'])
            c.execute("INSERT INTO Parkings (nom, rue) VALUES (?,?)", tuple_data)
            
conn.commit()
conn.close()
            