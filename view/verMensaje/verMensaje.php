<?php
if(isset($_SESSION['error'])){
		echo "<div id='alert' class='alert alert-danger' role='alert'>".$_SESSION['error']."</div>";
		unset($_SESSION['error']);
}
?>
<article>
    <a href="$_SERVER['HTTP_REFERER']"><?php echo $language["RETURN"]; ?></a>
	<div class="page">
		<div class="container">
			<div class="left" id="left">
				<div class="perfil"><?php echo $language["PERFIL"]; ?></div>
				<div class="eula"><?php echo $language["TXT_PERFIL"]; ?></div>
				<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">
			</div>
			<div class="right" id="right">
                <h4 id="creadorMensaje"><?php echo $language["MSJ_ECR_POR"]; ?></h4><?php $user?>
				<p id="mensaje"><?php echo $language["MSJ_VERMSJ"]; ?></p><?php $mensaje->texto ?>
				<p id="estado"><?php echo $language["ESTADO_MSJ"]; ?></p>
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
				<a class='delete' href='./controller/actions/eliminarMensaje.php'><?php $language["DEL_MSJ"]; ?></a>
			</div>
		</div>
	</div>
</article>
