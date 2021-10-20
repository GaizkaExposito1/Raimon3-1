<?php
require_once "../../model/accesoBD.class.php";
require_once "../../model/clases/mensaje.class.php";

$bd= new AccesoBd();
 ?>



<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="crearMensaje.css">
<script src="<?php echo "$url_prefix"?>/crearMensaje.js"></script> <!--NO FUNCIONA PREGUNTAR-->
<script src="js/jquery.min.js"></script>
</head>

	
<article>
<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="crearMensaje">Crear Mensaje</div>
		<div class="eula">Aqui podras escribir tu mensaje</div>
		<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">



	  </div>
	  <div class="right" id="right"> 
	  <form action=""  method="post">



        <textarea name= textarea rows= 6 cols= 45 maxlength= 280 placeholder="Escribe aqui tu Mensaje... (Max 280 caracteres)"></textarea>

        <select name="select" >
           <option value="curso" disabled selected> Color</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$colorTipografia[$i]</option>";
			
		   }

		   ?>
         </select>
         <select name="select" >
           <option value="curso" disabled selected> Tipografia</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$tipografia[$i]</option>";
			
		   }

		   ?>
         </select>	  

		  <select name="select" >
           <option value="curso" disabled selected> Color Hoja</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$color[$i]</option>";
			
		   }

		   ?>
         </select>
         <select name="select" >
           <option value="curso" disabled selected> Forma Hoja</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$Forma[$i]</option>";
			
		   }

		   ?>
         </select>

		  <input type="submit" id="aceptar" value="Aceptar">
		</form>
	  </div>
	</div>
  </div>
</article>






