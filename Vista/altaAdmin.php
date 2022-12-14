<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Su rol es:  ". $rol; 

  if($nombre == null || $psswrd == null){

    die(); 

  }

  $arCategorias = array("Director", "Vicedirector", "Secretario");

  if(in_array($rol,$arCategorias) ) { } else { die();}
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Roboto:wght@700&display=swap" rel="stylesheet">
 
    <title>Alta de Administrador</title>
    
    <link rel="stylesheet" href="../css/MenuPrincipal.css">
    <link rel="stylesheet" href="../css/altaAdmin.css">
   
   
  



</head>

<body>
<header>
    <br>
    <div class="kontainer">

      <div>

        <div id="plataforma" >
          <h2>Plataforma</h2>
          <p>Entraste como <br>Administrador</p>        </div>

      </div>

      <div >

        <div id="titulo">
          <h1>Nombre del Instituto</h1> 
        </div>

      </div>

      <div>
        
        <button id="btnCerrarS" type="button" > <a href="../Controlador/Cerrar_session.php">Cerrar Sesion</a></button>

      </div>
        
    </div>

    
    <div class="MenuContainer">

      <div>
        <div>

          <nav class="navbar navbar-expand-lg  navbar-light bg-light">

            <div class="container-fluid ">
              
              <div class="imgHome">
                <a aria-current="page" href="Admin_Logueado.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40"></a>

              </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item menuli">
                    <a href="Lista_Admins.php">ALTA DE ADMINISTRADOR</a>
                  </li>

                  <li class="nav-item menuli">
                    <a href="Admin_administrarAlumnos.php">ALUMNOS</a>
                  </li>

                  <li class="nav-item menuli">
                    <a href="crearCarrera.php">CREAR CARRERA</a>
                  </li>

                  <li class="nav-item menuli">
                    <a href="administrar_Carrera.php">ADMINISTRAR CARRERA</a>
                  </li>

                  <li class="nav-item menuli">
                    <a href="administrar_vistaCarrera.php">VISTA CARRERAS</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

  </header>



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
          
      </div>   
      
      <div class="cajas">

        <div class="campos" >
            <input id="inputt" type="text" maxlength="100"  pattern="[a-zA-Z\s]{1,100}"placeholder="Ingrese Nombres" required name="nombre"; required>
        </div>

        <div class="campos">
            
            <input id="inputt" type="text" maxlength="100" pattern="[a-zA-Z\s]{1,100}" placeholder="Ingrese Apellidos" required name="apellido" required>
        </div>        

        <div class="campos2">

                <select name="DNIPassT" required>
                    <option  value="D">DNI</option>
                    <option value="P">Pasaporte</option>
                </select>
                <input type="text" id="passa"  maxlength={cambiar} placeholder="Numero"  name="dniPass" pattern="[0-9]{1,9}" required>
        </div>

        <div class="campos">
            
          <input id="inputt" type="email" placeholder="Ingrese E-Mail" name="email" required>

        </div>

        <div  class="campos">
            
          <select id="inputt" name="roll" placeholder="seleccione un rol" required>
            <option value="Preceptor">Preceptor</option>
            <option value="Director">Director</option>
            <option value="Vicedirector">Vicedirector</option>
            <option value="Secretario">Secretario</option>
            <option value="Profesor">Docente</option>
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