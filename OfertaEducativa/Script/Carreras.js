$(function() {
    var doc         = $("body,html");
    var banner      = $("#banner");
    var goBottom    = $("#goBottom");
    var tabs        = $(".slideContainer");
    var heightImg   = tabs[0].offsetTop - 65;

    banner.FixedSlide("random",0);
    setTimeout(function() {
        goBottom.animate({opacity:1},200);
    },1500);

    goBottom.click(function() {
        doc.animate({scrollTop:heightImg},500,'linear',function(){});
    });

    $(window).bind("scroll",function() {
        var scroll = this.scrollY;
        var scrollY = scroll/2;
        goBottom.css({
            'transform'         : 'translateY(-' + scrollY/4 + 'px)',
            '-moz-transform'    : 'translateY(-' + scrollY/4 + 'px)',
            '-webkit-transform' : 'translateY(-' + scrollY/4 + 'px)'
        });
    });

    $(".carreraTile").mouseenter(function() {
        $(this).find(".carreraShade").fadeIn(300);
    }).mouseleave(function() {
        $(this).find(".carreraShade").fadeOut(300);
    });

});