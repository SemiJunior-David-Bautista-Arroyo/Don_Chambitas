<?php 
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=don_chambitas','root','');    }  
    catch (PDOException $e){
        echo "Error:" .$e->getMessage();
    }

?>