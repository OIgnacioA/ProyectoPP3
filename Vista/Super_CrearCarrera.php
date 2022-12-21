<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Su rol es:  ". $rol; 

  if($nombre == null || $psswrd == null || $rol !='super'){

    die(); 

  }

//VARIABLE DE PÁGINA: 

  $_SESSION['CrearCarrera'] = "crearCarrera";
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

 

  
  <link rel="stylesheet" href="../css/styleAddCarrera.css">
  <link rel="stylesheet" href="../css/MenuSuper.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Document</title>
</head>

<body>
<?php
error_reporting(0);

?>
  <header>
    <br>
    <div class="kontainer">

      <div>

        <div id="plataforma" >
          <h2>Plataforma</h2>
          <p>Entraste como <br> super</p>
        </div>

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

      <nav class="navbar navbar-expand-lg  navbar-light bg-light">

        <div class="container-fluid ">
          
          <div class="imgHome">
            <a aria-current="page" href="SuperAdmin.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40"></a>

          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item menuli">
                <a href="Super_AltaAdmin.php">Alta de Administrador</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_administrarAlumnos.php">Alumnos</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_CrearCarrera.php">Crear Carrera</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_administrar_Carrera.php">Administrar Carrera</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_AdministrarVistaCarrera.php">Vista Carreras</a>
              </li>

              <li class="nav-item menuli">
                <a href="Super_Configuraciones.php">Configuraciones</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
<br><br>
  </header>


  <main>
  <section>
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 d-flex justify-content-center">


            <form id="bodyprincipal" action="Super_CrearCarrera.php" method="post" enctype='multipart/form-data'>

              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-4">
                    <div class="primerColumna">
                      <div class="mb-3 campoCarrera">
                        <label>CARRERA</label>

                        <input id="carrera" name="nombre" type="text" class="form-control"
                          style="background-color: #4a8d9ec5;" maxlength="50" required>

                      </div>
                      <div class="mb-3 campoCarrera">
                        <label>DURACION</label>
                        <select id="duracion" name="duracion" class="form-select "
                          style="background-color: #4a8d9ec5;" aria-label=".form-select-lg example" required>
                          <option></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>

                    </div>
                    <div class="mb-3 campoCarrera">
                      <label>NUM RESOLUCION</label>
                      <input id="nResolucion" name="resolucion" type="text" maxlength="8" class="form-control"
                        style="background-color: #4a8d9ec5;" required>

                    </div>
                    <div class="mb-3 campoCarrera">
                      <label>CODIGO DE CARRERA</label>
                      <input id="codigoC" name="codigo" type="number" min="1" max="99999999" class="form-control"
                        style="background-color: #4a8d9ec5;" required>

                    </div>

                  </div>
                  <div class="col-12 col-md-4">
                    <div class="mb-3 campoCarrera">
                      <label>AÑO DE CADUCIDAD</label>
                      <input id="caducidad" name="caducidad" type="date" class="form-control"
                        style="background-color: #4a8d9ec5;" required>
                    </div>
                    <div class="mb-3 campoCarrera">
                      <label>AÑO DE RESOLUCION</label>
                      <input id="aResol" name="anioResolucion" type="date" class="form-control"
                        style="background-color: #4a8d9ec5;" required>
                    </div>
                    <div class="mb-3 campoCarrera">
                      <label>FECHA DE ALTA DE SISTEMA</label>
                      <input id="fechaAlta" name="alta" type="date" class="form-control"
                        style="background-color: #4a8d9ec5;" required>

                    </div>
                    
                    
                    <!-- trabajo con files ------------------------------------------------->
                    
                    <div class="mb-3 campoCarrera">
                      <label>PLAN DE ESTUDIOS</label>
                      <input class="form-control" style="background-color: #4a8d9ec5;" type="file" id="formFileMultiple"
                        multiple    name='f' required>
                    </div>
                    
                    
                    <!---------------------------------------------------------------------->
                    

                  </div>
                  <div class="col-12 col-md-4">
                    <div class="mb-3 campoCarrera ">
                      <div class="secMateria d-flex  flex-column  align-items-center">
                        <label>MATERIAS</label>
                        <div class="campoM d-flex flex-column">
                          <input id="materias" name="materias" type="text" maxlength="50" class="form-control"
                            style="background-color: #4a8d9ec5;" required>
                        </div>
                        <div>
                          <select id="selectAñoM" name="selectAñoM" class="form-select "
                            aria-label=".form-select-lg example" style="background-color: #4a8d9ec5;" required>
                            <option selected>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                          </select>
                        </div>
                        <button id="btnAgregar" type="button" class="btn btn-secondary">Agregar</button>
                      </div>

                    </div>
                    <div class="mb-3 campoCarrera">
                      <label>COMENTARIOS</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="200"
                        style="background-color: #4a8d9ec5;"  name="comentarios"></textarea required>

                    </div>



                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button id="btnCarrera" type="submit" name="enviar" class="btn btn-secondary">CREAR CARRERA</button>
                </div>


              </div>
            </div>

          </form>


        </div>
        <div class="col">
          <section id="previsializar">
            <p class="prevP">Previsualizacion de la carrera</p>
            <div id="tablaPrev" class="table table-responsive">
              <table class="table table-sm ">
                <thead>
                  <tr>


                    <th>NOMBRE</th>
                     <?php  $_POST["nombre"]; ?>
                    <th>DURACION</th>
                      <?php  $_POST["duracion"]; ?>
                    <th>RESOLUCION</th>
                      <?php  $_POST["resolucion"]; ?>
                    <th>CODIGO</th>
                      <?php  $_POST["codigo"]; ?>
                    <th>CADUCIDAD</th>
                      <?php  $_POST["caducidad"]; ?>
                    <th>AÑO RESOL.</th>
                      <?php  $_POST["anioResolucion"]; ?>                    
                    <th>FECHA ALTA</th>
                    <?php  $_POST["alta"]; ?> 
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="viewCarrera"></td>
                    <td class="viewDuracion"></td>
                    <td class="viewnResolucion"></td>
                    <td class="viewCodigo"></td>
                    <td class="viewCaducidad"></td>></td>
                    <td class="viewaResol"></td>
                    <td class="viewfechaAlta"></td>
                  </tr>
                </tbody>
              </table>
              <div class="contMaterias">
                <div id="materias1" class="materias">
                  <h6>1ER AÑO MATERIAS </h6>
                </div>
                <div id="materias2" class="materias">
                  <h6>2ER AÑO MATERIAS </h6>
                </div>
                <div id="materias3" class="materias">
                  <h6>3ER AÑO MATERIAS </h6>
                </div>
              </div>



            </div>
          </section>

        </div>

      </div>
      </div>



    </section>



  </main>


<!-- //------PHP------------------------------------------------------------------ -->


  <?php if ( isset($_POST["enviar"])){
  
  
    
    $name = $_FILES['f']['name'];
    
    $tmp_name =$_FILES['f']['tmp_name'];
    
    $ruta = 'Archivos/'. $name;
    
    move_uploaded_file($tmp_name, $ruta);
   
    
   
  
  require_once("../Controlador/C_crearCarrera.php");
  
  
  
  
  }?> 

<!-- //--------------------------------------------------------------------------- -->



</body>

</html>
