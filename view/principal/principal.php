<h1><?php echo $language["TITU_PRINC"]; ?> <span>&#127810;</span></h1>
<!----------------------------------------------------------------------->
 <div class="carouseandSelect">

  <select name="select" >
					<option value="curso" disabled selected><?php echo $language["CURSO"]; ?> </option>
					<?php 
					for ($i=0; $i < count($grupos); $i++) { 
						echo "<option value='cursos'>$grupos[$i]</option>";
					}
					?>
    </select>

     

    
    
   
    <div class="arbolBotones"> 
    
        <img id="imgArbol" src="./view/assets/Arbol.png" alt="" >
    </div>
                

  
    <!-------Boststrap carousel--------->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="item active">
            <p class="mensaje">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, 
                minus commodi iusto vel a dolore? Voluptas 
            </p>             
            <p>
                <a href="#" title="Love it" class="btn btn-counter" data-count="0"><span>&#x2764;</span></a> 
            </p>
        </div>
        <div class="item">
            <p class="mensaje">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, 
                minus commodi iusto vel a dolore? Voluptas rep
            </p>
            <p>
                <a href="#" title="Love it" class="btn btn-counter" data-count="0"><span>&#x2764;</span></a>
            </p>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-------Links para ir a otras paginas--------->
    <?php
    if(isset($_SESSION['usuario'])){
    echo "<div id='links'>
      <a href='index.php?section=crearMensaje' ><button id='crearMensaje'>Crear Mensaje</button></a>
        <a href='index.php?section=verMensajesAprobados'><button id='mensajeAprobados'>Mensajes Aprobados</button></a>
        <a href='index.php?section=mensajesNoAprobados'><button id='mensajeNoAprobados'>Mensajes No Aprobados</button></a>
    </div>";}
    ?>
</div>

