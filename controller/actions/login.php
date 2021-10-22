<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();
$result=$bd->Login($_POST['text'],$_POST['password']);

if($result=="ok"){
    header("Location: ../../index.php");
}else if($result=="Usuario no encontrado"){
    header("Location: ../../index.php?section=registro");
}else{//mover para atras y devolver parametro para k se pueda poner el alert 
    header("Location: ../../controller/conexion/registro.php");}
?>