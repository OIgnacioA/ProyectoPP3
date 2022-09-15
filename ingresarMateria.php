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

      <form action="ingresarMateria.php" method="post">
      <h4>Datos de la Materia</h4>

        <!-- Nombre--> 

        <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">

        <!-- codigo --> 

        <input class="textos" type="text" name="codigo" id="email" placeholder="Codigo">

        <!-- descripcion --> 

        <input class="textos" type="text" name="descripcion" id="email" placeholder="Codigo">

        <!-- ID Profesor --> 

        <input class="textos" type="text" name="IDProfesor" id="idprofesor" placeholder="ID Profesor">


        <input class="botones" type="submit" value="Registrar" name="alta"><br><br>

       </form>

    </section><br><br><br>
      
  <?php

    session_start(); 


    if ( isset($_POST["alta"]))  {


      include("Conexion.php");

      $Nombre = $_POST["nombre"];
      $Codigo = $_POST["codigo"];
      $Descripcion = $_POST["descripcion"];
      $IDProfesor= $_POST["IDProfesor"];
 ;
      

      $prueba =  "SELECT * FROM materia WHERE codigo = '$Codigo'";
      $resultado = mysqli_query($conexion,$prueba);
      $consulta = mysqli_fetch_array($resultado);

      $CODComp = $consulta['codigo'];
      
            

        if (strcmp($CODComp, $Codigo) === 0){

            echo  "Materia existente";

        }else {

            if (mysqli_query($conexion, " INSERT INTO carrera (nombre, descripcion, codigo, profesro_id) values ('$Nombre', '$Descripcion', '$Codigo',' $Duracion', '$IDProfesor')")){ 

                echo "se realizó la alta" ; 
                        
            }else {echo "no se pudo realizar la alta" ; }

        }

    }
        

    ?>

  </body>

</html>