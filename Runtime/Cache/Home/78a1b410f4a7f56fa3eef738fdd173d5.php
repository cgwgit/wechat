<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
	 	<?php if(is_array($countys)): foreach($countys as $key=>$v): ?><li><a href="<?php echo U('Socialfare/jisuan',array('xpid' => $v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
	</ul>
</body>
</html>