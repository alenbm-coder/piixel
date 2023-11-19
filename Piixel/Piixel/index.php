<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piixel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="icon.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
  <!-- Barra de navegacion -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-100">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        PIIXEL
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex mx-auto" style="width:50%;">
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
              <li><a class="dropdown-item" href="./paginas/registro_cliente/reg_cliente.php"><img src="./imagenes/iconos/person-plus-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Registrarse</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#"><img src="./imagenes/iconos/box-arrow-right.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Salir</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <!-- Carrusel -->
  <header class="animate__animated animate__backInLeft">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./imagenes/carrusel/img4.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="./imagenes/carrusel/img5.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./imagenes/carrusel/img6.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>

  <!-- Categorias -->
  <main>
    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Categorias</h2>

        <div class = "animate__animated animate__fadeIn">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <div style="text-align:center; text-decoration: none;">
          <a class="link" href="paginas/producto_cliente/prod_cliente.php" class="icon-link">           
              <img class="img-fluid" style="width: 20%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 20px;" src="./imagenes/iconos/cpu-fill.svg" alt="PC">
            <h2 >Componentes</h2><br>
            <p>Armar o renovar tu viejo pc con componentes de calidad es necesario para obtener el máximo rendimiento, en Piixel encuentras de forma fácil en gran catálogo el componente o partes de pc al mejor precio.</p>
          </a>
        </div>
        
        
        <div style="text-align:center;">
          <a class="link" href="paginas/producto_cliente/producto.php" class="icon-link">
            <img class="img-fluid" style="width: 20%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 20px;" src="./imagenes/iconos/phone-fill.svg" alt="PC">          
            <h2>Productos</h2><br>
            <p>Piixel es la tienda de Computadores Portátiles, 2 en 1 y PC Corporativo, PC para juegos y soluciones en pc empresariales. En nuestra tienda Online puedes comprar tu PC corporativo, a precios increíbles</p>
          </a>
        </div>
        
        
        
        <div class="feature col" style="text-align:center;">          
          <a class="link" href="paginas/producto_cliente/software.php" class="icon-link">
            <img class="img-fluid" style="width: 20%; display: block; margin-left: auto; margin-right: auto; margin-bottom: 20px;" src="./imagenes/iconos/bug-fill.svg" alt="PC">          
            <h2>Software</h2><br>
            <p>Usa siempre Software original, en Piixel encuentras claves OEM a muy bajos cosastos para tu Windows paquete de offoce o videojuegos, encuentralas de forma segura y 100% confiable</p>
          </a>
        </div>
              
              
            </div>
        </div>
    </div>

    <div>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 style="font-family:verdana;">Graficos Productos Vendidos</h1>
          <div class="row mt-4">
            <div class="col-md-12">

              <canvas id="graficoPie"></canvas> 
              
            </div>
            </div>               

        </div>

        
      </section>


    <footer class="text-muted">
    </footer>

    <script crossorigin="anonymous" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Chart JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/datos.js"></script>

    </div>



  <!-- Pie de pagina -->

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="https://getbootstrap.com" target="_blank" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <img class="bi" width="30" height="24" src="./imagenes/iconos/bootstrap-fill.svg" alt="bootstrap">
        </a>
        <span class="text-muted">©Piixel 2021 Company, Inc</span>
      </div>
      <div class="container-fluid" style="display:flex; justify-content:flex-end; ">
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href=""><img class="bi" width="30" height="24" src="./imagenes/iconos/instagram.svg" alt="instagram"></a></li>
          <li class="ms-3"><a class="text-muted" href=""><img class="bi" width="30" height="24" src="./imagenes/iconos/facebook.svg" alt="facebook"></a></li>
          <li class="ms-3"><a class="text-muted" href=""><img class="bi" width="30" height="24" src="./imagenes/iconos/whatsapp.svg" alt="whatsapp"></a></li>
        </ul>
      </div>
    </footer>
  </div>
</body>

</html>