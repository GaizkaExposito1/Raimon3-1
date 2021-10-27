<?php
//require
require_once "../../model/accesoBD.class.php";
require_once "../../model/clases/User.class.php";
$bd= new AccesoBd();

$bd->UnbanUser($_POST['UsersB']);

header("Location: ../../index.php?section=administracion");
?>