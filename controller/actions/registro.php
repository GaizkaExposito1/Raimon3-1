<?php
session_start();
require_once ("../../model/accesoBD.class.php");
$bd= new AccesoBd();
$result=$bd->Registro($_POST['dni'],$_POST['pass'],$_POST['confpass'],$_POST['email'],$_POST['cursoId'],$_POST['username']);
echo $result;
/*if($result="ok"){
    header("Location: ./controller/conexion/principal.php");
}else if(){
    header("Location: ./controller/conexion/registro.php");
}else{ header("Location: ./controller/conexion/registro.php");}*/
?>