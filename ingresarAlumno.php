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

    <section class="registro">

      <form action="ingresarAlumno.php" method="post">
      <h4>Datos del Estudiante</h4>



        <!-- Nombre--> 

        <input class="textos" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre">

        <!-- Apellido--> 

        <input class="textos" type="text" name="apellido" id="apellido" placeholder="Ingrese apellido">

        <!-- Genero--> 

        <select class="select" Name="genero">
          <option value='fem'>Femenino</option>
          <option value='mas'>Masculino</option>
          <option value='otro'>otro</option>
        </select>


        <!-- carrera--> 

        <select class="select" Name="carrera">
          <option value='1'>Analista de sistemas</option>
          <option value='2'>Desarrollador de software</option>
          <option value='3'>Seguridad e higiene</option>
        </select>

        <!-- fecha de nacimiento--> 

        <label for="start">Fecha de Nacimiento:</label>

          <input type="date" id="start" name="calendarioN"
          
          min="1930-01-01" max="2030-00-00"> <br><br>

          <!-- dni o pasaporte --> 

          <label >DNI/Pasaporte</label>
          <select class="select" Name="DniPasaporte">
          <option value='D'>DNI</option>
          <option value='P' selected>Pasaporte</option>
        </select>

        <input class="textos" type="text" name="dniP" id="dnipasap" placeholder="Ingrese dni o Pasaporte">

        <!-- mail --> 

        <input class="textos" type="text" name="email" id="email" placeholder="Ingrese email">

        <!-- mail contacto --> 

        <input class="textos" type="text" name="emailC" id="emailC" placeholder="Ingrese email">

        <!-- cod y telefono--> 

        <input class="textos" type="text" name="cod" id="cod" placeholder="Codigo de Area">
        <input class="textos" type="text" name="tel" id="tel" placeholder="Telefono">

        <!--tel contacto--> 

        <input class="textos" type="text" name="codC" id="codC" placeholder="Codigo de Area">
        <input class="textos" type="text" name="telC" id="telC" placeholder="Telefono de contacto">

        <!-- direccion --> 
        <input class="textos" type="text" name="direccion" id="email" placeholder="Direccion">

        <!-- provincia --> 

        <input class="textos" type="text" name="provincia" id="provincia" placeholder="Provincia">

        <!-- localidad --> 

        <input class="textos" type="text" name="localidad" id="localidad" placeholder="Localidad">

        <!-- titulo --> 

        <input class="textos" type="text" name="titulo" id="titulo" placeholder="Titulo">

        <!-- fecha de alta--> 

        <label for="start">Fecha de Alta:</label>

        <input type="date" id="start" name="calendarioAlta"

          min="1930-01-01" max="2030-00-00"> <br><br>

        <!-- estado--> 

        <label >DNI/Pasaporte</label>
          <select class="select" Name="estado">
          <option value='Egresado'>Egresado</option>
          <option value='Regular' selected>Regular</option>
          <option value='Inscripto' selected>Inscripto</option>
          <option value='Noregular' selected>No regular</option>
        </select>

        <!-- observaciones --> 

        <input class="textos" type="text" name="observacion" id="email" placeholder="observaciones">


        <input class="botones" type="submit" value="Registrar" name="alta">
        

       </form>

    </section><br><br><br>
      
  <?php

    session_start(); 


    if ( isset($_POST["alta"]))  {


      include("Conexion.php");

      $Nombre = $_POST["nombre"];
      $Apellido =  $_POST["apellido"];
      $genero = $_POST["genero"];
      $carrera = $_POST["carrera"];
      $FechaNac = $_POST["calendarioN"];
      $DnioPass = $_POST["DniPasaporte"];
      $DniPass = $_POST["dniP"];
      $email =  $_POST["email"];
      $emailC =  $_POST["emailC"];
      $codA = $_POST["cod"];
      $codAC =  $_POST["codC"];
      $tel = $_POST["tel"];
      $telC =  $_POST["telC"];
      $direccion =  $_POST["direccion"];
      $provincia = $_POST["provincia"];
      $localidad = $_POST["localidad"];
      $titulo = $_POST["titulo"]; 
      $calendarioAlt = $_POST["calendarioAlta"];
      $estado =  $_POST["estado"];
      $observacion =  $_POST["observacion"];
    
      
      $prueba =  "SELECT * FROM Alumno WHERE dni = '$DniPass' ";
      $resultado = mysqli_query($conexion,$prueba);
      $consulta = mysqli_fetch_array($resultado);

     $DNIComp = $consulta['dni'];
      
            


      if (strcmp($DNIComp, $DniPass) === 0){

        
        echo  "Existe!!!";
  

      }else {


        if (mysqli_query($conexion, " INSERT INTO alumno (nombre, apellido, fnacimiento, genero, dni, email, cod_area, telefono,contacto_mail,      cod_area_cont, telefonocont, direccion, provincia, localidad, titulos, fe_alta, estado, observaciones, pasaporte,fk_carrera_id) values ('$Nombre', '$Apellido', '$FechaNac','$genero', '$DniPass','$email', '$codA', '$tel', '$emailC', '$codAC', '$telC','$direccion','$provincia', '$localidad', '$titulo','$calendarioAlt', '$estado', '$observacion', '$DniPass',  '$carrera')")){ 
 
          echo "se realizó el ingreso" ; 
                   
         }else {echo "no se pudo realizar el ingreso" ; }

        
      }
    


    }
       

    ?>

  </body>

</html>