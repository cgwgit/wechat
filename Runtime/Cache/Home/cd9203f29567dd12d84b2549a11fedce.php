<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>社保购买</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
</head>

<body>
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg" /></div>
<div id="shebao_title"><img src="<?php echo (IMG); ?>shebao_9.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<div id="shebao_div" style="background: #FFF; margin: 1.5% 0; padding: 1% 0; font-size: 85%;"><a href="<?php echo U('shuoming');?>" style="color: black">
&nbsp;&nbsp;服务说明</span> &nbsp;<span style="color: #F00; font-size: 90%;">社保/公积金同时缴纳仅收一次服务费</span></a></div>
<?php if($cinfo == NULL): ?><a href="<?php echo U('Cinfo/addperson');?>">
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
</div>
<div id="jiaoshebao_city" style="background:#FFF;">
<div id="jiaoshebao_city_left"><img src="<?php echo (IMG); ?>citytu.jpg" width="20" height="23" /></div>
<a href="<?php echo U('Social/selectCity',array('cid'=>$cinfo['id']));?>" style="color:black;font-size: 80%"><div style="width:80%;float:left;margin-top: 5px" >&nbsp;&nbsp;参保城市&nbsp;&nbsp;<?php echo ($cinfo['ccity']); ?></div></a>
</div><?php endif; ?>
<div id="jiaoshebao_list">
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li style="padding: 1% 0; background:#fdb813; margin-top: 9%; color:#fff ; text-align: center;"><a href="<?php echo U('Social/cplan',array('cid' => $cinfo['id']));?>">下一步</a></li>
</ul>
</div>

</div>
</body>
</html>