<?php
    header('Content-Type: application/json');
    $dir    = "../img/banner/";
    $files  = scandir($dir, 1);
    $key1 = array_search('.',$files);
    $key2 = array_search('..',$files);
    unset($files[$key1]);
    unset($files[$key2]);
    echo json_encode($dir.$files[array_rand($files)]);
?>