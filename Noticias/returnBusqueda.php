<?php
header('Content-Type: application/json');

$con=mysqli_connect("localhost","root","","fcfm");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}

$similitud = $_POST['index'];
$mysqli_result=mysqli_query($con,
    "SELECT DISTINCT idNoticia,
            tituloNoticia,
            contenidoNoticia,
            autorNoticia,
            imagenNoticia,
            vistaPrevia,
            DAY(fechaNoticia) as dia,
            MONTH(fechaNoticia) as mes,
            YEAR(fechaNoticia) as anio
    From Noticia
    WHERE contenidoNoticia LIKE '%$similitud%'
    OR autorNoticia LIKE '%$similitud%'
    OR tituloNoticia LIKE '%$similitud%'");

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
mysqli_free_result($mysqli_result);
echo json_encode($array);

?>