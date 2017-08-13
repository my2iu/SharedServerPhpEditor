# Setup apt-get
apt-get update
apt-get -y upgrade

# Get Apache web server
apt-get -y install apache2

# Get mod_ruid2 for Apache so that PHP will run as the student
apt-get -y install libapache2-mod-ruid2

# Enable user public_html directories
a2enmod userdir

# Get PHP
apt-get -y install php7.0 libapache2-mod-php7.0 php7.0-xml

# Get sqlite to demonstrate basic database usage
apt-get -y install sqlite3 php7.0-sqlite3
