<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>我的订单(待支付)</title>
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

<body style="position:relative;font-size: 80%">
<div id="app" style="background:white ">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>wodeqianchengbao2.jpg" /></div>
<div id="shebao_jisuanqi"><span style="font-size: 40%">我的订单</span></div>
<div class="conttop_div3"><a style="float:right;" href="###" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
</div>
</div>
<style type="text/css">
	a{
		color:black;
	}
</style>
<div id="box4" style="display:none; width:100px; background:#fdb813; margin:1% 2%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
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
<div id="content" style="font-size: 20%">
<div id="content_nav">
<a href="<?php echo U('order');?>">
  <div id="content_daicanbao_navleft">全部订单</div>
</a>
<div id="content_daicanbao_navright">待支付</div>
</div>
<div id="content_cont">
<ul>
  <?php if(is_array($orders)): foreach($orders as $key=>$v): ?><a href="/index.php/Home/My/orderdetail/id/<?php echo ($v["id"]); ?>" style="color:black">
   <li style="border-bottom:1px solid #CCC;">
   <table width="100%" border="0">
	  <tr align="center">
	     <td>
	        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["cname"]); ?>的参保订单</td>
	        <td width="50%"><?php if($v["order_status"] == 1): ?>已支付<?php else: ?>
	         待支付<?php endif; ?>
	        </td>
	    </td>
	  </tr>
	   <tr align="center">
	     <td>
	        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo (date("Y-m-d H:i:s",$v["ordertime"])); ?></td>
	        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($v["allcount"]); ?>
	        </td>
	    </td>
	  </tr>
</table>
</li>
 </a><?php endforeach; endif; ?>
</ul>
</div>
<?php if($orders == null): ?><p style="text-align:center; margin:3%;">暂无订单信息</p><?php endif; ?>
<a href="<?php echo U('Cinfo/addperson');?>">
 <p style="text-align:center; margin-bottom:20%;"><!-- <input style="padding:1% 3%; color:#090;" type="button" value="立即参保" /> --></p>
</a>
</div>
</div>
<!-- <style type="text/css">
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
</div> -->
</div>

</body>
</html>