<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Principal/style.css">
    <script src="../principal.js"></script>
    
    <!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>


       <!----------------------------------------------------------------------------->

  <div>
  
        <select name="select" >
           <option value="curso" disabled selected> Curso</option>
           <?php 
		   $cursos=$grupos; 
          /*  $grupos=$bd->getCursos(); */
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$cursos[$i]</option>";
			
		   }

		   ?>
         </select>

        <div>
        
        <img id="kalpataru" src="../assets/Arbol.png">
    
        </div>


     </div>

 <!--Boststrap carousel-->
        <div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselCustom" data-slide-to="1"></li>
        <li data-target="#myCarouselCustom" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
           <p class="lorem">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Rem dolorum libero ea aliquid, odio, ipsam beatae laudantium
               illum temporibus culpa quibusdam quasi atque sunt incidunt alias
                omnis suscipit. Nam, tenetur.</p>
             <p class="lorem">like 40</p>
         <div class="carousel-caption">
            
            </div>
         </div>
  
         <div class="item">
          <p class="lorem">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Rem dolorum libero ea aliquid, odio, ipsam beatae laudantium
               illum temporibus culpa quibusdam quasi atque sunt incidunt alias
                omnis suscipit. Nam, tenetur.</p>
                <p class="lorem">like 100</p>
             <div class="carousel-caption">
         
            </div>
        </div>
        
        <div class="item">
         <p class="lorem">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Rem dolorum libero ea aliquid, odio, ipsam beatae laudantium
               illum temporibus culpa quibusdam quasi atque sunt incidunt alias
                omnis suscipit. Nam, tenetur.</p>
                <p class="lorem">like 500</p>
               <div class="carousel-caption">
           
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="antrior">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="siguiente">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>





</body>
</html>