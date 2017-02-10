<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>投保人信息设置</title>
<style>
div { width:100%; height:auto; overflow:hidden; margin:0 auto; }
ul { list-style:none; font-size:70%; } 
li { padding:1% 0; }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>content.css">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS); ?>base.css">
<script src="<?php echo (JS); ?>jquery1.8.3.min.js"></script>
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
<body>
<div id="app" style="background:#DADADA;">
<!--<div id="header"><img src="<?php echo (IMG); ?>zhuce_img1.jpg" width="100%"  height="40" /></div>-->
<div id="conttop">
<div class="conttop_div1"><</div>
<div id="shezhi_title">投保人信息设置</div>
<div class="conttop_div3"><img src="<?php echo (IMG); ?>zhuce_img4.jpg" /></div>

</div>
<p style=" padding:2% 2%; font-size: 70%;">下单成功后服务人员与您确认参保信息，以下信息将作为您的联系方式，建议您填完整：</p>
<form method="post" action="<?php echo U('addtinfo');?>">
<table style="background:#FFF; font-size:70%; padding: 0% 2%;" width="100%" border="0">
  <tr>
    <td width="50%" height="35">投保人姓名<span style="color:#F00;">*</span></td>
    <td width="50%" align="right"><input style="width:120px; text-align:right;   margin-right: 8px" type="text" name="tname" /></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td width="50%" height="35">投保人电话<span style="color:#F00;">*</span></td>
    <td width="50%" align="right"><input style="width:120px; text-align:right;   margin-right: 8px" type="text" name="tel" /></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">联系邮箱<span style="color:#F00;">*</span></td>
    <td align="right"><input style="width:130px; text-align:right; margin-right: 12px" type="text" name="email" /></td>
  </tr>
    <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
   <tr>
   <ul style="list-style: none; margin:0; padding: 0;">
     <td colspan="2" height="20" style="margin: 0;padding: 0">
   <li style="list-style: none">所在地区<span style="color:#F00;">*</span> 
    <span style="float: right;">
      <select name="province" id="first">
                 <option>请选择省份</option>
      </select>
      <select name="city" id="second">
                <option>请选择城市</option>
      </select>
      <select name="county" id="third">
               <option>区/县</option>
      </select>
    </span></li>
   </td></ul>
  </tr>
     <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">详细地址<span style="color:#F00;">*</span></td>
    <td align="right"><input style="width:120px; text-align:right; margin-right: 5px" type="text" name="detailarea" /></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
  <tr>
    <td height="35">紧急联系人姓名</td>
    <td align="right"><input style="width:120px; text-align:right; margin-right: 5px" type="text" name="jname" /></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
    <tr>
    <td height="35">紧急联系人电话</td>
    <td align="right"><input style="width:120px; text-align:right;margin-right: 5px" type="text" name="jtel" /></td>
  </tr>
      <tr>
    <td height="2" colspan="2"><hr/></td>
    </tr>
</table>
<input type="hidden" name="cid" value="<?php echo ($cid); ?>"></input>
<p style="text-align:center; padding:30px 0 25px 0; background:#FFF; font-size: 90%;">
<a href="<?php echo U('Social/orderinfo',array('cid' => $cid));?>"><input style="background:#F90; padding:10px 50px; " type="button" name="quxiao" value="取消"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<input style="background:#F90; padding:10px 50px; " type="submit" value="确认"/></p>
</form>
</div>
</body>
</html>