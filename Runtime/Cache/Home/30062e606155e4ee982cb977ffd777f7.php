<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>保费明细</title>
<style>
#baofeimingxi_bottom ul li{
  padding: 1% 0;
}
</style>
<style type="text/css">
.mydiv {
line-height:20px;
border: 0px solid #0080FF;
font-size: 100%;
z-index:999;
width:100%;
height:100%;
left:0%;
top:0%;
margin-left:0px!important;/*FF IE7 该值为本身宽的一半 */
margin-top:0px!important;/*FF IE7 该值为本身高的一半*/
margin-top:0px;
position:fixed!important;/* FF IE7*/
position:absolute;/*IE6*/
background:#FFF;
}

    #login,#login1
    {
  display:none;
  height: 100%;
  width: 100%;
  position: absolute;/*让节点脱离文档流,我的理解就是,从页面上浮出来,不再按照文档其它内容布局*/
  top: 0%;/*节点脱离了文档流,如果设置位置需要用top和left,right,bottom定位*/
  left: 0%;
  z-index: 99;/*个人理解为层级关系,由于这个节点要在顶部显示,所以这个值比其余节点的都大*/
  background: white;
  color: #000;
    }
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
<body>
<!-- 弹社保明细窗口 -->
 <div id="login">
      <div>
      <p style="padding:2% 0; background:#EAEAEA; text-align:center;"><span style="color:#0C3; font-size:110%;"><?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?></span>时段每月各险种费用</p>
       
      <table width="100%" border="0">
  <tr>
    <td width="49%" height="35">参保基数：<span style="color:#0C3; font-size:110%;"><?php echo ($cinfo['sbase']); ?></span></td>
    <td width="51%">&nbsp;</td>
  </tr>
<tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td> &nbsp;&nbsp;险种</td>
    <td align="right">费用（元） &nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td> &nbsp;&nbsp;养老保险</td>
    <td align="right"><?php echo ($wuxian['endowment']); ?>&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;医疗保险</td>
    <td align="right"><?php echo ($wuxian['yiliao']); ?> &nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;失业保险</td>
    <td align="right"><?php echo ($wuxian['unemployment']); ?>&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;工伤保险</td>
    <td align="right"><?php echo ($wuxian['employment']); ?> &nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp;生育保险</td>
    <td align="right"><?php echo ($wuxian['maternity']); ?> &nbsp;&nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td> &nbsp;&nbsp;每月费用小计</td>
    <td align="right"><span style="color:#0C3; font-size:110%;"><?php echo ($wuxian['onecount']); ?></span> &nbsp;&nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td height="44"> &nbsp;&nbsp;当前时段费用小计</td>
    <td align="right">￥<?php echo ($wuxian['onecount']); ?>*<?php echo ($cinfo['months']); ?>个月=&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td align="right"><span style="color:#0C3; font-size:110%;"><?php echo ($wuxian['count']); ?></span> &nbsp;&nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
</table>

      </div>
       <p style="text-align:center;"><a href="javascript:hide()"><input type="button" value="取消" style="padding:1% 5%; background:#fdb813; border-radius:10px;" /></a></p>
  </div>
<!-- 弹公积金明细窗口 -->
<div id="popDiv" class="mydiv" style="display:none;">
<div align="right" style="padding:2px;z-index:2000;font-size:12px;cursor:pointer;position:absolute;right:0;" onclick="closeDivFun()">
<!--<span style="border:1px solid #000;width:12px;height:12px;line-height:12px;text-align:center;display:block;background-color:#FFFFFF;left:-20px;">×</span> -->
</div>
      <p style="padding:2% 0; background:#EAEAEA; text-align:center;"><span style="color:#0C3; font-size:110%;"><?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?></span>时段每月各险种费用</p>
<table width="100%" border="0">
  <tr>
    <td width="49%" height="35">参保基数：<span style="color:#0C3; font-size:110%;"><?php echo ($cinfo['gbase']); ?></span></td>
    <td width="51%">&nbsp;</td>
  </tr>
<tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td> &nbsp;&nbsp;险种</td>
    <td align="right">费用（元） &nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td> &nbsp;&nbsp;公积金</td>
    <td align="right"><?php echo ($gjj['gjj']); ?> &nbsp;&nbsp;</td>
  </tr>
  <tr>
    
  <tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td> &nbsp;&nbsp;每月费用小计</td>
    <td align="right"><span style="color:#0C3; font-size:110%;"><?php echo ($gjj['gjj']); ?></span> &nbsp;&nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
  <tr>
    <td height="44"> &nbsp;&nbsp;当前时段费用小计</td>
    <td align="right">￥<?php echo ($gjj['gjj']); ?>*<?php echo ($cinfo['months']); ?>个月=&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td align="right"><span style="color:#0C3; font-size:110%;"><?php echo ($gjj['count']); ?></span> &nbsp;&nbsp;</td>
  </tr>
  <tr>
