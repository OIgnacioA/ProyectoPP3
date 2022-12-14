<?php
 session_start();

 $nombre = $_SESSION['usuario'] ;
 $psswrd = $_SESSION['Psswrd'] ;

 $rol = $_SESSION['Rol'];

 echo "Su rol es:: ". $rol;
 
 if($nombre == null || $psswrd == null){

 die(); 

 }

 $arCategorias = array("Director", "Vicedirector", "Secretario");

 if(in_array($rol,$arCategorias) ) { } else { die();}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>




    <link rel="stylesheet" href="../css/pre_inscripcion.css">
    <link rel="stylesheet" href="../css/MenuPrincipal.css">
    <link rel="stylesheet" href="../css/index.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<header>
    <br>
    <div class="kontainer">

        <div>

            <div id="plataforma">
                <h2>Plataforma</h2>
                <p>Entraste como <br>Administrador</p>
            </div>

        </div>

        <div>

            <div id="titulo">
                <h1>Nombre del Instituto</h1>
            </div>

        </div>

        <div>

            <button id="btnCerrarS" type="button"> <a href="../Controlador/Cerrar_session.php">Cerrar
                    Sesion</a></button>

        </div>

    </div>


    <div class="MenuContainer">

        <div>
            <div>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <div class="container-fluid ">

                        <div class="imgHome">
                            <a aria-current="page" href="Admin_Logueado.php"><img src="../img/home3.png" alt="Inicio"
                                    width="40" height="40"></a>

                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item menuli">
                                    <a href="Lista_Admins.php">ALTA DE ADMINISTRADOR</a>
                                </li>

                                <li class="nav-item menuli">
                                    <a href="Admin_administrarAlumnos.php">ALUMNOS</a>
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

</header>



