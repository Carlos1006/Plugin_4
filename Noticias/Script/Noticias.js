$(function() {

    var indexNoticias = 0;
    $(".new").find(".newMore").hide();
    $(".new")
    .mouseenter(function() {
        $(this).find(".newMore").fadeIn(300);
    })
    .mouseleave(function() {
        $(this).find(".newMore").fadeOut(300);
    });

    function ajaxEvent(indexNews) {
        var params = {
            type: 'POST',
            url: 'returnNoticias.php',
            dataType: 'json',
            data:{index:indexNews}
        };
        var request = $.ajax(params);
        var neu = 0;
        request.success(function(responde) {
            for(var i in responde) {
                var obj = responde[i];
                var newObj = $("#new"+neu);

                newObj.attr("idNoticia",obj.id);
                newObj.find(".newImg").css("background-image","url("+obj.img+")");
                newObj.find(".newtitle label").text(obj.title);
                newObj.find(".newCont label").text(obj.prev);
                neu++;
            }
        });
        request.error(function(){
            console.log("No es posible cargar las noticias");
        });
    };
    ajaxEvent(indexNoticias);

    $(".prev,.next").click(function() {
        var clas = $(this).attr("class");
        if(clas == "prev") {
            if(indexNoticias > 0) {
                indexNoticias-=8;
            }
        }else if(clas == "next") {
            if(indexNoticias < 16) {
                indexNoticias+=8;
            }
        }
        console.log(indexNoticias);
        ajaxEvent(indexNoticias);
    });


    $(".newMore").click(function() {
        var parent = $(this).parents(".new");
        var id = parent.attr("idnoticia");
        if($.trim(id) !='' && id!=null && typeof id != 'undefined') {
            var url = "./Noticia?id="+id;
            window.location.replace(url);
        }
    });

});