<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>社保周刊</title>
<style> 
.div1 {
	width: 100%;
	color: #FFF;
	height: auto;
	overflow: hidden;
	position: absolute;
	z-index: 99;
	left: 1px;
	top: 5%;
}
.div2 {
	width: 100%;
	color: #FFF;
	height: auto;
	overflow: hidden;
	position: absolute;
	z-index: 100;
	left: 3px;
	bottom:2%;
	font-weight: bold;
	font-size: 100%;
}
ul { list-style:none; font-size:90%; } 
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
<div id="app" style="background:#fff;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="<?php echo U('Social/social_buy',array('cid' => $cinfo['id']));?>" style="color: white"><</a></div>
<div id="shezhi_title" style="font-size: 120%;color: white">社保周刊</div>
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

<div id="box4" style="display:none; width:90px; background:#fdb813; margin:1% 2%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
<ul>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>home.png" />首页</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>news.png" />消息</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>fuwubiaozhi.png" />服务大厅</li>
</ul>
</div>
<p style="text-align:center;">2017.02</p>
<div style="background:#FFF; margin:1% 3%; position:relative;">
 <img src="<?php echo (IMG); ?>zhoukan2.jpg" width="100%" />
<div class="div1"><p style="padding-left:20px;">第4期<br/>2017.02</p>
 </div> 
 <div class="div2">社保要做减法题，你的城市被点名了吗？</div>
  </div>
  <hr/>
  <p style="text-align:center;">2017.02</p>
<div style="background:#FFF; margin:1% 3%; position:relative;">
  <img src="<?php echo (IMG); ?>shebao_img1.jpg" width="100%"/>
<div class="div1"><p style="padding-left:20px;">第3期<br/>2017.02</p>
 </div> 
 <div class="div2">社保要做减法题，你的城市被点名了吗？</div>
  </div>
  <hr/>
  <p style="text-align:center;">2017.02</p>
<div style="background:#FFF; margin:1% 3%; position:relative;">
  <img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%" />
<div class="div1"><p style="padding-left:20px;">第2期<br/>2017.02</p>
 </div> 
 <div class="div2">社保要做减法题，你的城市被点名了吗？</div>
  </div>
  <hr/>
  <p style="text-align:center;">2017.02</p>
<div style="background:#FFF; margin:1% 3%; position:relative;">
  <img src="<?php echo (IMG); ?>shebaojisuan2.jpg" width="100%" />
 <div class="div1"><p style="padding-left:20px;">第1期<br/>2017.02</p>
 </div> 
 <div class="div2">社保要做减法题，你的城市被点名了吗？</div>
  </div>
  <hr/>
</div>
</body>
</html>