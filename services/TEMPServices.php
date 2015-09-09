<?php

class TEMPServices{
    
    public static function convertTemp ($temp,$type){
        
    $result=0;
    //se a temperatura for em fahrenheit converte para celsius 
    if($type=="fahrenheit"){
      $result=($temp-32)/1.8;
      
    }else{
     $result=($temp*1.8)+32;
    } 
    return $result;
        
        
    }
    
}






?>
