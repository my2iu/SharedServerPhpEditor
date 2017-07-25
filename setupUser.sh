#!/bin/sh
USER=$1
useradd -m $USER
echo -n $USER " " >> passwordlist
apg -n 1 | tee -a passwordlist > /home/$USER/public_html/edit/password
