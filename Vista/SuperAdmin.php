<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;


  if($nombre == null || $psswrd == null){

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
    <link rel="stylesheet" href="../css/SuperAdmiLogin.css">
    <script src="js\scriptCarrera.js"></script>
    <title>Document</title>
  </head>
  
  <body>
    <header>
  
    
  
      <div id="cerrarS">
        <button id="btnCerrarS" type="button" class="btn btn-secondary"> <a href="../Controlador/Cerrar_session.php">Cerrar Sesion</a></button>
      </div>
      <div class="container">
        <div class="row d-flex flex-row">
          <div class="col-10 col-md-2 superior">
  
            <div id="plataforma" class="d-flex flex-column ">
              <h2>Plataforma</h2>
              <p>Entraste como Super Administrador</p>
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
                    <a aria-current="SuperAdmi.html" href="SuperAdmi.html"><img src="../img/home3.png" alt="Inicio" width="40" height="40"></a>
  
                  </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item menuli">
                        <a href="altaAdmin.php">ALTA DE ADMINISTRADOR</a>
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
                      <li class="nav-item menuli">
                        <a href="Configuraciones.php">CONFIGURACIONES</a>
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
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
           
  
          </div>
  
        </div>
        </div>
  
      </section>
  
  
  
    </main>
  

  
  </body>
  
  </html>