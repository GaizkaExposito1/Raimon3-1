<?php
//require
require_once "./model/accesoBD.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$param="acept";//por defecto
if(isset($_GET['id'])){
    $param=$_GET['id'];
}
$sms=$bd->getMensajesCurso($param);
//redireccion
include "./view/mensajesCurso/mensajesCurso.php";
?>