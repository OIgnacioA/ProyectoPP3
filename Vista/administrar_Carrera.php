<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styleUpDateCarrera.css">
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
                  <a aria-current="page" href="index.html"><img src="../img/home3.png" alt="Inicio"></a>

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
                      <a href="buscarCarreras.php">VISTA CARRERAS</a>
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

        <form id="bodyprincipal" action="administrar_Carrera.php" method="post">

          <div class="titulos">
            <p>Carreras Activas</p>
          </div>

          <div class="titulosChicos">

            <div><p>Estado</p></div>
            <div><p>NOMBRE</p></div>
            <div><p>DURACION</p></div>
            <div><p>RESOLUCION</p></div>
            <div><p>CODIGO</p></div>
            <div><p>AÑO CADUCIDAD</p></div>
            <div><p>AÑO RESOLUCION</p></div>
            <div><p>FECHA DE ALTA</p></div>
            <div><p>MATERIAS</p></div>
            
          </div>

          <div class="espacioBlanco">
            <?php

              include("../Modelo/Conexion.php");

              $consultaAl = "SELECT * FROM carrera";  

              $resultado = mysqli_query($conexion,$consultaAl);


              while($consulta = mysqli_fetch_array($resultado)){

                $nombre =  $consulta["nombre"];
                $estado =  $consulta["ESTADO"];
                $duracion =  $consulta["duracion"];
                $resolucion =  $consulta["resolucion"];
                $codigo =  $consulta["codigo"];
                $anioCaducidad =  $consulta["anio_caducidad"];
                $anioresolucion =  $consulta["anio_resolucion"];
                $Alta =  $consulta["alta"];

                if ($estado =="1") {

                  echo 
                  "<div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "checkbox". "'" . "checked=". "'". "checked". "'" . "maxlength=". "'"."100". "'" .  "></div><div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[a-zA-Z\s]{1,100}" . "'". "value=". "'". $nombre . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[0-9]{1,100}" . "'". "value=". "'". $duracion . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[0-9]{1,100}" . "'". "value=". "'". $resolucion . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[0-9]{1,100}" . "'". "value=". "'". $codigo . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioCaducidad . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioresolucion . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $Alta . "'" ."required name=". "'"."nombre". "'". "></div>
                  <div class=". "'". info. "'" . ">" . "<a href=". "'" . enConstruccion.php ."'" . "><input type="."'". "submit"."'"."value="."'". "Ver Materias"."'"."name="."'"."envio"."'". " class=" . "'" .  " btn btn-secondary" ."'" ." /></a></div>";

                }else {

                
                }

               ;

                /*UPDATE carrera
                SET alta= "10/10/2021", anio_caducidad ="10/10/2025" ,  anio_resolucion ="10/10/2000",  codigo ="003",  duracion ="6",  resolucion ="1515"
                WHERE id = 3;     */
              }
            ?>

         
          </div>

          <br><br>
          <input class=" btn btn-secondary" type="submit" name="envio" value="Realizar  Cambios"><br><br> 
          <div class="titulos">
            <p>Carreras Inactivas</p>
          </div>

          <div class="titulosChicos">

            <div><p>Estado</p></div>
            <div><p>NOMBRE</p></div>
            <div><p>DURACION</p></div>
            <div><p>RESOLUCION</p></div>
            <div><p>CODIGO</p></div>
            <div><p>AÑO CADUCIDAD</p></div>
            <div><p>AÑO RESOLUCION</p></div>
            <div><p>FECHA DE ALTA</p></div>
            <div><p>MATERIAS</p></div>

          </div>

          <div class="espacioBlanco">

          <?php

            $consultaAl = "SELECT * FROM carrera";  

            $resultado = mysqli_query($conexion,$consultaAl);


            while($consulta = mysqli_fetch_array($resultado)){

              $nombre =  $consulta["nombre"];
              $estado =  $consulta["ESTADO"];
              $duracion =  $consulta["duracion"];
              $resolucion =  $consulta["resolucion"];
              $codigo =  $consulta["codigo"];
              $anioCaducidad =  $consulta["anio_caducidad"];
              $anioresolucion =  $consulta["anio_resolucion"];
              $Alta =  $consulta["alta"];

              if ($estado =="0") {

                echo 
                "<div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "checkbox". "'" . "maxlength=". "'"."100". "'" .  "></div><div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $nombre . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[0-9]{1,100}" . "'". "value=". "'". $duracion . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[0-9]{1,100}" . "'". "value=". "'". $resolucion . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "[0-9]{1,100}" . "'". "value=". "'". $codigo . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioCaducidad . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $anioresolucion . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . "> <input id=" . "'" . "inputt" . "'" . "type=". "'" . "text". "'" .  "maxlength=". "'"."100". "'" . "pattern=". "'". "{1,100}" . "'". "value=". "'". $Alta . "'" ."required name=". "'"."nombre". "'". "></div>
                <div class=". "'". info. "'" . ">" . "<input type="."'". "submit"."'"."value="."'". "Ver Materias"."'"."name="."'"."envio"."'". " class=" . "'" .  " btn btn-secondary" ."'" . "/></div>";

              }else {

              
              }

            ;

              /*UPDATE carrera
              SET alta= "10/10/2021", anio_caducidad ="10/10/2025" ,  anio_resolucion ="10/10/2000",  codigo ="003",  duracion ="6",  resolucion ="1515"
              WHERE id = 3;     */
            }
      ?>



  


      </form>  

      </div>

  
    </section>

  </main>


  <!-- //------PHP------------------------------------------------------------------ -->


  <?php if ( isset($_POST["enviar"])){require_once("../Controlador/C_crearCarrera.php");}?>

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