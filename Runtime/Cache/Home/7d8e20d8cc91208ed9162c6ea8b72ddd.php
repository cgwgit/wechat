<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>险种收费明细</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:70%; } 
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
</head>

<body>
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<?php if($chargeinfo['sid'] == 1): ?><div id="conttop">
<div class="conttop_div1"></div>
<div id="shezhi_title">社保险种收费明细</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="xianzhong_div">
<ul>
<li>参保基数：<?php echo ($chargeinfo['sbase']); ?></li>
<li>险种 <span style="float:right;">费用(元)</span></li>
</ul>
</div>
<div id="xianzhong_div">
<table style="margin:0 auto;" width="98%" border="0">
  <tr>
    <td width="49%" height="35">养老保险</td>
    <td width="51%" align="right"><?php echo ($chargeinfo['endowment']); ?></td>
  </tr>
  <tr>
    <td height="35">医疗保险</td>
    <td align="right"><?php echo ($chargeinfo['yiliao']); ?></td>
  </tr>
  <tr>
    <td height="35">失业保险</td>
    <td align="right"><?php echo ($chargeinfo['unemployment']); ?></td>
  </tr>
  <tr>
    <td height="35">工伤保险</td>
    <td align="right"><?php echo ($chargeinfo['employment']); ?></td>
  </tr>
  <tr>
    <td height="35">生育保险</td>
    <td align="right"><?php echo ($chargeinfo['maternity']); ?></td>
  </tr>
  <tr>
    <td height="35">每月费用小计</td>
    <td align="right"><span style="color: #390;"><?php echo ($chargeinfo['wuxian']); ?></span></td>
  </tr>
  <tr>
    <td height="45" >当前时段费用小计</td>
    <td align="right"><?php echo ($chargeinfo['wuxian']); ?>X<?php echo ($chargeinfo['smonths']); ?>个月=<?php echo ($chargeinfo['wuxian']*$chargeinfo['smonths']); ?></td>
  </tr>
</table>
</div>
<?php elseif($chargeinfo['sid'] == 2): ?>
  <div id="conttop">
<div class="conttop_div1"></div>
<div id="shezhi_title">公积金险种收费明细</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="xianzhong_div">
<ul>
<li>参保基数：<?php echo ($chargeinfo['gbase']); ?></li>
<li>险种 <span style="float:right;">费用</span></li>
</ul>
</div>
<div id="xianzhong_div">
<table style="margin:0 auto;" width="98%" border="0">
  <tr>
    <td width="49%" height="35">公积金</td>
    <td width="51%" align="right"><?php echo ($chargeinfo['gjj']); ?></td>
  </tr>
  <tr>
    <td height="35">每月费用小计</td>
    <td align="right"><span style="color: #390;"><?php echo ($chargeinfo['gjj']); ?></span></td>
  </tr>
  <tr>
    <td height="45" >当前时段费用小计</td>
    <td align="right"><?php echo ($chargeinfo['gjj']); ?>X<?php echo ($chargeinfo['gmonths']); ?>个月=<?php echo ($chargeinfo['gjj']*$chargeinfo['gmonths']); ?></td>
  </tr>
</table>
</div><?php endif; ?>
</div>
</body>
</html>