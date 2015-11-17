$(function(){
    $(".MainDLC").PDF_Slider();
    $(".MainDLC").AddPDF("Solicitud.pdf","../img/organizacion/note.png","Intercambio");
    $(".MainDLC").AddPDF("Becas IFAL.pdf","../img/intercambio/francia.jpg","Intercambio");
    $(".MainDLC").AddPDF("Botin.pdf","../img/intercambio/botin.png","Intercambio");
    $(".MainDLC").AddPDF("Eslovenia.pdf","../img/intercambio/si.png","Intercambio");
    $(".MainDLC").AddPDF("Francia.pdf","../img/intercambio/francia.jpg","Intercambio");
    $(".MainDLC").AddPDF("Quebec.pdf","../img/intercambio/canada.png","Intercambio");

    $(".MainDLC2").PDF_Slider();
    $(".MainDLC2").AddPDF("Movilidad estudiantil.pdf","../img/intercambio/movilidad.ico","Movilidad");
    $(".MainDLC2").AddPDF("Manutencion.pdf","../img/intercambio/beca.png","Becas");

    var doc    = $("body,html");
    var banner = $("#banner");
    var goBottom = $("#goBottom");

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

});