<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piixel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Barra de navegacion -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="favicon.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      PIIXEL
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex mx-auto" style="width:50%;" >
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar...">
        <button class="btn btn-dark " type="submit"><img src="./imagenes/iconos/search.svg" alt="busqueda"></button>
      </form>

      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="./imagenes/iconos/people.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">  
          Cuenta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./paginas/Inicio_sesion/login.php"><img src="./imagenes/iconos/person-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Iniciar sesion</a></li>
            <li><a class="dropdown-item" href="#"><img src="./imagenes/iconos/person-plus-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Registrarse</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><img src="./imagenes/iconos/box-arrow-right.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Salir</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="./imagenes/iconos/currency-dollar.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Comprar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="./imagenes/iconos/cart4.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Carrito</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
</body>
</html>