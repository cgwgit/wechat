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
<div class="conttop_div1"><img src="<?php echo (IMG); ?>zhuce_img2.jpg" /></div>
<div class="conttop_divmiddle">邮箱修改</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="logo"><img src="<?php echo (IMG); ?>zhuce_logo.jpg"  /></div>
<form action="<?php echo U('editemail');?>" method="post" name="form1">
<div id="centent">
<table width="100%" border="0">
    <tr>
    <td height="31" colspan="2" align="center"><font style="color:#F00; font-size:0.8em;">可作为电子账单寄送地址，建议填写！</font></td>
    </tr>
  <tr>
    <td width="26%" height="29" align="center">邮箱：</td>
    <td width="74%"><input style="width:80%; height:24px; line-height:24px; border-radius:5px; color:#000;" placeholder="请输入您的联系邮箱" type="text" name="email" required/></td>
  </tr>
  
    <tr>
    <td colspan="2" height="19"><hr/></td>
    </tr>
</table>

</div>
<p class="P"><a href="#">&nbsp;</a></p>
<div id="denglu"><input style=" padding:5% 23%; font-size:0.9em; color:#FFF; background:url(<?php echo (IMG); ?>zhuce_img6.jpg); border:0px;" type="submit" name="subimt" value="保存"/></div>
</form>

</div>

</body>
</html>