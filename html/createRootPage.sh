apt-get -y install xsltproc
sh html/createRootPageXml.sh < userpasswords.txt | xsltproc - | cat > /var/www/html/index.html
