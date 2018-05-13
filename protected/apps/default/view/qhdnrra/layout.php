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
<LINK href="__PUBLICAPP__/css/top.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="__PUBLICAPP__/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="__PUBLICAPP__/js/lazyload-min.js"></script>
<script type="text/javascript" src="__PUBLICAPP__/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="__PUBLICAPP__/js/foucsbox.js"></script>
<script src="__PUBLICAPP__/js/navigation.js" type=text/javascript></script>
<script language="javascript">
    $(function(){
        $('#banner').width(screen.width-16);
        $("img").lazyload({ effect:"fadeIn"});
        $('#banner').cycle({
            speed:500,
            fx:'scrollLeft',
            pager:'#btn'
        });
        $("a").css("cursor","pointer");
        $('#scrollnews').cycle({
            pause:1,
            speed:500,
            fx: 'scrollUp' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        });
        //conbj
        $(".index-conbj").hover(function(){
            $(this).css("background-position","-333px -92px");
        },function(){
            $(this).css("background-position","0 -91px");
        });
        //opcity
        $(".hotnewsbj").css("opacity","0.9");
        $(".tabBox a").css("opacity","0.9");
        $(".index-subshow").hover(function(){
                $(".index-subcon").show();
            },function(){
                $(".index-subcon").hide();
            }
        );
        $(".index-subcon").hover(
            function(){
                $(this).show();
            },function(){
                $(this).hide();
            }
        );
    })
</script>
 <style type="text/css">
        .top-banner {
            WIDTH: 1200px; POSITION: relative; TEXT-ALIGN: center; MARGIN: 0px auto; HEIGHT:360px;
        }
        .top-banner A {
            WIDTH: 100%; DISPLAY: block; FLOAT: left;
        }

        .tabBox {
            Z-INDEX: 48; POSITION: absolute; TEXT-ALIGN: center; MARGIN: -30px auto 0px; WIDTH: 160px; HEIGHT: 10px; LEFT: 47%
        }

        .tabBox UL {
            PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
        }
        .tabBox A {
            LINE-HEIGHT: 0; TEXT-INDENT: -9999px; MARGIN: 0px 5px; WIDTH: 10px; DISPLAY: inline-block; BACKGROUND: #ce0609; FLOAT: left; HEIGHT:

            10px; FONT-SIZE: 0px; CURSOR: pointer
        }
        .tabBox A.activeSlide {
            BACKGROUND: #fff
        }
        .STYLE1 {font-size: 14px}
 </style>
 </head>
<body>
<div style="width:100%;background-image:url('__PUBLICAPP__/images/qhdnrra/qhdnrra_in--11_02.jpg'); background-repeat:repeat-x;height:236px;">
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
                <li><a class=nav1 id=a0 href="/">网站首页</a><span></span></li>
                <li><a class=nav1 id=a1 href="/php/about.php?id=1">分会概况</a><span></span>
                    <div class=navoutDiv>
                        <ul>
                            <li><a class=xia href="/php/about.php?id=1" _fcksavedurl="#">&nbsp;分会简介</a> </li>
                            <li><a class=xia href="/php/about.php?id=2" _fcksavedurl="#">&nbsp;分会章程</a> </li>
                            <li><a class=xia href="/php/about.php?id=3" _fcksavedurl="#">&nbsp;工作委员会</a> </li>
                            <li><a class=xia href="/php/about.php?id=4" _fcksavedurl="#">&nbsp;学会工作</a> </li>
                        </ul>
                    </div>
                </li>

                <li><a class=nav1 id=a2 href="/php/keyan.php?id=25">成果展示</a><span></span>
                    <div class=navoutDiv>
                        <ul>
                            <li><a class=xia href="/php/keyan.php?id=25" _fcksavedurl="#">&nbsp;科研项目</a> </li>
                            <li><a class=xia href="/php/keyan.php?id=26" _fcksavedurl="#">&nbsp;论文专区</a> </li>
                            <li><a class=xia href="/php/keyan.php?id=27" _fcksavedurl="#">&nbsp;专利专区</a> </li>
                        </ul>
                    </div></li>

                <li><a class=nav1 id=a3 href="/php/zhijian.php?id=28">会员社区</a><span></span>
                    <div class=navoutDiv>
                        <ul>
                            <li><a class=xia href="/php/zhijian.php?id=28" _fcksavedurl="">&nbsp;关于入会</a> </li>
                            <li><a class=xia href="/php/zhijian.php?id=29" _fcksavedurl="#">&nbsp;单位会员名录</a> </li>
                            <li><a class=xia href="/php/zhijian.php?id=30" _fcksavedurl="#">&nbsp;工作报告</a> </li>
