<?php
if(isset($_GET['error'])){
	$param=$_GET['error'];
	if($param=="Usuario%no%encontrado"){
		echo "<script>$( document ).ready(function() {
			$('#exampleModal').modal('toggle')
		});</script>";
	}else{
		echo "<script>$( document ).ready(function() {
			$('#alert').alert('toggle')
		});</script>";
	}
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
		<a href="index.php?section=registro">Registro</a>
	  </div>
	</div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $language["ERROR"]; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
			$er=str_replace("%"," ",$param);
			echo $er;
		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $language["REIN_DATOS"]; ?></button>
        <button type="button" class="btn btn-primary" onclick="$(location).attr('href','index.php?section=registro')"><?php echo $language["IR_REGIS"]; ?></button>
      </div>
    </div>
  </div>
</div>

<!--alert-->
<div id="alert" class="alert alert-danger" role="alert">
		<?php
			$er=str_replace("%"," ",$param);
			echo $er;
		?>
</div>