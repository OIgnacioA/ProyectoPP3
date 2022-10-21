<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Lista_Admins.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>


<?php
error_reporting(0);

?>
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
                      <a href="#">ALTA DE ADMINISTRADOR</a>
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
                    

                    if (($consulta["rol"] == "Director")|| ($consulta["rol"] == "Secretario") || ($consulta["rol"] == "Vicedirector") ){ 


                        echo 
                        "<div class=". "'". "info". "'" . "><label id=" . "'" . "inputt" . "'" .">" . $nombre .  "</label></div>

                        <div class=". "'". "info". "'" . "><label id=" . "'" . "inputt" . "'" .">" . $Apellido .  "</label></div>";


                    }

                }
            ?>

         
          </div>

          <br><br>

         <input class=" btn btn-secondary" type="submit" name="envio" value="Dar Alta"><br><br> 
         
         <a href="eliminar_Alumno.php"> <button type="button" class=" btn btn-secondary">Eliminar</button></a><br><br> 
          

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