<<<<<<< Updated upstream
<section>
    <a href="$_SERVER['HTTP_REFERER']">Volver</a>
    <div>
<p>Username: </p><?php ?>
<p>Activada: </p><?php if($sms->activateToken!=null){//sms activado

}else{//sms no activado

} ?>
<p>Nombre de Tipografia: </p><?php $sms->tipografia ?>
<p>Color de Tipografia: </p><?php $sms->colorTipografia ?>
<p>Color fondo: </p></p><?php $sms->color ?>
<p>Texto de Mensaje: </p></p><?php $sms->texto ?>
<p>Número de Likes: </p></p><?php $sms->numLikes ?>
</div>
</section>
=======
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
				<div class="perfil"><?php echo $language["PERFIL"]; ?></div>
				<div class="eula"><?php echo $language["TXT_PERFIL"]; ?></div>
				<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">
			</div>
			<div class="right" id="right">
                <p>Mensaje escrito por CreadorMensaje</p>
				<p>Mensaje:</p>
                <p>
                <a href="#" title="Love it" class="btn btn-counter" data-count="0"><span>&#x2764;</span></a> 
                </p>
			</div>
		</div>
	</div>
</article>
>>>>>>> Stashed changes
