;(function($,Math,document,window,undefined) {
    $(document).ready(function() {
        var footerO = $(this).find(".superFooter");
        var links = footerO.find(".twLink,.fbLink");
        var shield = footerO.find(".logBlock");
        links
        .mouseenter(function() {
            $(this).prev().addClass("noFilter");
        })
        .mouseleave(function() {
            $(this).prev().removeClass("noFilter");
        });
        shield
        .click(function() {
            var body = $("html, body");
            body.stop().animate({scrollTop:0},500,'swing',function(){});
        });
        
        
    });
})(jQuery,Math,document,window);