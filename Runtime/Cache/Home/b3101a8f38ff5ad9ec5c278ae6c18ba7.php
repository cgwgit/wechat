<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>已参保人</title>
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
<body style="position:relative;font-size: 100%;">
<div id="app" style="background:white;">
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white"><</a></div>
<div class="conttop_divmiddle" style="text-align: center;"><span style="font-size: 130%;">我的待参保人</span></div>
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
<div id="content">
<div id="content_nav">
<a href="<?php echo U('My/ycperson');?>"><div id="content_daicanbao_navleft">已参保</div></a>
<div id="content_daicanbao_navright">待参保</div>
</div>
<div id="content_cont" style="font-size: 90%">
<ul>
<?php if(is_array($ncperson)): foreach($ncperson as $key=>$v): ?><li style="padding: 2% 0">
   <a href="<?php echo U('Social/social_buy',array('cid' => $v['id']));?>" style="color: #999">&nbsp;&nbsp;&nbsp;<span style="color: #0C0;"><img src="<?php echo (IMG); ?>souso_tubao.png" width="25" height="24" style="float:left; padding-top:5px;" /><?php echo ($v["cname"]); ?></span><br/>
&nbsp;&nbsp;&nbsp;户口信息：<?php echo ($v["province"]); ?>,<?php echo ($v["citys"]); ?>,<?php echo ($v["county"]); ?>,<?php if($v["htype"] == 0 ): ?>城市<?php else: ?>农村<?php endif; ?></a><span style="float: right; color:#3C0;">
<a href="/index.php/Home/Cinfo/editperson/cid/<?php echo ($v["id"]); ?>" style="color:blue">
<img style="float:left; margin-right:7px;padding-right:5px " src="<?php echo (IMG); ?>bianji.jpg" /></a>
<a href="/index.php/Home/Cinfo/delperson/cid/<?php echo ($v["id"]); ?>" style="color:blue">
<img style="float:left;" src="<?php echo (IMG); ?>sahnchu.jpg" /></a>&nbsp;&nbsp;&nbsp; </span></li><?php endforeach; endif; ?>
</ul>
</div>
</div>
<?php if($ncperson == null): ?><p style="text-align:center; margin:3%;">暂无参保人</p><?php endif; ?>
<a href="<?php echo U('Cinfo/addperson');?>">
 <p style="text-align:center; margin-bottom:20%;"><input style="padding:1% 3%; color:#090;" type="button" value="添加参保人" /></p>
</a>
</div>
</div>
</div>
</body>
</html>