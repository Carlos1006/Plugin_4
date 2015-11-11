$(function() {
    var doc    = $("body,html");
    var banner = $("#banner");
    var titles = $("#events_c .titl");
    var tile   = null;
    var id     = null;
    banner.FixedSlide("random",35);

    titles
    .mouseenter(function() {
        tile =  $(this).parents(".tile");
        id = parseInt(tile.attr("num"));
        if(id%2 == 0) {
            tile.addClass("redTile");
        }else{
            tile.addClass("blueTile");
        }
        tile.addClass("fullTile");
    })
    .mouseleave(function() {
        tile.removeClass("fullTile redTile blueTile");
        tile = id = null;
    });

    var goBottom    = $("#goBottom");
    var heightImg   = $("#banner").height()-10;
    setTimeout(function() {
        goBottom.animate({opacity:1},200);
    },1500);
    goBottom.click(function() {
        doc.animate({scrollTop:heightImg},500,'linear',function(){});
    });

    var quickAcc    = $("#sideBanner .quickAccess");
    $(window).bind("scroll",function() {
        var scroll = this.scrollY;
        var scrolls = [scroll/4,scroll/2];
        goBottom.css({
            'transform'         : 'translateY(-' + scrolls[0] + 'px)',
            '-moz-transform'    : 'translateY(-' + scrolls[0] + 'px)',
            '-webkit-transform' : 'translateY(-' + scrolls[0] + 'px)'
        });
        quickAcc.css({
            'transform'         : 'translateY(-' + scrolls[1] + 'px)',
            '-moz-transform'    : 'translateY(-' + scrolls[1] + 'px)',
            '-webkit-transform' : 'translateY(-' + scrolls[1] + 'px)'
        });
    });

});