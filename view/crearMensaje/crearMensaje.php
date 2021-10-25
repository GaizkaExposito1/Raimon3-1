<article>
<div class="page">
	<div class="container">
	  <div class="left" id="left">
		<div class="crearMensaje">Crear Mensaje</div>
		<div class="eula">Aqui podras escribir tu mensaje</div>
		<input type="button" id="mostrar" value="mostrar" onclick="mostrarCaja()">



	  </div>
	  <div class="right" id="right"> 
	  <form action="./controller/actions/crearMensaje.php"  method="post">



        <textarea name= textarea rows= 6 cols= 45 maxlength= 280 placeholder="Escribe aqui tu Mensaje... (Max 280 caracteres)"></textarea>

        <select name="select" >
           <option value="curso" disabled selected> Color Letra</option>
		   <!--rueda color-->
           
         </select>
         <select name="select" >
           <option value="curso" disabled selected> Tipografia</option>
		   <option value="curso" > Tipografia</option>
         </select>	  

		  <select name="select" >
           <option value="curso" disabled selected> Color Hoja</option>
		   <!--rueda color-->
           
         </select>
		 <input type="radio" id="anonimo" name="anonimo" value="anonimo">
			<label for="html">anonimo</label><br>
		<input type="radio" id="NOanonimo" name="anonimo" value="NOanonimo">
			<label for="css">No anonimo</label><br>
		  <input type="submit" id="aceptar" value="Aceptar">
		</form>
	  </div>
	</div>
  </div>
</article>






