(function($){
	$.fn.myOverflow = function(data) {
		var x = this;
		x.createScroll = function() {
			var $scrollContainer 	= $("<div>",{class:"myscroll"});
			var $drag				= $("<div>",{class:"drag"});
			$scrollContainer.append($drag);
			return $scrollContainer;
		};
		x.returnColor	= function(red,green,blue,alpha){
			return "background:rgba("+red+","+green+","+blue+","+alpha+");";
		}
		var args = arguments[0]||{};
		var defaults = {
			round	:true,
			visible	:false,
			color:{
				red:222,
				green:222,
				blue:222
			},
			alpha	:true,
			hightlight:true,
            bar:null
		};
		var options = $.extend(defaults,args);
		$(this).each(function() {
			var overflowObject = $(this);
			overflowObject.attr("myoverflow",true);
			overflowObject.addClass("root");
			overflowObject.append(x.createScroll());
			var bar 	= overflowObject.find(".myscroll");
			var drag 	= overflowObject.find(".drag");
			var top 	= null;
			var object 	= null;
			var isIn	= false;
			var docScroll	= true;
			var colorAdded = false;
			$(document)
				.ready(function(){
					var maxScrollValue 		= overflowObject[0].scrollHeight;
					var overflowObjHeight 	= overflowObject.innerHeight();
					var proportion 			= (100/maxScrollValue)*overflowObjHeight;
					drag.css({height:proportion+"%",top:"0"});
					if(options.round) {
						bar.addClass("myScrollRound");
					}
					if(options.visible) {
						bar.addClass("everVisible_x")
					}
				
					/*Colorstyle*/
					var alpha 		= options.alpha?0.5:1.0;
					var hLight		= options.hightlight?22:0;
					var fColor		= options.color;
                    var bColor      = options.bar;
                    var aColor      = options.active;
					var activeColor = x.returnColor(fColor.red,fColor.green,fColor.blue,1.0);
					var hoverColor  = x.returnColor(fColor.red,fColor.green,fColor.blue,alpha);
					var dragColor  	= x.returnColor(fColor.red-hLight,fColor.green-hLight,fColor.blue-hLight,alpha);
					var barColor  	= x.returnColor(fColor.red-62,fColor.green-62,fColor.blue-62,0.5);
                    if(bColor != null) {
                        var barColor = x.returnColor(bColor.red,bColor.green,bColor.blue,0.5);
                    }
                    if(aColor != null) {
                        var activeColor = x.returnColor(aColor.red,aColor.green,aColor.blue,0.5);
                    }
					var style = $("<style>.myscroll{"+barColor+"} .myscroll .drag{"+dragColor+"} .myscroll .drag:hover{"+hoverColor+"} .myscroll .drag:active{"+activeColor+"}</style>");
					$("head").append(style);
					/*Colorstyle*/
				})
				.mouseup(function(){
					object = null;
					top    = null;
					bar.removeClass("everVisible");
				})
				.mousemove(function(event) {
					if(object!=null) {
						var dragBarHeight 	= bar.height();
						var dragMaxTop	 	= dragBarHeight - object.outerHeight();
						var newTop			= event.pageY - bar.offset().top - top;
						if(newTop<0)newTop=0;
						if(newTop>dragMaxTop)newTop=dragMaxTop;
						object.css("top",newTop);
						var overflowObjHeight 	= overflowObject.height();
						var maxScrollValue		= overflowObject[0].scrollHeight;
						var proportionToDragBar = maxScrollValue/overflowObjHeight;
						var newScrollValue		= newTop*proportionToDragBar;
						if(newScrollValue>maxScrollValue-overflowObjHeight)newScrollValue=maxScrollValue-overflowObjHeight;
						overflowObject.scrollTop(newScrollValue);
						bar.css("top",newScrollValue);
					}
				})
				.on("wheel",function(event){
					if(isIn) {
						
					}
				});
			drag.mousedown(function(event){
				object 					= drag;
				var distFromDocOrigin 	= object.offset();
				var docCoordY 			= event.pageY;
				var coordY_inDrag		= docCoordY-distFromDocOrigin.top;
				top						= coordY_inDrag;
				bar.addClass("everVisible");
			});
			overflowObject
				.scroll(function() {
					if(defaults.object==null) {
						var scrollContainer 	  = $(this);
						var scrollTop 			  = scrollContainer.scrollTop();
						bar.css("top",scrollTop);
						var scrollContainerHeight = scrollContainer.height();
						var maxScrollValue		  = scrollContainer[0].scrollHeight;
						var proportionToDragBar	  = maxScrollValue/scrollContainerHeight;
						var newTop				  = scrollTop/proportionToDragBar;
						drag.css("top",newTop);
					}
				})
				.on("DOMSubtreeModified",function(){
                    if($(this).attr("myoverflow")) {
                        $(this).myOverflow();
                    }
				})
				.mouseenter(function(){
					isIn = true;
					docScroll = $(document).scrollTop();
				})
				.mouseleave(function(){
					isIn = false;
				});
			bar.click(function(event){
				var distToDocOrigin = bar.offset();
				var coordY 			= event.pageY - distToDocOrigin.top;
				var dragHeight		= drag.height();
				var dragTop			= drag.position().top;
				var dragBottom		= dragTop+dragHeight;
				var newTop			= dragTop;
				var maxDragTop		= bar.height()-drag.height();
				if(coordY<dragTop){
					newTop -= dragHeight;
					if(newTop<0) {
						newTop = 0;
					}
				}else if(coordY>dragBottom) {
					newTop += dragHeight;
					if(newTop>maxDragTop) {
						newTop=maxDragTop;
					}
				}
				drag.css("top",newTop);
				var scrollContainerHeight = overflowObject.height();
				var maxScrollValue		  = overflowObject[0].scrollHeight;
				var proportionToDragBar   = maxScrollValue/scrollContainerHeight;
				var newScrollValue		  = newTop*proportionToDragBar;
				if(newScrollValue>maxScrollValue-scrollContainerHeight) {
					newScrollValue=maxScrollValue-scrollContainerHeight;
				}
				overflowObject.scrollTop(newScrollValue);
				bar.css("top",newScrollValue);
			});
		});
	}
    
    $.fn.removeOverFlow = function() {
        $(this).removeAttr("myoverflow");
        $(this).find(".myscroll").remove();
        $(this).removeClass("root");
        $(this).off("DOMSubtreeModified");
        $(this).off("scroll");
    };
}(jQuery));