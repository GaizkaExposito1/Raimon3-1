
    <section>
        <div>
            <ul>
            <?php 
            if(empty($sms)){
                echo "<h1>No hay mensajes aprobados todavia</h1>";
            }else{
                    foreach ($sms as $mensajeApr) {
                        echo "<li>v<a href='eliminar.php?id=".$mensajeApr->id."'>Eliminar Mensaje</a></li>";
                    }
            }
            ?>
            </ul>
        </div>
    </section>
