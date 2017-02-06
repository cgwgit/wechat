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
<div class="conttop_div1"><img src="<?php echo (IMG); ?>wodeqianchengbao2.jpg" /></div>
<div id="shebao_jisuanqi"><img src="<?php echo (IMG); ?>wodecanbaoren1.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="content">
<div id="content_nav">
<div id="content_daicanbao_navright">已参保</div>
<a href="<?php echo U('ncperson');?>"><div id="content_daicanbao_navleft">待参保</div></a>
</div>

<div id="content_cont">
<ul>
<li style="border-bottom:1px solid #CCC;">
<table width="100%" border="0">
  <tr align="center">
    <td>
      <td width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;姓名</td>
      <td width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;户口性质</td>
      <td width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;户口信息</td>
      <td width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;身份证号</td>
    </td>
  </tr>
  <?php if(is_array($yperson)): foreach($yperson as $key=>$v): ?><tr align="center">
     <td>
        <td width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["cname"]); ?></td>
        <td width="20%"><?php if($v.htype==0): ?>城镇<?php else: ?>
         农村<?php endif; ?>
        </td>
        <td width="20%"><?php echo ($v["city"]); ?></td>
        <td width="20%" align="center"><?php echo ($v["idnumber"]); ?></td>
    </td>
  </tr><?php endforeach; endif; ?>
</table>
</li>
</ul>
</div>
<?php if($yperson == null): ?><p style="text-align:center; margin:3%;">暂无参保人</p><?php endif; ?>
<a href="<?php echo U('Cinfo/addperson');?>">
 <p style="text-align:center; margin-bottom:20%;"><input style="padding:1% 3%; color:#090;" type="button" value="添加参保人" /></p>
</a>
</div>
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