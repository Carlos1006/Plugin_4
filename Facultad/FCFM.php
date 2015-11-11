<!DOCTYPE HTML>
<html>
<head>
    <title>Facultad</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <script src="./Script/FCFM.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/FCFM.css" rel="stylesheet">
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Historia"></div>
    <div name="Mensaje del director"></div>
    <div name="Mision"></div>
    <div name="Vision"></div>
    <div name="Valores"></div>
    <div name="Calidad"></div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>