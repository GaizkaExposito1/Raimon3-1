<?php
require_once ($url_prefixBD."model/accesoBD.class.php");
$bd= new AccesoBd();
$result=$bd->Login($_POST['text'],$_POST['password']);

if($result="ok"){
    header("Location: $url_prefixC/conexion/principal.php");
}
?>