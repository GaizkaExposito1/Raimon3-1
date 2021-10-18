<?php 
    require_once "../../model/clases/mensaje.class.php";
    require_once "../../model/accesoBD.class.php";
    $bd = new AccesoBd();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mensajesAprobados.css">
    <title>Mensajes Por Curso</title>
</head>

<body>
    <header>
        <h2>Mensajes por Curso</h2>
    </header>
    <section>
        <div>
            <?php 
                $mensajesAprbds=$bd->getUserMensajesApproved(1);
                
                echo "<ul>";
                    foreach ($mensajesAprbds as $mensajeApr) {
                        echo "<li>".$mensajeApr."</li>";
                    }
                echo "</ul>";
            ?>
        </div>
    </section>
</body>

</html>