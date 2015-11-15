<!DOCTYPE HTML>
<html>
<head>
    <title>Departamentos</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Departamentos.css" rel="stylesheet">
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Escolar"></div>
    <div name="Tesoreria"></div>
    <div name="Biblioteca"></div>
    <div name="CAADI"></div>
    <div name="Sociedad de alumnos"></div>
    <div name="Astronomia"></div>
    <div name="Deportivo"></div>
    <div name="Soporte Tecnico"></div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>