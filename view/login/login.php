<?php

if (isset($lang)) {
    $url_prefix="../../view/login";
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
	<link rel="stylesheet"  href="<?php echo "$url_prefix"?>/loginStyle.css"> 
	<script src="<?php echo "$url_prefix"?>/login.js"></script>
</head>
<body>
	

<div class="page">
	<div class="container">
	  <div class="left">
		<div class="login"><?php echo $language["INICIO_SESION"]; ?></div>
		<div class="eula"><?php echo $language["LOGIN_SUBTITULO"]; ?></div>
		<input type="button" id="mostrar" name="mostrar" value="Mostrar" onclick=mostrarCaja() ></input>
	  </div>
	  <div class="right"> 
		<div class="form">
		  <label for="suario"><?php echo $language["USER"]; ?></label>
		  <input type="text" id="text">
		  <label for="password"><?php echo $language["PASS"]; ?></label>
		  <input type="password" id="password">
		  <input type="submit" id="submit" value="<?php echo $language["ACEPTAR"]; ?>">
		</div>
	  </div>
	</div>
  </div>
</body>
</html>

<script>
	function mostrarCaja() {
		
	}

</script>