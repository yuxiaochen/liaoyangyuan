<?php if(!defined('APP_NAME')) exit;?>
<link rel="stylesheet" href="__PUBLICAPP__/css/csbme/style.css" />
<link rel="stylesheet" href="__PUBLICAPP__/css/csbme/ui-select.css" />
<link rel="stylesheet" href="__PUBLICAPP__/css/csbme/flexslider.css" />
<link rel="stylesheet" href="__PUBLICAPP__/css/csbme/org-add.css" />

<script src="http://www.csbme.org/themes/csbme/js/jquery.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/ui-select.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/test.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/js.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/org-add.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/jquery.flexslider-min.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/jquery.cxslide.min.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/jquery.cxscroll.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/nav.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/jquery.js"></script>
<script src="http://www.csbme.org/themes/csbme/js/indexJs.js"></script>

<div class="container margin-top">
  <div class="line-middle">
      <div style="background: url('__PUBLICAPP__/images/csbme/totalbg.png') no-repeat bottom right;width: 100%;padding-bottom: 40px;">
           <!--banner pic-->
      <div class="content bannerpic" style="background: url('__PUBLICAPP__/images/csbme/standards.png') no-repeat!important;">
          <p class="lefttitle">{$sorts[$id]['name']}</p>
          <p class="rghttitle" id="rghttitle"></p>
          <div class="lefttitlebg"></div>
          <div class="rghttitlebg" id="rghttitlebg" style="width: 291px; display: none;"></div>
      </div>
          <div class="content">
              <!--左侧导航 star-->
              <div class="left side" style="cursor: pointer; position: static;">
                  <ul class="parent">
                      {loop sorttree($sortlist) $v1}
                         <li onclick="gotoUrl({$v1['ename']})"><a href="javascript:void(0)">{$v1['name']}</a></li>
                      {/loop}
                  </ul>
              </div>
              <!--左侧导航 end-->

              <!--  iframe 引用 start-->
              <iframe style="float: right" name="content" id="content" frameborder="0" scrolling="no" width="73%" height="480" src="/index.php?r=default/column/indexList&col={$col}" onload="IFrameReSize()" allowtransparency="true"> </iframe>
              <!--  iframe 引用 end-->

              <div class="clear"></div>
          </div>
      </div>
      </div>
  </div>
</div>

<script>
    function gotoUrl(col){
          document.getElementById("content").src="/index.php?r=default/column/indexList&col="+col;
    }
</script>