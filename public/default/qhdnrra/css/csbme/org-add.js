function goto(obj){
	$("#rghttitlebg").show();
	if(obj == "xhjj"){
		document.getElementById("rghttitle").innerHTML = '��ҳ > ��֯���� > ѧ����';
	
	}
	if(obj == "	enterpriseReg"){
		document.getElementById("rghttitle").innerHTML = '��ҳ > ��֯���� > �Ǽ�����';

	}
	if(obj == "xhzc"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ��֯���� > ѧ���³�';
		if("/xhzc/index.htm" == document.getElementById("content").src || "/xhzc/index.htm#" == document.getElementById("content").src){
			return;
		}
		
	}
	if(obj == "lsh"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ��֯���� > ���»�';
		if("/admin/operation/orgMember/Com_showOrgMemberList.do" == document.getElementById("content").contentWindow.location.pathname || "/lsh/index.htm" == document.getElementById("content").contentWindow.location.pathname){
			return;
		}
		
	}
	if(obj == "fzjg"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ��֯���� > ��֧����';
		
	}
	if(obj == "gzwyh"){
		document.getElementById("rghttitle").innerHTML = '��ҳ > ��֯���� > ����ίԱ��';
		if("/admin/operation/organization/Com_showGzwyh.do" == document.getElementById("content").contentWindow.location.pathname || "/gzwyh/index.htm" == document.getElementById("content").contentWindow.location.pathname){
			return;
		}
		
	}
	
	//ѧ�������ർ����ת
	if(obj == "notice"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ѧ������ > ����֪ͨ';
	
	}
	if(obj == "trends"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ѧ������ > ѧ����̬';
		
	}
	
	if(obj == "activity"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ѧ������ > ����ѧ����ƻ�';
		if("/admin/operation/academic/Com_listByDate.do"==document.getElementById("content").contentWindow.location.pathname||"/activity/index.htm" == document.getElementById("content").src || "/activity/index.htm#" == document.getElementById("content").src){
			return;
		}
		document.getElementById("content").src="/admin/operation/academic/Com_listAll.do"
			return;
	}
	if(obj == "continuing"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ѧ������ > ������������ѵ';
	}
	
	//��ѧ�ռ��ർ����ת
	if(obj == "kpyd"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ��ѧ�ռ� > ����԰��';
	
	}
	if(obj == "kphd"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ��ѧ�ռ� > ���ջ';
	
	}
	if(obj == "kptd"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ��ѧ�ռ� > �����Ŷ�';
	
	}
	
	//ѧ�ᵳ���ർ����ת
	if(obj == "xhdjdt"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ѧ�ᵳ�� > ������̬';
	
	}
	if(obj == "kxdd"){
		document.getElementById("rghttitle").innerHTML  = '��ҳ > ѧ�ᵳ�� > ��ѧ������ѧ�罨��';
	
	}
	
	document.getElementById("content").src="/"+obj+"/index.htm";
}

function detailLsh(id){
	document.getElementById("rghttitle").innerHTML  = '��ҳ > ��֯���� > ���»�';
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
		//ѡ���·�
		var monthId="month"+month;
		//�����
		$("#"+monthId).siblings().removeClass("leftmonth");
		$("#"+monthId).addClass("leftmonth");
	}
}
//����ѧ����ƻ����Ч��
function activityDetail(i){
	parent.document.getElementById("content").src="/admin/operation/academic/Com_showDetails.do?bean.id="+i;
}

//tr��ǩ�����ͣѡ��Ч��
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

//��ർ���Ӳ˵���ʼ��
//function ulInit(cutUl){
//	$('.side  ul  ul', parent.document).each(function(){
//		if(cutUl.next('ul').length==0){
//			alert($(this).innerHtml);
//		}else{
//			alert(cutUl.next('ul').innerHtml);
//		}
//   		if($(this)[0] == cutUl.next('ul')[0]){
//   			//��ǰ�����
//   			rwSlideToggle($(this));
//   			$(this).slideToggle(500,function(){
//   				$(this).attr("style","");
//   					$(this).css("height","");
//   			});
//   			alert("��ǰ�����")
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
   				//��������صĲ���
//   				alert("��������صĲ���")
//   			}else{
   				//û���ص�������
//   				$(this).slideToggle();
//   				alert("û���ص�������")
//   				$(this).fadeOut();
//   				$(this).attr("style","opacity: 1;");
//   			}
//   		}
//   	});
//}

//��д��������
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