<?php
 error_reporting(0);
 
 session_start();
 
 $iid = $_SESSION['id'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/index2.css">
   
    <title>Ingreso</title>
</head>
<body>

<?php
echo "
        <div class=" . "mensaje" . ">
        
        <center><b> Inscripcion Exitosa! </b></center><br><br><br>

        <b>  Número de inscripción: </b><br><br><center>". $iid
        
        
        . "</center><b><br>Documentos que el alumno debe acercar 
            al instituto para terminar el registro:<br></b><br>
        °  Fotocopia del Dni.<br>
        °  Fotocopia del titulo del secundario/polimodal.<br>
        °  Foto carnet.<br>
        °  Certificado médico.<br>
        °  Número de inscripción.
        
        </div>

        "; 

?>

</body>
</html>