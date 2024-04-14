<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 
if (!function_exists('connection')) {
function connection(){
     $mysqli = mysqli_connect("34.16.172.201","root","Wacthuthink@003","mukfat");

     return $mysqli;
}
}








?>