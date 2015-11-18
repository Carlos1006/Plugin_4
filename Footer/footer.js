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

        $(".exLink").click(function() {
            var url = $(this).attr("ref");
            window.open(url);
        });
        $(".inLink").click(function() {
            var url = $(this).attr("ref");
            window.location.replace(url);
        });
        
    });
})(jQuery,Math,document,window);