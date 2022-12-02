<?php 

  session_start();

  $nombre = $_SESSION['usuario'] ;
  $psswrd = $_SESSION['Psswrd'] ;
  $rol = $_SESSION['Rol'];

  echo "Tu rol es : " . $rol ;

  if($nombre == null || $psswrd == null|| $rol != 'Preceptor'){

    die(); 

  }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal - Preceptor</title>


    <link rel="stylesheet" href="../css//administradorPreceptor.css">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
    <header>  
        <div id="cerrarS">
            <button id="btnCerrarS" type="button" class="btn btn-secondary"> <a href="../Controlador/Cerrar_session.php">CERRAR SESION</a></button>
        </div>

        <div class="container-fluid">
            
            <div class="row d-flex flex-row">
              
                <div class="col-12 col-md-2 inferior">
              
                    <div id="plataforma" class="d-flex flex-column ">
                        <h2>Plataforma</h2>
                        <p >Entraste como</p>
                        <p id="preceptor">Preceptor</p>
                    </div>
    
                </div>

                <div class="col superior d-flex justify-content-center align-content-center  "> 
                  
                    <div id="titulo">
                        <h1>Nombre del Instituto</h1>
                    </div>
    
                </div>
          
            </div>
        </div> 
    
        <div>
            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        
                            <div class="container-fluid ">
                    
                                <div class="imgHome">
                                    <a  aria-current="page" href="Preceptor_admin.php"><img src="../img/home3.png" alt="Inicio" width="40" height="40" ></a>
                                </div>

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      
                                        <li class="nav-item menuli">
                                        <a href="Preceptor_administraralumnos.php">ALUMNOS</a>
                                        </li>
                                        <li class="nav-item menuli">
                                        <a href="Preceptor_administrarCarrera.php">ADMINISTRAR CARRERA</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>
        <section >
            <div class="container-fluid">
                
                <div class="row d-flex justify-content-center align-items-center">
                
                    <div class="col-12 d-flex justify-content-center">
                   
                        <form id="bodyprincipal">

                        </form>

                    </div>

                </div>

            </div>
     
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>