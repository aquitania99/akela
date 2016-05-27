#!/bin/bash

# Initial Update + Install basic packages
echo "Updating and Installing Stuff!"
sudo apt-get update
sudo apt-get install -y nginx \
nginx-extras \
php5-common \
php5-fpm \
php5-apcu \
php5-cli \
php5-curl \
php5-gd \
php5-imagick \
php5-imap \
php5-intl \
php5-json \
php5-mcrypt \
php5-memcached \
php5-mysql \
git \
python-software-properties \
build-essential \
debconf-utils \
curl

sudo apt-get update
sudo apt-get clean

echo "Preparing MySQL"
cd ~/
echo "Home Sweet Home..." pwd
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password Pass@word01"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password Pass@word01"

echo "Installing MySQL"
sudo apt-get install -y mysql-server mysql-utilities percona-toolkit

echo "Create Seeonee DB"
mysql -u root -pPass@word01 -e "create database seeonee_db";

# Setting up Servers and Services
echo "Configuring NGINX!"
cd /vagrant/provisionStuff/
echo "Inside the Provisioning Folder...."
sudo scp -r certs /etc/nginx/
sudo scp nginx.conf /etc/nginx/nginx.conf
sudo scp akela /etc/nginx/sites-available/akela
sudo ln -s /etc/nginx/sites-available/akela /etc/nginx/sites-enabled/akela
sudo rm /etc/nginx/sites-enabled/default

echo "Configuring PHP5-FPM"
sudo scp php.ini /etc/php5/fpm/php.ini
sudo scp php-cli.ini /etc/php5/cli/php.ini
sudo scp www.conf /etc/php5/fpm/pool.d/

# CI + Deployment Stuff

echo "Installing Ruby for CodeDeploy Agent..."
sudo apt-get install -y ruby2.0 \

apt-get autoremove

echo "Installing COMPOSER"
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

sudo chown -R vagrant:vagrant ~/.composer

echo "Creating SWAP Space!"
sudo fallocate -l 2G /swapfile

echo "Verify and Enable SWAP"
ls -lh /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile
sudo swapon -s
free -m
sudo echo "/swapfile   none    swap    sw    0   0" >> /etc/fstab
echo "Restart Web Services"
sudo service nginx restart && sudo service php5-fpm restart

echo "Create vendors folder in Symfony"
cd /var/akela
composer update

echo "Create Symfony bootstrap file"
php vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/bin/build_bootstrap.php

echo "Run Symfony commands..."
cd /var/akela/bin
#php console doctrine:schema:update --force
php console cache:clear
php console assetic:dump
