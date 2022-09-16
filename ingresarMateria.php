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
      <h4>Datos de la Materia</h4><br>

        <!-- Nombre--> 

        <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">

        <!-- codigo --> 

        <input class="textos" type="text" name="codigo" id="email" placeholder="Codigo">

        <!-- descripcion --> 

        <input class="textos" type="text" name="descripcion" id="email" placeholder="descripcion">

        <!-- ID Profesor --> 

        <input class="textos" type="text" name="IDProfesor" id="idprofesor" placeholder="ID Profesor">

         <!-- carreras --> 

          <input type="checkbox" id="html" name="1" value="1">
           <label for="html">Analista de Sistemas</label><br>
          <input type="checkbox" id="css" name="2" value="2">
            <label for="css">Desarrollador de Software</label><br>
          <input type="checkbox" id="javascript" name="3" value="3">
           <label for="javascript">Seguridad e Higiene</label><br><br>

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

    $FK_Carrera1= $_POST["1"];
    $FK_Carrera2= $_POST["2"];
    $FK_Carrera3= $_POST["3"];

    $arrayFK = [1 => $FK_Carrera1, 2 => $FK_Carrera2, 3 => $FK_Carrera3];

    $prueba =  "SELECT * FROM materia WHERE nombre = '$Nombre'";
    $resultado = mysqli_query($conexion,$prueba);
    $consulta = mysqli_fetch_array($resultado);
 
    $CODComp = $consulta['codigo'];

    if (strcmp($CODComp, $Codigo) === 0){

        echo  "Materia existente";

    }else {

      if ((mysqli_query($conexion, " INSERT INTO materia (nombre, descripcion, codigo, profesor_id ) values ('$Nombre', '$Descripcion', '$Codigo', '$IDProfesor')"))){ 

        echo "se realizó la alta" ; 
      }else {echo "no se pudo realizar la alta" ; }


      $prueba =  "SELECT * FROM materia WHERE codigo = '$Codigo'";
      $resultado = mysqli_query($conexion,$prueba);
      $consulta = mysqli_fetch_array($resultado);
      $idUltima = $consulta['id'];

     

      $cont = 1 ; 

      while ($cont < 4) {

        if ( $arrayFK[$cont]!=NULL) {  

          if ((mysqli_query($conexion, " INSERT INTO materia_carrera (materia_id, carrera_id ) values ('$idUltima', '$arrayFK[$cont]')"))){ 

            echo "se realizó alta en carrera". $cont ; ; 

          }}else {echo "no se pudo realizar el alta". $cont ; }
        

        $cont= $cont + 1 ; 

      }
    }
  }
    ?>

  </body>

</html>