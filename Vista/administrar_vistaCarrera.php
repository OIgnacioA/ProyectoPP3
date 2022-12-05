<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Su rol es:  ". $rol; 

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

  <link rel="stylesheet" href="../css/administrar_vistaCarrera.css">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>


<?php
error_reporting(0);

?>
  <header>

    <div id="cerrarS">
      <button id="btnCerrarS" type="button" class="btn btn-secondary"> <a href="../Controlador/Cerrar_session.php">Cerrar Sesion</a></button>
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
    </div>

  </header>


<div>
    <section>
        <div class="row d-flex justify-content-center align-items-center">

          <div id="bodyprincipal">
                <div class="titulosChicos">

                    <div><p>NOMBRE</p></div>
                    <div><p>DURACION</p></div>
                    <div><p>CURSADA</p></div>
                    <div><p>PLAN DE ESTUDIOS</p></div>

                </div>
           </div>
          
            <?php

              include("../Modelo/Conexion.php");

              $consultaAl = "SELECT * FROM carrera";  

              $resultado = mysqli_query($conexion,$consultaAl);


              while($consulta = mysqli_fetch_array($resultado)){

                $id =  $consulta["id"];
                $nombre =  $consulta["nombre"];
                $duracion =  $consulta["duracion"];
                $cursada =  $consulta["cursada"];
                $plan =  $consulta["Plan"];
            

                  echo 

                  "
                  <form id=". "'" . "bodyprincipal". "'" . "action=". "'" . "administrar_vistaCarrera.php". "'" . "method=". "'" . "post" . "'" . "enctype=". "'". "multipart/form-data". "'". "> 

                  <div class=". "'" . "espacioBlanco". "'". ">  

                  <div class=". "'". "info". "'" ." id= " . "'" ."nover"."'"." > <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $id . "'" ."required name=". "'"."id". "'". "></div>

                  <div class=". "'". "info". "'" ."> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $nombre . "'" ."required name=". "'"."nombre". "'". "></div>

                  <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $duracion . "'" ."required name=". "'"."duracion". "'". "></div>

                  <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $cursada . "'" ."required name=". "'"."cursada". "'". "></div>
                  
                  <div class=". "'". "info". "'" . ">" . "<input type="."'". "file"."'"."value="."'". "Ver Mas"."'"."  name="."'"."f"."'"."/></div>
  
                  <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "submit".  "'" . "name=". "'" . "envio". "'" .  "value=". "'" . "Realizar  Cambios" . "' " . "><br><br> 
                  
                  </div> 

                 </form> 

                
                

                  ";  


              }
            ?>
        </div>
    </section>  
</div>


  <!-- //------PHP------------------------------------------------------------------ -->


  <?php if ( isset($_POST["envio"])){
    
    
    $name = $_FILES['f']['name'];
    
    $tmp_name =$_FILES['f']['tmp_name'];
    
    $ruta = 'Archivos/'. $name;
    
    move_uploaded_file($tmp_name, $ruta);
    
    
    
    
    
    
    require_once("../Controlador/C_UPDateVistaCarrera.php");}?>

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