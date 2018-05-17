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
                            <div class="events_title"><b>{$sorts['100028']['name']}</b><span>{$sorts['100028']['ename']}</span><a class="more fr" href="{$sorts['100028']['url']}" target="_blank">更多</a></div>    
 <div class="fl"> 

{news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100028) where=(ispass='1') limit=(8)}}     

{if $news_i<=4}                      
      <dl class="eventsDl eventsDlA">
            <dt><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]">[news:title $len=30]</a></dt>
            <dd>{date($news['addtime'],Y.m.d)}</dd>
        </dl> 
{/if}

 {if $news_i==4} 
       </div> 
      <div class="fr">
 {/if}

 {if $news_i>4} 
 <dl class="eventsDl eventsDlB">
            <dt><a href="[news:url]" title="[news:title]" target="_blank" style="color:[news:color]">[news:title $len=30]</a></dt>
            <dd>{date($news['addtime'],Y.m.d)}</dd>
        </dl>
 {/if}  
{/news}  
 </div>  

<script>_showDynClickBatch(['dynclicks_u9_3043','dynclicks_u9_3040','dynclicks_u9_3033','dynclicks_u9_3031','dynclicks_u9_3028','dynclicks_u9_3016','dynclicks_u9_3014','dynclicks_u9_3012'],[3043,3040,3033,3031,3028,3016,3014,3012],"wbnews", 1405884961)
</script>
<!--#endeditable-->
  </div>

        <div class="voice fl clearfix" style="margin-left: 60px;">
                            
                        
                            <div class="voice_title"><b>通知公告</b><span>Notice</span><a class="more fr" href="http://news.buaa.edu.cn/xxgg_new.htm" target="_blank">更多</a></div>  
                            <!--#begineditable name="通知公告标题列表" viewid="50732"--><dl class="clearfix" style="margin-top: 0">
                                <dt>04.12</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43033.htm" title="北京航空航天大学关于公开遴选部分学院院长的公告" target="_blank">北京航空航天大学关于公开遴选部分学院院长的公告</a></p></dd>
                            </dl>
<dl class="clearfix">
                                <dt>05.16</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43710.htm" title="2018年大学生征兵入伍工作通知暨征兵优待政策简介" target="_blank">2018年大学生征兵入伍工作通知暨征兵优待政策简介</a></p></dd>
                            </dl>
<dl class="clearfix">
                                <dt>05.15</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43678.htm" title="关于举办2018年北京航空航天大学校园开放日暨高招咨询活动的通知" target="_blank">关于举办2018年北京航空航天大学校园开放日暨高招咨询活动的通知</a></p></dd>
                            </dl>
<dl class="clearfix">
                                <dt>05.09</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43569.htm" title="关于办理2018年北航机动车停车证的通告" target="_blank">关于办理2018年北航机动车停车证的通告</a></p></dd>
                            </dl>
<dl class="clearfix">
                                <dt>05.08</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43548.htm" title="2018年莫斯科航空学院暑期学校通知" target="_blank">2018年莫斯科航空学院暑期学校通知</a></p></dd>
                            </dl>
<dl class="clearfix">
                                <dt>05.07</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43507.htm" title="关于申报2018年北航“学院国际评估支持计划”的通知" target="_blank">关于申报2018年北航“学院国际评估支持计划”的通知</a></p></dd>
                            </dl>
<dl class="clearfix">
                                <dt>05.03</dt>
                                <dd><p><a href="http://news.buaa.edu.cn/info/1010/43409.htm" title="关于校园西路、科技园路一侧行车道临时封闭的通知" target="_blank">关于校园西路、科技园路一侧行车道临时封闭的通知</a></p></dd>
                            </dl>
<script>_showDynClickBatch(['dynclicks_u10_2916','dynclicks_u10_3044','dynclicks_u10_3035','dynclicks_u10_3019','dynclicks_u10_3015','dynclicks_u10_3009','dynclicks_u10_2992'],[2916,3044,3035,3019,3015,3009,2992],"wbnews", 1405884961)</script>
<!--#endeditable-->
                        </div>
                    </div>
</div>







<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:10px; margin-bottom:40px; margin:0 auto">
    <tr>
        <td width="280" height="80" valign="top" bgcolor="#FFFFFF" style="padding-top:15px;">
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