#!/usr/bin/env bash

#sudo yum update -y

sudo sed -i 's/de_DE.UTF-8/en_US.UTF-8/g' /etc/sysconfig/i18n
source /etc/sysconfig/i18n
sudo sed -i 's/SELINUX=enforcing/SELINUX=disabled/g' /etc/sysconfig/selinux
source /etc/sysconfig/selinux

sudo yum -y update
sudo yum -y install epel-release
sudo wget https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
sudo wget https://centos6.iuscommunity.org/ius-release.rpm
sudo rpm -Uvh ius-release*.rpm
sudo wget http://repo.mysql.com/mysql-community-release-el6-5.noarch.rpm && sudo rpm -ivh mysql-community-release-el6-5.noarch.rpm
sudo yum -y update

#install php 7.0 and extensions
sudo yum -y install php70u php70u-pdo php70u-mysqlnd php70u-opcache php70u-xml php70u-mcrypt php70u-gd php70u-devel php70u-mysql php70u-intl php70u-mbstring php70u-bcmath php70u-json php70u-iconv php70u-soap

#install apache 2.2
sudo yum -y install httpd

#install mysql 5.6
sudo yum -y install mysql-server

sudo chkconfig mysqld on
sudo chkconfig httpd on

sudo service mysqld restart
sudo service httpd restart

#install node
cd /usr/src
sudo wget http://nodejs.org/dist/v0.10.4/node-v0.10.4.tar.gz
sudo tar zxf node-v0.10.4.tar.gz
cd node-v0.10.4
sudo ./configure
sudo make
sudo make install