<!DOCTYPE HTML>
<html>
<head>
    <title>ExaFCFM</title>
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
        background-image: url(../img/servicios/exafcfm/exafcfm.jpg);
    }
</style>
<script>
    var v = [
        "Bolsa de Trabajo",
        "Prácticas Profesionales"
    ];
    $(function() {
        $(".tableContainer").DataTable("Ofertas de Empleo","Empresa-txt","Titulo-txt","Contacto-txt","Vacante-txt");
        $(".tableContainer").AddRow("Mancera SC","Information Security - Staff","sonia.rodriguez@mx.ey.com",v[0]);
        $(".tableContainer").AddRow("CEMEX México","Lic. En Ciencias Computacionales","jcuevas@cemmthome.com",v[1]);
        $(".tableContainer").AddRow("Espacios de México S.A. de C.V.","Desarrollador iOS","jalvarez@espaciosmail.com",v[0]);
        $(".tableContainer").AddRow("Espacios de México S.A. de C.V.","Desarrollador Web","jalvarez@espaciosmail.com",v[0]);
        $(".tableContainer").AddRow("GRUPO GLAS S.A. DE C.V.","Analista Sr. Con conocimientos avanzados de Análisis, Diseño y Testing","rreynar@grupoglas.com",v[0]);
        $(".tableContainer").AddRow("SEGUETAS LENMEX, S.A. de C.V.","LCC","juan.nava@maraga.com.mx",v[0]);
        $(".tableContainer").AddRow("SEGUETAS LENMEX, S.A. de C.V.","Desarrollo","juan.nava@maraga.com.mx",v[0]);
        $(".tableContainer").AddRow("Territorium Life SAPI de CV","Web Application Developer","hi@territoriumlife.com",v[0]);
        $(".tableContainer").AddRow("BANORTE","LCC","juanmanuel.diaz@banorte.com",v[0]);
        $(".tableContainer").AddRow("PRODUCTIVIDAD, ASESORIA Y SERVICIOS, S.C.","LCC Pasante / Carrera Terminada","proashr@proasgrupo.com.mx sistemas@proasgrupo.com.mx",v[0]);
        $(".tableContainer").AddRow("Organización Soriana","PRACTICAS PROFESIONALES-ORGANIZACION SORIANA","miguelazv@soriana.com",v[1]);
        $(".tableContainer").AddRow("Organización Soriana","Analista de Mercado","miguelazv@soriana.com",v[0]);
        $(".tableContainer").AddRow("SIS Organización","Tester","sandra.cruz@sisorg.com.mx",v[0]);
        $(".tableContainer").AddRow("SIS Organización","Desarrollador .Net Jr","sandra.cruz@sisorg.com.mx",v[0]);
        $(".tableContainer").AddRow("Epyx & Woodwing México S.A., de C.V.","Desarrollador de Software","info@epyx-ms.com info@woodwing.com.mx",v[0]);
        $(".tableContainer").AddRow("EXEL","ANALISTA DE RIESGOS","83 68 59 00 ext:1053",v[0]);
        $(".tableContainer").AddRow("Near IT Services de México S DE RL DE CV","Practicante LMAD, LCC","administración@nearitservices.com",v[1]);
        $(".tableContainer").AddRow("Universidad Tec Milenio","Licenciado en Fisica Y Matemáticas","jugarci@tecmilenio.mx",v[0]);
        $(".tableContainer").AddRow("Colegio Americano Anáhuac","LCC","dir.rh@americanoanahuac.edu.mx",v[0]);
        $(".tableContainer").AddRow("GENERALSOFT SOLUCIONES Y SERVICIOS TECNOLÓGICOS, S.A. DE","Programador Sr.","jorge.giron@generalsoft.com.mx",v[0]);
        $(".tableContainer").AddRow("GENERALSOFT SOLUCIONES Y SERVICIOS TECNOLÓGICOS, S.A. DE","Programador Jr.","jorge.giron@generalsoft.com.mx",v[0]);
        $(".tableContainer").AddRow("Preparatoria No. 23","Lic. en Física y Lic. Matemáticas","angela.herrerac@uanl.mx",v[0]);
        $(".tableContainer").AddRow("AGENTIA","Analista de Sistemas","cesar.nino@agentia.com.mx",v[0]);
        $(".tableContainer").AddRow("Sistemas SCADA Consultoria y Desarrollo SA de CV","Practicante LCC","mvaldez@altum.com.mx",v[0]);
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