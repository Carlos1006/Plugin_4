<?php
    header('Content-Type: application/json');
    $link   = mysqli_connect("localhost","root","","fcfm");
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    }
    $eventosQuery   = mysqli_query($link,"SELECT * FROM evento LIMIT 5");
    $arrayEventos = array();
    while ($evento = mysqli_fetch_array($eventosQuery)) {
        $obj;
        $obj["id"] = (INT)($evento["idEvento"]);
        $obj["name"] = utf8_encode($evento["nombreEvento"]);
        $obj["img"] = "data:image/jpeg;base64," . base64_encode($evento["imgEv"]);
        $obj["d"] = (INT)$evento["dia"];
        $obj["m"] = (INT)$evento["mes"];
        $obj["y"] = (INT)$evento["anio"];
        $obj["h"] = utf8_encode($evento["hora"]);
        array_push($arrayEventos, $obj);
    }

    $noticiasQuery   = mysqli_query($link,
        "SELECT idNoticia,
		        tituloNoticia,
                contenidoNoticia,
                autorNoticia,
                imagenNoticia,
                vistaPrevia,
                DAY(fechaNoticia) as dia,
                MONTH(fechaNoticia) as mes,
                YEAR(fechaNoticia) as anio
        From Noticia
        LIMIT 4");
    $arrayNoticias = array();
    while ($noticia = mysqli_fetch_array($noticiasQuery)) {
        $obj;
        $obj["id"]      = (INT)$noticia["idNoticia"];
        $obj["title"]   = utf8_encode($noticia["tituloNoticia"]);
        $obj["cont"]    = utf8_encode($noticia["contenidoNoticia"]);
        $obj["aut"]     = utf8_encode($noticia["autorNoticia"]);
        $obj["prev"]    = utf8_encode($noticia["vistaPrevia"]);
        $obj["d"]       = (INT)$noticia["dia"];
        $obj["m"]       = (INT)$noticia["mes"];
        $obj["y"]       = (INT)$noticia["anio"];
        $obj["img"]     = "data:image/jpeg;base64,".base64_encode($noticia["imagenNoticia"]);
        array_push($arrayNoticias, $obj);
    }
    $arrayNE = array("eventos"=>$arrayEventos,"noticias"=>$arrayNoticias);
    echo json_encode($arrayNE);
?>