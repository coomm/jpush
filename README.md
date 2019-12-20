# 极光推送扩展


## 安装和配置
修改项目下的composer.json文件，并添加：  
```
    "coomm/jpush":"dev-master"
```

然后执行```composer update```。
## 配置
在vendor/coomm/jpush/src/Lite.php修改短信配置
```php

```
## 注册
在/path/to/phalapi/config/di.php文件中，注册：  
```php
$di->jpush = function() {
	return new \Coomm\Jpush\Lite();
};
```

## 使用
```php
// 这只是使用样例,不应该直接用于实际生产环境中 !!

$push_payload = \PhalApi\DI()->jpush->push()
    ->setPlatform('all')
    ->addAllAudience()
    ->setNotificationAlert('Hi, JPush');
```


 ```


更多请参考官方文档