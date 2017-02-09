<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>我的前程保</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
</head>

<body style="background: #fdb813">
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>wodeqianchengbao2.jpg" /></div>
<div id="shebao_jisuanqi"><img src="<?php echo (IMG); ?>wodeqianchengbao1.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<header>
<!-- <div id="my_touxiang"><img src="<?php echo (IMG); ?>tu29241_3.jpg" /></div> -->
<!-- <font id="font">QC123456</font> -->
<!-- <div id="my_tubiao"><img src="<?php echo (IMG); ?>my_tubiao.png" /></div> -->
</header>
<!-- <div id="my_chanchengbao">
  <div id="my_chanchengbao_div1">余额 0.00元</div>
<div id="my_chanchengbao_div2">代金卷 0.00元</div>
</div> -->
<div id="shebao_jisuanqi_middle">
<form name="form1">
<a href="<?php echo U('My/Mysetinfo');?>" style="color: white"><div>&nbsp;&nbsp;&nbsp;用户名：<?php echo (session('username')); ?>
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('My/ycperson');?>" style="color: white"><div>&nbsp;&nbsp;&nbsp;我的参保人
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('My/order');?>" style="color: white">
<div> &nbsp;&nbsp;&nbsp;我的订单
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('Service/index');?>" style="color: white"><div> &nbsp;&nbsp;&nbsp;服务大厅
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
<a href="<?php echo U('Service/about');?>" style="color: white">
<div> &nbsp;&nbsp;&nbsp;关于
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
</a>
</form>
</div>
<div id="my_chanchengbao_bottom"><img src="<?php echo (IMG); ?>shebao_img4.png" /></div>
</div>
<style type="text/css">
	  #contbottom {
        /*background: #00A2EA;*/
        width: 100%;
        height: 55px;
        position: fixed;
        bottom: 0;
    }
</style>
<div id="contbottom" >
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