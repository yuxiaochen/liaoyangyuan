/*!
 * cxScroll 1.0.0
 * DownLoad by www.juheweb.com
 */
(function($){
	$.fn.cxScroll=function(settings){
		if(!this.length){return;};
		settings=$.extend({},$.cxScroll.defaults,settings);

		var obj=this;
		var scroller={};
		scroller.fn={};

		scroller.box=obj.find(".box");
		scroller.list=scroller.box.find(".list");
		scroller.items=scroller.list.find("li");
		scroller.itemSum=scroller.items.length;

		if(scroller.itemSum<=1){return;};

		scroller.plusBtn=obj.find(".plus");
		scroller.minusBtn=obj.find(".minus");
		scroller.itemWidth=scroller.items.outerWidth();
		scroller.itemHeight=scroller.items.outerHeight();

		if(settings.direction=="left"||settings.direction=="right"){
			if(scroller.itemWidth*scroller.itemSum<=scroller.box.outerWidth()){return;};
			scroller.plusVal="left";
			scroller.minusVal="right";
			scroller.moveVal=scroller.itemWidth;
		}else{
			if(scroller.itemHeight*scroller.itemSum<=scroller.box.outerHeight()){return;};
			scroller.plusVal="top";
			scroller.minusVal="bottom";
			scroller.moveVal=scroller.itemHeight;
		};

		// Ԫ�أ����Ҳ�����ť
		if(settings.plus&&!scroller.plusBtn.length){
			scroller.plusBtn=$("<a></a>",{"class":"plus"}).appendTo(obj);
		};
		if(settings.minus&&!scroller.minusBtn.length){
			scroller.minusBtn=$("<a></a>",{"class":"minus"}).appendTo(obj);
		};

		// Ԫ�أ���
		scroller.list.append(scroller.list.html());

		// ��������ʼ
		scroller.fn.on=function(){
			if(!settings.auto){return;};
			scroller.fn.off();

			scroller.run=setTimeout(function(){
				scroller.fn.goto(settings.direction);
			},settings.time);
		};

		// ������ֹͣ
		scroller.fn.off=function(){
			if(typeof(scroller.run)!=="undefined"){clearTimeout(scroller.run);};
		};

		// ���������ӿ���
		scroller.fn.addControl=function(){
			if(settings.plus&&scroller.minusBtn.length){
				scroller.plusBtn.bind("click",function(){
					scroller.fn.goto(scroller.plusVal);
				});
			};
			if(settings.minus&&scroller.minusBtn.length){
				scroller.minusBtn.bind("click",function(){
					scroller.fn.goto(scroller.minusVal);
				});
			};
		};

		// �������������
		scroller.fn.removeControl=function(){
			if(scroller.plusBtn.length){scroller.plusBtn.unbind("click");};
			if(scroller.minusBtn.length){scroller.minusBtn.unbind("click");};
		};

		// ����������
		scroller.fn.goto=function(d){
			scroller.fn.off();
			scroller.fn.removeControl();
			scroller.box.stop(true);

			var _max;	// _max	����������޶�
			var _dis;	// _dis	�����ľ���

			switch(d){
			case "left":
			case "top":
				_max=0;
				if(d=="left"){
					if(parseInt(scroller.box.scrollLeft(),10)==0){
						scroller.box.scrollLeft(scroller.itemSum*scroller.moveVal);
					};
					_dis=scroller.box.scrollLeft()-(scroller.moveVal*settings.step);
					if(_dis<_max){_dis=_max};
					scroller.box.animate({"scrollLeft":_dis},settings.speed,function(){
						if(parseInt(scroller.box.scrollLeft(),10)<=_max){
							scroller.box.scrollLeft(0);
						};
						scroller.fn.addControl();
					});
				}else{
					if(parseInt(scroller.box.scrollTop(),10)==0){
						scroller.box.scrollTop(scroller.itemSum*scroller.moveVal);
					};
					_dis=scroller.box.scrollTop()-(scroller.moveVal*settings.step);
					if(_dis<_max){_dis=_max};
					scroller.box.animate({"scrollTop":_dis},settings.speed,function(){
						if(parseInt(scroller.box.scrollTop(),10)<=_max){
							scroller.box.scrollTop(0);
						};
						scroller.fn.addControl();
					});
				};
				break;
			case "right":
			case "bottom":
				_max=scroller.itemSum*scroller.moveVal;
				if(d=="right"){
					_dis=scroller.box.scrollLeft()+(scroller.moveVal*settings.step);
					if(_dis>_max){_dis=_max};
					scroller.box.animate({"scrollLeft":_dis},settings.speed,function(){
						if(parseInt(scroller.box.scrollLeft(),10)>=_max){
							scroller.box.scrollLeft(0);
						};
					});
				}else{
					_dis=scroller.box.scrollTop()+(scroller.moveVal*settings.step);
					if(_dis>_max){_dis=_max};
					scroller.box.animate({"scrollTop":_dis},settings.speed,function(){
						if(parseInt(scroller.box.scrollTop(),10)>=_max){
							scroller.box.scrollTop(0);
						};
					});
				};
				break;
			};
			scroller.box.queue(function(){
				scroller.fn.addControl();
				scroller.fn.on();
				$(this).dequeue();
			});
		};

		// �¼����������ֹͣ���Ƴ���ʼ
		scroller.box.hover(function(){
			scroller.fn.off();
		},function(){
			scroller.fn.on();
		});

		scroller.fn.addControl();
		scroller.fn.on();
	};

	// Ĭ��ֵ
	$.cxScroll={defaults:{
		direction:"right",	// ��������
		step:1,				// ��������
		speed:800,			// �����ٶ�
		time:4000,			// �Զ��������ʱ��
		auto:true,			// �Ƿ��Զ�����
		plus:true,			// �Ƿ�ʹ�� plus ��ť
		minus:true			// �Ƿ�ʹ�� minus ��ť
	}};
})(jQuery);