<td colspan="2"><hr/></td>
</tr>
</table>
<br/>
       <p style="text-align:center;"><a href="javascript:closeDivFun()"><input type="button" value="取消" style="padding:1% 5%; background:#fdb813; border-radius:10px;" /></a></p>
</div>
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white;"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;">保费明细</span></div>
<!-- <div id="shebao_title"><img src="<?php echo (IMG); ?>xinzengcanbaoren.jpg" /></div> -->
<div class="conttop_div3"><span style="float:right;" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></span>
</div>
</div>

<div id="box4" style="display:none; width:90px; background:#fdb813; margin:1% 2%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
<ul>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>home.png" />首页</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>news.png" />消息</li>
<li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>fuwubiaozhi.png" />服务大厅</li>
</ul>
</div>
<div id="baofeimingxi_div" style="font-size: 100%">
<ul>
<li style="border-bottom:1px solid #CCC;">参保城市<span style="float:right;"><?php echo ($cinfo['city']); ?>（截点日：每月4号）</span></li>
<li style="border-bottom:1px solid #CCC;">户口性质<?php if($cinfo['htype'] == 1): ?><span style="float:right;">农村</span><?php else: ?><span style="float:right;">城市</span><?php endif; ?></li>
<li style="text-align:center;">
     <?php if($cinfo['ctype'] == 2): ?><span style="font-size: 150%;">&yen;<?php echo ($gjj['count']); ?></span>
     <?php elseif($cinfo['ctype'] == 1): ?><span style="font-size: 150%;width:50px">&yen;<?php echo ($wuxian['count']); ?></span>
     <?php elseif($cinfo['ctype'] == 3): ?>
     <span style="font-size: 180%;">&yen;<?php echo ($cinfo['allcount']); ?></span><?php endif; ?>
     <br/>
  <?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?>保费合计</li>
</ul>
</div>
<!-- <div id="baofeimingxi2" style="padding:0% 0;">
<div id="baofeimingxi2_div" style="padding:2% 5%;">社保 <span style="float: right; color: #0C3; font-weight: bold;">&yen;3820.17</span></div>
<div id="baofeimingxi2_div" style="padding:2% 5%; border:0px;">公积金 <span style="float: right; color: #0C3; font-weight: bold;">&yen;474</span></div>
</div> -->
<?php if($cinfo['ctype'] == 3 ): ?><div id="baofeimingxi_bottom" style="margin-bottom:3px;">
<ul>
<li style="border-bottom:1px solid #CCC;"><span style="color:green">社保</span>费用明细</li>
<a href="javascript:show()">
    <li><?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?><span style="float:right;">&yen;<?php echo ($wuxian['count']); ?> &nbsp;></span> 
    </li>
</a>
</ul>
</div>
<div id="baofeimingxi_bottom" style="margin-bottom:3px;">
<ul>

  <li style="border-bottom:1px solid #CCC;"><span style="color:green">公积金</span>费用明细</li>
<a href="javascript:showDivFun()">
   <li style="border-bottom:1px solid #CCC;"><?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?><span style="float:right;">&yen;<?php echo ($gjj['count']); ?> &nbsp;></span> </li>
</a>
</ul>
</div>
<?php elseif($cinfo['ctype'] == 1 ): ?>
<div id="baofeimingxi_bottom" style="margin-bottom:3px;">
<ul>
<li style="border-bottom:1px solid #CCC;">社保费用明细</li>
<a href="javascript:show()">
  <li><?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?><span style="float:right;">&yen;<?php echo ($wuxian['count']); ?> &nbsp;></span> </li>
</a>
</ul>
</div>
<?php else: ?>
<div id="baofeimingxi_bottom" style="margin-bottom:3px;">
<ul>
<li style="border-bottom:1px solid #CCC;">公积金费用明细</li>
<a href="javascript:showDivFun()">
 <li style="border-bottom:1px solid #CCC;"><?php echo ($cinfo['stime']); ?>至<?php echo ($cinfo['etime']); ?><span style="float:right;">&yen;<?php echo ($gjj['count']); ?> &nbsp;></span> </li>
 </a>
</ul>
</div><?php endif; ?>
<p style="padding: 1% 0 15% 0; font-size: 80%;">注：以上费用均不含服务费
<a href="<?php echo U('Social/social_buy');?>"><p style="text-align:center; "><input style="padding:2% 10%; background:#fdb813; border-radius:5px; border:0px;" type="button" name="" value="立即参保" /></p>
</a>
</p>
</div>
</body>
<script type="text/javascript">
var login = document.getElementById('login');
    function show()
    {
        login.style.display = "block";
    }
    function hide()
    {
        login.style.display = "none";
    }
</script>
<script>
//弹出调用的方法
function showDivFun(){
    document.getElementById('popDiv').style.display='block';
}
//关闭事件
function closeDivFun(){
    document.getElementById('popDiv').style.display='none';
}
 
</script>
</html>