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

   
    <link rel="stylesheet" href="../css/UpDate_Alumno.css">
    
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>


<?php
error_reporting(0);

?>
 <header>  
        <div id="cerrarS">
            <button id="btnCerrarS" type="button" class="btn btn-secondary"> <a href="../Controlador/Cerrar_session.php">CERRAR SESION</a></button>
        </div>

        <div class="container-fluid">
            
            <div class="row d-flex flex-row">
              
                <div class="col-12 col-md-2 inferior">
              
                    <div id="plataforma" class="d-flex flex-column ">
                        <h2>Plataforma</h2>
                        <p >Entraste como</p>
                        <p id="preceptor">Preceptor</p>
                    </div>
    
                </div>

                <div class="col superior d-flex justify-content-center align-content-center  "> 
                  
                    <div id="titulo">
                        <h1>Nombre del Instituto</h1>
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

  <main>
    <section>

      

       
      <div class="Marco">

        <div class="Lamina">

          <div class="titulos">
            <p>Alumnos Activos</p>
          </div>

          <div class="titulosChicos">

            
            <div><p>NOMBRE</p></div>
            <div><p>Apeliido</p></div>
            <div><p>Mail</p></div>
            <div><p>Dni/Pass</p></div>
            <div><p>Carrera</p></div>
            <div><p>Estado</p></div>
            <div><p>Hist. academica</p></div>

          </div>

        

          <?php

              include("../Modelo/Conexion.php");

              $consultaAl = "SELECT a.nombre, a.apellido, a.email, a.dni, a.estado, a.FechaCambio, a.id, a.pasaporte,  C.nombre as CNombre FROM alumno As a

              join carrera C on (a.fk_carrera_id = C.id)";

              $resultado = mysqli_query($conexion,$consultaAl);


              while($consulta = mysqli_fetch_array($resultado)){
            
                $nombre =  $consulta["nombre"];
                $Apellido =  $consulta["apellido"];
                $Mail =  $consulta["email"];
                $estado =  $consulta["estado"];
                $tiempo = $consulta["FechaCambio"];
                $id = $consulta["id"];
                $dniToF = "true";

                if ($consulta["dni"] == "") { 

                  $Dni_pass = $consulta["pasaporte"];
                  $dniToF = "false" ;
                }else {$Dni_pass = $consulta["dni"];}

                $Carrera =  $consulta["CNombre"];

                $Historia =  $consulta["observaciones"];

                  echo 

                //variables ocultas: 

                " 
               

              <form class=" . "'" . "formulario" . "'" . "  action=". "'" . "Preceptor_administraralumnos.php". "'" . "method=". "'" . "post" . "'" . "> 

                <div class=". "'" . "espacioBlanco". "'". ">

                    <div class=". "'". "info". "'" ." id= " . "'" ."nover"."'"." > 
                    <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $dniToF. "'" ."name=". "'"."dniOPas". "'". ">
                    </div>

                    <div class=". "'". "info". "'" ." id= " . "'" ."nover"."'"." > 
                    <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $id . "'" ."name=". "'"."id". "'". ">
                    </div>





                    <div class=". "'". "info". "'" . ">

                     <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[a-zA-Z\s]{1,100}" . "'". "value=". "'". $nombre . "'" ." name=". "'"."nombre". "'". ">

                    </div>

                    <div class=". "'". "info". "'" . "> 
                      <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[a-zA-Z\s]{1,100}" . "'". "value=". "'". $Apellido . "'" ." name=". "'"."apellido". "'". ">
                    </div>

                    <div class=". "'". "info". "'" . ">

                     <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" ."value=". "'". $Mail . "'" ." name=". "'"."email". "'". ">

                    </div>

                    <div class=". "'". "info". "'" . "> 
                      <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" .  "value=". "'". $Dni_pass . "'" ."name=". "'"."dniPass". "'". ">
                    </div>
      

                    <div class=". "'". "info". "'" . "> 
                      <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "value=". "'". $Carrera . "'" ."name=". "'"."carrera". "'". ">
                    </div>


                    <div class=". "'". "info". "'" . "> 

                
                      <select id=". "'" . "inputt". "'" . " Name=". "'" . "estado". "'" . ">
                        <option value=". "'" . "Egresado". "'" . ">Egresado</option>
                        <option value=". "'" . "Regular". "'" . " selected>Regular</option>
                        <option value=". "'" . "Inscripto". "'" . "selected>Inscripto</option>
                        <option value=". "'" . "Noregular". "'" . "selected>No regular</option>
                        <option value=". "'" . "$estado". "'" . "selected>$estado</option>

                      </select>
                  
                      <p>Desde:</p>
                      <div class=". "'". "info". "'" . "> 
                      
                       <input id=" . "'" . "inputt" . "'" . "type=". "'" . "date". "'" . "min=" . "'". "1930-01-01" . "'" . "maxlength=". "'"."100". "'" . "value=". "'". $tiempo . "'" ." name=". "'"."FechaCambio". "'". ">
                        
                      </div>

                    </div>


                    <div class=". "'". "info". "'". ">
                      <a href=". "'". "https://drive.google.com/file/d/1Mb-TiHWj4du0EmX9Cf3E3uKoDG0xibxM/view?usp=sharing". "'" . " target=". "'". "_blank". "'". " >
                      <input type =". "'". "button". "'" . "value= ". "'" . "VER" . "'" . "name=". "'". "envio" . "'" . "class=" . "'" . "btn btn-secondary". "'". ">
                      </a>
                    </div>
                    
                    <div class=". "'". "info". "'". ">
                    
                      <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "submit".  "'" . "name=". "'" . "UpDate". "'" .  "value=". "'" . "Realizar  Cambios" . "' " . "><br><br> 
                    </div>  

                  </div>

                </form>
                
                ";

              }
          ?>

         

          <br><br>
        
          <!-- <a href="../Vista/Admin_AltaAlumno.php" > <button type="button" class=" btn btn-secondary">Dar Alta</button></a><br><br> 
          <a href="eliminar_Alumno.php"> <button type="button" class=" btn btn-secondary">Baja Alumno</button></a><br><br> <br><br> 
           -->
        
        </div>

      </div>



     
  
    </section>

  </main>


  <!-- //------PHP------------------------------------------------------------------ -->


  <?php if ( isset($_POST["UpDate"])){
    
    
    require_once("../Controlador/UpDateAlumno.php");
    
    
    
    
    }?>

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