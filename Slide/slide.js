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
    var div = "div";
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
    };
    PDF_Slider.prototype.define     = function() {
        this.header     = this.main.find(".slideHeader");
        this.body       = this.main.find(".slideBody");
        this.changeVis  = this.header.find(div);
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
    };
    PDF_Slider.prototype.set        = function() {
        equalToHeight.call(this.header,"div");
        margTop.call(this.header,"span","div","div svg");
        margTop.call(this.body,".dlc");
        refMargTop(this.body,".rightMove svg,.leftMove svg");
        this.changeVis.find("animate").attr("dur","200ms");
        this.changeVis.find("animate").attr("attributeName","points");
        this.changeVis.find("animate").attr("fill","freeze");
        this.topSave = this.body.find(".dlc").attr("style");
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
        this.main.mouseleave(function(){
            _this.mov.addClass("fadeOut");
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
        this.body.bind("mousewheel",function(e) {
            if(e.originalEvent.wheelDelta /120 > 0) {
                $(this).scrollLeft($(this).scrollLeft()-45);
            }else {
                $(this).scrollLeft($(this).scrollLeft()+45);
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
                    imargTop(img);
                }else if(hImg>wImg) {
                    var rel       = container/hImg;
                    var newWidth  = wImg * rel;
                    img.css(getDims(newWidth,container));
                    imargLeft(img);
                }
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
    PDF_Slider.prototype.createTile = function(name,img) {
        var $dlc = $("<div>",{class:"dlc"});
        var $div = $("<div>");
        var $img = $("<img>",{src:img});
        var $span = $("<span>",{text:name});
        var $dwld = $("<div>",{class:"download"});
        var $link = $("<a>",{name:name,href:getPath(name)});
        var $svg = "<svg viewBox='109 -109.5 268.5 268.5' fill='rgb(200,200,200)'><path d='M341.9,114.3H144.5c-12.2,0-22.1,10-22.1,22.4c0,12.4,9.9,22.4,22.1,22.4h197.4c12.2,0,22.1-10,22.1-22.4C364.1,124.3,354.2,114.3,341.9,114.3z M226.9,89.7c4,4,9.2,6.1,14.5,6.5c0.6,0.1,1.2,0.2,1.9,0.2c0.6,0,1.2-0.1,1.8-0.2c5.3-0.4,10.5-2.5,14.5-6.5l70.8-71c8.9-8.9,8.9-23.3,0-32.1c-8.9-8.9-23.2-8.9-32.1,0l-32.7,32.8V-87.1c0-12.4-10-22.4-22.4-22.4c-12.4,0-22.4,10-22.4,22.4V19.3l-32.7-32.8c-8.9-8.9-23.2-8.9-32.1,0c-8.9,8.9-8.9,23.3,0,32.1L226.9,89.7z'/></svg>";
        $dwld.append($svg);
        $img.on("load",this.adjustTile_2);
        $div.append($img);
        $dlc.append($div,$span,$dwld,$link);
        this.body.find(".dlcContainer").prepend($dlc);
        this.tileEvents(".dlc");
        jmargTop.call(this.body,$dlc);
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
    
})(jQuery,Math,document,window);
