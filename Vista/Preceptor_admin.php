<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Su rol es:  ". $rol;  

  if($nombre == null || $psswrd == null|| $rol != 'Preceptor'){

    die(); 

  }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal - Preceptor</title>


    <link rel="stylesheet" href="../css/MenuPreceptor.css">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <br>
    <div class="kontainer">

      <div>
        <div id="plataforma" >
          <h2>Plataforma</h2>
          <p>Entraste como <br> Preceptor</p>
        </div>
      </div>

      <div >
        <div id="titulo">
          <h1>Nombre del Instituto</h1> 
        </div>
      </div>

      <div id="botonDer"> 
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
                <a href="Preceptor_administrarAlumnos.php">Alumnos</a>
              </li>

              <li class="nav-item menuli">
                <a href="Preceptor_administrarCarrera.php">Administrar Carrera</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>
    </div>
    

<br><br>
  </header>

    <main>
        <section >
            <div class="container-fluid">
                
                <div class="row d-flex justify-content-center align-items-center">
                
                    <div class="col-12 d-flex justify-content-center">
                   
                        <form id="bodyprincipal">

                        </form>

                    </div>

                </div>

            </div>
     
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>