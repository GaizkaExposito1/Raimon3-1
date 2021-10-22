<?php 
require_once "../../model/clases/mensaje.class.php";
    require_once "../../model/accesoBD.class.php";
    $bd = new AccesoBd();
?>

<!DOCTYPE html>
<html lang="en">
    <section id="fuera">
        <div id="dentro">
            <?php 
                $mensajesNoAprbds=$bd->getUserMensajesApproved(1);
                
                echo "<ul>";
                    foreach ($mensajesNoAprbds as $mensajeNoApr) {
                        echo "<li>".$mensajeNoApr."</li>";
                    }
                echo "</ul>";
            ?>
        </div>
    </section>
