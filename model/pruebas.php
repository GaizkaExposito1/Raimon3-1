<?php
require_once "./accesoBD.class.php";
require_once "./clases/User.class.php";
$bd=new AccesoBd();
$response=$bd->editUser("z","z","PUTO2","PUTO1","5");
//$response=$bd->getUsersCurso(1);
echo "$response";
?>
