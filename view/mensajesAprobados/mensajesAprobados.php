<?php 
    require_once "../../model/clases/mensaje.class.php";
    require_once "../../model/accesoBD.class.php";
    $bd = new AccesoBd();
?>


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
