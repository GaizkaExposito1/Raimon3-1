<?php
/*if($url_prefixF==".."){
    $url_prefixBD="./";
}else{
    $url_prefixBD="../../";
}*/
require_once ($url_prefixBD."model/accesoBD.class.php");
$bd= new AccesoBd();
$result=$bd->Login($_POST['text'],$_POST['password']);

if($result="ok"){
    header("Location: $url_prefixC/conexion/principal.php");
}else{
    header("Location: $url_prefixC/conexion/principal.php");
}
?>