<?php

if (isset($lang)) {
    $url_prefix="../../view/registro";
	$url_prefixU="../../view/Language";
}else{
    $lang = "es";
    $url_prefix=".";
	$url_prefixU="..";
}
require_once ("$url_prefixU/Language/lang_" . $lang . ".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo "$url_prefix"?>/registroStyle.css">
<script src="<?php echo "$url_prefix"?>/registro.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>
	

<div class="page">
	<div class="container">
	  <div class="left">
		<div class="register">Registro!!</div>
		<div class="eula">Bienvenido al arbol de los deseos!!</div>
		<input type="button" id="continuar" value="continuar" onclick="botonContinuar()">
		<!--Este boton es para el responsive-->


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
           <option value="curso" disabled selected> Curso</option>
           <?php 
		   for ($i=0; $i < count($grupos); $i++) { 
			echo "<option value='cursos'>$grupos[$i]</option>";
		   }
		   ?>
         </select>

		  <input type="submit" id="aceptar" value="Aceptar">
		</div>
	  </div>
	</div>
  </div>
</body>
</html>




</script>










