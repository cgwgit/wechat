<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>首页</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">

</head>

<body class="home">
<div id="app" style="background:#FFF;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg" /></div>
<div class="conttop_div2"><img src="<?php echo (IMG); ?>inddex_img.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div> 
<div id="slider">
	<ul class="slides clearfix">
		<li><img src="<?php echo (IMG); ?>index_img2.jpg" width="100%" /></li>
		<li><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%" /></li>
		<li><img src="<?php echo (IMG); ?>index_img2.jpg" width="100%" /></li>
		<li><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%" /></li>
	</ul>
	<ul class="controls">
	  <li></li>
		<li></li>
	</ul>
	<ul class="pagination">
		<li class="active"></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<script src="<?php echo (JS); ?>jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo (JS); ?>easySlider.js"></script>
<script type="text/javascript">
	$(function() {
		$("#slider").easySlider( {
			slideSpeed: 500,
			paginationSpacing: "15px",
			paginationDiameter: "12px",
			paginationPositionFromBottom: "20px",
			slidesClass: ".slides",
			controlsClass: ".controls",
			paginationClass: ".pagination"					
		});
	});
</script>
<div id="index_main">
<div id="index_main_img1"><a href="<?php echo U('Social/social_buy');?>" style="color:blue"><img src="<?php echo (IMG); ?>index-img1.jpg" /><br/>买社保</a></div>
<div id="index_main_img2"><a href="<?php echo U('Search/index');?>" style="color:blue"><img src="<?php echo (IMG); ?>index-img2.jpg" /><br/>查社保</a></div>
<div id="index_main_img3"><a href="<?php echo U('Socialfare/jisuan');?>" style="color:blue"><img src="<?php echo (IMG); ?>index-img3.jpg" /><br/>算保费</a></div>
</div>
<div id="index_main_middle">
<div class="index_main_middle_div"><img src="<?php echo (IMG); ?>index-img4.jpg" /></div> 
<div class="index_main_middle_div"><img src="<?php echo (IMG); ?>index-img5.jpg" /></div>
<div class="index_main_middle_div"><img src="<?php echo (IMG); ?>index-img6.jpg" /></div> 
<div class="index_main_middle_div"><img src="<?php echo (IMG); ?>index-img7.jpg" /></div>
</div>
<p style="margin:2% 0;">&nbsp;&nbsp;&nbsp;&nbsp;社保刊物</p>
  <div id="banner"><img src="<?php echo (IMG); ?>index_img8.jpg" width="100%" /></div>
  <p style="margin:2% 0;">&nbsp;&nbsp;&nbsp;&nbsp;社保用途</p>
<div id="index_main_bottom">
<div id="index_main_bottom_img1"><img src="<?php echo (IMG); ?>index-img9.jpg" /></div>
<div id="index_main_bottom_img2"><img src="<?php echo (IMG); ?>index-img10.jpg" /></div>
<div id="index_main_bottom_img3"><img src="<?php echo (IMG); ?>index-img11.jpg" /></div>
<div id="index_main_bottom_img4"><img src="<?php echo (IMG); ?>index-img12.jpg" /></div>
</div>
  <p><li style="font-size: 1.4em; color: #000; margin: 1em;">职工怎样缴纳养老保险费？</li></p>
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