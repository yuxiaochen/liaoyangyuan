<<style type="text/css">
   .newsR{
    width: 380px;
   }
</style>
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

<div class="mainL" style="width: 90%;margin-left: auto">
         <div class="news clearfix">
                        <div class="news_title"><b>{$sorts['100059']['name']}</b><span>News</span><a class="more fr" style="margin-right: 210px" href="/index.php?r=default/column/index&col=news" target="_blank">更多</a></div>
                      <div class="newsL fl clearfix">
{news:{table=(news) field=(id,title,color,picture,addtime,method,description) column=(100059) where=(ispass='1') limit=(2)}}   
   <div {if $news_i==1} class="newsLdl fl" {/if} {if $news_i==2} class="newsLdl fr" {/if} >
<a href="[news:url]" title="[news:title]" target="_blank">
<dl>
<dt style="height:150px;background:url(dfiles/11107/img/mrt.jpg)"><img src="[news:picturepath]" style="height:150px;width:260px"> </dt>
<dd>
<h1>[news:title $len=20]</h1>
<h2>{date($news['addtime'],m-d)}
</h2>
<p>[news:description $len=40]... </p>
</dd>
</dl>
</a>  
</div> 
{/news}  

</div> 

<script>_showDynClickBatch(['dynclicks_u7_3217','dynclicks_u7_3205','dynclicks_u7_3192','dynclicks_u7_3189','dynclicks_u7_3172','dynclicks_u7_3127','dynclicks_u7_3089','dynclicks_u7_3094','dynclicks_u7_3076'],[3217,3205,3192,3189,3172,3127,3089,3094,3076],"wbnews", 1405884961)</script>
 
   <div class="newsR fl" style="margin-left: 80px;">
   <ul>
{news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100028) where=(ispass='1') limit=(8)}}     
   <li><a href="[news:url]" title="[news:title]" target="_blank"> <span>{date($news['addtime'],m-d)}</span>[news:title $len=20]...</a></li>
{/news}  

</ul>
</div><script>_showDynClickBatch(['dynclicks_u8_3217','dynclicks_u8_3205','dynclicks_u8_3192','dynclicks_u8_3214','dynclicks_u8_3211','dynclicks_u8_3210','dynclicks_u8_3202','dynclicks_u8_3198','dynclicks_u8_3195','dynclicks_u8_3208'],[3217,3205,3192,3214,3211,3210,3202,3198,3195,3208],"wbnews", 1405884961)</script>
     </div>     
</div>

 

<table   border="0" align="center" cellpadding="0" cellspacing="0" style="width: 90%;margin-left: auto;">
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
                <div class="events_title"><b>{$sorts['100029']['name']}</b>
                    <span>Events</span><a class="more fr" href="{$sorts['100029']['url']}" target="_blank">更多</a>
                </div>
                <div>
                    {news:{table=(news) field=(id,title,color,addtime,method,keywords,description) column=(100029) where=(ispass='1') limit=(4)}}
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






