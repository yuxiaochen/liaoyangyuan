<?php if(!defined('APP_NAME')) exit;?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-stand|ie-comp">
<meta http-equiv ="X-UA-Compatible" content = "IE=edge,chrome=1"/>
<link href="__PUBLICAPP__/css/back.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
<script	language="javascript">
  $(function ($) { 
	//行颜色效果
	$('.all_cont tr').hover(
	function () {
        $(this).children().css('background-color', '#f2f2f2');
	},
	function () {
        $(this).children().css('background-color', '#fff');
	}
	);	
	$('.set').click(function(){	
			if(confirm('切换模板将会清空模板缓存~')){
			var nowobj=$(this);
			var tpfile=nowobj.attr('title');		
			var id=nowobj.attr('id');
			$.post("{url('set/tpchange')}", {tpfile:tpfile,type:id<!--TOKEN-->},
   				function(data){
				if(data==1){
					$('.set'+id).removeClass('on');
					$('.set'+id).html('使用该模板');
					nowobj.html('模板正在使用中');
					nowobj.addClass('on');
				}else alert(data);
   			});
		}
	  });
  });
</script>
<style>.on{ color:#F00}</style>
<title>前台模板</title>
</head>
<body>
<div class="contener">
<div class="list_head_m">
		<div class="list_head_ml">当前位置：【前台模板】</div>
		<div class="list_head_mr"></div>
		</div>


		<table width="100%" border="0" cellpadding="0" cellspacing="1"  class="all_cont">
           <tr>
              <th>模板名称</th>
              <th>作者</th>
              <th>台式端</th>
              <th>手机/移动端</th>
              <th>模板编辑</th>
           </tr>
           <?php 
              if(!empty($tpinfo)){
                   foreach ($tpinfo as $key => $vo){
                       $list.='<tr><td align="center">'.$vo['name'].'</td>';
                       $list.='<td align="center">'.$vo['author'].'</td>';
                       $list.=($key==$fileNow)?'<td align="center"><a href="#" id="0" class="set set0 on" title="'.$key.'">模板正在使用中</a></td>':'<td align="center"><a href="#" id="0" class="set set0" title="'.$key.'">使用该模板</a></td>';
					   $list.=($key==$fileNowMobile)?'<td align="center"><a href="#" id="1" class="set set1 on" title="'.$key.'">模板正在使用中</a></td>':'<td align="center"><a href="#" id="1" class="set set1" title="'.$key.'">使用该模板</a></td>';
					   $list.='<td align="center"><a href="'.url('set/tplist',array('Mname'=>$key)).'">管理模板文件</a></td></tr>';
                   }
                 echo $list;
               }
            ?>
		</table>
</div>
</body>
</html>