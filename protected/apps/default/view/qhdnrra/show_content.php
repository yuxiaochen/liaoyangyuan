<html><head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>中国生物医学工程学会</title>
    <link rel="stylesheet" href="http://www.csbme.org/themes/csbme/css/style.css">
    <link rel="stylesheet" href="http://www.csbme.org/themes/csbme/css/ui-select.css">
    <link rel="stylesheet" href="http://www.csbme.org/themes/csbme/css/flexslider.css">
    <link rel="stylesheet" href="http://www.csbme.org/themes/csbme/css/org-add.css">
    <script src="http://www.csbme.org/themes/csbme/js/jquery.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/ui-select.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/test.js"></script><style type="text/css">input.styled { display: none; } select.styled { position: relative; width: 190px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>
    <script src="http://www.csbme.org/themes/csbme/js/js.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/org-add.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.flexslider-min.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.cxslide.min.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.cxscroll.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/nav.js"></script>
    <script src="http://www.csbme.org/themes/csbme/js/jquery.js"></script>
</head>
<body>
<div class="right orgazinationcon" style="position: relative;">
    <!--学会简介-->
    <div class="orgtitle indexorg">
        <p>{$info['title']}</p>
    </div>

    <div class="conpub indexf">
        <div class="conpub indexf">
            <div>
                <p>{$info['content']['content']}</p></div>
        </div>
    </div>
</div>

<div class="clear"></div>
<script type="text/javascript">

    //侧导航初始化
    $('.side > ul > li', parent.document).removeClass('leftmenu');
    $('.side  ul  ul', parent.document).slideUp();

    //无信息显示
    if($('.zhangc ul li').length == 0){
        $('.zhangc').after("<div style='font-size: 14px;font-weight: bold;width:200px;color:red;padding-left:38%'>没有学会章程信息 </div>");
    }
    if($('#insitution tr').length == 0){
        $('#insitution').after("<div style='font-size: 14px;font-weight: bold;width:200px;color:red;padding-left:40%'>没有成员信息 </div>");
    }
    if($('#notNullGzwyh li').length == 0){
        $('#notNullGzwyh').after("<div style='font-size: 14px;font-weight: bold;width:200px;color:red;padding-left:40%'>没有成员信息 </div>");
    }
    if($('.fenzhi tbody tr').length == 0){
        $('.fenzhi tbody').after("<div style='font-size: 14px;font-weight: bold;width:200px;color:red;padding-left:40%'>没有成员信息 </div>");
    }


    //iframe自适应高度
    function setIframeHeight(iframe) {
        if (iframe) {
            var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
            if (iframeWin.document.body) {
                iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
            }
        }
    };
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

    //自适应iframe高度
    function IFrameReSize(){
        var a= document.getElementById("content");
        a.height = a.contentDocument.body.scrollHeight;
    }

    IFrameReSize();
</script>

</body></html>