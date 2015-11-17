<!DOCTYPE HTML>
<html>
<head>
    <title>LCC</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <?php
    $array = ["LCC","LCC_2"];
    $num = $array[array_rand($array)];
    $file  = "../img/carrera/$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }.tabla .row{
             height:20vh !important;
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
    <div class="lName"><label>Ciencias Computacionales</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Objetivo">
        <div class="textTab">
            <label>
            <b>Objetivo</b>
            <p>Formar profesionistas dedicados al estudio y al desarrollo de las Ciencias Computacionales, que contribuyan a la investigación, innovación, creación, desarrollo e implementación de nuevas tecnologías de información y comunicaciones.</p>
            </label>
        </div>
    </div>
    <div name="Aspirante">
        <div class="textTab">
            <label>
            <b>Cualidades deseables en el aspirante a ingresar a esta carrera</b>
            <ul>
                <li>Tener interés en la ciencia y la investigación.</li>
                <li>Poseer la capacidad y habilidad para comprender, resolver y aplicar los diferentes modelos matemáticos.</li>
                <li>Tener vocación de servicio para la solución integral de los problemas de la sociedad.</li>
                <li>Tener habilidad de integrarse en trabajo en equipo interdisciplinario para hacer frente a los retos que la sociedad científica e industrial le exige como profesionista.</li>
            </ul>
            <b>Información dirigida para los aspirantes de la carrera de Licenciado en Ciencias Computacionales.</b>
            <p>Elaboró: M.T. Felipe de Jesús Rodríguez García.</p>
            <b>Los inicios </b>
            <p>Hablar de la computadora moderna implica hablar de aquellas que estuvieron equipadas principalmente con tubos al vacío, después con el tiempo aparecieron con transistores y finalmente como las conocemos hoy en día con circuitos integrados de alta densidad y que procesan información a muy altas velocidades. </p>
            <b>La computadora como herramienta para la sociedad</b>
            <p>Desde un punto de vista práctico una computadora es una herramienta que procesa información en forma de 0's y 1's para obtener un resultado específico. Este procesamiento o manipulación lo hace siguiendo un algoritmo o secuencia de instrucciones muchas veces llamada componente de software o simplemente programa. El uso de una computadora no significa estar a la moda o a la vanguardia tecnológica, sino que debe ayudarnos a resolver problemas, tomar ventaja competitiva o innovar para poder entre otras cosas, proporcionar un mejor servicio al cliente y buscar un mayor entendimiento del mismo. </p>
            <b>¿Cómo saber si la computación es parte de mi camino profesional? </b>
            <p>Una de las claves para saberlo, es respondiendo afirmativamente a cada una de las siguientes preguntas:</p>
            <ul>
                <li>¿Te llama la atención la comprensión de las matemáticas?</li>
                <li>¿Por lo general haces abstracciones; es decir, ante un problema, logras extraer sus características relevantes, para entonces darle solución?</li>
                <li>¿Te gusta analizar y sintetizar?</li>
                <li>¿Crees que seguir al pie de la letra las instrucciones para hacer algo tiene sentido?</li>
                <li>¿Producir instrucciones detalladas y precisas para que otra persona las siga es algo que te gusta?</li>
                <li>¿Disfrutarías haciendo trabajo en equipo, donde todos aporten una parte concreta y visible, y donde cada uno tiene presente el todo?</li>
            </ul>
            <p>Cualquier trabajo que se haga en la vida es el mejor si este satisface y llena de orgullo a quien lo hace. Uno de los "síntomas" de que estamos haciendo el trabajo ideal, es cuando decimos que disfrutamos lo que hacemos y además nos pagan por ello.</p><br />
            </label>
        </div>
    </div>
    <div name="Egresado">
        <div class="textTab">
            <label>
            <b>Egresado</b>
            <p>El Licenciado en Ciencias Computacionales es un profesionista competente en metodologías, técnicas y modelos matemáticos para el análisis, desarrollo y mantenimiento de tecnologías de información y comunicaciones. Además domina la estructura y los componentes de diversos métodos de investigación que permiten la evaluación del rendimiento y compatibilidad de los sistemas de cómputo. Conoce procesos administrativos y productivos de negocios, metodologías de diseño e implementación, administración de redes de comunicación y bases fundamentales del área de nanotecnología o biotecnología.</p>
            <b>Las competencias de la Formación General Universitaria se establecen como el perfil profesional necesario para la competitividad Internacional y local:</b>
            <ul>
                <li>Capacidad para un aprendizaje autónomo y continuo.</li>
                <li>Habilidades para la utilización de los diversos lenguajes: lógico, formal, matemático, icónico, verbal y no verbal.</li>
                <li>Manejo efectivo en el uso y gestión de las tecnologías de la información y la comunicación.</li>
                <li>Capacidad de comunicarse de manera apropiada en la lengua materna y en otras.</li>
                <li>Habilidades para el desarrollo de diversas expresiones del pensamiento: lógico, crítico, creativo y propósitivo.</li>
                <li>Aceptación, compromiso y respeto a la diversidad social y cultural.</li>
                <li>Compromiso profesional y humano frente a los retos de la sociedad contemporánea en lo local y global.</li>
                <li>Práctica de reflexión ética y ejercicio de los valores promovidos por la UANL, tales como: verdad, solidaridad, responsabilidad, libertad, justicia, equidad y respeto a la vida.</li>
                <li>Capacidad de un trabajo inter, multi y transdisciplinario.</li>
                <li>Habilidad para reconocer las amenazas al entorno social y ecológico desde los ámbitos profesional y humano.</li>
                <li>Habilidades para la generación y la aplicación de conocimientos.</li>
                <li>Capacidad de promover un desarrollo sustentable a través de la comprensión holística de la realidad y la planeación e implementación innovadora y creativa de soluciones.</li>
                <li>Capacidad para integrarse en situaciones sociales y profesionales cambiantes e inesperadas.</li>
            </ul>
            <b>Las competencias específicas del profesional de Licenciatura en Ciencias Computacionales son:</b>
            <ul>
                <li>Analizar procesos de negocio para determinar áreas de oportunidad y diseñar esquemas que permitan a las organizaciones ser más eficientes en dichos procesos utilizando herramientas de tecnología de información.</li>
                <li>Crear software para automatizar procesos de la organización o industria, ya sean manufactureros, financieros o comerciales, utilizando herramientas computacionales de última generación.</li>
                <li>Coordinar proyectos de desarrollo y mantenimiento de aplicaciones de TI, para verificar la correcta implementación definida en el análisis funcional, supervisando las funciones y recursos utilizados y asegurando la adecuada explotación de las aplicaciones.</li>
                <li>Evaluar nuevas tecnologías para apoyar el proceso de toma de decisiones en la alta dirección del negocio que signifiquen estar a la vanguardia tecnológica o tener ventaja competitiva dentro de la industria.</li>
                <li>Aplicar modelos matemáticos para investigar, innovar, desarrollar y patentar nuevas tecnologías computacionales en las ciencias y en el ámbito empresarial.</li>
                <li>Diseñar tecnologías de comunicación que permitan a la organización estar enlazadas de manera interna y externa, respetando los estándares internacionales recomendadas por la IEEE.</li>
                <li>Producir alternativas tecnológicas que permitan a las organizaciones estar a la vanguardia y tener ventajas competitivas que sean económicamente justificables.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <div id="main" class="tabla">
                <div class="superHead">1er Semestre</div>
                <div class="header">Créditos-Horas/semana-Requisitos</div>
                <div class="row">MATEMATICAS 1-4-3</div>
                <div class="row">MATEMATICAS 2-4-3</div>
                <div class="row">PRINCIPIOS DE ARQUITECTURA COMPUTACIONAL-2-3</div>
                <div class="row">PROGRAMACION ORIENTADA A OBJETOS-4-3</div>
                <div class="row">ADMINISTRACION-2-3</div>
                <div class="row">METODOLOGIA DE LA PROGRAMACION-2-3</div>
                <div class="row">APLICACION DE LAS TECNOLOGIAS DE INFORMACION-2-3</div>
                <div class="row">COMPETENCIA COMUNICATIVA-2-3</div>
            </div>
            <br>
            <div id="main2" class="tabla">
                <div class="superHead">2do Semestre</div>
                <div class="header">Créditos-Horas-semana-Requisitos</div>
                <div class="row">MATEMATICAS 3-4-3-MATEMATICAS 1, MATEMATICAS 2</div>
                <div class="row">MATEMATICAS 4-2-3-MATEMATICAS 2</div>
                <div class="row">FISICA-4-3-MATEMATICAS 2</div>
                <div class="row">PROGRAMACION I-4-3-PROGRAMACION ORIENTADA A OBJETOS, METODOLOGIA DE LA PROGRAMACION</div>
                <div class="row">COMPORTAMIENTO ORGANIZACIONAL-2-3-ADMINISTRACION</div>
                <div class="row">TELEINFORMATICA-4-3-PRINCIPIOS DE ARQUITECTURA COMPUTACIONAL</div>
                <div class="row">APRECIACION A LAS ARTES-2-3</div>
            </div>
            <br>
            <div id="main3" class="tabla">
                <div class="superHead">3er Semestre</div>
                <div class="header">Créditos-Horas-semana-Requisitos</div>
                <div class="row">MATEMATICAS DISCRETAS-2-3-MATEMATICAS 1, MATEMATICAS 4</div>
                <div class="row">ANALISIS DE SISTEMAS I-2-3</div>
                <div class="row">SISTEMAS ELECTRONICOS-4-3-FISICA</div>
                <div class="row">PROGRAMACION II-4-3-PROGRAMACION I</div>
                <div class="row">PROCESAMIENTO DE IMAGENES, AUDIO Y DIALOGOS-2-3</div>
                <div class="row">ESTRUCTURA DE DATOS-2-3-PROGRAMACION I</div>
                <div class="row">TEORIA DE AUTOMATAS-4-3-MATEMATICAS 4</div>
                <div class="row">TÓPICOS SELECTOS DEL DESARROLLO HUMANO, SALUD Y DEPORTE-2-3</div>
            </div>
            <br>
            <div id="main4" class="tabla">
                <div class="superHead">4to Semestre</div>
                <div class="header">Créditos-Horas-semana-Requisitos</div>
                <div class="row">ECUACIONES DIFERENCIALES-2-3-MATEMATICAS DISCRETAS</div>
                <div class="row">CIRCUITOS DIGITALES-4-3-SISTEMAS ELECTRONICOS</div>
                <div class="row">BIOINFORMATICA-4-3-ESTRUCTURA DE DATOS</div>
                <div class="row">BASE DE DATOS-4-3-ESTRUCTURA DE DATOS</div>
                <div class="row">INTERCONECTIVIDAD DE REDES-2-3-TELEINFORMATICA</div>
                <div class="row">AMBIENTE Y SUSTENTABILIDAD-2-3</div>
            </div>
            <br>
            <div id="main5" class="tabla">
                <div class="superHead">5to Semestre</div>
                <div class="header">Créditos-Horas-semana-Requisitos</div>
                <div class="row">ESTADISTICA I-4-3-ECUACIONES DIFERENCIALES</div>
                <div class="row">ANALISIS NUMERICO-2-3-ECUACIONES DIFERENCIALES</div>
                <div class="row">MICROPROCESADORES-4-3-CIRCUITOS DIGITALES</div>
                <div class="row">ARQUITECTURAS AVANZADAS DE COMPUTADORAS-2-3</div>
                <div class="row">CONTEXTO SOCIAL DE LA PROFESION-2-3</div>
            </div>
            <br>
            <div id="main6" class="tabla">
                <div class="superHead">6to Semestre</div>
                <div class="header">Créditos-Horas-semana-Requisitos</div>
                <div class="row">SISTEMAS EMBEBIDOS I-2-3-MICROPROCESADORES</div>
                <div class="row">ESTADISTICA II-4-3-ESTADISTICA I</div>
                <div class="row">SISTEMAS OPERATIVOS-2-3-MICROPROCESADORES</div>
                <div class="row">SEGURIDAD EN INFORMATICA-2-3</div>
                <div class="row">COMPETENCIA COMUNICATIVA EN INGLES-2-3</div>
                <div class="row">CULTURA REGIONAL-2-3</div>
            </div>
            <br>
            <div id="main7" class="tabla">
                <div class="superHead">7mo Semestre</div>
                <div class="header">Créditos-Horas-semana-Requisitos</div>
                <div class="row">INVESTIGACION DE OPERACIONES-2-3-ESTADISTICA II</div>
                <div class="row">RENDIMIENTO DE SISTEMAS-4-3-SISTEMAS ELECTRONICOS</div>
                <div class="row">MINERIA DE DATOS-4-3</div>
                <div class="row">ETICA SOCIEDAD Y PROFESION-2-3-ESTRUCTURA DE DATOS</div>
                <div class="row">METODOLOGIA CIENTIFICA-2-3</div>
                <div class="row">FORMACION DE EMPRENDEDORE2-3</div>
            </div>
            <br>
            <div id="main8" class="tabla">
                <div class="superHead">8vo Semestre</div>
                <div class="header">Créditos-Horas/semana-Requisitos</div>
                <div class="row">SERVICIO SOCIAL-16-20</div>
            </div>
            <br>
            <label class="optativa">Optativa</label>
            <div id="main4O" class="tabla">
                <div class="superHead">4to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">METODOLOGIAS MODERNAS DE ING. DE SOFTWARE-4-3</div>
                <div class="row">CONTABILIDAD-4-3</div>
                <div class="row">INTRODUCCION A LAS TELECOMUNICACIONES-4-3</div>
                <div class="row">MEDIOS DE TRANSMISIÓN Y NORMATIVIDAD MED-4-3</div>
                <div class="row">PRINCIPIOS DE NANOTECNOLOGÍA-4-3</div>
                <div class="row">FUNDAMENTOS DE BIOINFORMÁTICA-4-3</div>
            </div>
            <br>
            <div id="main5O" class="tabla">
                <div class="superHead">5to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">ANÁLISIS DE SISTEMAS II-4-3</div>
                <div class="row">PROGRAMACIÓN PARA APLICACIONES DE NEGOCIOS-4-3</div>
                <div class="row">FUNDAMENTOS DE ELECTROMAGNETISMO-4-3</div>
                <div class="row">SISTEMAS DE CONMUTACIÓN Y TELEFONÍA-4-3</div>
                <div class="row">LENGUAJES ENSAMBLADORES-4-3</div>
                <div class="row">ANÁLISIS DE MOVIMIENTOS NANOMÉTRICOS-4-3</div>
                <div class="row">BIOMOLÉCULAS-4-3</div>
                <div class="row">FUNDAMENTOS DE FÍSICO QUÍMICA-4-3</div>
                <div class="row">DISEÑO DE SOLUCIONES COMPUTACIONALES-4-3</div>
                <div class="row">TELECOMUNICACIONES I-3-3-LABORATORIO TELECOMUNICACIONES I</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES I-1-1-TELECOMUNICACIONES I</div>
                <div class="row">TELECOMUNICACIONES I-4-3</div>
                <div class="row">NANOTECNOLOGÍA-4-3</div>
                <div class="row">NANOBIOTECNOLOGÍA-4-3</div>
                <div class="row">MODELADO DE REQUERIMIENTOS DE NEGOCIOS-4-3</div>
            </div>
            <br>
            <div id="main6O" class="tabla">
                <div class="superHead">6to Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">SISTEMA DE ADMINISTRADOR DE BASE DE DATOS-4-3</div>
                <div class="row">ARQUITECTURA Y PROGRAMACION DE CÓMPUTO PARALELO-4-3</div>
                <div class="row">ADMINISTRACIÓN Y GESTIÓN DE REDES DE COMUNICACIÓN-4-3</div>
                <div class="row">REDES INALÁMBRICAS Y MÓVILES-4-3</div>
                <div class="row">TÓPICOS DE TECNOLOGÍAS I-4-3</div>
                <div class="row">CÁLCULOS DE NANOTECNOLOGÍA-4-3</div>
                <div class="row">INTRODUCCIÓN A LA GENÓMICA-4-3</div>
                <div class="row">TÓPICOS DE TECNOLOGÍA I-4-3</div>
                <div class="row">ADMINISTRACIÓN DE PROYECTOS DE SOFTWARE-4-3</div>
                <div class="row">TELECOMUNICACIONES II-4-3</div>
                <div class="row">NUEVOS PROYECTOS DE SOFTWARE ENFOCADOS A NANOTECNO-4-3</div>
                <div class="row">NANOQUÍMICA APLICADA A LA BIOLOGÍA-4-3</div>
                <div class="row">TELECOMUNICACIONES II-3-3-LABORATORIO TELECOMUNICACIONES I, TELECOMUNICACIONES I, LABORATORIO TELECOMUNICACIONES II</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES II-1-1-TELECOMUNICACIONES I, LABORATORIO TELECOMUNICACIONES I, TELECOMUNICACIONES II</div>
                <div class="row">COMPILADORES-4-3-TEORIA DE AUTOMATAS</div>
            </div>
            <br>
            <div id="main7O" class="tabla">
                <div class="superHead">7mo Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">SISTEMAS EMBEBIDOS II-4-3</div>
                <div class="row">SISTEMAS DISTRIBUIDOS-4-3</div>
                <div class="row">NUEVAS TECNOLOGÍAS-4-3</div>
                <div class="row">NUEVOS PARADIGMAS TECNOLÓGICOS-4-3</div>
                <div class="row">SISTEMAS DE COMUNICACIONES ÓPTICAS-4-3</div>
                <div class="row">TÓPICOS DE TECNOLOGÍAS II-4-3</div>
                <div class="row">GENÓMICA COMPARATIVA-4-3</div>
                <div class="row">ESTIMACIÓN Y PLANEACION DE SOL. COMP. B ING. DE S.-4-3</div>
                <div class="row">TELECOMUNICACIONES III-4-3</div>
                <div class="row">NUEVOS PROYECTOS DE SOFTWARE ENF. A LA NANO 2-4-3</div>
                <div class="row">NUEVOS PROYECTOS DE SOFT. ENF. A LA BIO.-4-3</div>
                <div class="row">TELECOMUNICACIONES III-4-3-TELECOMUNICACIONES II, LABORATORIO TELECOMUNICACIONES II, LABORATORIO TELECOMUNICACIONES III</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES III-4-3-TELECOMUNICACIONES II, LABORATORIO TELECOMUNICACIONES II, LABORATORIO TELECOMUNICACIONES III</div>
            </div>
            <br>
            <div id="main8O" class="tabla">
                <div class="superHead">8vo Semestre</div>
                <div class="header">-Créditos-Horas/semana-Requisitos</div>
                <div class="row">MODELO DE NEGOCIOS-4-3</div>
                <div class="row">SEMINARIO DE COMPUTACION-4-3</div>
                <div class="row">TELECOMUNICACIONES IV-4-3</div>
                <div class="row">CERTIFICACION DE TELECOMUNICACIONES-4-3</div>
                <div class="row">NUEVOS PROYECTOS DE SOFT. ENF. A LA NANO 3-4-3</div>
                <div class="row">NUEVOS PROYECTOS DE SOFTWARE ENF.A LA BIO. 2-4-3</div>
                <div class="row">SEMINARIO DE ANÁLISIS EMPRESARIAL-2-3</div>
                <div class="row">PROPIEDAD INTELECTUAL-2-3</div>
                <div class="row">TELECOMUNICACIONES IV-3-3-TELECOMUNICACIONES III, LABORATORIO TELECOMUNICACIONES III, LABORATORIO TELECOMUNICACIONES IV</div>
                <div class="row">LABORATORIO TELECOMUNICACIONES IVL-1-1-TELECOMUNICACIONES III, LABORATORIO TELECOMUNICACIONES III, LABORATORIO TELECOMUNICACIONES IV</div>
                <div class="row">SIMULACION-4-3-INVESTIGACION DE OPERACIONES</div>
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
                        <div class="row">AGUILAR DE LA ROSA MARTIN ALEJANDRO-MT</div>
                        <div class="row">AGUILAR DE LA ROSA OSCAR-M.T.</div>
                        <div class="row">AGUILERA DE LIRA LUIS UBALDO MC</div>
                        <div class="row">AGUIRRE PARRA RICARDO-M.A.</div>
                        <div class="row">BALTAZAR CRUZ IDALÍ-LIC.</div>
                        <div class="row">BERNAL CARRANZA GERARDO-LIC</div>
                        <div class="row">CAMACHO VALLEJO JOSE FERNANDO-DR.</div>
                        <div class="row">CARDENAS MUNGUIA MIGUEL ANGEL-M.T.</div>
                        <div class="row">CASTAÑEDA RODRIGUEZ DIANA-MT</div>
                        <div class="row">CASTRO MEDELLÍN REYNA GUADALUPE-LIC.</div>
                        <div class="row">CHAVEZ VALDEZ MARÍA AURORA-MC</div>
                        <div class="row">DE CASAS ORTIZ EDGAR GERARDO-DR.</div>
                        <div class="row">DE LA CRUZ SÁNCHEZ HERIBERTO NOE-ING</div>
                        <div class="row">DE LA FUENTE GARCÍA CARMEN DEL ROSARIO-M.A.</div>
                        <div class="row">DE LA GARZA OCHOA JUAN JESÚS-MT</div>
                        <div class="row">DE LA PAZ ZUÑIGA SOFÍA HERMINIA-CP</div>
                        <div class="row">ELIZONDO ESPINOZA CARLOS-ING</div>
                        <div class="row">GARZA GONZÁLEZ IRMA LETICIA-M.I.A.</div>
                        <div class="row">GIL GONZÁLEZ ALEIDA MAGDALENA-MA</div>
                        <div class="row">GONZÁLEZ CERVANTES JULIO CÉSAR-ING.</div>
                        <div class="row">GRACIA PINILLA MIGUEL ÁNGEL-DR</div>
                        <div class="row">HERNÁNDEZ BAEZ JORGE-MT</div>
                        <div class="row">HERNÁNDEZ CABRERA FRANCISCO-MC</div>
                        <div class="row">ILDUSOVICH KHARISSOV BORIS-DR.</div>
                        <div class="row">ISLAS PINEDA JORGE ALBERTO-M.C.</div>
                        <div class="row">JASSO GONZÁLEZ HERNÁN EVELIO-LIC.</div>
                        <div class="row">JUÁREZ AGUILAR MARÍA LUISA-MT</div>
                        <div class="row">LEDEZMA MARTÍNEZ MARTHA-M. A.</div>
                        <div class="row">LOYOLA RODRÍGUEZ JOSÉ APOLINAR-MT</div>
                        <div class="row">LUCAS FLORES OSIEL-M.C.</div>
                        <div class="row">LUNA CRIADO CARLOS-DR.</div>
                        <div class="row">MARTÍNEZ CEJUDO MARIA DEL CARMEN-MA</div>
                        <div class="row">MARTÍNEZ HUERTA ATILANO-MT</div>
                        <div class="row">MARTÍNEZ MORENO PATRICIA-M.A.</div>
                        <div class="row">MEDINA MORON EDNA MARÍA-M.A.</div>
                        <div class="row">OCHOA OLIVA MARÍA DE JESÚS ANTONIA-M.T</div>
                        <div class="row">RAMÍREZ GRANADOS AURELIO-MC</div>
                        <div class="row">RAMíREZ TAMARIZ JUAN ÁNGEL-MC</div>
                        <div class="row">RECIO CANTÚ JOSÉ OSCAR-ING.</div>
                        <div class="row">REYES BARRERA GILBERTO-MSI</div>
                        <div class="row">REYES MARTÍNEZ ÁLVARO-MC</div>
                        <div class="row">RÍOS CARO ADRIAN-LIC</div>
                        <div class="row">RODRÍGUEZ ALCORTA SILVERIO-ING.</div>
                        <div class="row">RODRÍGUEZ GARCÍA FELIPE DE JESÚS-MT</div>
                        <div class="row">SALAS CORDOBA DANIEL ALEJANDRO-LIC</div>
                        <div class="row">SALINAS MATA RENÉ AURELIANO-ING</div>
                        <div class="row">SELVAS AGUILAR ROMEO-DR.</div>
                        <div class="row">SEPÚLVEDA GUERRERO RENE GASPAR-ING.</div>
                        <div class="row">SEPÚLVEDA GUERRERO ROGELIO JUVENAL-MT</div>
                        <div class="row">SOLÍS BARBOSA MARTHA GUADALUPE-MA</div>
                        <div class="row">SOLÍS VALENZUELA ERNESTO JESÚS-MIA</div>
                        <div class="row">TORRES CASTILLO FERNANDO-DR.</div>
                        <div class="row">TORRES PÉREZ JUAN CARLOS-LIC.</div>
                        <div class="row">VALDES MACÍAS GERARDO MANUEL-MT</div>
                        <div class="row">VARGAS ZÚÑIGA MIRIAM PATRICIA-MT</div>
                        <div class="row">VASILIEVNA KHARISSOVA OXANA-DRA. </div>
                        <div class="row">VAZQUEZ NIEBLA JOSÉ LUIS-ING</div>
                        <div class="row">VERA LOZANO MATEO VALDEMAR-M. A.</div>
                </div>
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>