<body>




    <!-- ***** INICIO FORM ***** -->
    <form action="Admin_AltaAlumno.php" class="contenedorExt" method="post">

        <div class="header">
            <h1>Datos del alumno</h1>
        </div>

        <div class="columna1">

            <div> <label for="nombres" id="etiqueta">Nombres</label> </div>

            <div> <input type="text" name="nombre" placeholder="#Nombres" id="nombre" required pattern="[A-Za-z]{2,254}"
                    required style=width:200px;height:20px;>
            </div>

            <div> <label for="apellidos" id="etiqueta">Apellidos</label> </div>

            <div> <input type="text" name="apellido" placeholder="#Apellidos" id="apellidos" required
                    pattern="[A-Za-z]{2,254}" required style=width:200px;height:20px;>
            </div>

            <div> <label for="fechaNac" id="etiqueta">Fecha de nacimiento</label> </div>

            <div> <input type="date" value="dd-mm-aaaa" min="1930-01-01" name="calendarioN" id="fechaNac"
                    style=width:202px;height:22px;>
            </div>

            <div> <label for="genero" id="etiqueta">Genero</label> </div>

            <div> <select name="genero" style=width:207px;height:25px;>
                    <option value="Seleccione una opci??n">Seleccione una opci??n</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div> <label for="documento" id="etiqueta">DNI/Pasaporte</label> </div>

            <div> <select name="DNIPassT" style=width:90px;height:25px; id="selecDocumento" onchange="verificarOpcion()"
                    onclick="verificarOpcion()" onkeyup="verificarOpcion()">
                    <option>Tipo</option>
                    <option value="D">Dni</option>
                    <option value="P">Pasaporte</option>
                </select>

                <input type="text" onkeypress="return segunSeleccion(event);" minlength="8" maxlength="9" required
                    name="dniP" placeholder="#Numero" id="documento" style=width:106px;height:20px; disabled require>
            </div>

            <div> <label for="email" id="etiqueta">E-mail</label> </div>

            <div> <input type="email" name="email" placeholder="#Email" id="email" style=width:200px;height:20px;
                    required> </div>

            <div> <label for="celular" id="etiqueta">Celular</label> </div>

            <div> <input type="tel" name="cod" placeholder="#CodArea" id="codArea" style=width:85px;height:20px;
                    required pattern="[0-9]{1,5}">

                <input type="tel" name="tele" placeholder="#Numero" id="celular" style=width:106px;height:20px;
                    required>
            </div>

        </div>

        <div class="columna2">

            <div> <label for="telContacto" id="etiqueta">Tel de un contacto</label> </div>

            <div> <input type="text" name="codC" placeholder="#CodArea" id="codArea" style=width:85px;height:20px;
                    required pattern="[0-9]{1,5}">

                <input type="text" name="telC" placeholder="#Numero" id="telContacto" style=width:103px;height:20px;>
            </div>

            <div> <label for="emailContacto" id="etiqueta">E-mail de un contacto</label> </div>

            <div> <input type="email" name="emailC" placeholder="#Email" id="emailContacto"
                    style=width:200px;height:20px;> </div>

            <div> <label for="direccion" id="etiqueta">Direcci??n</label> </div>

            <div> <input type="text" name="direccion" placeholder="#Direccion" id="direccion" maxlength="50"
                    style=width:200px;height:20px;> </div>

            <div> <label for="provincia" id="etiqueta">Provincia</label> </div>

            <div> <select name="provincia" style=width:207px;height:25px;>
                    <option value="Buenos Aires">Buenos Aires</option>
                    <option value="Catamarca">Catamarca</option>
                    <option value="Chaco">Chaco</option>
                    <option value="Chubut">Chubut</option>
                    <option value="Cordoba">Cordoba</option>
                    <option value="Corrientes">Corrientes</option>
                    <option value="Entre Rios">Entre Rios</option>
                    <option value="Formosa">Formosa</option>
                    <option value="Jujuy">Jujuy</option>
                    <option value="La Pampa">La Pampa</option>
                    <option value="La Rioja">La Rioja</option>
                    <option value="Mendoza">Mendoza</option>
                    <option value="Misiones">Misiones</option>
                    <option value="Neuquen">Neuquen</option>
                    <option value="Rio Negro">Rio Negro</option>
                    <option value="Salta">Salta</option>
                    <option value="San Juan">San Juan</option>
                    <option value="San Luis">San Luis</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Santa Fe">Santa Fe</option>
                    <option value="Santiago del Estero">Santiago del Estero</option>
                    <option value="Tierra del Fuego">Tierra del Fuego</option>
                    <option value="Tucuman">Tucuman</option>
                </select>
            </div>

            <div> <label for="localidad" id="etiqueta">Localidad</label> </div>

            <div> <input type="text" name="localidad" placeholder="#Localidad" id="localidad"
                    style=width:200px;height:20px;> </div>

            <div> <label for="anioEgreso" id="etiqueta">A??o de egreso del secundario</label> </div>

            <div> <input type="number" name="egreso" placeholder="#A??o" id="anioEgreso" style=width:200px;height:20px;
                    oninput="javascript: 
 if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number"
                    maxlength="4">
            </div>

            <div> <label for="tituloSec" id="etiqueta">Titulo del secundario</label> </div>

            <div> <input type="text" name="titulo" placeholder="#Titulo" id="tituloSec" style=width:200px;height:20px;>
            </div>

            <div> <label for="carrera" id="etiqueta">Carrera</label> </div>

            <div> <select name="carrera" style=width:207px;height:25px;>
                    <option value='1'>Analista de sistemas</option>
                    <option value='2'>Desarrollador de software</option>
                    <option value='3'>Seguridad e higiene</option>
                </select>
            </div>
        </div>

        <!--Estado-->

        <div class="campos">
            <div> <label for="tituloSec" id="etiqueta">Estado</label> </div>
            <select id="inputt" Name="estado">
                <option value='Egresado'>Egresado</option>
                <option value='Regular' selected>Regular</option>
                <option value='Inscripto' selected>Inscripto</option>
                <option value='Noregular' selected>No regular</option>
            </select>
        </div><br><br>


        <div class="observacion">
            <p><label for="tituloSec" id="etiqueta">Observaciones</label><br></p>

            <div class="campos" id="grupo__celular">

                <textarea name="observacion" rows="5" cols="50"></textarea>
            </div>

        </div>


        <div class="button">
            <div> <input type="submit" value="GUARDAR CAMBIOS" id="btn_guardar" name="send"> </div>
            <div> <input type="button" value="CANCELAR" id="btn_cancelar"> </div>
        </div>

    </form>
    <?php
if ( isset($_POST["send"])) {
 require_once("../Controlador/ingresarAlumno.php");
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="../js/pre-inscripcion2.js"> </script>
</body>

</html>