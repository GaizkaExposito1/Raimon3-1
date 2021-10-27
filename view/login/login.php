<?php
if(isset($_SESSION['error'])){
		echo "<div id='alert' class='alert alert-danger' role='alert'>".$_SESSION['error']."</div>";
		unset($_SESSION['error']);
}
?>
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
		  <input type="text" id="text" name="text">
		  <label for="password"><?php echo $language["PASS"]; ?></label>
		  <input type="password" id="password"  name="password" placeholder=" pon el ojop que todo lo ve">
		  <input type="submit" id="submit" value="<?php echo $language["ACEPTAR"]; ?>">
		</form>
		<a id="Register" href="index.php?section=registro"><?php echo $language["REGIS"]; ?></a>
	  </div>
	</div>
  </div>

