<?php
if(isset($_SESSION['error'])){
		echo "<div id='alert' class='alert alert-danger' role='alert'>".$_SESSION['error']."</div>";
		unset($_SESSION['error']);
}
?>
<article>
    <a href="$_SERVER['HTTP_REFERER']">Volver</a>
	<div class="page">
		<div class="container">
			<div class="left" id="left">
				<div class="perfil"><?php echo $language["PERFIL"]; ?></div>
				<div class="eula"><?php echo $language["TXT_PERFIL"]; ?></div>
				<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">
			</div>
			<div class="right" id="right">
                <h4 id="creadorMensaje">Mensaje escrito por CreadorMensaje</h4>
				<p id="mensaje">Mensaje:</p>
				<p id="estado">Estado de mensaje:</p>
				
                <p id="like">
                <a href="#" title="Love it" class="btn btn-counter" data-count="0"><span>&#x2764;</span></a> 
                </p>
				<a class='delete' href='#wii'>Eliminar Mensaje</a>
			</div>
		</div>
	</div>
</article>
