<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>服务说明</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<style>
ul { list-style:none; }
li {	border-bottom: 1px solid #CCC;
	padding:1% 0px;
	font-size: 100%;
	color: #666; }
</style>
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
<div id="app" style="background:#FFF;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40"s /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="<?php echo U('Index/index');?>" style="font-size: 130%;color: white"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;">服务说明</span></div>
<div class="conttop_div3"><span style="float:right;margin-top: 5px"onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></span>
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
<div id="banner"><img src="<?php echo (IMG); ?>fuwuneirong.jpg" width="100%"/></div>
<div style="padding-left: 20px">
<p style="font-size: 100%; color: #0C3; font-weight: bold;">服务内容</p>
<p><ul>
<li>社保及公积金政策咨询</li>
<li>代办养老保险缴纳手续</li>
<li>代办医疗保险缴纳手续</li>
<li>代办生育保险缴纳手续</li>
<li>代办住房公积金缴纳手续</li>
<li>代办年度一次社保基数调整手续</li>
<li>代办年度一次公积金基数调整手续</li>
<li>提供全国主要城市的参保证明</li>
<li>提供公积金提取、按月转账申请盖章材料</li>
<li>协助个体办理当地政策规定可报销的生育医疗费报销</ul></p>
<p style="font-size: 100%; color: #0C3; font-weight: bold; padding:1% 0;">参保对象</p>
男18-55周岁（含）<br/>
女18-48周岁（含）
<p style="font-size: 100%; color: #0C3; font-weight: bold;padding:1% 0;">服务流程</p>
<p style="text-align:center;"><img src="<?php echo (IMG); ?>fuwuneirong2.jpg" /></p>
<p style="font-size: 100%; color: #0C3; font-weight: bold;padding:1% 0;">首次参保需提供哪些资料，医保卡怎么给我？</p>
<p style="font-size: 100%;color: #666;">不同城市的情况不同，客服会在您提交订单后的2个工作日内通过邮件和电话的方式告知您相关事宜，请及时查阅邮件，并保持手机畅通。</p>
<p style="font-size: 100%; color: #0C3; font-weight: bold;padding:1% 0;">政策说明</p>
<p style="font-size: 100%;color: #666;">注：因城市社保政策不同，部分城市的特殊要求说明如下：

社保和公积金强制缴纳：指社保与公积金须绑定一起购买，不可单独购买，且起缴时间须一致。

社保强制，公积金可选：指社保必须购买，公积金买不买都可以，但公积金的购买时间须在社保的购买时间范围内。

社保或公积金基数一致：指社保参保的基数必须与公积金缴纳的基数保持一致。</p>
</div>
</div>
</body>
</html>