<?php
if(isset($_SESSION['error'])){
		echo "<div id='alert' class='alert alert-danger' role='alert'>".$_SESSION['error']."</div>";
		unset($_SESSION['error']);
}
?>
<article>
	<div class="page">
		<div class="container">
			<div class="left" id="left">
				<div class="register"><?php echo $language["REGISTRO"]; ?></div>
				<div class="eula"><?php echo $language["REGIS_SUBTITLE"]; ?></div>
				<input type="button" id="mostrar" name="mostrar" value="Mostrar" onclick=mostrarCaja() ></input>		<!--Este boton es para el responsive-->
			</div>
			<div class="right" id="right"> 
				<form action="./controller/actions/registro.php"  method="post">
					<label for="dni"><?php echo $language["DNI"]; ?></label>
					<input type="text" id="text" name="dni">
					<label for="password"><?php echo $language["PASS"]; ?></label>
					<input type="password" id="password" name="pass">
					<label for="password"><?php echo $language["CONF_PASS"]; ?> </label>
					<input type="password" id="password" name="confpass">
					<label for="email"><?php echo $language["EMAIL"]; ?></label>
					<input type="email" id="email" name="email">
					<label for="userName"><?php echo $language["USER"]; ?></label>
					<input type="text" id="text" name="username">
					<select name="cursoId" >
						<option value="curso" disabled selected><?php echo $language["CURSO"]; ?> </option>
						<?php 
						for ($i=0; $i < count($grupos); $i++) { 
							echo "<option value='".$grupos[$i]->id."'>$grupos[$i]</option>";
						}
						?>
					</select>
					<input type="submit" id="aceptar" value="<?php echo $language["ACEPTAR"]; ?>">
				</form>
			</div>
		</div>
	</div>
</article>
