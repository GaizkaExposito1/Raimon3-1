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
<script src="/login.js"></script>
<script src="js/jquery.min.js"></script>
</head>

	
<article>
<div class="page">
	<div class="container">
	  <div class="left">
		<div class="register">Crear Mensaje</div>
		<div class="eula">Aqui podras escribir tu mensaje</div>
		<input type="button" id="continuar" value="continuar" onclick="botonContinuar()">
		<!--Este boton es para el responsive-->


	  </div>
	  <div class="right"> 
		<div class="form">



        <textarea name= textarea rows= 10 cols= 38 placeholder="Escribe aqui tu Mensaje..."></textarea>

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
		</div>
	  </div>
	</div>
  </div>
</article>









