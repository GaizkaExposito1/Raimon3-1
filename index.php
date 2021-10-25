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

<head>
    <meta charset="UTF-8">
    <title><?php echo $language["TITLE"]; ?></title>
    <link href="./styleheader1.css" rel="stylesheet" type="text/css"> <!--Css Header 2-->
    <link href="./styleheader2.css" rel="stylesheet" type="text/css"> <!--Css Header 2-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script><!--Iconos fas fa-->
    <script src="./index.js"></script>
    <link href="./view/<?php echo $param ?>/<?php echo $param ?>.css" rel="stylesheet" type="text/css">  <!--Css unicamente para cada contenido-->
    <script src="./jquery.min.js"></script>
    <script src="./view/<?php echo $param ?>/<?php echo $param ?>.js"></script>

    <!--Boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>

<body>
  <!--<header >
    <nav class="topnav " id="myTopnav">
      <div  class="active Inside" >
          <form id="Buscador" class="active" action="/PonerAction" >
            <input class="txtBuscar" type="text" name="txtBuscar" placeholder="Buscar...">
            <button class="Buscar" type="submit"><i class="fa fa-search"></i></button>
          </form>
      </div>
        <a href="#home" id="News"><?php echo $language["NOTICIAS"]; ?></a>
        <a href="#news" id="Intranet"><?php echo $language["INTRANET"]; ?></a>
        <a href="#contact" id="Moodle"><?php echo $language["MOODLE"]; ?></a>
        <a href="#about" id="AccessAlum"><?php echo $language["ACC_ALUMNADO"]; ?></a>
        <a href="#news" id="phone"><i class="fas fa-phone-alt"></i>&nbsp;944 39 50 62</a>
        <a href="#contact" id="mail"><i class="fas fa-envelope" ></i>&nbsp;idazkaritza@centrosanluis.com</a>
        <a href="index.php?section=<?php echo $param?>&lang=es" id="LangEs"><img id="langFlagSpain"  alt="Castellano" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"></a>
        <a href="index.php?section=<?php echo $param?>&lang=eu" id="LangEus"><img id="langFlagBasque"  alt="Euskara" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Flag_of_the_Basque_Country.svg"></a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="TopHeader()">&#9776;</a>
    </nav>-->
    <nav class="topnav2" id="myTopnav2">
      <img id="LogoCLSLarge" class="CSLlogo2" alt="CentroSanLuis Logo" src="./view/assets/CentroSanLuisLargo.png">
      <a href="index.php?section=<?php echo $param?>&lang=es"id="LangEs"><img id="langFlagSpain" onclick="cambiarIdioma()"  alt="Castellano" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"></a>
      <a href="index.php?section=<?php echo $param?>&lang=eu" id="LangEus"><img id="langFlagBasque" onclick="cambiarIdioma2()"  alt="Euskara" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Flag_of_the_Basque_Country.svg"></a>
     <?php
     if(isset($_SESSION['usuario'])){
      echo"<a  href='index.php?section=perfil' id='Login'><i class='fas fa-user'></i></a>";
     }else{
      echo"<a  href='index.php?section=login' id='Login'><i class='fas fa-user'></i></a>";}
      ?>
      <?php
      if(isset($_SESSION['usuario'])){
      echo "<a  href='index.php?section=crearMensajes' id='CrearMensaje'> ". $language["NEW_MENSAJE"] ." </a>
      <a  href='index.php?section=verMensajesAprobados' id='VerMensajesAprobados'> ". $language["MENSAJES"] ."</a>
      <a  href='index.php?section=logout' id='logout'> ". $language["LOGOUT"] ."</a>";
      if($_SESSION['usuario']->rol==2 || $_SESSION['usuario']->rol==1){
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

