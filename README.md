# laravel_app
### 简介

--------
* 用户审核
* 有登陆和注册（用框架自动生成），注册登陆后可以在页面的导航条看到userAudit(adminOnly)按钮，点击进入即可看到已注册未审核的用户
* 在这之前，需要一些设置，看下面，另外，我是在windows下运行的，安装了wamp

### 安装

--------
1.克隆代码
```git
   git clone https://github.com/hhdidid/laravel_app.git
```

2.设置配置
```shell
    cp .env.example .env 
```

3.安装扩展包
安装`laravel`扩展
```shell
    composer install
```

4.生成key
```shell
    php artisan key:generate
```

5.配置数据库
```
  打开wamp的mysql控制台，创建一个数据库：create laravel5
  设置程序根目录下的.env文件，在文件前面可以找到：
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
  改最后三行，分别为数据库名，用户名，密码，我的密码为空，
    DB_DATABASE=laravel5
    DB_USERNAME=root
    DB_PASSWORD=
```

6.迁移数据库
```
   php artisan migrate
   我自己试验的时候执行改名了会有一堆东西，不过没关系，可以看到紧接着命令的下一行有Migration table created successfully.
```

7.开启服务
```
   php artisan serve
   访问http://127.0.0.1:8000，注册，登陆
   首先之前进行数据库迁移的时候框架就自动在laravel5库下新建了一个users表，在mysql控制台可以看到
   为了满足用户审核这个功能的需要，需要在users表新增两个字段：
   mysql> alter table users add column isAudited bool default 0;
   mysql> alter table users add column isAdmin bool default 0;
   然后对刚才的用户在mysql手动设置管理员权限：
   mysql> update users set isAdmin=1 where id=1;
   之后就可以多弄几个普通用户，进入userAudit页面进行审核
```
