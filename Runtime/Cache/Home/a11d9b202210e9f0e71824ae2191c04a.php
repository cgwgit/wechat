<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="pw-box-hd"> <img width="298" src="<?php echo SITE_URL?>index.php/Home/Pay/qrcode/data/<?php echo urlencode($pay_url);?>"> </div>
</body>
</html>