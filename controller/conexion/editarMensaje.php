<?php
//require
require_once "./model/accesoBD.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios

//capasi
if(isset($_SESSION['usuario'])){
//redireccion
include "./view/editarMensaje/editarMensaje.php";}
?>