<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet">
 
    <title>Alta de Administrador</title>
    <link rel="stylesheet" href="../css/stylesLeandro.css">
</head>

<body>
   <header><i>Agregar usuario</i> </header>
   <center> <p><a href="index.php">inicio</a></p></center>
   
   
   <main  id="datos_personales">
      
    <form action="altaAdmin.php" method="post">
       
     
        <h3><i> Datos Personales</i></h3>

        <div class="contenedor">

            <div class="etiquetas">
                <p><label>Nombres</label> <br></p>
                <p><label>Apellidos</label> <br></p>
                <p><label>DNI/Pasaporte</label><br></p>
                <p><label>E-Mail</label><br></p>
                <p><label>Rol</label><br></p>
                
                <label>Carrera (alumno)</label>
            </div>   
           
            <div class="cajas">
                <div class="campos">
                    
                    <input id="inputt" type="text" maxlength="100"  pattern="[a-zA-Z\s]{1,100}"placeholder="Ingrese Nombres" required name="nombre";>
                </div>

                <div class="campos">
                    
                    <input id="inputt" type="text" maxlength="100" pattern="[a-zA-Z\s]{1,100}" placeholder="Ingrese Apellidos" required name="apellido">
                </div>        

                <div class="campos2">

                        <select name="DNIPassT">
                            <option  value="D">DNI</option>
                            <option value="P">Pasaporte</option>
                        </select>
                        <input type="text" id="passa"  maxlength={cambiar} placeholder="Numero"  name="dniPass" pattern="[0-9]{1,8}">
                </div>

                <div class="campos">
                    
                    <input id="inputt" type="email" placeholder="Ingrese E-Mail" name="email">
                </div>

                <div  class="campos">
                    
                    <select id="inputt" name="roll">
                        <option value="">Seleccione una opción</option>
                        <option value="Preceptor">Preceptor</option>
                        <option value="Director">Director</option>
                        <option value="Vicedirector">Vicedirector</option>
                        <option value="Secretario">Secretario</option>
                        <option value="Profesor">Docente</option>
                        <option value="Alumno">Alumno</option>
                    </select>            
                </div>            

                <div class="campos">
                
                    <select  id="inputt" class="select" Name="carrera">
                        <option value='1'>Analista de sistemas</option>
                        <option value='2'>Desarrollador de software</option>
                        <option value='3'>Seguridad e higiene</option>
                    </select>
                </div>    


                
            </div>

           
        </div><br>
      
       <input class="boton" type="submit" name="envio" value="Agregar usuario"><br><br>
     

    </form>
    </main>
<?php


if ( isset($_POST["envio"]))  {

  require_once("../Controlador/C_altaAdmin.php");

}
?>


</body>
</html>