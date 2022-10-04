<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/loginLaureano.css">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  
  <body>

    <section class="container">     
      <div class="col-md-4" id="titulo1">
         <h4 style= "color: #4A8D9E;">Plataforma</h4>              
      </div>
    </section>

    <section class="container">     
      <div class="col-md-6" id="titulo2">
         <h1 style= "color: #F38618;">Nombre del Instituto</h1>              
      </div>
    </section>
    <center> <p><a href="index.html">inicio</a></p></center>
    <section class="container">     
      <div class="col-lg-8" id="contenedorNav"  >
        <a  aria-current="page" href="#"><img src="../img/home3.png" alt="Inicio" width="50%" ></a>
      <!--href="#" aca va el link a pagina inicio-->                
      </div>
    </section>   
              
    <section class="container">       
      <div class="row">
        <div class="col" id="form">

          <form action="loginAdministrarAlumnos.php" method="post">    
        
            <p style="text-align: center ;color:  #b5bebf;"><h0">Ingresa tus datos</h0></p>           
            <p style="text-align: center ;color: #f7c288;"><h0">USUARIO</h0></p>
                
            <td align="center"><input type="ing.usuario" minlength="9" maxlength="50" id="usuario" name="email" class="gui-input" autofocus required></td>                
            <br>
            <br>
            <p style="text-align: center ;color: #f7c288;"><h0">CONTRASEÑA</h0></p>
            <td align="center"><input type="password"  id="contraseña" name="contrasenia" ></td>
            <br>
            <br>

            <!-- minlength="9" maxlength="50" required  -->


            <button type="submit" id= button type="button" name="enviar" style="background-color: #4A8D9E; text-align: center ;color: #ffffff">ACCEDER</button>
        
          </form>

              
           
          <button id=button2 type="button2" href="#" style="background-color: #ffffff; text-align:center; color: #b5bebf" >¿Olvidaste tu Contraseña?</button>              
          <!--href="#" aca va el link a pagina restablecer contraseña-->
        
          
            
        </div>
          <div class="col">
                
            <p> Algunas de las cosas que podes hacer con este<br>
                sistema como alumno:<br>
                <br>
                ■ Inscribirte a materias y examenes.<br>
                ■ Consultar el plan de tu propuesta.<br>
                ■ Consultar tu historia academica.<br>
                ■ Actualizar tus datos personales.<br>
                ■ Recibir alertas sobre periodos de inscripcion<br>
                  o vencimientos de examenes finales.<br>
                <br>
                  Algunas de las cosas que podes hacer con este<br>
                  sistema como administrador:<br>
                <br>  
                ■ Creacion y administracion de Carreras<br></p>
        </div>        
               

       </div>
       
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>



<!-- <script type="text/javascript">
function mostrar() {
var tipo = document.getElementById("password");
if(tipo.type == 'password'){
tipo.type = 'text';
}else{ 
tipo.type = 'password'; 
}
}
</script> -->



<?php



if ( isset($_POST["enviar"]))  {

  session_start(); 
  require_once("../Controlador/LoginAdminAlumn.php");

}
?>



