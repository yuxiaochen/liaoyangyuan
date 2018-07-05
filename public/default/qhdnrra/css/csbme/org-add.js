function goto(obj){
	$("#rghttitlebg").show();
	if(obj == "xhjj"){
		document.getElementById("rghttitle").innerHTML = '首页 > 组织机构 > 学会简介';
	
	}
	if(obj == "	enterpriseReg"){
		document.getElementById("rghttitle").innerHTML = '首页 > 组织机构 > 登记事项';

	}
	if(obj == "xhzc"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 组织机构 > 学会章程';
		if("/xhzc/index.htm" == document.getElementById("content").src || "/xhzc/index.htm#" == document.getElementById("content").src){
			return;
		}
		
	}
	if(obj == "lsh"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 组织机构 > 理事会';
		if("/admin/operation/orgMember/Com_showOrgMemberList.do" == document.getElementById("content").contentWindow.location.pathname || "/lsh/index.htm" == document.getElementById("content").contentWindow.location.pathname){
			return;
		}
		
	}
	if(obj == "fzjg"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 组织机构 > 分支机构';
		
	}
	if(obj == "gzwyh"){
		document.getElementById("rghttitle").innerHTML = '首页 > 组织机构 > 工作委员会';
		if("/admin/operation/organization/Com_showGzwyh.do" == document.getElementById("content").contentWindow.location.pathname || "/gzwyh/index.htm" == document.getElementById("content").contentWindow.location.pathname){
			return;
		}
		
	}
	
	//学术交流侧导航跳转
	if(obj == "notice"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 学术交流 > 会议通知';
	
	}
	if(obj == "trends"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 学术交流 > 学术动态';
		
	}
	
	if(obj == "activity"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 学术交流 > 历年学术活动计划';
		if("/admin/operation/academic/Com_listByDate.do"==document.getElementById("content").contentWindow.location.pathname||"/activity/index.htm" == document.getElementById("content").src || "/activity/index.htm#" == document.getElementById("content").src){
			return;
		}
		document.getElementById("content").src="/admin/operation/academic/Com_listAll.do"
			return;
	}
	if(obj == "continuing"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 学术交流 > 继续教育和培训';
	}
	
	//科学普及侧导航跳转
	if(obj == "kpyd"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 科学普及 > 科普园地';
	
	}
	if(obj == "kphd"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 科学普及 > 科普活动';
	
	}
	if(obj == "kptd"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 科学普及 > 科普团队';
	
	}
	
	//学会党建侧导航跳转
	if(obj == "xhdjdt"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 学会党建 > 工作动态';
	
	}
	if(obj == "kxdd"){
		document.getElementById("rghttitle").innerHTML  = '首页 > 学会党建 > 科学道德与学风建设';
	
	}
	
	document.getElementById("content").src="/"+obj+"/index.htm";
}

function detailLsh(id){
	document.getElementById("rghttitle").innerHTML  = '首页 > 组织机构 > 理事会';
	document.getElementById("content").src="/admin/operation/orgMember/Com_showOrgMemberList.do?orgId="+id;
}
function showGzwyh(id){
	document.getElementById("content").src="/admin/operation/organization/Com_showGzwyh.do?orgId="+id;
}
function toAcademic(month){
	var year=document.getElementsByName("7")[0].value;
	if(month == 0){
		document.getElementById("content").src="/admin/operation/academic/Com_listByDate.do?bean.meetYear="+year
		$("#month1").removeClass("leftmonth").siblings().removeClass("leftmonth");
	}else{
		document.getElementById("content").src="/admin/operation/academic/Com_listByDate.do?bean.meetYear="+year+"&bean.meetMonth="+month;
		//选中月份
		var monthId="month"+month;
		//待完成
		$("#"+monthId).siblings().removeClass("leftmonth");
		$("#"+monthId).addClass("leftmonth");
	}
}
//历年学术活动计划点击效果
function activityDetail(i){
	parent.document.getElementById("content").src="/admin/operation/academic/Com_showDetails.do?bean.id="+i;
}

//tr标签鼠标悬停选中效果
function trMouserover(obj){
	$(obj).children("td").attr("style","color: #0075C5;");
}
function trMouseout(obj){
	$(obj).children("td").attr("style","");
}

function IFrameReSizeSon(){
	var a=window.parent.document.getElementById("content");
	a.height = a.contentDocument.body.scrollHeight; 
}

//左侧导航子菜单初始化
//function ulInit(cutUl){
//	$('.side  ul  ul', parent.document).each(function(){
//		if(cutUl.next('ul').length==0){
//			alert($(this).innerHtml);
//		}else{
//			alert(cutUl.next('ul').innerHtml);
//		}
//   		if($(this)[0] == cutUl.next('ul')[0]){
//   			//当前点击的
//   			rwSlideToggle($(this));
//   			$(this).slideToggle(500,function(){
//   				$(this).attr("style","");
//   					$(this).css("height","");
//   			});
//   			alert("当前点击的")
//   			if($(this).is(":hidden")){
//   				$(this).fadeIn(1500,function(){
//   					$(this).attr("style","");
//   				});
//   			}else{
//   				$(this).fadeOut(function(){
//   					$(this).attr("style","");
//   				});
//   			}
//   		}else{
//   			if($(this).is(":hidden")){
   				//如果是隐藏的不管
//   				alert("如果是隐藏的不管")
//   			}else{
   				//没隐藏的则隐藏
//   				$(this).slideToggle();
//   				alert("没隐藏的则隐藏")
//   				$(this).fadeOut();
//   				$(this).attr("style","opacity: 1;");
//   			}
//   		}
//   	});
//}

//重写滑动方法
function rwSlideToggle(obj){
	return obj.slideToggle(function(){
		$(this).css("height","");
	}); 
}
function rwSlideUp(obj){
	return obj.rwSlideUp(function(){
		$(this).css("height","");
	}); 
}