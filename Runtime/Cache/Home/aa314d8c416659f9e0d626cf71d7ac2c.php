<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>我的前程保</title>
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
<body style="background: #fdb813;position:relative;font-size: 100%">
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white;font-size: 120%"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;">我的前程保</span></div>
<div class="conttop_div3"><a style="float:right;" href="###" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
</div>
</div>
<header>
<!-- <div id="my_touxiang"><img src="<?php echo (IMG); ?>tu29241_3.jpg" /></div> -->
<!-- <font id="font">QC123456</font> -->
<!-- <div id="my_tubiao"><img src="<?php echo (IMG); ?>my_tubiao.png" /></div> -->
</header>
<!-- <div id="my_chanchengbao">
  <div id="my_chanchengbao_div1">余额 0.00元</div>
<div id="my_chanchengbao_div2">代金卷 0.00元</div>
</div> -->
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
<div id="shebao_jisuanqi_middle">

<form name="form1">
<a href="<?php echo U('My/Mysetinfo');?>" style="color: white"><div>&nbsp;&nbsp;&nbsp;用户名：<?php echo (session('username')); ?>
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('My/ycperson');?>" style="color: white"><div>&nbsp;&nbsp;&nbsp;我的参保人
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('My/order');?>" style="color: white">
<div> &nbsp;&nbsp;&nbsp;我的订单
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('Service/index');?>" style="color: white"><div> &nbsp;&nbsp;&nbsp;服务大厅
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('Service/about');?>" style="color: white">
<div> &nbsp;&nbsp;&nbsp;关于
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
</form>
</div>
<div id="my_chanchengbao_bottom"><img src="<?php echo (IMG); ?>shebao_img4.png" /></div>
</div>
</div>

</body>
</html>