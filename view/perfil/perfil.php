<?php
require_once "../../model/accesoBD.class.php";
require_once "../../model/clases/mensaje.class.php";

$bd= new AccesoBd();
 ?>



<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="perfil.css">
	<script src="<?php echo "$url_prefix"?>/perfil.js"></script> <!--NO FUNCIONA PREGUNTAR-->
	<script src="js/jquery.min.js"></script>
</head>

	
<article>
<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="perfil">Perfil</div>
		<div class="eula">Aqui podras editar tu perfil</div>
		<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">



	  </div>
	  <div class="right" id="right"> 
		  <div id="imgPerfil">
	  		<img src="../assets/cat.jpg" alt="imagen de perfil">
		  </div>
		  <div id="editarDatos">
		  	<form action="" id="editarContraseña" method="post">
			  <label for="Contraseña">Contraseña</label>
		 	  <input type="password" id="password">
			  <label for="Contraseña">Repite Contraseña</label>
		 	  <input type="password" id="repeatpassword">
			   <p><input type="submit" id="submit" value="Enviar"></p>
			</form>
			<form action="" id="editarEmail" method="post">
			  <label for="Contraseña">Contraseña</label>
		 	  <input type="password" id="password">
			  <label for="Contraseña">Repite Contraseña</label>
		 	  <input type="password" id="repeatpassword">
			   <p><input type="submit" id="submit" value="Enviar"></p>
			</form>
		  </div>
	  </div>
	</div>
  </div>
</article>



<!--
camios de perfil (foto, contraseña, email, username)
enlace para ver mensajes aprobados 
enlace para ver mensajes no aprobados
------------------------
rol=2
crear Admins
banear users**
lista users baneados 
unban user **
-->


