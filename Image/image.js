;(function($,Math,document,window,undefined) {
    var instances = [];
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        for( var i=0; i < 10; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    };
    function Slide(object,url,position) {
        this.ini(object,url,position);
        this.define();
        this.set();
        //this.createStyleObject();
        //this.adjustPosition();
        //this.setImage();
        this.setImageInfo();
        this.events();
        return;
    };
    Slide.prototype.ini                = function(object,url,position) {
        this.globalId   = makeid();
        this.url        = url;
        this.js         = object;
        this.main       = $(object);
        this.position   = position;
        $("body").addClass(".body");
        this.main.attr("globalId",this.globalId); 
        this.main.addClass("superFixedSlide "+this.globalId);
        //this.createForm();
    };
    Slide.prototype.createCanvas       = function() {
        var _this = this;
        var image = new Image();
        image.onload = function(e) {
            var canvas    = document.createElement('canvas');
            var mainWidth = _this.main.width();
            var rel = image.naturalWidth/mainWidth;
            canvas.height = image.naturalHeight/rel;
            canvas.width  = image.naturalWidth/rel;
            _this.canvas  = canvas;
            _this.context = canvas.getContext('2d');
            _this.context.drawImage(image,0,0,canvas.width,canvas.height);
            _this.url = _this.canvas.toDataURL();
            _this.define();
            _this.set();
            _this.createStyleObject();
            _this.adjustPosition();
            _this.setImage();
            _this.setImageInfo();
            _this.events();
        };
        image.src = this.url;
    };
    Slide.prototype.createStyleObject  = function() {
        this.style = $("<style>",{class:"mainStyle"}); 
        $("head").append(this.style);
    };
    Slide.prototype.define             = function() {
        this.frame = this.main.find(".frame");
        this.currentOpacity = 1.0;
        this.currentBlur    = 0;
    };
    Slide.prototype.set                = function() {
        //this.changeFrameOpacity(1.0);
    };
    Slide.prototype.setImage           = function() {
        var img     = this.url;
        var style   = "."+this.globalId+" .frame {background-image:url("+img+");background-attachment:fixed;}";
        //fraccion eliminada , ."+this.globalId+" .overlay
        this.style.append(style);
    };
    Slide.prototype.adjustPosition     = function() {
        if(this.position != null && this.position != undefined) {
            var position = this.position;
            var style = "."+this.globalId+" .frame, ."+this.globalId+" .overlay{background: 50% "+position+"% / cover;}";
            this.style.append(style);
        }
    };
    Slide.prototype.setImageInfo       = function() {
        this.height = this.main.height();
        this.offset = this.main.offset();
        this.scroll = this.offset.top;
        this.limits = this.scroll+this.height;
    };
    Slide.prototype.createForm         = function() {
        this.main.empty();
        this.main.append($("<div>",{class:"frame"}));
        //this.main.append($("<div>",{class:"overlay"}));
    };
    Slide.prototype.changeFrameOpacity = function(value) {
        this.frame.css("opacity",value);
    };
    Slide.prototype.changeFrameBlur    = function(value) {
        this.frame.css("-webkit-filter","blur("+value+"px)");
        this.frame.css("filter","blur("+value+"px)");
    };
    Slide.prototype.events             = function() {
        /*window.requestAnimFrame = (function() {
            return  window.requestAnimationFrame||
                    window.webkitRequestAnimationFrame||
                    window.mozRequestAnimationFrame||
                    function( callback ){
                        window.setTimeout(callback,1000/60);
                    };
        })();*/
        var _this = this;
        this.tick = true;
        var counter = 0;
        var percent = 1;
        var offset = 0;
        var scroll = this.scroll;
        var limits = this.limits;
        var height = this.height;
        $(window).bind("scroll",function() {
            counter++;
            if(counter < 1) {
                return;
            }else {
                counter = 0;
            }
            var scrollTop   = $(this).scrollTop();
            if(scrollTop>scroll && scrollTop<=limits) {
                offset = scrollTop;
                offset = offset - scroll;
                percent = 1-((offset/height));
                var realvalue = 6-(percent*6);
                realvalue = parseInt(realvalue)+1;
                //realvalue = realvalue.toFixed(1);
                if(realvalue != _this.currentBlur) {
                    _this.currentBlur = realvalue;
                    _this.frame.css("-webkit-filter","blur("+realvalue+"px)");
                    _this.frame.css("filter","blur("+realvalue+"px)");
                }
                /*
                percent = percent.toFixed(1);
                if(percent != _this.currentOpacity) {
                    _this.currentOpacity = percent;
                    _this.changeFrameOpacity(percent);
                }*/
            }else if(_this.currentBlur != 0 && scrollTop<=scroll){
                _this.frame.css("-webkit-filter","blur("+0+"px)");
                _this.frame.css("filter","blur("+0+"px)");
            }
        });  
        $(window).trigger("scroll");
    };
    $.fn.FixedSlide                    = function(url,position) {
        if(url != 'random' && url != 'rand') {
            var instance = new Slide(this,url,position); 
            instances[instance.globalId] = instance;
        }else {
            var _this = this;
            var param = {
                method:"post",
                url:"../Image/getImage.php",
                dataType:"json"
            };
            var request = $.ajax(param);
            request.success(function(path){
                var instanceAsync = new Slide(_this,path,position); 
                instances[instanceAsync.globalId] = instanceAsync;
            });
        }
    };
})(jQuery,Math,document,window);