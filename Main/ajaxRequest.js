$(function(){

    var eventObj = $("#events_c");
    var newObj = $("#news_c");
    var months = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    ]
    var months = [
        "En",
        "Feb",
        "Mar",
        "Abr",
        "May",
        "Jun",
        "Jul",
        "Ag",
        "Sep",
        "Oct",
        "Nov",
        "Dic"
    ]

    function ajaxEvent() {
        var params = {
            type: 'POST',
            url: 'returnNoticiasYEventos.php',
            dataType: 'json',
        };
        var request = $.ajax(params);
        request.success(function(responde) {
            var noticias = responde.noticias;
            var eventos = responde.eventos;
            var j = 0;
            for(var i in eventos) {
                var evento = eventos[i];
                eventObj.find("div[num="+j+"] .date>label").text(evento.d+"/"+months[evento.m-1]+"/"+evento.y+" - "+evento.h);
                eventObj.find("div[num="+j+"] .titl>label").text(evento.name);
                eventObj.find("div[num="+j+"] .imgEvent").css("background-image","url("+evento.img+")");
                j++;
            }
            j=0;
            for(var i in noticias) {
                var noticia = noticias[i];
                newObj.find("div[num="+j+"]")
                newObj.find("div[num="+j+"] .date>label").text(noticia.d+"/"+months[noticia.m]+"/"+noticia.y);
                newObj.find("div[num="+j+"] .titl>label").text(noticia.name);
                newObj.find("div[num="+j+"] .imgEvent").css("background-image","url("+noticia.img+")");
                newObj.find("div[num="+j+"] .dwRow>label>b").before(noticia.prev.substr(0,100)+"...").attr("idnoticia",noticia.id);
                j++;
            }

        });
        request.error(function(){
            console.log("No es posible cargar las noticias");
        });
    };
    ajaxEvent();

});