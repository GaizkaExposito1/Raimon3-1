<?php
require_once ("../../model/accesoBD.class.php");
require_once ("../../model/clases/User.class.php");
$bd= new AccesoBd();
$user= $_SESSION['usuario'];
$result=$bd->editUser($_POST['newPass'],$_POST['newConfpass'],$_POST['newEmail'],$_POST['newUsername'],$user->id);

if($result=="ok"){
    header("Location: ../../index.php?section=perfil");
}else{$_SESSION['error']=$result;
    header("Location: ../../index.php?section=perfil");}
?>