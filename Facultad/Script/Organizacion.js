$(function(){
    var view = $(".organigrama");
    var part1 = [
        "Sec. Administrativa",
        "Des. e Innovacion Academica",
        "Posgrado",
        "Relaciones Humanas",
        "Desarrollo Estudiantil",
        "Responsabilidad Social Universitaria"
    ];
    var part2 = [
        "LM",
        "LF",
        "LCC",
        "LA",
        "LMAD",
        "LSTI",
        "FOGU"
    ];

    function toPart1() {
        for(var i in part1) {
            var object = part1[i];
            var num = i;
            var name = object;
            $(".btnOrganigrama[num="+num+"]>label").text(name);
        }
    };
    function toPart2() {
        for(var i in part2) {
            var object = part2[i];
            var num = i;
            var name = object;
            $(".btnOrganigrama[num="+num+"]>label").text(name);
        }
    };
    toPart1();

    $(".btnOrganigrama[num]").click(function(){
        var num = parseInt($(this).attr("num"));
        view.attr("type",num+1);
    });
    $(".btnOrganigrama.root").click(function(){
        view.attr("type",0);
    });

    $(".btnOrganigrama.toggle").click(function(){
        var parent = $(this).parent();
        var num = parseInt(parent.attr("state"));
        var back;
        if(num == 0) {
            back = 1;
            toPart2();
        }else if(num == 1) {
            back = 0;
            toPart1();
        }
        parent.attr("state",back);
        view.attr("state",back);
        view.attr("type",0);
        $(this).find("label").text("Parte "+(num+1));
    });

    $(".MainDLC").PDF_Slider();
    $(".MainDLC").AddPDF("CarlosCV.pdf","../img/A.jpg");


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