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

<section class="registro">

    <form action="BUSQUEDA.php" method="post">
    <h4>Ingreso</h4>
   
      <input class="textos" type="text" name="DNI" id="" placeholder="Ingrese DNI">
   

    
      <input class="botones" type="submit" value="BUSCAR" name="busqueda">
     

    </form>

  </section>





<?php


    session_start(); 


   


include("Conexion.php");


if (isset($_POST["busqueda"]) )  {

    $consultaAl = "SELECT * FROM alumno WHERE DNI = '". $_POST["DNI"]."'";  

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
            <td><b><center>Fecha de nacimiento</center></b></td>
            <td><b><center>Genero</center></b></td>
            <td><b><center>DNI</center></b></td>
            <td><b><center>email</center></b></td>
            <td><b><center>cod Area</center></b></td>
            <td><b><center>Telefono</center></b></td>
            <td><b><center>contacto_Mail</center></b></td>
            <td><b><center>cod Area contacto</center></b></td>
            <td><b><center>telefono contacto</center></b></td>
            <td><b><center>Direccion</center></b></td>
            <td><b><center>Provincia</center></b></td>
            <td><b><center>Localidad</center></b></td> 
            <td><b><center>Titulos</center></b></td>
            <td><b><center>Alta</center></b></td>
            <td><b><center>Estado</center></b></td>
            <td><b><center>Observaciones</center></b></td>
            <td><b><center>Pasaporte</center></b></td>
            <td><b><center>Carrera</center></b></td>
            </tr>
            <tr>
            <td><center>".$consulta["id"]."</center></td>
            <td><center>".$consulta["nombre"]."</center></td>
            <td><center>".$consulta["apellido"]."</center></td>
            <td><center>".$consulta["fnacimiento"]."</center></td>
            <td><center>".$consulta["genero"]."</center></td>         
            <td><center>".$consulta["dni"]."</center></td>
            <td><center>".$consulta["email"]."</center></td>
            <td><center>".$consulta["cod_area"]."</center></td>
            <td><center>".$consulta["telefono"]."</center></td>
            <td><center>".$consulta["contacto_mail"]."</center></td>
            <td><center>".$consulta["cod_area_cont"]."</center></td>
            <td><center>".$consulta["telefonocont"]."</center></td>
            <td><center>".$consulta["direccion"]."</center></td>
            <td><center>".$consulta["provincia"]."</center></td>
            <td><center>".$consulta["localidad"]."</center></td>
            <td><center>".$consulta["titulos"]."</center></td>
            <td><center>".$consulta["fe_alta"]."</center></td>
            <td><center>".$consulta["estado"]."</center></td>
            <td><center>".$consulta["observaciones"]."</center></td>
            <td><center>".$consulta["dni"]."</center></td>
            <td><center>".$consulta['fk_carrera_id']."</center></td>

             


            </tr>
            </table>
            
            <br><br>
            

            " ;

        }
}
?>


</body>
</html>