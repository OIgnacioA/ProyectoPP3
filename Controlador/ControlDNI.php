
<?php


    session_start(); 

    session_start(); 

 include("Conexion.php");


    $consultaDNI = "SELECT * FROM carrera  ";  

    $resultado = mysqli_query($conexion,$consultaAl);


        while($consulta = mysqli_fetch_array($resultado)){
     
            SELECT c.nombre as Carrera, A.nombre as Alumno, A.dni as DNIAl, P.nombre as NombrePersonal, P.rol as Rol, P.dni as DNIPer FROM carrera as c
            JOIN alumno A on (A.fk_carrera_id = c.id)
            JOIN personal P on (P.id_carrera = c.id)





  ?>
