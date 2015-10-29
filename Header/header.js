;(function($,Math,document,window,undefined) {
    $(document).ready(function() {
        var main    = $("body");
        var doc     = $(this);
        var headerO = main.find(".superHeader");
        var header  = {
            AB :main.find(".superHeader_B"),
            C  :main.find(".superHeader_C"),
            D  :main.find(".superHeader_D"),
        };
        var heightC = header.C.height();
        var timeout = 0;
        var change  = function() {
            var scrollTop = $(this).scrollTop();
            if(scrollTop > heightC) {
                clearTimeout(timeout);
                header.D.hide();
                header.AB.removeClass("superHeader_B").addClass("superHeader_A");
            }
            if(scrollTop <= heightC) {
                header.AB.removeClass("superHeader_A").addClass("superHeader_B");
                clearTimeout(timeout);
                timeout = setTimeout(function() {
                    header.D.slideDown();
                },50);
            }
        };        
        $(window).bind("scroll",change);
        $(document).bind("wheel",change);
        var btns    = headerO.find(".buttn");
        btns.click(function() {
            var id      = $(this).attr("id");
            var drop    = headerO.find(".d_"+id);
            headerO.find(".drop").not(".d_"+id).fadeOut(200).removeClass("dropVisible");//filter return !$(this).hassClass(".d_"+id);
            drop.fadeToggle(200).toggleClass("dropVisible");
        });
        var fadeOutDrop = function() {
            headerO.find(".drop").fadeOut(200).removeClass("dropVisible");
        };
        main.click(function(e) {
            var obj = $(e.target);
            var clss = obj.attr("class")||'';
            if(!clss.match(/^superHeader_[AB]$/) && obj.parents(".superHeader").length == 0) {
                fadeOutDrop();
            }
        });
        var input = headerO.find(".searchInputHeader");
        input.focusin(fadeOutDrop);
    });
})(jQuery,Math,document,window);