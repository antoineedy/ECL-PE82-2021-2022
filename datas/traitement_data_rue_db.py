#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Mar  8 19:25:21 2022

@author: nathanbauerle
"""

import csv
import sqlite3

conn = sqlite3.connect('base.db')

c = conn.cursor()

parkings = []

with open('bal_200046977.csv') as csvfile:
    spamreader = csv.reader(csvfile, delimiter=';')
    for row in spamreader:
        tuple_row = tuple(row)
        c.execute("INSERT INTO Rues (nom_rue, numero, suffixe, nom_commune, x, y, long, lat) VALUES (?,?,?,?,?,?,?,?)", tuple_row)
        
conn.commit()
conn.close()
