# -*- mode: ruby -*-
# vi: set ft=ruby :

#一下是具体配置，#号为注释内容
Vagrant.configure(2) do |config|
  #改成你的box的名字
  config.vm.box = "yunyin"

  ### 网络配置 ###
  #端口映射
  config.vm.network "forwarded_port", guest: 80, host: 80 #web端口，如果主机80端口被占用换做其他
  # 使用静态,下面的注释，注释上面的
  # config.vm.network "private_network", ip: "192.168.33.10"
  # 链接到主机相同的网络，自动IP
  # config.vm.network "public_network"

  ### 文件共享 ###
  config.vm.synced_folder "这里(Vagrantfile 第18行)改成你放web的文件夹,如D:/YunYinSerVice/", "/var/www/html/" #主站目录 http://127.0.0.1/
  #config.vm.synced_folder "同上这是前端目录，如果有的话", "/var/www/front/"  #前端目录 http://127.0.0.1/front/

  ### 虚拟机配置 ####
  # virtualbox
  config.vm.provider "virtualbox" do |vb|
    #如果要开机显示界面,取消注释
    # vb.gui = true
    vb.memory = "768" #为虚拟机分配内存，可根据本机情况设置
  end

  ## 使用vagrant provision，自动初始化数据库和代码
  config.vm.provision "shell", inline: <<-SHELL
    # "重新导入下载导入数据库"
    wget https://raw.githubusercontent.com/YunYinORG/database/master/yunyin.sql -O /home/vagrant/yunyin.sql
    echo "DROP DATABASE IF EXISTS yunyin;CREATE DATABASE yunyin DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;">/home/vagrant/createdb.sql;
    sudo mysql -uroot mysql</home/vagrant/createdb.sql
    sudo mysql -uroot yunyin</home/vagrant/yunyin.sql
    # # "重新下载导入源文件"
    wget "https://github.com/YunYinORG/YunYinService/archive/master.zip" -O /home/vagrant/yunyin.zip
    unzip -o /home/vagrant/yunyin.zip -d /vagrant/
    cp /vagrant/YunYinService-master/conf/secret.common.ini /vagrant/YunYinService-master/conf/secret.local
  SHELL
end