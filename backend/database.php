<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 
if (!function_exists('connection')) {
function connection(){
     $mysqli = mysqli_connect("127.0.0.1","root","Wacthuthink@003","mukfat");
     //$mysqli = mysqli_connect("34.59.152.229","mukfat","Wacthuthink@003","mukfat");
     return $mysqli;
}
}








?>