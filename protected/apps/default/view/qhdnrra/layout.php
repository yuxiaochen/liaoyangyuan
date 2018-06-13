<?php if(!defined('APP_NAME')) exit;?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit|ie-stand|ie-comp">
<meta http-equiv ="X-UA-Compatible" content = "IE=edge,chrome=1"/>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="format-detection" content="telephone=no"/>
<meta name="format-detection" content="address=no"/>
<meta content="email=no" name="format-detection" />
<meta name="HandheldFriendly" content="true" />
<title>{$title}</title>
<meta name="keywords" content="{$keywords}"/>
<meta name="description" content="{$description}"/>
<link rel="stylesheet" href="__PUBLICAPP__/css/css.css" type="text/css">
<LINK href="__PUBLICAPP__/css/basic.css" type=text/css rel=stylesheet>
<LINK href="__PUBLICAPP__/css/common.css" type=text/css rel=stylesheet>
<LINK href="__PUBLICAPP__/css/index.css" type=text/css rel=stylesheet>
<LINK href="__PUBLICAPP__/css/top.css" type=text/css rel=stylesheet>
<LINK href="__PUBLICAPP__/css/page.css" type=text/css rel=stylesheet>
<LINK href="__PUBLICAPP__/css/pintuer.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="__PUBLICAPP__/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="__PUBLICAPP__/js/lazyload-min.js"></script>
<script type="text/javascript" src="__PUBLICAPP__/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="__PUBLICAPP__/js/foucsbox.js"></script>
<script src="__PUBLICAPP__/js/navigation.js" type=text/javascript></script>
<script src="__PUBLICAPP__/js/page.js" type=text/javascript></script>
<script src="__PUBLICAPP__/js/pintuer.js" type=text/javascript></script>
</head>
<body>
<div style="width:100%;background-image:url('__PUBLICAPP__/images/qhdnrra/qhdnrra_in--11_02.jpg'); background-repeat:repeat-x;margin-bottom: 10px;">
    <table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" background="__PUBLICAPP__/images/qhdnrra/qhdnrra_in--11_04.jpg" style="padding-top:0px;">
        <tr>
            <td width="775" height="236"><div align="right"><a href="/"><img src="__PUBLICAPP__/images/qhdnrra/logo.png" width="745" height="131" border="0" /></a></div></td>
            <td width="425"><div align="center" style="padding-bottom:5px;"><img src="__PUBLICAPP__/images/qhdnrra/weixin.png" width="87" height="86" /></div>
                <table width="60%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <form action="#" method="get" name="formSearch" id="formSearch">
                        <input type="hidden" name="action" value="search" />
                        <tr>
                            <td width="77%" height="31" style="padding-left:0px;"><div align="right"><span class="font_white_bold_12">
                    <input name="condtitle" type="text" id="condtitle" style="border:1px solid #E9E9E9; height:23px; padding-top:4px;" value="" size="25">
</span></div></td>
                            <td width="23%"><div align="center" style="padding-top:0px;">
                                    <div align="left">
                                        <input name="image" type="image" src="__PUBLICAPP__/images/qhdnrra/ss.png">
                                    </div>
                                </div></td>
                        </tr>
                    </form>
                </table></td>
        </tr>
    </table>
</div>


<div style="background-image:url(__PUBLICAPP__/images/qhdnrra/qhdnrra_in_bg.gif); background-repeat:repeat-x; height:59px; width:100%;min-width:1200px;">
    <div class=navigation>
        <div class=main_nav>
            <ul id=nav> 
             {loop $sortstree $k1 $v1}
                 <li {if $rootid==$k1} class="active" {/if} ><a class=nav1 id=a0  href="{$v1['url']}">{$v1['name']}</a><span></span>                    
                      {if $v1['c']}
                            <div class=navoutDiv>
                        <ul>
                         {loop $v1['c'] $v2}
                            <li><a class=xia href="{$v2['url']}" _fcksavedurl="{$v2['url']}">{$v2['name']}</a> </li> 
                         {/loop} 
                        </ul>
                      </div> 
                     {/if} 
                 </li> 
             {/loop}    
            </ul>
        </div>
    </div>
</div>

{include file="$__template_file"}  

<div style="background-color:#f4f9fc; height:60px;min-width:1200px;">
    <table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td valign="top" style="padding:5px 15px;">

                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="link_body_3">
                    <tr>
                        <td><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin:8px 0px;">
                                <tr>
                                    <td>
                                        <div align="left">
                                            <a href="http://www.mca.gov.cn" target="_blank" class="fontgery12">
                                                中华人民共和国民政部</a>&nbsp;&nbsp;
                                            <a href="http://www.most.gov.cn" target="_blank" class="fontgery12">
                                                中华人民共和国科学技术部</a>&nbsp;&nbsp;
                                            <a href="http://kffj.mca.gov.cn" target="_blank" class="fontgery12">
                                                国家康复辅具研究中心</a>&nbsp;&nbsp;
                                            <a href="http://www.gjkfyy.com" target="_blank" class="fontgery12">
                                                国家康复辅具研究中心附属康复医院</a>&nbsp;&nbsp;
                                            <a href="http://www.qhd.gov.cn" target="_blank" class="fontgery12">
                                                秦皇岛市人民政府</a>&nbsp;&nbsp;
                                            <a href="http://www.qetdz.gov.cn" target="_blank" class="fontgery12">
                                                秦皇岛市经济技术开发区</a>&nbsp;&nbsp;
                                        </div></td></tr>
                            </table></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</div>
<div style="background-color:#073674;min-width:1200px;">
<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:0px;">
        <tr>
            <td width="498" height="80" class="font_white_14"><div align="left">地址：秦皇岛经济技术开发区数谷大道4号数谷翔园（100068）  &nbsp;<br />
                    总机：0335-8509768   &nbsp;传真：0335-8509858&nbsp;邮箱：lvpeng@qhdnrra.cn<br />
                </div></td>
            <td width="702" class="font_white_14"><div align="right">Copyright &copy; 2017 国家康复辅具研究中心秦皇岛研究院<br />
                    冀ICP备17019982号</div></td>
        </tr>
    </table>
</div>
</body> 
</html>