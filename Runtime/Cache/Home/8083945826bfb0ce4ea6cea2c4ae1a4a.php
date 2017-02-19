<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>订单支付</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:100%; } 
li { padding:3% 2%; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">

</head>
<script type="text/javascript">
//===========================点击展开关闭效果====================================
function openShutManager(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){
var sourceObj = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
var targetObj = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
var openTip = oOpenTip || "";
var shutTip = oShutTip || "";
if(targetObj.style.display!="none"){
   if(shutAble) return;
   targetObj.style.display="none";
   if(openTip  &&  shutTip){
    sourceObj.innerHTML = shutTip; 
   }
} else {
   targetObj.style.display="block";
   if(openTip  &&  shutTip){
    sourceObj.innerHTML = openTip; 
   }
}
}
</script>
<body>
<div id="app" style="background:#DADADA;position:relative;font-size: 100%">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white"><</a></div>
<div id="shezhi_title">订单支付</div>
<div class="conttop_div3"><span style="float:right;"onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></span>
</div>
</div>
<style type="text/css">
	a{
		color:black;
	}
</style>
<div id="box4" style="display:none; width:120px; background:#fdb813; margin:1% 4%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
<ul>
<a href="<?php echo U('Index/index');?>">
   <li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>home.png" />首页</li>
</a>
<a href="<?php echo U('My/myinfo');?>">
   <li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>news.png" />我的前程保</li>
</a>
<a href="<?php echo U('Service/index');?>">
   <li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>fuwubiaozhi.png" />服务大厅</li>
</a>
</ul>
</div>
<!-- <p style="text-align: center; padding:2% 0; color: #C60; font-size: 100%;">请在2017-03-04 24点前完成支付</p> -->
<p style="padding: 1% 0; background: #FFF; font-size: 100%;">订单号：<?php echo ($info['order_sn']); ?></p>
<p style="padding: 1% 0; background: #FFF; font-size: 100%;">待支付：<span style="color: #0F0; font-weight: bold; font-size: 100%;"><?php echo ($info['allcount']); ?></span></p>
<p  style="padding: 2% 0; margin-top:5px; background: #FFF; font-size: 100%; border-bottom:1px solid #CCC;">使用第三方支付：<?php echo ($info['allcount']); ?></p>
<form method="post" action="<?php echo U('Pay/selectPay');?>">
<div id="zhifu_div">
<div id="zhifu_div_left">
<img src="<?php echo (IMG); ?>weixintubiao.png" />微信支付<br/><span style="color: #999; font-weight: normal;">微信零钱包单日限额1万,超过1万的<br/>订单请使用银行卡支付</span>
<input style="float:right;" type="radio" name="pay" value="1" />
</div>
<div id="zhifu_div_left">
<img src="<?php echo (IMG); ?>zhufubao.png" />支付宝支付<br/><span style="color: #999; font-weight: normal;">微信零钱包单日限额1万,超过1万的<br/>订单请使用银行卡支付</span>
<input style="float:right;" type="radio" name="pay" value="2" />
</div>

<!-- <div id="zhifu_div_left">
<img src="<?php echo (IMG); ?>yinlianzhifu.png" />在线支付<br/><span style="color: #999; font-weight: normal;">微信零钱包单日限额1万,超过1万的<br/>订单请使用银行卡支付</span>
<input style="float:right;" type="radio" name="weixin"/>
</div> -->
</div>

<a href="<?php echo U('Service/zhifuwenti');?>"><p style="text-align:center; padding-top:15px; background:#FFF; font-size: 100%;">支付遇到问题了？</p>
</a>
<input type="hidden" name="order_sn" value="<?php echo ($info['order_sn']); ?>"></input>
<input type="hidden" name="allcount" value="<?php echo ($info['allcount']); ?>"></input>
<p style="text-align:center; padding:30px 0 25px 0; background:#FFF; font-size: 100%;"><input style="background:#F90; padding:10px; " type="submit" value="立即支付"/></p>
</form>
</div>
</body>
</html>