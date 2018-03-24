# laravel_app
### 基本功能

--------
* 用户审核

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
