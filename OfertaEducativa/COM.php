<!DOCTYPE HTML>
<html>
<head>
    <title>COM</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <?php
    $array = ['','_2'];
    $num = $array[array_rand($array)];
    $file  = "../img/posgrado/COM$num.jpg";
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
    <div class="lName"><label>Ciencias con Orientacion en Matematicas</label></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="Descripcion">
        <div class="textTab">
            <label>
                <b>Líneas de especialidad en Matemáticas Aplicadas</b>
                <p>“La matemática profundiza el conocimiento en todas las ramas de la ciencia y permite abrir el camino a las nuevas tecnologías”</p>
                <b>DESCRIPCIÓN DEL PROGRAMA</b>
                <p>El programa de Maestría en Ciencias con Orientación en  Matemáticas es un posgrado orientado a la investigación e inició actividades en agosto de 2010 bajo la modalidad escolarizada o presencial semestral. Actualmente se tienen tres líneas de investigación en las cuales se realiza investigación:</p>
                <div class="staticT">
                    <div class="row">Métodos Matemáticos de Control</div>
                    <div class="row">Optimización</div>
                    <div class="row">Modelado Matemático</div>
                </div>
                <b>¿POR QUÉ ESTUDIAR UN POSGRADO EN MATEMÁTICAS?</b>
                <p>El incremento en el poder de cómputo aunado a la necesidad de competir en un mundo globalizado, ha permitido que nuevas teorías y herramientas matemáticas se apliquen de forma efectiva en la solución de problemas reales en todas las áreas de formas que hace pocos años eran imposibles.</p>
                <p>“La matemática ofrece un poder y flexibilidad únicos para explotar las oportunidades de innovación en un amplio espectro en industria y sociedad. Su uso será crucial para lograr la ambición de la Unión Europea de convertirse en la economía basada en conocimiento más dinámica del mundo.” Unleashing Mathematics, NETIAM. Smith Institute, England. 2006·"</p>
                <p>“Los que tengan maestría y doctorado con conocimientos sólidos en matemáticas y una disciplina relacionada como ciencias computacionales o ingeniería y puedan aplicar la teoría matemática a problemas del mundo real, tendrán las mejores propuestas de trabajo en ocupaciones relacionadas.” Occupational Outlook Handbook,Bureau of Labor Statistics, USA. 2008<>2009</p>
                <p>Coordinador del Posgrado en Ciencias con Orientación en Matemáticas</p>
                <p>Tel. 83 29 40 30, ext. 7125</p>
                <p>Dr. José Fernando Camacho Vallejo</p>
                <p>Correo: jose.camachovl@uanl.edu.mx</p>
                <br />
            </label>
        </div>
    </div>
    <div name="Objetivo">
        <div class="textTab">
            <label>
                <b>OBJETIVOS GENERALES</b>
                <p>Formar egresados con las bases sólidas de matemáticas necesarias para el modelado/solución de problemas reales. Será capaz de trabajar en proyectos con profesionales del sector privado y público, en problemas empresariales, industriales, científicos o sociales. Tendrá la habilidad de utilizar a tecnología computacional en el análisis de estos problemas y de colaborar con equipos multidisciplinarios.</p>
                <b>OBJETIVOS PARTICULARES</b>
                <p>Que los egresados sean expertos en alguna de nuestras líneas de investigación (Métodos matemáticos de control, Optimización, Modelado Matemático). Además que sean capaces de participar en grupos de investigación en el sector público o privado. Por último, que sean reconocidos por sus resultados ante la comunidad científica nacional e internacional.</p>
            </label>
        </div>
    </div>
    <div name="Requisitos">
        <div class="textTab">
            <label>
                <b>REQUISITOS DE ADMISIÓN</b>
                <div class="staticT">
                    <div class="row">Tener grado de Licenciatura o ser pasante. Si se es pasante, deberá de presentar el examen profesional en un período no mayor a un año.</div>
                    <div class="row">Presentar kardex de estudios anteriores con promedio final no menor de 80.</div>
                    <div class="row">Llenar y entregar solicitud en el Departamento Escolar de la Facultad</div>
                    <div class="row">Realizar el pago correspondiente en Tesorería de la UANL y en Tesorería de la Facultad.</div>
                    <div class="row">Cumplir con los requisitos del Departamento escolar y de Archivo y Dirección General de Estudios de Posgrado.</div>
                    <div class="row">Presentar el examen de conocimientos generales (CENEVAL) establecido por la UANL.</div>
                    <div class="row">Presentar el examen de conocimientos del idioma inglés (EXCI) establecido por la UANL.</div>
                    <div class="row">Realizar una prueba de perfil psicológico en el Departamento de Psicología de la Facultad de Ciencias Físico Matemáticas.</div>
                    <div class="row">Presentar un examen de conocimientos en Matemáticas elaborado por el Posgrado en Ciencias con Orientación en Matemáticas</div>
                    <div class="row">Aprobar cursos propedéuticos determinados por el Comité de Ingreso.</div>
                    <div class="row">Presentar carta de motivos en la cual se expongan las razones por las que desea ingresar a la Maestría en Ciencias con Orientación en Matemáticas.</div>
                    <div class="row">Presentar Curriculum Vitae por escrito.</div>
                    <div class="row">Dos cartas de recomendación académicas o profesionales.</div>
                </div>
                <b>REQUISITOS DE PERMANENCIA</b>
                <p>Los requisitos de permanencia en la Maestría en Ciencias con orientación en Matemáticas son establecidos en el Capítulo VII del Reglamento General de Estudios de Posgrado de la UANL (RGEP UANL) y por el reglamento interno de la FCFM. En nuestro programa, se consideran además los siguientes.</p>
                <div class="staticT">
                    <div class="row">Aprobar los cursos con calificación mínima de 80.</div>
                    <div class="row">No reprobar más de una materia.</div>
                    <div class="row">Realizar trámites administrativos.</div>
                    <div class="row">Entrevistarse con el Comité de Reingreso del Posgrado en Ciencias con Orientación en Matemáticas al término del primer año, preparando una presentación de sus avances, tanto en cursos como en investigación.</div>
                </div>
                <b>REQUISITOS DE EGRESO</b>
                <div class="staticT">
                    <div class="row">Haber obtenido el total de créditos establecido en el Reglamento General de Estudios de Posgrado de la UANL.</div>
                    <div class="row">Todas las materias aprobadas con calificación mínima de 80.</div>
                    <div class="row">Haber concluido su trabajo de tesis, realizar la predefensa, defensa y ser aprobado.</div>
                    <div class="row">Haber concluido su trabajo de tesis, realizar la predefensa, defensa y ser aprobado.</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Plan de estudios">
        <div class="COMContainer">
            <img src="http://www.fcfm.uanl.mx/sites/default/files/img/noticiasPosgrado/mcom1.png"/>
            <img src="http://www.fcfm.uanl.mx/sites/default/files/img/noticiasPosgrado/mcom2.png" />
        </div>
    </div>
    <div name="Asesores">
        <div class="textTab">
            <label>
                <b>Asesores</b>
                <p>La siguiente tabla muestra la relación de cada alumno de la MCOM con sus respectivos asesores para su trabajo de investigación.</p>
                <img src="./rsc/asesores.jpg"/>
            </label>
        </div>
    </div>
    <div name="Egresado">
        <div class="textTab">
            <label>
                <b>Egresados</b>
                <img src="./rsc/egresados.jpg" />
            </label>
        </div>
    </div>
    <div name="Profesores">
        <div class="textTab">
            <label>
                <b>Profesores</b>
                <img src="./rsc/profesores.jpg" />
            </label>
        </div>
    </div>
    <div name="Colaboradores">
        <div class="textTab">
            <label>
                <b>Colaboradores</b>
                <p>Algunos de los investigadores que colaboran activamente con el PCOM son:</p>
                <div class="staticT">
                    <div class="row">Dr. Rolando Cavazos Cadena, Universidad Autónoma Agraria Antonio Narro.</div>
                    <div class="row">Dr. Elifalet López González, Universidad Autónoma de Ciudad Juárez.</div>
                    <div class="row">Dr. Cesar Emilio Villarreal Rodríguez, FIME UANL.</div>
                    <div class="row">Dr. José Luis González Velarde, ITESM campus Monterrey.</div>
                    <div class="row">Dra. Jana Ries, University of Portsmouth, United Kingdom.</div>
                    <div class="row">Dr. Vyacheslav Kalashnikov, ITESM campus Monterrey.</div>
                    <div class="row">Dra. Rosa González, Pontificia Universidad Católica de Valparaíso, Chile.</div>
                    <div class="row">Dra. Graciela González Farías, CIMAT Unidad Monterrey.</div>
                    <div class="row">Dr. William J. Conover, Texas Tech University, EU.</div>
                    <div class="row">Dra. María del Carmen Temblador Pérez, ITESM campus Monterrey.</div>
                    <div class="row">Dr. Victor Gustavo Tercero Gómez, ITESM campus Monterrey.</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Estadísticas del Programa">
        <div class="textTab">
            <label>
                <b>Estadísticas del Programa</b>
                <p>Tabla de estudiantes de la Maestría en Ciencias con Orientación en Matemáticas. </p>
                <img src="./rsc/estadisticas.jpg" />
            </label>
        </div>
    </div>
    <div name="Cuerpos Académicos">
        <div class="textTab">
            <label>
            Actualmente existen tres Cuerpos Académicos directamente ligados con el PCOM. Los tres Cuerpos Académicos impactan en las LGAC que se trabajan en el PCOM y están conformados en su mayoría por profesores del Núcleo Académico Básico de nuestro Posgrado.
            <ul>
                <li><b>Académico de Matemáticas Aplicadas</b></li>
                <ul>
                    <li>María Aracelia Alcorta García (Responsable)</li>
                    <li>Alfredo Alanís Durán</li>
                    <li>José Paz Pérez Padrón</li>
                    <li>Joel Pérez Padrón</li>
                </ul><br>
                <li><b>Cuerpo Académico de Programación Binivel y Estadística Aplicada</b></li>
                <ul>
                    <li>José Fernando Camacho Vallejo (Responsable)</li>
                    <li>Álvaro Eduardo Cordero Franco</li>
                    <li>Ángel Salvador Pérez Blanco</li>
                    <li>Nataliya Kalashnikova</li>
                    <li>Víctor Gustavo Tercero Gómez</li>
                </ul><br />
                <li><b>Cuerpo Académico de Sistemas Complejos: Teoría y Simulación</b></li>
                <ul>
                    <li>José Fernando Camacho Vallejo (Responsable)</li>
                    <li>Álvaro Eduardo Cordero Franco</li>
                    <li>Ángel Salvador Pérez Blanco</li>
                    <li>Nataliya Kalashnikova</li>
                    <li>Víctor Gustavo Tercero Gómez</li>
                </ul>
            </ul>
            </label>
        </div>
    </div>
    <div name="Vinculación">
        <div class="textTab">
            <label>
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
                    <li>Srita. Lalis Lara, Secretaria matutina de apoyo al Posgrado de la FCFM</li>
                    <li>Srita. Rosy Sánchez, Secretaria vespertina de apoyo al Posgrado de la FCFM</li>
                </ul>
                <p>La informacion referente a fechas, plazos y procedimientos se pueden encontrar en la siguiente liga: http://www.fcfm.uanl.mx/es/Posgrado/Posgrado</p>
                <p>a parte académica se trata en la coordinación del Posgrado en Ciencias con Orientación en Matemáticas.</p>
            </label>
        </div>
    </div>
</div>

<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>