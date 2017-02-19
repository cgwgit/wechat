<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>前程保必读</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<style>
ul { list-style:none; }
li { padding:1.5% 0; }
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
<body class="home">
<div id="app" style="background:#FFF;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="<?php echo U('Index/index');?>" style="font-size: 130%;color: white"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;"> 前程保必读</span></div>
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
<div id="banner"><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%"/></div>
<div id="bidu">
<table width="100%" border="0">
  <tr>
    <td width="12%" align="center"><img src="<?php echo (IMG); ?>bidu_img1.jpg" /></td>
    <td style="font-weight:bold;" width="88%">相关参保</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="font-size:90%;"><p>
    <ul>
    <li>所有城市参保需提供参保人身份证照片 </li>
    <li>北京：社保新参需提供个人银行卡卡号（开户地为北京）及本人一寸免冠证件照</li>
    <li>上海：上海户籍参保人新参需办理就失业登记证，办理流程参见本页-温馨提示</li>
    <li>重庆：社保增员首月只缴纳三险，次月正常缴纳五险</li>
    <li>成都：非成都户籍且户口性质为农村的参保人，需提供本人户口本首页及本人页照片</li>
    </ul>
    </p></td>
  </tr>
  <tr>
    <td align="center"><img src="<?php echo (IMG); ?>bidu_img2.jpg" /></td>
    <td style="font-weight:bold;">截止日期</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="font-size:90%;">因各地社保局办理社保服务时间不同，平台规定有社保截止时间，因城市和办理 的业务不同，截止时间不同，具体请查看首页-参保地介绍</td>
  </tr>
  <tr>
    <td align="center"><img src="<?php echo (IMG); ?>bidu_img3.jpg" /></td>
    <td style="font-weight:bold;">常见问题</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td style="font-size:90%;">
    <ul> 
   <li> Q：提示“身份证号已存在”，为什么无法添加参保人？</li>
<li>A：平台暂时仅支持单个用户为某个参保人缴纳社保，如您无法添加参保人，可能是参保人的前单位正在缴纳或注册手机号与该参保人预留手机号不一致，可联系客服（400-655-6063），确认身份后，客服将为您办理参保人转移。</li>
<li>Q：截止日期前提交了增员，为什么没有成功参保？</li>
<li>A：不同城市会要求不同的参保材料，如果参保材料不合规，平台无法帮您及时办理增员，客服会及时联系您重新提交参保材料，请您及时补交，如因参保材料不合规导致参保人无法办理增员，平台概不负责，故请提前办理增员并提供合规的材料信息。</li>
<li>Q：如何查看是否参保成功？</li>
<li>A：两个工作日后，如果参保人状态为“正常缴纳”，请登录当地社保局官网查询参保人社保状态。</li>
<li>Q：为什么实付金额比订单金额高，为什么收取手续费？</li>
<li>A：订单金额包括参保人的社保代缴费用及平台服务费（19.9元/月），因平台采用第三方支付商提供支付服务，支付商要收取手续费，所以实付金额要大于订单金额，具体手续费率可在确认订单时查看。</li>
<li>Q：什么情况下可以退款？</li>
<li>A：以下三种情形可申请退款，一、参保人参保不成功；二、参保人主动提出退款且平台尚未进行操作；三、参保人提前减员。</li>
<li>Q：哪些费用可以退？</li>
<li>A：如您办理退款，平台可退还您的代缴费用，但服务费不予退还，另，支付时收取的手续费为支付厂商收取，与平台无关，故不予退还。</li>
<li>Q：为什么平台显示参保人的户口所在地与社保系统不符？</li>
<li>A：户口所在地为您在平台办理增员时录入的，如您正在平台缴纳社保，户口所在地并不影响您参保，只有当该参保人从平台申请减员，再次办理增员时可修改其户口所在地。</li>
<li>Q：如何办理减员？</li>
<li>A：平台暂时无法办理减员，请按需购买，如需提前办理减员，请联系客服（400-668-5151），我们正在不断完善平台功能，更多功能请关注后期版本更新。</li>
<li>Q：我社保断了几年，现在交上社保之后医保卡能用吗？</li>
<li>A：医保断缴后要正常缴纳3个月后医保才能正常使用，期间产生的医疗费无法做手工报销。</li>
<li>Q：能否开具在职证明、开具劳动合同，能否办理申领社保卡、手工报销、领取生育津贴、办理社保转移办理退休等业务？</li>
<li>A：因平台为代缴性质，仅提供社保代缴服务，无法办理相关业务，可联系在线客服或拨打客服电话进行咨询。</li>
</ul>
</td>
  </tr>
</table>

</div>
</div>

</body>
</html>