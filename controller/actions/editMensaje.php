<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();
$user= $_SESSION['usuario'];
$result=$bd->editMensaje($_POST['tipografia'],$_POST['colorTipografia'],$_POST['color'],$_POST['id']);

if($result=="ok"){
    header("Location: ../../index.phpsection=editarMensaje");
}else{//mover para atras y devolver parametro para k se pueda poner el alert 
    header("Location: ../../index.php?section=crearMensaje&error=$result");}
?>