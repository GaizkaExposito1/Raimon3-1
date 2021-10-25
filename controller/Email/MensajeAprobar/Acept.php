<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
$bd= new AccesoBd();
$param="acept";//por defecto
if(isset($_GET['id'])){
    $param=$_GET['id'];
}
if($param!="acept"){
$bd->aceptarMensaje($param);
}
?>
?>
<h1>mensaje aprobado</h1>