<!--                            <li><a class=xia href="/php/zhijian.php?id=31" _fcksavedurl="#">&nbsp;承检范围</a> </li>-->
                        </ul>
                    </div>  </li>

<!--                <li><a class=nav1 id=a4 href="/php/yyk.php?id=32">秦皇岛医养康中心</a><span></span>-->
<!--                    <div class=navoutDiv>-->
<!--                        <ul>-->
<!--                            <li><a class=xia href="/php/yyk.php?id=32" _fcksavedurl="">&nbsp;机构介绍</a> </li>-->
<!--                            <li><a class=xia href="/php/yyk.php?id=33" _fcksavedurl="#">&nbsp;养老服务</a> </li>-->
<!--                            <li><a class=xia href="/php/yyk.php?id=34" _fcksavedurl="#">&nbsp;互联网+康复辅具</a> </li>-->
<!--                        </ul>-->
<!--                    </div></li>-->
<!---->
<!--                <li><a class=nav1 id=a6 href="/php/ziyuan_list.php?lmid=14">资源资讯</a><span></span>-->
<!--                    <div class=navoutDiv>-->
<!--                        <ul>-->
<!--                            <li><a class=xia href="/php/ziyuan_list.php?lmid=14" _fcksavedurl="">&nbsp;政策法规</a> </li>-->
<!--                            <li><a class=xia href="/php/ziyuan_list.php?lmid=85" _fcksavedurl="#">&nbsp;学术动态</a> </li>-->
<!--                            <li><a class=xia href="/php/ziyuan_list.php?lmid=86" _fcksavedurl="#">&nbsp;辅具科普知识</a> </li>-->
<!--                        </ul>-->
<!--                    </div></li>-->
<!---->
<!--                <li><a class=nav1 id=a7 href="/php/cp_list.php?lmid=8">产品服务</a><span></span>-->
<!--                    <div class=navoutDiv>-->
<!--                        <ul>-->
<!--                            <li><a class=xia href="/php/cp_list.php?lmid=8" _fcksavedurl="">&nbsp;辅具产品介绍</a> </li>-->
<!--                            <li><a class=xia href="/php/cp_list.php?lmid=7" _fcksavedurl="#">&nbsp;辅具租赁产品介绍</a> </li>-->
<!--                        </ul>-->
<!--                    </div></li>-->

                <li><a class=nav1 id=a8 href="/php/hezuo.php?id=47">联系我们</a><span></span>
                </li>

            </ul>
        </div>
    </div>
</div><table width="1200px" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:25px;">
    <tr>
        <td bgcolor="#FFFFFF">
            <div id=banner class=top-banner>
                <a style="BACKGROUND: url(__PUBLICAPP__/images/qhdnrra/pic_53_1513936130.jpg) no-repeat center top; HEIGHT: 360px;min-width:1200px; CURSOR: pointer" href="#" target="_blank"></a>
                <a style="BACKGROUND: url(__PUBLICAPP__/images/qhdnrra/pic_54_1513936154.jpg) no-repeat center top; HEIGHT: 360px;min-width:1200px; CURSOR: pointer" href="#" target="_blank"></a>
                <a style="BACKGROUND: url(__PUBLICAPP__/images/qhdnrra/pic_60_1513936165.jpg) no-repeat center top; HEIGHT: 360px;min-width:1200px; CURSOR: pointer" href="" target="_blank"></a>
                <a style="BACKGROUND: url(__PUBLICAPP__/images/qhdnrra/pic_61_1513936176.jpg) no-repeat center top; HEIGHT: 360px;min-width:1200px; CURSOR: pointer" href="" target="_blank"></a>
            </div>
            <DIV class=tabBox>
                <UL id=btn></UL>
            </DIV>
        </td>
    </tr>
