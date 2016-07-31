#!/bin/bash
sudo sh -c "echo $'\n\t\tWelcome to YYF VM 1.1\nCentOS 7.1,PHP 7.0.5,Apache 2.4.6,MariaDB 5.5,yaf 3.0.3\nAbout YYF: https://github.com/YunYinORG/YYF\nYunYin VM: https://github.com/YunYinORG/vagrant\n' >/etc/motd"

# sudo yum install -y php70w-curl php70w-pdo_sqlite
sudo cp /vagrant/centos7/yaf.3.0.3.so /usr/lib64/php/modules/yaf.so
sudo cp /vagrant/centos7/php.ini /etc/php.ini
sudo sh -c "echo $'\nextension=yaf.so\n[yaf]\nyaf.environ=dev'>/etc/php.d/yaf.ini"

sudo cp /vagrant/adminer.php /var/www/adminer.php


sudo sh -c "echo '<center>默认页(显示服务器环境信息):通常看到此页面,说明服务器未能找到您请求的index页面</center><center>Default Page (PHP Info): Usually it means that server can not find index page</center><?php phpinfo();?>'>/var/www/info.php"
sudo sh -c "echo $'<LocationMatch \"^/+$\">
    Options -Indexes
    ErrorDocument 403 /phpinfo
</LocationMatch>
Alias /phpinfo /var/www/info.php'>/etc/httpd/conf.d/welcome.conf"


echo "ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEA6NF8iallvQVp22WDkTkyrtvp9eWW6A8YVr+kz4TjGYe7gHzIw+niNltGEFHzD8+v1I2YJ6oXevct1YeS0o9HZyN1Q9qgCgzUFtdOKLv6IedplqoPkcmF0aYet2PkEDo3MlTBckFXPITAMzF8dJSIFo9D8HfdOV0IAdx4O7PtixWKn5y2hMNG0zQPyUecp4pzC6kivAIhyfHilFR61RGL+GPXQ2MWZWFYbAGjyiYJnAmCP3NOTd0jMZEnDkbUvxhMmBYSdETk1rRgm+R4LOzFUGaHqHDLKLX+FIPKcF96hrucXzcWyLbIbEgE98OHlnVYCzRdK8jlqm8tehUc9c9WhQ== vagrant insecure public key">/home/vagrant/.ssh/authorized_keys
chown vagrant /home/vagrant/.ssh/authorized_keys
chmod 600 /home/vagrant/.ssh/authorized_keys
#clean
sudo service httpd stop
sudo systemctl stop mariadb

#sudo yum autoremove -y
#sudo yum clean all

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
