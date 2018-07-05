<?php if(!defined('APP_NAME')) exit;?>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>中国生物医学工程学会</title>
    <link rel="stylesheet" href="__PUBLICAPP__/css/csbme/style.css">
    <link rel="stylesheet" href="__PUBLICAPP__/css/csbme/ui-select.css">
    <link rel="stylesheet" href="__PUBLICAPP__/css/csbme/flexslider.css">
    <link rel="stylesheet" href="__PUBLICAPP__/css/csbme/org-add.css">
    <script src="http://www.csbme.org/themes/csbme/js/jquery.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/ui-select.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/test.js"></script><style type="text/css">input.styled { display: none; } select.styled { position: relative; width: 190px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>
    <script src="http://www.csbme.org/themes/csbme/js/js.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/org-add.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.flexslider-min.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.cxslide.min.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.cxscroll.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/nav.js"></script>

</head>
<body>
<div class="container margin-top">
    <div class="line-middle">
        <div class="xm9">
           <div class="right orgazinationcon" style="position: relative;">
            <div class="orgtitle commbo">
                <a class="right" href="javascript:void(0)"></a>
                {loop $daohang $vo} {/loop}
                <p>{$vo['name']}</p>

            </div>
               <div class="border padding">
            <!--文章列表-->
            <ul class="commcontent">
                {loop $alist $vo}
                <li><a   href="{$vo['url']}" target="_blank" title="{$vo['title']}"><span>{date($vo['addtime'],Y-m-d)}</span><p>{$vo['title']}</p></a></li>
                {/loop}
            </ul>
            <div class="clear"></div>
            <div class="pagelist">
                {$page}
            </div>
          </div>

            <div><img src="__PUBLICAPP__/images/csbme/comadv.png"></div>
        </div>
           <div class="clear"></div>
       </div>
  </div>
</div>

<script>
    //无数据提示
    if($(".commcontent li").length == 0){
        $('.commcontent').after("<div style='font-size: 14px;font-weight: bold;width:200px;color:red;padding-left:40%;padding-top:30px;padding-bottom:40px'>暂无信息！ </div>");
    }
    //侧导航选中效果
    $('#stdnotice', parent.document).parent().addClass('leftmenu').siblings().removeClass('leftmenu');
    $('#rghttitle', parent.document).html('首页 >{$crumbs}');
    $(parent.window.document.getElementById("rghttitlebg")).show();
</script>
</body></html>