<!DOCTYPE HTML>
<html>
<head>
    <title>Busqueda</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Busqueda.css" rel="stylesheet">
    <script src="Script/Script.js"></script>
    <script src="Script/Busqueda.js"></script>
    <script>
        $(function() {
            function ajaxEvent() {
                $(".new").remove();
                var params = {
                    type: 'POST',
                    url: 'returnBusqueda.php',
                    dataType: 'json',
                    data:{index:"<?php  echo $_GET["buscar"]?>"}
                };
                var request = $.ajax(params);
                request.success(function(responde) {
                    if(responde.length == 0) {
                        $(".tabContainer").append(
                            "<div class='noResults'> " +
                                "<div class='noRLabelC'>" +
                                    "<label>Sin Resultados</label>"+
                                "</div>"+
                            "</div>"
                        );
                    }
                    for(var i in responde) {
                        var obj = responde[i];
                        var $objeto = $("<div>",{class:"new"});
                        $objeto.attr("id","new"+obj.id);
                        $objeto.attr("idNotcia",obj.id);
                        $objeto.append("<div class='newImg'></div>\
			                    <div class='newtitle'><label>"+obj.title+"</label></div>\
			                    <div class='newCont'><label>"+obj.prev+"</label></div>\
			                    <div class='newMore'><label>Leer noticia</label></div>"
                        );
                        $objeto.find(".newMore").hide();
                        $objeto.find(".newImg").css("background-image","url("+obj.img+")");
                        $objeto
                            .mouseenter(function() {
                                $(this).find(".newMore").fadeIn(300);
                            })
                            .mouseleave(function() {
                                $(this).find(".newMore").fadeOut(300);
                            });

                        $objeto.find(".newMore").click(function() {
                            var url = "./Noticia?id="+obj.id;
                            window.location.replace(url);
                        });

                        $(".tabContainer").append($objeto);

                    }
                });
                request.error(function(){
                    console.log("No es posible cargar la busqueda");
                });
            };
            ajaxEvent();
        });
    </script>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div class="newHeader"><label>Busqueda</label></div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
    <div class="new">
        <div class="newImg"></div>
        <div class="newtitle"><label>Titulo de noticias</label></div>
        <div class="newCont"><label>aSDDsddddddddddddddddddddddd</label></div>
        <div class="newMore"><label>Leer noticia</label></div>
    </div>
</div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>