#!/bin/sh
useradd -m $1
echo -n $2 > /home/$1/public_html/edit/password