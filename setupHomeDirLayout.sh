#!/bin/sh
mkdir /etc/skel/public_html
mkdir /etc/skel/db
sqlite3 /etc/skel/db/listdb < db/setuplistdb.sql
cp dbsetup/db.inc /etc/skel/db
cp -r edit /etc/skel/public_html
