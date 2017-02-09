<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>选择参保人</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
</head>

<body>
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg" /></div>
<div id="shebao_title">选择参保人</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<a href="<?php echo U('Cinfo/addperson');?>" style="color: black"><div id="jiaoshebao" style="background: #FFF; padding:2% 0; text-align: center; font-size: 90%;">+ &nbsp;新增参保人
</div></a>
<!-- <p style="background: #FFF; font-size: 85%; padding:1% 0; border-bottom:1px solid #CCC;"> &nbsp;&nbsp;&nbsp;待参保？</p> -->
<div id="xuanze_list">
<ul>
<?php if(is_array($persons)): foreach($persons as $key=>$v): ?><li>
   <a href="<?php echo U('Social/social_buy',array('cid' => $v['id']));?>" style="color: #999">&nbsp;&nbsp;&nbsp;<span style="color: #0C0;"><?php echo ($v["cname"]); ?></span><br/>
&nbsp;&nbsp;&nbsp;户口信息：<?php echo ($v["province"]); ?>,<?php echo ($v["citys"]); ?>,<?php echo ($v["county"]); ?>,<?php if($v["htype"] == 0 ): ?>城市<?php else: ?>农村<?php endif; ?></a><span style="float: right; color:#3C0;">
<a href="/index.php/Home/Cinfo/editperson/cid/<?php echo ($v["id"]); ?>" style="color:blue">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index.php/Home/Cinfo/delperson/cid/<?php echo ($v["id"]); ?>" style="color:blue">删除</a>&nbsp;&nbsp;&nbsp; </span></li><?php endforeach; endif; ?>
</ul>
</div>

</div>
</body>
</html>