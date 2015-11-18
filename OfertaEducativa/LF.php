<!DOCTYPE HTML>
<html>
<head>
    <title>LF</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/LF.css" rel="stylesheet">
    <?php
    $array = ["LF","LF_2"];
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
            $(".tabla").TableT();
        });
    </script>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div class="lName"><label>Fisica</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Objetivo">
        <div class="textTab">
            <label>
            <b>Objetivo</b>
            <p>Formar profesionales en el área de la Física, con un perfil integral, dedicados al estudio sistemático y científico de los fenómenos naturales, utilizando las matemáticas como lenguaje, combinando estudios teóricos, experimentales y computacionales en la búsqueda de las leyes físicas que describen la naturaleza, capaces de aplicar sus conocimientos en los sectores productivos como el industrial y de servicios, salud, docencia e investigación.</p>
            </label>
        </div>
    </div>
    <div name="Aspirante">
        <div class="textTab">
            <label>
            <b>El aspirante a la Licenciatura en Física debe poseer las siguientes características:</b>
            <ul>
                <li>Capacidad para buscar información, seleccionarla, ordenarla y utilizarla oportunamente.</li>
                <li>Capacidad de identificar cuál es el problema esencial en una situación dada; distinguir elementos intrínsecos y contextuales de esa situación, descubrir y ponderar rutas alternas de solución y tomar decisiones.</li>
                <li>Poseer conocimientos suficientes para proseguir sus estudios.</li>
                <li>Presta atención a hechos y datos; conceptos, términos y símbolos; procedimientos y fórmulas; teorías y principios, y nociones fundamentales que tradicionalmente se incluyen en los programas del bachillerato.</li>
                <li>Debe tener dominio del propio idioma, como instrumento de comunicación y el manejo de otros idiomas y el cómputo, el de las matemáticas hasta la comprensión y aplicación de conceptos como función y límite, el manejo de elementos de probabilidad y la estimación por rangos.</li>
                <li>Capacidad de razonamiento para reconocer distintas situaciones o alternativas: identificarlas o diferenciarlas unas de otras, transferir lo conocido a otras circunstancias, descubrir todos y partes, comparar, seleccionar, juzgar, evaluar. Reconocer qué está o puede estar incluido en qué, identificar qué puede esperarse a partir de ver regularidades o maneras permanentes de proceder o enlazarse los sucesos. Implica imaginar soluciones o suponer condiciones, probar, explorar, comprobar.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Egresado">
        <div class="textTab">
            <label>
                <b>Egresado</b>
            <p>La enseñanza de la Física, a través del plan de estudios de esta Licenciatura, toma en cuenta el carácter científico de esta actividad humana. En este sentido busca formar al estudiante en la aplicación de la metodología para que incorpore a sus habilidades las competencias características de un científico que practica esta disciplina. Sobre esta base, las metas en la formación del egresado deben incluir:  </p>
            <ul>
                <li>El estudio sistemático de los fenómenos naturales tratando de encontrar las leyes básicas que lo rigen.</li>
                <li>El uso de las matemáticas como lenguaje y la combinación de estudios teóricos con experimentales para la obtención de las leyes.</li>
                <li>La concepción metodológica clara de que una ley física es cierta cuando su comprobación experimental proporciona resultados positivos.</li>
                <li>El cultivo de la expresión sistematizada del conocimiento disciplinar, tanto en forma oral como escrita.</li>
            </ul>
            <b>El licenciado en Física desarrollará las siguientes competencias específicas:</b>
            <ul>
                <li>Distingue con claridad las leyes físicas o fenómenos físicos fundamentales de la naturaleza con la intención de generar una idea global y estructuralmente general de los diferentes problemas que se presentan en el campo del saber físico.</li>
                <li>Busca acervo bibliográfico especializado y técnico para trabajos académicos, de investigación y desarrollo técnico de proyectos.</li>
                <li>Utiliza los métodos matemáticos y numéricos avanzados para resolver y/o modelar las leyes fundamentales de la física.</li>
                <li>Realiza las aproximaciones esenciales, de un problema físico, requeridas con el objeto de simplificar el problema para establecer un modelo de trabajo del mismo.</li>
                <li>Identifica las teorías físicas, tanto clásicas como modernas, localizando en su modelo matemático su soporte experimental y el fenómeno físico que puede ser descrito a través de ellas, para aplicarlas en diferentes áreas de la física y de la ingeniería.</li>
                <li>Realiza experimentos que le permitan observar, analizar, interpretar y sacar conclusiones para adquirir el método científico.</li>
                <li>Desarrolla algoritmos de programación en lenguajes de alto nivel que resuelvan problemas físicos con solución no analítica.</li>
                <li>Aplica las teorías físicas, tanto clásicas como modernas, para contribuir a resolver problemas en diferentes áreas de la física, ingeniería, biología y del sector salud.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <div id="main" class="tabla">
                <div class="superHead">Primer Semestre</div>
                <div class="header">Creditos-Horas/Semana-Requisitos</div>
                <div class="row">Metodologia de la programacion-2-3</div>
                <div class="row">Competencia comunicativa-2-3</div>
                <div class="row">Calculo Diferencial-4-5</div>
                <div class="row">Algebra-4-5</div>
                <div class="row">Mecanica Traslacional-4-5</div>
                <div class="row">Geometria Analitica-4-5</div>
                <div class="row">Aplicacion de las tecnologias de informacion-2-3</div>
            </div>
            <br />
            <div id="main2" class="tabla">
                <div class="superHead">Segundo Semestre</div>
                <div class="header">-Creditos-Hora/Semana-Requisitos</div>
                <div class="row">INTRODUCCIÓN A LA NANOTECNOLOGÍA-3-3</div>
                <div class="row">DERECHOS HUMANOS-2-3</div>
                <div class="row">DESARROLLO HUMANO Y COMPETITIVIDAD PROFESIONAL-2-3</div>
                <div class="row">EQUIDAD DE GENERO-2-3</div>
                <div class="row">AUTOCUIDADO Y ESTILOS DE VIDA SALUDABLE-2-3</div>
                <div class="row">CÁLCULO INTEGRAL-4-5-CÁLCULO DIFERENCIAL</div>
                <div class="row">TÓPICOS DE ÁLGEBRA-4-5-ÁLGEBRA</div>
                <div class="row">MECÁNICA ROTACIONAL FLUIDOS Y CALOR-4-5</div>
                <div class="row">PROGRAMACIÓN-3-3-CÁLCULO DIFERENCIAL</div>
                <div class="row">ASTROMETRÍA ESFÉRICA-3-3</div>
                <div class="row">CULTURA REGIONAL-2-3</div>
                <div class="row">ANTROPOLOGÍA SOCIAL-2-3</div>
                <div class="row">MÉTODOS ALTERNOS DE LA SOLUCIÓN DE CONTROVERSIAS-2-3</div>
                <div class="row">PSICOLOGÍA Y DESARROLLO PROFESIONAL-2-3</div>
                <div class="row">CULTURA DE CALIDAD-2-2</div>
                <div class="row">EDUCACIÓN FÍSICA-2-3</div>
            </div>
            <br />
            <div id="main3" class="tabla">
                <div class="superHead">Tercer Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">ASTRONOMÍA GENERAL I-2-3</div>
                <div class="row">CÁLCULO DE VARIAS VARIABLES-4-5-CÁLCULO INTEGRAL</div>
                <div class="row">ÁLGEBRA LINEAL-4-5-TÓPICOS DE ÁLGEBRA</div>
                <div class="row">ELECTRICIDAD Y MAGNETÍSMO-4-5-MECÁNICA ROTACIONAL FLUIDOS Y CALOR</div>
                <div class="row">ECUACIONES DIFERENCIALES-4-5-CÁLCULO INTEGRAL</div>
                <div class="row">ANÁLISIS Y TÉCNICAS EXPERIMENTALES-2-3</div>
                <div class="row">APRECIACIÓN A LAS ARTES-2-3</div>
                <div class="row">COMPETENCIA COMUNICATIVA EN ÍNGLES-2-3</div>
            </div>
            <br />
            <div id="main4" class="tabla">
                <div class="superHead">Cuarto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">INTRODUCCIÓN A LA NANOBIOTECNOLOGÍA-2-3</div>
                <div class="row">ASTRONOMÍA GENERAL II Y CÁLCULO NUMÉRICO-3-3</div>
                <div class="row">CÁLCULO VECTORIAL-3-5-CÁLCULO DE VARIAS VARIABLES</div>
                <div class="row">VARIABLE COMPLEJA-3-5-CÁLCULO DE VARIAS VARIABLES</div>
                <div class="row">ONDAS Y ELECTROMAGNETISMO-3-5-ELECTRICIDAD Y MAGNETÍSMO</div>
                <div class="row">PROBABILIDAD-3-5-ECUACIONES DIFERENCIALES</div>
                <div class="row">METROLOGÍA-3-3</div>
                <div class="row">QUÍMICA-3-3</div>
                <div class="row">CONTEXTO SOCIAL DE LA PROFESIÓN-2-3</div>
                <div class="row">AMBIENTE Y SUSTENTABILIDAD-2-3</div>
            </div>
            <br />
            <div id="main5" class="tabla">
                <div class="superHead">Quinto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">FÍSICA MODERNA-3-3-ONDAS Y ELECTROMAGNETISMO</div>
                <div class="row">HISTORIA DE LA FÍSICA-3-3</div>
                <div class="row">FÍSICA DEL SISTEMA SOLAR-3-3</div>
                <div class="row">MECÁNICA CELESTE-3-3</div>
                <div class="row">ELECTRÓNICA DIGITAL-2-3-ONDAS Y ELECTROMAGNETISMO</div>
                <div class="row">FÍSICA TÉRMICA-3-3-ONDAS Y ELECTROMAGNETISMO</div>
                <div class="row">MECÁNICA TEÓRICA-3-3-ONDAS Y ELECTROMAGNETISMO</div>
                <div class="row">MÉTODOS MATEMÁTICOS DE LA FÍSICA I-3-3-ECUACIONES DIFERENCIALES</div>
                <div class="row">FÍSICA COMPUTACIONAL-2-3-PROBABILIDAD</div>
                <div class="row">CIENCIA DE MATERIALES-3-3</div>
            </div>
            <br />
            <div id="main6" class="tabla">
                <div class="superHead">Sexto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">FORMACIÓN Y EVOLUCIÓN ESTELAR-3-3</div>
                <div class="row">SEMANARIO DE FÍSICA-3-3</div>
                <div class="row">QUÍMICA COMPUTACIONAL PARA NANOTECNOLOGÍA-3-3</div>
                <div class="row">APLICACIONES DE NANOTECNOLOGÍA COMPUTACIONAL-4-3</div>
                <div class="row">MATERIALES NANOESTRUCTURADOS-4-3</div>
                <div class="row">CIRCUITOS ELECTRÓNICOS-2-3-ELECTRÓNICA DIGITAL</div>
                <div class="row">FÍSICA ESTADÍSTICA-3-3-FÍSICA TÉRMICA</div>
                <div class="row">TEORÍA ELECTROMAGNÉTICA-3-3-MECÁNICA TEÓRICA</div>
                <div class="row">MECÁNICA CUÁNTICA I-2-3-FÍSICA MODERNA</div>
                <div class="row">MÉTODOS MATEMÁTICOS DE LA FÍSICA II-2-3-MÉTODOS MATEMÁTICOS DE LA FÍSICA I</div>
                <div class="row">ENSEÑANZA DE LAS CIENCIAS FÍSICO MATEMÁTICAS-2-3</div>
                <div class="row">FÍSICA EXPERIMENTAL-3-3</div>
            </div>
            <br />
            <div id="main7" class="tabla">
                <div class="superHead">Septimo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">FÍSICA NUCLEAR-2-3</div>
                <div class="row">MAGNETISMO EN SISTEMAS DE BAJA DIMENSIONALIDAD-2-3</div>
                <div class="row">TÓPICOS DE FÍSICA MATEMÁTICA-2-3</div>
                <div class="row">SERVICIO SOCIAL-16-20</div>
                <div class="row">ESTADO SÓLIDO-2-3-TEORÍA ELECTROMAGNÉTICA</div>
                <div class="row">MECÁNICA CUÁNTICA II-2-3</div>
                <div class="row">ÓPTICA Y APLICACIONES-2-3</div>
            </div>
            <br />
            <div id="main8" class="tabla">
                <div class="superHead">Septimo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">MATEMATICAS-2-3</div>
                <div class="row">ÉTICA, SOCIEDAD Y PROFESIÓN-2-3</div>
                <div class="row">METODOLOGÍA CIENTÍFICA-2-3</div>
                <div class="row">FORMACIÓN DE EMPRENDEDORES-2-3</div>
            </div>
            <br />
            <div id="main9" class="tabla">
                <div class="superHead">Septimo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">LIBRE ELECCIÓN-18-20</div>
            </div>
            </label>
        </div>
    </div>
    <div name="Maestros">
        <div class="textTab">
            <label>
            <b>Maestros</b>
            ADAME VILLANUEVA LUCIA, DRA.<br />
            AYALA GÓMEZ SANDRA ANGÉLICA, DRA.<br />
            CEBALLOS HERRERA DANIEL ENRIQUE, DR.<br />
            COMPARAN ELIZONDO JOSÉ LUÍS, DR.<br />
            ELIZONDO VILLARREAL NORA, DRA.<br />
            GARCÍA MÉNDEZ MANUEL, DR.<br />
            GARZA LÓPEZ ISRAEL, DR.<br />
            GUERRERO VILLA MARTIN, DR.<br />
            GUZMÁN RAMOS VALENTÍN, M. C.<br />
            GONZALEZ AMEZCUA OMAR, DR.<br />
            GRACIA PINILLA MIGUEL ÁNGEL, DR.<br />
            LARA NEAVE ALEJANDRO, M. E. C.<br />
            MARTÍNEZ GUERRA EDGAR, DR.<br />
            MARTÍNEZ HERNÁNDEZ CARLOS, DR.<br />
            MENCHACA ARREDONDO JORGE LUIS, DR.<br />
            MEJÍA ROSALES  SERGIO, DR.<br />
            MORONES IBARRA RUBÉN, DR.<br />
            OBREGÓN GUERRA RICARDO, DR.<br />
            RAMÍREZ HERNÁNDEZ ENRIQUE RAÚL, M<br />. C.
            RUIZ MENDOZA JUAN CARLOS, DR.<br />
            SALAS SOLÍS MARÍA CONCEPCIÓN. DRA.<br />
            SALINAS ESTEVANE JUAN PABLO, DR.<br />
            SUÁREZ DE LA CRUZ JESÚS GUADALUPE, M. E. C.<br />
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>