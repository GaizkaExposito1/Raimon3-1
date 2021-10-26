<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();
$user= $_SESSION['usuario'];
$result=$bd->editMensaje($_POST['tipografia'],$_POST['colorTipografia'],$_POST['color'],$_POST['id']);

    header("Location: ../../index.phpsection=editarMensaje");

?>