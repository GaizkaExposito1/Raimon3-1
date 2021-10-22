<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();
$user= $_SESSION['usuario'];
$result=$bd->newMensaje($user->id,$_POST['tipografia'],$_POST['colorTipo'],$_POST['color'],$_POST['texto'],$_POST['anonimo']);

if($result=="ok"){
    $result="Mensaje enviado a revision";
    header("Location: ../../index.phpsection=principal&error=$result");
}else{//mover para atras y devolver parametro para k se pueda poner el alert 
    header("Location: ../../index.php?section=crearMensaje&error=$result");}
?>