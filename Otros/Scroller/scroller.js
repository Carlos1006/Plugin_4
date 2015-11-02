
;(function($,Math,document,window,undefined) {
    $(function(){
        var $content = $('header .content');
        var $blur    = $('header .overlay');
        var wHeight  = $(window).height();
        $(window).on('resize', function() {
            wHeight = $(window).height();
        });
        window.requestAnimFrame = (function() {
            return  window.requestAnimationFrame||
                    window.webkitRequestAnimationFrame||
                    window.mozRequestAnimationFrame||
                    function( callback ){
                        window.setTimeout(callback,1000/60);
                    };
        })();
        
        function Scroller() {
            this.latestKnownScrollY = 0;
            this.ticking            = false;
            this.init();
        }
        Scroller.prototype.init        = function() {
            window.addEventListener('scroll', this.onScroll.bind(this), false);
        };
        Scroller.prototype.onScroll    = function() {
            this.latestKnownScrollY = window.scrollY;
            this.requestTick();
        };
        Scroller.prototype.requestTick = function() {
            if( !this.ticking ) {
                window.requestAnimFrame(this.update.bind(this));
            }
            this.ticking = true;
        };
        Scroller.prototype.update      = function() {
            var currentScrollY = this.latestKnownScrollY;
            this.ticking = false;
            var slowScroll = currentScrollY / 4
            , blurScroll = currentScrollY * 2;
            $content.css({
                'transform'         : 'translateY(-' + slowScroll + 'px)',
                '-moz-transform'    : 'translateY(-' + slowScroll + 'px)',
                '-webkit-transform' : 'translateY(-' + slowScroll + 'px)'
            });
            $blur.css({
                'opacity' : blurScroll / wHeight
            });
        };
        var scroller = new Scroller();  
    });
})(jQuery,Math,document,window);

