<!DOCTYPE HTML>
<html>
<head>
    <title>Profesores</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/Slide.html" ?>
    <?php require "../Include/Table.html" ?>
    <script src="./Script/Profesores.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Profesores.css" rel="stylesheet">
    <script>
        $(function(){
            $(".staticT").TableT();
        });
    </script>
    <style>
         .dlc:nth-child(1)
        ,.dlc:nth-child(2)
        ,.dlc:nth-child(3)
        ,.dlc:nth-child(4)
        ,.dlc:nth-child(5)
        ,.dlc:nth-child(7)
        ,.dlc:nth-child(8){
            background-size:auto 60% !important;
        }
        .dlc:nth-child(6){
            background-size:90% auto !important;
        }
         .staticT label{
             text-indent:2%;
             text-align:left !important;
         }
         .tab[name="Programa emprendedor"] .staticT .row{
             height:10vh !important;
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
    <div name="Descripcion">
        <div class="textTab">
            <label>
                <b>Profesores</b>
                El Programa de Mejoramiento del Profesorado (PROMEP), es un programa estratégico creado para elevar permanentemente el nivel de habilitación del profesorado con base en los perfiles adecuados para cada subsistema de educación superior. Así, al impulsar la superación sustancial en la formación, dedicación y desempeño de los cuerpos académicos de las instituciones se eleva la calidad de la educación superior.
            </label>
        </div>
    </div>
    <div name="Descargables">
        <div class="MainDLC"></div>
    </div>
    <div name="Cumpleaños">
        <div class="textTab">
            <label>
                <b>Cumpleaños del Mes</b>
                <div class="staticT">
                    <div class="superHead">LISTADO DE CUMPLEAÑOS</div>
                    <div class="header">Dia-Nombre</div>
                    <div class="row">2-MARTINEZ SAMANIEGO JAVIER ALEJANDRO</div>
                    <div class="row">4-MEDELLÍN GONZÁLEZ GABRIELA VALENTINA</div>
                    <div class="row">5-GARZA LOPEZ ISRAEL DR.</div>
                    <div class="row">6-MARQUEZ RENDON RICARDO</div>
                    <div class="row">7-GARCIA MENDEZ MANUEL DR.</div>
                    <div class="row">8-GALLEGOS FLORES MARIA DEL ROSARIO TEC.</div>
                    <div class="row">8-RUIZ MENDOZA JUAN CARLOS DR.</div>
                    <div class="row">9-ALCORTA GARCIA MARIA ARACELIA DRA.</div>
                    <div class="row">9-TELLO ESPARZA CESAR EDUARDO LIC.</div>
                    <div class="row">9-TREVIÑO SEPULVEDA BRENDA LIC.</div>
                    <div class="row">10-GUZMAN RAMOS VALENTIN M.C.</div>
                    <div class="row">10-RODRIGUEZ RAMIREZ FRANCISCO DR.</div>
                    <div class="row">11-CASTAÑEDA RODRIGUEZ DIANA M.T.</div>
                    <div class="row">11-ESCALANTE GONZALEZ TERESA DE JESUS</div>
                    <div class="row">11-QUIJANO BRIONES JOSE DE JESUS M.C.</div>
                    <div class="row">12-MARTINEZ BARRAZA LOIDA LETICIA</div>
                    <div class="row">13-QUIJANO TAPIA EDUARDO</div>
                    <div class="row">14-CONTRERAS SALAS VIRGINIA LIC.</div>
                    <div class="row">15-GUTIÉRREZ LAZOS CLAUDIO DAVET DR.</div>
                    <div class="row">15-MORALES MARIN GABRIELA JANETH</div>
                    <div class="row">16-GOMEZ PEREZ DIEGO GERARDO LIC</div>
                    <div class="row">16-SELVAS AGUILAR ROMEO DE JESUS DR.</div>
                    <div class="row">18-MANRIQUE MANCILLA ARTURO ING.</div>
                    <div class="row">18-TREVIÑO LAVIN JOSE ALEJANDRO</div>
                    <div class="row">19-LOPEZ FUENTES VICTOR GERARDO LIC.</div>
                    <div class="row">19-MARTINEZ HUERTA ATILANO M.T.</div>
                    <div class="row">19-TORRES PEREZ JUAN CARLOS LIC.</div>
                    <div class="row">22-SEPULVEDA DUQUE RICARDO HERVEY SR.</div>
                    <div class="row">25-RODRÍGUEZ VILLALOBOS ALEJANDRA DEL CARMEN</div>
                    <div class="row">25-TREVIÑO CASTILLO LÁZARO LIC.</div>
                    <div class="row">26-VILLALOBOS VARGAS LUIS ALEJANDRO SR.</div>
                    <div class="row">28-ALEJO CASTILLO NORA ELBA LIC</div>
                    <div class="row">28-MARGAIN REYES MIGUEL ANGEL ING.</div>
                    <div class="row">28-RUIZ GUZMAN NARCE DALIA GUADALUPE M.A.</div>
                    <div class="row">29-ARIAS AGUILAR ADRIANA LIC.</div>
                    <div class="row">29-FERNANDEZ RAMOS JOSE RICARDO LIC.</div>
                    <div class="row">29-GARZA ALVAREZ ADRIANA GUADALUPE M.C.</div>
                    <div class="row">29-SANCHEZ MOYEDA JOSE ISAAC LIC.</div>
                    <div class="row">29-VERA LOZANO MATEO VALDEMAR M.A.</div>
                    <div class="row">30-ALDAVE RIVAS JUAN FRANCISCO LIC.</div>
                    <div class="row">30-GRIMALDO SANCHEZ BRENDA VERONICA M.A.</div>
                </div>
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>