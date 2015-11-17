<!DOCTYPE HTML>
<html>
<head>
    <title>Organizacion</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/Slide.html" ?>
    <script src="./Script/Organizacion.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Organizacion.css" rel="stylesheet">
    <style>
        .dlc:nth-child(1)
        ,.dlc:nth-child(2) {
            background-size:auto 60% !important;
        }
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Organigrama">
        <div class="btnContainer" state="0">
            <div class="wrapperBtn"></div>
            <div class="btnOrganigrama toggle"><label>Parte 2</label></div>
            <div class="btnOrganigrama root"><label>Inicio</label></div>
            <div class="btnOrganigrama" num="0"><label></label></div>
            <div class="btnOrganigrama" num="1"><label></label></div>
            <div class="btnOrganigrama" num="2"><label></label></div>
            <div class="btnOrganigrama" num="3"><label></label></div>
            <div class="btnOrganigrama" num="4"><label></label></div>
            <div class="btnOrganigrama" num="5"><label></label></div>
            <div class="btnOrganigrama" num="6"><label></label></div>
        </div>
        <div class="organigrama" state="0" type="0"></div>
    </div>
    <div name="Contenido descargable">
        <div class="MainDLC"></div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>