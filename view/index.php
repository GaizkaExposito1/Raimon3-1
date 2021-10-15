<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pokemo room</title>
    <link href="<?php echo "$url_prefix"?>/css/indice.css" rel="stylesheet" type="text/css">
    <link href="<?php echo "$url_prefix"?>/css/principal.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@100&display=swap" rel="stylesheet">
    <!--Este estilo es el del body-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
</head>
<body>
    <h1><?php echo $language["TITULO"]; ?></h1>
    <div class="menu">
        <ul>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="./index.php?view=principal">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Pagina Principal
                    </a>
                </li>
            </div>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="./index.php?view=pokemons">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Pokemons
                    </a>
                </li>
            </div>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="./index.php?view=quienessomos">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Quienes Somos
                    </a>
                </li>

            </div>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="./index.php?view=registro">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Registrate :)
                    </a>
                </li>

            </div>

        </ul>
    </div>
    <div id="contenido">
    <?php //Contenido
        $view="principal"; //Por defecto
        if (isset($_GET['view'])){
          $view=$_GET['view'];
        }
        include "$url_prefix/control/".$view.".php";

    ?>
    </div>
    <div class='pie'>
        <div class="letrass"><h3> © Free Escape Room For All (Gaizka)</h3></div>
    </div>
</body>

</html>