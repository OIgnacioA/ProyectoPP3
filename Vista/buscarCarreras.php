<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/buscarCarreras.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ver Carreras</title>

    
    <script src="enie.js"></script>

</head>

<body>
   
    <header>
        <div id="titulo">
           <h1 style= "color: #f38618;">Ver carreras</h1>
        </div>

        <a class="moveL" aria-current="page" href="../Vista/index.html"><img src="../img/home3.png" alt="Inicio" ></a>

    </header>
<div class="principal">

        
<?php

  session_start(); 

  include("../Modelo/Conexion.php");


    $consultaAl = "SELECT * FROM carrera";  

    $resultado = mysqli_query($conexion,$consultaAl);


        while($consulta = mysqli_fetch_array($resultado)){

            $var =  $consulta["id"];

            echo "<br><br><center> <table border=\"3\">
            <tr>
                </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                <td><font color='blue'><b><center>Nombre:</center></b></font></td>
                <td><center>".$consulta["nombre"]."</center></td>
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
 
            <form action=". "'". "verMateriasCarrera.php". "'"."method=". "'". "post". "'". ">
            <input class=" . "'" ."textos". "'".  "type="."'" . "text" . "'" . "name=". "'"."carrera". "'". "id=". "'". "localidad". "'"." placeholder=". "'"."prueba". "'". "value =". "'".$var."'"." style = "."'" ."display:none". "'".">        
            <input type="."'". "submit"."'"."value="."'". "Ver Materias"."'"."name="."'"."envio"."'"."/><br><br>
           
            </form>
            " ;

        }

?>


</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <br>

</body>
</html>