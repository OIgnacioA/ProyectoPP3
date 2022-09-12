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

  <section class="registro">

    <form action="paginaRegistro.php" method="post">
    <h4>Datos del Estudiante</h4>



      <!-- Nombre--> 

      <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">

      <!-- Apellido--> 

      <input class="textos" type="text" name="apellido" id="apellido" placeholder="Ingrese apellido">


      <!-- carrera--> 
        <select class="select" Name="carrera">
        <option value='1'>Analista de sistemas</option>
        <option value='2' selected>Desarrollador de software</option>
        <option value='3'>Seguridad e higiene</option>
      </select>

     <!-- fecha de nacimiento--> 

      <label for="start">Fecha de Nacimiento:</label>

        <input type="date" id="start" name="calendario"
       
       min="1930-01-01" max="2030-00-00"> <br><br>

       <!-- dni o pasaporte --> 

       <label >DNI/Pasaporte</label>
       <select class="select" Name="DniPasaporte">
        <option value='D'>DNI</option>
        <option value='P' selected>Pasaporte</option>
      </select>

      <input class="textos" type="text" name="dni" id="dnipasap" placeholder="Ingrese dni o Pasaporte">

      <!-- mail --> 

      <input class="textos" type="text" name="email" id="email" placeholder="Ingrese email">

      <!-- cod y telefono--> 

      <input class="textos" type="text" name="CodArea" id="email" placeholder="Codigo de Area">
      <input class="textos" type="text" name="tel" id="email" placeholder="Telefono">
     <!-- direccion --> 
      <input class="textos" type="text" name="direccion" id="email" placeholder="Direccion">

     <!-- provincia --> 

     <input class="textos" type="text" name="provincia" id="email" placeholder="Provincia">

    <!-- localidad --> 

    <input class="textos" type="text" name="localidad" id="email" placeholder="Localidad">


      <input class="botones" type="submit" value="Registrar" name="ingreso">
      

    </form>

  </section><br><br><br>
    
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
      

     if ( (strcmp($pass,$pass2 ) !== 0)){

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