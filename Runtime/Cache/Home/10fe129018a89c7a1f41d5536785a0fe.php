<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>保费明细</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:100%; } 
li { padding:3% 2%; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">



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

<body style="position:relative;font-size: 100%">
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="<?php echo U('Social/cplan',array('cid' => $chargeinfo['cid']));?>" style="color: white"><</a></div>
<div id="shezhi_title">保费明细</div>
<div class="conttop_div3"><a style="float:right;" href="javascript:void(0)" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
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
<?php if($chargeinfo['ctype'] == 1): ?><div id="baofeimingxi_div">
		<ul>
			<li><span style="color:#0C3;">社保</span>费用明细</li>
			<a href="<?php echo U('chargedetail',array('cid' => $chargeinfo['cid'],'id' =>1));?>" style="color: black"><li><?php echo ($chargeinfo['stime']); ?>至<?php echo ($chargeinfo['etime']); ?> <span style="float:right;margin-top: 3px"><?php echo (number_format($chargeinfo['wuxian']*$chargeinfo['smonths'],2)); ?>&nbsp;&nbsp;&nbsp;></span></li></a>
			<li>费用小计 <span style="float:right;"><?php echo (number_format($chargeinfo['wuxian']*$chargeinfo['smonths'],2)); ?>/人</span></li>
		</ul>
	</div>
	<div id="baofeimingxi_div" style="padding:2% 0;">
	 &nbsp;&nbsp;保费共计：<span style="float:right; color:#3C3;"><?php echo (number_format($chargeinfo['wuxian']*$chargeinfo['smonths'],2)); ?>/人</span>
	</div>
<?php elseif($chargeinfo['ctype'] == 2): ?>
   <div id="baofeimingxi_div">
		<ul>
			<li><span style="color:#0C3;">公积金</span>费用明细</li>
			<a href="<?php echo U('chargedetail',array('cid' => $chargeinfo['cid'],'id' =>2));?>" style="color: black"><li><?php echo ($chargeinfo['gstime']); ?>至<?php echo ($chargeinfo['getime']); ?> <span style="float:right;margin-top: 3px"><?php echo (number_format($chargeinfo['gjj']*$chargeinfo['gmonths'],2)); ?>&nbsp;&nbsp;&nbsp;></span></li></a>
			<li>费用小计 <span style="float:right;"><?php echo (number_format($chargeinfo['gjj']*$chargeinfo['gmonths'],2)); ?>/人</span></li>
		</ul>
	</div>
	<div id="baofeimingxi_div" style="padding:2% 0;">
	 &nbsp;&nbsp;保费共计：<span style="float:right; color:#3C3;"><?php echo (number_format($chargeinfo['gjj']*$chargeinfo['gmonths'],2)); ?>/人</span>
	</div>
<?php else: ?>
<div id="baofeimingxi_div">
  <ul>
	<li><span style="color:#0C3;">社保</span>费用明细</li>
	<a href="<?php echo U('chargedetail',array('cid' => $chargeinfo['cid'],'id' =>1));?>" style="color: black"><li><?php echo ($chargeinfo['stime']); ?>至<?php echo ($chargeinfo['etime']); ?> <span style="float:right;margin-top: 3px"><?php echo (number_format($chargeinfo['wuxian']*$chargeinfo['smonths'],2)); ?>&nbsp;&nbsp;&nbsp;></span></li></a>
	<li>费用小计 <span style="float:right;"><?php echo (number_format($chargeinfo['wuxian']*$chargeinfo['smonths'],2)); ?>/人</span></li>
	<li><span style="color:#0C3;">公积金</span>费用明细</li>
	<a href="<?php echo U('chargedetail',array('cid' => $chargeinfo['cid'],'id' =>2));?>" style="color: black"><li><?php echo ($chargeinfo['gstime']); ?>至<?php echo ($chargeinfo['getime']); ?> <span style="float:right;margin-top: 3px"><?php echo (number_format($chargeinfo['gjj']*$chargeinfo['gmonths'],2)); ?>&nbsp;&nbsp;&nbsp;></span></li></a>
	<li>费用小计 <span style="float:right;"><?php echo (number_format($chargeinfo['gjj']*$chargeinfo['gmonths'],2)); ?>/人</span></li>
 </ul>
</div>
	<div id="baofeimingxi_div" style="padding:2% 0;">
	 &nbsp;&nbsp;保费共计：<span style="float:right; color:#3C3;"><?php echo (number_format($chargeinfo['gjj']*$chargeinfo['gmonths']+$chargeinfo['wuxian']*$chargeinfo['smonths'],2)); ?>/人</span>
	</div><?php endif; ?>
<div id="baofeimingxi_bottom">
<ul>
<li>参保需提供以下材料</li>
<li> &nbsp;身份证正反面复印件1份</li>
<li> &nbsp;上家单位离职证明原件1张（青岛续保人员必须提供）</li>
<li> &nbsp;就业失业登记原件及复印件（青岛城镇户籍必须提供）</li>
<li> &nbsp;青岛市就业表</li>
<li> &nbsp;温馨提示：企业法人将无法通过前程保申请社保</li>
</ul>
<a href="<?php echo U('orderinfo',array('cid' => $chargeinfo['cid']));?>"><li style="text-align:center;list-style: none;"><input type="button" value="立即参保" name="" style="padding:1% 15%; background:#fdb813;"/></li></a>
</div>
</div>
</body>
</html>