<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Principal/style.css">
    <script src="../principal.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>




 <h1>Árbol de los deseos <span>&#127810;</span></h1>
 <!----------------------------------------------------------------------->

  <div class="carouseandSelect">
  
        <select name="select" >
           <option value="curso" disabled selected> Curso</option>
           <?php 
		   $cursos=$grupos; 
           
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$cursos[$i]</option>";
			
		   }

		   ?>
        </select>

        <div>
        
          <img src="../assets/Arbol.png" alt="" >
    
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
               <!--Prueba de like-->              
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
           <div class="item">
               <p class="mensaje"> 
                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae, 
                   minus commodi iusto vel a dolore? Voluptas 
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

            <!--------------->
      
            <div class="links">
            <a href="../crearMensajes/crearMensaje.php"><button>Crear Mensaje</button></a>
            <a href="../mensajesAprobados/mensajesAprobados.php"><button>Mensajes Aprobados</button></a>
            <a href="../mensajesNoAprobados/mensajesNoAprobados.php"><button>Mensajes Aprobados</button></a>



            </div>



    
    </div>

</body>
</html>
