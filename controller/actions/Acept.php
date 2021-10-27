<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
$bd= new AccesoBd();

$bd->aceptarMensaje($_POST['sms']);

header("Location: ../../index.php?section=administracion");
?>