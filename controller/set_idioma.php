<?php

if(!isset($_SESSION['lang']))

$_SESSION['lang']="es";

else if(isset($_GET['lang']) && $_SESSION['lang']!=$_GET['lang']  &&!empty($_GET['lang'])){
      $_SESSION['lang']=$_GET['lang'];
}

require_once "view/Language/lang_". $_SESSION['lang']. ".php";
?>