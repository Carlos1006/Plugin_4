<!DOCTYPE HTML>
<html>
<head>
    <title>Programas</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <?php require "../Include/slide.html" ?>
    <script src="./Script/Programas.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Programas.css" rel="stylesheet">
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
        .tab[name="Programa emprendedor"] .staticT .row{
            height:10vh !important;
        }
        .tab[name="Programa emprendedor"] .staticT:last-child .row,
        .tab[name="Servicio social"] .staticT .row{
            height:17vh !important;
        }
        .tab[name="Intercambio"] .staticT .row{
            height:8vh !important;
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
    <div name="Programa emprendedor">
        <div class="textTab">
            <label>
                <b>Programa Emprendedor</b>
                Este programa que ofrece la Facultad de Ciencias Físico Matemáticas, tiene como eje principal al Emprendedor, el cual es creativo y poseedor de un cúmulo de conocimientos con base científica y tecnológica que, en equilibrio con su desarrollo humano y su responsabilidad social, es capaz de estructurar su proyecto de vida, ofreciendo bienes y servicios, formando empresas competitivas y detonantes del desarrollo económico regional y nacional.
                <b>A quién va dirigida</b>
                A los Estudiantes, Egresados y Comunidad en general.
                <b>Misión</b>
                Fomentar e impulsar la creación y desarrollo de empresas, con un enfoque altamente competitivo y detonantes del desarrollo económico regional y nacional para los estudiantes, egresados y comunidad en general; proporcionando los servicios necesarios como la orientación profesional, asesoría especializada, seguimiento y la consolidación de la empresa.
                <b>Visión</b>
                Llegar a ser una Incubadora altamente profesional reconocida en la comunidad, vinculada a la Universidad Autónoma de Nuevo León, que proporciona servicios de calidad y excelencia, con altos valores éticos y competitivos, que permita proyectar con calidad los programas que genera.
                <b>Servicios</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="row">Promover la creación y desarrollo de proyectos innovadores y realizar las acciones que permitan materializar dicho proyecto en la creación de una empresa.</div>
                    <div class="row">Establecer consultorías para desarrollar desde la idea hasta construir el plan de negocios.</div>
                    <div class="row">Desarrollar empresarios con un alto sentido de responsabilidad y compromiso social a través de los procesos y  características particulares de la empresa.</div>
                    <div class="row">Brindar asesoría con expertos en el diseño de imagen para la elaboración del producto o servicio.</div>
                    <div class="row">Asesorar y capacitar en áreas de administración, comerciales (compra y venta), contables y finanzas.</div>
                    <div class="row">Apoyar los proyectos a través de videos usando la plataforma tecnológica y asesoría en línea con expertos del área.</div>
                    <div class="row">Dar seguimiento a las empresas instaladas, brindando las  consultorías necesarias para la continuidad y mejora de la empresa, así como evaluar y mejorar los procesos del programa.</div>
                </div>
                <b>Beneficios</b>
                <div class="staticT">
                    <div class="superHead">Beneficios</div>
                    <div class="row">Probabilidad de éxito de su empresa, al recibir la asesoría y el apoyo de expertos.</div>
                    <div class="row">Asesoría en el desarrollo y ejecución de un Plan de Negocios.</div>
                    <div class="row">Asesoría a capital de riesgo y a una red afiliada de recursos de financiamiento.</div>
                    <div class="row">Reducción de la probabilidad de cometer los mismos errores que otros  Empresarios.</div>
                    <div class="row">Generación de publicidad adicional de forma gratuita.</div>
                </div>
                <b>Fases</b>
                <div class="staticT">
                    <div class="superHead">Fases</div>
                    <div class="header">Fase-Descripcion</div>
                    <div class="row">Preincubación-Se ofrece la asesoría con el fin de transformar su idea en un proyecto viable y que atienda alguna necesidad de mercado claramente definida, así como la secrecía de su  proyecto con los expertos del área.</div>
                    <div class="row">Incubación-Es el desarrollo y ejecución del plan de negocios de  la nueva Empresa apoyando desde la etapa inicial donde son más vulnerables.</div>
                    <div class="row">Postincubación-En esta etapa, el Empresario está preparado comercialmente y financieramente para seguir su desarrollo empresarial, a partir de ese momento inicia el proceso de seguimiento, con el fin de evaluar y mejorar los procesos del programa.</div>
                </div>

            </label>
        </div>
    </div>
    <div name="Servicio social">
        <div class="textTab">
            <label>
                <b>Servicio Social</b>
                <div class="staticT">
                    <div class="superHead">Objetivos</div>
                    <div class="row">Promover en los prestadores de servicio social el mejoramiento social, incrementando su sensibilidad humana, a través de los programas universitarios o en  coordinación de esfuerzos con organismos públicos o privados que compartan con la Universidad los propósitos de servicio, contribuyendo a las acciones de responsabilidad social universitaria.</div>
                    <div class="row">Lograr que el prestador desarrolle una actitud de servicio poniéndolo en contacto con la realidad social, lo que contribuye a acrecentar  sus competencias generales y profesionales y aportar un beneficio a la comunidad.</div>
                    <div class="row">Vincular egresados, alumnos y empresas con el fin de establecer relaciones laborales.</div>
                </div>
                <b>Colaboradores</b>
                María de Jesús Mendoza Reyes, Asistente de la Coordinación de Servicio Social.
                <b>Registro </b>
                <div class="staticT">
                    <div class="superHead">Requisitos</div>
                    <div class="row">Alumnos que el próximo semestre hayan completado el 70% de los créditos aprobados y egresados.</div>
                    <div class="row">REGISTRARSE EN EL SISTEMA usando INTERNET EXPLORER en la página de FCFM, si no puede; acudir a la Coordinación de Servicio Social FCFM para verificar su correo.</div>
                    <div class="row">Bajar y Llenar con pluma la SOLICITUD DE REGISTRO AL SERVICIO SOCIAL y al reverso de la misma hoja, imprimir directamente (NO copiar a word y/o excel) la Hoja de Registro de SIASE debidamente firmada, después de verificar sus datos, si no le da clic para imprimir directo NO quedará oficialmente REGISTRADO.</div>
                    <div class="row">Pago de Registro al Servicio Social en Tesorería FCFM $400.00 / Egresados $800.00</div>
                    <div class="row">Presentarse en la Coordinación de Servicio Social y Prácticas Profesionales FCFM con su comprobante de pago (original y copia amarilla), con la solicitud y la hoja de registro, además de una copia de kárdex (no oficial) e identificación con fotografía.</div>
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/taYu3TtiHE8" frameborder="0" allowfullscreen></iframe>
                <br>
                <b>EL TRÁMITE ES PERSONAL.</b>
                Todos  los alumnos  deberán  portar identificación y presentarse el  día  que se les indicará  a  las  19:00 horas  en  el  Auditorio  "Dr. José Luis Comparan Elizondo", en donde ofreceremos un curso de INDUCCIÓN SOBRE EL SERVICIO SOCIAL (obligatorio).
                <b>Prácticas Profesionales</b>
                Con la finalidad de establecer acercamiento entre la comunidad empresarial y el alumnado, la FCFM mantiene contacto con empresas de la localidad quienes ofrecen plazas para la realización de prácticas profesionales a quienes deseen involucrarse en proyectos dentro de su especialidad.
                De esta manera el alumno podrá tener un panorama más amplio de las actividades que se realizan en su área, estar en contacto con tecnología de vanguardia, poner en práctica los conocimientos adquiridos en el aula de clase y conjuntar experiencia.
            </label>
        </div>
    </div>
    <div name="Intercambio">
        <div class="MainDLC"></div>
        <div class="staticT">
            <div class="superHead">Requisitos Documentales para Intercambios Académicos </div>
            <div class="row">Formato de solicitud y hoja de materias</div>
            <div class="row">Carta de apoyo del Director de la Facultad donde el estudiante realiza su licenciatura (dirigida a quien corresponda)</div>
            <div class="row">Promedio mínimo de 85 (general)</div>
            <div class="row">Carta del Secretario Académico de la Facultad en la cual certifique el promedio (dirigida a quien corresponda)</div>
            <div class="row">Kardex certificado</div>
            <div class="row">Carta de motivos por los que desea realizar el intercambio (dirigida a quien corresponda) y currículum vitae</div>
            <div class="row">Constancia del dominio del idioma requerido</div>
            <div class="row">Copia del pasaporte o credencial de elector</div>
            <div class="row">Carta del coordinador de carrera o Secretario Académico apoyando el intercambio y avalando la revalidación de las materias que cursará en la universidad destino</div>
            <div class="row">Programa de Materias que se va a cursar</div>
            <div class="row">Contenido analítico de cada una de las materias que se cursará en la Universidad destino</div>
        </div>
        <br>
        <div class="staticT">
            <div class="superHead">Requisitos para solicitar beca.</div>
            <div class="row">Comprobante de domicilio (copia)</div>
            <div class="row">Dos cartas de académicos que le hayan impartido clases.</div>
            <div class="row">(Exclusivamente para alumnos que irán a Alemania) Carta de aceptación de la Universidad receptora.</div>
            <div class="row">Comprobante de ingresos (copia)</div>
            <div class="row">Carta dirigida al Rector, Ing. José Antonio González Treviño</div>
        </div>
    </div>
    <div name="Movilidad y Becas">
        <div class="MainDLC2"></div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>