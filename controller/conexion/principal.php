<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/Grupo.class.php";
require_once "./model/clases/mensaje.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$grupos=$bd->getCursos();
$top=$bd->getTop10Mensajes();
//redireccion
include "./view/principal/principal.php";
?>