<!DOCTYPE HTML>
<html>
<head>
    <title>MAPTA</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/MAPTA.css" rel="stylesheet">
    <?php
    $array = ['','_2','_3','_4','_5','_6','_7','_8'];
    $num = $array[array_rand($array)];
    $file  = "../img/posgrado/MAPTA$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Astrofisica Planetaria y Tecnologias Afines</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Descripcion">
        <div class="textTab">
            <label>
            <b>Descripcion</b>
            <p>La Universidad Autónoma de Nuevo León (UANL) se sitúa en una de las regiones del país donde hay un elevado desarrollo industrial, en el que la innovación científica y tecnológica es imprescindible para la competitividad de las empresas de la región y de la misma UANL. Por otro lado, la reciente creación de la Agencia Espacial Mexicana en 2010, define el inicio nuevos esfuerzos para el desarrollo de las ciencias espaciales en México.  Este entorno impone la necesidad de formar recursos humanos especializados con capacidad para colaborar en proyectos de investigación en las áreas de la Ciencias Planetarias, o desarrollar actividades específicas que fortalezcan el desarrollo de las Ciencias Espaciales y áreas tecnológicas de instrumentación y software en el país.</p>
            </label>
        </div>
    </div>
    <div name="Objetivos">
        <div class="textTab">
            <b>Objetivos</b>
            <p>La Universidad Autónoma de Nuevo León (UANL) se sitúa en una de las regiones del país donde hay un elevado desarrollo industrial, en el que la innovación científica y tecnológica es imprescindible para la competitividad de las empresas de la región y de la misma UANL. Por otro lado, la reciente creación de la Agencia Espacial Mexicana en 2010, define el inicio nuevos esfuerzos para el desarrollo de las ciencias espaciales en México.  Este entorno impone la necesidad de formar recursos humanos especializados con capacidad para colaborar en proyectos de investigación en las áreas de la Ciencias Planetarias, o desarrollar actividades específicas que fortalezcan el desarrollo de las Ciencias Espaciales y áreas tecnológicas de instrumentación y software en el país.</p>
        </div>
    </div>
    <div name="Requisitos">
        <div class="textTab">
            <label>
            <b>Requisitos</b>
            <ul>
                <li>Ser graduado de una licenciatura en física, ciencias exactas o ingeniería.</li>
                <li>Contar con un promedio mínimo de 80 / 100.</li>
                <li>Cubrir los requisitos de inscripción y ajustarse a las disposiciones que sobre ingreso se encuentran contenidas en el Reglamento General del Sistema de Posgrado de la UANL y en el Reglamento Interno de la Facultad de Ciencias Físico-Matemáticas</li>
                <li>Hacer el trámite de preinscripción en la Facultad de Ciencias Físico Matemáticas, cumpliendo con las fechas indicadas por el Departamento Escolar de la Facultad Ciencias Físico-Matemáticas y entregar la documentación requerida.</li>
                <li>Aprobar  todos los elementos de evaluación en un curso propedéutico.</li>
                <li>Presentar  el concurso de ingreso al posgrado de la universidad.</li>
                <li>Cumplir con los requisitos contemplados por el Reglamento General del Sistema de Posgrado de la UANL</li>
                <li>Entrevista personalizada con el estudiante.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Estudiantes">
        <div class="textTab">
            <label>
            <b>Estudiantes</b>
            <ul>
                <li>Abraham de Jesús Ortiz</li>
                <li>Jesús Enrique Marrufo</li>
                <li>Laura Cantú Sanchez</li>
                <li>Pablo García</li>
                <li>Haroldo Ibarra</li>
                <li>Iván Venzor</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Profesores">
        <div class="textTab">
            <label>
            <b>Profesores</b>
            <img src="./rsc/profesoresMAPTA.jpg" />
            </label>
        </div>
    </div>
    <div name="Colaboradores">
        <div class="textTab">
            <label>
            <b>Colaboradores</b>
            <p>IA-UNAM Ensenada</p>
            <ul>
                <li>Mauricio Reyes Ruiz</li>
                <li>Roberto Vázquez Meza</li>
                <li>Héctor Aceves Campos</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Cuerpos Académicos">
        <div class="textTab">
            <label>
            <b>Cuerpos Académicos</b>
            <p>Nombre del CA: Astrofísica Planetaria y Tecnologías Afines</p>
            <p>Integrantes:</p>
            <img src="./rsc/cuerposA.jpg" />
            </label>
        </div>
    </div>
    <div name="Procesos Administrativos">
        <div class="textTab">
            <label>
            <b>Procesos Administrativos</b>
            <p>Los procesos administrativos de la MAPTA se pueden consultar directamente en el Depto. Escolar y de Archivo de la FCFM en un horario de lunes a viernes de 8:00 a 19:00 hrs, o bien al teléfono 8329-4030 ext. 6122 con:</p>
            <ul>
                <li>Srita. Lalis Lara, Secretaria de apoyo al Posgrado de la FCFM en el turno matutino, ó</li>
                <li>Srita. Rosy Sánchez, Secretaria de apoyo al Posgrado de la FCFM en el turno vespertino.</li>
            </ul>
            <p>Los procesos académicos se pueden consultar en la Coordinación de la Maestría en Astrofísica Planetaria y Tecnologías Afines.</p>
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>