#!/usr/bin/env bash

#sudo sed -i 's/de_DE.UTF-8/en_US.UTF-8/g' /etc/sysconfig/i18n
#source /etc/sysconfig/i18n
#sudo sed -i 's/SELINUX=enforcing/SELINUX=disabled/g' /etc/sysconfig/selinux
#source /etc/sysconfig/selinux

#sudo yum install -y http://dl.iuscommunity.org/pub/ius/stable/CentOS/7/x86_64/ius-release-1.0-14.ius.centos7.noarch.rpm
#sudo yum -y update

#php 7.0
#sudo yum -y install php70u php70u-pdo php70u-mysqlnd php70u-opcache php70u-xml php70u-mcrypt php70u-gd php70u-devel php70u-mysql php70u-intl php70u-mbstring php70u-bcmath php70u-json php70u-iconv php70u-soap

#php 7.1
#sudo yum -y install php71u php71u-pdo php71u-mysqlnd php71u-opcache php71u-xml php71u-mcrypt php71u-gd php71u-devel php71u-mysql php71u-intl php71u-mbstring php71u-bcmath php71u-json php71u-iconv php71u-soap

#apache 2.2
#sudo yum -y install httpd

#mysql 5.7
#sudo wget http://dev.mysql.com/get/mysql57-community-release-el7-7.noarch.rpm
#udo yum -y localinstall mysql57-community-release-el7-7.noarch.rpm
#sudo yum -y install mysql-community-server

#mysql 5.6
#sudo wget http://repo.mysql.com/mysql-community-release-el7-5.noarch.rpm && sudo rpm -ivh mysql-community-release-el7-5.noarch.rpm
#sudo yum -y install mysql-server

#sudo chkconfig mysqld on
#sudo chkconfig httpd on

#sudo service mysqld restart
#sudo service httpd restart

#composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer