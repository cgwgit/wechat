<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
</head>

<body>
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg" /></div>
<div id="shebao_title"><img src="<?php echo (IMG); ?>shebao_9.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="banner"><img src="<?php echo (IMG); ?>shebao_img1.jpg" width="100%" /></div>
<div id="shebao_div">
<div class="shebao_divleft"><img src="<?php echo (IMG); ?>shebao_img2.jpg" /></div>
<div class="shebao_divleft"><img src="<?php echo (IMG); ?>shebao_img5.jpg" /></div>
</div>
<div id="shebao_login">
<form>
<table style="margin:0 auto;" width="80%" border="0">
   <tr>
    <td colspan="2" height="27"></td>
    </tr>
  <tr>
    <td width="26%" height="63" align="right">账号：</td>
    <td width="74%"><input style="width:80%; height:24px; line-height:24px; border-radius:5px; color:#333; background-color:#fdb813;"  value="请输入您的账号" type="text" name="usename" required/></td>
  </tr>
   <tr>
    <td colspan="2" height="31"></td>
    </tr>
  <tr>
    <td height="43" align="right">密码：</td>
    <td><input style="width:80%; height:24px; line-height:24px; border-radius:5px; color:#333; background-color:#fdb813;" value="请输入6-12位密码" type="text" name="usename" required/></td>
  </tr>
    <tr>
    <td colspan="2" height="24">&nbsp;</td>
    </tr>
</table>
</form>
</div>
<div id="denglu"><input style="width:100%; height:auto; padding:5% 0; font-size:1.2em; color:#FFF; background:url(<?php echo (IMG); ?>zhuce_img6.jpg); border:0px;" type="submit" name="subimt" value="登录"/>
</div>
<div id="contbottom">
<div class="contbottom_div1">
	<a href="<?php echo U('Index/index');?>">
	<img src="<?php echo (IMG); ?>zhuce_img7.jpg"  />
	</a>
</div>
<div class="contbottom_div2">
	<a href="<?php echo U('Social/social_buy');?>">
	<img src="<?php echo (IMG); ?>zhuce_img8.jpg"  />
	</a>
</div>
<div class="contbottom_div">
    <a href="<?php echo U('My/Mysetinfo');?>">
<img src="<?php echo (IMG); ?>zhuce_img9.jpg"  />
    </a>
</div>
<div class="contbottom_div"><img src="<?php echo (IMG); ?>zhuce_img10.jpg"  /></div>
<div class="contbottom_div">	
	<a href="<?php echo U('My/myinfo');?>">
	<img src="<?php echo (IMG); ?>zhuce_img11.jpg"  />
	</a>
</div>
</div>
</div>
</body>
</html>