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
  });
</script> 
         <form enctype="multipart/form-data"  action="{url('sort/pageadd')}"  method="post" id="info"> 
         <table width="100%" border="0" cellpadding="0" cellspacing="1"   class="all_cont">    
          <tr>
            <td align="right" width="100">所属类别：</td>
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
            </td>
            <td align="left" class="inputhelp">支持无限分类</td>
          </tr> 
          
          <tr>
            <td align="right"  width="100">单页栏目名称：</td>
            <td align="left">
              <input type="text" name="sortname" id="sortname">
            </td>
            <td align="left" class="inputhelp">请填写要添加分类的名称</td>
          </tr>
          <tr>
            <td align="right"  width="100">栏目英文名称：</td>
            <td align="left">
              <input type="text" name="ename" id="ename">
            </td>
            <td align="left" class="inputhelp">留空则采用栏目ID,用于url路径</td>
          </tr>
          <tr>
            <td align="right"  width="100">封面图：</td>
            <td align="left"><input type="file" name="picture" id="picture" size="10"></td>
            <td class="inputhelp"></td>
          </tr>
          <tr>
            <td align="right"  width="100">SEO关键词：</td>
            <td align="left"><input type="text" name="keywords" id="keywords" size="40"></td>
            <td class="inputhelp">将被用来作为栏目页标题，用英文逗号隔开，留空时将根据标题和内容自动生成</td>
          </tr> 
          <tr>
            <td align="right"  width="100">SEO描述：</td>
            <td align="left"><textarea cols="40" rows="5" name="description" id="description"></textarea></td>
            <td class="inputhelp">将被用来作栏目描述，用英文逗号隔开，留空时将根据内容自动生成</td>
          </tr>
          <tr>
            <td align="right"  width="100">前台栏目模板：</td>
            <td align="left">
              <select name="tplist" id="tplist">
                {$choose}
              </select>
            </td>
            <td align="left" class="inputhelp">默认为模板路径下{$md}_index.php<br><a style="color:green" href="{url('set/tpchange')}"> 管理模板>> </a></td>
          </tr>           
          <tr>
            <td align="right"  width="100">排序：</td>
            <td align="left">
              <input type="text" name="norder" id="norder" value="100" size="10">
            </td>
            <td align="left" class="inputhelp">请以数字表示分类的排序（值越小越靠前）</td>
          </tr> 
          <tr>
            <td align="right"  width="100">是否前台显示：</td>
            <td align="left"><input checked="checked" name="ifmenu"  type="radio" value="1" />是 <input name="ifmenu" type="radio" value="0" />否</td>
            <td class="inputhelp">选择是否在前台各种导航菜单中显示</td>
          </tr> 
          <tr>
            <td align="right"  width="100">内容：</td>
            <td align="left" colspan="2"><textarea name="content" id="content" style=" width:100%;height:450px;visibility:hidden;"></textarea><br><div id="saveimage" class="btn">图片本地化</div></td>
          </tr>
          <tr>
            <td align="right"  width="100">修改时间：</td>
            <td align="left"><input name="edittime" id="edittime" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})"/></td>
            <td class="inputhelp">不建议修改</td>
          </tr>         
          <tr>
            <td width="100">&nbsp;</td>
            <td align="left" colspan="2">
              <input type="submit" value="添加" class="btn btn-primary btn-small">
            </td>
          </tr> 
          </table>
       </form>  