<?php 
    require_once "../../model/clases/mensaje.class.php";
    require_once "../../model/accesoBD.class.php";
    $bd = new AccesoBd();
?>

<!DOCTYPE html>
<html lang="en">


    <section>
        <div class="page">
            <h3 id="titulo"><?php echo $language["MSJ_X_CURSO"]; ?></h3>
            <div id="contenido">
                
                
                <?php 
                $mensajes=$bd->getMensajesCurso(1);
                
                echo "<ul>";
                    foreach ($mensajes as $mensaje) {
                        echo "<li>".$mensaje."</li>";
                    }
                echo "</ul>";
            ?>
            </div>
        </div>
    </section>
