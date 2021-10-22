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
					<input type="text" id="text">
					<label for="password"><?php echo $language["PASS"]; ?></label>
					<input type="password" id="password">
					<label for="password"><?php echo $language["CONF_PASS"]; ?> </label>
					<input type="password" id="password">
					<label for="email"><?php echo $language["EMAIL"]; ?></label>
					<input type="email" id="email">
					<label for="userName"><?php echo $language["USER"]; ?></label>
					<input type="text" id="text">
					<select name="cursoId" >
						<option value="curso" disabled selected><?php echo $language["CURSO"]; ?> </option>
						<?php 
						for ($i=0; $i < count($grupos); $i++) { 
							echo "<option value='cursos'>$grupos[$i]</option>";
						}
						?>
					</select>
					<input type="submit" id="aceptar" value="<?php echo $language["ACEPTAR"]; ?>">
				</form>
			</div>
		</div>
	</div>
</article>