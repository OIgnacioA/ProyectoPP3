
<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Su rol es:  ". $rol; 

  if($nombre == null || $psswrd == null){

    die(); 

  }

  $arCategorias = array("Director", "Vicedirector", "Secretario");

  if(in_array($rol,$arCategorias) ) { } else { die();}
 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  
  <link rel="stylesheet" href="../css/styleAddCarrera.css">
  
  <link rel="stylesheet" href="../css/MenuPrincipal.css">

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
          <p>Entraste como <br>Administrador</p>        </div>

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

      <div>
        <div>

          <nav class="navbar navbar-expand-lg  navbar-light bg-light">

            <div class="container-fluid ">
              
              <div class="imgHome">
                <a aria-current="page" href="Admin_Logueado.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40"></a>

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


 



  <main>
    <section>
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
         

        </div>

      </div>
      </div>

    </section>



  </main>


<!-- //------PHP------------------------------------------------------------------ -->


  

<!-- //--------------------------------------------------------------------------- -->

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