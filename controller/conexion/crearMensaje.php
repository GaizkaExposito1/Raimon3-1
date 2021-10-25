<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
//acesso bd
$bd= new AccesoBd();
//colecciones de datos necesarios

//capado
if(isset($_SESSION['usuario'])){
//redireccion
include "./view/crearMensaje/crearMensaje.php";}
?>