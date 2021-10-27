<article>
        <div id="mensajesCurso">
        <?php
                echo "<h1>CURSO: 1º BAchiller</h1>"; 
                ?>
            <ul>
            <?php
            if(empty($sms)){
                echo "<h3>".$language["NO_MSJ_CURSO"]."</h3>";
            }else{
                    foreach ($sms as $mensaje) {
                        echo "<li><a href='index.php?section=verMensaje&id=".$mensaje->id."'>".$mensaje->id."</a></li>";
                    }
            }
            ?>
            </ul>
        </div>
</article>
