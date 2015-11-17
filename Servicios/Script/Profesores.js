$(function() {
    $(".MainDLC").PDF_Slider();
    $(".MainDLC").AddPDF("Cisco_IP_PHONE.pdf","../img/pdf/cisco.png","Profesores");
    $(".MainDLC").AddPDF("Curso_IP_PHONE.pdf","../img/pdf/phone.png","Profesores");
    $(".MainDLC").AddPDF("Manual Tutor.pdf","../img/servicios/programas/ss.png","Profesores");
    $(".MainDLC").AddPDF("PAT_FCFM.pdf","../img/pdf/tutor.png","Profesores");
    $(".MainDLC").AddPDF("PIT.pdf","../img/pdf/tutor.png","Profesores");
    $(".MainDLC").AddPDF("SIASE Tutor.pdf","../img/pdf/siase.png","Profesores");
    $(".MainDLC").AddPDF("Tutorial_IP_7940.pdf","../img/pdf/phone.png","Profesores");
    $(".MainDLC").AddPDF("Tutorial_IP_PHONE.pdf","../img/pdf/phone.png","Profesores");

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