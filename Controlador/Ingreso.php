
<?php

error_reporting(0);
session_start();

if ( isset($_POST["enviar"]))  {

   
  if (isset($_POST["email"])  && isset($_POST['contrasenia']) )  {
 

   

   $mail =  $_POST['email'];
   $contrasenia =$_POST['contrasenia'];

   $alta2 = false; 
   $alta3 = false; //preceptor
   $alta4 = false; //super

   include("../Modelo/Conexion.php");


    //-----------------------------------paso 1 [USUARIO y CONTRASEÑA -DNI- CORRECTOS]

   $rs = mysqli_query($conexion, "SELECT email FROM personal WHERE email = '".$mail."'  AND dni =  '".$contrasenia."'");


    $alta1 = mysqli_num_rows($rs); // reemplazo de la variable (!$rs) qule daba siempre positivo


  //-----------------------------------paso 1.2  [USUARIO y CONTRASEÑA -PASAPORTE- CORRECTOS]

    if ($alta1== 0){

        $rs = mysqli_query($conexion, "SELECT email FROM personal WHERE email = '".$mail."'  AND pasaporte =  '".$contrasenia."'");
        $alta1 = mysqli_num_rows($rs);
    }


   //-----------------------------------paso 2 [ROL CORRECTO]


   $arr = array("Director", "Vicedirector","Secretario"); #roles admin
 
   $consultaAl = "SELECT rol FROM personal WHERE email =" . "'" . $mail . "'". "AND dni =  '".$contrasenia."'" ;

   $resultado = mysqli_query($conexion,$consultaAl);
   $consulta = mysqli_fetch_array($resultado);
   $rol= $consulta['rol'];


    if(in_array($rol, $arr)) {   

      $alta2 = true; 
          
    }else {

      echo("error"); 

    }

   }
  
   if($consulta['rol'] == "Preceptor"){$alta3 = true; }// rol preceptor

   if($consulta['rol'] == "super"){$alta4 = true;}// rol super

   

    if(($alta1 == 1)){

        $_SESSION['usuario'] = $mail;
        $_SESSION['Psswrd'] = $contrasenia;
        $_SESSION['Rol'] = $consulta['rol'];

        if ($alta2 == true ) {

           header ("location:../Vista/Admin_Logueado.php"); 
          
     
        }else if ($alta3 == true ){

           header ("location:../Vista/Preceptor_admin.php"); 

        }else if ($alta4 == true ){

           header ("location:../Vista/SuperAdmin.php"); 
   
        }else {  echo "<center>  <p style=color:red> EL USUARIO Y O CONTRASEÑA NO SON CORRECTOS </p></center>"; }


    }

}
?>