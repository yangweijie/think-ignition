# think-ignition
ignition for ThinkPHP
## 安装
`composer require yangweijie/think-ignition`

修改 app下provider

~~~
<?php
use think\ignition\ExceptionHandle;
use app\Request;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
];
~~~

