<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
require_once "./model/clases/User.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
if(isset($_GET['id'])){
    $param=$_GET['id'];
}
$mensaje=$bd->getMensajePorId($param);
$user=$bd->getUsernameFromUserId($mensaje->userId);
//redireccion
include "./view/verMensaje/verMensaje.php";
?>