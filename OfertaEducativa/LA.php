<!DOCTYPE HTML>
<html>
<head>
    <title>LA</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <style>
        #banner>.frame{
            background-image: url("../img/carrera/LA.jpg");
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Actuaria</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Objetivo"></div>
    <div name="Aspirante"></div>
    <div name="Egresado"></div>
    <div name="Descargables"></div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>