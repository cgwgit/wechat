<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
  <form method="post" action="/index.php/Home/Social/cplan/cid/<?php echo ($cinfo['id']); ?>">
	参保人：
	<a href="<?php echo U('Cinfo/selectperson',array('cid'=>$cinfo['id']));?>">
		<p><?php echo ($cinfo['cname']); ?></p>
		<p>户口信息：<?php echo ($cinfo['city']); ?>,<?php if($cinfo['htype'] == 0 ): ?>城市<?php else: ?>农村<?php endif; ?></p>
	</a>
	参保城市：
	<input type="text" name="city"></input>
	<input type="submit" value="下一步"></input>
   </form>
</body>
</html>