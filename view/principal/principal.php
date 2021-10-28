<h1><?php echo $language["TITU_PRINC"]; ?> <span>&#127810;</span></h1>
<!----------------------------------------------------------------------->
 <div class="carouseandSelect">

  <select id="select" name="select" >
					<option value="curso" disabled selected><?php echo $language["CURSO"]; ?> </option>
					<?php 
					for ($i=0; $i < count($grupos); $i++) { 
						echo "<option value='".$grupos[$i]->id."'>$grupos[$i]</option>";
					}
					?>
    </select>



    <div class="arbolBotones"> 
    
    <img id="imgArbol" src="./view/assets/Arbol.png" alt="" >

    <img id="hoja1" src="./view/assets/hoja1.png" alt="" srcset="">
    <img id="hoja2" src="./view/assets/hoja2.png" alt="" srcset="">
    <img id="hoja3" src="./view/assets/hoja3.png" alt="" srcset="">
    <img id="hoja4" src="./view/assets/hoja4.png" alt="" srcset="">
    <img id="hoja5" src="./view/assets/hoja5.png" alt="" srcset="">
    <img id="hoja6" src="./view/assets/hoja6.png" alt="" srcset="">
    <img id="hoja7" src="./view/assets/hoja7.png"  alt="" srcset="">
    <img id="hoja8" src="./view/assets/hoja8.png"  alt="" srcset="">
    <img id="hoja9" src="./view/assets/hoja9.png"  alt="" srcset="">
    <img id="hoja10" src="./view/assets/hoja10.png"  alt="" srcset="">
    <img id="hoja11" src="./view/assets/hoja11.png"  alt="" srcset="">
    <img id="hoja12"src="./view/assets/hoja1.png"  alt="" srcset="">
    <img id="hoja13" src="./view/assets/hoja2.png"  alt="" srcset="">
    <img id="hoja14" src="./view/assets/hoja3.png"  alt="" srcset="">
    <img id="hoja15" src="./view/assets/hoja4.png"  srcset="">
    <img id="hoja16" src="./view/assets/hoja5.png"  alt="" srcset="">
    <img id="hoja17" src="./view/assets/hoja6.png"  alt="" srcset="">
    <img id="hoja18" src="./view/assets/hoja7.png"  alt="" srcset="">
    <img id="hoja19" src="./view/assets/hoja8.png" srcset="">
    <img id="hoja20" src="./view/assets/hoja9.png"  alt="" srcset="">
    <img id="hoja21" src="./view/assets/hoja11.png"  alt="" srcset="">
    <img id="hoja22" src="./view/assets/hoja1.png"  alt="" srcset="">
    <img id="hoja23" src="./view/assets/hoja6.png"  alt="" srcset="">
    <img id="hoja24" src="./view/assets/hoja7.png"  alt="" srcset="">
    <img id="hoja25" src="./view/assets/hoja8.png" srcset="">
    <img id="hoja26" src="./view/assets/hoja9.png"  alt="" srcset="">
    <img id="hoja27" src="./view/assets/hoja11.png"  alt="" srcset="">
    <img id="hoja28" src="./view/assets/hoja1.png"  alt="" srcset="">
    <img id="hoja29" src="./view/assets/hoja5.png"  alt="" srcset=""> 
    <img id="hoja30" src="./view/assets/hoja6.png"  alt="" srcset="">
    <img id="hoja31" src="./view/assets/hoja7.png"  alt="" srcset="">
</div>
 
<div class="PostItAnimacion"></div>

  
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
      <a href='index.php?section=crearMensaje' ><button id='crearMensaje'>".$language["CREAR_MSJ_PRINC"]."</button></a>
        <a href='index.php?section=ver'><button id='mensajeAprobados'>".$language["MSJ_APR_PRINC"]."</button></a>
        <a href='index.php?section=mensajesNoAprobados'><button id='mensajeNoAprobados'>".$language["MSJ_NOAPR_PRINC"]."</button></a>
    </div>";}
    ?>
</div>

