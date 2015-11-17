<!DOCTYPE HTML>
<html>
<head>
    <title>CCCM</title>
    <?php require "../Include/root.html" ?>
    <?php require "../Include/tabs.html" ?>
    <?php require "../Include/table.html" ?>
    <script src="./Script/Script.js"></script>
    <link href="./Style/Style.css" rel="stylesheet">
    <link href="./Style/CCCM.css" rel="stylesheet">
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
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="banner">
    <div class="frame"></div>
    <div id="goBottom"></div>
</div>
<div class="tabContainer">
    <div name="CCCM">
        <div class="textTab">
            <label>
                <b>Centro de Competitividad de Clase Mundial</b>
                Tecnología Administrativa de Clase Mundial<br>
                ... requisito para la Continuidad del Negocio<br><br>
                <b>Nuestra Misión es... </b>
                Proveer Tecnología Administrativa de Clase Mundial para apoyar a las organizaciones, a desarrollar la Cultura de Competitividad, a través de mejorar sus Recursos Humanos y Sistemas de Gestión.
                <b>Nuestra Cultura de Competitividad... </b>
                El término de competente es más utilizado en las ciencias de comportamiento humano que el término habilidades. Una persona competente es aquella que hace que las cosas se den bien, sucedan, para lo cual no es suficiente tener habilidades. </b>
                <br>
                <br>
                <div class="staticT">
                    <div class="superHead">La Cultura de Competitividad implica</div>
                    <div class="row">Pensamiento de Calidad Humana.</div>
                    <div class="row">Conducta de hacer las cosas bien, a la primera.</div>
                    <div class="row">Hábito de la Mejora.</div>
                    <div class="row">Conciencia del valor de las cosas.</div>
                </div>
                <b>Pólitica de Calidad... </b>
                Nuestro compromiso con Usted es asegurarle buenos resultados. Entender sus necesidades y la calidad de nuestro desempeño es esencial en los servicios que le ofrecemos; lo cual es estrictamente monitoreado.
            </label>
        </div>
    </div>
    <div name="Servicios">
        <div class="textTab">
            <label>
                <b>Los Servicios que ofrecemos se dividen en cuatro categorías</b>
                <div class="staticT">
                    <div class="superHead">Servicios</div>
                    <div class="row">Diplomados y Certificación de Recursos Humanos</div>
                    <div class="row">Consultoría Experta</div>
                    <div class="row">Libros, Manuales y Consultoría escrita</div>
                    <div class="row">Seminarios/Taller "InCompany"</div>
                </div>
            </label>
        </div>
    </div>
    <div name="Director">
        <div class="textTab">
            <label>
                <b>Director <br> Felipe J. Arrona MSc. </b>
                La dirección siempre es un pilar importante en cualquier organización. El Ing. Arrona es el consultor de mayor experiencia en México (23 años) en este campo. Colaborando también con empresas de otros países de América.
                Su formación profesional más importante es: Ingeniero Industrial Administrador (68-73) y Maestría en Productividad (75-77), UANL, México. Posgrado en Total Quality Control & Improvement (77-78) y Diplomado en Competitive Manufacture (89) en Japón. Diplomados en USA en: Desarrollo Organizacional (81), Sistemas Sociotécnicos (82) y Métodos Administrativos para Calidad y Productividad (84) y otros diversos estudios (90 a la fecha).
                Ha colaborado con empresas como Bridgestone Firestone, Bancomer, Bimbo, Ciba Geigy, Grupo Kativo, HYLSA, Kenworth, Pacific Electric, Pinturas COMEX, Siderúrgica ISPAT, VITRO, entre otras y con instituciones educativas como el ITESM. Actualmente es maestro de Post-grado en la UANL y en la UDEM, y autor de varios libros como: Herramientas para Planeación y Mejora de la Calidad, Liberación de Problemas en las Áreas de Trabajo y otros.
            </label>
        </div>
    </div>
</div>
<div id="viewer" num="0"></div>
<?php require_once "../Include/footer.html" ?>
</body>
</html>