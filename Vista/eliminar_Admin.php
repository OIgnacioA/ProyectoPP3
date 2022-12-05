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
    <link rel="stylesheet" href="../css/eliminar_Alumno.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Eliminar Alumno</title>
</head>
<body>
  <header>
      <div id="titulo">
        <h1 style= "color: #f38618;">Eliminar Usuario</h1>
    </div>

 

    <div>
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid ">
                <div class="imgHome">
                  <a aria-current="page" href="Admin_Logueado.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40" ></a>

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

  <form action="eliminar_Admin.php" method="post">
  
    <div class="principal">
  
      <div class="block1">
  
        <div class="etiquetas">
  
          <p><label for="dni">DNI/Pasaporte</label><br></p>
  
        </div>
  
        <div class="campos2">
  
          <select id="corto" name="DNIPassT">
            <option value="D">DNI</option>
            <option value="P">Pasaporte</option>
          </select>
          <input type="text" name="dniP" placeholder="xxxxxxxxx" pattern="[0-9]{1,8}">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>
          
        </div>

      </div>
  
  
  
      <div class="boton">
        <button type="submit" id=button type="button" name="enviar"
          style="background-color: #000000; text-align: center ;color: #ffffff">Eliminar Usuario</button>
      </div>
  
  
      <?php

      include("../Modelo/Conexion.php");

      $cont =0;

      if ( isset($_POST["dniP"]))  {

        $ID_P = $_POST['dniP'];
        $DNIPASS = $_POST['DNIPassT'];

       if ($DNIPASS == "D"){

        $consult = "SELECT * FROM personal WHERE dni = '$ID_P' "; 

       }else { $consult = "SELECT * FROM personal WHERE pasaporte = '$ID_P' "; }


      $resultados = mysqli_query($conexion,$consult);
      
      while($consulta = mysqli_fetch_array($resultados)){

        $cont += 1; 
 
        echo "
        <br><br>
        <form id=". "'" . "bodyprincipal". "'" . "action=". "'" . "eliminar_Admin.php". "'" . "method=". "'" . "post" . "'" . "> 


          <div class=". "'" . "espacioBlanco". "'". "> 

          <center> 

          <table border=\"3\">
            <tr>
              </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
              <td><font color='blue'><b><center>Apellido:</center></b></font></td>
              <td><center>".$consulta['apellido']."</center></td>
              <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <tr>
            <tr>

            <td><b><center>nombre</center></b></td>
            <td><b><center>email</center></b></td>
            <td><b><center>Carrera</center></b></td>
            <td><b><center>Rol</center></b></td>
          
            </tr>
            <tr>

            <td><center>".$consulta['nombre']."</center></td>
            <td><center>".$consulta['email']."</center></td>
            <td><center>".$consulta['id_carrera']."</center></td>
            <td><center>".$consulta['rol']."</center></td>
          
           </tr>
          </table>
        
          <div  style= ". "'" . "display: flex; Justify-content: space-around;  
          " . "'". ">

          <input type=". "'" . "text". "'" . "value=". "'". $consulta['dni'] . "'" ." name=". "'"."dni". "'". " style=" .  "'". "display:none;". "'".">

          <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "submit".  "'" . "name=". "'" . "confirmar". "'" .  "value=". "'" . "CONFIRMAR" . "' " .  "style=" .  "'". "background-color: #000000; text-align: center ;color: #ffffff". "'".   " ><br><br> 
                
          <input class=" . "'" . "btn btn-secondary" . "'".  "type=". "'" . "submit".  "'" . "name=". "'" . "cancelar". "'" .  "value=". "'" . "CANCELAR" . "' " . "style=" .  "'". "background-color: #000000; text-align: center ;color: #ffffff". "'".   "> 

          </div>       

        </form>";
     
      }

      if ($cont == 0) {
        echo "<center> <table border=\"3\">
          <tr><td><font color='red'><b><center>warning:</center></b></font></td><tr>
          <tr><td><b><center>There is  no such Admin...</center></b></td></tr>
        </table></center> ";
      }

      }
      ?>


  
    </div>
  
  </form>




  <!-- //------PHP------------------------------------------------------------------ -->


  <?php if ( isset($_POST["confirmar"])){require_once("../Controlador/Eliminar_admin.php");}
  
        if ( isset($_POST["cancelar"])){echo '<script>alert( "Se ha cancelado la baja")</script>' ;}
  ?>

  <!-- //--------------------------------------------------------------------------- -->

  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>






</html>