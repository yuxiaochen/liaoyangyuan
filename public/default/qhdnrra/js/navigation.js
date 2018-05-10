// JavaScript Document
$(document).ready(function(){
	$("#nav > li").hover(function(){
		//alert($(this));
		var curDiv=$(this).children().eq(2);
		var curUl=$(this).children().eq(2).children().eq(0);
		//alert(curUl);
		//curUl.css("display","none");
		var curHeight=curUl.outerHeight();
		curDiv.animate({height:curHeight+"px"},400);
		curUl.animate({top:-2+"px"},400);
	},function(){
		//alert($(this));
		var curDiv=$(this).children().eq(2);
		var curUl=$(this).children().eq(2).children().eq(0);
		//alert(curUl);
		//curUl.css("display","none");
		var curHeight=curUl.outerHeight();
		curDiv.animate({height:0+"px"},400);
		curUl.animate({top:-curHeight+"px"},400);
	}
	);
	
});