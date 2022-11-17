
<?php

error_reporting(0);

if ( isset($_POST["enviar"]))  {

   
  if (isset($_POST["email"])  && isset($_POST['contrasenia']) )  {
 

   

   $mail =  $_POST['email'];
   $alta2 = false; 
   $alta3 = false; //preceptor
   $alta4 = false; //super

   include("../Modelo/Conexion.php");


    //-----------------------------------paso 1 [USUARIO y CONTRASEÑA CORRECTOS]

   $rs = mysqli_query($conexion, "SELECT email FROM personal WHERE email = '".$_POST['email']."'  AND dni =  '".$_POST['contrasenia']."'");

    $alta1 = mysqli_num_rows($rs); // reemplazo de la variable (!$rs) qule daba siempre positivo


    //-----------------------------------paso 2 [ROL CORRECTO]


   $arr = array("Director", "Vicedirector","Secretario"); #roles admin
 
   $consultaAl = "SELECT rol FROM personal WHERE email =" . "'" . $mail . "'". "AND dni =  '".$_POST['contrasenia']."'" ;

   $resultado = mysqli_query($conexion,$consultaAl);
   $consulta = mysqli_fetch_array($resultado);
  


    for ($i = 0; $i < count($arr); $i++) {

       if($consulta['rol'] == $arr[$i]){
                 
           $alta2 = true; 
           
       }
     
    }

   }
  
   if($consulta['rol'] == "Preceptor"){$alta3 = true; }// rol preceptor

   if($consulta['rol'] == "super"){$alta4 = true;}// rol super

   

    if(($alta1 == 1)){

        echo"titititi--------------t";

        if ($alta2 == true ) {
            
           header ("location:../Vista/AdminLogueado.php"); 
     
            //  $_SESSION["Logueado!"] = true; 
            //  $_SESSION["Usuario_N"] = $_POST["email"];  
            echo "entrada----en: ".$alta2. "<br>";

        }else if ($alta3 == true ){


         header ("location:../Vista/Preceptor_admin.php"); 


        }else if ($alta4 == true ){


            header ("location:../Vista/SuperAdmin.php"); 
   
   
        }else {  echo "<center>  <p style=color:red> EL USUARIO Y O CONTRASEÑA NO SON CORRECTOS </p></center>"; }

    

   

     }

}
?>