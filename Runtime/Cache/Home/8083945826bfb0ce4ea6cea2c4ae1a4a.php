<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>订单支付</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:70%; } 
li { padding:3% 2%; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">

</head>

<body>
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><</div>
<div id="shezhi_title">订单支付</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<!-- <p style="text-align: center; padding:2% 0; color: #C60; font-size: 70%;">请在2017-03-04 24点前完成支付</p> -->
<p style="padding: 1% 0; background: #FFF; font-size: 70%;">订单号：<?php echo ($info['order_sn']); ?></p>
<p style="padding: 1% 0; background: #FFF; font-size: 70%;">待支付：<span style="color: #0F0; font-weight: bold; font-size: 70%;"><?php echo ($info['allcount']); ?></span></p>
<p  style="padding: 2% 0; margin-top:5px; background: #FFF; font-size: 70%; border-bottom:1px solid #CCC;">使用第三方支付：<?php echo ($info['allcount']); ?></p>
<form name="zhifu">
<div id="zhifu_div">
<div id="zhifu_div_left">
<img src="<?php echo (IMG); ?>weixintubiao.png" />微信支付<br/><span style="color: #999; font-weight: normal;">微信零钱包单日限额1万,超过1万的<br/>订单请使用银行卡支付</span>
<input style="float:right;" type="radio" name="weixin"/>
</div>
<div id="zhifu_div_left">
<img src="<?php echo (IMG); ?>zhufubao.png" />支付宝支付<br/><span style="color: #999; font-weight: normal;">微信零钱包单日限额1万,超过1万的<br/>订单请使用银行卡支付</span>
<input style="float:right;" type="radio" name="weixin"/>
</div>

<div id="zhifu_div_left">
<img src="<?php echo (IMG); ?>yinlianzhifu.png" />在线支付<br/><span style="color: #999; font-weight: normal;">微信零钱包单日限额1万,超过1万的<br/>订单请使用银行卡支付</span>
<input style="float:right;" type="radio" name="weixin"/>
</div>
</div>

<p style="text-align:center; padding-top:15px; background:#FFF; font-size: 70%;">支付遇到问题了？</p>

<p style="text-align:center; padding:80px 0 25px 0; background:#FFF; font-size: 90%;"><input style="background:#F90; padding:10px; " type="button" name="ezhifu" value="立即支付"/></p>
</form>
</div>
</body>
</html>