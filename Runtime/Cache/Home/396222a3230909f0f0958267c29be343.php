<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>前程保登录</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
</head>
<body>
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>zhuce_img2.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
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
<p class="P"><a href="<?php echo U('My/editpwd');?>">忘记密码？</a></p>
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