</table>
<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px;">
    <tr>
        <td width="300" height="80" valign="top" bgcolor="#FFFFFF" style="padding-top:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="35"><div align="left" style="margin-left:2px; margin-top:2px; background-image:url(__PUBLICAPP__/images/qhdnrra/top.jpg); background-repeat:no-repeat; padding-left:40px;"><span class="font_blue_16_bold">通知公告</span></div></td>
                    <td width="58"><div align="center"><a href="/php/news_list.php?lmid=1" target="_blank" class="fontgery12" style="font-size:10px;">MORE</a></div></td>
                </tr>
            </table>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding:10px 0px;">


                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
                            <tr >
                                <td><a href="php/news_show.php?id=137" target="_blank" class="fontgrey14">
                                        关于召开2018年康复工程学术大会              </a></td>
                                <td class="font_gary_12_x"><div align="right">2018-01-05&nbsp;</div></td>
                            </tr>
                            <tr >
                                <td><a href="php/news_show.php?id=136" target="_blank" class="fontgrey14">
                                        关于召开推进秦皇岛市“国家康复              </a></td>
                                <td class="font_gary_12_x"><div align="right">2017-12-27&nbsp;</div></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
<!--            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:20px; margin-top:15px;">-->
<!--                <tr>-->
<!--                    <td height="35"><div align="left" style="margin-left:2px; margin-top:2px; background-image:url(__PUBLICAPP__/images/qhdnrra/top.jpg); background-repeat:no-repeat; padding-left:40px;"><span class="font_blue_16_bold">专家风采</span></div></td>-->
<!--                    <td width="58"><div align="center"><a href="/php/zhuanjia_list.php?lmid=88" target="_blank" class="fontgery12" style="font-size:10px;">MORE</a></div></td>-->
<!--                </tr>-->
<!--            </table>-->
<!--            <div id="foucsBox">-->
<!--                <ul class="imgCon">-->
<!--                    <!--展示图片开始-->-->
<!--                    <li><a href="php/zhuanjia_show.php?id=256" target="_blank">-->
<!--                            <img width="290" height="206" src="__PUBLICAPP__/images/qhdnrra/anli_256_1515376251.jpg" /></a>-->
<!--                        <div class="imgTitle"><a href="php/zhuanjia_show.php?id=256">樊瑜波</a></div>-->
<!--                        <div class="showPage"></div>-->
<!--                    </li>-->
<!---->
<!--                    <li><a href="php/zhuanjia_show.php?id=255" target="_blank">-->
<!--                            <img width="290" height="206" src="__PUBLICAPP__/images/qhdnrra/anli_255_1515376118.jpg" /></a>-->
<!--                        <div class="imgTitle"><a href="php/zhuanjia_show.php?id=255">王喜太</a></div>-->
<!--                        <div class="showPage"></div>-->
<!--                    </li>-->
<!---->
<!--                    <li><a href="php/zhuanjia_show.php?id=254" target="_blank">-->
<!--                            <img width="290" height="206" src="__PUBLICAPP__/images/qhdnrra/anli_254_1515376014.jpg" /></a>-->
<!--                        <div class="imgTitle"><a href="php/zhuanjia_show.php?id=254">秦泗河</a></div>-->
<!--                        <div class="showPage"></div>-->
<!--                    </li>-->
<!--                    <!--展示图片结束-->-->
<!--                </ul>-->
<!--                <div class="foucs"></div>-->
<!--                <div class="rBtn foucsButton"> <span></span> <img /> </div>-->
<!--                <div class="lBtn foucsButton"> <span></span> <img /></div>-->
<!--            </div></td>-->
        <td width="450" valign="top" bgcolor="#FFFFFF"><table width="393" border="0" cellpadding="0" cellspacing="0" background="__PUBLICAPP__/images/qhdnrra/qhdnrra_in--11_06.jpg" style="margin-top:20px; margin-bottom:20px; margin-left:40px;">
                <tr>
                    <td width="63"><div align="center"><span class="font_white_16_bold"><a href="/php/news_list.php?lmid=8" target="_blank" class="fontwhite16_bold">新闻</a></span></div></td>
