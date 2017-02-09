<?php
header("content-type:text/html;charset=utf-8");
//定义网站的url根目录地址
define('SITE_URL', 'http://www.shebao.com/');
//定义前台的文件路径
define('JS', SITE_URL.'Public/Home/js/');
define('CSS', SITE_URL.'Public/Home/css/');
define('IMG', SITE_URL.'Public/Home/image/');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
//引入tp框架的接口文件
define('BASE_PATH','/ThinkPHP/Library/Vendor');
include("./ThinkPHP/ThinkPHP.php");