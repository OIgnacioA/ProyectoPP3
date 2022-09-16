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

    <form action="" method="post">
    <h4>Principal</h4>
   
       <br>
      <p><a href="ingresarAlumno.php">Ingresar Alumnos</a></p>
      <p><a href="ingresarMateria.php">Ingresar Materia</a></p>
      <p><a href="ingresarProfesor.php">ingresarProfesor</a></p>
      <br><br>
      <p><a href="verCarreras.php">Ver Carreras</a></p>
      <p><a href="verAlumnosCarrera.php">Ver Alumnos por carrera</a></p>
      <p><a href="verAlumnos.php">Ver todos los Alumnos </a></p>
      <p><a href="verMateriasCarrera.php">Ver Materias</a></p>
      <p><a href="verProfesores.php">Ver Profesores</a></p>
      <br><br>
      <p><a href="busqueda.php">Buscar alumno por dni</a></p>
      <br><br>
      <p><a href="paginaRegistro.php">pagina de registro -?</a></p>
      <p><a href="ingresarCarrera.php">Ingresar Carrera</a></p>

    </form>

  </section>
    
  <?php

session_start(); 

if (isset($_POST["email"])  && isset($_POST['contrasenia']) )  {

  include("Conexion.php");

  $rs = mysqli_query($conexion, "SELECT email FROM alumno WHERE email = '".$_POST['email']."'  AND contrasenia =  '".$_POST['contrasenia']."';");

  $alta = mysqli_num_rows($rs); // reemplazo de la variable (!$rs) qule daba siempre positivo

  if($alta == 1){
    
    $_SESSION["Logueado!"] = true; 
    $_SESSION["Usuario_N"] = $_POST["email"];  
    header ("location:principal.php"); 
    
    
  }else{ 
  
    echo  "<center>  <p style=color:red> El usuario o la contraseña  Ingresados No son Correctos </p></center>";  

  }
  
  



}

?>

</body>

<script type="text/javascript">
function mostrar() {
var tipo = document.getElementById("password");
if(tipo.type == 'password'){
tipo.type = 'text';
}else{ 
tipo.type = 'password'; 
}
}
</script>

</html>