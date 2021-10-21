<?php
//require
require_once "$url_prefix/model/accesoBD.class.php";
//accesobd
$bd= new AccesoBd();
//colecciones de datos necesarios
$grupos=$bd->getCursos();

include "$url_prefix/view/principal/principal.php";
?>