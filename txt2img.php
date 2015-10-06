<?php

$key = $_GET['text'];
// TODO : security check on $key !!!
$file = 'images/logo-' . $key . '.jpg';
header('Content-type: image/jpeg');
readfile($file);
//test
?>
