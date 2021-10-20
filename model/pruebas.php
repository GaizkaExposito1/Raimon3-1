<?php
require_once "./accesoBD.class.php";
$bd=new AccesoBd();
$response=$bd->Login("Raimon","raimon3+1");
echo "$response";
?>
