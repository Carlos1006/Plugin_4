<!DOCTYPE HTML>
<html>
<head>
    <title>Reglamento</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/Slide.html" ?>
    <?php require "../Include/dataTable.html" ?>
    <script src="./Script/ExaFCFM.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/ExaFCFM.css" rel="stylesheet">
</head>
<body>
<?php require_once "../Include/header.html" ?>
<style>
    #banner .frame {
        background-image: url(../img/servicios/reglamento/leyes.jpg);
    }
    .bodyHead span[num="0"] ,
    td[num="0"] {
        text-align:center;
        width:10% !important;
    }
    .bodyHead span[num="1"] ,
    td[num="1"] {
        width:90% !important;
    }
    td[num="1"] {
        width:86% !important;
        text-align:left;
        margin-left:4%;
    }
</style>
<script>
    var v = [
        "Bolsa de Trabajo",
        "Prácticas Profesionales"
    ];
    $(function() {
        $(".tableContainer").DataTable("Reglamento","Regla-num","Descripcion-txt");
        $(".tableContainer").AddRow("1","Todo usuario de cualquier semestre tiene derecho a trabajar en un ambiente armónico y sin molestias, por lo tanto cualquier alteración del orden y buenas costumbres por parte de compañeros usuarios, favor de reportarlo.");
        $(".tableContainer").AddRow("2","El usuario tiene derecho a usar los equipos de cómputo todo el tiempo que previamente reservó, pero está obligado liberar el equipo a tiempo.");
        $(".tableContainer").AddRow("3","La FCFM se compromete a tener los equipos en buen estado para trabajar, o reponer el tiempo separado en otro equipo similar.");
        $(".tableContainer").AddRow("4","El usuario se obliga a dar buen uso al equipo de cómputo.");
        $(".tableContainer").AddRow("5","La FCFM se compromete, en caso de fuerza mayor a reponer en un plazo no mayor a 4 días hábiles el tiempo reservado que no se utilizó (al mismo usuario).");
        $(".tableContainer").AddRow("6","No se permitirá hacer cambio de horario en un tiempo ya separado.");
        $(".tableContainer").AddRow("7","Para realizar una reservación se requiere proporcionar el número de matrícula.");
        $(".tableContainer").AddRow("8","Las reservaciones no son transferibles, por lo que podrán ser utilizadas por el usuario registrado, tomando como base el número de matrícula.");
        $(".tableContainer").AddRow("9","Sólo podrán ser registrados alumnos de la FCFM.");
        $(".tableContainer").AddRow("10","No se permite el acceso de invitados a la sesión reservada, por lo que se admite un usuario por equipo.");
        $(".tableContainer").AddRow("11","La limpieza es parte de la imagen de la FCFM.");
        $(".tableContainer").AddRow("12","El tiempo reservado es respetado por parte de la FCFM, pero se solicita puntual asistencia.");
        $(".tableContainer").AddRow("13","No se permite el acceso al equipo sin no se tiene reservación.");
        $(".tableContainer").AddRow("14","Queda estrictamente prohibido jugar con el equipo.");
        $(".tableContainer").AddRow("15","Queda prohibido introducir bebidas y alimentos a las salas de cómputo de la FCFM.");
        $(".tableContainer").AddRow("16","El usuario deberá acatar las disposiciones del personal encargado.");
        $(".tableContainer").AddRow("17","No se permitirá la permanencia de usuarios en los pasillos o escaleras.");
        $(".tableContainer").AddRow("18","Las computadoras equipadas con impresora están destinadas para la impresión de trabajos o reportes. Estas computadoras no deberán utilizarse para otro propósito.");
        $(".tableContainer").AddRow("19","Para tener acceso a las salas de computadoras se deberá presentar credencial vigente y tarjeta de horas de máquina (en caso de alumnos).");
        $(".tableContainer").AddRow("20","Queda prohibido fumar en el interior del edificio.");
        $(".tableContainer").AddRow("21","Queda prohibido mover los equipos de su lugar.");
        $(".tableContainer").AddRow("22","Queda prohibido mover las sillas de una sala a otra.");
        $(".tableContainer").AddRow("23","Queda prohibido rayar o maltratar el mobiliario.");
        $(".tableContainer").AddRow("24","Queda prohibido colocar anuncios en las paredes.");
    });
</script>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="tableContainer"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>