<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>社保购买</title>
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

<body style="position:relative;font-size: 100%">
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="<?php echo U('Index/index');?>" style="font-size: 130%;color: white"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;"> 买社保</span></div>
<div class="conttop_div3"><span style="float:right;margin-top: 5px"onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></span>
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
<div id="shebao_div" style="background: #FFF; margin: 1.5% 0; padding: 1% 0; font-size: 90%;"><a href="<?php echo U('Service/fuwushuoming');?>" style="color: black">
&nbsp;&nbsp;服务说明</span> &nbsp;<span style="color: #F00; font-size: 90%;">社保/公积金同时缴纳仅收一次服务费</span></a></div>
<?php if($cinfo['id'] == NULL): ?><a href="<?php echo U('Cinfo/addperson');?>">
<div id="jiaoshebao" style="background:#FFF;">
<div id="jiaoshebao_img"><img src="<?php echo (IMG); ?>16F58PICk6m_1024_03.jpg" /></div>
<div id="jiaoshebao_zi">新增参保人</div><br/>
</div>
</a>
<?php else: ?>
<div id="jiaoshebao" style="background:#FFF;">
<div id="jiaoshebao_img"><img src="<?php echo (IMG); ?>16F58PICk6m_1024_03.jpg" /></div>
<div id="jiaoshebao_zi">参保人</div><br/>
</div>
<div id="jiaoshebao_list">
<ul>
<a href="<?php echo U('Cinfo/selectperson');?>"><li> <p style="color:green"> &nbsp;&nbsp;<?php echo ($cinfo['cname']); ?></p>&nbsp;&nbsp;户口信息:&nbsp;&nbsp;<?php echo ($cinfo['province']); ?>,<?php echo ($cinfo['citys']); ?>,<?php echo ($cinfo['county']); ?>,<?php if($cinfo['htype'] == 0 ): ?>城市<?php else: ?>农村<?php endif; ?></li></a>
</ul>
</div><?php endif; ?>
<div id="jiaoshebao_city" style="background:#FFF;">
<div id="jiaoshebao_city_left"><img src="<?php echo (IMG); ?>citytu.jpg" width="20" height="23" /></div>
<a href="<?php echo U('Service/selectCity',array('cid'=>$cinfo['id']));?>" style="color:black;font-size: 90%"><div style="width:80%;float:left;margin-top: 5px" >&nbsp;&nbsp;参保城市&nbsp;&nbsp;<?php echo ($cinfo['ccity']); ?></div></a>
</div>
<div id="jiaoshebao_list">
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<a href="<?php echo U('Social/cplan',array('cid' => $cinfo['id']));?>"><li style="text-align:center;"><input type="button" value="下一步" name="" style="padding:1% 15%; background:#fdb813;"/></li></a>
</ul>
</div>

</div>
</body>
</html>