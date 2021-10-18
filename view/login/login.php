<?php

if (isset($lang)) {
    $url_prefix="..";
}else{
    $lang = "es";
    $url_prefix=".";
}
require_once ("$url_prefix/view/Language/lang_" . $lang . ".php");
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