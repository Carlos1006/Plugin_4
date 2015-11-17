<?php
$file = $_GET['file'];
$name = $_GET['name'];
header('Content-Description: File Transfer');
header("Content-type: application/octet-stream");//notice this content-type, it will force a download since browsers think that's what they should do with .exe files
header("Content-disposition: attachment; filename= ".$name."");
readfile($file);