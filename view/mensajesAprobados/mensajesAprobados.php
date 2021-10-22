
    <header>
        <h2>Mensajes por Aprobados</h2>
    </header>
    <section>
        <div>
            <?php 
                echo "<ul>";
                    foreach ($sms as $mensajeApr) {
                        echo "<li>".$mensajeApr."</li>";
                    }
                echo "</ul>";
            ?>
        </div>
    </section>
