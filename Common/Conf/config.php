<?php
return array(
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'wechat',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
     //设置跟踪日志(以便查看function.php文件是否被引入)
    'SHOW_PAGE_TRACE' => true,
    //阿里大鱼短信配置信息
    'AlidayuAppKey' => '',
    'AlidayuAppSecret' => '',
    //支付宝配置信息
     "alipay_service" => "create_direct_pay_by_user",
     "alipay_account" => "zxapp@zxyl1688.com",
     "alipay_key" => "8lq2munnhk60fmirb9hpfk0jnvr1n56y",
     "alipay_partner" => "2088521057130925",
     //微信配置信息
     "appid" => '',
     "mchid" => '',
     "key" => '',
);