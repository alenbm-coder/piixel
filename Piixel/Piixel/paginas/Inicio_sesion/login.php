<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesion</title>
  <link rel="stylesheet" href="signin.css">
  <link rel="icon" href="../../icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="text-center">
  <main class="form-signin">
    <div class = "animate__animated animate__fadeIn">
      
      <form method ="post" action = "Validacion__login.php">
        <img class="mb-4" src="../../favicon.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 fw-normal">Inicia sesión</h1>

              <div class="form-floating">
                <input type="text" name="reg_corr" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Correo</label>
              </div>
              <div class="form-floating">
                <input type="password" name="reg_pass" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
              </div>
        <button class="mb-3 w-100 btn btn-lg btn-primary" type="submit">Iniciar sesion</button>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Recordarme
          </label>
        </div>
        <a href="../registro_cliente/reg_cliente.php"> Registrate</a> 
        <a href="../../index.php"> Salir</a> 
        <p class="mt-5 mb-3 text-muted">Piixel© 2023</p>
      </form>
       </div>
    </main>


</html>