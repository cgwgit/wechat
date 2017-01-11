<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/index.php/Home/Cinfo/editperson" method="post" enctype="multipart/form-data">
		姓名：<input type="text" name="cname" value="<?php echo ($cinfo['cname']); ?>"></input><br/>
		身份证号码：<input type="text" name="idCard" value="<?php echo ($cinfo['idnumber']); ?>"></input><br/>
		手机号码：<input type="text" name="mobile" value="<?php echo ($cinfo['mphone']); ?>"></input><br/>
		户口地址：<input type="text" name="city" value="<?php echo ($cinfo['city']); ?>"></input><br/>
		农村：<input <?php if($cinfo['htype'] == 1 ): ?>checked="true"<?php endif; ?>type="radio" name="htype" value="1"></input><br/>
		城市：<input <?php if($cinfo['htype'] == 0 ): ?>checked="true"<?php endif; ?>type="radio" name="htype" value="0"></input><br/>
		身份证正面：<input type="file" name="pics_tu[]"><?php echo (SITE_URL); echo (substr($cinfo['zpic'],2)); ?></input>
		身份证反面：<input type="file" name="pics_tu[]"><?php echo (SITE_URL); echo (substr($cinfo['fpic'],2)); ?></input>
		<input type="hidden" name="id" value="<?php echo ($cinfo['id']); ?>"></input>
		<input type="submit" value="保存"></input>
	</form>
</body>
</html>