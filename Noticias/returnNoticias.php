<?php
header('Content-Type: application/json');
session_start();
$index = (INT)$_POST["index"];

if(!isset($_SESSION["noticias"])) {
    $con=mysqli_connect("localhost","root","","fcfm");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
    $mysqli_result=mysqli_query($con,
        "SELECT idNoticia,
		        tituloNoticia,
                contenidoNoticia,
                autorNoticia,
                imagenNoticia,
                vistaPrevia,
                DAY(fechaNoticia) as dia,
                MONTH(fechaNoticia) as mes,
                YEAR(fechaNoticia) as anio
        From Noticia");
    $array = array();
    while ($fila = mysqli_fetch_array($mysqli_result)) {
        $obj;
        $obj["id"]      = (INT)$fila["idNoticia"];
        $obj["title"]   = utf8_encode($fila["tituloNoticia"]);
        $obj["cont"]    = utf8_encode($fila["contenidoNoticia"]);
        $obj["aut"]     = utf8_encode($fila["autorNoticia"]);
        $obj["prev"]    = utf8_encode($fila["vistaPrevia"]);
        $obj["d"]       = (INT)$fila["dia"];
        $obj["m"]       = (INT)$fila["mes"];
        $obj["y"]       = (INT)$fila["anio"];
        $obj["img"]     = "data:image/jpeg;base64,".base64_encode($fila["imagenNoticia"]);
        array_push($array,$obj);

    }
    $_SESSION["noticias"] = $array;
    mysqli_free_result($mysqli_result);
}

$newArray = array();
for($i = $index; $i < $index+8 ; $i++) {
    array_push($newArray,$_SESSION["noticias"][$i]);
}
echo json_encode($newArray);
?>