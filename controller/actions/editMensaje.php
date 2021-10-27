<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();

$user= $_SESSION['usuario'];
$result=$bd->editMensaje($_POST['tipografia'],$_POST['colorTipo'],$_POST['color'],$_POST['textarea'],$_SESSION['smsId']);

    header("Location: ../../index.php?section=editarMensaje");

?>