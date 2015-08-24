## 一. 准备环境

一下是使用vagrant，享用统一开发环境，
你可以可以选择[手动配置环境](./install.md)

#### 1. 虚拟机

* windows 8.1或者10系统自带hyper-V，不用安装
* win7, MAC 或者 Linux 安装 [virtual-box](https://www.virtualbox.org/wiki/Downloads)

##### 2. vagrant
下载安装vagrant
[https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)

如果命令行输入 `vagrant` 有提示即安装完成



##  二. 添加box

启动 命令行（cmd）或者 终端（terminal）切换到以上目录;
如windows下: `cd /d D:\box\`  linux: ` cd ~/box/`

可以选择在线添加或者离线添加
网络好可以在线安装 (目前版本虚拟机大小是300M)
```
vagrant box add NewFuture/yunyin 
```
网络差下载[yunyin.box](http://pan.baidu.com/s/1bnGz4J1),放到文件下离线加入 
```
vagrant box add base yunyin.box
```


## 三. 初始化

```
vagrant init
```
修改配置

### 文件共享

虚拟机的`/var/www/html/` 映射到你的工作目录如`D:\pro\YunYinService\`

### 端口映射
本机的80（或者其他均可）端口映射到虚拟机的80端口

## 四. 启动

```
vagrant up
```


##

## 六. 其他说明

默认sudo 用户: `vagrant` 密码: `vagrant`

默认普通 用户: `yunyin`  密码： `yunyin` 

数据库管理为 `http://127.0.0.1/adminer` [时间域名和端口与本机配置有关]