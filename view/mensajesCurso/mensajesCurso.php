<article>
        <div>
            <ul>
            <?php 
            if(empty($sms)){
                echo "<h1>No hay mensajes en este curso</h1>";
            }else{
                    foreach ($sms as $mensaje) {
                        echo "<li>".$mensaje->id."</li>";
                    }
            }
            ?>
            </ul>
        </div>
</article>
