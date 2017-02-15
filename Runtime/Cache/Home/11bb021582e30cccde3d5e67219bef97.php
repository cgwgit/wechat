<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>关于我们</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<style>
p { text-indent:2em; padding:2%; }
ul { list-style:none; }
li {
	padding: 2% 2%;
	font-size: 90%;
	border-bottom: 1px solid #CCC;
}
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
<body class="home">
<div id="app" style="background:#FFF;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop" style="font-size: 130%">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white"><</a></div>
<div id="shezhi_title">关于我们</div>
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
<div id="bidu">
<ul>
<li style="text-align: center; font-size: 100%; font-weight: bold;">前程保简介</li>
<li><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%"/></li>
<li><p>超越前程“前程保”，是一个专为企业和个人提供社保和公积金代理缴纳的人力资源服务平台，主要提供代缴社保、代缴公积金、代发工资、人事外包等一站式服务。</p>

<p>超越前程“前程保”，主要依托于香港超越前程人力资源外包服务连锁公司在全国发展的12家连锁分公司；全国数万家企业客户和个人客户的资源优势；采用O2O模式；结合线下服务与线上平台的创新服务模式，实现了企业与个人足不出户在家就可以自助办理、异地办理社保与公积金缴纳。</p>
 
<p>在超越前程“前程保”的网络平台上缴纳社保和公积金，操作流程简单快捷、缴费清单明晰可见，而且在这里您不仅可以自由选择参保、续缴、补缴、补差、公积金缴纳等各项服务项目，还可以合法的自由任意选择单独缴纳一险、两险、三险、四险、五险的险种选择。各项服务套餐灵活性强，价格优惠。</p>
</li>
<li style="text-align:center;"><img src="<?php echo (IMG); ?>erweima.jpg" width="216" height="216" /></li>
</ul>
</div>
</div>

</body>
</html>