<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
require_once "./model/clases/User.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$usersNB=$bd->getNotBannedUsers();
$usersB=$bd->getBannedUsers();
$sms=$bd->getMensajesNotApproved();
//capado
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']->rol==2||$_SESSION['usuario']->rol==3){
//redireccion
include "./view/Administracion/administracion.php";}}
else{
    include "./view/principal/principal.php";}

?>