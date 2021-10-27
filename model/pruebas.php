<?php
require_once "./accesoBD.class.php";
require_once "./clases/User.class.php";
require_once "./clases/Prefiltro.class.php";
require_once "./clases/mensaje.class.php";
require_once "../controller/librerias/PHPMailer.php";
require_once "../controller/librerias/Exception.php";
require_once "../controller/librerias/OAuth.php";
require_once "../controller/librerias/POP3.php";
require_once "../controller/librerias/SMTP.php";
$bd=new AccesoBd();
//$response=$bd->newMensaje(1,"arial","negro","blanco","puto","anonimo");
//$responde=$bd->getUsers();
$response=$bd->banUser(1);
//$responde=$bd->getBannedUsers(1);
echo "$response";
?>
