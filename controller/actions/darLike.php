<?php
//require
require_once "./model/accesoBD.class.php";
require_once "./model/clases/mensaje.class.php";
//accesobd
$bd= new AccesoBd();
if(isset($_GET['section'])){
    $parame=$_GET['section'];
}
if(isset($_GET['id'])){
    $param=$_GET['id'];
}
$bd->darLike($param);
header("Location: ../../index.php?section=".$parame);
?>
?>