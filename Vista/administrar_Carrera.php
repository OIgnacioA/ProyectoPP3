<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/administrar_Carrera.css">
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
    <section>

      <div class="row d-flex justify-content-center align-items-center">

        

          
          <div id="bodyprincipal">

          <div class="titulos">
            <p>Carreras Activas</p>
          </div>

            <div class="titulosChicos">

              <div><p>Estado</p></div>
              <div><p>NOMBRE</p></div>
              <div><p>DURACION.</p></div>
              <div><p>Res.</p></div>
              <div><p>COD.</p></div>
              <div><p>CADUCIDAD.</p></div>
              <div><p>Año RES.</p></div>
              <div><p>ALTA.</p></div>
              <div><p>CURSADA.</p></div>
              <div><p>PLAN.</p></div>
              <div><p>MATERIAS.</p></div>
              <div><p>UpDate.</p></div>
              
            </div>
          </div>
         
          <?php

            include("../Modelo/Conexion.php");

            $consultaAl = "SELECT * FROM carrera";  

            $resultado = mysqli_query($conexion,$consultaAl);


            while($consulta = mysqli_fetch_array($resultado)){

              $id =  $consulta["id"];
              $nombre =  $consulta["nombre"];
              $estado =  $consulta["ESTADO"];
              $duracion =  $consulta["duracion"];
              $resolucion =  $consulta["resolucion"];
              $codigo =  $consulta["codigo"];
              $anioCaducidad =  $consulta["anio_caducidad"];
              $anioresolucion =  $consulta["anio_resolucion"];
              $plan =  $consulta["plan"];
              $cursada =  $consulta["cursada"];
              $Alta =  $consulta["alta"]; 

              

              if ($estado =="on") {

                echo 
                "
                <form id=". "'" . "bodyprincipal". "'" . "action=". "'" . "administrar_Carrera.php". "'" . "method=". "'" . "post" . "'" . "> 

                <div class=". "'" . "espacioBlanco". "'". ">  

                <div class=". "'". "info". "'" ." id= " . "'" ."nover"."'"." > <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $id . "'" ."required name=". "'"."id". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "checkbox". "'" . "checked=". "'". $estado . "'" . "'"   ."required name=". "'"."estado". "'"."></div>
                
                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[a-zA-Z\s]{1,100}" . "'". "value=". "'". $nombre . "'" ." name=". "'"."nombre". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,2}" . "'". "value=". "'". $duracion . "'" ."required name=". "'"."duracion". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $resolucion . "'" ."required name=". "'"."resolucion". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $codigo . "'" ."required name=". "'"."codigo". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioCaducidad . "'" ."required name=". "'"."anioCaducidad". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioresolucion . "'" ."required name=". "'"."anioResolucion". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'".
                $Alta . "'" ."required name=". "'"."alta". "'". "></div>


                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'".
                $cursada . "'" ."required name=". "'"."cursada". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'".
                $plan . "'" ."required name=". "'"."plan". "'". "></div>
                
                
                <div class=". "'". "info". "'" . ">" . "<a href=". "'" . "enConstruccion.php" ."'" . "><input type="."'". "submit"."'"."value="."'". "Ver Materias"."'"."name="."'"."envio"."'". " class=" . "'" .  " btn btn-secondary" ."'" ." /></a></div>

                <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "submit".  "'" . "name=". "'" . "UpDate". "'" .  "value=". "'" . "Realizar  Cambios" . "' " . "><br><br> 
        
                

                </form>  
                </div>";



              }else {

              
              };
              
            }
            ?>

         
        

          <br><br>
         
      

          <div id="bodyprincipal">

          <div class="titulos">
            <p>Carreras Inactivas</p>
          </div>

            <div class="titulosChicos">

              <div><p>Estado</p></div>
              <div><p>NOMBRE</p></div>
              <div><p>DURACION.</p></div>
              <div><p>Res.</p></div>
              <div><p>COD.</p></div>
              <div><p>CADUCIDAD.</p></div>
              <div><p>Año RES.</p></div>
              <div><p>ALTA.</p></div>
              <div><p>CURSADA.</p></div>
              <div><p>PLAN.</p></div>
              <div><p>MATERIAS.</p></div>
              <div><p>UpDate.</p></div>

            </div>
            
          </div>
    

          <?php

            $consultaAl = "SELECT * FROM carrera";  

            $resultado = mysqli_query($conexion,$consultaAl);

            while($consulta = mysqli_fetch_array($resultado)){

              $id =  $consulta["id"];
              $nombre =  $consulta["nombre"];
              $estado =  $consulta["ESTADO"];
              $duracion =  $consulta["duracion"];
              $resolucion =  $consulta["resolucion"];
              $codigo =  $consulta["codigo"];
              $anioCaducidad =  $consulta["anio_caducidad"];
              $anioresolucion =  $consulta["anio_resolucion"];
              $plan =  $consulta["plan"];
              $cursada =  $consulta["cursada"];
              $Alta =  $consulta["alta"]; 

              

              if ($estado =="") {

                echo 
                "
                <form id=". "'" . "bodyprincipal". "'" . "action=". "'" . "administrar_Carrera.php". "'" . "method=". "'" . "post" . "'" . "> 

                <div class=". "'" . "espacioBlanco". "'". ">  

                <div class=". "'". "info". "'" ." id= " . "'" ."nover"."'"." > <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $id . "'" ."required name=". "'"."id". "'". "></div>


                <div class=". "'". "info". "'" . "> 

                    <input id=" . "'" . "inputt" . "'" . "type=". "'" . "checkbox". "'" .  "required name=". "'"."estado". "'".">

                </div>
                
                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[a-zA-Z\s]{1,100}" . "'". "value=". "'". $nombre . "'" ." name=". "'"."nombre". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,2}" . "'". "value=". "'". $duracion . "'" ."required name=". "'"."duracion". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $resolucion . "'" ."required name=". "'"."resolucion". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $codigo . "'" ."required name=". "'"."codigo". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioCaducidad . "'" ."required name=". "'"."anioCaducidad". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioresolucion . "'" ."required name=". "'"."anioResolucion". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'".
                $Alta . "'" ."required name=". "'"."alta". "'". "></div>


                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'".
                $cursada . "'" ."required name=". "'"."cursada". "'". "></div>

                <div class=". "'". "info". "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'".
                $plan . "'" ."required name=". "'"."plan". "'". "></div>
                
                
                <div class=". "'". "info". "'" . ">" . "<a href=". "'" . "enConstruccion.php" ."'" . "><input type="."'". "submit"."'"."value="."'". "Ver Materias"."'"."name="."'"."envio"."'". " class=" . "'" .  " btn btn-secondary" ."'" ." /></a></div>

                <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "submit".  "'" . "name=". "'" . "UpDate". "'" .  "value=". "'" . "Realizar  Cambios" . "' " . "><br><br> 
       
                

                </form>  
                </div>";



              }else {

              
              };
             
            }



      ?>
    
    </section>
  </main>


    <?php 

      

     if ( isset($_POST["UpDate"])){
      
       
      require_once("../Controlador/UpdateCarrera.php");}
     
     
     ?>




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