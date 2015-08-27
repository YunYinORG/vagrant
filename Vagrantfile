# -*- mode: ruby -*-
# vi: set ft=ruby :
### 在4到10行配置你的虚拟机
box_name         = "newfuture/yunyin"
localhost_folder = ""    #设置http://localhost/根目录,后端工作目录,与虚拟机同步共享（如D:/YunYinService/）
front_folder     = ""    #设置http://front.localhost/根目录,前端开发工作目录(同上)
local_web_port   = 8888  #web端口，如果主机映射端口被占用换做其他
auto_load_demo   = true  #首次启动自动下载配置最新代码
vm_memory        = 512   #为虚拟机分配内存，可根据本机增大如1024
show_vm_window   = false #开机后是否显示窗口,如果要打开改为 true

#一下是具体配置，#号为注释内容
Vagrant.configure(2) do |config|
  webhost="localhost"+(local_web_port==80 ? "" : ":#{local_web_port}")
  config.vm.box = box_name

  ### 网络配置 ###
  config.vm.network "forwarded_port", guest: 80, host: local_web_port
  # 使用静态,下面的注释，注释上面的
  #config.vm.network "private_network", ip: "192.168.33.10"
  # 链接到主机相同的网络，自动IP
  # config.vm.network "public_network"

  ### 文件共享 ###
  #web根目录
  if localhost_folder.empty?
    puts "\n你可修改Vagrantfile第5行的localhost_folder指向本机后端目录（web根目录）与虚拟机同步共享";
  else
    config.vm.synced_folder localhost_folder, "/var/www/html/" #http://localhost/
    puts "http://#{webhost}/根目录与主机#{localhost_folder}同步"
  end
  #前端目录
  if front_folder.empty?
    puts "\n你可修改Vagrantfile第6行front_folder指向本地的前端，与虚拟机共享同步";
  else
    config.vm.synced_folder front_folder,"/var/www/front/"  #http://front.localhost/
    puts "http://front.#{webhost}/与主机#{front_folder}同步"
  end

  ### 虚拟机配置 ####
  # virtualbox
  config.vm.provider "virtualbox" do |vb|
    vb.gui = show_vm_window
    vb.memory = vm_memory
  end

  if auto_load_demo
    puts "\n使用 'vagrant provision' 命令自动初始化数据库和重新部署演示代码"
    puts "最新演示代码在此http://yunyin.#{webhost}/测试"
    config.vm.provision "shell", inline: <<-SHELL
    #"重新导入下载导入数据库"
    wget https://raw.githubusercontent.com/YunYinORG/database/master/yunyin.sql -O /home/vagrant/yunyin.sql
    echo "DROP DATABASE IF EXISTS yunyin;CREATE DATABASE yunyin DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;">/home/vagrant/createdb.sql;
    sudo mysql -uroot mysql</home/vagrant/createdb.sql
    sudo mysql -uroot yunyin</home/vagrant/yunyin.sql
    #"重新下载导入源文件"
    wget "https://github.com/YunYinORG/YunYinService/archive/master.zip" -O /home/vagrant/yunyin.zip
    unzip -o /home/vagrant/yunyin.zip -d /vagrant/
    cp /vagrant/YunYinService-master/conf/secret.common.ini /vagrant/YunYinService-master/conf/secret.local
    SHELL
  end
  puts "\n顺利启动后一下调试地址可能对你有用:","http://#{webhost}/adminer下,在线管理数据库","http://#{webhost}/,后端调试地址","http://front.#{webhost}/,前端调试页",""
end