RongCloud
======

融云服务端SDK在 Laravel 5 的封装包。

该拓展包想要达到在 Laravel 5 框架下，便捷使用融云服务端SDK的目的。

## 安装

```
composer require latrell/rongcloud dev-master
```

更新你的依赖包 ```composer update``` 或者全新安装 ```composer install```。


## 使用

要使用融云服务端SDK服务提供者，你必须自己注册服务提供者到Laravel服务提供者列表中。

找到 `config/app.php` 配置文件中，key为 `providers` 的数组，在数组中添加服务提供者。

```php
    'providers' => [
        // ...
        Latrell\RongCloud\RongCloudServiceProvider::class,
    ]
```

找到key为 `aliases` 的数组，在数组中注册Facades。

```php
    'aliases' => [
        // ...
        'RongCloud' => Latrell\RongCloud\Facades\RongCloud::class,
    ]
```

运行 `php artisan vendor:publish` 命令，发布配置文件到你的项目中。

修改配置文件 `config/latrell-rongcloud.php` 中的秘钥配置。

## 例子

### 获取 Token 方法

```php
	$user_id = 1;
	$name = '测试用户';
	$portrait_uri = 'http://demo.com/1.jpg';
	$token = RongCloud::getToken($userId, $name, $portrait_uri);
	logger('RongCloud token: ' . $token);
```

更多使用方法，请参考融云API文档：http://www.rongcloud.cn/docs/server.html
