<?php if(!defined('APP_NAME')) exit;?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-stand|ie-comp">
<meta http-equiv ="X-UA-Compatible" content = "IE=edge,chrome=1"/>
<link href="__PUBLICAPP__/css/back.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script  type="text/javascript" language="javascript" src="__PUBLIC__/js/jquery.skygqCheckAjaxform.js"></script>
<script language="javascript">
  $(function ($) { 
	//行颜色效果
	$('.all_cont tr').hover(
	function () {
        $(this).children().css('background-color', '#f2f2f2');
	},
	function () {
        $(this).children().css('background-color', '#fff');
	});
   //表单验证
	var items_array = [
		{ name:"webname",min:3,max:30,simple:"站点名称",focusMsg:'3-30个字符'}
	];

	$("#info").skygqCheckAjaxForm({
		items			: items_array
	});
  });
</script>
<title>友情链接添加</title>
</head>
<body>
<div class="contener">
<div class="list_head_m">
           <div class="list_head_ml">当前位置：【链接添加】</div>
        </div>

        <form enctype="multipart/form-data" action="{url('link/add')}" method="post" id="info" name="info" >
         <table class="all_cont" width="100%" border="0" cellpadding="5" cellspacing="1"   > 
         <tr>
            <td align="right">分组名称：</td>
            <td align="left"><input name="groupname" id="groupname" type="text" value="" /></td>
            <td class="inputhelp">数字或字母</td>
          </tr>
          <tr>
            <td align="right">链接名称：</td>
            <td align="left"><input name="webname" id="webname" type="text" value="" /></td>
            <td class="inputhelp"></td>
          </tr>
          <tr>
            <td align="right">链接地址：</td>
            <td align="left"><input name="url" id="url" type="text" value="http://" size="40"/></td>
            <td class="inputhelp">格式：http://www.ycms.net</td>
          </tr>
          <tr>
            <td align="right">本地图片：</td>
            <td align="left"><input type="file" name="picture" id="picture" size="10"></td>
            <td class="inputhelp">直接填写图片地址时不用上传</td>
          </tr>
          <tr>
            <td align="right">图片地址：</td>
            <td align="left"><input name="logourl" id="logourl" type="text" value="" /></td>
            <td class="inputhelp">本地上传时不用填写</td>
          </tr>
          <tr>
            <td align="right">链接简介：</td>
            <td align="left"><textarea name="info" id="info" cols="40" rows="5"></textarea></td>
            <td class="inputhelp"></td>
          </tr>
          <tr>
            <td align="right">排序：</td>
            <td align="left"><input name="norder" id="norder" type="text" value="100" size="6"/></td>
            <td class="inputhelp">值越大越靠前(不指定将按最新发表排序)</td>
          </tr>
          <tr>
            <td align="right">通过审核：</td>
            <td align="left"><input checked="checked" name="ispass"  type="radio" value="1" />是 <input name="ispass" type="radio" value="0" />否</td>
            <td class="inputhelp">未通过审核的链接将不显示</td>
          </tr>   
          <tr>
            <td></td>
            <td colspan="2" align="left"><input type="submit" class="btn btn-primary btn-small" value="添加">&nbsp;<input class="btn btn-primary btn-small" type="reset" value="重置"></td>
          </tr>           
        </table>
</form>
</div>
</body>
</html>
