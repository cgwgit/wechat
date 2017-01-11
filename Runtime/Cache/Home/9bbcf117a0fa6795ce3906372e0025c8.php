<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
   <form action="<?php echo U('detail');?>" method="post">
		参保城市：<?php echo ($cinfo['city']); ?>
		社保类型:<input type="text" name="htype" <?php if($cinfo['htype'] == 0): ?>value="城市户口"<?php else: ?>value="城市户口"<?php endif; ?></input>
		起缴月份：<input type="text" name="stime"></input>
		截止月份：<input type="text" name="etime"></input>
		参保基数：<input type="text" name="base"></input>
		<input type="submit" value="计算保费"></input>
   </form>
</body>
</html>