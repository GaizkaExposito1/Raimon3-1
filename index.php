<?php
require_once "./model/clases/User.class.php";
session_start();
require_once "./controller/set_idioma.php";

//contenido
$param="principal";//por defecto
if(isset($_GET['section'])){
    $param=$_GET['section'];
}
?>
<!DOCTYPE html>
<html>
<script></script>
<head>
    <meta charset="UTF-8">
    <title><?php echo $language["TITLE"]; ?></title>
    <link href="./styleheader1.css" rel="stylesheet" type="text/css"> <!--Css Header 2-->
    <link href="./styleheader2.css" rel="stylesheet" type="text/css"> <!--Css Header 2-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="./index.js"></script>
    <link href="./view/<?php echo $param ?>/<?php echo $param ?>.css" rel="stylesheet" type="text/css">  <!--Css 

unicamente para cada contenido-->
    <script src="./jquery.min.js"></script>
    <script src="./view/<?php echo $param ?>/<?php echo $param ?>.js"></script>

    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>

<body>
<header >
    <nav class="topnav " id="myTopnav">
        <a href="#home" id="News" class="active"><?php echo $language["NOTICIAS"]; ?></a>
        <a href="#news" id="Intranet"><?php echo $language["INTRANET"]; ?></a>
        <a href="#contact" id="Moodle"><?php echo $language["MOODLE"]; ?></a>
        <a href="#about" id="AccessAlum"><?php echo $language["ACC_ALUMNADO"]; ?></a>
        <a href="#news" id="phone"><i class="fas fa-phone-alt"></i>&nbsp;944 39 50 62</a>
        <a href="#contact" id="mail"><i class="fas fa-envelope" ></i>&nbsp;idazkaritza@centrosanluis.com</a>
        <a href="index.php?section=<?php echo $param?>&lang=es"id="LangEs"><img id="langFlagSpain"onclick="cambiarIdioma()"  alt="Castellano"src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"></a><br/>
        <a href="index.php?section=<?php echo $param?>&lang=eu" id="LangEus"><img width="20%"id="langFlagBasque" onclick="cambiarIdioma()"  alt="Euskera"src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Flag_of_the_Basque_Country.svg/1200px-Flag_of_the_Basque_Country.svg.png"></a>
        <a href="javascript:void(0);" class="icon" onclick="TopHeader()"><i class="fas fa-bars"></i></a>
    </nav>
    
    <nav class="topnav2" id="myTopnav2">
      <img id="LogoCLSLarge" class="CSLlogo2" alt="CentroSanLuis Logo" src="./view/assets/CentroSanLuisLargo.png">
      <a  href="index.php?section=login" id="Login"><i class="fas fa-user"></i></a><!-- Login = a la pag de login, 

si no esta registrado tendra que pasar por esta-->
      <?php
      if(isset($_SESSION['usuario'])){
      echo "<a  href='index.php?section=crearMensaje' id='CrearMensaje'> ". $language["NEW_MENSAJE"] ." </a>
      <a  href='index.php?section=verMensajesAprobados' id='VerMensajesAprobados'> ". $language["MENSAJES"] ."</a>
      <a  href='index.php?section=logout' id='logout'> ". $language["LOGOUT"] ."</a>";
      if($_SESSION['usuario']->rol==2){
      echo"<a  href='index.php?section=Administracion' id='Administracion'> ". $language["ADMIN"] ."</a>";
      }}?>
      <a  href="index.php?section=principal" id="PagePrincipal"><?php echo $language["PRINCIPAL"]; ?></a>
      <a  href="javascript:void(0);" id="ir" onmouseover="MidMenu()"><i class="fas fa-bars"></i></a>
    </nav>
  </header>
  <section id="contenido">
    <?php
    include "./controller/conexion/".$param.".php";
    ?>
    </section>
</body>
</html>

