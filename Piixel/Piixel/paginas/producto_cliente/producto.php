<?php
session_start();

// Inicializa el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Verifica si se hizo clic en "Agregar al carrito"
if (isset($_POST['agregar_al_carrito'])) {
    // Obtiene el ID del producto que se está agregando al carrito
    $producto_id = $_POST['producto_id'];

    // Agrega el producto al carrito
    $_SESSION['carrito'][] = $producto_id;

    // Redirige a la página de productos
    header("Location: productos.php");
    exit();
}
?>







<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/login-estilo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Producto</title>
</head>
<body> 
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                <h2 class="text-gray-800">Información del artículo</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12 text-center">
                        <img class="img-flex" src="../../imagenes/productos/pc3.jpeg" style="width: 80%">
                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12 text-left">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-12">
                <div class="row mt-3 mb-3">
                    <div class="col-lg-7 col-md-6 col-xs-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">

                                <!-- Actualizar para obtener nombre del producto mediante GET para poder compartir la url -->
                                <h4 class="fw-bold mb-3">TORRE GAMER INTEL I7 11700</h4>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- opcional -->
                                <span class="badge bg-success">intel</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-xs-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- Actualizar para obtener el precio mediante post -->
                                <h2 class="text-primary fw-bold">$1.740.000*</h2>
                                <p class="fs-6 text-gray-700 mb-0">*El precio incluye IVA, no incluye gastos de envío.
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-4 mt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                        <div class="card shadow bg-white p-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                            <h5 class="text-success ">¡Con stock!</h5>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                                    <!-- Formulario para agregar al carrito -->
                                                    <form method="post" action="../carrito/carrito.php">
                                                        <input type="hidden" name="producto_id" value="1"> <!-- Reemplaza "1" con el ID del producto actual -->
                                                        <span>
                                                            <h5 class="mr-0 ml-0 pt-1">Selecciona la cantidad: </h5>
                                                            <input type="range" name="price" id="price" min="1" max="3" step="1" value="1" style="width:40%;margin-top:1.5rem" onchange="document.getElementById('salida').value=value">
                                                            <output class="price-output" for="price" name="salida" id="salida">1</output>
                                                            <button type="submit" name="agregar_al_carrito" class="btn btn-primary p-3 float-end" style="margin:0.3rem">¡Comprar ahora!</button>
                                                            <a class="btn btn-secondary p-3 float-end" href="../../index.php" style="margin:0.3rem">Regresar</a>
                                                        </span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12 text-center">
                        <img class="img-flex" src="../../imagenes/productos/pc1.jpeg" style="width: 80%">
                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12 text-left">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-12">
                <div class="row mt-3 mb-3">
                    <div class="col-lg-7 col-md-6 col-xs-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- Actualizar para obtener nombre del producto mediante GET para poder compartir la url -->
                                <h4 class="fw-bold mb-3">TORRE GAMER RYZEN 5 4600G</h4>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- opcional -->
                                <span class="badge bg-success">nvidia</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-xs-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- Actualizar para obtener el precio mediante post -->
                                <h2 class="text-primary fw-bold">$6.300.000*</h2>
                                <p class="fs-6 text-gray-700 mb-0">*El precio incluye IVA, no incluye gastos de envío.
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-4 mt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                        <div class="card shadow bg-white p-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                            <h5 class="text-success ">¡Con stock!</h5>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                                    <!-- Formulario para agregar al carrito -->
                                                    <form method="post" action="productos.php">
                                                        <input type="hidden" name="producto_id" value="1"> <!-- Reemplaza "1" con el ID del producto actual -->
                                                        <span>
                                                            <h5 class="mr-0 ml-0 pt-1">Selecciona la cantidad: </h5>
                                                            <input type="range" name="price" id="price" min="1" max="3" step="1" value="1" style="width:40%;margin-top:1.5rem" onchange="document.getElementById('salida').value=value">
                                                            <output class="price-output" for="price" name="salida" id="salida">1</output>
                                                            <button type="submit" name="agregar_al_carrito" class="btn btn-primary p-3 float-end" style="margin:0.3rem">¡Comprar ahora!</button>
                                                            <a class="btn btn-secondary p-3 float-end" href="../../index.php" style="margin:0.3rem">Regresar</a>
                                                        </span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12 text-center">
                        <img class="img-flex" src="../../imagenes/productos/pc2.jpeg" style="width: 80%">
                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12 text-left">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-12">
                <div class="row mt-3 mb-3">
                    <div class="col-lg-7 col-md-6 col-xs-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- Actualizar para obtener nombre del producto mediante GET para poder compartir la url -->
                                <h4 class="fw-bold mb-3">TORRE GAMER RYZEN 7 5700G</h4>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- opcional -->
                                <span class="badge bg-success">nvidia</span>
                                <span class="badge bg-success">Asus</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-xs-6 col-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                <!-- Actualizar para obtener el precio mediante post -->
                                <h2 class="text-primary fw-bold">$3.300.000*</h2>
                                <p class="fs-6 text-gray-700 mb-0">*El precio incluye IVA, no incluye gastos de envío.
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mb-4 mt-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                        <div class="card shadow bg-white p-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                            <h5 class="text-success ">¡Con stock!</h5>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12 col-xs-12 col-12">
                                                    <!-- Formulario para agregar al carrito -->
                                                    <form method="post" action="productos.php">
                                                        <input type="hidden" name="producto_id" value="1"> <!-- Reemplaza "1" con el ID del producto actual -->
                                                        <span>
                                                            <h5 class="mr-0 ml-0 pt-1">Selecciona la cantidad: </h5>
                                                            <input type="range" name="price" id="price" min="1" max="3" step="1" value="1" style="width:40%;margin-top:1.5rem" onchange="document.getElementById('salida').value=value">
                                                            <output class="price-output" for="price" name="salida" id="salida">1</output>
                                                            <button type="submit" name="agregar_al_carrito" class="btn btn-primary p-3 float-end" style="margin:0.3rem">¡Comprar ahora!</button>
                                                            <a class="btn btn-secondary p-3 float-end" href="../../index.php" style="margin:0.3rem">Regresar</a>
                                                        </span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</body>
</html>
