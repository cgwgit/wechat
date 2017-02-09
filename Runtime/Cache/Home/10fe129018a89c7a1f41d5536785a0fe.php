<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>无标题文档</title>
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
<div id="conttop">
<div class="conttop_div1"><</div>
<div id="shezhi_title">保费明细</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="baofeimingxi_div">
<ul>
<li><span style="color:#0C3;">社保</span>费用明细</li>
<li>2017-03至2017-05 <span style="float:right;">3820.17</span></li>
<li>费用小计 <span style="float:right;">3820.17/人</span></li>
</ul>
</div>
<div id="baofeimingxi_div" style="padding:2% 0;">
 &nbsp;&nbsp;保费共计：<span style="float:right; color:#3C3;">3820.17/人</span>
</div>

<div id="baofeimingxi_bottom">
<ul>
<li>参保需提供以下材料</li>
<li> &nbsp;身份证正反面复印件1份</li>
<li> &nbsp;上家单位离职证明原件1张（青岛续保人员必须提供）</li>
<li> &nbsp;就业失业登记原件及复印件（青岛城镇户籍必须提供）</li>
<li> &nbsp;青岛市就业表</li>
<li> &nbsp;温馨提示：企业法人将无法通过前程保申请社保</li>
</ul>
</div>
<div id="baofeimingxi_foot"><font style="padding:5% 30%; background:#fdb813; border-radius:10px;">立即参保</font></div>
</div>
</body>
</html>