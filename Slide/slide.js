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
    function PDF_Slider(container) {
        this.init(container);
        this.define();
        this.set();
        this.events();
    };
    PDF_Slider.prototype.init       = function(container) {
        this.js         = container;
        this.main       = $(container);
        this.globalId   = makeid();
        this.main.addClass("superSlide");
        this.main.attr("globalId",this.globalId);
        this.createForm();
    };
    PDF_Slider.prototype.define     = function() {
        this.header     = this.main.find(".slideHeader");
        this.body       = this.main.find(".slideBody");
        this.changeVis  = this.header.find(div);
        this.qtip       = this.header.find(lbl);
        this.inSqr      = true;
        this.barAnim    = this.changeVis.find("svg .toBar");
        this.sqrAnim    = this.changeVis.find("svg .toSqr");
        this.rightMov   = this.main.find(".rightMove");
        this.leftMov    = this.main.find(".leftMove");
        this.mov        = $(null).add(this.rightMov).add(this.leftMov);
        this.isHover    = false;
        this.timeOut    = -1;
        this.interval   = -1;
        this.isBlock    = true;
        
        this.firstHover = true;
        this.qTipTop    = percent(-6);
    };
    PDF_Slider.prototype.set        = function() {
        equalToHeight.call(this.header,"div");
        margTop.call(this.header,"span","div","div svg","label");
        margTop.call(this.body,".dlc");
        refMargTop(this.body,".rightMove svg,.leftMove svg");
        this.qTipBottom = this.qtip.css("margin-top");
        this.qtip.css("margin-top",this.qTipTop);
        this.changeVis.find("animate").attr("dur","200ms");
        this.changeVis.find("animate").attr("attributeName","points");
        this.changeVis.find("animate").attr("fill","freeze");
        this.topSave = this.body.find(".dlc").attr("style");
        this.mov.css("top",pixel(this.header.height()));
        this.mov.css("height",pixel(this.main.height()-this.header.height()));
    };
    PDF_Slider.prototype.events     = function() {
        var _this = this;
        this.changeVis.click(function() {
            if(_this.inSqr){
                _this.barAnim.each(function(){
                    $(this)[0].beginElement();
                });
            }else {
                _this.sqrAnim.each(function(){
                    $(this)[0].beginElement();
                });
            }
            _this.inSqr = !_this.inSqr;
        });
        this.body.mouseenter(function(){
            var scrollMax   = this.scrollWidth;
            var width       = $(this).innerWidth();
            var maxValue    = scrollMax-width-1;
            var scrollValue = $(this).scrollLeft();
            if(scrollValue > 0) {
                _this.leftMov.removeClass("fadeOut");
            }else {
                _this.leftMov.addClass("fadeOut");
                clearInterval(_this.interval);
            }
            
            if(scrollValue < maxValue) {
                _this.rightMov.removeClass("fadeOut");
            }else {
                _this.rightMov.addClass("fadeOut");
                clearInterval(_this.interval);
            }
            _this.isHover = true;
        });
        this.main
        .mouseleave(function(){
            _this.mov.addClass("fadeOut");
            clearInterval(_this.interval);
        })
        .mouseover(function(){
            if(_this.firstHover) {
                _this.firstHover = false;
                _this.qtip.animate({marginTop:_this.qTipBottom},300,swing,function() {
                    setTimeout(function(){
                        _this.qtip.animate({marginTop:_this.qTipTop},300,swing,function() {
                            _this.qTipBottom = null;
                            _this.qTipTop = null;
                            _this.qtip.remove();
                        });
                    },5000);
                });
            }           
        });
        $(document).mouseup(function(){
            clearInterval(_this.interval);
        });
        this.mov
        .mousedown(function() {
            var val = $(this).hasClass("rightMove")?4:-4;
            _this.interval = setInterval(function() {
              _this.body.scrollLeft(_this.body.scrollLeft()+val);
              _this.body.trigger("mouseenter");
            },1);
        })
        .mouseup(function() {
            clearInterval(_this.interval);
        });
        this.body.bind("mousewheel DOMMouseScroll",function(e) {
            e.preventDefault();
            if (e.type == 'mousewheel') {
                if(e.originalEvent.wheelDelta /120 > 0) {
                    $(this).scrollLeft($(this).scrollLeft()-45);
                }else {
                    $(this).scrollLeft($(this).scrollLeft()+45);
                }
            }
            else if (e.type == 'DOMMouseScroll') {
                if(e.originalEvent.detail /120 > 0) {
                    $(this).scrollLeft($(this).scrollLeft()-45);
                }else {
                    $(this).scrollLeft($(this).scrollLeft()+45);
                }
            }
            $(this).trigger("mouseenter");
        });
        this.changeVis.click(function() {
            _this.body.removeOverFlow();
            if(_this.isBlock) {
                var temp = _this.body.find(".dlc");
                temp.removeAttr("style").removeClass("dlc").addClass("dlc_row");
                _this.body.trigger("mouseenter");
                clearTimeout(_this.timeOut);
                _this.timeOut = setTimeout(function(){
                    _this.body.myOverflow({color:{red:50,green:50,blue:50},round:false,alpha:1.0,bar:{red:0,green:105,blue:142}});
                },300);
                _this.tileEvents(".dlc_row");
            }else {
                var temp = _this.body.find(".dlc_row");
                temp.removeAttr("style").removeClass("dlc_row").addClass("dlc");
                temp.attr("style",_this.topSave);
                _this.tileEvents(".dlc");
            }
            _this.isBlock = !_this.isBlock;
        });
        this.tileEvents(".dlc");
        this.adjustTile();
    };
    PDF_Slider.prototype.tileEvents = function(class_) {
        this.tiles = null;
        this.tiles = this.body.find(class_);
        this.body.find("a").on('click', function (event) {
            event.preventDefault();//prevent the normal click action from occuring
            window.location = 'download.php?file=' + encodeURIComponent(this.href)+'&name='+this.name;
        });
        this.tiles
        .mouseenter(function() {
            $(this).find(".download").fadeIn(300);
        })
        .mouseleave(function(){
            $(this).find(".download").fadeOut(300);
        });
        this.tiles.find(".download").click(function(){
            $(this).siblings("a").trigger("click");
        });
        this.body.find("span").removeAttr("style");
    };
    PDF_Slider.prototype.adjustTile = function() {
        var _this = this;
        clearTimeout(this.timeOut);
        this.timeOut = setTimeout(function() {
            _this.tiles.each(function() {
                var tile    = $(this);
                var img     = tile.find("img");
                var hImg    = img[0].naturalHeight;
                var wImg    = img[0].naturalWidth;
                var container = img.parent().height();
                if(wImg == hImg) {
                    img.css(getDims(container,container));
                }else if(wImg>hImg) {
                    var rel = container/wImg;
                    var newHeight = hImg * rel;
                    img.css(getDims(container,newHeight));
                }else if(hImg>wImg) {
                    var rel       = container/hImg;
                    var newWidth  = wImg * rel;
                    img.css(getDims(newWidth,container));
                }
                imargTop(img);
                imargLeft(img);
            });
        },75);
    };
    PDF_Slider.prototype.adjustTile_2 = function() {
        var img     = $(this);
        var hImg    = img[0].naturalHeight;
        var wImg    = img[0].naturalWidth;
        var container = img.parent().height();
        if(wImg == hImg) {
            img.css(getDims(container,container));
        }else if(wImg>hImg) {
            var rel = container/wImg;
            var newHeight = hImg * rel;
            img.css(getDims(container,newHeight));
            imargTop(img);
        }else if(hImg>wImg) {
            var rel       = container/hImg;
            var newWidth  = wImg * rel;
            img.css(getDims(newWidth,container));
            imargLeft(img);
        }
    };
    PDF_Slider.prototype.createTile   = function(name,img_) {
        var $dlc    = this.createObj(div,getClass("dlc"));
        var $div    = this.createObj(div);
        var $img    = this.createObj(img,{src:img_});
        var $span   = this.createObj(span,{text:name});
        var $dwld   = this.createObj(div,getClass("download"));
        var $link   = this.createObj(a,{name:name,href:getPath(name)});
        var $svg    = "<svg viewBox='109 -109.5 268.5 268.5' fill='rgb(200,200,200)'><path d='M341.9,114.3H144.5c-12.2,0-22.1,10-22.1,22.4c0,12.4,9.9,22.4,22.1,22.4h197.4c12.2,0,22.1-10,22.1-22.4C364.1,124.3,354.2,114.3,341.9,114.3z M226.9,89.7c4,4,9.2,6.1,14.5,6.5c0.6,0.1,1.2,0.2,1.9,0.2c0.6,0,1.2-0.1,1.8-0.2c5.3-0.4,10.5-2.5,14.5-6.5l70.8-71c8.9-8.9,8.9-23.3,0-32.1c-8.9-8.9-23.2-8.9-32.1,0l-32.7,32.8V-87.1c0-12.4-10-22.4-22.4-22.4c-12.4,0-22.4,10-22.4,22.4V19.3l-32.7-32.8c-8.9-8.9-23.2-8.9-32.1,0c-8.9,8.9-8.9,23.3,0,32.1L226.9,89.7z'/></svg>";
        $dwld.append($svg);
        $img.on("load",this.adjustTile_2);
        $div.append($img);
        $dlc.append($div,$span,$dwld,$link);
        this.body.find(".dlcContainer").append($dlc);
        this.tileEvents(".dlc");
        jmargTop.call(this.body,$dlc);
        if(this.topSave == undefined) {
            this.topSave = this.body.find(".dlc").attr("style");
        }
    };
    PDF_Slider.prototype.createSvg    = function(points) {
        return "<svg viewBox='0 0 50 50' preserveAspectRatio='none'><polygon fill='rgb(200,200,200)' points='"+points.join(" ")+"'></polygon></svg>";
    };
    PDF_Slider.prototype.createObj    = function(tag,attr) {
        return $(tagForm(tag),attr);
    };
    PDF_Slider.prototype.createForm   = function() {
        this.main.empty();
        var h           = this.createObj(div,getClass("slideHeader"));
        var h_span      = this.createObj(span,{text:"Contenido Descargable"});
        var h_div       = this.createObj(div);
        var h_div_svg   = "<svg viewBox='0 0 50 50' preserveAspectRatio='none'><polygon fill='rgb(200,200,200)' points='00,00 26,00 26,10 00,10'><animate begin='indefinite'  class='toBar' to='00,00 20,00 20,11 00,11'></animate><animate begin='indefinite'  class='toSqr' to='00,00 26,00 26,10 00,10'></animate></polygon><polygon fill='rgb(200,200,200)' points='00,20 26,20 26,25 00,25'><animate begin='indefinite'  class='toBar' to='00,10 20,10 20,20 00,20'></animate><animate begin='indefinite'  class='toSqr' to='00,20 26,20 26,25 00,25'></animate></polygon><polygon fill='rgb(200,200,200)' points='00,24 26,24 26,30 00,30'><animate begin='indefinite'  class='toBar' to='00,30 20,30 20,41 00,41'></animate><animate begin='indefinite'  class='toSqr' to='00,24 26,24 26,30 00,30'></animate></polygon><polygon fill='rgb(200,200,200)' points='00,40 26,40 26,50 00,50'><animate begin='indefinite'  class='toBar' to='00,40 20,40 20,50 00,50'></animate><animate begin='indefinite'  class='toSqr' to='00,40 26,40 26,50 00,50'></animate></polygon><polygon fill='rgb(200,200,200)' points='24,00 50,00 50,10 24,10'><animate begin='indefinite'  class='toBar' to='30,00 50,00 50,11 30,11'></animate><animate begin='indefinite'  class='toSqr' to='24,00 50,00 50,10 24,10'></animate></polygon><polygon fill='rgb(200,200,200)' points='24,20 50,20 50,25 24,25'><animate begin='indefinite'  class='toBar' to='30,10 50,10 50,20 30,20'></animate><animate begin='indefinite'  class='toSqr' to='24,20 50,20 50,25 24,25'></animate></polygon><polygon fill='rgb(200,200,200)' points='24,24 50,24 50,30 24,30'><animate begin='indefinite'  class='toBar' to='30,30 50,30 50,41 30,41'></animate><animate begin='indefinite'  class='toSqr' to='24,24 50,24 50,30 24,30'></animate></polygon><polygon fill='rgb(200,200,200)' points='24,40 50,40 50,50 24,50'><animate begin='indefinite'  class='toBar' to='30,40 50,40 50,50 30,50'></animate><animate begin='indefinite'  class='toSqr' to='24,40 50,40 50,50 24,50'></animate></polygon></svg>";
        var b           = this.createObj(div,getClass("slideBody"));
        var b_dlcC      = this.createObj(div,getClass("dlcContainer"));
        var l           = this.createObj(div,getClass("rightMove fadeOut"));
        var r           = this.createObj(div,getClass("leftMove fadeOut"));
        var r_svg       = "<svg viewBox='201 -200.8 451.8 451.8' fill='rgb(200,200,200)'><path d='M298.1,25.1c0-8.1,3.1-16.2,9.3-22.4l194.3-194.3c12.4-12.4,32.4-12.4,44.8,0c12.4,12.4,12.4,32.4,0,44.7L374.5,25.1 L546.4,197c12.4,12.4,12.4,32.4,0,44.7c-12.4,12.4-32.4,12.4-44.7,0L307.4,47.4C301.2,41.3,298.1,33.2,298.1,25.1z'/></svg>";
        var l_svg       = "<svg viewBox='201 -200.8 451.8 451.8' fill='rgb(200,200,200)'><path d='M546.4,47.4L352.2,241.7c-12.4,12.4-32.4,12.4-44.8,0c-12.4-12.4-12.4-32.4,0-44.7L479.3,25.1L307.4-146.8 c-12.4-12.4-12.4-32.4,0-44.7c12.4-12.4,32.4-12.4,44.8,0L546.4,2.7c6.2,6.2,9.3,14.3,9.3,22.4C555.7,33.2,552.6,41.3,546.4,47.4z'/></svg>";
        h_div.append(h_div_svg);
        h.append(h_span,h_div);
        b.append(b_dlcC);
        l.append(l_svg);
        r.append(r_svg);
        var q = this.createObj(lbl,{text:"Cambiar Vista"});
        h.append(q);
        this.main.append(h,b,l,r);
        this.main.trigger("mainFormReady");
    };
    
    $.fn.PDF_Slider = function() {
        var instance = new PDF_Slider(this);
        instances[instance.globalId] = instance;
    };
    $.fn.AddPDF = function(name,img) {
        var id = $(this).attr("globalid");
        var instance = instances[id];
        instance.createTile(name,img);
    };
    $.fn.AdjustTiles = function(){
        var id = $(this).attr("globalid");
        var instance = instances[id];
        instance.adjustTile();
    };
    
})(jQuery,Math,document,window);
