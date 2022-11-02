<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<title>Inscripcion Alumno</title>



	<link rel="stylesheet" href="../css/Lista_Admins.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/estiloAltaparro.css">
</head>

<body>
<header>

<div id="cerrarS">
  <button id="btnCerrarS" type="button" class="btn btn-secondary"> <a href="IngresoPlataforma.php">Cerrar Sesion</a></button>
</div>
<div class="container">
  <div class="row d-flex flex-row">
	<div class="col-10 col-md-2 superior">
	  <div id="plataforma" class="d-flex flex-column ">
		<h2>Plataforma</h2>
		<p>Entraste como Administrador</p>
	  </div>
	</div>
	<div class="col superior d-flex justify-content-center align-content-center  ">
	  <div id="titulo">
		<h1 style="color: #f38618;">Nombre del Instituto</h1> 
	  </div>

	</div>
  </div>
</div>

<div>
  <div class="container">
	<div class="row">
	  <div class="col">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid ">
			<div class="imgHome">
			  <a aria-current="page" href="AdminLogueado.php"><img src="../img/home3.png" alt="Inicio"></a>

			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
			  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			  aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item menuli">
				  <a href="Lista_Admins.php">ALTA DE ADMINISTRADOR</a>
				</li>
				<li class="nav-item menuli">
				  <a href="administrar_alumnos.php">ALUMNOS</a>
				</li>
				<li class="nav-item menuli">
				  <a href="crearCarrera.php">CREAR CARRERA</a>
				</li>
				<li class="nav-item menuli">
				  <a href="administrar_Carrera.php">ADMINISTRAR CARRERA</a>
				</li>
				<li class="nav-item menuli">
				  <a href="administrar_vistaCarrera.php">VISTA CARRERAS</a>
				</li>
			  </ul>

			</div>
		  </div>
		</nav>
	  </div>
	</div>
  </div>
</div>

