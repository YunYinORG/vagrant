云印统一开放环境自动同步部署
============
只需三步,即可使用云印统一开发环境！
------------------

## 一. 准备环境

#### 1. 虚拟机

下载安装 [virtual-box](https://www.virtualbox.org/wiki/Downloads)

#### 2. 安装vagrant
下载最新vagrant 并安装
[https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)


##  二. 添加配置文件
更多说明查看wiki
#### 1.clone此仓库到vagrant目录

#### 2按要求修改`Vagrantfile`.配置

## 三. 启动

启动 命令行（cmd）或者 终端（terminal）切换到上面的目录;
如windows下: `cd /d D:\vagrant\`  linux: ` cd ~/vagrant/`
```
vagrant up
```
首次运行会自动下载虚拟机box并加载(大概300M)；
虚拟机正常启动并连接后；
如果正常会自动部署最新的数据库和代码

**至此已经安装完成~**（如果顺利只需一行命令)
