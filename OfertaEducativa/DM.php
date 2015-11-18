<!DOCTYPE HTML>
<html>
<head>
    <title>DM</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/DM.css" rel="stylesheet">
    <?php
    $array = ['','_2'];
    $num = $array[array_rand($array)];
    $file  = "../img/posgrado/DM$num.jpg";
    ?>
    <style>
        #banner>.frame{
            background-image: url("<?php echo $file ?>");
        }
        .tabla .row{
             height:15vh !important;
         }
        .tab[name="Plan de estudios"] {
            overflow-x:auto;
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
    <div class="lName"><label>Doctorado en Matematicas</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Descripcion">
        <div class="textTab">
            <label>
            <b>Líneas de especialidad en Matemáticas Aplicadas.</b>
            <p>“La matemática profundiza el conocimiento en todas las ramas de la ciencia y permite abrir el camino a las nuevas tecnologías”</p>
            <b>DESCRIPCIÓN DEL PROGRAMA</b>
            <p>El programa de Doctorado en Ciencias con Orientación en Matemáticas es un posgrado orientado a la investigación e inició actividades en agosto de 2010 bajo la modalidad escolarizada o presencial semestral. Actualmente se tienen tres líneas de investigación en las cuales se realiza investigación:</p>
            <ul>
                <li>Métodos Matemáticos de Control</li>
                <li>Optimización</li>
                <li>Modelado Matemático</li>
            </ul>
            <b>¿POR QUÉ ESTUDIAR UN POSGRADO EN MATEMÁTICAS?</b>
            <p>El incremento en el poder de cómputo aunado a la necesidad de competir en un mundo globalizado, ha permitido que nuevas teorías y herramientas matemáticas se apliquen de forma efectiva en la solución de problemas reales en todas las áreas de formas que hace pocos años eran imposibles.</p>
            <p>“La matemática ofrece un poder y flexibilidad únicos para explotar las oportunidades de innovación en un amplio espectro en industria y sociedad. Su uso será crucial para lograr la ambición de la Unión Europea de convertirse en la economía basada en conocimiento más dinámica del mundo.” Unleashing Mathematics, NETIAM. Smith Institute, England. 2006</p>
            <p>“Los que tengan maestría y doctorado con conocimientos sólidos en matemáticas y una disciplina relacionada como ciencias computacionales o ingeniería y puedan aplicar la teoría matemática a problemas del mundo real, tendrán las mejores propuestas de trabajo en ocupaciones relacionadas.” Occupational Outlook Handbook,Bureau of Labor Statistics, USA. 2008-2009</p>
            </label>
        </div>
    </div>
    <div name="Objetivos">
        <div class="textTab">
            <label>
            <b>OBJETIVOS DEL PROGRAMA</b>
            <b>OBJETIVOS GENERALES</b>
            <p>Formar egresados con las bases solidas de Matemáticas necesarias para el modelado/solución de problemas reales y el desarrollo de nuevas tecnologías. Será capaz de trabajar en proyectos con profesionales del sector privado y público, en problemas empresariales, industriales, científicos o sociales. Tendrá la habilidad de utilizar la tecnología computacional y será propulsor de la investigación y desarrollo tecnológico en colaboración con equipos multidisciplinarios.</p>
            <b>OBJETIVOS PARTICULARES </b>
            <p>Que los egresados sean expertos en alguna de nuestras líneas de investigación (Métodos matemáticos de control, Optimización, Modelado Matemático). Además que sean capaces de participar en grupos de investigación en el sector público o privado. Por último, que sean reconocidos por sus resultados ante la comunidad científica nacional e internacional.</p>
            </label>
        </div>
    </div>
    <div name="Requisitos">
        <div class="textTab">
            <label>
            <b>Requisitos de Admisión</b>
            <ul>
                <li>Egresado de maestrías afines a matemáticas (ciencias, ingenierías, economía, etc.).</li>
                <li>Dos cartas de recomendación.</li>
                <li>Propuesta escrita de proyecto doctoral</li>
                <li>Promedio general no menor a 80 en el último grado de estudios.</li>
                <li>Obtener puntaje mínimo requerido en los exámenes de conocimientos generales y de ingles (EXANI III, EXCI).</li>
                <li>Presentar examen de conocimientos en matemáticas para la admisión al Posgrado y realizar entrevista con el comité de admisiones del Programa.</li>
                <li>Carta de motivos por los que desea ingresar.</li>
            </ul>
            <b>Requisitos de Permanencia</b>
            <ul>
                <li>Aprobar los cursos con calificación mínima de 80.</li>
                <li>No reprobar más de una materia.</li>
                <li>Realizar trámites administrativos.</li>
                <li>Entrevistarse con el Comité de Reingreso del Doctorado en Ciencias con Orientación en Matemáticas cada año, preparando una presentación de sus avances, tanto en cursos como en investigación.</li>
                <li>Los establecidos en el Reglamento General de Estudios de Posgrado de la UANL (RGEP-UANL) y por el Reglamento Interno de la FCFM.</li>
            </ul>
            <b>Requisitos de Egreso</b>
            <ul>
                <li>Haber obtenido el total de créditos establecido en el Reglamento General de Estudios de Posgrado de la UANL.</li>
                <li>Todas las materias aprobadas con calificación mínima de 80</li>
                <li>Haber concluido su trabajo de tesis, realizar la pre-defensa, defensa y ser aprobado.</li>
                <li>Un artículo aceptado para su publicación en revista indexada por JCR.</li>
                <li>Participación en congreso Internacional con idioma inglés.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="textTab">
            <label>
            <img src="http://www.fcfm.uanl.mx/sites/default/files/img/noticiasPosgrado/Diapositiva1.JPG" />
            <img src="http://www.fcfm.uanl.mx/sites/default/files/img/noticiasPosgrado/Diapositiva2.JPG" />
            </label>
            <br />
        </div>
    </div>
    <div name="Estudiantes">
        <div class="textTab">
            <label>
            <b>Estudiantes</b>
            <img  src="./rsc/estudiantesDM.jpg" />
            </label>
        </div>
    </div>
    <div name="Egresados">
        <div class="textTab">
            <label>
            <b>Egresados</b>
            <img  src="./rsc/egresadosDM.jpg" />
            </label>
        </div>
    </div>
    <div name="Profesores">
        <div class="textTab">
            <label>
            <b>Profesores</b>
            <img src="./rsc/profesoresDM.jpg" />
            </label>
        </div>
    </div>
    <div name="Colaboradores">
        <div class="textTab">
            <label>
            <b>Colaboradores</b>
            <p>Algunos de los investigadores que colaboran activamente con el PCOM son:</p>
            <ul>
                <li>Dr. Rolando Cavazos Cadena, Universidad Autónoma Agraria Antonio Narro.</li>
                <li>Dr. Elifalet López González, Universidad Autónoma de Ciudad Juárez.</li>
                <li>Dr. Cesar Emilio Villarreal Rodríguez, FIME UANL.</li>
                <li>Dr. José Luis González Velarde, ITESM campus Monterrey.</li>
                <li>Dra. Jana Ries, University of Portsmouth, United Kingdom.</li>
                <li>Dr. Vyacheslav Kalashnikov, ITESM campus Monterrey.</li>
                <li>Dra. Rosa González, Pontificia Universidad Católica de Valparaíso, Chile.</li>
                <li>Dra. Graciela González Farías, CIMAT Unidad Monterrey.</li>
                <li>Dr. William J. Conover, Texas Tech University, EU.</li>
                <li>Dra. María del Carmen Temblador Pérez, ITESM campus Monterrey.</li>
                <li>Dr. Victor Gustavo Tercero Gómez, ITESM campus Monterrey.</li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Estadísticas del Programa">
        <div class="textTab">
            <label>
            <b>Estadisticas del Programa</b>
            <p>Tabla de estudiantes del Doctorado en Ciencias con Orientación en Matemáticas. </p>
            <img style= "width:60%; height: 50%;" src="./rsc/estadisticasDM.jpg" />
            </label>
        </div>
    </div>
    <div name="Productividad Académica">
        <div class="textTab">
            <label>
            <b>Productividad Académica del Programa</b>
            <p>A continuación se enlistan de los artículos indexados en el JCR y en el padrón de revistas mexicanas reconocidas por CONACYT. La información aquí presentada muestra la producción desde el año 2010, fecha en que comenzó actividades el Posgrado en Ciencias con Orientación en Matemáticas, hasta el presente año.</p>
            </label>
        </div>
    </div>
    <div name="Cuerpos Académicos">
        <div class="textTab">
            <label>
            <b>Cuerpos Académicos</b>
            <p>Actualmente existen tres Cuerpos Académicos directamente ligados con el PCOM. Los tres Cuerpos Académicos impactan en las LGAC que se trabajan en el PCOM y están conformados en su mayoría por profesores del Núcleo Académico Básico de nuestro Posgrado.</p>
            <ul>
                <li><b>Cuerpo Académico de Matemáticas Aplicadas</b></li>
                <li>
                    <ul>
                        <li>María Aracelia Alcorta García (Responsable)</li>
                        <li>Alfredo Alanís Durán</li>
                        <li>José Paz Pérez Padrón</li>
                        <li>Joel Pérez Padrón</li>
                    </ul>
                </li>
                <li>Cuerpo Académico de Programación Binivel y Estadística Aplicada</li>
                <li>
                    <ul>
                        <li>José Fernando Camacho Vallejo (Responsable)</li>
                        <li>Álvaro Eduardo Cordero Franco</li>
                        <li>Ángel Salvador Pérez Blanco</li>
                        <li>Nataliya Kalashnikova</li>
                        <li>Víctor Gustavo Tercero Gómez</li>
                    </ul>
                </li>
                <li>Cuerpo Académico de Sistemas Complejos: Teoría y Simulación</li>
                <li>
                    <ul>
                        <li>Omar González Amezcua (Responsable)</li>
                        <li>Francisco Javier Almaguer Martínez</li>
                        <li>Héctor Raymundo Flores Cantú</li>
                        <li>Roberto Soto Villalobos</li>
                        <li>Javier Morales Castillo</li>
                    </ul>
                </li>
            </ul>
            </label>
        </div>
    </div>
    <div name="Vinculación">
        <div class="textTab">
            <label>
            <b>Vinculación</b>
            <b>Empresas privadas</b>
            <ul>
                <li>Bioestadística, S.C.</li>
                <li>CDM Desarrollo Avanzado, S.A. de C.V.</li>
                <li>Grupo Peñoles, S.A. de C.V.</li>
                <li>Intercovamex, S.A. de C.V.</li>
                <li>Magnekon, S.A. de C.V.</li>
                <li>MCS Network Solution, S.A. de C.V.</li>
                <li>MOTOROLA de México, S.A. de C.V.</li>
                <li>Pensamiento y Modelos Aplicados, S.A. de C.V.</li>
                <li>Proyectos PPMQ de México, S.A. de C.V.</li>
            </ul>
            <b>Centros de investigación</b>
            <ul>
                <li>Centro de Investigación en Matemáticas, A.C.</li>
            </ul>
            <b>Instituciones</b>
            <ul>
                <li>Consejo de Ciencia y Tecnología del Estado de Nuevo León</li>
                <li>Instituto de Innovación y Transparencia de Tecnología.</li>
            </ul>
            <b>Cuerpos académicos</b>
            <ul>
                <li>Cuerpo Académico del Servicio de Cardiología, Facultad de Mecidina, UANL.</li>
                <li>Cuerpo Académico Aprendizaje, Sinergética y Optimización, Facultad de Ingeniería Mecánica y Eléctrica, UANL.</li>
                <li>Cuerpo Académico Automatización y Control, Facultad de Ingeniería Mecánica y Eléctrica, UANL.</li>
            </ul>
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
            <p>La informacion referente a fechas, plazos y procedimientos se pueden encontrar en la siguiente liga: http://www.fcfm.uanl.mx/es/Posgrado/Posgrado</p>
            <p>La parte académica se trata en la coordinación del Posgrado en Ciencias con Orientación en Matemáticas.</p>
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>