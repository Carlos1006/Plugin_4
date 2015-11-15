<!DOCTYPE HTML>
<html>
<head>
    <title>IFI</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <?php
    $array = ['','_2'];
    $num = $array[array_rand($array)];
    $file  = "../img/posgrado/IFI$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Ingenieria en Fisica Industrial</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Descripcion"></div>
    <div name="Objetivo"></div>
    <div name="Egresado"></div>
    <div name="Plan de estudios"></div>
    <div name="Reconocimiento CIEES"></div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>