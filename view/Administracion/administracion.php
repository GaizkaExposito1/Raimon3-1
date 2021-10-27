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
			<div class="perfil"><?php echo $language["ADMINISTRACION"]; ?></div>
			<div class="eula"><?php echo $language["TXT_ADMIN"]; ?></div>
			<input type="button" id="mostrar" value="<?php $language["MOSTRAR_CAJA"]; ?>" onclick="mostrarCaja()">



		</div>
		<div class="right" id="right">
			<form action="./controller/actions/banear.php"  method="post">
				<select name="UsersNB" >
						<option value="usersNoBaneados" disabled selected><?php echo $language["UsersNB"]; ?> </option>
						<?php 
						if(empty($usersNB)){
							echo "<option value='NO'>".$language["NBsms"]."</option>";
						}else{
						for ($i=0; $i < count($usersNB); $i++) { 
							echo "<option value='".$usersNB[$i]->id."'>".$usersNB[$i]->username."</option>";
						}}
						?>
					</select>
					<input type="submit" id="aceptar" value="<?php echo $language["BANEAR"]; ?>">
			</form>
			<form action="./controller/actions/desbanear.php"  method="post">
				<select name="UsersB" >
						<option value="usersBaneados" disabled selected><?php echo $language["UsersB"]; ?> </option>
						<?php 
						if(empty($usersB)){
							echo "<option value='NO'>".$language["UsersBsms"]."</option>";
						}else{
						for ($i=0; $i < count($usersB); $i++) { 
							echo "<option value='".$usersB[$i]->id."'>".$usersB[$i]->username."</option>";
						}}
						?>
					</select>
					<input type="submit" id="aceptar" value="<?php echo $language["DESBANEAR"]; ?>">
			</form>
			<form id="mensajes" action="./controller/actions/Acept.php"  method="post">
				<select id="sel" name="sms" >
						<option value="smsD" disabled selected><?php echo $language["MensajesNA"]; ?> </option>
						<?php 
						if(empty($sms)){
							echo "<option value='NO'>".$language["MensajesNAsms"]."</option>";
						}else{
						for ($i=0; $i < count($sms); $i++) { 
							echo "<option id='".$sms[$i]->id."' value='".$sms[$i]->id."'>".$sms[$i]->texto."</option>";
						}}
						?>
					</select>
					<button id="aceptms"><?php echo $language["ACEPTARM"]; ?></button>
					<button id="denyms"><?php echo $language["DENEGARM"]; ?></button>
			</form>
			<form action="./controller/actions/newAdmin.php"  method="post">
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
					
					<input type="submit" id="aceptar" value="<?php echo $language["ACEPTAR"]; ?>">
		</form>

		</div>
	</div>
</div>
</article>
