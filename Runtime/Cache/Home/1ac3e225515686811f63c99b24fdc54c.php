<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<title>社保计算</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<link rel="stylesheet" href="<?php echo (CSS); ?>cityPicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>jquery.monthpicker.css">
<style>
ul { list-style:none; }
ul li { padding:2% 0; border-bottom:1px solid #CCC; }
	
</style>
<script type="text/javascript" src="<?php echo (JS); ?>hDate.js"></script>
<link href="<?php echo (CSS); ?>hDate.css" rel="stylesheet" />

<!--城市-->
<script src="<?php echo (JS); ?>jquery-2.1.4.min.js"></script>
<script src="<?php echo (JS); ?>cityPicker.js"></script>
<!--时间-->
<script type="text/javascript" src="<?php echo (JS); ?>hDate.js"></script>
<link href="<?php echo (CSS); ?>hDate.css" rel="stylesheet" />
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
<body>
<div id="app" style="background:#fff;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white"><</a></div>
<div id="shezhi_title">社保计算</div>
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
<div id="box4" style="display:none; width:120px; background:#fdb813; margin:1% 2%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
<ul>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>home.png" />首页</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>news.png" />消息</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>fuwubiaozhi.png" />服务大厅</li>
</ul>
</div>
<div id="banner"><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%" /></div>
<form method="post" action="<?php echo U('Socialfare/socialfare');?>">
<div id="shebao_jisuanqi_middle" style="background:white;color: black;" >
<ul>
<a href="<?php echo U('Social/selectCity',array('jid' =>2));?>"><li>参保城市
<?php if($city!=null): ?><span style="float: right;"><?php echo ($city); ?></span><?php else: ?><span style="float: right;"><img src="<?php echo (IMG); ?>jiantou.jpg" />
</span><?php endif; ?>
</li>
</a>
<li><table width="100%" border="0">
  <tr>
    <td width="59%">户口性质</td>
    <td width="13%">农村</td>
    <td width="9%"><input type="radio" name="pay" value="1" /></td>
    <td width="13%">城市</td>
    <td width="6%"><input type="radio" name="pay" value="2" /></td>
  </tr>
</table>
</li>
<li>参保年月<input name="stime" style="width:60%; height:24px; font-size:1em; margin-left:2%; background-color:transparent; color:#000; border:0px;" id="Text1" onClick="calendar.show({ id: this })" type="text" readonly="readonly" placeholder="请选择参保年月" /></li>
<li>截止年月<input name="etime" style="width:60%; height:24px; font-size:1em; margin-left:2%; background-color:transparent; color:#000; border:0px;" id="Text1" onClick="calendar.show({ id: this })" type="text" readonly="readonly" placeholder="请选择截止年月" /></li>
<li>计算社保费用<span style="float:right;margin-top: 3px" onclick="openShutManager(this,'box')"><input type="checkbox" name="stype[]" value="1" ></input></span></li>
<li  id="box" style="display:none; background:#FFF; margin:1% 0; padding-bottom:3%;">
<ul>
<li>参保基数<span style="float:right;"><input style="width:25%; float:right;" type="text" name="sbase" value="3036"/></span></li>
</ul>
</li>
<li>计算公积金费用<span style="float:right;margin-top: 3px" onclick="openShutManager(this,'box1')"><input type="checkbox" name="stype[]" value="2"></input></span></li>
<li id="box1" style="display:none; background:#FFF; margin:1% 0; padding-bottom:3%;">
<ul>
<li>参保基数<span style="float:right;"><input style="width:25%; float:right;" type="text" name="gbase" value="3036"/></span></li>
</ul>
</li>
</ul>
<input type="hidden" name="city" value="<?php echo ($city); ?>"></input>
</div>
<p style="text-align:center; padding:30px 0 25px 0; background:#FFF; font-size: 90%;border: 0"><input style="background:#F90; padding:8px; " type="submit" value="计算保费"/></p>
</form>
</div>
</body>
</html>