<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>修改手机号</title>
<script type="text/javascript" src="<?php echo (JS); ?>jquery1.8.3.min.js">
</script>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<script type="text/javascript">
var itime = 59;//定义一个变量，倒计时初始化，从59秒开始
        function getTime(){
                if(itime>=0){
                        if(itime==0){
                                //倒计时变成0时，
                                //要清除计时器
                                clearTimeout(act);
                                //设置按钮为初始状态
                                $("#getCodeBtn").val('免费获取手机验证码').attr('disabled',false);
                                 itime=59;
                        }else{
                                //延迟一秒中执行该函数。
                                var act =  setTimeout('getTime()',1000);
                                //把倒计时的秒显示到按钮中
                                 $("#getCodeBtn").val('还剩'+itime+'秒');
                                itime=itime-1;
                        }
                }
        }
$(function(){
        //定义一个函数,用于完成倒计时效果
        $("#getCodeBtn").click(function(){
                    //获取输入的手机号码
                    var telphone = $("#telphone").val();
                    //ajax请求文件，调用短信发送的接口
                    $.ajax({
                        type:'get',
                        url:'/index.php/Home/Manager/aliduanxin?telphone='+telphone,
                        success:function(msg){
                            //判断调用短信发送接口是否成功，
                                if(msg==1){
                                        //调用接口已经成功
                                        alert('短信验证码已经发送成功');
                                        $("#getCodeBtn").attr('disabled',true);    //要禁用该按钮
                                        //调用一个函数，完成倒计时效果。
                                        getTime();
                                }
                        }
                    });
        });
});
</script>
</head>
<body style="background: #fdb813;font-size: 80%">
<div id="app">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><img src="<?php echo (IMG); ?>index_img1.jpg"  /></div>
<div class="conttop_div2"><span style="font-size: 10%">绑定手机号</span></div>

<div class="conttop_div1"><img src="<?php echo (IMG); ?>zhuce_img4.jpg"  /></div>
</div>
<div id="logo"><img src="<?php echo (IMG); ?>shebao_img4.jpg" width="193" height="196" /></div>
<div id="contmiddle">
<form action="<?php echo U('My/bangdingtel');?>" name="form1" method="post">
<ul>
<li>
<table style="margin:0 auto;" border="0" width="100%" style="font-size: 80%">
  <tr>
    <td width="31%">新手机号</td>
    <td width="69%"><input style="width:70%; height:24px; line-height:24px;border-radius:6px;" type="text" name="telphone" id="telphone" placeholder="请输入您的新手机号" required="required"/></td>
  </tr>
</table>
</li>
<li>
<table style="margin:0 auto;" border="0" width="100%">
  <tr>
    <td width="31%">验证码</td>
    <td width="69%">
        <input style="width:45%; height:24px; line-height:24px; border-radius:6px;font-size: 70%" type="text" name="checkcode" placeholder="短信验证码"/>
     <input style="width:40%; height:30px; line-height:24px; border-radius:3px; background-color:#fdb813;" type="button" id="getCodeBtn" value="获取验证码"/>
    </td>
  </tr>
</table>
</li>
<li>
<!-- <table style="margin:0 auto;" border="0" width="80%">
  <tr>
    <td width="31%">邀请码</td>
    <td width="69%"><input style="width:70%; height:24px; line-height:24px; border-radius:6px;" type="text" name="phone"placeholder="6位邀请码" required="required"/></td>
  </tr>
</table> -->
</li>
</ul>
<div id="cont_zhuce"><input style="padding:5% 23%; font-size:1em; color:#FFF; background:url(<?php echo (IMG); ?>zhuce_img6.jpg); border:0px;" type="submit" name="subimt" value="保存"/></div>
</form>
</div>
<include file="Public:header" />
</div>

</body>
</html>