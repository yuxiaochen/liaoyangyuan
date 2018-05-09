<?php if(!defined('APP_NAME')) exit;?>
<script language="javascript">
  $(function ($) { 
	 //表单验证
	var items_array = [
		{ name:"sortname",simple:"栏目名称",focusMsg:'填写栏目名称'},
		{ name:"tplist",simple:"模板",focusMsg:'模板'}
	];

	$("#info").skygqCheckAjaxForm({
		items			: items_array
	});
	
	$("#ifnums").click(function(){
		var tagit=$("#sortmodel");
	    if(!!$(this).attr("checked")){
			tagit.html('<textarea name="sortname" id="sortname" cols="25" rows="8"></textarea>');
			$('#enamef').hide();
		}else{
			tagit.html('<input type="text" name="sortname" id="sortname">');
			$('#enamef').show();
			$('#ename').val('');
		}
		$("#info").skygqCheckAjaxForm({
		    items			: items_array
	    });
	});
  });
</script>    
    <form enctype="multipart/form-data" action="{url('sort/newsadd')}"  method="post" id="info">
          <table width="100%" border="0" cellpadding="0" cellspacing="1"   class="all_cont">  
          <tr>
            <td align="right" width="200">所属类别：</td>
            <td align="left">
             <select name="parentid" id="parentid">
               <option selected="selected" value="0" >=作为顶级分类=</option>
                  <?php 
                      if(!empty($list)){
                      foreach($list as $vo){
                          $space = str_repeat('├┈┈┈', $vo['deep']-1);                     
                             $option.= '<option value="'.$vo['id'].'">'.$space.$vo ['name'].'</option>';
                        }
                        echo $option;
                     }
                  ?>
             </select>
             &nbsp;&nbsp;&nbsp; <input id="ifnums" name="ifnums" type="checkbox" >批量
            </td>
            <td align="left" class="inputhelp">支持无限分类</td>
          </tr> 
          
          <tr>
            <td align="right">资讯栏目名称：</td>
            <td id="sortmodel" align="left">
              <input type="text" name="sortname" id="sortname"> 
            </td>
            <td align="left" class="inputhelp">请填写要添加分类的名称,批量添加时每行:栏目名称|栏目英文名称</td>
          </tr>
          <tr id="enamef">
            <td align="right"  width="100">栏目英文名称：</td>
            <td align="left">
              <input type="text" name="ename" id="ename">
            </td>
            <td align="left" class="inputhelp">留空则采用栏目ID,用于url路径</td>
          </tr>
          <tr>
            <td align="right">封面图：</td>
            <td align="left"><input type="file" name="picture" id="picture" size="10"></td>
            <td class="inputhelp"></td>
          </tr>
          <tr>
            <td align="right">内容封面(长X宽)：</td>
            <td align="left"><input type="text" name="picwidth" value="{$cwidth}" size="4"> X <input type="text" value="{$cheight}" name="picheight"  size="4">px</td>
            <td class="inputhelp">用于剪切内容封面图</td>
          </tr>  
          <tr>
            <td align="right">SEO关键词：</td>
            <td align="left"><input type="text" name="keywords" id="keywords" size="20"></td>
            <td class="inputhelp">将被用来作为栏目页标题，用英文逗号隔开，留空时将采用"网站基本设置"中的关键字</td>
          </tr> 
          <tr>
            <td align="right">SEO描述：</td>
            <td align="left"><textarea cols="30" rows="3" name="description" id="description"></textarea></td>
            <td class="inputhelp">将被用来作栏目描述，用英文逗号隔开，留空时将采用"网站基本设置"中的描述</td>
          </tr>
          <tr>
            <td align="right">前台每页显示条数：</td>
            <td align="left"><input type="text" name="num" id="num" value="10" size="4"></td>
            <td class="inputhelp"></td>
          </tr>
          <tr>
            <td align="right">前台栏目模板：</td>
            <td align="left">
              <select name="tplist" id="tplist">
               {$chooseL}
              </select>
            </td>
            <td align="left" class="inputhelp">默认为模板路径下{$md}_index.php<br><a style="color:green" href="{url('set/tpchange')}"> 管理模板</a></td>
          </tr> 
          <tr>
            <td align="right">前台默认内容模板：</td>
            <td align="left">
              <select name="cnlist" id="cnlist">
               {$chooseC}
              </select>
            </td>
            <td align="left" class="inputhelp">默认为模板路径下{$md}_content.php<br><a style="color:green" href="{url('set/tpchange')}"> 管理模板</a></td>
          </tr>           
          <tr>
            <td align="right">排序：</td>
            <td align="left">
              <input type="text" name="norder" id="norder" value="100" size="10">
            </td>
            <td align="left" class="inputhelp">请以数字表示分类的排序（值越小越靠前）</td>
          </tr> 
          <tr>
            <td align="right">是否前台显示：</td>
            <td align="left"><input checked="checked" name="ifmenu"  type="radio" value="1" />是 <input name="ifmenu" type="radio" value="0" />否</td>
            <td class="inputhelp">选择是否在前台各种导航菜单中显示</td>
          </tr> 
          <tr>
            <td align="right">字段拓展：</td>
            <td align="left">
              <select name="extendid" id="extendid">
                <option value="0">=不使用字段拓展=</option>
                {$extendoption}
              </select>
            </td>
            <td align="left" class="inputhelp">可以<a style="color:green" href="{url('extendfield/tableadd')}">在这里</a>拓展字段</td>
          </tr>            
          <tr>
            <td width="200">&nbsp;</td>
            <td align="left" colspan="2">
              <input type="submit" value="添加" class="btn btn-primary btn-small">
            </td>
          </tr> 
          </table>
          </form>         