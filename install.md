服务器开发环境手动配置
------

安全考虑 **不可直接作为生成环境**
服务器 ```centos6.x 64位minimal``` 或者 ```centos7.x 64位minimal```


## 一. 安装工具

```
sudo yum install wget
sudo yum install net-tools
sudo yum install vim
sudo yum install gcc
sudo yum install git
```

## 二. AMP服务器

### 1. apache
```
sudo yum install httpd
```


### 2. 修改rpm更新源

 **centos 6.x**更新源 `sudo rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm`

 **centos7.x**更新源 `sudo rpm -Uvh https://mirror.webtatic.com/yum/el7/epel-release.rpm`和`sudo rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm`



#### 3. mysql5.5数据库服务
```
sudo yum install mysql55w mysql55w-server
```

### 4. php5.6和必须扩展
```
sudo yum install php56w.x86_64 php56w-common.x86_64 php56w-mbstring.x86_64 php56w-mcrypt.x86_64 php56w-mysql.x86_64 php56w-pdo.x86_64 php56w-devel php56w-opcache php56w-pecl-apcu
```

### 5. YAF
下载编译和安装yaf
```
wget http://pecl.php.net/get/yaf-2.3.4.tgz
tar zxvf yaf-2.3.4.tgz
cd yaf-2.3.4
phpize
./configure
make
make test
sudo make install
```

### 6. Node ,npm和webpack

```
sudo yum install nodejs npm
sudo npm install webpack
```

## 三. 修改配置

### 1. php配置

##### 编辑 php 配置文件 php.ini
```
sudo vim /etc/php.ini 
```

##### 显示php错误

[469]行修改 `display_errors=On`
[479]行修改 `display_startup_errors=On`

##### 添加yaf扩展:

```
extension=yaf.so
[yaf]
yaf.environ=dev #开发环境
```

### 2. 数据库管理

使用轻量级的 adminer

##### 下载 adminer.php
```
wget http://nchc.dl.sourceforge.net/project/adminer/Adminer/Adminer%204.2.2/adminer-4.2.2-mysql.php -o /var/www/adminer/index.php
```

### 3. httpd配置

#### 编辑httpd.conf文件

```
sudo vim /etc/httpd/conf/httpd.conf
```

#### 

开启httpd rewrite `allowOverWrite ALL`

添加adminer的别名管理 `Alias /adminer/ "/var/www/adminer/"` 