<!--                    <td width="255" height="35" ><div align="left"><span class="font_white_16_bold">&nbsp;&nbsp;<a href="/php/ziyuan_list.php?lmid=14" target="_blank" class="fontwhite16_bold">资讯</a></span></div></td>-->
                    <td width="75"><div align="center"><a href="/php/news_list.php?lmid=8" target="_blank" class="fontgery12" style="font-size:10px;">MORE</a></div></td>
                </tr>
            </table>
            <table width="393" border="0" cellpadding="0" cellspacing="0" style="margin-left:40px;">
                <tr>
                    <td class="s_all" style="padding:5px"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="x_bottom">
                            <tr>
                                <td width="34%" height="120"><div align="left">
                                        <table width="80%" border="0" align="center" cellspacing="0" style="margin-left:5px;margin-right:0px;">
                                            <tr>
                                                <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin-right:5px;">
                                                        <tr>
                                                            <td width="107" align="center"><a href="php/news_show.php?id=126" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/jishu_126_1514169815.jpg" width="110" height="85" border="0" /></a></td>
                                                        </tr>

                                                    </table></td>
                                            </tr><tr>      </tr>
                                        </table>

                                    </div></td>
                                <td width="66%">


                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
                                        <tr >
                                            <td><a href="php/news_show.php?id=146" target="_blank" class="fontgrey14">
                                                    澳大利亚魏基成夫妇“天籁列车”驶进              </a></td>
                                        </tr>
                                        <tr >
                                            <td><a href="php/news_show.php?id=126" target="_blank" class="fontgrey14">
                                                    首届外骨骼机器人技术研讨会在国康秦              </a></td>
                                        </tr>
                                        <tr >
                                            <td><a href="php/news_show.php?id=122" target="_blank" class="fontgrey14">
                                                    德州三和电器有限公司领导莅临  国家              </a></td>
                                        </tr>
                                        <tr >
                                            <td><a href="php/news_show.php?id=121" target="_blank" class="fontgrey14">
                                                    国家康复辅具研究中心秦皇岛研究院迎              </a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="x_bottom">
                            <tr>
                                <td width="66%"><div align="left" style="margin-left:5px;">


                                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
                                            <tr >
                                                <td><a href="php/news_show.php?id=125" target="_blank" class="fontgrey14">
                                                        国家康复辅具研究中心和中国康复辅助              </a></td>
                                            </tr>
                                            <tr >
                                                <td><a href="php/news_show.php?id=124" target="_blank" class="fontgrey14">
                                                        中国残疾人辅助器具中心领导莅临  国              </a></td>
                                            </tr>
                                            <tr >
                                                <td><a href="php/news_show.php?id=123" target="_blank" class="fontgrey14">
                                                        东北大学秦皇岛分校生物医学工程专业              </a></td>
                                            </tr>
                                            <tr >
                                                <td><a href="php/news_show.php?id=122" target="_blank" class="fontgrey14">
                                                        德州三和电器有限公司领导莅临  国家              </a></td>
                                            </tr>
                                        </table>
                                    </div></td>
                                <td width="34%" height="120">


                                    <table width="80%" border="0" align="center" cellspacing="0" style="margin-left:5px;margin-right:0px;">
                                        <tr>
                                            <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin-right:5px;">
                                                    <tr>
                                                        <td width="107" align="center"><a href="php/news_show.php?id=122" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/jishu_122_1514169702.jpg" width="120" height="90" border="0" /></a></td>
                                                    </tr>

                                                </table></td>
                                        </tr><tr>      </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="34%" height="118"><div align="left">



                                        <table width="80%" border="0" align="center" cellspacing="0" style="margin-left:5px;margin-right:0px;">
                                            <tr>
                                                <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin-right:5px;">
                                                        <tr>
                                                            <td width="107" align="center"><a href="php/news_show.php?id=142" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/jishu_142_1520128584.jpg" width="110" height="85" border="0" /></a></td>
                                                        </tr>

                                                    </table></td>
                                            </tr><tr>      </tr>
                                        </table>

                                    </div></td>
                                <td width="66%">


                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
                                        <tr >
                                            <td><a href="php/news_show.php?id=150" target="_blank" class="fontgrey14">
                                                    秦皇岛京河科学技术研究院业务部主任              </a></td>
                                        </tr>
                                        <tr >
                                            <td><a href="php/news_show.php?id=148" target="_blank" class="fontgrey14">
                                                    河北省政策科学研究会常务副会长马建              </a></td>
                                        </tr>
                                        <tr >
                                            <td><a href="php/news_show.php?id=147" target="_blank" class="fontgrey14">
                                                    促进秦皇岛市康复辅具产业健康发展              </a></td>
                                        </tr>
                                        <tr >
                                            <td><a href="php/news_show.php?id=146" target="_blank" class="fontgrey14">
                                                    澳大利亚魏基成夫妇“天籁列车”驶进              </a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table></td>
                </tr>
            </table></td>
