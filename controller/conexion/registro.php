<?php
//require
require_once "../../model/accesoBD.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$grupos=$bd->getCursos();
//redireccion
include "./view/login/login.php";
?>