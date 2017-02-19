<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>前程保登录</title>
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
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white;"><</a></div>
<div class="conttop_divmiddle" style="text-align: center;"><span style="font-size: 130%;">前程保登录</span></div><div class="conttop_div3"><span style="float:right;" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></span>
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
<div id="logo"><img src="<?php echo (IMG); ?>zhuce_logo.jpg"  /></div>
<form action="<?php echo U('login');?>" method="post" name="form1">
<div id="centent">
<table width="100%" border="0">
  <tr>
    <td width="29%" height="29" align="center">账号：</td>
    <td width="71%"><input style="width:80%; height:24px; line-height:24px; border-radius:5px; color:#333;"  placeholder="请输入您的账号" type="text" name="username" required/></td>
  </tr>
   <tr>
    <td colspan="2" height="19"><hr/></td>
    </tr>
  <tr>
    <td height="29" align="center">密码：</td>
    <td><input style="width:80%; height:24px; line-height:24px; border-radius:5px; color:#333;" placeholder="请输入6-12位密码"  type="text" name="pwd" required/></td>
  </tr>
    <tr>
    <td colspan="2" height="19"><hr/></td>
    </tr>
</table>

</div>
<p class="P"><a href="<?php echo U('editpwd');?>" style="font-size: 80%">忘记密码？</a></p>
<div id="denglu"><input style=" padding:5% 23%; font-size:1em; color:#FFF; background:url(<?php echo (IMG); ?>zhuce_img6.jpg); border:0px;" type="submit" value="登录"/></div>
<div id="bottom">
<a href="<?php echo U('register');?>">
<img src="<?php echo (IMG); ?>denglu_img.jpg" width="100%" height="auto" />
</a>
</div>
</form>
</div>

</body>
</html>