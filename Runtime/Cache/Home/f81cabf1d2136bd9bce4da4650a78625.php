<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>服务大厅</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<style type="text/css">
    a:link,a:visited{
        color:black;
    }
    ul li span{
    	text-align: right;
        line-height: 45px;
    }
</style>
</head>

<body style="background: #fdb813">
<div id="app">
<!-- <div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div> -->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>wodeqianchengbao2.jpg" /></div>
<div id="shebao_jisuanqi"><img src="<?php echo (IMG); ?>zhanghao_title.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="zhanghao_content" style="height: 290px">
<ul>
<a href=""><li>首次参保问题<span style="text-align: right; line-height: 45px">></span></li></a>
<a href=""><li>退款问题<span style="text-align: right; line-height: 45px">></span></li></a>
<a href=""><li id="btn1">续保问题<span style="text-align: right; line-height: 45px">></span></li></a>
<li id="btn2"><a href="">支付问题</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: right; line-height: 45px">></span></li>
<li><a href="">在保状态查询问题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: right; line-height: 45px">></span></a></li>
</ul>
</div>
<div id="zhanghao_tuichu">
 </div>
<style type="text/css">
	  #contbottom {
        /*background: #00A2EA;*/
        width: 100%;
        height: 60px;
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