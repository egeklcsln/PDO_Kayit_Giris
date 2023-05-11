<?php 


try{
     $db = new PDO("mysql:host=localhost;
 dbname=uye_kayit;
 charset=utf8","root","");
 
 $db ->exec("SET NAMES utf8");
 
}
catch(Exception $e){
    echo "hata:" .$e->getMessage();
}

 ?>
 
 