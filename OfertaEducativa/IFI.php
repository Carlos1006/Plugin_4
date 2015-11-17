<!DOCTYPE HTML>
<html>
<head>
    <title>IFI</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <?php
    $array = ['','_2'];
    $num = $array[array_rand($array)];
    $file  = "./rsc/posgrado/IFI$num.jpg";
    ?>
    <script>
        $(function(){
            $(".staticT").TableT();
        });
    </script>
    <style>
        .staticT label{
            text-indent:1%;
            text-align:left !important;
        }
        .tab[name="Requisitos"] .staticT .row{
            height:8vh !important;
            font-size:80%;
        }
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
        .tab[name="Plan de estudios"] {
            overflow-x:auto;
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Ingenieria en Fisica Industrial</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Descripcion">
        <div class="textTab">
            <label>
                <b>Misión y visión</b>
                <p>La misión del Maestría en Ingeniería Física Industrial es la de preparar especialistas capacitados y emprendedores capaces de desarrollar proyectos basado en tecnología y contribuir con ello en el mejoramiento de las condiciones de la comunidad general.</p>
                <p>La visión del Maestría en Ingeniería Física Industrial es la de un programa orientado a investigación de frontera, con una planta docente y de investigación reconocida internacionalmente por su producción científica y tecnológica, y por la preparación de recursos humanos en investigación y desarrollo de calidad mundial.</p>
            </label>
        </div>
    </div>
    <div name="Objetivo">
        <div class="textTab">
            <label>
                <b>Objetivos generales</b>
                <ul>
                    <li>Formar recursos humanos con capacidad para realizar investigación y generar conocimientos científicos y tecnológicos en las áreas de la física aplicada</li>
                    <li>Preparar líderes en el campo de la ciencia y la tecnología aplicadas a la industria, con habilidades y destrezas que les permitan desarrollar nuevas tecnologías</li>
                </ul>
                <b>Objetivos particulares</b>
                <ul>
                    <li>Formar y capacitar recursos humanos en el área de Ingeniería Física Industrial, acordes a las necesidades de los sectores productivos y de servicios.</li>
                    <li>Fomentar la investigación en esta ciencia en el posgrado de la UANL.</li>
                    <li>Vincular los sectores productivos y de servicios de la comunidad con el posgrado de la UANL.</li>
                </ul>
            </label>
        </div>
    </div>
    <div name="Requisitos">
        <div class="textTab">
            <label>
            <b>Requisitos de admisión</b>
            <p>Tener una licenciatura en física, matemáticas, ingeniería, computación o áreas afines que reconozca la UANL con promedio general no menor a 80.</p>
            <p>Presentar su documentación completa ante la División de Estudios de Posgrado de la FCFM:</p>
            <ul>
                <li>Solicitud de ingreso debidamente llenada y firmada por la persona interesada (solicitada en el depto. de Escolar de la FCFM).</li>
                <li>Copia del título de licenciatura.</li>
                <li>Copia de Kárdex de Licenciatura (que incluya el promedio)</li>
                <li>Curriculum Vitae.</li>
                <li>Dos cartas de recomendación de maestros de Licenciatura.</li>
                <li>Carta de exposición de motivos (con extensión máxima de una cuartilla) dirigida al Coordinador del Docotorado en Ingeniería Físico Industrial.</li>
            </ul>
            <p>Presentar y aprobar el examen general de admisión para el ingreso al Posgrado de la UAN (EXANI III, EXCI). Este examen, aprobado por la Comisión  Académica del H. Consejo Universitario, evaluará los conocimientos en los diferentes campos de estudios que se ofrecen en la UANL, así como en los idiomas extranjeros más empleados. En el caso de los estudiantes extranjeros cuya segunda lengua sea el español, deberán aprobar el examen de idioma español aplicado por la UANL. Para los aspirantes extranjeros se podrá establecer, a juicio de la Dirección General de Estudios de Posgrado de la UANL, una equivalencia al examen de admisión con exámenes calificados que puedan ser presentados en sus países de origen.</p>
            <p>Presentar y aprobar un examen específico de admisión al Doctorado. Este examen es un requisito que tiene como propósito conocer la preparación del alumno en los temas básicos de Ingeniería Física Industrial. I. Examen de diagnóstico para ingresar al programa doctoral a partir de la   licenciatura:</p>
            <ul>
                <li>Conocimientos básicos de física general,  tomando como base los  textos: volumen  1,2,3 y 4  del curso de física de Berkeley.</li>
                <li>Conocimientos de cálculo diferencial e integral y ecuaciones diferenciales, tomando como base los textos de  Dennis G. Zill.</li>
            </ul>
            <p>Ser aceptado como estudiante del Maestría por el Comité de Maestría de la FCFM (entrevista).</p>
            <p>Establecer el compromiso de dedicar tiempo completo a las actividades académicas que se desarrollen cada semestre.</p>
            <p>Cumplir con los requisitos administrativos para el ingreso a posgrado señalados por el Departamento Escolar y de Archivo de la UANL.</p>
            <b>Requisitos de Permanencia</b>
            <p>Mantener el compromiso respecto al tiempo dedicado al programa.</p>
            <p>No reprobar más de una materia (la calificación mínima aprobatoria es de 80, dentro de una escala del 0 al 100).</p>
            <p>Realizar las actividades académicas, incluyendo las asignaturas adicionales.</p>
            <p>Presentar un informe anual a manera de presentación de actividades académicas y avances, tanto de cursos como de investigación ante el Comité de Maestría, para su evaluación.</p>
            <p>Los establecidos en el Reglamento General de Estudios de Posgrado de la UANL (RGEP-UANL)y por el reglaemnto interno de la FCFM."</p>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <b>DE ESTUDIOS PARA ALUMNOS DE TIEMPO COMPLETO</b>
            <img src="./rsc/planIFI1.jpg"/><br />
            </label>
        </div>
    </div>
    <div name="Profesores">
        <div class="textTab">
            <label>
                <b>Profesores</b><br />
                <img src="./rsc/profesoresIFI.jpg" />
            </label>
        </div>
    </div>
    <div name="Tutorías">
        <div class="textTab">
            <label>
            <b>Tutorías</b>
            <br />
            <img src="./rsc/tutorias.jpg" />
            </label>
        </div>
    </div>
    <div name="Estudiantes">
        <div class="textTab">
            <label>
                <b>Estudiantes</b>
                <br />
                <img  style="width: 30%;" src="./rsc/estudiantesIFI.jpg" />
            </label>
        </div>
    </div>
    <div name="Cuerpos Académicos">
        <div class="textTab">
            <label>
            <b>Cuerpos Académicos</b>
            <p>El programa de doctorado en ingeniería físico industrial cuenta con 5 cuerpos académicos que impactan con las 3 lineas de generación y aplicación del conocimiento (LGAC) del programa doctoral. Estas LGAC son:</p>
            <ul>
                <li>Control Automático y Análisis de Sistemas.</li>
                <li>Nanotecnología y Física de la Materia.</li>
                <li>Dispositivos de Fibras Ópticas, Fotónica y Sensores Ópticos.</li>
            </ul>
            <b>Los cuerpos académicos son:</b>
            <b>Ciencias aplicadas a la ingeniería.</b>
            <p>Integrantes:</p>
            <ul>
                <li>Dr. Mikhail Valentinovich Basin</li>
                <li>Dr. Manuel Alejandro Jiménez Lizárraga</li>
                <li>Dra. Oxana Vasilievna Kharissova</li>
                <li>Dr. José Rubén Morones Ibarra</li>
            </ul>
            <b>Nanociencias y nanotecnología.</b>
            <p>Integrantes:</p>
            <ul>
                <li>Dr. Mikhail Valentinovich Basin</li>
                <li>Dr. Manuel Alejandro Jiménez Lizárraga</li>
                <li>Dra. Oxana Vasilievna Kharissova</li>
                <li>Dr. José Rubén Morones Ibarra</li>
            </ul>
            <b>Fotónica y telecomunicaciones.</b>
            <p>Integrantes:</p>
            <ul>
                <li>Dr. Romeo de Jesús Selvas Aguilar</li>
                <li>Dr. Arturo Alberto Castillo Guzmán</li>
                <li>Dr. Daniel Enrique Ceballos Herrera</li>
                <li>Dr. Carlos Martínez Hernández</li>
                <li>Dr. Juan Carlos Ruiz Mendoza</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Procesos Administrativos">
        <div class="textTab">
            <label>
            <p>La parte administrativa del MIFI se trata directamente en el Departaemnto de Ecolar y de Archivo de la FCFM en los horarios de 8:00 a 19:00 horas o bien en el teléfono 83 29 40 30 ext. 6122 con:</p>
            <ul>
                <li>Srita. Lalis Lara, Secretaria matutina de apoyo al Posgrado de la FCFM.</li>
                <li>Srita. Rosy Sánchez, Secretaria vespertina de apoyo al Posgrado de la FCFM.</li>
            </ul>
            <p>La parte académica se trata en la Coordinación del Posgrado en Ingeniería Físico Industrial.</p>
            <b>Beca CONACyT/ Intercambios nacionales e internacionales</b>
            <p>Es otorgada a los estudiantes de tiempo completo debido a que nuestros Programas en Ingeniería Física Industrial pertenecen al Programa Nacional de Posgrados de Calidad (PNPC). Es brindada por la duración del programa sin posibilidad de prorroga. Los estudiantes que cuentan con esta beca tiene a su vez, la posibilidad de realizar estancias Nacionales e Internacionales con un apoyo adicional. </p>
            <img src="http://www.fcfm.uanl.mx/sites/default/files/LOGO-CONACYT.png" />
            </label>
        </div>
    </div>
    <div name="Egresados">
        <div class="textTab">
            <label>
            <b>Egresados</b>
            <img src="./rsc/egresadosIFI.jpg" />
            </label>
        </div>
    </div>
    <div name="Estadística">
        <div class="textTab">
            <label>
            <b>Estadística</b>
            <img src="./rsc/estadisticaIFI.jpg" />
            </label>
        </div>
    </div>
    <div name="Perfiles">
        <div class="textTab">
            <label>
            <b>Perfil de ingreso</b>
            <ul>
                <li>Poseer conocimientos y habilidades en matemáticas y física, las cuales serán evaluadas mediante un examen escrito.</li>
                <li>Poseer actitudes de interés por la investigación científica y desarrollo de nuevas tecnologías. </li>
            </ul>
            <b>Perfil del egresado</b>
            <ul>
                <li>Desarrollará trabajos de investigación en física aplicada.</li>
                <li>Propondrá  proyectos de investigación en física básica.</li>
                <li>Participará en la solución de problemas de la producción en el sector industrial.</li>
                <li>Trabajará en grupos de investigación en la industria.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Vinculación">
        <div class="textTab">
            <label>
            <b>Actualmente se cuenta con alianzas estratégicas tanto en el sector educativo como en el productivo.</b>
            <img src="./rsc/vinculacionIFI.jpg" />
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>