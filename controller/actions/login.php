<?php
session_start();
require_once ("../../model/accesoBD.class.php");
$bd= new AccesoBd();
$result=$bd->Login($_POST['text'],$_POST['password']);
echo $result;
/*if($result="ok"){
    header("Location: ./controller/conexion/principal.php");
}else if(){
    header("Location: ./controller/conexion/registro.php");
}else{ header("Location: ./controller/conexion/registro.php");}*/
?>