<article>
	<div class="page">
		<div class="container">
			<div class="left" id="left">
				<div class="perfil"><?php echo $language["PERFIL"]; ?></div>
				<div class="eula"><?php echo $language["TXT_PERFIL"]; ?></div>
				<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">
			</div>
			<div class="right" id="right">
				<div id="imgPerfil">
					<img id="imgUser" src="./view/assets/cat.jpg" alt="imagen de perfil">
				</div>
				<div id="datosPerfil">
					<p><?php echo $language["USUARIO_PERFIL"]; ?></p>
					<p><?php echo $language["EMAIL_PERFIL"]; ?></p>
					<p><?php echo $language["CONTRA_PERFIL"]; ?></p>
					<button id="cambiarContraseña"><?php echo $language["CAMBIAR_CONTRA_PERFIL"]; ?></button>
					<button id="cambiarUsername"><?php echo $language["CAMBIAR_USUARIO_PERFIL"]; ?></button>
					<button id="cambiarEmail"><?php echo $language["CAMBIAR_EMAIL_PERFIL"]; ?></button>
					<br />
					<a href="#mensajesAprobados"
						id="mensajesAprobados"><?php echo $language["MENSAJES_APROBADOS"]; ?></a>
					<a href="#mensajesNoAprobados"
						id="mensajesDenegados"><?php echo $language["MENSAJES_DENEGADOS"]; ?></a>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vercontraseñaModal">
						<?php echo $language["VER_CONTRA_PERFIL"]; ?>
					</button>
					<!-- Modal Ver Contraseña -->
					<div class="modal fade" id="vercontraseñaModal" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">
										<?php echo $language["VER_CONTRA_PERFIL"]; ?></h5>
								</div>
								<div class="modal-body">
									<?php echo $language["CONTRA_ES_PERFIL"]; ?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="editarDatsos">
					<form action="./controller/actions/editPerfil.php" id="editarContraseña" method="post">
						<label for="Contraseña"><?php echo $language["ANTIGUA_CONTRA_PERFIL"] ?></label>
						<input type="password" id="email">
						<label for="Contraseña"><?php echo $language["NEW_CONTRA_PERFIL"] ?></label>
						<input type="password" id="NewEmail" name="newPass">
						<label for="Contraseña"><?php echo $language["REPNEW_CONTRA_PERFIL"] ?></label>
						<input type="password" id="repeatNewEmail" name="newConfpass">
						<p><input type="submit" id="submit" value="<?php echo $language['NEW_USERNAME_PERFIL'] ?>"></p>
					</form>
					<form action="" id="editarEmail" method="post">
						<label for="email"><?php echo $language["ANTIGUO_EMAIL_PERFIL"] ?></label>
						<input type="email" id="email">
						<label for="email"><?php echo $language["NEW_EMAIL_PERFIL"] ?></label>
						<input type="email" id="email" name="newEmail">
						<p><input type="submit" id="submit" value="<?php echo $language['NEW_USERNAME_PERFIL'] ?>"></p>
					</form>
					<form action="" id="editarUsername" method="post">
						<label for="Username"><?php echo $language["ANTIGUO_USERNAME_PERFIL"] ?></label>
						<input type="text" id="username">
						<label for="Username"><?php echo $language["NEW_USERNAME_PERFIL"] ?></label>
						<input type="text" id="username" name="newUsername">
						<p><input type="submit" id="submit" value="<?php echo $language['NEW_USERNAME_PERFIL'] ?>"></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</article>
