<section id="fuera">
    <div id="dentro">
    <ul>
            <?php 
            if(empty($sms)){
                echo "<h1>No hay mensajes aprobados todavia</h1>";
            }else{
                    foreach ($sms as $mensajeApr) {
                        echo "<li>".$mensajeApr->id."<button>Eliminar Mensaje</button></li>";
                    }
            }
            ?>
            </ul>
        </div>
</section>
