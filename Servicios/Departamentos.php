<!DOCTYPE HTML>
<html>
<head>
    <title>Departamentos</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/Departamentos.css" rel="stylesheet">
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
        .tab[name="Escolar"] .staticT .row{
            height:10vh !important;
        }
        .tab[name="Biblioteca"] .staticT .row{
            height:7vh !important;
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
    <div name="Escolar">
        <div class="textTab">
            <label>
                <b>Escolar</b>
                <div class="staticT">
                    <div class="superHead">Objetivos</div>
                    <div class="row">Proporcionar  a la comunidad estudiantil, académica y público en general  una atención oportuna, de calidad y calidez que le deje satisfecho con el servicio y atención recibidos.</div>
                    <div class="row">Desarrollar, integrar, innovar, simplificar, mantener y cooperar con otros departamentos para llevar a cabo los procesos establecidos en el Sistema de la Gestión de la Calidad ISO 9001 2000 de manera satisfactoria así como participar activamente en la Planeación Estratégica de la Fac. de Ciencias Físico Matemáticas.</div>
                    <div class="row">Desarrollar, integrar, innovar, simplificar y mantener los procesos establecidos en el Sistema de la Gestión de la Calidad ISO 9001 2000 referentes al  Manual de Operación del Departamento Escolar de manera satisfactoria.</div>
                    <div class="row">Actualizar y capacitar de manera continua al personal del Dpto. Escolar en aspectos tecnológicos, de trabajo en equipo, atención al cliente y superación personal.</div>
                    <div class="row">Fortalecer los vínculos de comunicación y coordinación con otras áreas y/o Departamentos dentro y fuera de la FCFM, particularmente con el Dpto. Escolar y Archivo de la UANL.</div>
                </div>
                <b>Horario de atención</b>
                De lunes a viernes de 8:00 a 20:00 hrs.
                <b>Servicios</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="row">Atención en ventanilla, teléfono y/o medios electrónicos de las solicitudes de información referentes a la FCFM y/o UANL.</div>
                    <div class="row">Proveer la logística y su operación para la aplicación del  examen de concurso de primer ingreso a la FCFM.</div>
                    <div class="row">Capturar los horarios de clase para permitir el proceso de inscripción de reingreso y nuevo ingreso, así como los cambios de horario posteriores.</div>
                    <div class="row">Emisión de papelería oficial requerida por alumnos y/o maestros comprobatorios de sus actividades y/o status dentro de la FCFM.</div>
                    <div class="row">Proporcionar información oficial requerida por otros Dptos. de la FCFM y/o de la UANL.</div>
                    <div class="row">Proporcionar el servicio de trámite de titulación a los alumnos egresados de la FCFM.</div>
                    <div class="row">Proporcionar trámite para “BAJA VOLUNTARIA CON DERECHO” a los alumnos inscritos en la FCFM.</div>
                    <div class="row">Proveer a los estudiantes con la información necesaria para que realicen su Regularización y, si es el caso, llevarla a cabo a expresa solicitud.</div>
                    <div class="row">Realizar las actividades pertinentes para que los alumnos de Postgrado realicen su inscripción o reinscripción.</div>
                    <div class="row">A solicitud del interesado, proporcionar el trámite de examen de grado solo en caso de Posgrado.</div>
                    <div class="row">Apoyar para la inscripción a los periodos intersemestrales.</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Tesoreria">
        <div class="textTab">
            <label>
                <b>Objetivo</b>
                Registro y control de los ingresos y egresos de la Dependencia conforme a las disposiciones establecidas en la UANL.
                <div class="staticT">
                    <div class="superHead">Colaboradores</div>
                    <div class="row">C.P. Victor Hugo Hernández Ávalos</div>
                    <div class="row">Teresa Escalante González</div>
                    <div class="row">Mariaan Arlae Torres Rodríguez</div>
                    <div class="row">Brenda Perales Mendoza</div>
                    <div class="row">Sofia Esmeralda Diego Zenteno</div>
                    <div class="row">Diana Gabriela Camarillo Guajardo</div>
                    <div class="row">Mayra Alejandra Rodriguez</div>
                </div>
                <b>Horario de Ventanilla</b>
                De lunes a viernes 8:30 a 14:30 hrs. y de 15:00 a 20:00 hrs.
                <b>Servicios</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="row">Recepción de Cobros</div>
                    <div class="row">Trámite de Facturas</div>
                    <div class="row">Atención a Clientes</div>
                    <div class="row">Pago a Proveedores</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Biblioteca">
        <div class="textTab">
            <label>
                <b>Antecedentes</b>
                La Biblioteca de la Facultad de Ciencias Físico-Matemáticas inició sus actividades en el año de 1959, con un donativo de libros y revistas por parte del Ing. José Treviño García. Desde entonces ha otorgado sus servicios a alumnos, maestros e investigadores de la Facultad.
                <div class="staticT">
                    <div class="superHead">Areas</div>
                    <div class="row">Consulta: enciclopedias, diccionarios, manuales, materiales en reserva, etc.</div>
                    <div class="row">Tesis: en las áreas de Física, Matemáticas y Computación.</div>
                    <div class="row">Acervo Bibliográfico: en Física, Matemáticas, Computación, Culturales, Administración, etc., así como Publicaciones Periódicas.</div>
                </div>
                <b>Objetivo</b>
                Proveer servicios bibliotecarios y de información con calidad a la comunidad universitaria, así como garantizar la preservación de los materiales bibliográficos y fortalecer la iniciativa de investigación y crítica literaria.
                <b>Servicios</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="row">Préstamo en Sala</div>
                    <div class="row">Préstamo a Domicilio</div>
                    <div class="row">Préstamo a Copias</div>
                    <div class="row">Préstamo Interbibliotecario</div>
                </div>
            </label>
        </div>
    </div>
    <div name="CAADI">
        <div class="textTab">
            <label>
                <b>CAADI</b>
                Es el Centro de Auto-Aprendizaje de Inglés de la Facultad de Ciencias Físico Matemáticas, que abre sus puertas a estudiantes universitarios y público en general, para brindarles la oportunidad de aprender este idioma combinando tecnología de vanguardia, material de apoyo y horarios accesibles.
                Dado el proceso de globalización mundial que vive nuestro país, la comunicación en inglés se ha vuelto indispensable en todos los ámbitos: laboral, de estudio, negocios, viajes, etc.
                <b>Objetivo</b>
                Brindar las herramientas necesarias para el aprendizaje y reforzamiento del idioma inglés, desarrollando las habilidades de las personas, combinando tecnología de vanguardia, material de apoyo y horarios accesibles.
                <b>Servicios</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="header">Tipo-Niveles-Horario</div>
                    <div class="row">Niños-6-3 horas/clase por semana</div>
                    <div class="row">Adolescentes-4-3 horas/clase por semana</div>
                    <div class="row">Adultos-5-3 horas/clase por semana</div>
                    <div class="row">Adultos-5-Disponibilidad de tiempo y horario</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Sociedad de alumnos">
        <div class="textTab">
            <label>
                <b>Misión</b>
                Ser un vínculo entre el alumno de la Facultad de Ciencias Físico Matemáticas y la dirección de la misma, así como ante el Honorable Consejo Universitario de la UANL. Además ser un factor colaborativo ante el crecimiento de nuestra facultad y la comunidad estudiantil.
                <b>Visión</b>
                Ser un agente de cambio dentro de nuestra Facultad para continuar siendo una institución de respeto, haciendo de cada alumno un digno representante de los valores y enseñanzas que la Facultad de Ciencias Físico Matemáticas imparte.
                <b>Ubicación</b>
                La oficina de la sociedad de alumnos está ubicada en el 2do. piso de la facultad junto al centro de copiado.
                <br>
                <br>
                Presidente de Sociedad de Alumnos FCFM<br>
                Monserrat León Duriez<br>
                Telefono: 8329-4030 ext. 6121
            </label>
        </div>
    </div>
    <div name="Astronomia">
        <div class="textTab">
            <label>
                <b>Astronomía</b>
                El Departamento de Astronomía FCFM UANL es un grupo académico en desarrollo, cuenta con una trayectoria de 13 años realizando divulgación de la Astronomía a la comunidad en general así como también la realización de diversos proyectos académicos y de investigación media superior.
                Para cualquier información, dirigirse al Departamento de Astronomía ubicado en el tercer piso del edificio principal, con Esteban Castro Acuña.
            </label>
        </div>
    </div>
    <div name="Deportivo">
        <div class="textTab">
            <label>
                <b>Objetivo</b>
                El objetivo del Departamento Deportivo de nuestra Facultad es el coadyuvar a la formación de nuestros estudiantes mediante el desarrollo de capacidades físicas, así como el desarrollo de habilidades profesionales como  trabajo en equipo, competencia, liderazgo, y toma de decisiones.
                La formación de estas cualidades son necesarias para el profesionista del nuevo siglo por lo cual te invitamos a que participes de nuestras actividades y llegues a ser un auténtico BISONTE FCFM.
                <b>Colaboradores</b>
                <div class="staticT">
                    <div class="superHead">Colaboradores</div>
                    <div class="header">Cargo-Nombre</div>
                    <div class="row">Coordinador del Deportivo-Agustín Flores Almaraz</div>
                    <div class="row">Entrenador de Basquetbol-Luis Alejandro Villalobos</div>
                    <div class="row">Entrenador de Voleibol-Edgar García Hernández</div>
                    <div class="row">Entrenador de Tae Kwon Do-Iván Jiménez García</div>
                    <div class="row">Entrenador de Futbol Soccer-Juan Francisco Rangel Juárez</div>
                    <div class="row">Entrenador de Tenis de Mesa-Juan Francisco Cuestas López</div>
                    <div class="row">Entrenador en jefe  de Futbol Americano-Manir González Mandujano</div>
                    <div class="row">Entrenador de Tochito-Jorge Omar Rodríguez Trujillo</div>
                    <div class="row">Entrenador de Handball-Carlos Alberto Urbano García</div>
                    <div class="row">Entrenador de Ajedrez-Vanessa Yasmin Villanueva de León</div>
                </div>
                <b>Servicios</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="row">Formación de equipos representativos para los torneos Intrauniversitarios.</div>
                    <div class="row">Torneos Interiores para convivir con tus compañeros de todas las carreras de la FCFM.</div>
                    <div class="row">Préstamo de material en tus tiempos libres,  en el horario de 9:00 a 20:00 hrs. de lunes a viernes.</div>
                    <div class="row">Organización de actividades especiales como el trote Bisontes, Tazón de Novatos vs Veteranos y más.</div>
                    <div class="row">Servicio de difusión de las actividades estudiantiles por medio de Noticiero Bisontes.</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Soporte Tecnico">
        <div class="textTab">
            <label>
                <b>Soporte Técnico</b>
                El objetivo del departamento de Soporte Técnico es el de brindar apoyo a la comunidad estudiantil, maestros y personal administrativo mediante asesoría, soporte así como mantener en buen funcionamiento los sistemas de cómputo de la facultad
                <b>Funciones</b>
                <div class="staticT">
                    <div class="superHead">Hacia los alumnos</div>
                    <div class="row">Brindar asesoría sobre problemas en aplicaciones utilizados en clases.</div>
                    <div class="row">Apoyo para la configuración de red inalámbrica institucional.</div>
                    <div class="row">Asesoría en problemas relacionados con virus, spywares, etc.</div>
                    <div class="row">Mantener en buen funcionamiento los equipos en salas de cómputo.</div>
                    <div class="row">Préstamo de bocinas para su uso en clase.</div>
                </div>
                <div class="staticT">
                    <div class="superHead">Hacia los maestros y personal administrativo</div>
                    <div class="row">Asesoría y solución de problemas sobre hardware y software</div>
                    <div class="row">Mantener en correcto funcionamiento las instalaciones de la red de voz y datos.</div>
                    <div class="row">Mantener en condiciones óptimas el equipo utilizado en salones de clase.</div>
                    <div class="row">Apoyo para la configuración de red inalámbrica institucional.</div>
                    <div class="row">Asesoría en la configuración del correo de la facultad.</div>
                </div>
                <b>Límites</b>
                <div class="staticT">
                    <div class="superHead">Límites</div>
                    <div class="row">Reparación de equipo de cómputo en hardware o software que no sea propiedad de la facultad.</div>
                    <div class="row">No debes dejar tu computadora o laptop encargada en el Dpto.</div>
                    <div class="row">El apoyo que se brinda es únicamente en problemas relacionados a software</div>
                    <div class="row">No se brindará asesoría por problemas relacionados con compiladores a nivel código</div>
                </div>
                <b>Mensajes</b>
                Recuerda que puedes traer a desinfectar tu memoria USB.
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>