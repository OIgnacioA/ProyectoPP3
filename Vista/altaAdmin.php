<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Administrador</title>
    <link rel="stylesheet" href="stylesLeandro.css">
</head>
<body>
    <header><i>Agregar usuario</i> </header>

    <form action="altaAdmin.php" method="post">

        <main id="datos_personales">
            <h2><i> Datos Personales</i></h2>

            <div class="campos">
                <label>Nombre</label>
                <input type="text" maxlength="100"  pattern="[a-zA-Z\s]{1,100}"placeholder="Nombre" required name="nombre";>
            </div>

            <div class="campos">
                <label>Apellido</label>
                <input type="text" maxlength="100" pattern="[a-zA-Z\s]{1,100}" placeholder="Apellido" required name="apellido">
            </div>        

            <div class="campos">

                <label>DNI/Pasaporte</label>
                    <select name="DNIPassT">
                        <option value="D">DNI</option>
                        <option value="P">Pasaporte</option>
                    </select>
                    <input type="number" maxlength={cambiar}  name="dniPass">
            </div>

            <div class="campos">
                <label>E-Mail</label>
                <input type="email" placeholder="abc@mail.com" name="email">
            </div>

            <div class="campos">
                <label>Rol</label>
                <select name="roll">
                    <option value="">Seleccione un rol</option>
                    <option value="Preceptor">Preceptor</option>
                    <option value="Director">Director</option>
                    <option value="Vicedirector">Vicedirector</option>
                    <option value="Secretario">Secretario</option>
                    <option value="Docente">Docente</option>
                    <option value="Alumno">Alumno</option>
                </select>            
            </div>            

            <div class="campos">
               <label>Carrera (alumno)</label>
                <select class="select" Name="carrera">
                     <option value='1'>Analista de sistemas</option>
                    <option value='2'>Desarrollador de software</option>
                    <option value='3'>Seguridad e higiene</option>
                </select>
            </div>    


            <div class="campos">
                <input type="submit" value="Agregar usuario" name="envio"/><br><br>
            </div>
        
        </main>

    </form>

<?php


if ( isset($_POST["envio"]))  {

  require_once("../Controlador/C_altaAdmin.php");

}
?>


</body>
</html>