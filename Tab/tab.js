var div="div",span = "span",ul="ul",a="a",li="li",lbl="label",img="img",p="p",swing="swing",linea="linear";
;(function($,Math,Document,Window,undefined) {
    $.attrHooks['attributename'] = {
        set: function(elem, value, name) {
            elem.setAttributeNS(null, 'attributeName', value + '');
            return value;
        }
    };
    var instances = [];
    function pixel(value)       {
        return value+"px";
    };
    function percent(value)       {
        return value+"%";
    };
    function margTop()          {
        var main = $(this);
        for(var i in arguments) {
            var selector  = arguments[i];
            var object    = main.find(selector);
            var parent    = object.parent();
            var objHeight = object.height();
            var parHeight = parent.innerHeight();
            var value     = (parHeight/2)-(objHeight/2);
            object.css("margin-top",value);
        }
    };
    function refMargTop(refObj,selectors) {
        var object = $(selectors);
        var parent = refObj;
        var parHeight = parent.innerHeight();
        object.each(function(){
            var object = $(this);
            var objHeight = object.height();
            var value     = (parHeight/2)-(objHeight/2);
            object.css("margin-top",value);
        });
    };
    function imargTop(obj) {
        var parent    = obj.parent();
        var objHeight = obj.height();
        var parHeight = parent.innerHeight();
        var value     = (parHeight/2)-(objHeight/2);
        obj.css("margin-top",value);
    };
    function jmargTop(obj) {
        var parent    = $(this);
        var objHeight = obj.height();
        var parHeight = parent.innerHeight();
        var value     = (parHeight/2)-(objHeight/2);
        obj.css("margin-top",value);
    };
    function imargLeft(obj) {
        var parent    = obj.parent();
        var objWidth  = obj.width();
        var parWidth  = parent.innerWidth();
        var value     = (parWidth/2)-(objWidth/2);
        obj.css("margin-left",value);
    };
    function equalToHeight()    {
        var main = $(this);
        for(var i in arguments) {
            var selector = arguments[i];
            var object   = main.find(selector);
            var objWidth = object.width();
            object.height(objWidth);
        }
    };
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    };
    function getDims(w,h) {
        return  {width:w,height:h};
    };
    function getPath(name) {
        return "http://localhost/__naker/Plugin_4/Slide/rsc/"+name;  
    };
    function tagForm(name) {
        return "<"+name+">";
    };
    function getClass(name) {
        return {class:name};  
    };
    
    function Tab(container) {
        this.init(container);
        this.define();
        this.set();
        this.events();
    };
    Tab.prototype.init         = function(container) {
        this.js         = container;
        this.main       = $(container);
        this.globalId   = makeid();
        this.main.addClass("superTab");
        this.main.attr("globalId",this.globalId);
        this.createMainForm();
    };
    Tab.prototype.createSvg    = function(points) {
        return "<svg viewBox='0 0 50 50' preserveAspectRatio='none'><polygon fill='rgb(200,200,200)' points='"+points.join(" ")+"'></polygon></svg>";
    };
    Tab.prototype.createObj    = function(tag,attr) {
        return $(tagForm(tag),attr);
    };
    Tab.prototype.set    = function() {
        margTop.call(this.main,span,".rightMove svg",".leftMove svg");
        imargLeft(this.moveL.find("svg"));
        imargLeft(this.moveR.find("svg"));
        var bodyHeight = this.main.height()-this.head.height();
        var paddingTB  = bodyHeight*0.05;
        var realBodyH  = bodyHeight-(paddingTB);
        var bodyWidth  = this.main.width();
        var paddingLR  = bodyWidth*0.02;
        var realBodyW  = bodyWidth-(paddingLR*2);
        this.body.css({
            paddingTop:paddingTB,
            paddingLeft:paddingLR,
            paddingRight:paddingLR
        }).height(realBodyH).width(realBodyW).show();
        this.shade.width(this.cont.width());
        this.shade.height(this.cont.height());
    };
    Tab.prototype.define = function() {
        this.head   = this.main.find(".tabHeader");
        this.body   = this.main.find(".tabBody");
        this.moveR  = this.main.find(".rightMove");
        this.moveL  = this.main.find(".leftMove");
        this.time   = -1;
        this.inter  = -1;
        this.move   = $(null).add(this.moveL).add(this.moveR);
        this.isHover = false;
        this.tab   = this.main.find(".tabh");
        this.cont  = this.main.find(".tab");
        this.shade = this.main.find(".tabShadow");
    };
    Tab.prototype.events = function() {
        var _this = this;
        $(document)
        .mouseup(function(){
            clearInterval(_this.inter);
        });
        this.head
        .mouseenter(function() {
            var scrollMax   = this.scrollWidth;
            var width       = $(this).innerWidth();
            var maxValue    = scrollMax-width-1;
            var scrollValue = $(this).scrollLeft();
            if(scrollValue > 0) {
                _this.moveL.removeClass("fadeOut");
            }else {
                _this.moveL.addClass("fadeOut");
                clearInterval(_this.inter);
            }
            if(scrollValue < maxValue) {
                _this.moveR.removeClass("fadeOut");
            }else {
                _this.moveR.addClass("fadeOut");
                clearInterval(_this.inter);
            }
        })
        .mouseleave(function() {
            _this.time = setTimeout(function() {
                if(!_this.isHover) {
                    _this.move.addClass("fadeOut");
                    clearTimeout(_this.time);
                }
            },300);
        });
        this.move
        .mousedown(function() {
            var val = $(this).hasClass("rightMove")?4:-4;
            _this.inter = setInterval(function() {
              _this.head.scrollLeft(_this.head.scrollLeft()+val);
              _this.head.trigger("mouseenter");
            },1);
        })
        .mouseup(function() {
            clearInterval(_this.inter);
        })
        .mouseenter(function() {
            _this.isHover = true;
        })
        .mouseleave(function(){
            _this.isHover = false;
        });
        this.tab.click(function() {
            
            _this.tab.removeClass("activeH");
            $(this).addClass("activeH");
            _this.cont.removeClass("goActiveLow").removeClass("goActiveHigh");
            var num = $(this).num();
            var nextCont = _this.cont.filter(function() {
                return $(this).num() == num; 
            });
            var prevCont = _this.cont.filter(function() {
                return $(this).hasClass("activeT"); 
            });
            
            console.log(num);
            
            if(num > prevCont.num()) {
                nextCont.addClass("goActiveLow");
                prevCont.fadeOut(300);
                clearTimeout(_this.time);
                _this.time = setTimeout(function(){
                    prevCont.css("display",'').removeClass("activeT");
                    nextCont.removeClass("goActiveLow").addClass("activeT");
                },320);
            }else{
                nextCont.addClass("goActiveHigh");
                var x = -_this.body.height();
                prevCont.css("margin-top",pixel(x));
                nextCont.animate({
                    opacity:1.0
                },300,function(){
                    nextCont.removeClass("goActiveHigh").css("opacity",'').addClass("activeT");
                    prevCont.css("margin-top",'').removeClass("activeT");
                });
            }
        });
        
    };
    Tab.prototype.createMainForm = function() {
        var r = this.createObj(div,getClass("rightMove fadeOut"));
        var l = this.createObj(div,getClass("leftMove fadeOut"));
        var h = this.createObj(div,getClass("tabHeader"));
        var b = this.createObj(div,getClass("tabBody"));
        r.append("<svg viewBox='201 -200.8 451.8 451.8' fill='rgb(200,200,200)'><path d='M546.4,47.4L352.2,241.7c-12.4,12.4-32.4,12.4-44.8,0c-12.4-12.4-12.4-32.4,0-44.7L479.3,25.1L307.4-146.8 c-12.4-12.4-12.4-32.4,0-44.7c12.4-12.4,32.4-12.4,44.8,0L546.4,2.7c6.2,6.2,9.3,14.3,9.3,22.4C555.7,33.2,552.6,41.3,546.4,47.4z'/></svg>");
        l.append("<svg viewBox='201 -200.8 451.8 451.8' fill='rgb(200,200,200)'><path d='M298.1,25.1c0-8.1,3.1-16.2,9.3-22.4l194.3-194.3c12.4-12.4,32.4-12.4,44.8,0c12.4,12.4,12.4,32.4,0,44.7L374.5,25.1 L546.4,197c12.4,12.4,12.4,32.4,0,44.7c-12.4,12.4-32.4,12.4-44.7,0L307.4,47.4C301.2,41.3,298.1,33.2,298.1,25.1z'/></svg>");
        h.append(this.createObj(div,getClass("wrapper")));
        b.append(this.createObj(div,getClass("tabShadow")));
        
        
        var oldTabs = this.main.find(">div").not(".rightMove,.leftMove,.tabHeader,.tabBody");
        var first = true;
        var _this = this;
        var limit = oldTabs.length;
        oldTabs.each(function(num,elem) {
            var name = $(elem).attr("name")
            var tabh = _this.createObj(div,$.extend(getClass("tabh"),{num:num}));
            var spn  = _this.createObj(span,{text:name});
            tabh.append(spn);
            var tab = _this.createObj(div,$.extend(getClass("tab"),{num:num}));
            tab.append($(elem).html());
            if(first) {
                first = false;
                tabh.addClass("activeH");
                tab.addClass("activeT");
            }
            h.append(tabh);
            b.append(tab);
        });
        this.main.append(r,l,h,b);
    };
    
    $.fn.num = function(value) {
        var back = $(this).attr("num"); 
        if(value != undefined) {
           $(this).attr("num",value);
        }
        return back;
    };
    $.fn.Tabs = function() {
        var instance = new Tab(this);
        instances[instance.globalId] = instance;
    };
    
})(jQuery,Math,document,window);
