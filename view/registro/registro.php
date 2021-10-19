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
<link rel="stylesheet" href="registroStyle.css">

<script src="/login.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>

<div class="page">
	<div class="container">
	  <div class="left">
		<div class="register"><?php echo $language["REGISTRO"]; ?></div>
		<div class="eula"><?php echo $language["REGIS_SUBTITLE"]; ?></div>
		<input type="button" id="continuar" value="<?php echo $language["CONTINUAR"]; ?>" onclick="botonContinuar()">
		<!--Este boton es para el responsive-->


	  </div>
	  <div class="right"> 
		<div class="form">



          <label for="dni"><?php echo $language["DNI"]; ?></label>
		  <input type="text" id="text">

		  <label for="password"><?php echo $language["PASS"]; ?></label>
		  <input type="password" id="password">

		  <label for="password"><?php echo $language["CONF_PASS"]; ?> </label>
		  <input type="password" id="password">

		  <label for="email"><?php echo $language["EMAIL"]; ?></label>
		  <input type="email" id="email">


		  <label for="userName"><?php echo $language["USER"]; ?></label>
		  <input type="text" id="text">


		  <select name="select" >
           <option value="curso" disabled selected><?php echo $language["CURSO"]; ?> </option>
           <?php 
		   for ($i=0; $i < count($grupos); $i++) { 
			echo "<option value='cursos'>$grupos[$i]</option>";
		   }
		   ?>
         </select>

		  <input type="submit" id="aceptar" value="<?php echo $language["ACEPTAR"]; ?>">
		</div>
	  </div>
	</div>
  </div>
</body>
</html>




</script>










