<!DOCTYPE HTML>
<html>
<head>
    <title>Educacion Continua</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/EducacionContinua.css" rel="stylesheet">
    <script>
        $(function(){
            $(".staticT").TableT();
        });
    </script>
    <style>
        .staticT label{
            text-indent:2%;
            text-align:left !important;
        }
        .tab[name="Diplomados"] .staticT .row{
            height:40vh !important;
            font-size:75%;
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
    <div name="Educacion Continua">
        <div class="textTab">
            <label>
                <b>Educación Continua</b>
                La Facultad de Ciencias Físico-Matemáticas por medio de su departamento de educación continua ha hecho eco de esta demanda y ofrece a sus egresados y público en general la oportunidad de continuar su perfeccionamiento profesional a través de Diplomados, especialmente diseñados para cumplir los objetivos de competitividad, actualización profesional y mejora continua.
                Las condiciones de alta competitividad, obsolescencia tecnológica y mejora continua nos impulsan a estar en constante adquisición de nuevos conocimientos, es por ello que la Facultad de Ciencias Físico Matemáticas a través de su DEPARTAMENTO DE EDUCACIÓN CONTINUA ofrece a sus egresados y público en general la oportunidad de continuar su perfeccionamiento profesional a través de diplomados especialmente diseñados para cumplir los objetivos de competitividad, actualización profesional y mejora continua.
                Algunos de nuestros diplomados se pueden realizar en sus instalaciones.
                Todos nuestros expositores son especialistas en su área y con amplia experiencia laboral
            </label>
        </div>
    </div>
    <div name="Diplomados">
        <div class="textTab">
            <label>
                <b>Diplomados</b>
                <div class="staticT">
                    <div class="superHead">Diplomados</div>
                    <div class="header">Diplomado-Descripcion-Fecha-Duracion</div>
                    <div class="row">Control Estadístico de Procesos-El Control Estadístico de Procesos es un conjunto de herramientas estadísticas que permiten recopilar, estudiar y analizar la información de procesos repetitivos para poder tomar decisiones encaminadas a la mejora Continua. Esta técnica es aplicable tanto a procesos productivos como de servicios.-Sábado, 31 Octubre, 2015-30 horas</div>
                    <div class="row">Estadística Aplicada-Al finalizar el diplomado, el egresado será capaz de aplicar diferentes métodos estadísticos en la toma de decisiones en diferentes áreas. Para ello, se le proporciona el conocimiento necesario, tanto en la teoría estadística, como en sus aplicaciones (con énfasis en la creación de pronósticos y desarrollo de modelos estadísticos) de tal manera que adquiera la habilidad de realizar un análisis objetivo a problemas que se presenten en situaciones reales.-Sábado, 19 Septiembre, 2015-48 horas</div>
                    <div class="row">Curso Teórico Práctico de Redes IP-Formar personal capacitado en los fundamentos, diseño y configuración de redes basadas en el protocolo IP, enfatizando la operación y configuración de los routers para implementar redes IP basadas en los protocolos de enrutamiento RIP, OSPF & BGP.-Sábado, 9 Mayo, 2015-24 horas</div>
                    <div class="row">Fibras Ópticas, Empalmes y Mediciones-Conocer y operar las fibras ópticas más usadas en las telecomunicaciones, conceptos básicos y manejo correcto de los mismos.-Sábado, 9 Mayo, 2015-24 horas</div>
                    <div class="row">Minería de Datos-El objetivo del curso es lograr que los participantes utilicen la Minería de Datos (MD) para extraer información interesante/útil a partir de datos. En muchos casos esta información  tiene la forma de patrones no evidentes en los datos y dependiendo de su complejidad, puede llegarse a hablar de conocimiento. -Por definir-32 horas</div>
                    <div class="row">Matemáticas Financieras para No Financieros-Conocer herramientas que le permitan evaluar alternativas de inversión y financiamiento conciderando el valor del dinero en el tiempo. Manejar conceptos financieros.-Por definir-30 horas</div>
                    <div class="row">Análisis Cualitativo de Excel-Dominar el planteamiento y resolución de problemas cuantitativos con el apoyo de Microsoft Office Excel ® mediante la revisión del funcionamiento general de Excel-Por definir-24 horas</div>
                    <div class="row">Finanzas Personales-Este curso/taller va dirigido al público en general interesado en tener un mejor manejo de sus ingresos y gastos, a lo que denominamos Finanzas Personales. -Por definir-30 hrs</div>
                    <div class="row">Estrategias de inversión-Este diplomado va dirigido tanto a personas que desean conocer las diferentes alternativas de inversión disponibles a nivel personal como para profesionistas que desean ampliar las herramientas que utilizan para tomar decisiones en su campo laboral. -Por definir-30 horas</div>
                    <div class="row">Métodos de Pronóstico-Lograr que los participantes utilicen procesos de estimación en situaciones de incertidumbre. En muchos casos esta información  tiene la forma de patrones no evidentes en los datos y dependiendo de su complejidad, puede llegarse a hablar de conocimiento.-Por definir-24 horas</div>
                </div>

            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>