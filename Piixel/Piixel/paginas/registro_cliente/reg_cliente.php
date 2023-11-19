<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de cliente</title>
  <link rel="stylesheet" href="signin.css">
  <link rel="icon" href="../../icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<div class = "animate__animated animate__fadeIn">
  <div class="wrapper_1">
    <main class="form-signin">

      <form method="post" action = "insertar.php">
        <table cellpadding="10px">

          <img class="mb-2" src="../../favicon.png" alt="" width="100" height="100">
          <h1 class="h3 mb-2 fw-normal">Crea una cuenta en Piixel</h1>
          <tr>
            <td colspan="2"> 
              <div class="form-floating">
                <input type="text" name="reg_nom" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Nombre</label>
              </div>
            </td>
            </tr>
            <tr>
            <td colspan="2">
              <div class="form-floating">
                <input type="text" name="reg_apll" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Apellidos</label>
              </div>
            </td>
          </tr>

          <tr>
            <td colspan="2">
            <div class="form-floating">
                <input type="text" name="reg_corr" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Correo</label>
              </div>
            </td>
          </tr>
          

          <tr>
              <td colspan="2">
              <div class="form-floating">
                <input type="number" name="reg_tel" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Telefono</label>
              </div> 
              </td>
          </tr>

          <tr>
              <td colspan="2">
              <div class="form-floating">
                <input type="text" name="reg_dir" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Direccion</label>
              </div> 
              </td>
          </tr>

          <tr>
              <td colspan="2">
              <div class="form-floating">
                <input type="text" name="reg_cuid" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Ciudad</label>
              </div> 
              </td>
          </tr>

          <tr>
          </td>
            <td>
            <div class="form-floating">
            <select name="reg_tdoc" class="form-control" id="floatingInput">
              <option value="" selected disabled hidden></option>
              <option value="">Cédula Ciudadania</option>
              <option value="">Tarjeta de Identidad</option>
              <option value="">Cédula Extranjera</option>
            </select>
            <label for="floatingInput">Tipo de documento</label>
          </div>
            </td>
            <td>
              <div class="form-floating">
                <input type="number" name="reg_doc" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Documento</label>
              </div>
            
          </tr>

          <tr>
            <td>
              <div class="form-floating">
                <input type="password" name="reg_pass" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
              </div>
            </td>
            <td>
              <div class="form-floating">
                <input type="password" name="reg_pass_conf" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Confirmación</label>
              </div>
            </td>
          </tr>
        </table>

       
        <button class="mb-2 w-70 btn btn-lg btn-primary" type="submit" >Registrar</button><br>
        <a href="../Inicio_sesion/login.php">Iniciar sesión</a>
        <a href="../../index.php"> Salir</a>
      </form>
      <p class="mt-3 mb-0 text-muted">Piixel© 2023</p>
    </main>
  </div>
  </div>
</body>

</html>






