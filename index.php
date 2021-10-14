<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Escape Room</title>

    <link href="stilo.css" rel="stylesheet" type="text/css"> <!--Css-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--Icons en HTML-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="HeaderMenu">
        <ul>
            <li class="spacer1 beforeSpacer " >
                <i class="fas fa-phone-alt"></i>
                &nbsp;944 39 50 62
            </li>
                <li class="spacer2">
                <i class="fas fa-envelope" ></i>
                &nbsp;idazkaritza@centrosanluis.com
            </li>
            <li class="spacer3 "><!--Poner con Js el cambio de idioma-->
                <img class="langFlagSpain" width="16" alt="Castellano" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Spain_%28Civil%29.svg/32px-Flag_of_Spain_%28Civil%29.svg.png">
                
                <img class="langFlagBasque" width="16" alt="Euskara" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/Flag_of_the_Basque_Country.svg">
            </li>
            <li>
                <a class="spacer3 " href="https://www.centrosanluis.com/noticias">
                Noticias
                </a>
            </li>
            <li>
                <a class="spacer3 " href="https://centrosanluis.oduca.es/">
                Intranet
                </a>
            </li>
            <li>
                <a class="spacer3 " href="https://moodle.centrosanluis.com/login/index.php">
                Moodle
                </a>
            </li>
            <li>
                <a class="spacer3 " href="http://socialsanluis.oduca.es/">
                Acceso Alimnado
                </a>
            </li>
            <li>
                <a class="spacer3 " href="index.php?view=registro">
                Arbol De Los Deseos
                </a>
            </li>
            <li>
                <form id="Buscador" action="/PonerAction" >
                    <input class="txtBuscar" type="text" name="txtBuscar" placeholder="Buscar...">
                    <i class="fas fa-filter" id="filter" ></i><!--Poner con Js el filtro-->
                    <button class="Buscar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </li>  
        </ul>
    </div>

    <div id="MidHeader">
        <ul>
            <li class="spacer2 " >
            <img class="CSLlogo" width="130" alt="CentroSanLuis Logo" src="view/assets/CentroSanLuisLargo.png">
            </li>
        </ul>
    </div>
</body>

</html>
