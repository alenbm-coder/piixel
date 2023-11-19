<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link rel="icon" href="../../icon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../producto_cliente/style.css">
</head>

<body>

  <!-- Barra de navegacion -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">
      <img src="../../icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        PIIXEL
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex mx-auto" style="width:50%;">
          <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar...">
          <button class="btn btn-dark " type="submit"><img src="../../imagenes/iconos/search.svg" alt="busqueda"></button>
        </form>

        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../../imagenes/iconos/people.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Cuenta
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../../index.php"><img src="../../imagenes/iconos/box-arrow-right.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Salir</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>


 
 
  <div class="categorias">
    
    <div class="card">
      <div class="card-header">
      Pin Microsoft Office 365
      </div>
      <div class="card-body">
        <p>Familia para 6 Usuarios / 15 Meses</p>
        <img src="../../imagenes/categorias/pin1.jpeg" class="img-fluid" alt="Categorias">
        <h5>130.000$</h5>
        <a href="../carrito/carrito.php" class="btn btn-outline-dark">
          <p class="textico" id ="agregar_al_carrito">Añadir al carrito</p>
        </a>
      </div>
    </div>
    

    <div class="card">
      <div class="card-header">
      Pin Microsoft Office
      </div>
      <div class="card-body">
        <p>Personal Para 1 Usuario / 12 Meses</p>
        <img src="../../imagenes/categorias/pin2.jpeg" class="img-fluid" alt="Categorias">
        <h5>145.000$</h5>
        <a href="../carrito/carrito.php" class="btn btn-outline-dark">
          <p class="textico"id="agregar_al_carrito">Añadir al carrito</p>
        </a>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
      Antivirus McAfee Total
      </div>
      <div class="card-body" >
        <p>Protection 10 Dispositivos</p>
        <img src="../../imagenes/categorias/pin3.jpeg" class="img-fluid" alt="Categorias">
        <h5>120.000$</h5>
        <a href="post" class="btn btn-outline-dark">
          <p class="textico">Añadir al carrito</p>
        </a>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
      PIN Antivirus
      </div>
      <div class="card-body">
        <p>Norton 360 Deluxe 5D</p>
        <img src="../../imagenes/categorias/pin4.jpeg" class="img-fluid" alt="Categorias">
        <h5>100.000$</h5>
        <a href="../carrito/carrito.php" class="btn btn-outline-dark">
          <p class="textico">Añadir al carrito</p>
        </a>
      </div>
    </div>

  </div>
  








  
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="https://getbootstrap.com" target="_blank" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <img class="bi" width="30" height="24" src="../../imagenes/iconos/bootstrap-fill.svg" alt="bootstrap">
        </a>
        <span class="text-muted">©Piixel 2021 Company, Inc</span>
      </div>
      <div class="container-fluid" style="display:flex; justify-content:flex-end; ">
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href=""><img class="bi" width="30" height="24" src="../../imagenes/iconos/instagram.svg" alt="instagram"></a></li>
          <li class="ms-3"><a class="text-muted" href=""><img class="bi" width="30" height="24" src="../../imagenes/iconos/facebook.svg" alt="facebook"></a></li>
          <li class="ms-3"><a class="text-muted" href=""><img class="bi" width="30" height="24" src="../../imagenes/iconos/whatsapp.svg" alt="whatsapp"></a></li>
        </ul>
      </div>
    </footer>
  </div>
</body>

</html>