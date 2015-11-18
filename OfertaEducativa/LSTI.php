<!DOCTYPE HTML>
<html>
<head>
    <title>LSTI</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/LSTI.css" rel="stylesheet">
    <?php
    $array = ["LSTI","LSTI_2","LSTI_3"];
    $num = $array[array_rand($array)];
    $file  = "../img/carrera/$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
        .tabla .row{
            height:15vh !important;
        }
    </style>
    <script>
        $(function() {
            $(".tabla,.tableS").TableT();
        });
    </script>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Seguridad en Tecnologias de Informacion</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Objetivo">
        <div class="textTab">
            <label>
            <b>Objetivo</b>
            <p>Formar profesionales que conocerán a profundidad las fuentes de los problemas de la seguridad informática, el porqué se presentan y serán capaces de determinar la solución más adecuada para prevenir y/o controlar tales situaciones.</p>
            </label>
        </div>
    </div>
    <div name="Aspirante">
        <div class="textTab">
            <label>
            <b>Aspirante</b>
            <b>Cualidades deseables en el aspirante a ingresar a esta carrera</b>
            <p>Los atributos deseables son:</p>
            <ul>
                <li>Interés de incursionar en las nuevas tecnologías computacionales.</li>
                <li>Sustentar una postura personal sobre temas de interés y relevancia general.</li>
            </ul>
            <b>Información dirigida para los aspirantes a la Licenciatura en Seguridad en Tecnologías de Información</b>
            <label>Elaboró: M.T. José A. Loyola Rdz.</label><br />
            <p>El auge de la Internet y la globalización de la industria, dan como consecuencia que la tecnología de información se convierta en una herramienta medular en dicho proceso, y la seguridad de la misma es de vital importancia. Diversos estudios revelan cómo la seguridad informática se ha convertido en un problema de peso para la mayoría de las organizaciones, provocándoles pérdidas de productividad y credibilidad. Un estudio indica que un 42% de las empresas europeas sufrió inactividad a consecuencia de algún delito informático, con los consiguientes problemas económicos y de imagen derivados de esta situación. Una pérdida de datos puede ser devastadora para una institución, sin importar su tamaño, sobre todo cuando la propiedad intelectual, la imagen o los ingresos van de por medio.</p>
            <p>La Facultad de Ciencias Físico Matemáticas diseñó el Programa Educativo de la carrera de Licenciado en Seguridad en Tecnologías de Información, basado tanto en el Modelo Educativo como en el Modelo Académico de Licenciatura de la UANL, con objeto de responder lo más cercano posible a las necesidades que demandan las organizaciones en el área de seguridad, ya que se estima en cerca de 15 mil millones de euros anuales el costo de las pérdidas causadas por dicho tema.</p>
            <p>Los aspirantes a ingresar a la Licenciatura en Seguridad en Tecnologías de Información, deberán ser personas con valores bien cimentados, ya que la ética y el “hacer lo correcto” es parte fundamental de un profesionista en esta área. Debe ser dedicado, responsable, visionario y observador. Debe practicar el autoestudio, ya que esta es una carrera de constantes cambios, actualizaciones de tecnología y debe ser el líder que pueda sacar adelanta a la empresa o institución para la que labore, en caso de que se tenga que implementar un Plan de Recuperación de desastres.</p>
            <p>Si consideras que cumples los requisitos antes mencionados, esta carrera es tu futuro. México necesita profesionistas de alta calidad moral y de excelencia en el desempeño de esta área estratégica en la vida de toda Nación, y la UANL y la FCFM están trabajando para ello. ¡Bienvenido!</p>
            </label>
        </div>
    </div>
    <div name="Egresado">
        <div class="textTab">
            <label>
            <b>Egresado</b>
            <p>El Licenciado en Seguridad en Tecnologías de Información es un profesionista con responsabilidad social que, con gran ética, está calificado para preservar la integridad, la confidencialidad y la disponibilidad de la información y de activos informáticos mediante la aplicación con responsabilidad de controles tecnológicos y de procesos, en base al reconocimiento de amenazas, vulnerabilidades y evaluación de los riesgos incurridos, permitiendo con esto el cumplimiento de objetivos y compromisos legales, normativos, sociales, políticos y técnico económicos de las organizaciones, asegurando la continuidad de éxito teniendo como base la tecnología de información.</p>
            <b>Campo de trabajo</b>
            <label>Diseñador de software</label><br />
            <ul>
                <li>Desarrollador de software</li>
                <li>Analista de sistemas</li>
                <li>Administrador de base de datos</li>
                <li>Diseñador web</li>
                <li>Administrador de seguridad informática en accesos de sistemas operativos y aplicaciones</li>
            </ul>
            <label>Seguridad Informática</label><br />
            <ul>
                <li>Diseñador de políticas de seguridad informática</li>
                <li>Diseñador de infraestructura tecnológica</li>
                <li>Investigador en informática forense</li>
                <li>Consultor en procesos informáticos de recuperación de desastres</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <div class="tabla" id="main">
                <div class="superHead">1er Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">INGENIERÍA SOCIAL-3-3</div>
                <div class="row">PRINCIPIOS DE ARQUITECTURA COMPUTACIONAL-3-3</div>
                <div class="row">PROGRAMACION ORIENTADA A OBJETOS-3-3</div>
                <div class="row">LAB. PROGRAMACIÓN ORIENTADA A OBJETOS-1-2</div>
                <div class="row">ÁLGEBRA-3-3</div>
                <div class="row">NORMATIVIDAD Y REGULACIONES-3-3</div>
                <div class="row">FUNDAMENTOS DE LA SEGURIDAD INFORMÁTICA-2-3</div>
                <div class="row">APLICACION DE LAS TECNOLOGIAS DE INFORMACIONL-2-3</div>
                <div class="row">COMPETENCIA COMUNICATIVA-2-3</div>
                <div class="row">TOPICOS SELECTOS DE DESARROLLO HUMANO, SALUD Y DEPORTES-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main2">
                <div class="superHead">2do Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">CIRCUITOS DIGITALES-3-3-PRINCIPIOS DE ARQUITECTURA COMPUTACIONAL</div>
                <div class="row">DISEÑO ORIENTADO A OBJETOS-3-3-PROGRAMACION ORIENTADA A OBJETOS, LAB. PROGRAMACIÓN ORIENTADA A OBJETOS</div>
                <div class="row">LABORATORIO DISEÑO ORIENTADO A OBJETOS-1-2-LAB. PROGRAMACIÓN ORIENTADA A OBJETOS</div>
                <div class="row">CÁLCULO DIFERENCIAL Y GEOMETRÍA ANALÍTICA-3-3-ÁLGEBRA</div>
                <div class="row">TELECOMUNICACIONES I-3-3</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES I-1-2</div>
                <div class="row">OPTATIVA I I-3-3</div>
                <div class="row">TOPICOS SELECTOS DE CIENCIAS SOCIALES, ARTES Y HUMANIDADES I-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main3">
                <div class="superHead">3er Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">SISTEMAS OPERATIVOS-2-3</div>
                <div class="row">BASE DE DATOS-2-3-LAB. PROGRAMACIÓN ORIENTADA A OBJETOS, PROGRAMACION ORIENTADA A OBJETOS, LABORATORIO DISEÑO ORIENTADO A OBJETOS</div>
                <div class="row">LABORATORIO BASE DE DATOS-1-2-DISEÑO ORIENTADO A OBJETOS, LABORATORIO DISEÑO ORIENTADO A OBJETOS</div>
                <div class="row">PROGRAMACION II-4-3-PROGRAMACION I</div>
                <div class="row">CÁLCULO INTEGRAL-2-3-ÁLGEBRA, CÁLCULO DIFERENCIAL Y GEOMETRÍA ANALÍTICA</div>
                <div class="row">TELECOMUNICACIONES II-3-3-TELECOMUNICACIONES I, LABORATORIO TELECOMUNICACIONES I</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES II-1-2-TELECOMUNICACIONES I, LABORATORIO TELECOMUNICACIONES I</div>
                <div class="row">ANALISIS Y ADMINISTRACION DEL RIESGO-2-3-INGENIERÍA SOCIAL</div>
                <div class="row">APRECIACION A LAS ARTES-2-3</div>
                <div class="row">OPTATIVA II-3-3</div>
            </div>
            <br>
            <div class="tabla" id="main4">
                <div class="superHead">4to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">SEGURIDAD EN APLICACIONES-2-3-SISTEMAS OPERATIVOS</div>
                <div class="row">LABORATORIO SEGURIDAD EN APLICACIONES-1-2-SISTEMAS OPERATIVOS</div>
                <div class="row">TEORÍA DE LA INFORMACIÓN I-2-3-CÁLCULO INTEGRAL</div>
                <div class="row">TEORIA DE AUTOMATAS-2-3-ÁLGEBRA, CÁLCULO DIFERENCIAL Y GEOMETRÍA ANALÍTICA, CÁLCULO INTEGRAL</div>
                <div class="row">ÁLGEBRA LINEAL-2-3-ÁLGEBRA, CÁLCULO DIFERENCIAL Y GEOMETRÍA ANALÍTICA, CÁLCULO INTEGRAL</div>
                <div class="row">TELECOMUNICACIONES III-3-3-TELECOMUNICACIONES I,LABORATORIO TELECOMUNICACIONES I, TELECOMUNICACIONES II, LABORATORIO TELECOMUNICACIONES II</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES III-1-2-TELECOMUNICACIONES I,LABORATORIO TELECOMUNICACIONES I</div>
                <div class="row">SEGURIDAD FÍSICA-3-3-</div>
                <div class="row">AMBIENTE Y SUSTENTABILIDAD-2-3-</div>
                <div class="row">OPTATIVA III-3-3-</div>
                <div class="row">OPTATIVA IV-1-3-</div>
            </div>
            <br>
            <div class="tabla" id="main5">
                <div class="superHead">5to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO-2-3-SEGURIDAD FÍSICA</div>
                <div class="row">LABORATORIO METODOLOGÍA Y SISTEMAS DE CONTROL DE A-1-2-SEGURIDAD FÍSICA</div>
                <div class="row">TEORÍA DE LA INFORMACIÓN II-2-3-TEORÍA DE LA INFORMACIÓN I</div>
                <div class="row">CRIPTOGRAFÍA APLICADA-2-3-TEORIA DE AUTOMATAS, ÁLGEBRA, CÁLCULO DIFERENCIAL Y GEOMETRÍA ANALÍTICA</div>
                <div class="row">DISEÑO DE ARQUITECTURAS DE SEGURIDAD-2-3</div>
                <div class="row">TELECOMUNICACIONES IV-2-3-TELECOMUNICACIONES I, LABORATORIO TELECOMUNICACIONES I, TELECOMUNICACIONES II</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES IV-1-2-TELECOMUNICACIONES III, LABORATORIO TELECOMUNICACIONES III</div>
                <div class="row">OPERACIÓN DE LA SEGURIDAD-2-3-SEGURIDAD EN APLICACIONES, LABORATORIO SEGURIDAD EN APLICACIONES</div>
                <div class="row">CONTEXTO SOCIAL DE LA PROFESION-2-3</div>
                <div class="row">OPTATIVA V-3-3</div>
            </div>
            <br>
            <div class="tabla" id="main6">
                <div class="superHead">6to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">ANÁLISIS FORENSE-2-3-LABORATORIO METODOLOGÍA Y SISTEMAS DE CONTROL DE A, METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO</div>
                <div class="row">LABORATORIO ANÁLISIS FORENSE-1-2-METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO, LABORATORIO METODOLOGÍA Y SISTEMAS DE CONTROL DE A</div>
                <div class="row">PRÁCTICAS AVANZADAS DE SEGURIDAD INFORMÁTICA-2-3-METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO, OPERACIÓN DE LA SEGURIDAD</div>
                <div class="row">LABORATORIO PRÁCTICAS AVANZADAS DE SEGURIDAD INFOR-1-2-METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO, LABORATORIO METODOLOGÍA Y SISTEMAS DE CONTROL DE A</div>
                <div class="row">DISEÑO DE POLÍTICAS Y PROGRAMAS EMPRESARIALES-2-3-METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO, LABORATORIO METODOLOGÍA Y SISTEMAS DE CONTROL DE A</div>
                <div class="row">COMPETENCIA COMUNICATIVA EN INGLES-2-3</div>
                <div class="row">CONTINUIDAD DE NEGOCIO Y PLANEACIÓN DE RECUPERACION-2-3-METODOLOGÍA Y SISTEMAS DE CONTROL DE ACCESO, LABORATORIO METODOLOGÍA Y SISTEMAS DE CONTROL DE A</div>
                <div class="row">OPTATIVA VI-3-3</div>
            </div>
            <br>
            <div class="tabla" id="main7">
                <div class="superHead">7mo Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">SEGURIDAD DE LAS TELECOMUNICACIONES Y REDES-2-3-LABORATORIO PRÁCTICAS AVANZADAS DE SEGURIDAD INFOR</div>
                <div class="row">LABORATORIO SEGURIDAD DE LAS TELECOMUNICACIONES-1-2-PRÁCTICAS AVANZADAS DE SEGURIDAD INFORMÁTICA</div>
                <div class="row">SERVICIO SOCIAL-16-20</div>
                <div class="row">OPTATIVA VII-3-3</div>
            </div>
            <br>
            <div class="tabla" id="main8">
                <div class="superHead">8vo Semestre</div>
                <div class="header">Créditos-Horas/semana-Requisitos</div>
                <div class="row">ETICA SOCIEDAD Y PROFESION-2-3</div>
                <div class="row">LIBRE ELECCIÓN-18-20</div>
                <div class="row">TOPICOS SELECTOS PARA EL DESARROLLO ACADÉMICO Y PROFESIONAL-2-3</div>
            </div>
            </label>
        </div>
    </div>
    <div name="Maestros">
        <div class="textTab">
            <label>
            <div class="tableS">
            <div class="superHead">Maestros</div>
            <div class="header">Nombre-Titulo</div>
            <div class="row">AGUIRRE RAMOS NORMA-M.C.C.</div>
            <div class="row">ALVARADO DÍAZ DE LEÓN ESTELA-LIC.</div>
            <div class="row">CARVALLO PONCE ROBERTO-ING.</div>
            <div class="row">CÁRDENAS JAIMES JOSÉ ALBERTO-ING.</div>
            <div class="row">CÁRDENAS MUNGUIA MIGUEL ANGEL-M.T.</div>
            <div class="row">DE LA CRUZ SÁNCHEZ HERIBERTO NOE-ING</div>
            <div class="row">FIGUEROA CARDONA JOSÉ MARTÍN-M.C.I.E.</div>
            <div class="row">FUENTES OAXACA ELEAZAR-ING.</div>
            <div class="row">GALVÁN JARA FERNANDO IVÁN-M.C.</div>
            <div class="row">GARCÍA ESPINOSA BRAULIO OMAR-ING.</div>
            <div class="row">GONZÁLEZ GONZÁLEZ OSVALDO HABIB-LIC</div>
            <div class="row">HERNÁNDEZ ALANÍS ENRIQUE-LIC.</div>
            <div class="row">JALOMO ORTIZ RAUL ALEJANDRO-M.C.</div>
            <div class="row">JIMÉNEZ LARA JESÚS ISAÍAS-ING.</div>
            <div class="row">LOYOLA RODRÍGUEZ JOSE APOLINAR-M.T.</div>
            <div class="row">MALDONADO CANTÚ JUAN CARLOS-ING.</div>
            <div class="row">MANRIQUE MANCILLA ARTURO-ING.</div>
            <div class="row">MARTINEZ HUERTA ATILANO-LIC.</div>
            <div class="row">MERLA VILLAFUERTE CARLOS-M.C.</div>
            <div class="row">OCHOA OLIVA MARIA DE JESUS ANTONIA-M.T.</div>
            <div class="row">RAMÍREZ CARRERA JORGE ALBERTO-LIC.</div>
            <div class="row">RODRIGUEZ RAMIREZ PABLO CESAR-DR.</div>
            <div class="row">RODRÍGUEZ REYNA JOSÉ CARLOS-LIC.</div>
            <div class="row">ROMERO JAYMES MARIO EDUARDO-LIC.</div>
            <div class="row">SANCHEZ LÓPEZ ROMEO ALFONSO-ING.</div>
            <div class="row">SOTELO RUIZ ISRAEL FORTINO-M.T.I.</div>
            <div class="row">VALDÉS ALVARADO MIGUEL ÁNGEL-M.D.I.</div>
            <div class="row">VERGARA CARMONA JUAN MANUEL-M.C.</div>
            <div class="row">VIERA GONZÁLEZ PERLA MARLENE-LIC.</div>
            </div>
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>