<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <script src="enie.js"></script>

</head>

<body>

<br>
  <center><p><a href="index.php">Inicio</a></p></center>
<?php

  session_start(); 

 include("Conexion.php");


    $consultaAl = "SELECT * FROM profesor";  

    $resultado = mysqli_query($conexion,$consultaAl);


        while($consulta = mysqli_fetch_array($resultado)){

          

            echo "
            <center> <table border=\"3\">
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
            <td><b><center>Titulo</center></b></td>
            <td><b><center>email</center></b></td>
            <td><b><center>Telefono</center></b></td>
            <td><b><center>DNI</center></b></td>
            </tr>
            <tr>
            <td><center>".$consulta["id"]."</center></td>
            <td><center>".$consulta["nombre"]."</center></td>
            <td><center>".$consulta["apellido"]."</center></td>
            <td><center>".$consulta["titulo"]."</center></td>
            <td><center>".$consulta["email"]."</center></td> 
            <td><center>".$consulta["telefono"]."</center></td>      
            <td><center>".$consulta["DNI"]."</center></td>
            <br>
           ";

        }

?>

</body>
</html>