#!/bin/sh

# sudo sh -c "echo $'ServerName vagrant.yunyin.org\n
# DocumentRoot /vagrant/\n
# <Directory \"/vagrant/\">\n
# Options FollowSymLinks\n
# AllowOverride all\n
# Require all granted\n 
# </Directory> \n
# EnableSendfile Off\n
# Alias /adminer /var/www/adminer.php'>/etc/httpd/conf.d/vagrant.conf"

# sudo yum remove -y kernel-tools-*
# sudo sh -c "echo $'GRUB_TIMEOUT=0\n
# GRUB_HIDDEN_TIMEOUT=0\n
# GRUB_DEFAULT=saved\n
# GRUB_DISABLE_SUBMENU=true\n
# GRUB_TERMINAL_OUTPUT=\"console\"\n
# GRUB_CMDLINE_LINUX=\"crashkernel=auto rhgb quiet\"\n
# GRUB_DISABLE_RECOVERY=\"true\"'>/etc/default/grub"
# sudo grub2-mkconfig -o /etc/grub2.cfg

#clean up
sudo yum clean all
sudo service httpd stop
sudo service mysqld stop
sudo rm -r /usr/tmp/*
sudo rm -r /var/tmp/*
sudo rm -r /tmp/*

#log清理日志
sudo sh -c "cat /dev/null > /var/run/utmp"
sudo sh -c "cat /dev/null > /var/log/lastlog"
sudo sh -c "cat /dev/null > /var/log/syslog"
sudo sh -c "cat /dev/null > /var/log/messages"
sudo sh -c "cat /dev/null > /var/log/maillog"
sudo sh -c "cat /dev/null > /var/log/openwebmail.log"
sudo sh -c "cat /dev/null > /var/log/secure"
sudo sh -c "cat /dev/null > /var/log/xferlog"
sudo sh -c "cat /dev/null > /var/log/auth.log"
sudo sh -c "cat /dev/null > /var/log/yum.log"
sudo sh -c "cat /dev/null > /var/log/brcm-iscsi.log"
sudo sh -c "cat /dev/null > /var/log/btmp"
sudo sh -c "cat /dev/null > /var/log/cron"
sudo sh -c "cat /dev/null > /var/log/dmesg"
sudo sh -c "cat /dev/null > /var/log/faillog"
sudo sh -c "cat /dev/null > /var/log/anaconda.log"
sudo sh -c "cat /dev/null > /var/log/anaconda.syslog"
sudo sh -c "cat /dev/null > /var/log/anaconda.xlog"
sudo sh -c "cat /dev/null > /etc/httpd/logs/access_log"
sudo sh -c "cat /dev/null > /etc/httpd/logs/error_log"
sudo sh -c "cat /dev/null > /var/log/wtmp"
sudo sh -c "cat /dev/null > /var/log/boot.log"
sudo sh -c "cat /dev/null > /var/log/brcm-iscsi.log"
sudo sh -c "cat /dev/null > /var/log/php-fpm.log"
sudo sh -c "cat /dev/null > /var/log/pureftpd.log"
sudo sh -c "cat /dev/null > /var/log/scrollkeeper.log"
sudo sh -c "cat /dev/null > /var/log/yum.log"
sudo sh -c "cat /dev/null > /var/log/httpd/access_log"
sudo sh -c "cat /dev/null > /var/log/httpd/access.log"
sudo sh -c "cat /dev/null > /var/log/httpd/error_log"
sudo sh -c "cat /dev/null > /var/log/httpd/error.log"
sudo sh -c "cat /dev/null > /var/log/httpd/ssl_error_log"
sudo sh -c "cat /dev/null > /var/log/httpd/ssl_request_log"
sudo sh -c "cat /dev/null > /var/log/httpd/ssl_access_log"
sudo sh -c  "cat /dev/null > /root/.bash_history"
sudo sh -c  "cat /dev/null > /home/vagrant/.bash_history"

sudo dd if=/dev/zero of=/empty bs=209715520
sudo rm /empty

sudo sh -c  "cat /dev/null > /root/.bash_history"
sudo sh -c  "cat /dev/null > /home/vagrant/.bash_history"