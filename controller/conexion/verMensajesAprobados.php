<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$user= $_SESSION['usuario'];
$sms=$bd->getUserMensajesApproved($user->id);

//capado
if(isset($_SESSION['usuario'])){
//redireccion
include "./view/mensajesAprobados/mensajesAprobados.php";}
?>