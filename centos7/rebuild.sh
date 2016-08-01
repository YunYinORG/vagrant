#!/bin/sh
sudo service httpd stop
sudo systemctl stop mariadb

echo $'\n\t\tWelcome to YYF VM 1.3\nCentOS 7.1,PHP 7.0.5,Apache 2.4.6,MariaDB 5.5,yaf 3.0.3\nAbout YYF: https://github.com/YunYinORG/YYF\nYunYin VM: https://github.com/YunYinORG/vagrant\n' >/etc/motd
#echo "ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEA6NF8iallvQVp22WDkTkyrtvp9eWW6A8YVr+kz4TjGYe7gHzIw+niNltGEFHzD8+v1I2YJ6oXevct1YeS0o9HZyN1Q9qgCgzUFtdOKLv6IedplqoPkcmF0aYet2PkEDo3MlTBckFXPITAMzF8dJSIFo9D8HfdOV0IAdx4O7PtixWKn5y2hMNG0zQPyUecp4pzC6kivAIhyfHilFR61RGL+GPXQ2MWZWFYbAGjyiYJnAmCP3NOTd0jMZEnDkbUvxhMmBYSdETk1rRgm+R4LOzFUGaHqHDLKLX+FIPKcF96hrucXzcWyLbIbEgE98OHlnVYCzRdK8jlqm8tehUc9c9WhQ== vagrant insecure public key">/home/vagrant/.ssh/authorized_keys


# Next time yum will retrieve new list of mirrors & stuff
rm -rf /var/cache/yum

# Remove Virtualbox specific files
rm -rf /usr/src/vboxguest* /usr/src/virtualbox-ose-guest*
rm -rf *.iso *.iso.? /tmp/vbox /home/vagrant/.vbox_version

# remove interface persistent
for ifcfg in $(ls /etc/sysconfig/network-scripts/ifcfg-*)
do
    if [ "$(basename ${ifcfg})" != "ifcfg-lo" ]
    then
        sed -i '/^UUID/d'   /etc/sysconfig/network-scripts/ifcfg-enp0s3
        sed -i '/^HWADDR/d' /etc/sysconfig/network-scripts/ifcfg-enp0s3
    fi
done

# remove under tmp directory
rm -rf /tmp/*


# Cleanup log files
cat /dev/null > /var/adm/syslog
find /var/log -type f | while read f; do echo -ne '' > $f; done;


cat /dev/null > /root/.bash_history
cat /dev/null > /home/vagrant/.bash_history

echo 'Zeroing empty space ...'
dd if=/dev/zero of=/EMPTY bs=1M
rm -rf /EMPTY
echo 'done'
