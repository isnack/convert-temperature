<?php
require 'TEMPServices.php';

$temp = $_GET['temp'];
$type = $_GET['type'];
$result=0;

if(is_numeric($temp)){
    
  $result=TEMPServices::convertTemp($temp,$type);
    
}

echo $result;





?>