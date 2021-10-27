<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
require_once "../../model/clases/Prefiltro.class.php";
require_once "../../model/clases/mensaje.class.php";
require_once "../librerias/PHPMailer.php";
require_once "../librerias/Exception.php";
require_once "../librerias/OAuth.php";
require_once "../librerias/POP3.php";
require_once "../librerias/SMTP.php";
$bd= new AccesoBd();
$user= $_SESSION['usuario'];
$result=$bd->newMensaje($user->id,$_POST['tipografia'],$_POST['colorTipo'],$_POST['color'],$_POST['textarea']);

if($result=="ok"){
    $result="Mensaje enviado a revision";
    header("Location: ../../index.php?section=principal&error=$result");
}else{$_SESSION['error']=$result; 
    header("Location: ../../index.php?section=crearMensaje");}
?>