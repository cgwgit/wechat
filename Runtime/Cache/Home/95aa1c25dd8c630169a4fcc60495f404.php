<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>修改联系人地址</title>
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
		//当下拉菜单改变的时候获取城市的值
		$("#first").change(function(){
			//获取改变对象的值
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
<script type="text/javascript">
//===========================点击展开关闭效果====================================
function openShutManager(oSourceObj,oTargetObj,shutAble,oOpenTip,oShutTip){
var sourceObj = typeof oSourceObj == "string" ? document.getElementById(oSourceObj) : oSourceObj;
var targetObj = typeof oTargetObj == "string" ? document.getElementById(oTargetObj) : oTargetObj;
var openTip = oOpenTip || "";
var shutTip = oShutTip || "";
if(targetObj.style.display!="none"){
   if(shutAble) return;
   targetObj.style.display="none";
   if(openTip  &&  shutTip){
    sourceObj.innerHTML = shutTip; 
   }
} else {
   targetObj.style.display="block";
   if(openTip  &&  shutTip){
    sourceObj.innerHTML = openTip; 
   }
}
}
</script>
<body style="background: #fdb813;position:relative;font-size: 100%">
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1" ><a href="javascript:history.go(-1);"style="color: white;"><</a></div>
<div class="conttop_divmiddle" align="center"><span style="color:white;font-size: 130%;">选择地址</span></div>
<!-- <div id="shebao_title"><img src="<?php echo (IMG); ?>xinzengcanbaoren.jpg" /></div> -->
<div class="conttop_div3"><a style="float:right;" href="###" onclick="openShutManager(this,'box4')"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></a>
</div>
</div>
<style type="text/css">
	a{
		color:black;
	}
</style>
<div id="box4" style="display:none; width:120px; background:#fdb813; margin:1% 4%; right:0px; position:absolute; z-index:9999; padding-bottom:1%;">
<ul>
<a href="<?php echo U('Index/index');?>">
   <li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>home.png" />首页</li>
</a>
<a href="<?php echo U('My/myinfo');?>">
   <li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>news.png" />我的前程保</li>
</a>
<a href="<?php echo U('Service/index');?>">
   <li style="border-bottom:1px solid #CCC;"><img style="float:left; padding:0 10px 0 10px;" src="<?php echo (IMG); ?>fuwubiaozhi.png" />服务大厅</li>
</a>
</ul>
</div>
<form method="post" action="<?php echo U('Social/selectCity',array('cid' => $id));?>">
<div class="acc_apply">
	<ul>
		<li class="clearfix" style="border-top: 0px solid #d6d6d6;">
		  <label class="tl acc_five" style="font-size: 80%">修改联系人地址:</label>
		  	  <select name="province" id="first" style="font-size: 80%">
		  	       <option>参保省份</option>
		           <option value="<?php echo ($area[0]['id']); ?>"><?php echo ($area[0]['name']); ?></option>
		      </select>
		      <select name="city" id="second" style="font-size: 80%">
		          <option>参保城市</option>
		      	 <option value="<?php echo ($area[1]['id']); ?>" selected="selected"><?php echo ($area[1]['name']); ?></option>
		      </select>
		</li>
	</ul>
</div>
<input type="hidden" name="jid" value="<?php echo ($jid); ?>"></input>
<div id="baocun"><input style=" padding:5% 23%; font-size:80%; color:#FFF; background:url(<?php echo (IMG); ?>zhuce_img6.jpg); border:0px;" type="submit" value="保存"/></div>
</form>
<!--  -->
</div>
</body>
</html>