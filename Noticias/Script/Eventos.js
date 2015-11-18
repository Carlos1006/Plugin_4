$(function(){
    $(".tabContainer").fullCalendar();

    function ajaxEvent() {
        var params = {
            type: 'POST',
            url: 'returnEventos.php',
            dataType: 'json',
            async:false
        };
        var request = $.ajax(params);
        request.success(function(responde) {
            for(var i in responde) {
                var obj = responde[i];
                var event = $.getEvent(obj.h,obj.name,obj.img);
                $(".tabContainer").setEvent(obj.y,obj.m-1,obj.d,event);
                var dateA = $.getDate(obj.d,obj.m-1,obj.y);
                var color = $.getColor(32,66,136);
                $(".tabContainer").setRange(dateA,dateA,color);
                $(".tabContainer").refresh();
            }
        });
        request.error(function(){
            console.log("No es posible cargar los eventos");
        });
    };
    ajaxEvent();

});
        
