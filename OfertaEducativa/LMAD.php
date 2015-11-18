<!DOCTYPE HTML>
<html>
<head>
    <title>LMAD</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/LMAD.css" rel="stylesheet">
    <?php
        $array = ['_00.png','_0.jpg','_1.jpg','_2.jpg','_3.jpg','_4.jpg','_5.jpg','_6.jpg','_7.jpg'];
        $num = $array[array_rand($array)];
        $file  = "../img/carrera/LMAD$num";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
        .tabla .row{
            height:15vh !important;
        }
        img {
            width:75%;
            margin-left: 12.5%;
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
    <div class="lName"><label>Multimedia y Animacion Digital</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Objetivo">
        <div class="textTab">
            <label>
            <b>Objetivo</b>
            <p>Formar profesionistas capaces de crear estas nuevas tecnologías e ingresar y competir en este mercado de la industria del entretenimiento y la difusión de información.</p>
            </label>
        </div>
    </div>
    <div name="Aspirante">
        <div class="textTab">
            <label>
            <b>Cualidades deseables en el aspirante a ingresar a esta carrera</b>
            <ul>
                <li>Tener interés en las TIC´s y la innovación de las expresiones gráficas.</li>
                <li>Poseer la capacidad y habilidad para comprender, resolver y aplicar los diferentes algoritmos para el desarrollo de animación y gráficas por computadoras.</li>
                <li>Tener vocación de servicio para la solución integral de los problemas de la sociedad.</li>
                <li>Tener habilidad de integrarse en trabajo de equipo interdisciplinario para hacer frente a los retos que la sociedad tecnológica, industrial y de entretenimiento le exige como profesionista.</li>
            </ul>
            <b>Información dirigida para los aspirantes de la carrera de Licenciado en Multimedia y Animación Digital.</b>
            <p>Elaboró: M.C. Rafael Alberto Rosas Torres</p>
            <p>Formar profesionistas dedicados al estudio y desarrollo de la tecnología de multimedia, animación y juegos de video, para que ingresen y contribuyan en el mercado del entretenimiento mediante la innovación, creación, desarrollo e implementación de nuevas tecnologías, o siendo visionarios y creativos en el diseño de diferentes productos utilizando la tecnología ya existente. </p>
            <p>Es el uso de estas tecnologías (TIC´s) la que está propiciando el rompimiento de paradigmas facilitando el acceso a la información, permitiendo incursionar en la industria del entretenimiento y aprovechar así sus áreas de oportunidad. </p>
            <p>Esta carrera contempla en su diseño los requerimientos del Modelo Educativo, de tal forma que posee las áreas de Formación General Universitaria, Formación Básica Profesional, Formación Profesional, Libre Elección y materias optativas. En el caso, estas últimas se tomo la decisión de disminuir el porcentaje, ya que para medir su perfil de egreso nos hacía falta unidades de aprendizaje donde el alumno adquiera las competencias necesarias y cumplir con lo deseado. </p>
            <p>Muchos estudiantes desean estudiar en la UANL pero necesitan incorporarse en el menor tiempo posible al mercado laboral. La FCFM atendiendo esta demanda decidió crear esta Licenciatura en 8 semestres, por ello observando tal necesidad y revisando algunas instituciones educativas de competencia, se analizó el plan de unidades de aprendizaje en donde el objetivo primordial es formar profesionistas innovadores, creativos, transformadores, capaces de lograr diseñar proyectos vinculados con la multimedia, animación y videojuegos, así mismo se busca que sean conocedores de conceptos, teorías y técnicas del diseño gráfico en la creación de imágenes para el desarrollo de proyectos y desarrolladores de soluciones gráficas y tecnológicas que satisfagan necesidades de comunicación masiva. Cumpliendo con esta demanda se necesitó menos materias optativas reduciendo el porcentaje que propone del modelo educativo UANL visión 2012.</p>
            <p>Al tener universidades locales ofreciendo carreras de menor tiempo y al ver que la UANL quiere responder a las necesidades de los estudiantes con tener una carrera donde invierta solo el tiempo de adquisición de competencias en este campo y sobre todo con la calidad que caracteriza nuestra institución se logra reducir esta carrera a 8 semestres, donde el alumno adquiere las habilidades necesarias para el campo laboral de esta área.</p>
            <br />
            </label>
        </div>
    </div>
    <div name="Egresado">
        <div class="textTab">
            <label>
            <b>Egresado</b>
            <p>El Licenciado en Multimedia y Animación Digital es un profesionista con conocimientos de técnicas y expresiones artísticas y socioculturales, así como dominio de metodologías de desarrollo y mantenimiento de tecnologías de información y comunicaciones. Además conoce la estructura y los componentes de la multimedia, animación y juegos de video que permiten la evaluación del rendimiento y compatibilidad de plataformas existentes, con el fin de mejorar y propiciar la generación de diferentes productos que sean innovadores en la industria.</p>
            <b>Las competencias específicas del profesional de Licenciatura en Multimedia y Animación Digital son:</b>
            <ul>
                <li>Crear multimedia, videojuegos y animación para la promoción de ideas, de productos, de entretenimiento utilizando herramientas de software de vanguardia para su difusión en computadora, televisión, radio y otros medios.</li>
                <li>Crear software que sirva como herramienta para el desarrollo de aplicaciones multimedia, animación y videojuegos, que sea innovador y que permita reducir costos por uso de licencias.</li>
                <li>Coordinar desarrollos multimedia, animación y videojuegos para verificar la correcta implementación de las ideas a transmitir y la selección adecuada de los recursos humanos, técnicos, materiales y financieros, asegurando el logro de las metas establecidas del proyecto.</li>
                <li>Evaluar la infraestructura para el desarrollo de aplicaciones multimedia, animación y videojuegos para tomar decisiones que permitan optimizar el costo y obtener la mayor portabilidad.</li>
                <li>Crear animación para dar la sensación de vida a cualquier tipo de personaje u objeto, a través de un argumento dado, aplicándolo en ambientes industriales, educativos, comerciales y de entretenimiento asegurando la atención del observador.</li>
                <li>Estructurar aplicaciones y/o software que sean rentables económicamente. A partir del análisis sistemático de las necesidades del mercado de la informática.</li>
                <li>Crear videojuegos con fines de entretenimiento utilizando plataformas propias y otras ya existentes basadas tanto en la computadora personal como en cualquier otro tipo de consolas.</li>
                <li>Crear sistemas de comunicación que permiten integrar nuevos servicios tecnológicos para la organización.</li>
                <br/>
            </ul>
            <b>Áreas laborales para los egresados de esta carrera</b>
            <ul>
                <li>Diseño y producción de videojuegos.</li>
                <li>Animación y efectos especiales en cine y televisión.</li>
                <li>Aplicaciones para la simulación de procesos industriales en tiempo real.</li>
                <li>Comercio Electrónico sobre WEB</li>
                <li>Producción multimedia en diversos sectores.</li>
                <li>Desarrollo de hardware, software, aplicaciones científicas y de entretenimiento.</li>
                <li>Sistemas de entretenimiento bajo entornos de realidad virtual.</li>
                <li>Diseño y mantenimiento de servidores WEB.</li>
                <li>Modelado por computadora.</li>
                <li>Industria Cinematográfica.</li>
                <li>Televisión</li>
                <li>Industria de los videojuegos.</li>
                <li>Producción de comics animados.</li>
                <li>Tiene la capacidad para desarrollar su propia empresa.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <div class="tabla" id="main">
                <div class="superHead">1er Semestre</div>
                <div class="header">-Créditos-Horas/Semana-Requisitos</div>
                <div class="row">FUNDAMENTOS DE LAS GRAFICAS COMPUTACIONALES-2-3</div>
                <div class="row">MECANICA PARA EL DISEÑO DE SIMULADORES-2-3</div>
                <div class="row">PROGRAMACION I-4-3</div>
                <div class="row">CIRCUITOS DIGITALES-4-3</div>
                <div class="row">TECNOLOGIAS MULTIMEDIA-4-3</div>
                <div class="row">EXPRESIONES ARTISTICAS Y SOCIOCULTURALES-2-3</div>
                <div class="row">APLICACION DE LAS TECNOLOGIAS DE INFORMACION-2-3</div>
                <div class="row">COMPETENCIA COMUNICATIVA-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main2">
                <div class="superHead">2do Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">PROCESAMIENTO DE SEÑALES DIGITALES-4-3-FUNDAMENTOS DE LAS GRAFICAS COMPUTACIONALES</div>
                <div class="row">PROGRAMACION II-4-3-PROGRAMACION I</div>
                <div class="row">LENGUAJES ENSAMBLADORES-4-3-PROGRAMACION I</div>
                <div class="row">ESTRUCTURA DE DATOS-2-3-PROGRAMACION I</div>
                <div class="row">DIBUJO ARTISTICO-2-3</div>
                <div class="row">FUNDAMENTOS DE VIDEOJUEGOS-2-3</div>
                <div class="row">EVOLUCION Y APLICACIONES DE LAS TECNOLOGIAS-2-3</div>
                <div class="row">APRECIACION A LAS ARTES-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main3">
                <div class="superHead">3er Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">FUNDAMENTOS DE LOS JUEGOS ALEATORIOS-2-3-FUNDAMENTOS DE LAS GRAFICAS COMPUTACIONALES</div>
                <div class="row">PROGRAMACION ORIENTADA A OBJETOS EN C ++-4-3-PROGRAMACION II</div>
                <div class="row">ANALISIS DE SISTEMAS OPERATIVOS-2-3</div>
                <div class="row">PRODUCCION MULTIMEDIA-4-3-TECNOLOGIAS MULTIMEDIA</div>
                <div class="row">MERCADOTECNIA DE LOS VIDEOJUEGOS-4-3</div>
                <div class="row">PROPIEDAD INTELECTUAL-4-3</div>
                <div class="row">MODELADO POR COMPUTADORA-4-3-DIBUJO ARTISTICO</div>
                <div class="row">DESARROLLO HUMANO Y COMPETITIVIDAD PROFESIONAL-2-3</div>
                <div class="row">CULTURA DE CALIDAD-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main4">
                <div class="superHead">4to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">GRAFICAS COMPUTACIONALES-2-3-PROGRAMACION II</div>
                <div class="row">ANIMACION POR COMPUTADORA-4-3-MODELADO POR COMPUTADORA</div>
                <div class="row">BASE DE DATOS-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">MICROPROCESADORES-4-3-CIRCUITOS DIGITALES, LENGUAJES ENSAMBLADORES</div>
                <div class="row">FOTOGRAFIA-4-3</div>
                <div class="row">DISEÑO DE ESCENARIOS-2-3</div>
                <div class="row">AMBIENTE Y SUSTENTABILIDAD-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main5">
                <div class="superHead">5to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">VIDEOJUEGOS 1-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++, MODELADO POR COMPUTADORA, CIRCUITOS DIGITALES</div>
                <div class="row">PROGRAMACION ORIENTADA A INTERNET-4-3-TECNOLOGIAS MULTIMEDIA, PROGRAMACION ORIENTADA A OBJETOS EN C ++, MICROPROCESADORES</div>
                <div class="row">BASE DE DATOS-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">APLICACIONES INDUSTRIALES DE LAS GRAFICAS COMPUTACIONALES-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++, MICROPROCESADORES</div>
                <div class="row">PROGRAMACION Y APLICACIONES PARA LA WEB-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">BASES DE DATOS PARA MULTIMEDIA-4-3-BASE DE DATOS</div>
                <div class="row">CONTEXTO SOCIAL DE LA PROFESION-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main6">
                <div class="superHead">6to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">REDES COMPUTACIONALES-2-3-TECNOLOGIAS MULTIMEDIA, PROGRAMACION ORIENTADA A INTERNET</div>
                <div class="row">VIDEOJUEGOS2-4-3-VIDEOJUEGOS 1</div>
                <div class="row">DISEÑO DE CONCEPTO-4-3-PRODUCCION MULTIMEDIA</div>
                <div class="row">PROGRAMACION Y APLICACIONES PARA LA WEB 2-4-3-PROGRAMACION Y APLICACIONES PARA LA WEB</div>
                <div class="row">PROGRAMACION MULTIMEDIA-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">INTERFACES FISICAS-4-3-MICROPROCESADORES</div>
                <div class="row">TOPICOS DE TECNOLOGÍAS I-4-3</div>
                <div class="row">ANIMACION Y REPRESENTACION GRAFICA-4-3-ANIMACION POR COMPUTADORA</div>
                <div class="row">COMPETENCIA COMUNICATIVA EN INGLES2-2-3</div>
                <div class="row">CULTURA REGIONAL-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main7">
                <div class="superHead">7mo Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">REALIDAD VIRTUAL-4-3-GRAFICAS COMPUTACIONALES, ANIMACION Y REPRESENTACION GRAFICA</div>
                <div class="row">DISEÑO DE IMAGEN CORPORATIVA-4-3-DIBUJO ARTISTICO, FOTOGRAFIA</div>
                <div class="row">MODELADO EN ALTO POLIGONAJE-4-3-ANIMACION Y REPRESENTACION GRAFICA</div>
                <div class="row">ANIMACION TRADICIONAL AVANZADA-4-3-PRODUCCION MULTIMEDIA</div>
                <div class="row">PROCESAMIENTO DE IMAGENES, AUDIO Y DIALOGOS-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">PROGRAMACION DE SISTEMAS MOVILES-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">INTRODUCCION A SISTEMAS INTEGRADOS-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++, MICROPROCESADORES</div>
                <div class="row">TOPICOS DE TECNOLOGÍAS II-4-3</div>
                <div class="row">MULTIMEDIA INTERACTIVA-2-3-PROGRAMACION ORIENTADA A INTERNET, BASE DE DATOS</div>
                <div class="row">VIDEOJUEGOS 3-4-3-PROGRAMACION ORIENTADA A INTERNET, VIDEOJUEGOS2</div>
                <div class="row">ETICA SOCIEDAD Y PROFESION-2-3</div>
                <div class="row">METODOLOGIA CIENTIFICA-2-3</div>
            </div>
            <br>
            <div class="tabla" id="main8">
                <div class="superHead">8vo Semestre</div>
                <div class="header">Créditos-Horas/semana-Requisitos</div>
                <div class="row">SERVICIO SOCIAL-16-20</div>
            </div>
            <br>
            <div class="tabla" id="main9">
                <div class="superHead">Optativas</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">ANIMACION TRADICIONAL AVANZADA-4-3-PRODUCCION MULTIMEDIA</div>
                <div class="row">APLICACIONES INDUSTRIALES DE LAS GRAFICAS COMPUTACIONALES-4-3</div>
                <div class="row">PROGRAMACION MULTIMEDIA-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">INTERFACES FISICAS-4-6-MICROPROCESADORES</div>
                <div class="row">PROCESAMIENTO DE IMAGENES, AUDIO Y DIALOGOS-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">PROGRAMACION DE SISTEMAS MOVILES-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++</div>
                <div class="row">INTRODUCCION A SISTEMAS INTEGRADOS-4-3-PROGRAMACION ORIENTADA A OBJETOS EN C ++, MICROPROCESADORES</div>
                <div class="row">TOPICOS DE TECNOLOGÍAS I-4-3</div>
                <div class="row">TOPICOS DE TECN   k  c OLOGÍAS II-4-3</div>
                <div class="row">PROGRAMACION Y APLICACIONES PARA LA WEB-4-3</div>
                <div class="row">BASES DE DATOS PARA MULTIMEDIA-4-3</div>
                <div class="row">METODOS DE DISEÑO DE HERRAMIENTAS GRAFICAS-4-3</div>
                <div class="row">DISEÑO DE UNA HERRAMIENTA GRAFICA-4-3</div>
                <div class="row">PROPIEDADES DE LOS OBJETOS GRAFICOS-4-3</div>
                <div class="row">SECUENCIACION DE CUADROS Y ANIMACION-4-3</div>
                <div class="row">PROYECTO DE TESIS O MATERIA DE POSGRADO-4-3</div>
                <div class="row">GUIONISMO-4-3</div>
                <div class="row">MATEMATICAS 2-4-3</div>
                <div class="row">MERCADOTECNIA DE LOS VIDEOJUEGOS-4-3</div>
                <div class="row">PROPIEDAD INTELECTUAL-4-3</div>
                <div class="row">TELECOMUNICACIONES I-4-3</div>
                <div class="row">TELECOMUNICACIONES II-4-3</div>
                <div class="row">FOTOGRAFÍA COMERCIAL-4-3</div>
                <div class="row">ILUSTRACIÓN DIGITAL-4-3</div>
                <div class="row">DIBUJO PARA INGENIERÍA-4-3</div>
                <div class="row">CÁLCULO DIFERENCIAL-4-3</div>
                <div class="row">DISEÑO DE CONCEPTO-4-3-PRODUCCION MULTIMEDIA</div>
                <div class="row">PROGRAMACION Y APLICACIONES PARA LA WEB 2-4-3-PROGRAMACION Y APLICACIONES PARA LA WEB</div>
                <div class="row">DISEÑO DE IMAGEN CORPORATIVA-4-3-DIBUJO ARTISTICO, FOTOGRAFIA</div>
                <div class="row">MODELADO EN ALTO POLIGONAJE-4-3-ANIMACION Y REPRESENTACION GRAFICA</div>
            </div>
            </label>
        </div>
    </div>
    <div name="Reconocimiento CIEES">
        <div class="textTab">
            <label>
                <img src="http://www.fcfm.uanl.mx/sites/default/files/img/alumnos/0.jpg" class="imgReconocimiento"/>
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>