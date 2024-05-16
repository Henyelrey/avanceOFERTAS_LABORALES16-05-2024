<?php
//en este archivo vamos a realizar la conexiona a la base de datos 
include("config.php");  

//funcion para concetarnos a la BD
function conectar(){
    $link = new mysqli(SERVER, DB_USER, DB_PASSWORD, DB_NAME, );
    if($link->connect_errno){
        echo "Error no se ha podido concetar a la bd";
    }else{
        //echo " t t t t t t t  tt  t t t  t";
        return $link;
    }
}


?>