<!DOCTYPE HTML>
<html>
<head>
    <title>Celerinet</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/Slide.html" ?>
    <script src="./Script/Celerinet.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Celerinet.css" rel="stylesheet">
    <style>
        .dlc {
            background-size:auto 100% !important;
        }
    </style>
    <script>
        $(window).on("load",function() {
            $(".downloadContainer").AddPDF("Volumen1.pdf","../img/pdf/vol1.jpg","Celerinet");
            $(".downloadContainer").AddPDF("Volumen2.pdf","../img/pdf/vol2.jpg","Celerinet");
            $(".downloadContainer").AddPDF("Volumen3.pdf","../img/pdf/vol3.png","Celerinet");
            $(".downloadContainer").AddPDF("Volumen4.pdf","../img/pdf/vol4.png","Celerinet");
            $(".downloadContainer").AddPDF("Volumen5.pdf","../img/pdf/vol5.jpg","Celerinet");
        });
    </script>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="slideContainer">
    <div class="celerinetHead"><label>CELERINET</label></div>
    <div class="celerinetBody">
        <div class="descriptionContainer">
            <label>Celerinet: es la revista electrónica de la Facultad de Ciencias Físico Matemáticas de la UANL donde se pueden encontrar artículos científicos y académicos de las carreras de Física, Matemáticas, Ciencias Computacionales, Actuaría, Multimedia y Animación Digital y Seguridad en Tecnologías de la Información.</label>
        </div>
        <div class="downloadContainer"></div>
    </div>
</div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>