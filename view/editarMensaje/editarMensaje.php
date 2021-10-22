

<article>
<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="crearMensaje">Editar Mensaje</div>
		<div class="eula">Aqui podras editar tu mensaje</div>
		<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">



	  </div>
	  <div class="right" id="right"> 
	  <form action=""  method="post">



        <textarea disabled name= textarea rows= 6 cols= 45 maxlength= 280 placeholder="Escribe aqui tu Mensaje... (Max 280 caracteres)"></textarea>

        <select name="select" >
           <option value="curso" disabled selected> Color</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$colorTipografia[$i]</option>";
			
		   }

		   ?>
         </select>
         <select name="select" >
           <option value="curso" disabled selected> Tipografia</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$tipografia[$i]</option>";
			
		   }

		   ?>
         </select>	  

		  <select name="select" >
           <option value="curso" disabled selected> Color Hoja</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$color[$i]</option>";
			
		   }

		   ?>
         </select>
         <select name="select" >
           <option value="curso" disabled selected> Forma Hoja</option>
           <?php 
		   $cursos=$grupos;
		   
		   for ($i=0; $i < count($cursos); $i++) { 
			echo "<option value='cursos'>$Forma[$i]</option>";
			
		   }

		   ?>
         </select>

		  <input type="submit" id="aceptar" value="Aceptar">
		</form>
	  </div>
	</div>
  </div>
</article>






