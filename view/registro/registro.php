<?php
require_once "../../model/accesoBD.class.php";
require_once "../../model/clases/Grupo.class.php";

$bd= new AccesoBd();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/registroStyle.css">
<script src="/login.js"></script>
</head>
<body>
	

<div class="page">
	<div class="container">
	  <div class="left">
		<div class="register">Registro!!</div>
		<div class="eula">Bienvenido al arbol de los deseos!!</div>
	  </div>
	  <div class="right"> 
		<div class="form">



          <label for="dni">Dni</label>
		  <input type="text" id="text">

		  <label for="password">Contraseña</label>
		  <input type="password" id="password">

		  <label for="password">Confirmar Contraseña </label>
		  <input type="password" id="password">

		  <label for="email"> Correo Electrónico</label>
		  <input type="email" id="email">


		  <label for="userName">Usuario</label>
		  <input type="text" id="text">


		  <select name="select" >
           <option value="curso" disabled selected>Curso</option>
           <?php 
		   $cursos=$bd->getCursos();
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$cursos[$i]</option>";
			
		   }

		   ?>
         </select>
		 


        




		  <input type="submit" id="submit" value="Aceptar">
		</div>
	  </div>
	</div>
  </div>
</body>
</html>