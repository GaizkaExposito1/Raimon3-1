<?php
session_start();
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();
$result=$bd->Registro($_POST['dni'],$_POST['pass'],$_POST['confpass'],$_POST['email'],$_POST['cursoId'],$_POST['username']);

if($result="ok"){
     header("Location: ../../index.php");
}else{ $_SESSION['error']=$result;
     header("Location: ../../index.php?section=registro");}
?>