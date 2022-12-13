<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Su rol es:  ". $rol; 

  if($nombre == null || $psswrd == null || $rol !='super'){

    die(); 

  }
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/Listas_Admin.css">
  <link rel="stylesheet" href="../css/MenuSuper.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>


<?php
error_reporting(0);

?>

<header>
    <br>
    <div class="kontainer">

      <div>

        <div id="plataforma" >
          <h2>Plataforma</h2>
          <p>Entraste como <br> super</p>
        </div>

      </div>

      <div >

        <div id="titulo">
          <h1>Nombre del Instituto</h1> 
        </div>

      </div>

      <div>
        
        <button id="btnCerrarS" type="button" > <a href="../Controlador/Cerrar_session.php">Cerrar Sesion</a></button>

      </div>
        
    </div>

    
    <div class="MenuContainer">

      <nav class="navbar navbar-expand-lg  navbar-light bg-light">

        <div class="container-fluid ">
          
          <div class="imgHome">
            <a aria-current="page" href="SuperAdmin.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40"></a>

          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

             <li class="nav-item menuli">
                <a href="Super_AltaAdmin.php">Alta de Administrador</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_administrarAlumnos.php">Alumnos</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_CrearCarrera.php">Crear Carrera</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_administrar_Carrera.php">Administrar Carrera</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_AdministrarVistaCarrera.php">Vista Carreras</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_Configuraciones.php">Configuraciones</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
<br><br>
  </header>
  

  <main>
    <section>

      <div class="row d-flex justify-content-center align-items-center">

        <form id="bodyprincipal" action="" >

          <div class="titulos">
            <p>Administradores Activos</p>
          </div>

       

          <div class="espacioBlanco">
            <?php

                include("../Modelo/Conexion.php");

                $consultaAl = "SELECT * FROM personal";  
                $resultado = mysqli_query($conexion,$consultaAl);


                while($consulta = mysqli_fetch_array($resultado)){
                
                    $nombre =  $consulta["nombre"];
                    $Apellido =  $consulta["apellido"];
                    $dni =  $consulta["dni"];
                    

                    if (($consulta["rol"] == "Director")|| ($consulta["rol"] == "Secretario") || ($consulta["rol"] == "Vicedirector") ){ 


                        echo 
                        "<div class=". "'". "info". "'" . "><label id=" . "'" . "inputt" . "'" .">" . $nombre .  "</label></div>

                        <div class=". "'". "info". "'" . "><label id=" . "'" . "inputt" . "'" .">" . $Apellido .  "</label></div>
                        
                        <div class=". "'". "info". "'" . "><label id=" . "'" . "inputt" . "'" .">" . $dni .  "</label></div>
                        
                        
                        
                        ";


                    }

                }
            ?>

         
          </div>

          <br><br>

         <a href="Super_DarAltaAdmin.php"> <button type="button" class=" btn btn-secondary">Dar Alta</button></a><br><br> 
         
         <a href="Super_EliminarAdmin.php"> <button type="button" class=" btn btn-secondary">Eliminar</button></a><br><br> 
          

      </form>  

      </div>

  
    </section>

  </main>


 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="../js/scriptCarrera.js"></script>


  <style type="text/css">
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>

</body>

</html>