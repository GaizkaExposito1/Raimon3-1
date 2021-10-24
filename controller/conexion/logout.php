<?php
require_once "./model/accesoBD.class.php";
$bd= new AccesoBd();
 $bd->Logout();



 header("Location: index.php");
?>