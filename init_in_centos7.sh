#!/bin/bash

#update source
sudo yum install -y wget
sudo mv /etc/yum.repos.d/CentOS-Base.repo /etc/yum.repos.d/CentOS-Base.repo.backup
sudo wget https://lug.ustc.edu.cn/wiki/_export/code/mirrors/help/centos?codeblock=3 -O /etc/yum.repos.d/CentOS-Base.repo
#add php yum source
sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
sudo yum makecache
sudo yum -y upgrade

#tools
sudo yum install vim -y
sudo yum install git -y

# Apache
sudo yum install httpd -y
sudo systemctl start httpd.service
sudo systemctl enable httpd
sudo firewall-cmd --permanent --add-service=http

# php 7
# sudo yum -y upgrade
sudo yum install -y php70w php70w-opcache \
php70w-devel php70w-pdo_mysql  php70w-mcrypt php70w-mbstring

# YAF
cd ~
sudo yum install -y gcc
wget https://pecl.php.net/get/yaf-3.0.2.tgz
tar zxvf yaf-3.0.2.tgz
cd yaf-3.0.2/
phpize
./configure
make
sudo make install
#add yaf to php.ini
sudo sh -c "echo $'\nextension=yaf.so\n[yaf]\nyaf.environ=product'>>/etc/php.ini"
sudo sh -c "echo '<?php phpinfo();?>'>/var/www/html/index.php"
sudo service httpd restart

# MariaDB (MySQL)
sudo yum install -y mariadb mariadb-server
sudo systemctl start mariadb
sudo systemctl enable mariadb
#adminer mysql mangement online
sudo wget https://www.adminer.org/latest-mysql.php -O /var/www/html/adminer.php