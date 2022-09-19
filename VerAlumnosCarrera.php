<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<br>
  <center><p><a href="index.php">Inicio</a></p></center>
<form action="verAlumnosCarrera.php" method="post">

 
<select class="select" Name="carrera">
          <option value='1'>Analista de sistemas</option>
          <option value='2'>Desarrollador de software</option>
          <option value='3'>Seguridad e higiene</option>
        </select>


<input type="submit" value="Ver Alumnos" name="envio"/><br><br>

</form>



<?php


  if ( isset($_POST["envio"]))  {

    session_start(); 

    $var = $_POST["carrera"];
    include("Conexion.php");
  
    
    
    $consultaAl = "SELECT A.nombre, A.apellido, A.email, A.cod_area, A.telefono, A.estado  from alumno As A
  
    WHERE A.fk_carrera_id = $var";  

    $resultado = mysqli_query($conexion,$consultaAl);


   while($consulta = mysqli_fetch_array($resultado)){

    echo "<center> <table border=\"3\">
    <tr>
      </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
      <td><font color='blue'><b><center>Nombre:</center></b></font></td>
      <td><center>".$consulta['nombre']."</center></td>
      <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
    <tr>
    
    <td><b><center>Nombre</center></b></td>
    <td><b><center>Apellido</center></b></td>      
    <td><b><center>DNI</center></b></td>
    <td><b><center>email</center></b></td>
    <td><b><center>cod Area</center></b></td>
    <td><b><center>Telefono</center></b></td>          
    <td><b><center>Estado</center></b></td>
    </tr>
    <tr>      
    <td><center>".$consulta["nombre"]."</center></td>
    <td><center>".$consulta["apellido"]."</center></td>
    <td><center>".$consulta["dni"]."</center></td>
    <td><center>".$consulta["email"]."</center></td>
    <td><center>".$consulta["cod_area"]."</center></td>
    <td><center>".$consulta["telefono"]."</center></td>
    </tr>
    </table>
    <br>
  </center>
  
    ";

  }  
}

  ?>
     


</body>
</html>