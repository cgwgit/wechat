<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form method="post" action="<?php echo U('Pay/getpay');?>">
	<h3>订单信息</h3>
	<input type="text" name="chargecount"></input>
	<input type="text" name="servicemoney"></input>
	<input type="text" name="allcount"></input>
	<input type="hidden" name="cid"></input>
	<input type="submit" value="提交"></input>
</form>
</body>
</html>