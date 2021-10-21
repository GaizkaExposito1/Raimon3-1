<?php
require_once ("./view/Language/lang_".$lang.".php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="./loginStyle.css"> 
	<!--<script src="login.js"></script>-->
</head>
<body>
	

<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="login"><?php echo $language["INICIO_SESION"]; ?></div>
		<div class="eula"><?php echo $language["LOGIN_SUBTITULO"]; ?></div>
		<input type="button" id="mostrar" name="mostrar" value="Mostrar" onclick=mostrarCaja() ></input>
	  </div>
	  <div class="right" id="right"> 
		<form class="form" action="./controller/actions/login.php" method="post">
		  <label for="suario"><?php echo $language["USER"]; ?></label>
		  <input type="text" id="text">
		  <label for="password"><?php echo $language["PASS"]; ?></label>
		  <input type="password" id="password" placeholder=" pon el ojop que todo lo ve">
		  <input type="submit" id="submit" value="<?php echo $language["ACEPTAR"]; ?>">
		</form>
	  </div>
	</div>
  </div>
</body>
</html>

<script>
	function mostrarCaja() {
		let MostrarForm = document.getElementById("right");
		let cambiarTamañoLeft = document.getElementById("left");
		let ocultarBoton = document.getElementById("mostar");
        MostrarForm.style.visibility="visible";
		cambiarTamañoLeft.style.height="88%";
        ocultarBoton.style.visibility="visible";
	}

</script>