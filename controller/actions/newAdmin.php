<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
$bd= new AccesoBd();


$result=$bd->newAdmin($_POST['dni'],$_POST['pass'],$_POST['confpass'],$_POST['email'],$_POST['username']);
if($result=="ok"){
header("Location: ../../index.php?section=administracion");}
else{
    header("Location: ../../index.php?section=administracion&error=$result");
}
?>