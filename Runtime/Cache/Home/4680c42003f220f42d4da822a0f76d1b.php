<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>首次参保问题</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<style>
ul { list-style:none; }
li {
	padding: 2% 2%;
	font-size: 80%;
	border-bottom: 1px solid #CCC;
}
</style>
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

<body class="home">
<div id="app" style="background:#FFF;">
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white;"><</a></div>
<div class="conttop_divmiddle" style="text-align: center;"><span style="font-size: 130%;">首次参保问题</span></div>
<div class="conttop_div3"><span style="float:right;"  onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></span>
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
<div id="banner"><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%"/></div>
<div id="bidu">
<ul>
<a href="<?php echo U('Problem/xiangqing');?>" style="color:black" ><li>同一个账号可以缴纳多少个参保人？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing2');?>" style="color:black" ><li>如果不能补缴，那我以前缴纳的社保都作废了吗？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing3');?>" style="color:black" ><li>是否可以一个月起缴？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing4');?>" style="color:black" ><li>前程保产品服务是否有户籍性质限制？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing5');?>" style="color:black" ><li>参保城市缴纳截点刚好在周末提交订单也可以吗？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing6');?>" style="color:black" ><li>购买前程保产品服务需要签服务合同吗？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing7');?>" style="color:black" ><li>是否可以通过前程保补缴社保？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing8');?>" style="color:black" ><li>参保需要准备哪些材料？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<a href="<?php echo U('Problem/xiangqing9');?>" style="color:black" ><li>为什么我的公积金和社保不能分开缴纳？<span style="float:right;"><img src="<?php echo (IMG); ?>jiantou.jpg" /></span></li></a>
<li></li>
</ul>
</div>
</div>

</body>
</html>