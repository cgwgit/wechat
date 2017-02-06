<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <ul>
	 	<?php if(is_array($provinces)): foreach($provinces as $key=>$v): ?><li><a href="<?php echo U('getCitys',array('pid' => $v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
	 </ul>
</body>
</html>