<!--        <td width="450" valign="top" bgcolor="#FFFFFF"><table width="393" border="0" cellpadding="0" cellspacing="0" background="__PUBLICAPP__/images/qhdnrra/qhdnrra_in--11_03.jpg" style="margin-top:20px; margin-bottom:20px; margin-left:30px;">-->
<!--                <tr>-->
<!--                    <td width="63"><div align="center"><span class="font_white_16_bold"><a href="#" target="_blank" class="fontwhite16_bold">科研</a></span></div></td>-->
<!--                    <td width="255" height="35" ><div align="left"><span class="font_white_16_bold">&nbsp;&nbsp;<a href="/php/zhijian.php?id=28" target="_blank" class="fontwhite16_bold">质检</a></span></div></td>-->
<!--                    <td width="75"><div align="center"><a href="/php/zhijian.php?id=28" target="_blank" class="fontgery12" style="font-size:10px;">MORE</a></div></td>-->
<!--                </tr>-->
<!--            </table>-->
<!--            <table width="393" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">-->
<!--                <tr>-->
<!--                    <td class="s_all" style="padding:0px"><img src="__PUBLICAPP__/images/qhdnrra/keyan.jpg" width="374" height="370" /></td>-->
<!--                </tr>-->
<!--            </table></td>-->
    </tr>
