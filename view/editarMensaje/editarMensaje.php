

<article>
<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="crearMensaje"><?php echo $language["EDITAR_MSJ"]; ?></div>
		<div class="eula"><?php echo $language["TXT_EDITAR_MSJ"]; ?></div>
		<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">



	  </div>
	  <div class="right" id="right"> 
	  <form action="./controller/actions/editMensaje.php"  method="post">



        <textarea disabled name= textarea rows= 6 cols= 45 maxlength= 280 placeholder="<?php echo $language['PLACEHOLDER_CREAR_MSJ']; ?>"></textarea>

        <select name="select" >
           <option value="curso" disabled selected><?php echo $language["COLOR_LETRA"]; ?></option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$colorTipografia[$i]</option>";
			
		   }

		   ?>
         </select>
         <select name="select" >
           <option value="curso" disabled selected><?php echo $language["TIPOGRAFIA"]; ?></option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$tipografia[$i]</option>";
			
		   }

		   ?>
         </select>	  

		  <select name="select" >
           <option value="curso" disabled selected><?php echo $language["COLOR_HOJA"]; ?></option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$color[$i]</option>";
			
		   }

		   ?>
         </select>
         <select name="select" >
           <option value="curso" disabled selected><?php echo $language["FORMA_HOJA"]; ?></option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$Forma[$i]</option>";
			
		   }

		   ?>
         </select>

		  <input type="submit" id="aceptar" value="<?php echo $language['ACEPTAR']; ?>">
		</form>
	  </div>
	</div>
  </div>
</article>






