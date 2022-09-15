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

    <form action="ingresarProfesor.php" method="post">
      <h4>Datos del Profesor</h4>



        <!-- Nombre--> 

        <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">

        <!-- Apellido--> 

        <input class="textos" type="text" name="apellido" id="apellido" placeholder="Ingrese apellido">


        <!-- mail --> 

        <input class="textos" type="text" name="email" id="email" placeholder="Ingrese email">

        <!-- titulo --> 

        <input class="textos" type="text" name="titulo" id="emailC" placeholder="titulo">

         <!-- DNI --> 

         <input class="textos" type="text" name="DNI" id="emailC" placeholder="dni">

        <!-- cod y telefono--> 

       
        <input class="textos" type="text" name="tel" id="tel" placeholder="Telefono">


        <input class="botones" type="submit" value="Registrar" name="alta">
        

       </form>

    </section><br><br><br>
      
  <?php

    session_start(); 


    if ( isset($_POST["alta"]))  {


      include("Conexion.php");

      $Nombre = $_POST["nombre"];
      $Apellido =  $_POST["apellido"];
      $Titulo = $_POST["titulo"];
      $email =  $_POST["email"];
      $dni =  $_POST["DNI"];
      $tel = $_POST["tel"];

      
      $prueba =  "SELECT * FROM profesor WHERE DNI = '$dni' ";
      $resultado = mysqli_query($conexion,$prueba);
      $consulta = mysqli_fetch_array($resultado);

     $DNIComp = $consulta['dni'];
      
            


      if (strcmp($DNIComp, $dni) === 0){

        
        echo  "Existe!!!";
  

      }else {


        if (mysqli_query($conexion, " INSERT INTO profesor (nombre, apellido, titulo, email, telefono, dni) values ('$Nombre', '$Apellido', '$Titulo','$email', '$tel', '$dni')")){ 
 
          echo "se realizó el ingreso" ; 
                   
         }else {echo "no se pudo realizar el ingreso" ; }

        
      }
    


    }
       

    ?>

  </body>

</html>