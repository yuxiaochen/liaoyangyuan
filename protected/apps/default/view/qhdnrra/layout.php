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
        <td width="300" height="80" valign="top" bgcolor="#FFFFFF" style="padding-top:15px;">
            <div class="yuevents fl clearfix">
                <div class="events_title"><b>通知公告</b>
                    <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>
                </div>
                <div>
                    <dl class="eventsDl eventsDlA">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>
                        <dd>2018.05.08</dd>
                    </dl>
                </div>
            </div>

        </td>
        <td width="450" valign="top" bgcolor="#FFFFFF">
            <div class="events fl clearfix">
                <div class="events_title"><b>活动资讯</b><span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a></div>
                <!--#begineditable name="活动资讯标题列表" viewid="50730"-->
                <div class="fl">
                    <dl class="eventsDl eventsDlA">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>
                        <dd>2018.05.08</dd>
                    </dl>

                    <dl class="eventsDl eventsDlB">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43533.htm" title="【预告】2018届本科生“毕业嘉年华”活动" target="_blank">【预告】2018届本科生“毕业嘉年华”活动</a></dt>
                        <dd>2018.05.08</dd>
                    </dl>

                    <dl class="eventsDl eventsDlA">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43521.htm" title="【预告】北航高研论坛•非物质文化遗产系列讲座 | 覃代伦：锦说中华——中国民族织锦艺术审美史纲" target="_blank">【预告】北航高研论坛•非物质文化遗产系列讲座 | 覃代伦：锦说中华——中国民族织锦艺术审美史纲</a></dt>
                        <dd>2018.05.08</dd>
                    </dl>

                    <dl class="eventsDl eventsDlB">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43471.htm" title="研究生人文与科学素养系列讲座预告（5.7-5.13）" target="_blank">研究生人文与科学素养系列讲座预告（5.7-5.13）</a></dt>
                        <dd>2018.05.06</dd>
                    </dl>

                </div>

                <div class="fr">




                    <dl class="eventsDl eventsDlB">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43377.htm" title="【北航音乐厅预告】波兰公平竞争组合肢体舞蹈默剧《严肃喜剧》" target="_blank">【北航音乐厅预告】波兰公平竞争组合肢体舞蹈默剧《严肃喜剧》</a></dt>
                        <dd>2018.05.02</dd>
                    </dl>

                    <dl class="eventsDl eventsDlA">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43366.htm" title="学术讲座预告：【北航自动化大讲堂 第2期】 澳大利亚皇家墨尔本理工大学余星火教授特邀报告" target="_blank">学术讲座预告：【北航自动化大讲堂 第2期】 澳大利亚皇家墨尔本理工大学余星火教授特邀报告</a></dt>
                        <dd>2018.04.28</dd>
                    </dl>

                    <dl class="eventsDl eventsDlB">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43307.htm" title="【北航思源讲堂】首讲预告：春天不一样的美食养生——吃“春儿”" target="_blank">【北航思源讲堂】首讲预告：春天不一样的美食养生——吃“春儿”</a></dt>
                        <dd>2018.04.26</dd>
                    </dl>

                    <dl class="eventsDl eventsDlA">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43293.htm" title="空间与环境学院第二届创新论坛第三讲预告：从北航到南门二" target="_blank">空间与环境学院第二届创新论坛第三讲预告：从北航到南门二</a></dt>
                        <dd>2018.04.25</dd>
                    </dl>

                </div><script>_showDynClickBatch(['dynclicks_u9_3016','dynclicks_u9_3014','dynclicks_u9_3012','dynclicks_u9_3006','dynclicks_u9_2982','dynclicks_u9_2980','dynclicks_u9_2972','dynclicks_u9_2971'],[3016,3014,3012,3006,2982,2980,2972,2971],"wbnews", 1405884961)</script>
                <!--#endeditable-->
            </div>

    </tr>
</table>
<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px; margin-bottom:40px;">
    <tr>
        <td width="280" height="80" valign="top" bgcolor="#FFFFFF" style="padding-top:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:5px;">
                <div class="yuevents fl clearfix">
                    <div class="events_title"><b>精彩回顾</b>
                        <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>
                        </div>
                    <div>
                        <dl class="eventsDl eventsDlA">
                            <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>
                            <dd>2018.05.08</dd>
                        </dl>
                    </div>
                </div>


        </td>
        <td width="280" valign="top" bgcolor="#FFFFFF">

                <div class="yuevents fl clearfix">
                    <div class="events_title"><b>行业信息</b>
                        <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>
                    </div>
                    <div><dl class="eventsDl eventsDlA">
                            <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>
                            <dd>2018.05.08</dd>
                        </dl>
                    </div>
                </div>
        </td>
        <td width="280" valign="top" bgcolor="#FFFFFF">
            <div class="yuevents fl clearfix">
                <div class="events_title"><b>专业知识</b>
                    <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>
                </div>
                <div>
                    <dl class="eventsDl eventsDlA">
                        <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>
                        <dd>2018.05.08</dd>
                    </dl>
                </div>
            </div>
          </td>
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