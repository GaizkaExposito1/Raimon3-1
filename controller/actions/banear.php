<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
$bd= new AccesoBd();

$bd->banUser($_POST['UsersNB']);

header("Location: ../../index.php?section=administracion");
?>