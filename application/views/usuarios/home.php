<br>
<br>
<br>
<br>




	<div class="row col-md-4 col-md-offset-4">

		<div class="page-header"><h2>Registro de usuarios</h2></div>
	

		<form action="<?php echo base_url();?>index.php/usuarios_controller/registrarUsuarios" method="post">
			
			<label>Nombre:</label>
			<input type="text" class="form-control" name="nombre" id="nombre">
			
			<label>Apellido:</label>
			<input type="text" class="form-control" name="apellido" id="apellido">

	 		<!-- prueba ajax -->
			<label>Estado:</label>
			<select name="estado" class="form-control" id="estado" >
				<!-- <option id="estado"> </option>	 -->			
			</select>			
			
			<label>Capital:</label>
			<select name="capital" class="form-control" id="capital">
				<!-- <option id="capital"> </option>	 -->
			</select>

		<!-- 	<h1 id="prueba">aa</h1>	 -->		

			<label>Usuario:</label>
			<input type="text" class="form-control" name="usuario" id="usuario">

			<label>Contraseña:</label>
			<input type="password" class="form-control" name="contrasena" id="contrasena">

			<br>
			<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok"
			>Registrar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		</form>
		
	</div>