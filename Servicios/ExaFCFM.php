<!DOCTYPE HTML>
<html>
<head>
    <title>ExaFCFM</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/Slide.html" ?>
    <?php require "../Include/dataTable.html" ?>
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
    $(function(){
        $(".tableContainer").DataTable("Ofertas de Empleo","Empresa-txt","Titulo-txt","Contacto-txt","Vacante-txt");
        $(".tableContainer").AddRow("Carlos"  ,$.date(1994,11,06)     ,"01",  "$ 1200.50"         );
        $(".tableContainer").AddRow("Daniel"  ,$.date('2006-11-07')   ,"21",  "$ 1200.00"         );
        $(".tableContainer").AddRow("Ariadna" ,"06/Octubre/1994"      ,"21",  $.money(10.15)      );
        $(".tableContainer").AddRow("Pamela"  ,"06/Octubre/1994"      ,"19",  $.money(10.15)      );
        $(".tableContainer").AddRow("Debanhi" ,"06/Octubre/1994"      ,"21",  $.money(10.15)      );
        $(".tableContainer").AddRow("Hilda"   ,"06/Octubre/1992"      ,"21",  $.money(10.15)      );
        $(".tableContainer").AddRow("Sergio"  ,"06/Octubre/1994"      ,"20",  $.money(120.15)     );
        $(".tableContainer").AddRow("Berenice","06/Octubre/1994"      ,"21",  $.money(120.15)     );
        $(".tableContainer").AddRow("Alberto" ,"06/Octubre/1994"      ,"17",  $.money(12.15)      );
        $(".tableContainer").AddRow("Carlos"  ,$.date(1994,11,06)     ,"01",  "$ 1200.50"         );
        $(".tableContainer").AddRow("Daniel"  ,$.date('2006-11-07')   ,"21",  "$ 1200.00"         );
        $(".tableContainer").AddRow("Ariadna" ,"06/Octubre/1994"      ,"21",  $.money(10.15)      );
        $(".tableContainer").AddRow("Pamela"  ,"06/Octubre/1994"      ,"19",  $.money(10.15)      );
        $(".tableContainer").AddRow("Debanhi" ,"06/Octubre/1994"      ,"21",  $.money(10.15)      );
        $(".tableContainer").AddRow("Hilda"   ,"06/Octubre/1992"      ,"21",  $.money(10.15)      );
        $(".tableContainer").AddRow("Sergio"  ,"06/Octubre/1994"      ,"20",  $.money(120.15)     );
        $(".tableContainer").AddRow("Berenice","06/Octubre/1994"      ,"21",  $.money(120.15)     );
        $(".tableContainer").AddRow("Alberto" ,"06/Octubre/1994"      ,"17",  $.money(12.15)      );
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