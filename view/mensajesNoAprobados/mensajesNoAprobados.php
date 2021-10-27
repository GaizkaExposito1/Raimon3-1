<section id="fuera">
    <div id="dentro">
    <ul>
            <?php 
            if(empty($sms)){
                echo "<h1>".$language["NO_MSJ_TDV"]."</h1>";
            }else{
                    foreach ($sms as $mensajeApr) {
                        echo "<li>".$mensajeApr->id."<button>".$language["DEL_MSJ"]."</button></li>";
                    }
            }
            ?>
            </ul>
        </div>
</section>
