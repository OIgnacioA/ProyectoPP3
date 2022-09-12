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

    <form action="index.php" method="post">
    <h4>Ingreso</h4>
   
      <input class="textos" type="text" name="email" id="email" placeholder="Ingrese email">
   

      
      <input class="textos" type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese su contraseña">


    
      <input class="botones" type="submit" value="Ingresar" name="ingreso">
      <p><a href="paginaRegistro.php">No tienes usuario? Create uno</a></p>

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