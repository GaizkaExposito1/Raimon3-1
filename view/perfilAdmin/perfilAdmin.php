<?php
require_once "../../model/accesoBD.class.php";
require_once "../../model/clases/mensaje.class.php";

$bd= new AccesoBd();
 ?>





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
		  <div id="datosPerfil">
			<p>Usuario : NOMBREUSUARIO</p>
			<p>Email: EMAILUSUARIO</p>
			<p>Contraseña:  </p>
			<button id="cambiarContraseña">Cambiar Contraseña</button>
			<button id="cambiarUsername">Cambiar Usuario</button>
			<button id="cambiarEmail">Cambiar Email</button>
			<br/>
			<a href="#mensajesAprobados" id="mensajesAprobados">Mensajes Aprobados</a>
			<a href="#mensajesNoAprobados"  id="mensajesDenegados">Mensajes Denegados</a>
			<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#vercontraseñaModal">
  Ver Contraseña
</button>

<!-- Modal Ver Contraseña -->
<div class="modal fade" id="vercontraseñaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ver Contraseña</h5>
      </div>
      <div class="modal-body">
        La contraseña de tu cuenta es: 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
		  </div>
			  <div id="editarDatsos">
			  <form action="" id="editarContraseña" method="post">
			  <label for="Contraseña">Contraseña Antiguo</label>
		 	  <input type="password" id="email">
			  <label for="Contraseña">Nuevo Contraseña</label>
			  <input type="password" id="NewEmail">
			   <label for="Contraseña">Repite Nuevo Contraseña</label>
			   <input type="password" id="repeatNewEmail">
			   <p><input type="submit" id="submit" value="Enviar"></p>
			</form>
			<form action="" id="editarEmail" method="post">
			  <label for="email">Email Antiguo</label>
		 	  <input type="email" id="email">
			  <label for="email">Nuevo Email</label>
			  <input type="email" id="email">
			   <p><input type="submit" id="submit" value="Enviar"></p>
			</form>
			<form action="" id="editarUsername" method="post">
			  <label for="Username">Username Antiguo</label>
		 	  <input type="text" id="username">
			  <label for="Username">Nuevo Username</label>
			  <input type="text" id="username">
			   <p><input type="submit" id="submit" value="Enviar"></p>
			</form>
		  </div>

	  </div>
	</div>
  </div>
</article>



<!--
	datos perfil tic
camios de perfil (foto, contraseña, email, username) tic
enlace para ver mensajes aprobados 
enlace para ver mensajes no aprobados
------------------------
rol=2
crear Admins
banear users**
lista users baneados 
unban user **
-->


