$(function(){
    var doc    = $("body,html");
    var banner = $("#banner");
    var goBottom = $("#goBottom");
    var lName = $(".lName");
    banner.FixedSlide("random",0);
    setTimeout(function() {
        goBottom.animate({opacity:1},200);
    },1500);

    var tabs = $(".tabContainer");
    var heightImg   = tabs[0].offsetTop - 65;
    goBottom.click(function() {
        doc.animate({scrollTop:heightImg},500,'linear',function(){});
    });

    tabs.Tabs();

    $(window).bind("scroll",function() {
        var scroll = this.scrollY;
        var scrollY = scroll/2;
        goBottom.css({
            'transform'         : 'translateY(-' + scrollY/4 + 'px)',
            '-moz-transform'    : 'translateY(-' + scrollY/4 + 'px)',
            '-webkit-transform' : 'translateY(-' + scrollY/4 + 'px)'
        });
        lName.css({
            'transform'         : 'translateY(-' + scrollY + 'px)',
            '-moz-transform'    : 'translateY(-' + scrollY + 'px)',
            '-webkit-transform' : 'translateY(-' + scrollY + 'px)'
        });
    });

    var viwer = $("#viewer");
    $(".tabh").click(function() {
        var num = $(this).attr("num");
        viwer.attr("num",num);
        if(viwer.hasClass("rotated")) {
            viwer.removeClass("rotated").addClass("noRotation");
        }else {
            viwer.removeClass("noRotation").addClass("rotated");
        }
    });

    $(".tabHeader").unbind("DOMMouseScroll mousewheel");

});