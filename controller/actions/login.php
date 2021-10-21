<?php
session_start();
require_once ("./model/accesoBD.class.php");
$bd= new AccesoBd();
$result=$bd->Login($_POST['text'],$_POST['password']);

if($result="ok"){
    header("Location: ./controller/conexion/principal.php");
}else{
    header("Location: ./controller/conexion/registro.php");
}
?>