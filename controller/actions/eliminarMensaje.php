<?php
//require
require_once "../../model/accesoBD.class.php";
require_once "../../model/clases/mensaje.class.php";
$bd= new AccesoBd();

$result=$bd->deleteMensaje($_SESSION['smsId'],$_SESSION['usuario']->id);
if($result=="ok"){
header("Location: ". $_SERVER['HTTP_REFERER']);}
else{$_SESSION['error']=$result;
    header("Location: ".$_SERVER['HTTP_REFERER']);
}
?>