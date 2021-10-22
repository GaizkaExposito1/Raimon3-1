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
