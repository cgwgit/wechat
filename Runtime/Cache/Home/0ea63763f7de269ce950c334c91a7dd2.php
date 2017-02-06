<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>显示参保人信息列表</title>
</head>
<body>
	<p><a href="/index.php/Home/Cinfo/addperson">增加参保人</a></p>
	<ul>
	  <?php if(is_array($persons)): foreach($persons as $key=>$v): ?><li>
		<input type="radio" name="cinfo" <?php if($cid == $v['id']): ?>checked="true"<?php endif; ?></input>
		<?php echo ($v["cname"]); ?>,<?php echo ($v["city"]); ?><a href="/index.php/Home/Cinfo/delperson/cid/<?php echo ($v["id"]); ?>">删除</a>&nbsp&nbsp&nbsp<a href="/index.php/Home/Cinfo/editperson/cid/<?php echo ($v["id"]); ?>">编辑</a>
		</li><?php endforeach; endif; ?>
	</ul>
</body>
</html>