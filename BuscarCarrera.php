<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    
    <script src="enie.js"></script>

</head>

<body>




<?php


    session_start(); 


 include("Conexion.php");


  

    $consultaAl = "SELECT * FROM carrera";  

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
            <td><b><center>Descripcion</center></b></td>
            <td><b><center>codigo</center></b></td>
            <td><b><center>Duracion</center></b></td>
            <td><b><center>Resolucion</center></b></td>
            <td><b><center>Año de Caducidad</center></b></td>
            <td><b><center>Año de Resolucion</center></b></td>
            <td><b><center>Alta</center></b></td>
            <td><b><center>Comentarios</center></b></td>
            </tr>
            <tr>
            <td><center>".$consulta["id"]."</center></td>
            <td><center>".$consulta["nombre"]."</center></td>
            <td><center>".$consulta["descripcion"]."</center></td>
            <td><center>".$consulta["codigo"]."</center></td>
            <td><center>".$consulta["duracion"]."</center></td>         
            <td><center>".$consulta["resolucion"]."</center></td>
            <td><center>".$consulta["anio_caducidad"]."</center></td>
            <td><center>".$consulta["anio_resolucion"]."</center></td>
            <td><center>".$consulta["alta"]."</center></td>
            <td><center>".$consulta["comentarios"]."</center></td>
            
            </tr>
            </table>
            
            <br><br>

           
            <form action=". "'". "materias.php". "'"."method=". "'". "post". "'". ">



            <input class=" . "'" ."textos". "'".  "type=". "'" . "'" . "text" . "'" . "name=". "'"."localidad". "'". "id=". "'". "localidad". "'"." placeholder=". "'". $consulta["id"]. "'". ">        




           <input "."type="."'". "submit"."'"."value="."'". "Ver Materias"."'"."onclick="."'"."name=". "'".id."'". "verMaterias(".$consulta["id"].")"."'"."/><br><br>
           
           </form>


            " ;



        }

       
        




?>













</body>
</html>