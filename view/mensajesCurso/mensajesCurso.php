<article>
        <div id="mensajesCurso">
        <?php
                echo "<h1>CURSO: 1º BAchiller</h1>"; 
                ?>
            <ul>
            <?php
            if(empty($sms)){
                
                echo "<h3>".$language["NO_MSJ_CURSO"]."</h3>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";
                echo "<li><span id='User'>".$language["USER_MSJ_CURSO"]."</span> MENSAJE <span class='delete'><a class='delete' href='#wii'>X</a></span></li>";

                
            }else{
                    foreach ($sms as $mensaje) {
                        echo "<li>".$mensaje->id."</li>";
                    }
            }
            ?>
            </ul>
        </div>
</article>
