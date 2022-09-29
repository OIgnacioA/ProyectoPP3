<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Datos del estudiante</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="estilos_altaAlumno.css">
</head>
<?php

session_start(); 
?>

<body>


	<main>
		<h4 id="titulo"> Datos del estudiante </h4>
		<form action="altaAlumno.php"  class="formulario" id="formulario" method="post" >


			<!-- Grupo: Nombres -->
			<div class="formulario__grupo" id="grupo__nombre">
				
				<label for="nombre" class="formulario__label">Nombres</label>

				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" maxlength="100"  pattern="[a-zA-Z\s]{1,100}">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Los nombres tienen que tener hasta 100 caracteres y no puede contener numeros.</p>

			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="tele" id="telefono" placeholder="4491234567"  pattern="[0-9]{1,14}">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>		

			<!-- Grupo: Apellidos -->
			<div class="formulario__grupo" id="grupo__apellidos">
				<label for="nombre" class="formulario__label">Apellidos</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellido" id="apellidos" pattern="[a-zA-Z\s]{1,100}">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Los apellidos tiene que tener hasta 100 caracteres y no puede contener numeros.</p>
			</div>	


			<!-- Grupo: Mail de un contacto -->
			<div class="formulario__grupo" id="grupo__mailcontacto">
				<label for="mailcontacto" class="formulario__label">Mail de un contacto</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="emailC" id="mailcontacto" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>
			
			<!-- Grupo: Fecha nacimiento -->
			<div class="formulario__grupo" id="grupo__fechanac">
				<label for="fechanac" class="formulario__label">Fecha de nacimiento</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="calendarioN" id="fechanac">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				
			</div>

			<!-- Grupo: Direccion -->
			<div class="formulario__grupo" id="grupo__direccion">
				<label for="direccion" class="formulario__label">Direccion</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Ingrese direccion" maxlength="100">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">.</p>
			</div>

			<!-- Grupo: Genero -->
			<div class="formulario__grupo" id="grupo__genero">
				<label for="genero" class="formulario__label">Genero</label>
				<div class="formulario__grupo-input">
					<select class="formulario__input" name="genero">
						<option value="Masculino">Masculino</option>
						<option value="Femenino" selected>Femenino</option>
						<option value="Otro">Otro</option>
					</select>
				</div>
			</div>

			<!-- Grupo: Provincia -->
			<div class="formulario__grupo" id="grupo__provincia">
				<label for="provincia" class="formulario__label">Provincia</label>
				<div class="formulario__grupo-input">
					<select class="formulario__input" name ="provincia">
						<option value="Buenos Aires">Buenos Aires</option>
						<option value="Cordoba" selected>Cordoba</option>
						<option value="Santa Fe">Santa Fe</option>
						<option value="Catamarca">Catamarca</option>
						<option value="Chaco">Chaco</option>
						<option value="Chubut">Chubut</option>
						<option value="Corrientes">Corrientes</option>
						<option value="Entre Ríos">Entre Ríos</option>
						<option value="Formosa">Formosa</option>
						<option value="Jujuy">Jujuy</option>
						<option value="La Pampa">La Pampa</option>
						<option value="La Rioja">La Rioja</option>
						<option value="Mendoza">Mendoza</option>
						<option value="Misiones">Misiones</option>
						<option value="Neuquén">Neuquén</option>
						<option value="Río Negro">Río Negro</option>
						<option value="Salta">Salta</option>
						<option value="San Juan">San Juan</option>
						<option value="San Luis">San Luis</option>
						<option value="Santa Cruz">Santa Cruz</option>
						<option value="Santiago del Estero">Santiago del Estero</option>
						<option value="Tierra del Fuego, Antártida e Islas del Atlántico Sur">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
						<option value="Tucumán">Tucumán</option>
					</select>
				</div>
			</div>

            

			<!-- Grupo: Dni -->

			<!--<div class="formulario__grupo" id="grupo__dni">
				<label for="dni" class="formulario__label">Dni</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="dniP" id="dni" placeholder="44912345">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El Dni solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>	-->

			<div class="formulario__grupo" id="grupo__dni">

				<label for="dni" class="formulario__label">DNI/Pasaporte</label>
				<select class="formulario__input" name="DNIPassT">
					<option value="D">DNI</option>
					<option value="P">Pasaporte</option>
				</select>
				
			</div>

			<div class="formulario__grupo" id="grupo__dni">
				<label for="dni" class="formulario__label">Dni</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="dniP" id="dni" placeholder="4491234567" maxlength="9">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El Dni solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>	

			<!-- Grupo: Localidad -->
			<div class="formulario__grupo" id="grupo__localidad">
				<label for="localidad" class="formulario__label">Localidad</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="localidad" maxlength="50">
				</div>
			</div>

			<!-- Grupo: E-Mail -->
			<div class="formulario__grupo" id="grupo__email">
				<label for="email" class="formulario__label">E-Mail</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="emailC" id="mailcontacto" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>				

		
			<!-- Grupo: Celular COD AREA -->
			

			<div class="formulario__grupo" id="grupo__celular">
				<label for="celular" class="formulario__label">Cod Area</label>
				<input class="formulario__input" type="text" name="cod" id="cod" placeholder="Codigo de Area" maxlength="5">
			</div>


			<div class="formulario__grupo" id="grupo__celular">
				
				<label for="celular" class="formulario__label">Celular</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="tel" id="celular" placeholder="4491234567"  pattern="[0-9]{1,9}" >
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El celular solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>


	       <!-- Grupo: Año egreso -->
	       <div class="formulario__grupo" id="egreso">
				<label for="egreso" class="formulario__label">Egreso</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="egreso" id="egreso" placeholder="Ingrese Año" pattern="[0-9]{4}">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El año solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>					
					
			<!-- Grupo: Titulo del secundario -->
			<div class="formulario__grupo" id="titulo_secundario">
				<label for="titulo_secundario" class="formulario__label">Titulo del secundario</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="titulo" id="titulo_secundario" pattern="[a-zA-Z\s]{1,100}">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El titulo tiene que tener hasta 100 caracteres y no puede contener numeros.</p>
			</div>		

	
			<!-- EXTRAS-------------------------------------------------> 

			<div class="formulario__grupo"  id="grupo__genero"> 
				<label for="genero" class="formulario__label">Carrera</label>

				<select  class="formulario__input"  Name="carrera">
					<option value='1'>Analista de sistemas</option>
					<option value='2'>Desarrollador de software</option>
					<option value='3'>Seguridad e higiene</option>
				</select>

			</div> 

              <!--mail contacto -->
			<div class="formulario__grupo" id="grupo__mailcontacto">
				<label for="mailcontacto" class="formulario__label">Mail</label>
				<div class="formulario__grupo-input">
					<input type="mailcontacto" class="formulario__input" name="email" id="mailcontacto" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>


			

           <!--codigo area  y celular contaco -->
		   <div class="formulario__grupo" id="grupo__celular">
				<label for="celular" class="formulario__label">Cod Area</label>
				<input class="formulario__input" type="text" name="codC" id="cod" placeholder="Codigo de Area" pattern="[0-9]{1,5}">
			</div>	



			<div class="formulario__grupo" id="grupo__celular">
				<label for="celular" class="formulario__label">Celular Contacto</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telC" id="celular" placeholder="4491234567" pattern="[0-9]{1,14}">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El celular solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>
			<!--Estado-->

			<div class="formulario__grupo" id="grupo__provincia">
			<label for="provincia" class="formulario__label">Estado</label>
				<select class="formulario__input" Name="estado" class="formulario__grupo" id="titulo_secundario" >
					<option value='Egresado'>Egresado</option>
					<option value='Regular' selected>Regular</option>
					<option value='Inscripto' selected>Inscripto</option>
					<option value='Noregular' selected>No regular</option>
				</select>		
			</div>

			<!-- Grupo: alta fecha -->
			<div class="formulario__grupo" id="grupo__fechanac">
				<label for="fechanac" class="formulario__label">Fecha de nacimiento</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="calendarioAlta" id="fechanac">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				
			</div>

			<div class="formulario__grupo" id="grupo__celular">
			<label for="celular" class="formulario__label">Observaciones</label>
			<textarea name="observacion" rows="10" cols="50"></textarea>
			</div>
			
       
			<!-------------------------------------------------->

			<!-- Grupo: Terminos y Condiciones -->

		

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
					Acepto los Terminos y Condiciones
				</label>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" name="send">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>

			
		</form>
	</main>
	
	<!--<script src="formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>-->

    
<?php


if ( isset($_POST["send"]))  {

  require_once("../Controlador/ingresarAlumno.php");
 
}
?>





</body>
</html>