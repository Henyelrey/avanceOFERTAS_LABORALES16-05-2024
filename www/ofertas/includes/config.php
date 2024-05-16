<?php
//definimos constantes de nuestro sistema 

if(!defined("TITULO_GENERAL")) define("TITULO_GENERAL", "Sistema de bolsa Laboral Ver. 1.0");

//ahora creamos las constante para conectarnos a la base de datos

if(!defined("SERVER")) define("SERVER", "localhost");
if(!defined("DB_NAME")) define("DB_NAME","bd_ofertas");
if(!defined("DB_USER")) define("DB_USER", "root");
if(!defined("DB_PASSWORD")) define("DB_PASSWORD", "");
//creamos una constante que apunta la direccion url de nuestro sistema
if(!defined("RUTA_GENERAL")) define("RUTA_GENERAL", "http://localhost/ofertas/");

?>