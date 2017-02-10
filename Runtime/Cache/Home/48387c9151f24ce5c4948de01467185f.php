<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>填写订单信息</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:70%; } 
li { padding:1% 0; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
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

</head>

<body style="position:relative;">
<div id="app" style="background:#DADADA;">
<div id="conttop">
<div class="conttop_div1"><</div>
<div id="shezhi_title">填写订单信息</div>
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
<p style=" padding:2% 2%; font-size: 70%;">您正在为<span style="color:#0C3;"><?php echo ($cinfo['cname']); ?></span>参保：</p>
<p style="padding: 1% 2%; background: #FFF; font-size: 70%;">费用明细</p>
<form method="post" action="<?php echo U('Pay/dingdanzhifu');?>">
<table style="background:#FFF; font-size:70%; padding: 0% 2%;" width="100%" border="0">
   <tr>
    <td height="10" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td width="50%" height="35">保费小计</td>
    <td width="50%" align="right"><?php echo ($cinfo['sum']); ?></td>
  </tr>
  <tr>
    <td  height="35">服务费</td>
    <td align="right"><?php echo ($cinfo['service']); ?></td>
  </tr>
  <tr>
    <td height="35">费用共计</td>
    <td align="right"><?php echo ($cinfo['count']); ?></td>
  </tr>
    <tr>
    <td height="10" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">实付款</td>
    <td align="right"><?php echo ($cinfo['count']); ?></td>
  </tr>
     <tr>
    <td height="10" colspan="2"><hr/></td>
    </tr>
    <tr>
    <td colspan="2" height="35">
    <a href="<?php echo U('Tinfo/addtinfo',array('cid' => $cinfo['cid']));?>" style="color: black"><li style="list-style: none">投保人信息<span style="color:#F00;">*</span> <span style="float: right;"><?php echo ($tinfo['tname']); ?> &nbsp;></span></li></a>
   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<input type="hidden" name="cid" value="<?php echo ($cid); ?>"></input>
<p style="text-align:center; padding:30px 0 25px 0; background:#FFF; font-size: 90%;"><input style="background:#F90; padding:10px; " type="submit" value="同意服务协议，立即结算"/></p>
  <p style="text-align: center; padding-top: 5px; background: #FFF; font-size: 80%;">《同意前程保服务协议》</p>
</form>
</div>
</body>
</html>