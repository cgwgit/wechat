<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>参保方案</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:100%; } 
li { padding:1% 2%; }
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
        years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6,
        onMonthSelect: function(m, y) {
          console.log('Month: ' + m + ', year: ' + y);
        }
    });
	$('#monthly').monthpicker({
		years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6
	})
});
</script>


<script type="text/javascript">
$(function(){
	$('#monthpicker').monthpicker({
        years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6,
        onMonthSelect: function(m, y) {
          console.log('Month: ' + m + ', year: ' + y);
        }
    });
	$('#monthly1').monthpicker({
		years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6
	})
});
</script>

<script type="text/javascript">
$(function(){
	$('#monthpicker').monthpicker({
        years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6,
        onMonthSelect: function(m, y) {
          console.log('Month: ' + m + ', year: ' + y);
        }
    });
	$('#monthly2').monthpicker({
		years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6
	})
});
</script>

<script type="text/javascript">
$(function(){
	$('#monthpicker').monthpicker({
        years: [2017, 2018, 2019, 2020, 2021,2022,],
        topOffset: 6,
        onMonthSelect: function(m, y) {
          console.log('Month: ' + m + ', year: ' + y);
        }
    });
	$('#monthly3').monthpicker({
		years: [2017, 2018, 2019, 2020, 2021,2022,],
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
<body style="position:relative;font-size: 100%">
<div id="app" style="background:#DADADA; height: auto; ">
<form method="post" action="<?php echo U('Social/detail');?>">
<div id="conttop">
<div class="conttop_div1" ><a href="<?php echo U('Social/social_buy',array('cid' => $cinfo['id']));?>" style="color: white"><</a></div>
<div id="shezhi_title">设置<?php echo ($cinfo['cname']); ?>的参保方案</div>
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
</div>
<div id="dingdan_top" style="font-size: 100%"> &nbsp;&nbsp;&nbsp;参保城市：<?php echo ($cinfo['city']); ?><span style="float:right;">截点日：每月4号 &nbsp;&nbsp;&nbsp;</span></div>
<div id="shezhi_top">
<div id="shezhi_top_left">社保</div>
<div id="shezhi_top_right"><span style="float:right;margin-top: 3px"onclick="openShutManager(this,'box')"><input type="checkbox" name="stype[]" value="1"></input></span></div>

</div>
<div id="box" style="display:none; background:#FFF; margin:0% 0; padding-bottom:0%;">
<ul>
<li style="border-bottom:1px solid #CCC;">社保类型<span style="float:right;"><?php if($cinfo['htype'] == 0): ?>城市户口<?php else: ?>农村户口<?php endif; ?></span></li>
<li style="border-bottom:1px solid #CCC;">起缴月份<input type="text" name="stime" class="input" id="monthly" style="width:22%; height:13px; line-height:13px; padding:2px; float:right;"></li>
<li style="border-bottom:1px solid #CCC;">截止月份<input type="text" name="etime" class="input" id="monthly1" style="width:22%; height:13px; line-height:13px; padding:2px; float:right;"></li>
<li>参保基数<input type="text" name="sbase" placeholder="参保基数" style="width:22%; height:13px; line-height:13px; padding:2px; float:right;" /></li>
</ul>
</div>
<div id="datePlugin"></div>
<div id="shezhi_conter" style="padding-bottom:0%;">
<div id="shezhi_conter_left">公积金</div>
<div id="shezhi_conter_right"><span style="float:right;margin-top: 3px"; onclick="openShutManager(this,'box3')"><input type="checkbox" name="stype[]" value="2"></input></span></div>
</div>
<div id="box3" style="display:none;  background:#FFF; margin:0% 0;">
<ul>
<li style="border-bottom:1px solid #CCC;">起缴月份<input type="text" name="gstime" class="input" id="monthly2" style="width:22%; height:13px; line-height:13px; padding:2px; float:right;"></li>
<li style="border-bottom:1px solid #CCC;">截止月份<input type="text" name="getime"class="input" id="monthly3" style="width:22%; height:13px; line-height:13px; padding:2px; float:right;"></li>
<li>参保基数<input type="text" name="gbase" placeholder="公积金基数" style="width:22%; height:13px; line-height:13px; padding:2px; float:right;" /></li>

</ul>
</div> 
<div id="shezhi_bottom">
<input type="hidden" name="cid" value="<?php echo ($cinfo['id']); ?>"></input>
<li style="text-align:center;list-style: none;"><input type="submit" value="计算保费" style="padding:1% 15%; background:#fdb813;"/></li>
</div>
</form>
</div>
</body>
</html>