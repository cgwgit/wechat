<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>账号设置</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<style type="text/css">
    a:link,a:visited{
        color:black;
    }
</style>
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
<body style="background: #fdb813;position:relative;font-size: 80%;">
<div id="app">
<!-- <div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div> -->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>wodeqianchengbao2.jpg" /></div>
<div id="shebao_jisuanqi"><img src="<?php echo (IMG); ?>zhanghao_title.jpg" /></div>
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
<div id="zhanghao_content">
<ul>
<li style="background-color:#B0FF62;">账号信息
</li>
<li id="btn1">手机号 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($user["tel"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('edittel');?>">修改手机号</a></li>
    <div id="div1" style=" display:none; z-index:9999;">
<!-- 	<ul>
        <li style="text-align:center; padding:2%; color:#FFF; background-color:#FC0;">更换手机号</li>
	 	 <li> &nbsp;手机号 &nbsp;<input type="text" placeholder="请输入更换的手机号" /></li>
         <li> &nbsp;验证码 &nbsp;<input type="text" placeholder="请输入短信验证码" /> <input style="border-radius:5px; background-color:#FFF; color:#090; border:1px solid #090;" type="button" value="获取验证码" /></li>
       <li style="text-align:center;"><input type="button" style="border-radius:2px; padding:1% 6%; background-color:#F90; color:#FFF; border:1px solid #090;" value="保存"/></li>  
	 </ul> -->
     <script>
    var oBtn = document.getElementById('btn1');
    var oDiv = document.getElementById('div1');
    // oBtn.onclick=function(){
    //     oDiv.style.cssText = 'position:absolute; top:0px; left:0px; width:100%; height:100%; z-index:10; background-color:#FFFFFF; display:block;';
    // };
</script>
	</div>
<li id="btn2"><a href="<?php echo U('editpwd');?>">修改密码</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="<?php echo U('loginusername');?>">登录用户名:<?php echo ($user["username"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
<li style="background-color:#B0FF62;">基本信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<?php if($tinfo != null): ?><a href="<?php echo U('editusername');?>"><li>投保人姓名:<?php echo ($tinfo["tname"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></a>
<a href="<?php echo U('editemail');?>"><li>联系邮箱:<?php echo ($tinfo["email"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></a>
<a href="<?php echo U('editaddress');?>"><li>联系地址:<?php echo ($area[0][name]); echo ($area[1][name]); echo ($area[2][name]); echo ($tinfo["detailarea"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
</a>
<li><a href="<?php echo U('erweima');?>">我的二维码</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<?php else: ?>
<li><a href="<?php echo U('Tinfo/addtinfo');?>">请添加用户信息</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><?php endif; ?>
</ul>
</div>
<div id="zhanghao_tuichu">
    <a href="<?php echo U('Manager/loginout');?>">
       <input style="padding:1% 6%; background-color:#FF9; color:#0C0;" type="button" value="退出登录"/>
     </a>
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