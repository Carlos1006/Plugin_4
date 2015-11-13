<!DOCTYPE HTML>
<html>
<head>
    <title>COM</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <?php
    $array = ['_00.png','_0.jpg','_1.jpg','_2.jpg','_3.jpg','_4.jpg','_5.jpg','_6.jpg','_7.jpg'];
    $num = $array[array_rand($array)];
    $file  = "../img/carrera/LMAD$num";
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
    <div class="lName"><label>Ciencias con Orientacion en Matematicas</label></div>
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