$(document).ready(function(){
	
	/*菜单导航*/
    $('.menu').bind('mouseleave', function(){
        $('.menulist a').each(function(){  
    		$this = $(this); 
    		if($this[0].href == window.location.protocol + "//" + window.location.host + window.location.pathname || "/" == String(window.location.pathname)){
    			$(this).parent().addClass('activemenu').siblings().removeClass();
    			return false;
    		}
        });
    });

    
    $('.menulist').children("li").hover(function () {
    	$(this).addClass('activemenu').siblings().removeClass();
    });
    $('.menulist').children("li").click(function () {
    	$(this).addClass('activemenu').siblings().removeClass();
    });
    /*菜单导航下拉内容jquery*/
    $('.menulist li').mouseover(function(){
        $(this).find('.secondnmenu').show().stop().animate({opacity:1});
    });
    $('.menulist li').mouseout(function(){
        $(this).find('.secondnmenu').hide().stop().animate({opacity:0});
    });
    
    
    /* 侧导航*/
    var li = $('.side > ul > li');
    $('.secondside').hide();
    $('.side  ul  li').click(function () {
        var t = $(this);
        if(t.parent().hasClass('parent')){
            li.removeClass('leftmenu');

            if(t.hasClass('orgactive')){
                t.removeClass('leftmenu orgactive').addClass('orgicon')
            } else{
                if(t.hasClass('orgicon') ){
                    t.addClass('orgactive');
                }
                t.addClass('leftmenu');
            }
            if(t.next()[0].tagName !== 'UL' ) {
                li.removeClass('leftmenu')
                li.each(function(){
                    var _this = $(this);
                    if(_this.hasClass('orgactive')){
                        _this.addClass('orgicon').removeClass('orgactive')
                    }
                });
                t.removeClass('orgactive orgicon').addClass('leftmenu')

                $('.side  ul > ul').slideUp()
            }
        } else {
            t.parent().children().removeClass('leftmenu')
            t.addClass('leftmenu')
        }

    	if("contentLi" == $(this).attr("name")){
    		return true;
    	}
    	
        if("listUl" == $(this).attr("name")){
        	$('.side  ul  ul').slideUp();
        }
        
    	
        //显示或隐藏
        rwSlideToggle($(this).next('ul')).siblings('ul').slideUp();
//        $(this).next('ul').slideToggle().siblings('ul').slideUp();
    });
    
    /*菜单导航*/
    $('.menulist a').each(function(){  
		$this = $(this);
		if($this[0].href == window.location.protocol + "//" + window.location.host + window.location.pathname || "/" == String(window.location.pathname)){  
			$(this).parent().addClass('activemenu').siblings().removeClass();
			return false;
		} 
    });
    
    //选择理事会
	$('#selectOrg').change(function(){
		var path=$('#selectOrg').val();
		location.href=path;
	});
    
    
    /*图片丢失的默认显示*/
	//var allmemberImg=document.getElementsByClassName("memberPhoto");
	//var allOrgImg=document.getElementsByClassName("orgPhoto");
	var allmemberImg=document.getElementsByName("memberPhoto");
    var allOrgImg=document.getElementsByName("orgPhoto");
    for(var i=0;i<allmemberImg.length;i++){
    	var imgTemp=allmemberImg[i];
    	imgTemp.onerror=function()
    	 {
    	  this.src="/themes/csbme/images/default/DefaultMember.jpg";
    	  this.title="图片丢失,默认图片";
    	 }
    }
    for(var i=0;i<allOrgImg.length;i++){
    	var imgTemp=allOrgImg[i];
    	imgTemp.onerror=function()
    	 {
    	  this.src="/themes/csbme/images/default/DefaultGzwyh.jpg";
    	  this.title="图片丢失,默认图片";
    	 }
    }
    
    /*常务理事会滑动面板*/
    $('.lishicli').click(function(){
        $('.stand').slideToggle(300);
        $(this).toggleClass('sliactive');
        window.setTimeout("IFrameReSizeSon()",300);
    });

    /*理事会滑动面板*/
    $('.lishicli02').click(function(){
        $('.stand02').slideToggle(300);
        $(this).toggleClass('sliactive');
        window.setTimeout("IFrameReSizeSon()",300);
    });

    /*图片滚动*/
//    $(".flexslider").flexslider({
//        animation: "slide",
//        animationLoop: false,
//        itemWidth: 80,
//        itemMargin: 5,
//        minItems: 2,
//        maxItems: 4
//    });

    /*表格隔行变色*/
    var TbRow = document.getElementById("goaler");
    if (TbRow != null)
    {
        for (var i=0;i<TbRow.rows.length ;i++ )
        {
            if (TbRow.rows[i].rowIndex%2==1)
            {
                TbRow.rows[i].style.backgroundColor="";
            }
            else
            {
                TbRow.rows[i].style.backgroundColor="#F9F9F9";
            }
        }
    }
    
    //IE下iframe透明
    $("iframe").attr("allowtransparency","true")

})
