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


    <link rel="stylesheet" href="../css/administrar_Carrera2.css">
   <link rel="stylesheet" href="../css/MenuPreceptor.css">

  
  


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
            <a aria-current="page" href="Preceptor_admin.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40"></a>

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
              <div><p>UpDate(sin permiso).</p></div>
              
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

                <div class=". "'". "info". "'" . "> </div>
                
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

                <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "-".  "'" . "name=". "'" . "-". "'" .  "value=". "'" . "-xxxx-" . "' " . "><br><br> 
        
                

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
              <div><p>UpDate (sin permiso).</p></div>

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

                <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "-".  "'" . "name=". "'" . "-". "'" .  "value=". "'" . "-xxxx-" . "' " . "><br><br> 
       
                

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