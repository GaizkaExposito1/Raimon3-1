<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/Grupo.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$grupos=$bd->getCursos();
//redireccion
include "./view/registro/registro.php";
?>