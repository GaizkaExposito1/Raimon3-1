<article>
<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="crearMensaje"><?php echo $language["CREAR_MSJ"]; ?></div>
		<div class="eula"><?php echo $language["TXT_CREAR_MSJ"]; ?></div>
		<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">



	  </div>
	  <div class="right" id="right"> 
	  <form action="./controller/actions/crearMensaje.php"  method="post">



        <textarea name= textarea rows= 6 cols= 45 maxlength= 280 placeholder="<?php echo $language['PLACEHOLDER_CREAR_MSJ']; ?>"> </textarea>

        <select name="select" >
           <option value="curso" disabled selected><?php echo $language["COLOR_LETRA"]; ?></option>
		   <!--rueda color-->
           
         </select>
         <select name="select" >
           <option value="curso" disabled selected><?php echo $language["TIPOGRAFIA"]; ?></option>
		   <option value="curso" > <?php echo $language["TIPOGRAFIA"]; ?></option>
         </select>	  

		  <select name="select" >
           <option value="curso" disabled selected> <?php echo $language["COLOR_HOJA"]; ?></option>
		   <!--rueda color-->
           
         </select>
		 <input type="radio" id="anonimo" name="anonimo" value="<?php echo $language['ANONIMO']; ?>">
			<label for="html"><?php echo $language["ANONIMO"]; ?></label><br>
		<input type="radio" id="NOanonimo" name="anonimo" value="<?php echo $language['NO_ANONIMO']; ?>">
			<label for="css"><?php echo $language["NO_ANONIMO"]; ?></label><br>
		  <input type="submit" id="aceptar" value="<?php echo $language['ACEPTAR']; ?>">
		</form>
	  </div>
	</div>
  </div>
</article>






