<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>编辑投保人信息</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<link href="<?php echo (CSS); ?>publi.css" rel="stylesheet" type="text/css">
<link href="<?php echo (CSS); ?>style.css" rel="stylesheet" type="text/css">
<script src="<?php echo (JS); ?>jquery1.8.3.min.js"></script>
<script src="<?php echo (JS); ?>script.js"></script>
<script type="text/javascript">

	$(function() {
		/*document.documentElement.style.fontSize=document.documentElement.clientWidth*12/320+'px';*/
		$(window).on("load", function() {
				$("#loading").fadeOut();
			})
			// ========================================浮层控制
		$("#tip .pack a").on("click", function() {
			$("#tip").fadeOut()
			$("#tip .pack p").html("")
			return false;
		})

		function alerths(str) {
			$("#tip").fadeIn()
			$("#tip .pack p").html(str)
			return false;
		}
		$(".acc_sure").on("click", function() {
			alerths("请等待审核！")
			return false;
		})
		$("#file0").change(function() {
			if (this.files && this.files[0]) {
				var objUrl = getObjectURL(this.files[0]);
				console.log("objUrl = " + objUrl);
				if (objUrl) {
					$("#img0").attr("src", objUrl);
					$("#file0").click(function(e) {
						$("#img0").attr("src", objUrl);
					});
				} else {
					//IE下，使用滤镜
					this.select();
					var imgSrc = document.selection.createRange().text;
					var localImagId = document.getElementById("sss");
					//图片异常的捕捉，防止用户修改后缀来伪造图片
					try {
						preload.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = data;
					} catch (e) {
						this._error("filter error");
						return;
					}
					this.img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src=\"" + data + "\")";
				}
			}
		});
		//建立一個可存取到該file的url
		function getObjectURL(file) {
			var url = null;
			if (window.createObjectURL != undefined) { // basic
				url = window.createObjectURL(file);
			} else if (window.URL != undefined) { // mozilla(firefox)
				url = window.URL.createObjectURL(file);
			} else if (window.webkitURL != undefined) { // webkit or chrome
				url = window.webkitURL.createObjectURL(file);
			}
			return url;
		}
	})
</script>
</head>
<script type="text/javascript">
      $(function(){
		$.ajax({
			url: "<?php echo U('Area/getProvinces');?>",
			type: 'get',
			dataType: 'json',
			success:function(msg){
               	$('#first option:gt(0)').remove();
							//遍历并且追加
							//index为索引，el为对象
							$(msg).each(function(index,el){
								//向地区下拉列表中追加数据
								$('#first').append("<option value='" + el.id + "'>" + el.name + "</option>");
				});
			}
		});
		$("#first").change(function(){
			var cityId = $(this).val();
			$.ajax({
				url: "/index.php/Home/Area/getCitys/pid/"+cityId,
				type: 'get',
				dataType: 'json',
				success:function(msg){
                     	$('#second option:gt(0)').remove();
							//遍历并且追加
							//index为索引，el为对象
						$(msg).each(function(index,el){
								//向地区下拉列表中追加数据
						$('#second').append("<option value='" + el.id + "'>" + el.name + "</option>");
				});
				}
			})
		});

       		$("#second").change(function(){
			var countyId = $(this).val();
			$.ajax({
				url: "/index.php/Home/Area/getCountys/xpid/"+countyId,
				type: 'get',
				dataType: 'json',
				success:function(msg){
                     	$('#third option:gt(0)').remove();
							//遍历并且追加
							//index为索引，el为对象
						$(msg).each(function(index,el){
								//向地区下拉列表中追加数据
						$('#third').append("<option value='" + el.id + "'>" + el.name + "</option>");
				});
				}
			})
		});
	});
</script>
<body>
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg" /></div>
<div id="shebao_title"><img src="<?php echo (IMG); ?>xinzengcanbaoren.jpg" /></div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>
</div>
<form method="post" action="<?php echo U('Tinfo/savetinfo',array('cid'=>$cid));?>" enctype="multipart/form-data">
<div class="acc_apply">
	<ul>
		<li class="clearfix">
			<label class="tl">投保人姓名：</label>
			<input style="margin-left:14px;" autocomplete="off" placeholder="投保人姓名" class="" name="tname" value="<?php echo ($tinfo["tname"]); ?>" type="text" />
		</li>
		<li class="clearfix">
		  <label class="tl acc_five">投保人手机：</label>
			<input autocomplete="off" placeholder="投保人手机"value="<?php echo ($tinfo["tel"]); ?>" class="" name="tel" type="text" />
		</li>
		<li class="clearfix">
		  <label class="tl acc_five">联系邮箱：</label>
			<input autocomplete="off" placeholder="联系邮箱" value="<?php echo ($tinfo["email"]); ?>" class="" name="email"type="text" />
		</li>
         <li class="clearfix">
		  <label class="tl acc_five">所在城市：</label>
		  	  <select name="province" id="first">
		          <option value="<?php echo ($area[0]['id']); ?>"><?php echo ($area[0]['name']); ?></option>
		      </select>
		      <select name="city" id="second">
		          <option>市</option>
		      	 <option value="<?php echo ($area[1]['id']); ?>" selected="selected"><?php echo ($area[1]['name']); ?></option>
		      </select>
		      <select name="county" id="third">
		         <option>区/县</option>
		      	 <option value="<?php echo ($area[2]['id']); ?>" selected="selected"><?php echo ($area[2]['name']); ?></option>
		      </select>
		</li>
		<li class="clearfix">
		  <label class="tl acc_five">详细地址：</label>
			<input autocomplete="off" placeholder="详细地址" value="<?php echo ($tinfo["detailarea"]); ?>"class="" name="detailarea"type="text" />
		</li>
		<li class="clearfix">
		  <label class="tl acc_five">紧急联系人姓名：</label>
			<input autocomplete="off" placeholder="紧急联系人姓名" value="<?php echo ($tinfo["jname"]); ?>" class="" name="jname" type="text" />
		</li>
		<li class="clearfix">
		  <label class="tl acc_five">紧急联系人电话：</label>
			<input autocomplete="off" placeholder="紧急联系人电话" value="<?php echo ($tinfo["jtel"]); ?>" class="" name="jtel" type="text" />
		</li>
	</ul>
</div>
<div id="baocun"><input style=" padding:5% 23%; font-size:1em; color:#FFF; background:url(<?php echo (IMG); ?>zhuce_img6.jpg); border:0px;" type="submit" value="保存"/></div>
</form>
</div>
</body>
</html>