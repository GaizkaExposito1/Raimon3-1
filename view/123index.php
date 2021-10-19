<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kalpataru | Arbol de los deseos</title>
    <link href="styleheader1.css" rel="stylesheet" type="text/css"> <!--Css-->
    <link href="styleheader2.css" rel="stylesheet" type="text/css"> <!--Css-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script><!--Iconos fas fa-->
    <script src="index.js"></script>
</head>

<body>
  <header >
    <nav class="topnav " id="myTopnav">
      <div  class="active Inside" >
          <form id="Buscador" class="active" action="/PonerAction" >
            <input class="txtBuscar" type="text" name="txtBuscar" placeholder="Buscar...">
            <!--<i class="fas fa-filter" id="filter" ></i>-->  <!--Poner con Js el filtro-->
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
      <img id="LogoCLSLarge" class="CSLlogo2" width="130" alt="CentroSanLuis Logo" src="assets/CentroSanLuisLargo.png">
      <a href="#contact" id="Login"><i class="fas fa-user"></i></a><!-- Login = a la pag de login, si no esta registrado tendra que pasar por esta-->
      <a href="#about" id="CrearMensaje">Nuevo Mensaje</a>
      <a href="#about" id="VerMensajes">Ver mensajes</a>
      <a href="#about" id="Administracion">Zona Administracion</a>
      <a href="#news" id="PagePrincipal">Pagina Principal</a>
      <a href="javascript:void(0);" id="ir" onmouseover="MidMenu()"><i class="fas fa-bars"></i></a>
    </nav>
  </header>
</body>
</html>
