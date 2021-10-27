
    <section>
        <div>
            <ul>
            <?php 
            if(empty($sms)){
                echo "<h1>".$language["NO_MSJ_TDV"]."</h1>";
            }else{
                    foreach ($sms as $mensajeApr) {
                        echo "<li>v<a href='eliminar.php?id=".$mensajeApr->id."'>".$language["DEL_MSJ"]."</a></li>";
                    }
            }
            ?>
            </ul>
        </div>
    </section>
