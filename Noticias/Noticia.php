<?php
$con=mysqli_connect("localhost","root","","fcfm");
if (!$con) {
    die('Could not connect: ' . mysqli_error());
}
$id = $_GET["id"];
$mysqli_result=mysqli_query($con,"SELECT DISTINCT idNoticia,
                                                    tituloNoticia,
                                                    contenidoNoticia,
                                                    autorNoticia,
                                                    imagenNoticia,
                                                    vistaPrevia,
                                                    DAY(fechaNoticia) as 'dia',
                                                    MONTH(fechaNoticia) as 'mes',
                                                    YEAR(fechaNoticia) as 'anio'
                                                    FROM noticia WHERE idNoticia=$id");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Noticia</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Noticias.css" rel="stylesheet">
    <script src="Script/Script.js"></script>
    <script src="Script/Noticias.js"></script>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>

<?php
while ($fila = mysqli_fetch_array($mysqli_result)) {
    ?>
    <div class="tabContainer">
        <div class="newHeader"><label><?php echo utf8_encode($fila["tituloNoticia"]) ?></label></div>
        <div class="newMainImg" style="background-image:url(<?php echo "data:image/jpeg;base64,".base64_encode($fila["imagenNoticia"]); ?>);"></div>
        <div class="divisor"></div>
        <div class="newMainCont"><label><?php echo utf8_encode($fila["contenidoNoticia"])?> </label></div>
    </div>  <?php
}
?>
<?php require_once "../Include/footer.html" ?>
</body>
</html>