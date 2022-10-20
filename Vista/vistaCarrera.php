<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/vistaCarrera.css">
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
     
    </div>
    <div class="container">
      <div class="row d-flex flex-row">
        <div class="col-10 col-md-2 superior">
          <div id="plataforma" class="d-flex flex-column ">
            <h2>Plataforma</h2>
           
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
                  <form id=". "'" . "bodyprincipal". "'" . "action=". "'" . "administrar_vistaCarrera.php". "'" . "method=". "'" . "post" . "'" . "> 

                  <div class=". "'" . "espacioBlanco". "'". ">  

             

                  <div class=". "'". info. "'" ."> <label id=" . "'" . "inputt" . "'" .">". $nombre ."</label></div>

                  <div class=". "'". info. "'" ."> <label id=" . "'" . "inputt" . "'" .">". $duracion ."</label></div>

                  <div class=". "'". info. "'" ."> <label id=" . "'" . "inputt" . "'" .">". $cursada."</label></div>

                 
                  
                  <div class=". "'". info. "'" . ">" . "<a href=". "'" . enConstruccion.php ."'" . "><input type="."'". "submit"."'"."value="."'". "Ver Mas"."'"."name="."'"."envio"."'". " class=" . "'" .  " btn btn-secondary" ."'" ." /></a></div>
  
                  
                  
                  </div> 

                 </form> 

                
                

                  ";  

                  


                /*UPDATE carrera
                SET alta= "10/10/2021", anio_caducidad ="10/10/2025" ,  anio_resolucion ="10/10/2000",  codigo ="003",  duracion ="6",  resolucion ="1515"
                WHERE id = 3;     */
              }
            ?>
        </div>
    </section>  
</div>


  <!-- //------PHP------------------------------------------------------------------ -->


  <?php if ( isset($_POST["envio"])){require_once("../Controlador/C_UPDateVistaCarrera.php");}?>

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