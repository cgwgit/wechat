<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>订单详情</title>
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
<div id="app" style="background:#DADADA;position:relative;font-size: 80%">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><</div>
<div id="shebao_title">订单详情</div>
<div class="conttop_div3"><a style="float:right;" href="###" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
</div>
</div>
<style type="text/css">
	a{
		color:black;
	}
</style>
<div id="box4" style="display:none; width:100px; background:#fdb813; margin:1% 2%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
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
<div id="dingdan_top"> 
   &nbsp;&nbsp;&nbsp;订单号：<?php echo ($detailinfo[0][order_sn]); ?>
      <?php if($detailinfo[0][order_status]==1): ?><span style="float:right;width: 15%">已支付 &nbsp;&nbsp;&nbsp;</span>
   	   <?php else: ?>
   	     	 <span style="float:right;width: 15%"">待支付 &nbsp;&nbsp;&nbsp;</span><?php endif; ?>
 </div>
<div id="dingdan_content">
<ul>
	<li>参保人：<?php echo ($detailinfo[0]["cname"]); echo ($detailinfo[0]["idnumber"]); ?></li>
	<li>户口信息：<?php echo ($detailinfo[0]["province"]); ?>,<?php echo ($detailinfo[0]["citys"]); ?>,<?php echo ($detailinfo[0]["county"]); ?>/<?php if($detailinfo[0][htype] == 0): ?>城市<?php else: ?>农村<?php endif; ?></li>
	<li style="border-bottom:1px solid #CCC;">参保地	：<?php echo ($detailinfo[0]["city"]); ?></li>
	<li>社保保费：2017.02.02—-2017.02.04 <span style="float:right;"><?php echo ($detailinfo[0]["chargecount"]); ?></span></li>
	<li style="border-bottom:1px solid #CCC;">服务费 <span style="float:right;"><?php echo ($detailinfo[0]["servicemoney"]); ?></span></li>
	<li style="border-bottom:2px solid #CCC;">实付款：<span style="float:right;"><?php echo ($detailinfo[0]["allcount"]); ?></span></li>
	<li>提交时间：<?php echo (date("Y-m-d H:i:s",$detailinfo[0]["ordertime"])); ?></li>
	<li style="text-align:center;">客服热线：400-66613331</li>
</ul>
</div>
</div>
</body>
</html>