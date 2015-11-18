<!DOCTYPE HTML>
<html>
<head>
    <title>LM</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/LM.css" rel="stylesheet">
    <?php
    $array = ["LM","LM_2"];
    $num = $array[array_rand($array)];
    $file  = "../img/carrera/$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }.tabla .row{
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
    <div class="lName"><label>Matematicas</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Objetivo">
        <div class="textTab">
            <label>
            <b>Objetivo</b>
            <p>Formar profesionales de las Matemáticas, con capacidad para colaborar en la solución de problemas en los sectores productivos, de servicios y educativos, buscando contribuir en el desarrollo de la comunidad en los aspectos de investigación básica y aplicada.</p>
            </label>
        </div>
    </div>
    <div name="Aspirante">
        <div class="textTab">
            <label>
            <b>Cualidades deseables en el aspirante a ingresar a esta carrera</b>
            <ul>
                <li>Vocación para el estudio de las ciencias.</li>
                <li>Capacidad para la investigación científica.</li>
                <li>Capacidad de análisis y síntesis.</li
                <li>Aptitudes e interés por el trabajo teórico, los avances de la tecnología y la resolución de problemas.</li
                <li>Interés por el ejercicio docente.</li>
            </ul>
            <b>Información dirigida para los aspirantes de la carrera de Licenciado en Matemáticas.</b>
            <p>Elaboró: M. en C. Sergio Arratia Dávila.</p>
            <b>Matemáticas: ¿Qué son?, su historia y perspectivas</b>
            <p>En un contexto simple es difícil definir lo que es la matemática. Muchos afirman que no es una ciencia, ya que no sigue todos los pasos del método científico, sin embargo por otro lado, el método científico sería inconcebible sin la matemática. Bertrand Russel definió las matemáticas como "La ciencia de la que nunca sabemos a que nos referimos ni si lo que decimos es cierto". Esta definición no encierra ninguna modestia, de hecho es una expresión de orgullosa jactancia. Los matemáticos afirman que su trabajo puede aplicarse al universo y a nuestro mundo, ya que lo diseñaron para que fuera aplicado a todo mundo y universo posibles, que pudiesen existir dentro del contexto de la lógica. Las matemáticas pueden ser definidas como el lenguaje universal.</p>
            <p>En un principio los dos puntales de la matemática fueron la aritmética y la geometría. Usados en un inicio para la solución de problemas de carácter práctico como el conteo, la medición y la construcción, rápidamente estos conocimientos fueron trasladados a un contexto más científico, muy probablemente al ser utilizados en la astronomía por los babilonios y los egipcios. Posteriormente los griegos empezaron a conferirle formalidad y abstracción lógica a la geometría, dando con ello inicio la universalización del lenguaje matemático. El avance del conocimiento humano se dio paralelamente al avance de las matemáticas. Los Árabes inventaron el álgebra. Posteriormente, con el descubrimiento del cálculo, se aceleró el desarrollo científico ya que con está nueva herramienta era posible, por primera vez, modelar de forma convincente las leyes que rigen el comportamiento del universo en que vivimos. A partir de ese momento, el desarrollo de la matemática ha sido enormemente acelerado. Se han creado matemáticas de increíble sofisticación y abstracción, para las cuales apenas se están encontrando aplicaciones reales. De hecho podemos afirmar que dado su carácter de universalidad, la matemática se sitúa en el centro de prácticamente todas las ciencias y del conocimiento.</p>
            <p>La civilización humana actual es inconcebible sin las leyes físicas, la tecnología y las técnicas intelectuales desarrollados como producto junto con la investigación matemática. Las matemáticas pueden relacionarse tanto con la filosofía, la economía, la tecnología, los viajes espaciales, los procesos industriales, los fenómenos sociales, la computación, la música, los juegos de azar, como con la física nuclear, la relatividad y física cuántica. Actualmente la mayoría de las investigaciones científicas son inaceptables si no son validadas mediante el uso de modelos matemáticos. Aún en áreas de conocimiento como la biología y la medicina, el uso de modelos matemáticos se ha generalizado; el avance en la genética, por ejemplo, se debe en gran pare al uso de modelos basados en desarrollos matemáticos.</p>
            <b>El perfil del estudiante de la carrera de matemáticas</b>
            <p>La carrera de matemáticas ofrece uno de los mayores y más interesantes retos que una persona puede enfrentar durante su desarrollo educativo. El estudiar matemáticas no significa solamente aprender una serie de conceptos abstractos y obscuros como muchos creen. Significa desarrollar una manera lógica y racional de pensar. El estudio de las matemáticas es un "ejercicio" de entrenamiento mental, que propicia en el que lo realiza, un gran desarrollo de sus habilidades inductivas y deductivas. El matemático es una persona que continuamente utiliza una disciplina de pensamiento que le permite enfrentar y resolver una gama de problemas tan amplia, que abarca esencialmente todas las ramas del conocimiento. Prácticamente cualquier profesional que requiera resolver problemas que involucran la utilización de modelos conceptuales cuantitativos complejos, habrá de recurrir a un matemático para que le guíe.</p>
            <p>Los institutos de investigación y desarrollo tecnológico más afamados del mundo, cuentan invariablemente entre sus investigadores más importantes, con un equipo de matemáticos.</p>
            <p>El matemático puede desarrollarse profesionalmente en campos que van desde la docencia, pasando por la industria, la economía y los negocios, hasta la investigación pura y aplicada, ya sea desarrollando teorías abstractas o bien creando modelos socioeconómicos, físicos, tecnológicos o industriales.</p>
            <b>Campos de desarrollo para el matemático</b>
            <p>El estudiante de matemáticas puede elegir entre dos grandes campos de especialización: Las Matemáticas Puras Las Matemáticas Aplicadas</p>
            <b>Las Matemáticas Puras</b>
            <p>El principal objetivo de las matemáticas puras es el extender las fronteras del conocimiento matemático. En ella la aplicación práctica carece de interés. El matemático puro considera su tarea un arte y juzga su valor por la elegancia de su lógica y su razonamiento. Es capaz de desarrollar geometrías de dimensiones infinitas o de cero dimensiones, así como, estructuras algebraicas tan simples o tan complicadas como lo desee. Puede crear teorías para la deformación continua de espacios y transformar una hoja de papel en una botella cuyo fondo coincide con su boca. Ha llegado inclusive a demostrar que las matemáticas mismas no están sujetas de modo alguno a ser demostradas, por lo que son "independientes de la mente humana misma" (Kurt Gödel). No en vano, el gran físico Albert Einstein se vio influenciado al formular su teoría de la Relatividad General, por los desarrollos de geometrías no euclidianas realizados por grandes matemáticos puros como Riemann, Minkowski y Poincaré entre otros.</p>
            <p>Actualmente las matemáticas puras incluyen principalmente las siguientes áreas de desarrollo.</p>
            <p><b>Teoría de Conjuntos.</b> Estudia las formas de esquematización de todas las estructuras de objetos, principalmente numéricos, para la creación de teorías matemáticas robustas. Ha permitido entre otras cosas, el desarrollo de un nuevo tipo de aritmética para el tratamiento del infinito, llamada aritmética transfinita o Cantoriana.</p>
            <b>Epílogo</b>
            <p>Como se puede apreciar, el futuro de la matemática es ahora más amplio y promisorio que nunca antes en la historia.</p>
            <br />
            </label>
        </div>
    </div>
    <div name="Egresado">
        <div class="textTab">
            <label>
            <b>Conocimientos, experiencias y habilidades que el estudiante adquirirá</b>
            <ul>
                <li>Tendrá una sólida formación matemática y estadística.</li>
                <li>Conocimientos acerca de seguros, matemáticas actuariales, pensiones y finanzas.</li>
                <li>Será capaz de estudiar, plantear y formular modelos de contenido matemático, con el fin de proveer información para la planeación, la previsión y la toma de decisiones.</li>
                <li>Integrará conocimientos matemáticos y actuariales en la solución de problemas concretos.</li>
                <li>Empleará la informática y la tecnología computarizada en el trabajo cotidiano.</li>
                <li>Expresará de manera clara y precisa las ideas, en forma oral y escrita.</li>
                <li>Tomará decisiones en torno a problemas actuariales.</li>
                <li>Obtendrá y valorará información.</li>
                <li>Utilizará el idioma ingles como medio de comunicación</li>
            </ul>
            <b>Actitudes deseables en el egresado de esta carrera</b>
            <ul>
                <li>Vocación de servicio a la comunidad.</li>
                <li>Cooperación para el trabajo en equipo multidisciplinario.</li>
                <li>Crítica y apertura ante las situaciones de cambio social, científico y tecnológico.</li>
                <li>Honestidad y alto sentido humanista.</li>
                <li>Competencia para la administración de recursos.</li>
                <li>Liderazgo en proyectos del campo profesional.</li>
                <li>Fuertes principios éticos y morales con la sociedad.</li>
            </ul>
            <b>Fuentes de empleo de los egresados de esta carrera</b>
            <ul>
                <li>Aseguradoras.</li>
                <li>Empresas del sector financiero.</li>
                <li>Industrias (Área de pensiones, finanzas, riesgos, etc.)</li>
                <li>Gobierno.</li>
                <li>Universidades e Instituciones Tecnológicas de educación media-superior y superior.</li>
                <li>Institutos de Investigación y Divulgación de la ciencia.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <div id="main" class="tabla">
                <div class="superHead">Primer Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">CÁLCULO DIFERENCIAL-5-5</div>
                <div class="row">ÁLGEBRA-4-5</div>
                <div class="row">GEOMETRÍA ANALÍTICA-5-5</div>
                <div class="row">LÓGICA Y CONJUNTOS-4-3</div>
                <div class="row">C. G 1 (COMPETENCIA COMUNICATIVA)-2-2</div>
                <div class="row">C. G 2 (APLICACIÓN DE LAS TECNOLOGÍAS DE INFORMACIÓN)-2-2</div>
            </div>
            <br>
            <div id="main2" class="tabla">
                <div class="superHead">Segundo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">CÁLCULO INTEGRAL-4-5-CÁLCULO DIFERENCIAL ÁLGEBRA GEOMETRÍA ANALÍTICA LÓGICA Y CONJUNTOS</div>
                <div class="row">GEOMETRÍA MODERNA-3-3-CÁLCULO DIFERENCIAL ÁLGEBRA</div>
                <div class="row">TÓPICOS DE ÁLGEBRA-4-5-ÁLGEBRA</div>
                <div class="row">PROGRAMACIÓN-4-5-LÓGICA Y CONJUNTOS</div>
                <div class="row">CG3 (TÓPICOS SELECTOS DE CIENCIAS SOCIALES, ARTES Y HUMANIDADES)-2-2</div>
                <div class="row">CG4(TÓPICOS SELECTOS DE DESARROLLO HUMANO, SALUD Y DEPORTES)-2-2</div>
                <div class="row">OPTATIVA I ACFBP-3-3</div>
            </div>
            <br />
            <div id="main3" class="tabla">
                <div class="superHead">Tercer Semestre Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">CÁLCULO DE VARIAS VARIABLES-4-5-CÁLCULO INTEGRAL</div>
                <div class="row">ÁLGEBRA LINEAL-4-5-TÓPICOS DE ÁLGEBRA</div>
                <div class="row">HISTORIA DE LAS MATEMÁTICAS-3-3-CÁLCULO INTEGRAL GEOMETRÍA MODERNA</div>
                <div class="row">CG5(APRECIACIÓN A LAS ARTES)-2-3</div>
                <div class="row">CG6 (TÓPICOS SELECTOS PARA EL DESARROLLO ACADÉMICO Y PROFESIONAL)-2-3</div>
                <div class="row">OPTATIVA II ACFBP--</div>
                <div class="row">OPTATIVA III ACFBP--</div>
            </div>
            <br />
            <div id="main4" class="tabla">
                <div class="superHead">Cuarto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">CÁLCULO VECTORIAL-4-5-CÁLCULO DE VARIAS VARIABLES ÁLGEBRA LINEAL</div>
                <div class="row">VARIABLE COMPLEJA-4-5-CÁLCULO DE VARIAS VARIABLES</div>
                <div class="row">ECUACIONES DIFERENCIALES-4-5-CÁLCULO DE VARIAS VARIABLES ÁLGEBRA LINEAL</div>
                <div class="row">PROBABILIDAD-4-5-CÁLCULO DE VARIAS VARIABLES</div>
                <div class="row">TÓPICOS DE ÁLGEBRA LINEAL-2-3-ÁLGEBRA LINEAL</div>
                <div class="row">CG7(AMBIENTE Y SUSTENTABILIDAD)-2-3</div>
                <div class="row">OPTATIVA IV ACFBP-2-3</div>
            </div>
            <br />
            <div id="main5" class="tabla">
                <div class="superHead">Quinto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">TEORÍA DE GRUPOS-4-5-ÁLGEBRA LINEAL VARIABLE COMPLEJA</div>
                <div class="row">ESTADÍSTICA-4-5-PROBABILIDAD</div>
                <div class="row">TÓPICOS DE ECUACIONES DIFERENCIALES-3-3-ECUACIONES DIFERENCIALES</div>
                <div class="row">TÓPICOS DE VARIABLE COMPLEJA-3-3-VARIABLE COMPLEJA</div>
                <div class="row">CG8(CONTEXTO SOCIAL DE LA PROFESIÓN)-2-3</div>
                <div class="row">OPTATIVA I ACFP-3-3</div>
                <div class="row">OPTATIVA II ACFP-3-3</div>
            </div>
            <br />
            <div id="main6" class="tabla">
                <div class="superHead">Sexto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">ANALISIS MATEMÁTICO-4-5-TEORÍA DE GRUPOS TÓPICOS DE VARIABLE COMPLEJA</div>
                <div class="row">TEORÍA DE ANILLOS Y CAMPOS-3-3-TEORÍA DE GRUPOS</div>
                <div class="row">INVESTIGACIÓN DE OPERACIONES-3-3-TÓPICOS DE ÁLGEBRA LINEAL ESTADÍSTICA</div>
                <div class="row">MATEMÁTICA EDUCATIVA-3-3-HISTORIA DE LAS MATEMÁTICAS</div>
                <div class="row">CG9(TÓPICOS SELECTOS DE LENGUA Y CULTURA EXTRANJERA)-2-3</div>
                <div class="row">OPTATIVA III ACFP--</div>
                <div class="row">OPTATIVA IV ACFP--</div>
            </div>
            <br />
            <div id="main7" class="tabla">
                <div class="superHead">Septimo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">TÓPICOS DE ANÁLISIS MATEMÁTICO-4-5-ANALISIS MATEMÁTICO</div>
                <div class="row">TOPOLOGÍA-4-5-ANALISIS MATEMÁTICO</div>
                <div class="row">SIMULACIÓN-2-3-INVESTIGACIÓN DE OPERACIONES</div>
                <div class="row">ENSEÑANZA DE LAS CIENCIAS FÍSICO MATEMÁTICAS-3-3-MATEMÁTICA EDUCATIVA</div>
                <div class="row">CG10(ÉTICA, SOCIEDAD Y PROFESIÓN)-2-3</div>
                <div class="row">OPTATIVA V ACFP--</div>
                <div class="row">OPTATIVA VI ACFP--</div>
            </div>
            <br />
            <div id="main8" class="tabla">
                <div class="superHead">Octavo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">TEORÍA DE LA MEDIDA-4-5-TÓPICOS DE ANÁLISIS MATEMÁTICO TOPOLOGÍA</div>
                <div class="row">SERVICIO SOCIAL-16-ANALISIS MATEMÁTICO</div>
                <div class="row">OPTATIVA VII ACFP-2-3</div>
            </div>
            <br />
            <div id="main9" class="tabla">
                <div class="superHead">Noveno Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">LIBRE ELECCIÓN-20-</div>
                <div class="row">OPTATIVA V ACFP-2-3</div>
            </div>
            <br />
            <h2>Optativas</h2>
            <br />
            <div id="main10" class="tabla">
                <div class="superHead">Segundo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">MECÁNICA TRASLACIONAL (ACFBP I)-3-3</div>
                <div class="row">METODOLOGÍA DE LA PROGRAMACIÓN (ACFBP I)-3-3</div>
                <div class="row">INTRODUCCIÓN A LA TEORÍA DE NÚMEROS (ACFBP I)-3-3</div>
            </div>
            <br />
            <div id="main11" class="tabla">
                <div class="superHead">Tercer Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">MECÁNICA ROTACIONAL FLUIDOS Y CALOR (ACFBP II)-4-5</div>
                <div class="row">MATEMÁTICAS COMPUTACIONALES (ACFBP II)-4-5</div>
                <div class="row">TALLER DE SOLUCIÓN DE PROBLEMAS BÁSICO (ACFBP III)-3-3</div>
                <div class="row">SUCESIONES Y SERIES (ACFBP III)-3-3</div>
            </div>
            <br />
            <div id="main12" class="tabla">
                <div class="superHead">Cuarto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">MATEMÁTICAS DISCRETAS (ACFBP IV)-2-3</div>
                <div class="row">ANÁLISIS NUMÉRICO (ACFBP IV)-2-3</div>
                <div class="row">ELECTRICIDAD Y MAGNETISMO (ACFBP IV)-2-3</div>
            </div>
            <br />
            <div id="main13" class="tabla">
                <div class="superHead">Quinto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">MODELADO MATEMÁTICO (ACFP I)-3-3</div>
                <div class="row">MÉTODOS MATEMÁTICOS DE LA FÍSICA (ACFP I)-3-3</div>
                <div class="row">TEORÍA DE GRAFOS (ACFP II)-3-3</div>
                <div class="row">TÓPICOS DE FÍSICA (ACFP II)-3-3</div>
            </div>
            <br />
            <div id="main14" class="tabla">
                <div class="superHead">Sexto Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">DISEÑO DE EXPERIMENTOS (ACFP III)-4-5</div>
                <div class="row">CÁLCULO VARIACIONAL (ACFP III)-4-5</div>
                <div class="row">TALLER DE SOLUCIÓN DE PROBLEMAS INTERMEDIO (ACFP IV)-3-3</div>
                <div class="row">ANÁLISIS DE REGRESIÓN (ACFP IV)-3-3</div>
            </div>
            <br />
            <div id="main15" class="tabla">
                <div class="superHead">Septimo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">GEOMETRÍA DIFERENCIAL (ACFP V)-4-5</div>
                <div class="row">TÓPICOS DE ÁLGEBRA ABSTRACTA (ACFP V)-4-5</div>
                <div class="row">MÉTODOS DE OPTIMIZACIÓN (ACFP V)-4-5</div>
                <div class="row">TEORÍA DE CONTROL (ACFP VI)-3-3</div>
                <div class="row">TÓPICOS DE ESTADÍSTICA (ACFP VI)-3-3</div>
                <div class="row">DIDÁCTICA DE LA MATEMÁTICA (ACFP VI)-3-3</div>
                <div class="row">MUESTREO (ACFP VI)-3-3</div>
            </div>
            <br />
            <div id="main16" class="tabla">
                <div class="superHead">Octavo Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">TÓPICOS DE TOPOLOGÍA (ACFP VII)-2-3</div>
                <div class="row">TEORÍA DE JUEGOS (ACFP VII)-2-3</div>
                <div class="row">TÓPICOS DE OPTIMIZACIÓN (ACFP VII)-2-3</div>
                <div class="row">TÓPICOS SELECTOS DE ENSEÑANZA DE LAS MATEMÁTICAS (ACFP VII)-2-3</div>
            </div>
            <br />
            <div id="main17" class="tabla">
                <div class="superHead">Noveno Semestre</div>
                <div class="header">-Creditos-Horas/Semana-Requisitos</div>
                <div class="row">ANÁLISIS FUNCIONAL (ACFP VIII)-2-3</div>
                <div class="row">PROCESOS ESTOCÁSTICOS (ACFP VIII)-2-3</div>
                <div class="row">SEMINARIO DE PROBLEMAS APLICADOS (ACFP VIII)-2-3</div>
                <div class="row">TÓPICOS DE ANÁLISIS MATEMÁTICO (ACFP VIII)-2-3</div>
            </div>
            <br />
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>