;(function($,Math,document,window,undefined) {
    var instances = [];
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        for( var i=0; i < 10; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    };
    function Slide(object,position) {
        this.ini(object,position);
        this.define();
        this.set();
        this.setImageInfo();
        this.events();
    };
    Slide.prototype.ini                 = function(object,position) {
        this.globalId   = makeid();
        this.js         = object;
        this.main       = $(object);
        this.position   = position;
        $("body").addClass(".body");
        this.main.attr("globalId",this.globalId); 
        this.main.addClass("superFixedSlide "+this.globalId);
        this.createForm();
    };
    
    Slide.prototype.define              = function() {
        this.frame = this.main.find(".frame");
        this.currentOpacity = 1.0;
        this.currentBlur    = 0;
    };
    Slide.prototype.set                 = function() {
        this.changeFrameOpacity(1.0);
    };
    
    Slide.prototype.setImageInfo        = function() {
        this.height = this.main.height();
        this.offset = this.main.offset();
        this.scroll = this.offset.top;
        this.limits = this.scroll+this.height;
    };
    Slide.prototype.createForm          = function() {
        this.main.empty();
        this.main.append($("<div>",{class:"frame"}));
        this.main.append($("<div>",{class:"overlay"}));
    };
    Slide.prototype.changeFrameOpacity  = function(value) {
        this.frame.css("opacity",value);
    };
    Slide.prototype.events = function() {
        window.requestAnimFrame = (function() {
            return  window.requestAnimationFrame||
                    window.webkitRequestAnimationFrame||
                    window.mozRequestAnimationFrame||
                    function( callback ){
                        window.setTimeout(callback,1000/60);
                    };
        })();
        var _this = this;
        this.tick = true;
        var counter = 0;
        var percent = 1;
        var offset = 0;
        var scroll = this.scroll;
        var limits = this.limits;
        var height = this.height;
        $(window).bind("scroll",function() {
            var scrollTop   = $(this).scrollTop();
            if(scrollTop>=scroll && scrollTop<=limits) {
                offset = scrollTop;
                offset = offset - scroll;
                percent = 1-(((offset/height)*2)-0.05);
                if(percent != _this.currentOpacity) {
                    _this.currentOpacity = percent;
                    _this.changeFrameOpacity(percent);
                }
            }
        });  
    };
    $.fn.FixedSlide = function(url,position) {
        var instance = new Slide(this,url,position); 
        instances[instance.globalId] = instance;
    };
})(jQuery,Math,document,window);