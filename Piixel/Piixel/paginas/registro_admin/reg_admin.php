<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de administrador</title>
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
      <form method="POST">
        <table cellpadding="10px">

          <img class="mb-2" src="../../favicon.png" alt="" width="100" height="100">
          <h1 class="h3 mb-2 fw-normal">Crea una cuenta de administrador</h1>
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
                  <input type="email" name="reg_mail" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                  <label for="floatingInput">Correo Electronico</label>
                </div>
              </td>
          </tr>
          <tr>
            <td>
              <div class="form-floating">
                <input type="number" name="reg_doc" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.com">
                <label for="floatingInput">Documento</label>
              </div>
            </td>
            <td>
              <div class="form-floating">
                <select name="reg_tdoc" class="form-control" id="floatingInput">
                  <option value="Cédula Ciudadania">Cédula Ciudadania</option>
                  <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                  <option value="Cédula Extranjera">Cédula Extranjera</option>
                </select>
                <label for="floatingInput">Tipo de documento</label>
              </div>
            </td>
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
        <button class="mb-2 w-70 btn btn-lg btn-primary" type="submit" name="enviar">Registrar</button><br>
        <a href="../Inicio_sesion/login.php">Iniciar sesión</a>
        <a href="../../index.php"> Salir</a>
      </form>
      <p class="mt-3 mb-0 text-muted">Piixel© 2021</p>
    </main>
  </div>
  </div>
</body>

</html>
<?php   
        include('../../conexion.php');
        include('../../FuncionesPHP/funciones.php');
                if(isset($_POST['enviar'])){//verifico si el boton tipo submit ha sido clickeado
                    if(strlen($_POST['reg_nom'])>=1 && strlen($_POST['reg_apll'])>=1
                    && strlen($_POST['reg_doc'])>=1 && strlen($_POST['reg_tdoc'])>=1//verifico si los datos enviados estan llenos
                            && strlen($_POST['reg_pass'])>=1&& strlen($_POST['reg_mail'])>=1
                            && strlen($_POST['reg_pass_conf'])>=1){
                              switch(valPass($_POST['reg_pass'])){//valido la contraseña en la funcion valPass en funciones.php
                                case "non_alnum":
                                    echo "<script>".
                                    "alert(\"La contraseña debe contener caracteres alfanumericos\")</script>";
                                    break;
                                case "tipo_nulo":
                                    echo "<script>".
                                    "alert(\"Error de tipo, la contraseña debe ser contener".
                                        "caracteres alfanumericos\")</script>";
                                    break;
                                case "conteo_de_digitos_bajo":
                                    echo "<script>".
                                    "alert(\"contraseña no segura, debe contener al menos 3 numeros,".
                                        " 3 letras mayusculas y 3 letras minusculas\")</script>";
                                    break;
                                case "contraseña_segura":
                                  if($_POST['reg_pass']==$_POST['reg_pass_conf']){
                                    $nombre = addslashes(trim($_POST['reg_nom']));
                                    $apellido = addslashes(trim($_POST['reg_apll']));
                                    $email = addslashes(trim($_POST['reg_mail']));
                                    $contrasena = addslashes(trim(($_POST['reg_pass'])));
                                    $tipoDocumento = addslashes(trim($_POST['reg_tdoc']));
                                    $documento = addslashes(trim($_POST['reg_doc']));
                                    if(!Validar('email',$email,$conexion)){
                                            $consulta = "INSERT INTO administrador VALUES  "
                                            . "(DEFAULT,'$nombre','$apellido','$email','$documento','$contrasena','$tipoDocumento')";
                                            $Registro_d = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
                                            if($Registro_d){
                                                echo "<script>".
                                                "window.location=\"../Inicio_sesion/login.php\";"."</script>";
                                                mysqli_close($conexion);
                                            }else
                                            echo "<script>"
                                            ."window.alert(\"Error al almacenar los datos, por favor comuniquese con los administradores\")"
                                                    . "</script>";
                                    }else{
                                        echo "<script>"
                                        ."window.alert(\"Ya se encuentra registrada una cuenta con ese correo\")"
                                                . "</script>";
                                    }
                            }else{
                                  echo "<script>".
                                  "alert(\"Las contraseñas no coinciden\")".
                                  "</script>";
                            }
                                    break;
                                case "unknow_error":
                                    echo "<script>".
                                    "alert(\"Error desconocido tipo 1, contacte con el ".
                                        "administrador del sistema para mas informacion\")</script>";
                                    break;
                                default:
                                echo "<script>".
                                "alert(\"Error desconocido tipo 2, contacte con el ".
                                    "administrador del sistema para mas informacion\")</script>";
                                    break;
                            }
                        }echo "<script>".
                        "alert(\"Los datos no pueden estar vacios\")</script>";
                }
    ?>





            