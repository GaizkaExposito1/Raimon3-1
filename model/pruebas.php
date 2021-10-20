<?php
require_once "./accesoBD.class.php";
require_once "./clases/User.class.php";
$bd=new AccesoBd();
$response=$bd->Registro("puto","z","z","PUTO",1,"puto");
echo "$response";
?>
