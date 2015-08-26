云印统一开放环境部署
============
只需三步,几款享用云印统一开发环境！
------------------
以下是使用vagrant配置虚拟机，你也可以选择[手动配置环境](./install.md)

## 一. 准备环境

#### 1. 虚拟机

* windows 8.1或者10系统自带hyper-V，不用安装
* win7, MAC 或者 Linux 安装 [virtual-box](https://www.virtualbox.org/wiki/Downloads)

##### 2. 安装vagrant
下载最新vagrant 并安装
[https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)


##  二. 添加配置文件

#### 1.新建一个文件夹(如 `D:\vagrant\` 或者 `/home/me/vagrant/`)

注意：保证vagrant有完全的可读写权限

#### 2.添加配置文件 [Vagrantfile](./Vagrantfile)

在这儿下载[https://raw.githubusercontent.com/YunYinORG/vagrant/master/install.md](https://raw.githubusercontent.com/YunYinORG/vagrant/master/install.md)

放到刚才目录下(如`D:\vagrant\Vagrantfile` 或者 `/home/me/vagrant/Vagrantfile`) 

#### 3.修改其中配置的第18行

把共享文件修改到你的代码目录（web的根目录）下如
```ruby
config.vm.synced_folder "E:/git/YunYinSerVice/(本机文件夹必须存在，可以注释掉)", "/var/www/html/"
```

其他 配置可自行修改


## 三. 启动

启动 命令行（cmd）或者 终端（terminal）切换到上面的目录;

如windows下: `cd /d D:\yunyin\`  linux: ` cd ~/yunyin/`
```
vagrant up
```

首次运行会自动下载虚拟机box并加载(大概300M)

虚拟机正常启动并连接后

如果正常会自动部署最新的数据库和代码
并可以在 `http://vagrant.yunyin.org:8888/yunyin/`演示[端口为配置的端口]


**至此已经安装完成~**（如果顺利只需一行命令)


## 四. 其他命令

关机
```
vagrant halt
```
重新加载配置文件
```
vagrant reload 
```
休眠和恢复
```
vagrant suspend
vagrant resume
```
更多
```
vagrant list-commands
```

## 五. 其他说明

可以使用ssh  连接端口2222登录到虚拟机(正常情况你不需要这么做)

默认sudo 用户: `vagrant` 密码: `vagrant`

默认普通 用户: `yunyin`  密码： `yunyin`

数据库管理为 `http://vagrant.yunyin.org:8888/adminer` [时间域名和端口与本机配置有关]

vagrant 使用文档[https://docs.vagrantup.com/](https://docs.vagrantup.com/)