

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

        <label><?php echo $language["COLOR_LETRA"]; ?></label>
		<input type="color" name="colorTipo">
         </select>
         <select name="select" >
           <option value="curso" disabled selected><?php echo $language["TIPOGRAFIA"]; ?></option>
		   <option value="Scheherazade New" >Scheherazade New</option>
		   <option value="Italianno" >Italianno</option>
		   <option value="IM Fell English SC" >IM Fell English SC</option>
		   <option value="Lobster" >Lobster</option>
		   <option value="Anton" >Anton</option>
		   <option value="Dancing Script" >Dancing Script</option>
		   <option value="Architects Daughter" >Architects Daughter</option>
		   <option value="Pacifico" >Pacifico</option>
		   <option value="Shadows Into Light" >Shadows Into Light</option>
		   <option value="Indie Flower" >Indie Flower</option>
		   <option value="Saira Condensed" >Saira Condensed</option>
         </select>	  

		 <label> <?php echo $language["COLOR_HOJA"]; ?></label>
		  <input type="color" name="color">

		  <input type="submit" id="aceptar" value="<?php echo $language['ACEPTAR']; ?>">
		</form>
	  </div>
	</div>
  </div>
</article>