</header>




	<main>	

		<form action="Admin_AltaAlumno.php"  method="post">

	
		<h3><i> Datos del amlumno</i></h3><br><br>


		<div class="contenedor">

			<div class="etiquetas">
				<p><label for="nombre" class="formulario__label">Nombres</label><br></p>
				<p><label for="nombre" class="formulario__label">Apellidos</label><br></p>
				<p><label for="fechanac" class="formulario__label">Fecha de nacimiento</label><br></p>
				<p><label for="genero" class="formulario__label">Genero</label><br></p>
				<p><label for="dni" class="formulario__label">DNI/Pasaporte</label><br></p>
				<p><label for="email" class="formulario__label">E-Mail</label><br></p>
				<p><label for="celular" class="formulario__label">Celular</label><br></p>
				<p><label for="celular" class="formulario__label">Tel de un Contacto</label><br></p>
			</div>

			<div class="cajas">
				<!-- Grupo: Nombres -->
				<div class="campos" id="grupo__nombre">
					<div>
						<input id="inputt" type="text" name="nombre" id="nombre" maxlength="100"
							pattern="[a-zA-Z\s]{1,100}" placeholder="Nombres">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">Los nombres tienen que tener hasta 100 caracteres y no puede contener numeros.
					</p> -->
				</div>

				<!-- Grupo: Apellidos -->
				<div class="campos" id="grupo__apellidos">

					<div>
						<input id="inputt" type="text" class="formulario__input" name="apellido" id="apellidos"
							pattern="[a-zA-Z\s]{1,100}" placeholder="Apellidos">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">Los apellidos tiene que tener hasta 100 caracteres y no puede contener numeros.
					</p> -->
				</div>

				<!-- Grupo: Fecha nacimiento -->
				<div class="campos" id="grupo__fechanac">

					<div>
						<input id="inputt" type="date" name="calendarioN" id="fechanac">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>

				</div>

				<!-- Grupo: Genero -->
				<div class="campos" id="grupo__genero">

					<div>
						<select id="inputt" name="genero">
							<option value="Masculino">Masculino</option>
							<option value="Femenino" selected>Femenino</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
				</div>


				<div class="campos" id="grupo__dni">

					<select id="corto" name="DNIPassT">
						<option value="D">DNI</option>
						<option value="P">Pasaporte</option>
					</select>

					<div class="Display">
						<input id="inputtCorto" type="text" name="dniP"  placeholder="4491234567"
							pattern="[0-9]{1,8}">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>

				</div>

				<!-- Grupo: E-Mail -->
				<div>

					<div class="campos">
						<input id="inputt" type="email" name="email" id="mailcontacto" placeholder="correo@correo.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p> -->
				</div>

				<!-- Grupo: Teléfono -->
				<div class="campos2" id="grupo__telefono">

					<div class="Display">
						<input id="corto" type="text" name="cod" placeholder="Cod" pattern="[0-9]{1,5}">
					</div>
					<div class="Display">
						<input id="inputtCorto" type="text" name="tel" placeholder="4491234567"
							pattern="[0-9]{1,14}">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>

				</div>

				<!--codigo area  y celular contaco -->

				<div class="campos2" id="grupo__telefono">

					<div class="Display">
						<input id="corto" type="text" name="codC" placeholder="Cod" pattern="[0-9]{1,5}">
					</div>
					<div class="Display">
						<input id="inputtCorto" type="text" name="telC" id="telefono" placeholder="4491234567"
							pattern="[0-9]{1,14}">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>

				</div>

			</div>

		</div>


		<div class="contenedor">

			<div class="etiquetas2">


				<p><label for="mailcontacto" class="formulario__label">Mail de un contacto</label><br></p>
				<p><label for="direccion" class="formulario__label">Direccion</label><br></p>
				<p><label for="provincia" class="formulario__label">Provincia</label><br></p>
				<p><label for="localidad" class="formulario__label">Localidad</label><br></p>
				<p><label for="egreso" class="formulario__label">Año de Egreso al Secundario</label><br></p>
				<p><label for="titulo_secundario" class="formulario__label">Titulo del secundario</label><br></p>
				<p><label for="genero" class="formulario__label">Carrera</label><br></p>
				<p><label for="provincia" class="formulario__label">Estado</label><br></p>

			</div>

			<div class="cajas">

				<!-- Grupo: Mail de un contacto -->
				<div class="campos">

					<div id="inputt">
						<input type="email" id="inputt" name="emailC" placeholder="correo@correo.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion
						bajo.</p> -->
				</div>

				<!-- Grupo: Direccion -->
				<div class="campos" id="grupo__direccion">

					<div id="inputt">
						<input type="text" id="inputt" name="direccion" placeholder="Ingrese direccion" maxlength="100">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">.</p> -->
				</div>

				<!-- Grupo: Provincia -->
				<div class="campos">

					<div>
						<select id="inputt" name="provincia">
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
							<option value="Tierra del Fuego, Antártida e Islas del Atlántico Sur">Tierra del Fuego,
								Antártida e
								Islas del Atlántico Sur</option>
							<option value="Tucumán">Tucumán</option>
						</select>
					</div>
				</div>
				<!-- Grupo: Localidad -->
				<div class="campos">

					<div>
						<input id="inputt" type="text" name="localidad" maxlength="50"placeholder="Localidad">
					</div>
				</div>

				<!-- Grupo: Año egreso -->
				<div class="campos" id="egreso">

					<div>
						<input id="inputt" type="text" name="egreso" id="egreso" placeholder="Ingrese Año"
							pattern="[0-9]{4}">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">El año solo puede contener numeros y el maximo son 14 dígitos.</p> -->
				</div>


				<!-- Grupo: Titulo del secundario -->
				<div class="campos">

					<div class="formulario__grupo-input">
						<input id="inputt" type="text" name="titulo" pattern="[a-zA-Z\s]{1,100}" placeholder="Titulo">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<!-- <p class="formulario__input-error">El titulo tiene que tener hasta 100 caracteres y no puede contener
						numeros.</p> -->
				</div>

				<!-- Grupo: Carrera -->
				<div class="campos">

					<select id="inputt" Name="carrera">
						<option value='1'>Analista de sistemas</option>
						<option value='2'>Desarrollador de software</option>
						<option value='3'>Seguridad e higiene</option>
					</select>

				</div>


				<!--Estado-->

				<div class="campos">

					<select id="inputt" Name="estado">
						<option value='Egresado'>Egresado</option>
						<option value='Regular' selected>Regular</option>
						<option value='Inscripto' selected>Inscripto</option>
						<option value='Noregular' selected>No regular</option>
					</select>
				</div>


			</div>

		</div><br>

		

		<div class="observacion">
			<p><label for="celular" class="formulario__label">Observaciones</label><br></p> 
		
				<div class="campos" id="grupo__celular">
					
					<textarea name="observacion" rows="5" cols="50"></textarea>
			</div>

		</div>

		<input class="boton" type="submit" name="send" value="Agregar usuario"><br><br>
     

	    </form>
	</main>
	
	<!--<script src="../js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>-->


<?php


if ( isset($_POST["send"]))  {

  require_once("../Controlador/ingresarAlumno.php");
  
}

?>

</body>
</html>
