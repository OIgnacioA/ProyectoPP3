
<?php



 if ( isset($_POST["enviar"]))  {


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

}
?>
