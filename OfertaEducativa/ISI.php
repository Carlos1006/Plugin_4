<!DOCTYPE HTML>
<html>
<head>
    <title>ISI</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <?php
    $array = ['','_2','_3'];
    $num = $array[array_rand($array)];
    $file  = "./rsc/posgrado/ISI$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
        .tab[name="Plan de estudios"]{
            overflow-x:auto;
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Ingenieria en Seguridad de la Informacion</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Descripcion">
        <div class="textTab">
            <label>
            <b>Propósito</b>
            <p>El propósito es formar profesionistas comprometidos con la sociedad y con gran ética que está calificado para preservar la integridad, la confidencialidad y la disponibilidad de la información y de activos informáticos mediante la aplicación con responsabilidad de controles tecnológicos y de procesos, en base al reconocimiento de amenazas, vulnerabilidades y evaluación de los riesgos incurridos, permitiendo con esto el cumplimiento de objetivos y compromisos legales, normativos, sociales, políticos y técnico económicos de las organizaciones, asegurando la continuidad de éxito teniendo como base la tecnología de información. </p>
            </label>
        </div>
    </div>
    <div name="Requisitos">
        <div class="textTab">
            <label>
            <b>Requisitos de Admisión</b>
            <img src="./rsc/requisitosISI.jpg"/>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <img src="http://www.fcfm.uanl.mx/sites/default/files/img/carrerasPosgrado/Plan_MISI_1.jpg" />
            <img src="http://www.fcfm.uanl.mx/sites/default/files/img/carrerasPosgrado/Plan_MISI_2.jpg" />
            </label>
        </div>
    </div>
    <div name="Profesores">
        <div class="textTab">
            <label>
                <b>Profesores</b>
                <img src="./rsc/profesoresISI.jpg" />
            </label>
        </div>
    </div>
    <div name="Cuerpos Académicos">
        <div class="textTab">
            <label>
            <b>Cuerpos Académicos</b>
            <p>Diseño de Políticas y Continuidad de Negocio.</p>
            <p>Seguridad en Telecomunicaciones.</p>
            <p>En este momento no tenemos colaboración con otras dependencias de la UANL o externas, ya que son líneas de investigación de innovación que no han sido incluidas en otras universidades hasta el momento, sin embargo, estamos en el proceso de negociación con la Universidad Veracruzana y con la Universidad Autónoma de Aguascalientes para poder colaborar de manera conjunta en estas líneas de investigación. </p>
            </label>
        </div>
    </div>
    <div name="Procesos Administrativos">
        <div class="textTab">
            <label>
                <b>Procesos Administrativos</b>
                <p>La parte administrativa del PCOM se trata directamente con el Depto. Escolar y de Archivo de la FCFM en los horarios de 8:00 a 19:00 hrs o bien en el teléfono 83 29 40 30 ext. 6122 con:</p>
                <ul>
                    <li>M.C. Ángel Pérez, Responsable del Departamento</li>
                    <li>Srita. Lalis Lara, Secretaria matutina de apoyo al Posgrado de la FCFM</li>
                    <li>Srita. Rosy Sánchez, Secretaria vespertina de apoyo al Posgrado de la FCFM</li>
                </ul>
                <p>La parte académica se trata en la coordinación del Posgrado en Maestría en Ingeniería en Seguridad de la Información.</p>
                <p>Para cualquier orientación o duda, favor de contactar a:</p>
            </label>
        </div>
    </div>
    <div name="Vinculación">
        <div class="textTab">
            <label>
                <b>Vinculación</b>
                <p>Actualmente se cuenta con alianzas estratégicas tanto en el sector educativo como en el productivo.</p>
                <img style="width: 30%; height: 90%;" src="./rsc/vinculacionISI.jpg" /><br />
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>