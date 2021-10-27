<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
$bd= new AccesoBd();


$result=$bd->deleteMensaje($_SESSION['sms']->id,$_SESSION['usuario']->id);
if($result=="ok"){
header("Location: ../../index.php?section=administracion");}
else{$_SESSION['error']=$result;
    header("Location: ../../index.php?section=administracion");
}
?>