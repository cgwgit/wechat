<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="<?php echo (JS); ?>jquery1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#area").click(function(){
              $.ajax({
              	url: "<?php echo U('Area/getProvinces');?>",
              	type: 'post',
              	dataType: 'json',
              	success:function(msg){
              		$("#form1").remove();
              		$("body").append("<h3>请选择省份</h3>");
              		$(msg).each(function(index,el){
              			$("body").append("<input type='hidden' class='city' value='"+el.id+"'/><p>"+el.name+"</p>");

              		});	
              	}
              })           
			});
			  $(".city").click(function(){
                   	alert(1);
               })
			   
		})
	</script>
</head>
<body>
   <form method="post" action="<?php echo U('editaddress');?>" id="form1">
		<h3>联系人地址设置</h3>
		<p id="area">所在地区<?php echo ($area[0]['name']); echo ($area[1]['name']); echo ($area[2]['name']); ?></p>
		详细地址<input type="text" name="detailarea" value="<?php echo ($detailarea); ?>"></input>
	<input type="submit" value="保存"></input>
	</form>
</body>
</html>