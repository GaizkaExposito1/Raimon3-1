
    <section>
        <div id="mensajesCurso">
        <h1>Estos son tus mensajes Aprobados</h1>
            <ul>
            <?php 
            if(empty($sms)){
                echo "<h1>".$language["NO_MSJ_TDV"]."</h1>";
            }else{
                    foreach ($sms as $mensajeApr) {
                        echo "<li><a href='index.php?section=verMensaje&id=".$mensajeApr->id."'>".$mensajeApr->texto."</a></li>";
                    }
            }
            ?>
            </ul>
        </div>
    </section>
