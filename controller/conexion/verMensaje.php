<?php
//require
require_once "./model/accesoBD.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
if(isset($_GET['id'])){
    $param=$_GET['id'];
}
$mensaje=$bd->getMensajePorId($param);
//redireccion
include "./view/verMensaje/verMensaje.php";
?>