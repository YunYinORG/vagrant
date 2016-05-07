#!/bin/bash
# 开发环境自动配置
# for vagrant[develop environment]

#update source

#tools
#sudo yum install vim -y
#sudo yum install git -y

sudo hostnamectl --static set-hostname vagrant.yunyin.org
sudo sh -c "echo $'\n\t\tWelcome to YYF VM 1.0\nCentOS 7.1,PHP 7.0.5,Apache 2.4.6,MariaDB 5.5,yaf 3.0.5\nAbout YYF: https://github.com/YunYinORG/YYF\nYunYin VM: https://github.com/YunYinORG/vagrant\n' >/etc/motd"

# Apache
sudo yum install httpd -y
# sudo systemctl start httpd.service
sudo systemctl enable httpd
sudo firewall-cmd --permanent --add-service=http

# php 7
# sudo yum -y upgrade
sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
sudo rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
sudo yum install -y php70w php70w-pdo_mysql php70w-mcrypt php70w-mbstring

# YAF
sudo cp /vagrant/yaf.so /usr/lib64/php/modules/yaf.so
# #add yaf to php.ini
sudo sh -c "echo $'\nextension=yaf.so\n[yaf]\nyaf.environ=dev'>>/etc/php.ini"
sudo sh -c "echo '<?php phpinfo();?>'>/var/www/html/index.php"
# httpd config
sudo sh -c "echo $'ServerName vagrant.yunyin.org\n
DocumentRoot /vagrant/\n
<Directory \"/vagrant/\">\n
Options FollowSymLinks\n
AllowOverride all\n
Require all granted\n 
</Directory> \n
EnableSendfile Off\n
Alias /adminer /var/www/adminer.php'>/etc/httpd/conf.d/vagrant.conf"

# MariaDB (MySQL)
sudo yum install -y mariadb mariadb-server
# sudo systemctl start mariadb
sudo systemctl enable mariadb
#adminer mysql mangement online
sudo wget https://www.adminer.org/latest-mysql.php -O /var/www/adminer.php


#grub
sudo yum remove -y kernel-tools-*
sudo sh -c "echo $'GRUB_TIMEOUT=0\n
GRUB_HIDDEN_TIMEOUT=0\n
GRUB_DEFAULT=saved\n
GRUB_DISABLE_SUBMENU=true\n
GRUB_TERMINAL_OUTPUT=\"console\"\n
GRUB_CMDLINE_LINUX=\"crashkernel=auto rhgb quiet\"\n
GRUB_DISABLE_RECOVERY=\"true\"'>/etc/default/grub"
sudo grub2-mkconfig -o /etc/grub2.cfg

#clean up#!/bin/sh
sudo yum autoremove -y
sudo yum clean all

sudo service httpd stop
sudo service mysqld stop
sudo rm -r /usr/tmp/*
sudo rm -r /var/tmp/*
sudo rm -r /tmp/*

#log清理日志
sudo sh -c "cat /dev/null > /var/log/syslog"
sudo sh -c "cat /dev/null > /var/adm/syslog"
sudo sh -c "cat /dev/null > /var/log/wtmp"
sudo sh -c "cat /dev/null > /var/log/maillog"
sudo sh -c "cat /dev/null > /var/log/messages"
sudo sh -c "cat /dev/null > /var/log/openwebmail.log"
sudo sh -c "cat /dev/null > /var/log/dracut.log"
sudo sh -c "cat /dev/null > /var/log/secure"
sudo sh -c "cat /dev/null > /var/log/httpd/error_log"
sudo sh -c "cat /dev/null > /var/log/httpd/ssl_error_log"
sudo sh -c "cat /dev/null > /var/log/httpd/ssl_request_log"
sudo sh -c "cat /dev/null > /var/log/httpd/ssl_access_log"
sudo sh -c "cat /dev/null > /var/log/mysqld.log"
sudo sh -c "cat /dev/null > /root/.bash_history"
sudo sh -c "cat /dev/null > /home/vagrant/.bash_history"
sudo dd if=/dev/zero of=/empty bs=209715520
sudo rm /empty