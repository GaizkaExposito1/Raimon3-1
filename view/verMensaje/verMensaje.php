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
                <h4 id="creadorMensaje">Mensaje escrito por: </h4><?php $user?>
				<p id="mensaje">Mensaje:</p><?php $mensaje->texto ?>
				<p id="estado">Estado de mensaje:</p>
				<?php
                if($mensaje->activateToken==null){
                    //no esta activo
                }else{
                    //esta activo
                }
                ?>
                <p id="like">
                <a href="./controller/actions/darLike.php" title="Love it" class="btn btn-counter" data-count="0"><span>&#x2764;</span></a> 
                </p>
				<?php
				$_SESSION['smsId']= $mensaje->id;
				echo"<a class='delete' href='./controller/actions/eliminarMensaje.php'>Eliminar Mensaje</a>
				<a class='delete' href='index.php?section=editarMensaje'>EditarMensaje</a>";?>
			</div>
		</div>
	</div>
</article>
