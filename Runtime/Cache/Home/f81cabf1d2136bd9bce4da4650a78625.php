<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>服务大厅</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:70%; } 
li { padding:2% 2%; border-bottom:1px solid #CCC; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>jquery.monthpicker.css">
<!--日期-->
<script type="text/javascript" src="<?php echo (JS); ?>jquery.min.riqi.js"></script>
<script src="<?php echo (JS); ?>jquery.monthpicker.js"></script>
<script type="text/javascript">
$(function(){
	$('#monthpicker').monthpicker({
        years: [2017,2016, 2015, 2014, 2013,],
        topOffset: 6,
        onMonthSelect: function(m, y) {
          console.log('Month: ' + m + ', year: ' + y);
        }
    });
	$('#monthly').monthpicker({
		years: [2017, 2016, 2015, 2014, 2013],
        topOffset: 6
	})
});
</script>



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
<body style="position:relative;">
<div id="app" style="background:#DADADA;">
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white;"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;">服务大厅</span></div>
<!-- <div id="shebao_title"><img src="<?php echo (IMG); ?>xinzengcanbaoren.jpg" /></div> -->
<div class="conttop_div3"><a style="float:right;" href="###" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
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


<div id="box4" style="display:none; width:90px; background:#fdb813; margin:1% 2%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
<ul>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>home.png" />首页</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>news.png" />消息</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>fuwubiaozhi.png" />服务大厅</li>
</ul>
</div>
<div id="fuwu">
<div id="fuwu_div1"><img src="<?php echo (IMG); ?>kefu.png" /><br/>在线客服</div>
<div id="fuwu_div1"><img src="<?php echo (IMG); ?>im4.png" /><br/>咨询热线</div>
<div id="fuwu_div1" style="border-right:0px;"><img src="<?php echo (IMG); ?>fankui.png" /><br/>我要反馈</div>
</div>

<div id="fuwu_m" style="font-size:100%; padding:0 0%;">
<p>
<ul>
<li><span style="color:#0C0;">热门问题</span></li>
<li>首次参保问题</li>
<li>退款问题</li>
<li>续保问题</li>
<li>支付问题</li>
<li>在保状态查询问题</li>
</ul>
</p>
</div>
</div>
</body>
</html>