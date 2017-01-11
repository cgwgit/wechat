<?php
header("content-type:text/html;charset=utf-8");
//定义网站的url根目录地址
define('SITE_URL', 'http://www.shebao.com/');
//定义前台的js文件路径
define('JS', SITE_URL.'Public/Home/js/');
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
// echo JS;die;
//引入tp框架的接口文件
include("./ThinkPHP/ThinkPHP.php");