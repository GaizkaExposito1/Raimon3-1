<?php
require_once "./accesoBD.class.php";
require_once "./clases/User.class.php";
$bd=new AccesoBd();
$response=$bd->getUsersCurso(1);
//$responde=$bd->getUsers();
//$responde=$bd->banUser(1);
//$responde=$bd->getBannedUsers(1);
echo "$response";
?>
