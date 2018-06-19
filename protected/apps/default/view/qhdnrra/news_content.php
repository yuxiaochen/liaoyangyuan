<?php if(!defined('APP_NAME')) exit;?>
<link rel="stylesheet" type="text/css" href="http://news.buaa.edu.cn/../../dfiles/12596/dfiles/12596/css/headerfooter.css" />
<link rel="stylesheet" type="text/css" href="http://news.buaa.edu.cn/../../dfiles/12596/dfiles/12596/css/style.css" />
<script type="text/javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/dfiles/12596/js/js.js"></script>
<link rel="stylesheet" type="text/css" href="http://news.buaa.edu.cn/../../dfiles/12596/_sitegray/_sitegray_d.css" />
<script language="javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/_sitegray/_sitegray.js"></script>
<link rel="stylesheet" type="text/css" href="http://news.buaa.edu.cn/../../dfiles/12596/content.vsb.css" />
<meta name="keywords" content="新闻网,综合新闻" />
<link rel="stylesheet" type="text/css" href="http://news.buaa.edu.cn/../../_sitegray/_sitegray_d.css" />
<script language="javascript" src="http://news.buaa.edu.cn/../../_sitegray/_sitegray.js"></script>
<link rel="stylesheet" type="text/css" href="http://news.buaa.edu.cn/../../content.vsb.css" />
<META Name="keywords" Content="新闻网,学术及文化活动" />
<script type="text/javascript" src="http://news.buaa.edu.cn/../../system/resource/js/vsbscreen.min.js" id="_vsbscreen" devices="pc|pad"></script>
<script type="text/javascript" src="http://news.buaa.edu.cn/../../system/resource/js/counter.js"></script>
<div class="subnav auto">
    /<span>{$daohang[0]['name']}</span>
</div>
<div class="main w1102">
    <script language="javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/_dwr/interface/newsvotedwr.js"></script>
    <script language="javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/_dwr/engine.js"></script>
    <script language="javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/system/resource/js/news/newscontent.js"></script>
    <link href="http://news.buaa.edu.cn/../../dfiles/12596/system/resource/js/photoswipe/3.0.5.1/photoswipe.css" type="text/css" rel="stylesheet">
    <script language="javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/system/resource/js/photoswipe/3.0.5.1/klass.min.js"></script>
    <script language="javascript" src="http://news.buaa.edu.cn/../../dfiles/12596/system/resource/js/ajax.js"></script>
    <form name="_newscontent_fromname">
      <script language="javascript" src="http://news.buaa.edu.cn/../../_dwr/interface/NewsvoteDWR.js"></script>
      <script language="javascript" src="http://news.buaa.edu.cn/../../_dwr/engine.js"></script>
      <script language="javascript" src="http://news.buaa.edu.cn/../../system/resource/js/news/newscontent.js"></script>
        <LINK href="http://news.buaa.edu.cn/../../system/resource/js/photoswipe/3.0.5.1/photoswipe.css" type="text/css" rel="stylesheet">
        <script language="javascript" src="http://news.buaa.edu.cn/../../system/resource/js/photoswipe/3.0.5.1/klass.min.js"></script>
        <script language="javascript" src="http://news.buaa.edu.cn/../../system/resource/js/ajax.js"></script>
        <div class="newsleft auto">
            <div class="newslefttit auto">
                <h1>{$info['title']}</h1>
            </div>
            <div class="newsleftcon auto">
                <div class="newsleftconmes auto">
                    <p><span class="lf"></span><span class="ri">点击数:{$info['hits']}&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;加入时间:{date($info['addtime'],Y-m-d)}</span></p>
                </div>
                <div class="newsleftconbox auto" id="vsb_content">
                    <div id="vsb_content">
                        {$info['content']['content']}
                    </div>
                    <div id="div_vote_id">
                    </div>
                </div>
            </div>
        </div>

        <div class="newsright auto">
            <div class="newsright1 auto">
                <a href="#" onclick="javascript:window.print()">打印</a>
                <script type="text/javascript"><!--
                    var SubjectLine=''+top.location.href;
                    var BodyText='Address:'+top.location.href;
                    var Message='<A CLASS=tomail HREF="mailto:?SUBJECT='+escape(SubjectLine)+'&BODY='+escape(BodyText)+'" OnMouseOver="status=\'\'; return true;" TITLE="">发送邮件<\/A>';
                    var MessageIE='<A CLASS=tomail HREF="mailto:?SUBJECT='+(SubjectLine)+'&BODY='+(BodyText)+'" OnMouseOver="status=\'\'; return true;" TITLE="">发送邮件<\/A>';
                    if(document.all) { document.write(MessageIE); }
                    else { document.write(Message); }
                    //--></script>
            </div>

            <div class="newsright2 auto">
                <div class="newsright2tit auto">分享</div>
                <div class="newsright2con auto">
                    <div class="bdshare">
                        <!-- Baidu Button BEGIN -->
                        <span style="float:left"><a href="#"><img src="http://news.buaa.edu.cn/../../dfiles/12596/dfiles/12596/images/shareicon1.jpg" /></a></span>
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
                            <a class="bds_tsina"></a> <a class="bds_qzone"></a>
                            <a class="bds_renren"></a> <a class="bds_tqq"></a>
                            <a class="bds_douban"></a> <span class="bds_more"></span> </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6838818"></script>
                        <script type="text/javascript" id="bdshell_js"></script>
                        <script type="text/javascript">
                            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
                        </script>
                    </div>
                </div>
            </div>
    </form>

    <div class="newsright3 auto">
        <div class="newsright3tit auto">
            <img src="http://news.buaa.edu.cn/../../dfiles/12596/dfiles/12596/images/showsidetit.jpg" />
        </div>
        <div class="newsright3con auto">
            <ul>
                {news:{table=(news) field=(id,title,color,addtime,method) order=(addtime DESC)  where=(ispass='1') limit=(7)}}
                <li>
                     <p><a style="color:[news:color]" title="[news:title]" target="_blank" href="[news:url]">[news:title $len=25]</a></p>
                </li>
                {/news}
            </ul>
        </div>
    </div>
</div>
</div>

<div class="showmain2 w1102">
    <div class="showmain2tit w1102">更多新闻</div>
     <div class="showmain2left2box w1102">
         {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=($pid) where=(ispass='1' AND id!=$info[id]) limit=(8)}}
            <div class="main2left2box auto">
            <div class="main2left2date auto">{date($news['addtime'],m)}月<br /><span>{date($news['addtime'],d)}</span></div>
            <div class="main2left2img auto">
                <img src="__PUBLICAPP__/images/newstips.png" width="80" height="80" />
            </div>
            <div class="main2left2text auto">
                <a href="[news:url]"  title="[news:title]" target="_blank">[news:title $len=25]</a>
                <p></p>
                <span>点击数:[news:hits]<br />加入时间:{date($news['addtime'],Y-m-d)}</span>
            </div>
        </div>
         {/news}
    </div>
</div>
