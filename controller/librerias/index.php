<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Escape Room</title>
    <link href="css/indice.css" rel="stylesheet" type="text/css">
    <link href="css/principal.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@100&display=swap" rel="stylesheet">
    <!--Este estilo es el del body-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inder&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Free Pokemon scape Room For All</h1>
    <div class="menu">
        <ul>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="index.php?section=principal">
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
                    <a class="menu2" href="index.php?section=pokedex">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Pokedex
                    </a>
                </li>
            </div>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="index.php?section=contacto">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        contacto
                    </a>
                </li>

            </div>
            <div class="btn-neon">
                <li>
                    <a class="menu2" href="index.php?section=registro">
                        <span id="span1"></span>
                        <span id="span2"></span>
                        <span id="span3"></span>
                        <span id="span4"></span>
                        Registro 
                    </a>
                </li>

            </div>
        </ul>
    </div>
    <div id="contenido">
    <?php
    //contenido
    $param="principal";//por defecto
    if(isset($_GET['section'])){
        $param=$_GET['section'];
    }
    include "controler/".$param.".php";
    ?>
    </div>
    <div class='pie'>
        
        <div class="letrass"><h3> © Free Pokemon scape Room For All</h3></div>
        
    </div>
</body>

</html>
