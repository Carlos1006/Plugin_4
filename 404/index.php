<!DOCTYPE HTML>
<html>
<head>
    <title>404</title>
    <?php require "../Include/root.html" ?>
    <script src="./404.js"></script>
    <link href="./404.css" rel="stylesheet">
    <?php
        $dir    = "../img/404/";
        $files  = scandir($dir, 1);
        unset($files[array_search('.',$files)]);
        unset($files[array_search('..',$files)]);
        $file = $dir.$files[array_rand($files)];
    ?>
    <style>
        #banner{
            background:url("<?php echo $file ?>") no-repeat;
            background-attachment:fixed;
            background-size:100% auto;
            background-position:50% 0%;
        }
    </style>
</head>
<body>
<?php require_once "../Include/header.html" ?>
<div id="wrapperBanner"></div>
<div id="backbanner"></div>
<div id="banner"></div>
<div id="message_1">Ouch!</div>
<div id="message_2">Parece que el sitio al que quieres acceder no existe</div>
<a id="message_3">Volver a inicio</a>
<?php require_once "../Include/footer.html" ?>
</body>
</html>