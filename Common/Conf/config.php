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
    'AlidayuAppSecret' => ',
    //支付宝配置信息
     "alipay_service" => "create_direct_pay_by_user",//快速付款(即时到账接口)
     "alipay_account" => "zxapp@zxyl1688.com",//阿里巴巴的网上支付帐户
     "alipay_key" ",
     "alipay_partner" => "20885210571",//支付宝的合作伙伴
     //微信配置信息wx7cf3087121745de2 1399605202 j7YNOB49iF47y5Akyekvw5kH6r4F8KC6
     "appid" => 'wx41871b70677',
     "mchid" => '14802',
     "key" => '483a7b92d286d87b8b6238d1f',
);
