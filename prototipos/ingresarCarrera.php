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

      <form action="ingresarCarrera.php" method="post">
      <h4>Datos de la Carrera</h4>


        <!-- Nombre--> 

        <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">

       <!-- descripcion --> 

       <input class="textos" type="text" name="descripcion" id="email" placeholder="Descripcion">

        <!-- cod Carrera --> 

       <input class="textos" type="text" name="codigo" id="dnipasap" placeholder="Codigo">

       <!-- duracion --> 

       <input class="textos" type="text" name="duracion" id="duracion" placeholder="Duracion">

       <!-- resolucion --> 

       <input class="textos" type="text" name="resolucion" id="resolucion" placeholder="Resolucion">

        <!-- Año de caducidad --> 

        <input class="textos" type="text" name="caducidad" id="caducidad" placeholder="Año de Caducidad">

        <!-- Año de resolucion --> 

        <input class="textos" type="text" name="anioResolucion" id="Resolucion" placeholder="Año de Resolucion">

        <!-- fecha de ALTA--> 

        <label for="start">Fecha de Alta:</label>

        <input type="date" id="start" name="Fecha de Alta"

        min="1930-01-01" max="2030-00-00"> <br><br><br>

         <!-- Campo Comentarios --> 

        <input class="textos" type="text" name="comentarios" id="Resolucion" placeholder="Comentarios">

        <input class="botones" type="submit" value="Registrar" name="alta"><br><br>

       </form>

    </section><br><br><br>
      
  <?php

    session_start(); 


    if ( isset($_POST["alta"]))  {


      include("Conexion.php");

      $Nombre = $_POST["nombre"];
      $Descripcion =  $_POST["descripcion"];
      $Codigo = $_POST["codigo"];
      $Duracion= $_POST["duracion"];
      $Resolucion = $_POST["resolucion"];
      $Caducidad = $_POST["caducidad"];
      $anioresol = $_POST["anioResolucion"];
      $Alta =  $_POST["alta"];
      $Comentarios=  $_POST["comentarios"];
      

      $prueba =  "SELECT * FROM carrera WHERE codigo = '$Codigo'";
      $resultado = mysqli_query($conexion,$prueba);
      $consulta = mysqli_fetch_array($resultado);

      $CODComp = $consulta['codigo'];
      
            

        if (strcmp($CODComp, $Codigo) === 0){

            echo  "carrera existente";

        }else {

            if (mysqli_query($conexion, " INSERT INTO carrera (nombre, descripcion, codigo, duracion, resolucion, anio_caducidad, anio_resolucion,alta, comentarios) values ('$Nombre', '$Descripcion', '$Codigo',' $Duracion', '$Resolucion','$Caducidad', '$anioresol', '$Alta', '$Comentarios')")){ 

                echo "se realizó la alta" ; 
                        
            }else {echo "no se pudo realizar la alta" ; }

        }

    }
        

    ?>

  </body>

</html>