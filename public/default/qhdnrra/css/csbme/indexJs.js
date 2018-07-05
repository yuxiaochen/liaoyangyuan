$(function(){
	//²àµ¼º½ÐüÍ£
	var doc = $(document);
	var side = $('.left.side');
	var top = side.offset().top;
	var scrollTop = doc.scrollTop();

	function resetTop () {
	    scrollTop = doc.scrollTop();
	    if( scrollTop >= top ) {
	        side.css({position:'fixed', top:'10px'})
	    } else {
	        side.css({position: 'static'})
	    }
	}
	resetTop();
	doc.on('scroll', function (e) {
	    resetTop()
	});
	$(window).on('resize', function () { resetTop();});
});