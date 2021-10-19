<?php

if (isset($lang)) {
    $url_prefix="../../view/registro";
	$url_prefixU="../../view/Language";
}else{
    $lang = "es";
    $url_prefix=".";
	$url_prefixU="..";
}
require_once ("$url_prefixU/Language/lang_" . $lang . ".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="registroStyle.css">

<script src="/login.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>
<!---
<header >
    <nav class="topnav " id="myTopnav">
      <div  class="active Inside" >
          <form id="Buscador" class="active" action="/PonerAction" >
            <input class="txtBuscar" type="text" name="txtBuscar" placeholder="Buscar...">
            <i class="fas fa-filter" id="filter" ></i>
            <button class="Buscar" type="submit"><i class="fa fa-search"></i></button>
          </form>
      </div>
        <a href="#home" id="News">Noticias</a>
        <a href="#news" id="Intranet">Intranet</a>
        <a href="#contact" id="Moodle">Moodle</a>
        <a href="#about" id="AccessAlum">Acceso Alumnado</a>
        <a href="#news" id="phone"><i class="fas fa-phone-alt"></i>&nbsp;944 39 50 62</a>
        <a href="#contact" id="mail"><i class="fas fa-envelope" ></i>&nbsp;idazkaritza@centrosanluis.com</a>
        <a href="#CambiarIdiomaAEuskera" id="LangEs"><img id="langFlagSpain" width="16" alt="Castellano" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"></a>
        <a href="#CambiarIdiomaACastellano" id="LangEus"><img id="langFlagBasque" width="16" alt="Euskara" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Flag_of_the_Basque_Country.svg"></a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="TopHeader()">&#9776;</a>
    </nav>
    <nav class="topnav2" id="myTopnav2">
      <img id="LogoCLSLarge" class="CSLlogo2" width="130" alt="CentroSanLuis Logo" src="view/assets/CentroSanLuisLargo.png">
      <a  href="index.php?section=pokedex" id="Login"><i class="fas fa-user"></i></a>
      <a  href="index.php?section=pokedex" id="CrearMensaje">Nuevo Mensaje</a>
      <a  href="index.php?section=pokedex" id="VerMensajes">Ver mensajes</a>
      <a  href="index.php?section=pokedex" id="Administracion">Zona Administracion</a>
      <a  href="index.php?section=pokedex" id="PagePrincipal">Pagina Principal</a>
      <a  href="index.php?section=pokedex" id="ir" onmouseover="MidMenu()"><i class="fas fa-bars"></i></a>
    </nav>
  </header>
  -->
   <!--Poner con Js el filtro   <i class="fas fa-filter" id="filter" ></i>-->
   <!-- Login = a la pag de login, si no esta registrado tendra que pasar por esta ...-->

<div class="page">
	<div class="container">
	  <div class="left">
		<div class="register">Registro!!</div>
		<div class="eula">Bienvenido al arbol de los deseos!!</div>
		<input type="button" id="continuar" value="continuar" onclick="botonContinuar()">
		<!--Este boton es para el responsive-->


	  </div>
	  <div class="right"> 
		<div class="form">



          <label for="dni">Dni</label>
		  <input type="text" id="text">

		  <label for="password">Contraseña</label>
		  <input type="password" id="password">

		  <label for="password">Confirmar Contraseña </label>
		  <input type="password" id="password">

		  <label for="email"> Correo Electrónico</label>
		  <input type="email" id="email">


		  <label for="userName">Usuario</label>
		  <input type="text" id="text">


		  <select name="select" >
           <option value="curso" disabled selected> Curso</option>
           <?php 
		   for ($i=0; $i < count($grupos); $i++) { 
			echo "<option value='cursos'>$grupos[$i]</option>";
		   }
		   ?>
         </select>

		  <input type="submit" id="aceptar" value="Aceptar">
		</div>
	  </div>
	</div>
  </div>
</body>
</html>




</script>










