<?php
require('../../conexion.php');
include('../../FuncionesPHP/funciones.php');
$datosE = array();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear producto</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../../icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
              <li><a class="dropdown-item" href="./paginas/Inicio_sesion/login.php"><img src="../../imagenes/iconos/person-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Iniciar sesion</a></li>
              <li><a class="dropdown-item" href="#"><img src="../../imagenes/iconos/person-plus-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Registrarse</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#"><img src="../../imagenes/iconos/box-arrow-right.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Salir</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><img src="../../imagenes/iconos/cart4.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Carrito</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="wrapper_1">
    <div class="wrapper_1_1">
      <p class="mb-1" style="font-size: 30px;">Crea un nuevo producto</p><br>
      <form method="POST" enctype="multipart/form-data">
      <table cellpadding="5px">

<tr>
  <td colspan="4">
    <div class="form-floating">
      <input type="text" name="prod_nom" class="form-control" id="floatingInput" placeholder="Nombre">
      <label for="floatingInput">Nombre del producto</label>
    </div>
  </td>

</tr>

<tr>
  <td>
    <div class="form-floating">
      <select name="prod_cat" class="form-control" id="floatingInput">
        <option value="Componentes">Componentes</option>
        <option value="Productos">Productos</option>
        <option value="Software">Software</option>
      </select>
      <label for="floatingInput">Categoria</label>
    </div>
  </td>
  <td>
    <div class="form-floating">
      <select name="prod_subcat" class="form-control" id="floatingInput">
        <option value="Memorias">Memorias</option>
        <option value="Almacenamiento">Almacenamiento</option>
        <option value="Tarjeta de video">Tarjeta de video</option>
        <option value="Placas base">Placas base</option>
        <option value="Procesadores">Procesadores</option>
      </select>
      <label for="floatingInput">Sub Categoria</label>
    </div>
  </td>
  <td>
    <div class="form-floating">
      <input type="number" name="prod_cost" class="form-control" id="floatingInput" placeholder="Nombre">
      <label for="floatingInput">Costo</label>
    </div>
  </td>
  <td>
    <div class="form-floating">
      <input type="number" name="prod_stock" class="form-control" id="floatingInput" placeholder="Nombre">
      <label for="floatingInput">Stock</label>
    </div>
  </td>
</tr>
<tr>
  <td colspan="4">
    <div class="form-floating">
      <input type="text" name="prod_det" class="form-control" id="floatingInput" placeholder="Nombre">
      <label for="floatingInput">Detalle</label>
    </div>
  </td>
</tr>
<tr>
  <td colspan="3" style="height: 120%;">
    <div class="mb-3">
      <label for="formFile" class="form-label"> Carga una imagen del producto</label>
      <input class="form-control" type="file" id="formFile" name="foto" accept = 'image/*'>
    </div>
  </td>
  <td rowspan="1">
    <input style="height: 60px;" class="btn btn-primary btn-lg w-100" type="submit" name="crear"></td>
</tr>
</table>
      </form>
    </div>
  </div>
<?php
  if(isset($_POST['crear'])){
    if(strlen($_POST['prod_nom'])>0 && strlen($_POST['prod_cat'])>0&& strlen($_POST['prod_subcat'])>0
        && strlen($_POST['prod_stock'])>0  && strlen($_POST['prod_cost'])>0&& strlen($_POST['prod_det'])>0){
          $datosC = array();
          $datosC[0] = addslashes(trim($_POST['prod_nom']));
          $datosC[1] = $_POST['prod_cat'];
          $datosC[2] = $_POST['prod_subcat'];
          $datosC[3] = addslashes(trim($_POST['prod_cost']));
          $datosC[4] = addslashes(trim($_POST['prod_stock']));
          $datosC[5] = addslashes(trim($_POST['prod_det']));
            if(!empty($_FILES['foto']['name'])){
              $foto = $_FILES['foto']['name'];
              $datosC[6] = "../../imagenes/productos/".$foto;
                  if(move_uploaded_file($_FILES['foto']['tmp_name'],$datosC[6])){
                  $consultaF = "INSERT INTO productos VALUES ('DEFAULT','$datosC[0]','$datosC[1]',".
                          "'$datosC[2]','$datosC[3]','$datosC[4]','$datosC[5]','$foto','$datosC[6]');";
                  $query = $conexion->query($consultaF);
                  if($query){
                      resetValues($datosC);
                      $consultaRes = "SELECT * FROM productos;";
                      $query = $conexion->query($consultaRes);
                      while($dato = $query->fetch_assoc()){
                        $datosE['id'] = $dato['id_producto'];
                        $datosE['producto'] = $dato['nombre'];
                        $datosE['categoria'] = $dato['categoria'];
                        $datosE['sub_cat'] = $dato['sub_categoria'];
                        $datosE['costo'] = $dato['costo'];
                        $datosE['detalle'] = $dato['detalle'];
                        $datosE['ruta'] = $dato['ruta'];
                        $datosE['stock'] = $dato['stock'];
                      }
              }else 
                  echo "<script>".
                  "alert(\"Producto no se pudo crear, contacte con su administrador\")"."</script>";
            }else
                echo "<script>".
                "alert(\"Archivo no encontrado\")"."</script>";
          }else{
              echo "<script>".
                  "window.alert(\"Los datos no pueden estar vacios\");".
              "</script>";
          }
    ?>
  <div class="wrapper_2">
    <div class="wrapper_2_1">
    <img src=<?="../../imagenes/productos/".$datosE['ruta']?> alt="producto">
      <div>
        <h1><?=$datosE['categoria']?></h1>
        <p><?=$datosE['sub_cat']?></p>
        <p><?=$datosE['stock']?> disponibles</p>
        <div class="mb-3">
          <form method="POST">
          <input class="form-control form-control-sm w-25" type="number" min="0" name="stock_up" placeholder="Stock" aria-label=".form-control-sm example">
          <button type="submit" class="mt-2 btn btn-primary btn-sm" name="update_stock">Cambiar stock</button>
          </form>
          <?php
            if(isset($_POST['update_stock'])){
              $_update_stock = $_POST['stock_up'];
              $id = $datosE['id'];
              $consulta = "UPDATE productos SET stock=\'$_update_stock\' WHERE id_producto = $id";
              $query = $conexion->query($consulta);
              if($query){
                echo "<script>".
                "alert(\"Stock de producto modificado\")".
                "</script>";
              }else{
                echo "<script>".
                "alert(\"Stock de no se pudo modificar, contacte con el administrador del sitio\")".
                "</script>";
              }
            }echo "error";
            ?>          
        </div>
        <h2><?=$datosE['costo']?> $</h2>
        <p><?=$datosE['detalle']?></p><!--Tarjeta de video 1030 Gigabite - PCIe x16</p>-->
      </div>
    </div>

  </div>
  <?php 
            }else{
              /*echo "<script>".
              "window.alert(\"Los datos no pueden estar vacios\");".
              "window.location(\"prod_admin.php\");</script>";*/
            }
          }
    ?>
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
