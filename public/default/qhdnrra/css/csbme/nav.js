//��֯������ת��ʾ
function zzjgNav(type,orgId,id){
	//�ж��Ƿ�����֯����ҳ
	if("/zzjg/index.htm" != String(window.location.pathname)){
		window.location.href="/zzjg/index.htm?type=" + type + "&orgId=" + orgId + "&id=" + id;
		return;
	}
	
	if("xhjj" == type){
		document.getElementById("content").src="/xhjj/index.htm";
		
		//��ѧ���������
		$('.side > ul > li').removeClass('leftmenu');
		$("#xhjj").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('��ҳ > ��֯���� > ѧ����');
		$('.side  ul  ul').slideUp();
		$("#rghttitlebg").show();
	}
	
	if("xhzc" == type){
		document.getElementById("content").src="/xhzc/index.htm";
		
		//��ѧ���³������
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#xhzc").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('��ҳ > ��֯���� > ѧ���³�');
		
		$("#rghttitlebg").show();
	}
	if("enterpriseReg"==type){
		document.getElementById("content").src="/enterpriseReg/index.htm";

		//��ѧ���³������
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#xhzc").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('��ҳ > ��֯���� > �Ǽ�����');

		$("#rghttitlebg").show();
	}

	if("lsh" == type){
		//�����»������
		$('.side > ul > li').removeClass('leftmenu');
		$("#lsh").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('��ҳ > ��֯���� > ���»�');
		//���������»������
		$("#" + orgId).addClass("leftmenu").siblings().removeClass();

		if(null != id && "" != id && 0 < id){
			document.getElementById("content").src="/admin/operation/orgMember/Com_memberDetails.do?conditionObject.id="+id;
		}
		
		$("#rghttitlebg").show();
	}
	if("fzjg" == type){
		//����֧���������
		$('.side > ul > li').removeClass('leftmenu');
		$('.side  ul  ul').slideUp();
		$("#fzjg").parent().addClass("leftmenu");
		$('#rghttitle', parent.document).html('��ҳ > ��֯���� > ��֧����');
		
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
		$('#rghttitle', parent.document).html('��ҳ > ��֯���� > ��֧����');
		$("#gzwyh").parent().next("ul").slideDown();
		$("#" + orgId).addClass("leftmenu").siblings().removeClass();
		//������ίԱ�������
		if(id!=null){
			document.getElementById("content").src="/admin/operation/orgMember/Com_showGzwyhMemberList.do?orgId="+id;
		}
		$("#rghttitlebg").show();
	}
	
}

//ѧ��������ת��ʾ
function xsjlNav(type,id){
	//�ж��Ƿ���ѧ����������
	if("/xsjl/index.htm" != String(window.location.pathname)){
		window.location.href="/xsjl/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	
	if("notice" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/notice/index.htm";
		}else{
			document.getElementById("content").src="/notice/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
		
	}else if("trends" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/trends/index.htm";
		}else{
			document.getElementById("content").src="/trends/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
	}else if("activity" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			goto('activity');
		}else{
			//�ർ��ѡ��Ч��
			$('.side > ul > li').removeClass('leftmenu');
			$('#activity').parent().addClass('leftmenu');
			$('#rghttitle', parent.document).html('��ҳ > ѧ������ > ����ѧ����ƻ�');
			document.getElementById("content").src="/admin/operation/academic/Com_showDetails.do?bean.id="+id;
		}
		$("#rghttitlebg").show();
	//��������
	}else if("continuing" == type){
		document.getElementById("content").src="/continuing/index.htm";
	}
}

//��ѧ�ռ���ת��ʾ
function kxpjNav(type,id){
	//�ж��Ƿ��ڿ�ѧ�ռ�ҳ
	if("/kxpj/index.htm" != String(window.location.pathname)){
		window.location.href="/kxpj/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	//��ת����԰��
	if("kpyd" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/kpyd/index.htm";
		}else{
			//�ർ��ѡ��Ч��
			$('#garden', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/kpyd/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
		
	//��ת���ջ
	}else if("kphd" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/kphd/index.htm";
		}else{
			//�ർ��ѡ��Ч��
			$('#act', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/kphd/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
		//��ת���ջ
	}else if("team" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/kptd/index.htm";
		}else{
			//�ർ��ѡ��Ч��
			$('#team', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/admin/operation/teamMember/Com_showTeamList.do?teamId=" + id;
		}
		$("#rghttitlebg").show();
	}
}

//����������ת��ʾ
function rewardNav(type,id){
	//�ж��Ƿ���ѧ�`��ҳ
	if("/reward/index.htm" != String(window.location.pathname)){
		window.location.href="/reward/index.htm?type=" + type + "&id=" + id;
		return;
	}
	//��ת�������
	if("rewardinfo" == type){
		document.getElementById("content").src="/rewardinfo/index.htm";
	//��ת�����³�
	}else if("rewardzc" == type){
		document.getElementById("content").src="/rewardzc/index.htm";
	//��ת֪ͨ����
	}else if("rewardnews" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/rewardnews/index.htm";
		}else{
			document.getElementById("content").src="/rewardnews/" + id + "?pid=null&onStage=1";
		}
	//��ת����������ʾ
	}else if("winners" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/winners/index.htm";
		}else{
			document.getElementById("content").src="/winners/index.htm?sessionId=" + id;
		}
	//��ת���ļ�����
	}else if("download" == type){	
		document.getElementById("content").src="/download/index.htm";
	//��ת���ҽ����Ƽ�
	}else if("gjreward" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/gjreward/index.htm";
		}else{
			document.getElementById("content").src="/recommend/index.htm?searchKey=" + id;
		}
	}
}

