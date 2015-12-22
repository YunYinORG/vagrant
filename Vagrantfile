# -*- mode: ruby -*-
# vi: set ft=ruby :
### 在4到15行配置你的虚拟机
box_name         = "newfuture/yunyin"
localhost_folder = ""    #设置http://localhost/根目录,后端工作目录,与虚拟机同步共享（如D:/YunYinService/）
front_folder     = ""    #设置http://front.localhost/根目录,前端开发工作目录(同上)
py_folder        = ""    #python同步目录，支持wsgi的webpy
local_web_port   = 80    #web端口，如果主机映射端口被占用换做其他
local_py_port    = 8080  #手动设置webpy端口
init_print       = false #导入云印服务数据库和更置
init_find        = false #导入招领服务数据库和更新配置
auto_load_demo   = false #首自动加载配置次启动自动下载配置最新代码
vm_memory        = 512   #为虚拟机分配内存，可根据本机增大如1024
show_vm_window   = false #开机后是否显示窗口,如果要打开改为 true
message="\n\n\n\n\t\t\tYunYin 虚拟机环境已启动 V2.1.2"#启动显示提示
#一下是具体配置，#号为注释内容
Vagrant.configure(2) do |config|
  viewport=(local_web_port==80 ? "" : ":#{local_web_port}")
  webhost="yunyin.org"<<viewport
  config.vm.box = box_name
 
  ### 网络配置 ###
  config.vm.network "forwarded_port", guest: 80, host: local_web_port
  config.vm.network "forwarded_port", guest: 8080, host: local_py_port
  # 使用静态,下面的注释，注释上面的
  #config.vm.network "private_network", ip: "192.168.33.10"
  # 链接到主机相同的网络，自动IP
  # config.vm.network "public_network"

  ### 文件共享 ###
  #web根目录
  if localhost_folder.empty?
    message<<"\n你可修改Vagrantfile第5行的localhost_folder指向本机后端目录（web根目录）与虚拟机同步共享";
  else
    config.vm.synced_folder localhost_folder, "/var/www/html/" #http://localhost/
    message<< "\n云印API调试: http://vagrant.#{webhost}/\t代码与#{localhost_folder}同步"
  end
  #python目录
  if !py_folder.empty?
    config.vm.synced_folder py_folder, "/var/www/py/" #http://127.0.0.2/
    message<<"\nPython调试：http://localcard.#{webhost}\t代码与#{py_folder}同步"
  end
  #前端目录
  if !front_folder.empty?
    config.vm.synced_folder front_folder,"/var/www/front/"  #http://front.localhost/
    message<<"\n前端调试：http://localfront.#{webhost}/\t代码与#{front_folder}同步"
    #首次自动安装npm
    config.vm.provision "npm_install",type: "shell",inline: "cd /var/www/front/; npm install --no-bin-link",privileged:false
    #自动检测变化
    config.vm.provision "watch",type: "shell",inline: "cd /var/www/front/;webpack",run: "always",privileged:false
  end

  #首次导入demo和配置
  if auto_load_demo
    message<<"\n使用 'vagrant provision' 命令自动初始化数据库和重新部署演示代码"
    message<<"\n最新演示代码在此http://demo.localhost#{viewport}/测试"
    config.vm.provision "demo",type: "shell", inline: <<-SHELL
    #"重新导入下载导入数据库"
    wget https://raw.githubusercontent.com/YunYinORG/database/master/yunyin.sql -O /home/vagrant/yunyin.sql
    echo "DROP DATABASE IF EXISTS yunyin;CREATE DATABASE yunyin DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;">/home/vagrant/createdb.sql;
    sudo mysql -uroot mysql</home/vagrant/createdb.sql;sudo mysql -uroot yunyin</home/vagrant/yunyin.sql
    #"重新下载导入源文件"
    wget "https://github.com/YunYinORG/YunYinService/archive/master.zip" -O /home/vagrant/yunyin.zip
    unzip -o /home/vagrant/yunyin.zip -d /vagrant/
    mv /vagrant/YunYinService-master /vagrant/demo
    cp /vagrant/demo/conf/secret.common.ini /vagrant/demo/conf/secret.local
    SHELL
  end
  if init_print #云印服务初始化
    # puts("\n\t重新导入校园卡招领数据库\n")
    config.vm.provision "print",type: "shell", inline: <<-SHELL
    #"重新导入下载导入数据库"
    wget https://raw.githubusercontent.com/YunYinORG/database/master/yunyin.sql -O /home/vagrant/yunyin.sql
    echo "DROP DATABASE IF EXISTS yunyin;CREATE DATABASE yunyin DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;">/home/vagrant/createdb.sql;
    sudo mysql -uroot mysql</home/vagrant/createdb.sql;sudo mysql -uroot yunyin</home/vagrant/yunyin.sql
    #"更新配置"
    if [ ! -f "/var/www/html/conf/secret.local" ] && [ -f "/var/www/html/conf/secret.common.ini" ]; then
      sudo cp /var/www/html/conf/secret.common.ini /var/www/html/conf/secret.local
    fi 
    SHELL
  end
  if init_find #招领服务初始化
    # puts("\n\t重新导入校园卡招领数据库\n")
    config.vm.provision "find",type: "shell", inline: <<-SHELL
    #"重新导入下载导入数据库"
    wget https://raw.githubusercontent.com/YunYinORG/find/master/find.sql -O /home/vagrant/find.sql
    echo "DROP DATABASE IF EXISTS yunyinfind;CREATE DATABASE yunyinfind DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;">/home/vagrant/createfinddb.sql;
    sudo mysql -uroot mysql</home/vagrant/createfinddb.sql;sudo mysql -uroot yunyinfind</home/vagrant/find.sql
    #配置文件
    if [ ! -f "/var/www/py/config.py" ] && [ -f "/var/www/py/config.exmaple.py" ]; then
      sudo cp /var/www/py/config.exmaple.py /var/www/py/config.py
    fi 
    SHELL
  end

  ### 虚拟机配置 ####
  # virtualbox
  config.vm.provider "virtualbox" do |vb|
    vb.gui = show_vm_window
    vb.memory = vm_memory
  end

  message<<"\nMySQL在线管理：http://localhost/adminer#{viewport}\t可实时修改查看数据库"
  message<<"\n进入虚机方式：ssh vagrant@127.0.0.1:2222\t密码:vagrant（不常用）"
  message<<"\n"
  message<<"\n常用命令:"
  message<<"\n关机[vagrant halt] 重启[vagrant reload] 初始化配置[vagrant provision]"
  message<<"\n"
  message<<"\n\t\t（^_^）Enjoy your coding（^_^）\n \n \n"
  config.vm.post_up_message=message
end