<article>
        <div id="mensajesCurso">
        <?php
        $curso;
                echo "<h1>CURSO:".$curso->id."</h1>"; 
                ?>
            <ul>
            <?php
            if(empty($sms)){
                echo "<h3>".$language["NO_MSJ_CURSO"]."</h3>";
            }else{$ind=0;
                    foreach ($sms as $mensaje) {
                     echo "<li><a href='index.php?section=verMensaje&id=".$mensaje->id."'>".$usernames[$ind].":".$mensaje->id."</a></li>";
                    $ind++;
                    }
            }
            ?>
            </ul>
        </div>
</article>
