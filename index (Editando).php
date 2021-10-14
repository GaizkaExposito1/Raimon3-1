<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Escape Room</title>

    <link href="stilo.css" rel="stylesheet" type="text/css"> <!--Css-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--Icons en HTML-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="view/assets/favicon.jpg"/>

</head>

<body>
    <header class="topnav" id="myTopnav">
        <div  class="active Inside">
            <form id="Buscador" class="active" action="/PonerAction" >
                    <input class="txtBuscar" type="text" name="txtBuscar" placeholder="Buscar...">
                    <i class="fas fa-filter" id="filter" ></i><!--Poner  con Js el filtro-->
                    <button class="Buscar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
            </form>
        </div>
        <a href="#home">Noticias</a>
        <a href="#news">Intranet</a>
        <a href="#contact">Moodle</a>
        <a href="#about">Acceso Alumnado</a>

        <a href="#news"><i class="fas fa-phone-alt"></i>&nbsp;944 39 50 62</a>
        <a href="#contact"><i class="fas fa-envelope" ></i>&nbsp;idazkaritza@centrosanluis.com</a>
        <a href="#CambiarIdiomaAEuskera"><img id="langFlagSpain" width="16" alt="Castellano" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png"></a>
        <a href="#CambiarIdiomaACastellano"><img id="langFlagBasque" width="16" alt="Euskara" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Flag_of_the_Basque_Country.svg"></a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="MenuHamburguesa()">&#9776;</a>
  <!-- <li>
                <form id="Buscador" action="/PonerAction" >
                    <input class="txtBuscar" type="text" name="txtBuscar" placeholder="Buscar...">
                    <i class="fas fa-filter" id="filter" ></i><Poner con Js el filtro
                    <button class="Buscar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </li>  
        </ul>-->
    </header>
<!--
    <header id="MidHeader">
        <ul class="Header2">
            <li class="header2 " >
                <img class="CSLlogo" width="130" alt="CentroSanLuis Logo" src="view/assets/CentroSanLuisLargo.png">
            </li>
            <li class="beforeSpacer2">
                <a class="spacer3 letter" href="">
                Pagina Principal
                </a>
            </li>
            <li>
                <a class="spacer3 letter" href="">
                Perfil
                </a>
            </li>
            <li id="misMensajes">
                <a class="spacer3 letter" href="">
                Mis Mensajes
                </a>
            </li>
            <li id="Admin">
                <a class="spacer3 letter" href="">
                Administracion
                </a>
            </li>
            <li id="Login">
                <a class="spacer3 letter" href="">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
            </li>
        </ul>
    </header>-->
</body>

</html>




<script>
function MenuHamburguesa() {
  let x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
