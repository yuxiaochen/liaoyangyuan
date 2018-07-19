<div class="layout  fadein-left">
    <div class="container">
        <div class="banner" data-pointer="1" data-interval="6" data-item="1" data-small="1" data-middle="1" data-big="1" data-style="border-white">
            <div class="carousel">
            {link:banner}
             {if $link['picpath']}
                 <div class="item"><a href="[link:url]" target="_blank">
                         <img src="[link:picpath]" alt="[link:name]" class="img-responsive"></a></div>
                {else}<div class="item"><a href="[link:url]" target="_blank">[link:name]</a></div>
              {/if}
             {/link} 
            </div>
        </div>
    </div>
</div>
 
 <div class="mainL" style="width: 100%;margin-left: auto">
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


<table   border="0" align="center" cellpadding="0" cellspacing="0" style="width: 1200px;margin-left: auto;">
    <tr>
        <td width="33%" valign="top" bgcolor="#FFFFFF">
            <div class="yuevents fl clearfix">
                <div class="events_title"><b>{$sorts['100030']['name']}</b>
                    <span>Events</span><a class="more fr" href="{$sorts['100030']['url']}" target="_blank">更多</a>
                </div>
                <div>
                    {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100030) where=(ispass='1') limit=(5)}}
                    <dl class="eventsDl eventsDlA">
                        <dt><a href="[news:url]" title="[news:title]" target="_blank"> [news:title $len=40]</a></dt>
                        <dd>{date($news['addtime'],Y-m-d)}</dd>
                    </dl>
                    {/news}
                </div>
            </div>
        </td>
        <td width="33%" valign="top" bgcolor="#FFFFFF">
            <div class="yuevents fl clearfix">
                <div class="events_title"><b>{$sorts['100031']['name']}</b>
                    <span>Events</span><a class="more fr" href="{$sorts['100031']['url']}" target="_blank">更多</a>
                </div>
                <div>
                    {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100031) where=(ispass='1') limit=(5)}}
                    <dl class="eventsDl eventsDlA">
                        <dt><a href="[news:url]" title="[news:title]" target="_blank"> [news:title $len=40]</a></dt>
                        <dd>{date($news['addtime'],Y-m-d)}</dd>
                    </dl>
                    {/news}
                </div>
            </div>
        </td>
        <td width="33%" valign="top" bgcolor="#FFFFFF">
            <div class="yuevents fl clearfix">
                <div class="events_title"><b>{$sorts['100032']['name']}</b>
                    <span>Events</span><a class="more fr" href="{$sorts['100032']['url']}" target="_blank">更多</a>
                </div>
                <div>
                    {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100032) where=(ispass='1') limit=(4)}}
                    <dl class="eventsDl eventsDlA">
                        <dt><a href="[news:url]" title="[news:title]" target="_blank">[news:title $len=40]</a></dt>
                        <dd>{date($news['addtime'],Y-m-d)}</dd>
                    </dl>
                    {/news}
                </div>
            </div>
        </td>
    </tr>
</table>






