
<?php

error_reporting(0);

if ( isset($_POST["enviar"]))  {

   
  if (isset($_POST["email"])  && isset($_POST['contrasenia']) )  {
 

   

   $mail =  $_POST['email'];
   $alta2 = false; 

   include("../Modelo/Conexion.php");


    //-----------------------------------paso 1 [USUARIO y CONTRASEÑA CORRECTOS]

   $rs = mysqli_query($conexion, "SELECT email FROM personal WHERE email = '".$_POST['email']."'  AND dni =  '".$_POST['contrasenia']."'");

    $alta1 = mysqli_num_rows($rs); // reemplazo de la variable (!$rs) qule daba siempre positivo


    //-----------------------------------paso 2 [ROL CORRECTO]


   $arr = array("Preceptor","Director", "Vicedirector","Secretario"); #roles
 
   $consultaAl = "SELECT rol FROM personal WHERE email =" . "'" . $mail . "'". "AND dni =  '".$_POST['contrasenia']."'" ;

   $resultado = mysqli_query($conexion,$consultaAl);
   $consulta = mysqli_fetch_array($resultado);
  


    for ($i = 0; $i < count($arr); $i++) {

       if($consulta['rol'] == $arr[$i]){
                 
           $alta2 = true; 
           
       }
     
    }

   }
  

    if(($alta1 == 1)){

        if ($alta2 == false ){  
        echo "<center>  <p style=color:red> El usuario no cuenta con permisos para ingresar a esta página </p></center>";  
        }else {
            
           // header ("location:../Controlador/pagi_Ejem_Logueado.php"); 
     
            //  $_SESSION["Logueado!"] = true; 
            //  $_SESSION["Usuario_N"] = $_POST["email"];  
            echo "engtrada----enn: ".$alta2. "<br>";
        }

    }else {  echo "<center>  <p style=color:red> EL USUARIO Y O CONTRASEÑA NO SON CORRECTOS </p></center>"; }

    

   

}


?>