#!/bin/sh
sudo service httpd stop
sudo service mysqld stop

# Remove Postfix
systemctl stop postfix
systemctl disable postfix
yum remove -y postfix

# Remove Linux headers
yum -y remove *firmware avahi-autoipd avahi-libs avahi bluez-utils kudzu alsa-lib fxload rdma man-db microcode_ctl NetworkManager-team
yum autoremove -y
yum clean all
# Next time yum will retrieve new list of mirrors & stuff
rm -rf /var/cache/yum

# Remove Virtualbox specific files
rm -rf /usr/src/vboxguest* /usr/src/virtualbox-ose-guest*
rm -rf *.iso *.iso.? /tmp/vbox /home/vagrant/.vbox_version

# remove interface persistent
rm -f /etc/udev/rules.d/70-persistent-net.rules

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
sudo sh -c "cat /dev/null > /var/adm/syslog"
find /var/log -type f | while read f; do echo -ne '' > $f; done;


sudo sh -c "cat /dev/null > /root/.bash_history"
sudo sh -c "cat /dev/null > /home/vagrant/.bash_history"

echo 'Zeroing empty space ...'
dd if=/dev/zero of=/EMPTY bs=1M
rm -rf /EMPTY
echo 'done'
