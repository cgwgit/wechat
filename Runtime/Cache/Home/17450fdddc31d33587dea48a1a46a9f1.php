<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>投保人信息设置</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:100%; } 
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

<body style="position:relative;font-size: 100%">
<div id="app" style="background:#DADADA;">
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white"><</a></div>
<div id="shezhi_title">投保人信息设置</div>
<div class="conttop_div3"><a style="float:right;" href="###" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
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
<p style=" padding:2% 2%; font-size: 70%;">下单成功后服务人员与您确认参保信息，以下信息将作为您的联系方式，建议您填完整：</p>
<form method="post" action="<?php echo U('savetinfo');?>">
<table style="background:#FFF; font-size:70%; padding: 0% 2%;" width="100%" border="0">
  <tr>
    <td width="50%" height="35">投保人姓名<span style="color:#F00;">*</span></td>
    <td width="50%" align="right"><input style="width:50px; text-align:right; border:0px;margin-right: 8px" type="text" name="tname" value="<?php echo ($tinfo['tname']); ?>"/></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td  height="35">投保人电话</td>
    <td align="right"><?php echo ($tinfo['tel']); ?></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">联系邮箱<span style="color:#F00;">*</span></td>
    <td align="right"><input style="width:130px; text-align:right; border:0px;margin-right: 12px" type="text" name="email" value="<?php echo ($tinfo['email']); ?>"/></td>
  </tr>
    <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
   <tr>
   <ul style="list-style: none; margin:0; padding: 0;">
     <td colspan="2" height="20" style="margin: 0;padding: 0">
    <a href="<?php echo U('editaddress',array('cid' =>$cid));?>" style="color: black"><li style="list-style: none">投保人信息<span style="color:#F00;">*</span> <span style="float: right;"><?php echo ($area[0]['name']); echo ($area[1]['name']); echo ($area[2]['name']); ?> &nbsp;></span></li>
    </a>
   </td>
   </ul>
  </tr>
     <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">详细地址<span style="color:#F00;">*</span></td>
    <td align="right"><input style="width:120px; text-align:right; border:0px;margin-right: 5px" type="text" name="detailarea" value="<?php echo ($tinfo['detailarea']); ?>"/></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">紧急联系人姓名</td>
    <td align="right"><input style="width:120px; text-align:right; margin-right: 5px" type="text" name="jname" value="<?php echo ($tinfo['jname']); ?>"/></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
    <tr>
    <td height="35">紧急联系人电话</td>
    <td align="right"><input style="width:120px; text-align:right; margin-right: 5px" type="text" name="jtel" value="<?php echo ($tinfo['jtel']); ?>"/></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
</table>
<input type="hidden" name="cid" value="<?php echo ($cid); ?>"></input>
<p style="text-align:center; padding:30px 0 25px 0; background:#FFF; font-size: 90%;">
<a href="<?php echo U('Social/orderinfo',array('cid' => $cid));?>"><input style="background:#F90; padding:10px 50px; " type="button" name="quxiao" value="取消"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<input style="background:#F90; padding:10px 50px; " type="submit" value="确认"/></p>
</form>
</div>
</body>
</html>