<table width="1200px" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:25px;">
    <tr>
        <td bgcolor="#FFFFFF">
            <div id=banner class=top-banner>
            {link:banner}<!--全部链接使用link:all-->
             {if $link['picpath']}  
                 <a style="BACKGROUND: url([link:picpath]) no-repeat center top; HEIGHT: 360px;min-width:1200px; CURSOR: pointer" href="[link:url]" target="_blank"></a>
             {/if} 
             {/link} 
            </div>
            <DIV class=tabBox>
                <UL id=btn></UL>
            </DIV>
        </td>
    </tr>
</table>

 
 <div class="mainL" style="width: 1200px;margin-left: auto">
        <div class="eventVoice clearfix">
                        <div class="events fl clearfix">
                            <div class="events_title"><b>{$sorts['100028']['name']}</b><span>{$sorts['100028']['ename']}</span><a class="more fr" href="{$sorts['100028']['url']}" target="_blank">更多</a>
                            </div>
                    <div class="fl">

{news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100028) where=(ispass='1') limit=(8)}}     

{if $news_i<=4}                      
      <dl class="eventsDl eventsDlA">
            <dt><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]">[news:title $len=40]</a></dt>
            <dd>{date($news['addtime'],Y-m-d)}</dd>
        </dl> 
{/if}

 {if $news_i==4} 
       </div> 
      <div class="fr">
 {/if}

 {if $news_i>4} 
 <dl class="eventsDl eventsDlB">
            <dt><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]">[news:title $len=40]</a></dt>
            <dd>{date($news['addtime'],Y-m-d)}</dd>
        </dl>
 {/if}  
{/news}  
 </div>   
  </div>

 
 <div class="voice fl clearfix" style="margin-left: 60px;"> 
      <div class="voice_title"><b>{$sorts['100029']['name']}</b><span>{$sorts['100029']['ename']}</span><a class="more fr" href="{$sorts['100029']['url']}" target="_blank">更多</a>
      </div>

        {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100029) where=(ispass='1') limit=(7)}}

        <dl class="clearfix" style="margin-top: 0">
         <dt>{date($news['addtime'],m-d)}</dt>
               <dd><p><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]"> [news:title $len=40]</a></p></dd>
        </dl>
        {/news}
     </div>
      </div>
</div>

<div class="voice fl clearfix" style="margin-left: 60px;">
    <div class="voice_title"><b>{$sorts['100030']['name']}</b><span>{$sorts['100030']['ename']}</span><a class="more fr" href="{$sorts['100030']['url']}" target="_blank">更多</a>
    </div>

    {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100030) where=(ispass='1') limit=(7)}}

    <dl class="clearfix" style="margin-top: 0">
        <dt>{date($news['addtime'],m-d)}</dt>
        <dd><p><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]"> [news:title $len=40]</a></p></dd>
    </dl>
    {/news}
</div>




<!--<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px; margin-bottom:40px; margin:0 auto">-->
<!--    <tr>-->
<!--        <td width="280" height="80" valign="top" bgcolor="#FFFFFF" style="padding-top:15px;">-->
<!--                <div class="yuevents fl clearfix">-->
<!--<!--                    <div class="events_title"><b>精彩回顾</b>-->-->
<!--<!--                        <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>-->-->
<!--<!--                        </div>-->-->
<!--                    <div class="voice_title"><b>{$sorts['100030']['name']}</b><span>{$sorts['100030']['ename']}</span><a class="more fr" href="{$sorts['100030']['url']}" target="_blank">更多</a>-->
<!--                    </div>-->
<!--                    {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100029) where=(ispass='1') limit=(7)}}-->
<!--                    <div>-->
<!--                        <dl class="eventsDl eventsDlA">-->
<!--                            <dt>{date($news['addtime'],m-d)</dt>-->
<!--                            <dd><p><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]"> [news:title $len=40]</a></p></dd>-->
<!---->
<!--                        </dl>-->
<!--                    </div>-->
<!--                    {/news}-->
<!--                </div>-->
<!--        </td>-->
<!--        <td width="280" valign="top" bgcolor="#FFFFFF">-->
<!---->
<!--                <div class="yuevents fl clearfix">-->
<!--                    <div class="events_title"><b>行业信息</b>-->
<!--                        <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>-->
<!--                    </div>-->
<!--                    <div><dl class="eventsDl eventsDlA">-->
<!--                            <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>-->
<!--                            <dd>2018.05.08</dd>-->
<!--                        </dl>-->
<!--                    </div>-->
<!--                </div>-->
<!--        </td>-->
<!--        <td width="280" valign="top" bgcolor="#FFFFFF">-->
<!--            <div class="yuevents fl clearfix">-->
<!--                <div class="events_title"><b>专业知识</b>-->
<!--                    <span>Events</span><a class="more fr" href="http://news.buaa.edu.cn/xsjwhhd_new.htm" target="_blank">更多</a>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <dl class="eventsDl eventsDlA">-->
<!--                        <dt><a href="http://news.buaa.edu.cn/info/1011/43549.htm" title="【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会" target="_blank">【北航音乐厅预告】北京交响乐团“坚定文化自信•弘扬正能量”2018年进校园北航专场音乐会</a></dt>-->
<!--                        <dd>2018.05.08</dd>-->
<!--                    </dl>-->
<!--                </div>-->
<!--            </div>-->
<!--          </td>-->
<!--    </tr>-->
<!--</table>-->