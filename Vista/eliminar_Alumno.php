<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eliminar_Alumno.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Eliminar Alumno</title>
</head>
<body>
  <header>
      <div id="titulo">
        <h1 style= "color: #f38618;">Eliminar Usuario</h1>
    </div>
  </header>

  <form action="eliminarUsuario.php" method="post">
  
    <div class="principal">
  
      <div class="block1">
  
        <div class="etiquetas">
  
          <p><label for="dni">DNI/Pasaporte</label><br></p>
  
        </div>
  
        <div class="campos2">
  
          <select id="corto" name="DNIPassT">
            <option value="D">DNI</option>
            <option value="P">Pasaporte</option>
          </select>

        </div>

        <div class="campos2">

        <input type="text" name="dniP" placeholder="xxxxxxxxx" pattern="[0-9]{1,8}">
          <i class="formulario__validacion-estado fas fa-times-circle"></i>

        </div>

      </div>
  
  
  
      <div class="boton">
        <button type="submit" id=button type="button" name="enviar"
          style="background-color: #000000; text-align: center ;color: #ffffff">Eliminar USUARIO</button>
      </div>
  
  
      <div class="Texto"></div>
  
      <div>
  
        <button type="submit" id=button1 type="button" name="enviar"
          style="background-color: #000000; text-align: center ;color: #ffffff">CONFIRMAR</button>
  
        <button type="submit" id=button1 type="button" name="enviar"
          style="background-color: #000000; text-align: center ;color: #ffffff">CANCELAR</button>
  
      </div>
  
  
  
    </div>
  
  </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>