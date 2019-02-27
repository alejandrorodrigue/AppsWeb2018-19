<?php
//Nombre de la bbdd:Prueba1

$user="root";
$pass="";
$server="localhost";
$base="";
try{
    $base = new PDO('mysql:host=localhost;dbname=',$user,$pass);
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8"); 
     
}
catch(Exception $e){
    die('Error : '.$e->GetMessage().'En la línea: '.$e->getLine());
}
?>