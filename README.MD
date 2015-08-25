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



可以选择在线添加或者离线添加
网络好可以在线安装 (目前版本虚拟机大小是301.3M)
```
vagrant box add yunyin NewFuture/yunyin 
```
网络差下载[yunyin.box](http://pan.baidu.com/s/1jG9zLKa),放到文件下离线加入 
```
vagrant box add yunyin D:\yunyin.box (实际下载的位置)
```


## 三. 初始化

#### 1.新建一个文件夹yunyin(如 D:\yunyin)

#### 2.添加配置文件 Vagrantfile

下载[Vagrantfile](./Vagrantfile)在这儿[https://raw.githubusercontent.com/YunYinORG/vagrant/master/install.md](https://raw.githubusercontent.com/YunYinORG/vagrant/master/install.md)

放到yunyin目录下如(`D:\yunyin\Vagrantfile`)

#### 3.修改其中配置的第18行
把共享文件修改到你的代码目录（web的根目录）下如

```ruby
config.vm.synced_folder "E:/git/YunYinSerVice/(文件夹必须存在)", "/var/www/html/"
```

其他 配置可自行修改

## 四. 启动

启动 命令行（cmd）或者 终端（terminal）切换到;
如windows下: `cd /d D:\yunyin\`  linux: ` cd ~/yunyin/`
```
vagrant up
```

虚拟机正常启动并连接后 

会自动部署最新的数据库和代码`http://127.0.0.1/yunyin/`演示 


##

## 六. 其他说明

可以使用ssh  连接端口2222登录到虚拟机(正常情况你不需要这么做)

默认sudo 用户: `vagrant` 密码: `vagrant`

默认普通 用户: `yunyin`  密码： `yunyin` 

数据库管理为 `http://127.0.0.1/adminer` [时间域名和端口与本机配置有关]

vagrant 使用文档[https://docs.vagrantup.com/](https://docs.vagrantup.com/)