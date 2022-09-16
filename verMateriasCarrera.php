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



    <form action="verMateriasCarrera.php" method="post">

    
        <select class="select" Name="carrera">
            <option value='1'>Analista de sistemas</option>
            <option value='2'>Desarrollador de software</option>
            <option value='3'>Seguridad e higiene</option>
        </select>


       <input type="submit" value="Ver Materias" name="envio"/><br><br>

    </form>



<?php




if ( isset($_POST["envio"]))  {


    session_start(); 

    $var = $_POST["carrera"];
    include("Conexion.php");

    


    $consultaAl = "SELECT C.nombre as Carrera, M.nombre as Materia, M.descripcion,  M.codigo, p.apellido as profesor , M.id  FROM `materia_carrera` as MC

    JOIN carrera C on (C.id = MC.carrera_id)
    JOIN materia M on (M.id = MC.materia_id)
    JOIN profesor p on (p.id = M.profesor_id)
    
    WHERE C.id = $var";  

   

    $resultado = mysqli_query($conexion,$consultaAl);


    while($consulta = mysqli_fetch_array($resultado)){

        echo "<center> <table border=\"3\">
        <tr>
            </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
            <td><font color='blue'><b><center>Nombre:</center></b></font></td>
            <td><center>".$consulta["Carrera"]."</center></td>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
        <tr>
        
        <td><b><center>Materia</center></b></td>
        <td><b><center>Descripcion</center></b></td>
        <td><b><center>Codigo</center></b></td>
        <td><b><center>Profesor</center></b></td>
        <td><b><center>ID</center></b></td>
        </tr>
        <tr>
        <td><center>".$consulta["Materia"]."</center></td>
        <td><center>".$consulta["descripcion"]."</center></td>
        <td><center>".$consulta["codigo"]."</center></td>
        <td><center>".$consulta["profesor"]."</center></td>
        <td><center>".$consulta["id"]."</center></td>
        </tr>
        </table>
        
        <br><br>

        
        <form action=". "'". "VerCarreras.php". "'"."method=". "'". "post". "'". ">

        <input type="."'". "submit"."'"."value="."'". "Ver Carreras"."'"."name="."'"."envio"."'"."/><br><br>
        
        </form>


        ";

        
        

    }  
    
}   

    ?>
     


</body>
</html>