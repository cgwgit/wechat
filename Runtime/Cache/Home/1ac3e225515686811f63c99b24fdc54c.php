<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<link rel="stylesheet" href="<?php echo (CSS); ?>cityPicker.css">
<!--城市-->
<script src="<?php echo (JS); ?>jquery1.8.3.min.js"></script>
<script src="<?php echo (JS); ?>cityPicker.js"></script>
<!--时间-->
<script type="text/javascript" src="<?php echo (JS); ?>hDate.js"></script>
<link href="<?php echo (CSS); ?>hDate.css" rel="stylesheet" />
</head>
<script type="text/javascript">
	$(function(){
		$("#cityone").click(function(){
			window.location.href="<?php echo U('Area/getProvinces');?>";
		})
	})
</script>
<body>
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg"  /></div>
<div id="shebao_jisuanqi"><img src="<?php echo (IMG); ?>baofeijisuan1.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="banner"><img src="<?php echo (IMG); ?>baofeijisuan2.jpg" width="100%" /></div>
<div id="shebao_jisuanqi_middle">
<form name="form1">
<div id="cityone">&nbsp;&nbsp;&nbsp;参保城市<input style="width:60%; height:24px; font-size:1em; margin-left:2%; background-color:transparent; color:#FFF; border:0px;" type="text" name="city" readonly/>
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
<div> &nbsp;&nbsp;&nbsp;户口城市<input style="width:60%; height:24px; font-size:1em; margin-left:2%; background-color:transparent; color:#FFF; border:0px;" type="text" name="hukoucengshi" class="citytwo" readonly/>
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
<script type="text/jscript">
    $(".citytwo").CityPicker();
</script>
</div>
<div> &nbsp;&nbsp;&nbsp;户口性质
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>

<div> &nbsp;&nbsp;&nbsp;参保年月<input style="width:60%; height:24px; font-size:1em; margin-left:2%; background-color:transparent; color:#FFF; border:0px;" id="Text1" onClick="calendar.show({ id: this })" type="text" readonly="readonly" />
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
<div> &nbsp;&nbsp;&nbsp;计算社保费用
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>
<div> &nbsp;&nbsp;&nbsp;计算公积金费用
<span><img src="<?php echo (IMG); ?>shebaojisuan4.png" width="35" height="37" style="width: 22px" /></span>
</div>

</form>
</div>
<div id="baofei_jisuan_bottom">
<form>
<table width="100%" border="0">
  <tr>
    <td width="15%" height="39"><span>保险外伤</span></td>
    <td width="17%"><font>工伤</font></td>
    <td width="18%"><font>医疗</font></td>
    <td width="17%"><font>养老</font></td>
    <td width="17%"><font>生育</font></td>
    <td width="16%"><font>失业</font></td>
  </tr>
  <tr>
    <td height="37"><span>保险代理</span></td>
    <td><font>工伤</font></td>
    <td><font>医疗</font></td>
    <td><font>养老</font></td>
    <td><font>生育</font></td>
    <td><font>失业</font></td>
  </tr>
  <tr>
    <td height="32"><span>员工人数</span></td>
    <td colspan="5" align="center">
    <input style="width:20%; height:20px;" type="text" name="baofei"/>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><img src="<?php echo (IMG); ?>baofeijisuan3.jpg" /></td>
    <td colspan="2" align="right"><img src="<?php echo (IMG); ?>shebao_img4.png" /></td>
    </tr>
</table>
</form>
</div>


</div>
<div id="contbottom">
<div class="contbottom_div1"><img src="<?php echo (IMG); ?>zhuce_img7.jpg"  /></div>
<div class="contbottom_div2"><img src="<?php echo (IMG); ?>zhuce_img8.jpg"  /></div>
<div class="contbottom_div"><img src="<?php echo (IMG); ?>zhuce_img9.jpg"  /></div>
<div class="contbottom_div"><img src="<?php echo (IMG); ?>zhuce_img10.jpg"  /></div>
<div class="contbottom_div"><img src="<?php echo (IMG); ?>zhuce_img11.jpg"  /></div>
</div>
</div>

</body>
</html>