$(function() {
    $(".new").find(".newMore").hide();
    $(".new")
    .mouseenter(function() {
        $(this).find(".newMore").fadeIn(300);
    })
    .mouseleave(function() {
        $(this).find(".newMore").fadeOut(300);
    });
});