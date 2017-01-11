<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
  <form action="<?php echo U('login');?>" method="post">
	账号：<input type="text" name="username"></input><br/>
    密码：<input type="text" name="pwd"></input><br/>
    <input type="submit" value="登录"></input>
   </form>
</body>
</html>