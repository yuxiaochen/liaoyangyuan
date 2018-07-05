//组织机构跳转显示
function zzjgNav(type,orgId,id){
	//判断是否在组织机构页
	if("/zzjg/index.htm" != String(window.location.pathname)){
		window.location.href="/zzjg/index.htm?type=" + type + "&orgId=" + orgId + "&id=" + id;
		return;
	}
	
	if("xhjj" == type){
		document.getElementById("content").src="/xhjj/index.htm";
		
		//给学会简介添加类
		$('.side > ul > li').removeClass('leftmenu');
		$("#xhjj").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('首页 > 组织机构 > 学会简介');
		$('.side  ul  ul').slideUp();
		$("#rghttitlebg").show();
	}
	
	if("xhzc" == type){
		document.getElementById("content").src="/xhzc/index.htm";
		
		//给学会章程添加类
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#xhzc").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('首页 > 组织机构 > 学会章程');
		
		$("#rghttitlebg").show();
	}
	if("enterpriseReg"==type){
		document.getElementById("content").src="/enterpriseReg/index.htm";

		//给学会章程添加类
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#xhzc").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('首页 > 组织机构 > 登记事项');

		$("#rghttitlebg").show();
	}

	if("lsh" == type){
		//给理事会添加类
		$('.side > ul > li').removeClass('leftmenu');
		$("#lsh").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('首页 > 组织机构 > 理事会');
		//给具体理事会添加类
		$("#" + orgId).addClass("leftmenu").siblings().removeClass();

		if(null != id && "" != id && 0 < id){
			document.getElementById("content").src="/admin/operation/orgMember/Com_memberDetails.do?conditionObject.id="+id;
		}
		
		$("#rghttitlebg").show();
	}
	if("fzjg" == type){
		//给分支机构添加类
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#fzjg").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('首页 > 组织机构 > 分支机构');
		
		if(null != id && "" != id && 0 < id){
			document.getElementById("content").src="/admin/operation/orgMember/Com_showNewestChildMember.do?orgId="+id;
		}
		if(null != orgId && "" != orgId && 0 < orgId){
			document.getElementById("content").src="/admin/operation/orgMember/Com_showBroMember.do?orgId=" + orgId;
		}
		
		$("#rghttitlebg").show();
	}
	if("gzwyh" == type){
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#gzwyh").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('首页 > 组织机构 > 分支机构');
		$("#gzwyh").parent().next("ul").slideDown();
		$("#" + orgId).addClass("leftmenu").siblings().removeClass();
		//给工作委员会添加类
		if(id!=null){
			document.getElementById("content").src="/admin/operation/orgMember/Com_showGzwyhMemberList.do?orgId="+id;
		}
		$("#rghttitlebg").show();
	}
	
}

