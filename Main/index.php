<!DOCTYPE HTML>
<html>
    <head>
        <title>Inicio</title>
        <?php require "../Include/root.html" ?>
        <?php
            $dir    = "../img/banner/";
            $files  = scandir($dir, 1);
            unset($files[array_search('.',$files)]);
            unset($files[array_search('..',$files)]);
            $file = $dir.$files[array_rand($files)];
        ?>
        <style>
            #banner .frame{
                border:0px !important;
                padding:0px !important;
                margin:0px !important;
                outline:0px !important;
                background-position-y:0%;
                background-image:url("<?php echo $file ?>") !important;
                background-color:rgb(30,30,30);
                background-attachment:fixed;
            }
        </style>
        <script src="main.js"></script>
        <script src="ajaxRequest.js"></script>
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php require_once "../Include/header.html" ?>
        <div id="banner">
            <div class="frame"></div>
            <div id="goBottom"></div>
            <div id="sideBanner">
                <div class="quickAccessContainer">
                    <div class="wrapQ"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/LMAD.php"><label>LMAD</label></div>
                    <div class="wrapR"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/LSTI.php"><label>LSTI</label></div>
                    <div class="wrapR"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/LCC.php"><label>LCC</label></div>
                    <div class="wrapR"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/LM.php"><label>LM</label></div>
                    <div class="wrapR"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/LA.php"><label>LA</label></div>
                    <div class="wrapR"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/LF.php"><label>LF</label></div>
                    <div class="wrapR"></div>
                    <div class="quickAccess" ref="../OfertaEducativa/Posgrado.php"><label>Posgrado</label></div>
                    <div class="wrapQ"></div>
                </div>
            </div>
        </div>
        <div class="titleContent">
            <div class="label">
                <label>Eventos</label>
            </div>
            <div class="moreContainer">
                <span class="wrapM"></span>
                <div id="moreEvent" class="moreBtn" ref="../Noticias/Eventos.php">
                    <label>Ver mas...</label>
                </div>
            </div>
        </div>
        <div class="content" id="events_c">
            <div class="wrapE"></div>
            <div num="0" class="tile">
                <div class="imgEvent"></div>
                <div class="txtEvent">
                    <div class="date"><label></label></div>
                    <div class="titl"><label></label></div>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="1" class="tile">
                <div class="imgEvent"></div>
                <div class="txtEvent">
                    <div class="date"><label></label></div>
                    <div class="titl"><label></label></div>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="2" class="tile">
                <div class="imgEvent"></div>
                <div class="txtEvent">
                    <div class="date"><label></label></div>
                    <div class="titl"><label></label></div>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="3" class="tile">
                <div class="imgEvent"></div>
                <div class="txtEvent">
                    <div class="date"><label></label></div>
                    <div class="titl"><label></label></div>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="4" class="tile">
                <div class="imgEvent"></div>
                <div class="txtEvent">
                    <div class="date"><label></label></div>
                    <div class="titl"><label></label></div>
                </div>
            </div>
        </div>
        <div class="titleContent">
            <div class="label">
                <label>Noticias</label>
            </div>
            <div class="moreContainer">
                <span class="wrapM"></span>
                <div id="moreNews" class="moreBtn" ref="../Noticias/Noticias.php">
                    <label>Ver mas...</label>
                </div>
            </div>
        </div>
        <div class="content" id="news_c">
            <div class="wrapE"></div>
            <div num="0" class="tile redTile fullTile">
                <div class="upRow">
                    <div class="imgEvent"></div>
                    <div class="titl"><label></label></div>
                    <div class="date"><label></label></div>
                </div>
                <div class="dwRow">
                    <label> <b>Leer mas</b> </label>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="1" class="tile blueTile fullTile">
                <div class="upRow">
                    <div class="imgEvent"></div>
                    <div class="titl"><label></label></div>
                    <div class="date"><label></label></div>
                </div>
                <div class="dwRow">
                    <label> <b>Leer mas</b> </label>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="2" class="tile redTile fullTile">
                <div class="upRow">
                    <div class="imgEvent"></div>
                    <div class="titl"><label></label></div>
                    <div class="date"><label></label></div>
                </div>
                <div class="dwRow">
                    <label> <b>Leer mas</b> </label>
                </div>
            </div>
            <div class="wrapT"></div>
            <div num="3" class="tile blueTile fullTile">
                <div class="upRow">
                    <div class="imgEvent"></div>
                    <div class="titl"><label></label></div>
                    <div class="date"><label></label></div>
                </div>
                <div class="dwRow">
                    <label> <b>Leer mas</b> </label>
                </div>
            </div>
        </div>
        <?php require_once "../Include/footer.html" ?>
    </body>
</html>