</table>
<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px; margin-bottom:40px;">
    <tr>
        <td width="300" height="80" valign="top" bgcolor="#FFFFFF" style="padding-top:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
                <tr>
                    <td height="35" bgcolor="054ea2"><div align="center"><span class="font_white_16_bold"><a href="/php/shiji_list.php?lmid=87" target="_blank" class="fontwhite16_bold">大事记</a></span></div></td>
                </tr>
            </table>



            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
                <tr >
                    <td bgcolor="#D2EDFF" style="border-bottom:1px solid #fff; padding:5px;"><a href="php/shiji_show.php?id=223" target="_blank" class="fontgrey14">
                            2016年1月27日，秦皇岛市政府与国家康复辅具研究中心签署战略合作协议，民政部副部长邹铭出席。              </a></td>
                </tr>
                <tr >
                    <td bgcolor="#D2EDFF" style="border-bottom:1px solid #fff; padding:5px;"><a href="php/shiji_show.php?id=224" target="_blank" class="fontgrey14">
                            2016年7月7日，国家康复辅具研究中心秦皇岛研究院和国家康复辅具质检中心秦皇岛分中心在秦皇岛经济技术开发区正式成立。              </a></td>
                </tr>
                <tr >
                    <td bgcolor="#D2EDFF" style="border-bottom:1px solid #fff; padding:5px;"><a href="php/shiji_show.php?id=225" target="_blank" class="fontgrey14">
                            2016年7月8日，中国康复辅助器具协会康复工程专业委员会成立大会暨中国康复医学与工程学术研讨会在秦皇岛成功召开。              </a></td>
                </tr>
                <tr >
                    <td bgcolor="#D2EDFF" style="border-bottom:1px solid #fff; padding:5px;"><a href="php/shiji_show.php?id=226" target="_blank" class="fontgrey14">
                            2017年2月10日，国家康复辅具研究中心与秦皇岛市政府召开2017年院地共建工作推进会              </a></td>
                </tr>
            </table>



        </td>
        <td width="450" valign="top" bgcolor="#FFFFFF"><table width="393" border="0" cellpadding="0" cellspacing="0" background="__PUBLICAPP__/images/qhdnrra_in--11_10.jpg" style="margin-top:20px; margin-bottom:20px; margin-left:40px;">
                <tr>
                    <td width="63"><div align="center"><span class="font_white_16_bold"><a href="/php/cp_list.php?lmid=8" target="_blank" class="fontwhite16_bold">产品</a></span></div></td>
                    <td width="255" height="35" ><div align="left"><span class="font_white_16_bold">&nbsp;&nbsp;<a href="/php/yyk.php?id=33" target="_blank" class="fontwhite16_bold">服务</a></span></div></td>
                    <td width="75"><div align="center"><a href="/php/cp_list.php?lmid=8" target="_blank" class="fontgery12" style="font-size:10px;">MORE</a></div></td>
                </tr>
            </table>
            <table width="393" border="0" cellpadding="0" cellspacing="0" style="margin-left:40px;">
                <tr>
                    <td class="s_all" style="padding:5px">



                        <table width="100%" border="0" cellspacing="0" style="margin-top:5px;margin-bottom:5px;">
                            <tr>
                                <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin:10px;">
                                        <tr>
                                            <td width="107" align="center"><a href="php/cp_show.php?id=193" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/news_193_1514355413.png" width="160" height="160" border="0" style="border:#f0f0f2 solid 0px; padding:0px;"/></a></td>
                                        </tr>

                                    </table></td>
                                <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin:10px;">
                                        <tr>
                                            <td width="107" align="center"><a href="php/cp_show.php?id=192" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/news_192_1514355308.png" width="160" height="160" border="0" style="border:#f0f0f2 solid 0px; padding:0px;"/></a></td>
                                        </tr>

                                    </table></td>
                            </tr><tr>	    <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin:10px;">
                                        <tr>
                                            <td width="107" align="center"><a href="php/cp_show.php?id=191" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/news_191_1514355093.png" width="160" height="160" border="0" style="border:#f0f0f2 solid 0px; padding:0px;"/></a></td>
                                        </tr>

                                    </table></td>
                                <td><table border="0" align="center" cellpadding="0" cellspacing="0" style="margin:10px;">
                                        <tr>
                                            <td width="107" align="center"><a href="php/cp_show.php?id=190" target="_blank"><img src="__PUBLICAPP__/images/qhdnrra/news_190_1514354904.png" width="160" height="160" border="0" style="border:#f0f0f2 solid 0px; padding:0px;"/></a></td>
                                        </tr>

                                    </table></td>
                            </tr><tr>      </tr>
                        </table>
                    </td>
                </tr>
            </table></td>
        <td width="450" valign="top" bgcolor="#FFFFFF"><table width="393" border="0" cellpadding="0" cellspacing="0" background="__PUBLICAPP__/images/qhdnrra/qhdnrra_in--11_12.jpg" style="margin-top:20px; margin-bottom:20px; margin-left:30px;">
                <tr>
                    <td width="63"><div align="center"><span class="font_white_16_bold"><a href="/php/keyan.php?id=25" target="_blank" class="fontwhite16_bold">医疗</a></span></div></td>
                    <td width="255" height="35" ><div align="left"><span class="font_white_16_bold">&nbsp;&nbsp;<a href="/php/yyk.php?id=32" target="_blank" class="fontwhite16_bold">养老</a></span></div></td>
                    <td width="75"><div align="center"><a href="/php/yyk.php?id=32" target="_blank" class="fontgery12" style="font-size:10px;">MORE</a></div></td>
                </tr>
            </table>
            <table width="393" border="0" cellpadding="0" cellspacing="0" style="margin-left:30px;">
                <tr>
                    <td class="s_all" style="padding:0px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img src="__PUBLICAPP__/images/qhdnrra/yyk.jpg" width="390" height="253" /></td>
                            </tr>
                            <tr>
                                <td><div class="fontgery12 STYLE1" style="padding:5px; padding-bottom:10px; padding-top:10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国康医院秦皇岛分院位于秦皇岛市民政事业服务中心4号楼，建设八层医院综合楼1栋，建筑面积7390.70平方米。秦皇岛康养（养老）中心位于秦皇岛市民政事业服务中心1号楼和2号楼。充分发挥国家康复辅具研究中心技术优势，打造“医养康研一体化”并兼顾兜底保障功能的示范性康养机构。</div></td>
                            </tr>
                        </table></td>
                </tr>
            </table></td>
    </tr>
</table>
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
<div style="background-color:#073674;min-width:1200px;"><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:0px;">
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