//学术交流跳转显示
function xsjlNav(type,id){
	//判断是否在学术交流界面
	if("/xsjl/index.htm" != String(window.location.pathname)){
		window.location.href="/xsjl/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	
	if("notice" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/notice/index.htm";
		}else{
			document.getElementById("content").src="/notice/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
		
	}else if("trends" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/trends/index.htm";
		}else{
			document.getElementById("content").src="/trends/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
	}else if("activity" == type){
		//判断是否跳入栏目
		if(id == 0){
			goto('activity');
		}else{
			//侧导航选中效果
			$('.side > ul > li').removeClass('leftmenu');
			$('#activity').parent().addClass('leftmenu');
			$('#rghttitle', parent.document).html('首页 > 学术交流 > 历年学术活动计划');
			document.getElementById("content").src="/admin/operation/academic/Com_showDetails.do?bean.id="+id;
		}
		$("#rghttitlebg").show();
	//继续教育
	}else if("continuing" == type){
		document.getElementById("content").src="/continuing/index.htm";
	}
}

//科学普及跳转显示
function kxpjNav(type,id){
	//判断是否在科学普及页
	if("/kxpj/index.htm" != String(window.location.pathname)){
		window.location.href="/kxpj/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	//跳转科普园地
	if("kpyd" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/kpyd/index.htm";
		}else{
			//侧导航选中效果
			$('#garden', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/kpyd/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
		
	//跳转科普活动
	}else if("kphd" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/kphd/index.htm";
		}else{
			//侧导航选中效果
			$('#act', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/kphd/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
		//跳转科普活动
	}else if("team" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/kptd/index.htm";
		}else{
			//侧导航选中效果
			$('#team', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/admin/operation/teamMember/Com_showTeamList.do?teamId=" + id;
		}
		$("#rghttitlebg").show();
	}
}

//奖励工作跳转显示
function rewardNav(type,id){
	//判断是否在学会刊物页
	if("/reward/index.htm" != String(window.location.pathname)){
		window.location.href="/reward/index.htm?type=" + type + "&id=" + id;
		return;
	}
	//跳转奖励简介
	if("rewardinfo" == type){
		document.getElementById("content").src="/rewardinfo/index.htm";
	//跳转奖励章程
	}else if("rewardzc" == type){
		document.getElementById("content").src="/rewardzc/index.htm";
	//跳转通知公告
	}else if("rewardnews" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/rewardnews/index.htm";
		}else{
			document.getElementById("content").src="/rewardnews/" + id + "?pid=null&onStage=1";
		}
	//跳转到获奖名单公示
	}else if("winners" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/winners/index.htm";
		}else{
			document.getElementById("content").src="/winners/index.htm?sessionId=" + id;
		}
	//跳转到文件下载
	}else if("download" == type){	
		document.getElementById("content").src="/download/index.htm";
	//跳转国家奖励推荐
	}else if("gjreward" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/gjreward/index.htm";
		}else{
			document.getElementById("content").src="/recommend/index.htm?searchKey=" + id;
		}
	}
}

//学会刊物跳转显示
function xhkwNav(type,id){
	//判断是否在学会刊物页
	if("/xhkw/index.htm" != String(window.location.pathname)){
		window.location.href="/xhkw/index.htm?type=" + type + "&id=" + id;
		return;
	}
	//跳转学会期刊
	if("magazine" == type){
		document.getElementById("content").src="/magazine/index.htm";
	//跳转学会通讯
	}else if("newsletter" == type){
		document.getElementById("content").src="/newsletter/index.htm";
	//跳转学科发展报告
	}else if("xhreport" == type){
		document.getElementById("content").src="/xhreport/index.htm";
	//跳转国际组织会讯
	}else if("message" == type){
		document.getElementById("content").src="/message/index.htm";
	}
}

//学会党建跳转显示
function xhdjNav(type,id){
	//判断是否在科学普及页
	if("/xhdj/index.htm" != String(window.location.pathname)){
		window.location.href="/xhdj/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	//跳转工作动态
	if("xhdjdt" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/xhdjdt/index.htm";
		}else{
			//侧导航选中效果
			$('#xhdjdt', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/xhdjdt/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
	//跳转科学道德与学风建设	
	}else if("kxdd" == type){
		//判断是否跳入栏目
		if(id == 0){
			document.getElementById("content").src="/kxdd/index.htm";
		}else{
			//侧导航选中效果
			$('#kxdd', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/kxdd/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
	}
}

//会员服务跳转显示
function hyfwNav(type,id){
	//判断是否在科学普及页
	if("/member/index.htm" != String(window.location.pathname)){
		window.location.href="/member/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	//跳转到关于入会页面
	if("initiation" == type){
		document.getElementById("content").src="/initiation/index.htm";
	//跳转到单位会员名录页面
	}else if("directory" == type){
		document.getElementById("content").src="/directory/index.htm";
		//跳转到工作报告
	}else if("report"==type){
		document.getElementById("content").src="/report/index.htm";
		//跳转到项目成果交流平台页面
	}else if("platform" == type){
		//判断是否进入详情页
		if(null != id && "" != id){
			document.getElementById("content").src="/platformlist/index.htm?searchKey=" + id;
		}else{
			document.getElementById("content").src="/platform/index.htm";
		}
	//跳转到国家政策文件下载页面
	}else if("state" == type){
		document.getElementById("content").src="/state/index.htm";
	//跳转到学会规章制度文件下载页面
	}else if("learn" == type){
		document.getElementById("content").src="/learn/index.htm";
	//跳转到发布成果页面
	}else if("issue" == type){
		document.getElementById("content").src="/issue/index.htm";
	}
}

//团体标准跳转显示
function standardsNav(type,id){
	//判断是否在团体页
	if("/standards/index.htm" != String(window.location.pathname)){
		window.location.href="/standards/index.htm?type=" + type + "&id=" + id;
		return;
	}
	//跳转简介
	if("brief" == type){
		document.getElementById("content").src="/brief/index.htm";
	//跳转通知公告
	}else if("announcement" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/announcement/index.htm";
		}else{
			document.getElementById("content").src="/announcement/" + id + "?pid=null&onStage=1";
		}
	}else if("release" == type){//团标发布
		document.getElementById("content").src="/release/index.htm";
	}else if("contact" == type){//联系方式
		document.getElementById("content").src="/contact/index.htm";
	}else if("solicitation" == type){//团标发布
		document.getElementById("content").src="/solicitation/index.htm";
	}else if("opinion" == type){//意见反馈
		document.getElementById("opinion").src="/opinion/index.htm";
	}
}

function getUrlPar(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return unescape(r[2]); return null;
}