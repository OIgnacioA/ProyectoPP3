<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>
  <br>
  <center><p><a href="index.php">Inicio</a></p></center>

  <section class="registro">

    <form action="paginaRegistro.php" method="post">
    <h4>FORMULARIO REGISTRO DE ALUMNOS</h4>
      <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
      <input class="textos" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido">
      <input class="textos" type="text" name="dni" id="dni" placeholder="Ingrese su dni">

      <input class="textos" type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion">

      <input class="textos" type="text" name="email" id="email" placeholder="Ingrese email">
   

      <select class="select" Name="carrera">
        <option value='1'>Analista de sistemas</option>
        <option value='2' selected>Desarrollador de software</option>
        <option value='3'>Seguridad e higiene</option>
      </select>

      <input class="textos" type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese su contraseña">


      <input class="textos" type="password" name="dni" id="repcontra" placeholder="Repita su contraseña">


      <input class="botones" type="submit" value="Registrar" name="ingreso">
      <p><a href="index.php">Ingresar con mi cuenta</a></p>

    </form>

  </section>
    
  <?php

    session_start(); 


    if (isset($_POST["ingreso"]) )  {


      include("Conexion.php");

      $Nombre = $_POST["nombre"];
      $Apellido =  $_POST["apellido"];
      $DNI =  $_POST["dni"];
      $direccion =  $_POST["direccion"];
      $email =  $_POST["email"];
      $carrera = $_POST["carrera"];
      $pass = $_POST["contrasenia"];
      $pass2 = $_POST["repcontra"];
      

     if ( (strcmp($pass,$pass2) !== 0)){

      echo "<script>
      alert('Las contraseñas no coinciden');
      window.location= 'paginaRegistro.php'
      </script>";

     }else {  

      if (mysqli_query($conexion, " INSERT INTO Alumno (nombre, apellido, dni, direccion, email,fkcarrera_id, contrasenia) values ('$Nombre', '$Apellido','$DNI', '$direccion','$email','$carrera','$pass')")){ 

        echo "se realizó el ingreso" ; 
          
      }else {echo "no se pudo realizar el ingreso" ; }
      }
     
    }

  ?>

</body>
</html>