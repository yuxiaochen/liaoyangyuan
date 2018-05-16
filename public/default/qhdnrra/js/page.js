 
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
 