//ѧ�`����ת��ʾ
function xhkwNav(type,id){
	//�ж��Ƿ���ѧ�`��ҳ
	if("/xhkw/index.htm" != String(window.location.pathname)){
		window.location.href="/xhkw/index.htm?type=" + type + "&id=" + id;
		return;
	}
	//��תѧ���ڿ�
	if("magazine" == type){
		document.getElementById("content").src="/magazine/index.htm";
	//��תѧ��ͨѶ
	}else if("newsletter" == type){
		document.getElementById("content").src="/newsletter/index.htm";
	//��תѧ�Ʒ�չ����
	}else if("xhreport" == type){
		document.getElementById("content").src="/xhreport/index.htm";
	//��ת������֯��Ѷ
	}else if("message" == type){
		document.getElementById("content").src="/message/index.htm";
	}
}

//ѧ�ᵳ����ת��ʾ
function xhdjNav(type,id){
	//�ж��Ƿ��ڿ�ѧ�ռ�ҳ
	if("/xhdj/index.htm" != String(window.location.pathname)){
		window.location.href="/xhdj/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	//��ת������̬
	if("xhdjdt" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/xhdjdt/index.htm";
		}else{
			//�ർ��ѡ��Ч��
			$('#xhdjdt', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/xhdjdt/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
	//��ת��ѧ������ѧ�罨��	
	}else if("kxdd" == type){
		//�ж��Ƿ�������Ŀ
		if(id == 0){
			document.getElementById("content").src="/kxdd/index.htm";
		}else{
			//�ർ��ѡ��Ч��
			$('#kxdd', parent.document).parent().addClass('leftmenu').siblings().removeClass();
			document.getElementById("content").src="/kxdd/" + id + "?pid=null&onStage=1";
		}
		$("#rghttitlebg").show();
	}
}

//��Ա������ת��ʾ
function hyfwNav(type,id){
	//�ж��Ƿ��ڿ�ѧ�ռ�ҳ
	if("/member/index.htm" != String(window.location.pathname)){
		window.location.href="/member/index.htm?type=" + type + "&id=" + id;
		return;
	}
	
	//��ת���������ҳ��
	if("initiation" == type){
		document.getElementById("content").src="/initiation/index.htm";
	//��ת����λ��Ա��¼ҳ��
	}else if("directory" == type){
		document.getElementById("content").src="/directory/index.htm";
		//��ת����������
	}else if("report"==type){
		document.getElementById("content").src="/report/index.htm";
		//��ת����Ŀ�ɹ�����ƽ̨ҳ��
	}else if("platform" == type){
		//�ж��Ƿ��������ҳ
		if(null != id && "" != id){
			document.getElementById("content").src="/platformlist/index.htm?searchKey=" + id;
		}else{
			document.getElementById("content").src="/platform/index.htm";
		}
	//��ת�����������ļ�����ҳ��
	}else if("state" == type){
		document.getElementById("content").src="/state/index.htm";
	//��ת��ѧ������ƶ��ļ�����ҳ��
	}else if("learn" == type){
		document.getElementById("content").src="/learn/index.htm";
	//��ת�������ɹ�ҳ��
	}else if("issue" == type){
		document.getElementById("content").src="/issue/index.htm";
	}
}

//�����׼��ת��ʾ
function standardsNav(type,id){
	//�ж��Ƿ�������ҳ
	if("/standards/index.htm" != String(window.location.pathname)){
		window.location.href="/standards/index.htm?type=" + type + "&id=" + id;
		return;
	}
	//��ת���
	if("brief" == type){
		document.getElementById("content").src="/brief/index.htm";
	//��ת֪ͨ����
	}else if("announcement" == type){
		if(id == null || id == 0){
			document.getElementById("content").src="/announcement/index.htm";
		}else{
			document.getElementById("content").src="/announcement/" + id + "?pid=null&onStage=1";
		}
	}else if("release" == type){//�ű귢��
		document.getElementById("content").src="/release/index.htm";
	}else if("contact" == type){//��ϵ��ʽ
		document.getElementById("content").src="/contact/index.htm";
	}else if("solicitation" == type){//�ű귢��
		document.getElementById("content").src="/solicitation/index.htm";
	}else if("opinion" == type){//�������
		document.getElementById("opinion").src="/opinion/index.htm";
	}
}

function getUrlPar(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return unescape(r[2]); return null;
}