<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/index.php/Home/Cinfo/addperson" method="post" enctype="multipart/form-data">
		姓名：<input type="text" name="cname"></input><br/>
		身份证号码：<input type="text" name="idCard"></input><br/>
		手机号码：<input type="text" name="mobile"></input><br/>
		城市：<input type="text" name="city"></input><br/>
		农村：<input type="radio" name="htype" value="1"></input><br/>
		城市：<input type="radio" name="htype" value="0"></input><br/>
		身份证正面：<input type="file" name="pics_tu[]"></input>
		身份证反面：<input type="file" name="pics_tu[]"></input>
		<input type="submit" value="保存"></input>
	</form>
</body>
</html>