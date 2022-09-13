<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>




<?php


    session_start(); 


    if ( $_SESSION["Logueado!"])  {


      include("Conexion.php");

      $consultaAl = "SELECT * FROM alumno WHERE email = '". $_SESSION['Usuario_N']."'";  
  
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
            <td><b><center>ID</center></b></td>
            <td><b><center>Nombre</center></b></td>
            <td><b><center>Apellido</center></b></td>
            <td><b><center>DNI</center></b></td>
            <td><b><center>Direccion</center></b></td>
            <td><b><center>email</center></b></td>
            <td><b><center>Carrera</center></b></td>
            </tr>
            <tr>
            <td><center>".$consulta['id']."</center></td>
            <td><center>".$consulta['nombre']."</center></td>
            <td><center>".$consulta['apellido']."</center></td>
            <td><center>".$consulta['dni']."</center></td>
            <td><center>".$consulta['direccion']."</center></td>
            <td><center>".$consulta['email']."</center></td>
            <td><center>".$consulta['fkcarrera_id']."</center></td>




         
            </tr>
            </table>
            
            <br><br>
            

            " ;
   
        }
    }
?>


</body>
</html>