<?php
    header('Content-Type: application/json');
    $con=mysqli_connect("localhost","root","","fcfm");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }  
    $mysqli_result=mysqli_query($con,"SELECT * FROM evento");
    $array = array();   
    while ($fila = mysqli_fetch_array($mysqli_result)) {
        $obj;
        $obj["id"]   = (INT)$fila["idEvento"];
        $obj["name"] = utf8_encode($fila["nombreEvento"]);
        $obj["img"]  = "data:image/jpeg;base64,".base64_encode($fila["imgEv"]);
        $obj["d"]    = (INT)$fila["dia"];
        $obj["m"]    = (INT)$fila["mes"];
        $obj["y"]    = (INT)$fila["anio"];
        $obj["h"]    = utf8_encode($fila["hora"]);
        array_push($array,$obj);
    }
    echo json_encode($array);
    mysqli_free_result($mysqli_result);
?>