<!doctype html>
<?php
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
  include_once('conexion.php');
  include_once('funciones.php');
  $campoobligado = 0;
  $errorendato = 0;
?>
<html class="no-js" lang="">
<head>
<?php include_once('head.php') ?>
</head>
<body>
<!-- preloader   -->
<div id="preloader" class="invisible">
<div id="status"><img src="img/loader-04.png" class="img-loading" width="125" height="125" alt="loading"></div>
</div>
<header>
<?php include_once("header.php") ?>
</header>

<?php include_once("iniciar-sesion.php") ?>

<!-- Registro -->
<section class="registro">
  <div class="container">
    <div class="row">
      <h3>Registro</h3>

<?php
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono     = $_POST['telefono'];
  $correo     = $_POST['correo'];
  $contrasena  = $_POST['contrasena'];
?>
<div class="col-md-offset-3 col-md-6 col-md-offset-3 center">
        <form action="" method="post" enctype="multipart/form-data" id="formulario">
        <!-- Input -->
        <?php  echo "
        <div class='form-group'>
          <label for='nombre'>Nombre</label>
          <input type='text' name='nombre' id='nombre' class='form-control' value='$nombre'>
        </div>";?>

        <?php
          // validar nombre
          if ( isset($nombre) and ($nombre != '') )
            {
              if ( validaAlfaEsp($nombre) )
              {

              }else {
                echo "<span class='help-block'>* El nombre no es válido</span>";
                $errorendato = 1;
              }
            }
            else
            {
              if ( isset($nombre) and ($nombre == '') ) {
              echo "<span class='help-block'>* Debe ingresar un nombre</span>";
              $campoobligado = 1;
              }
            };

        ?>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control">
        </div>
        <?php
          // validar apellido
          if ( isset($apellido) and ($apellido != '') )
            {
              if ( validaAlfaEsp($apellido) )
              {

              }else {
                echo "<span class='help-block'>* No se aceptan caracteres numericos</span>";
                $errorendato = 1;
              }
            }
            else
            {
              if ( isset($apellido) and ($apellido == '') ) {
              echo "<span class='help-block'>* Debe ingresar un apellido</span>";
              $campoobligado = 1;
              }
            };

        ?>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" name="telefono" minlength="11" id="telefono" class="form-control">
        </div>
        <?php
          // validar telefono
          if ( isset($telefono) and ($telefono != '') )
            {
              if ( validaEntero($telefono) )
              {

              }else {
                echo "<span class='help-block'>* No debe ingresar caracteres especiales</span>";
                $errorendato = 1;
              }
            }
            else
            {
              if ( isset($telefono) and ($telefono == '') ) {
              echo "<span class='help-block'>* Debe ingresar un telefono</span>";
              $campoobligado = 1;
              }
            };

        ?>
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="text" name="correo" id="correo" class="form-control">
        </div>
        <?php
            // validar correo.
            if ( isset($correo) and ($correo != '') )
            {
              if ( validarDirCorreoElec($correo) )
              {

              }else {
                echo "<span class='help-block'>* El correo no es válido</span>";
                $errorendato = 1;
              }
            }
            else
            {
              if ( isset($correo) and ($correo == '') ) {
              echo "<span class='help-block'>* Debe ingresar un correo eléctronico</span>";
              $campoobligado = 1;
              }
            };
            ?>
        <div class="form-group">
          <label for="contrasena">Contraseña</label>
          <input type="password" maxlength="8" name="contrasena" id="contrasena" class="form-control">
        </div>
        <?php
          // validar contraseña
          if ( isset($contrasena) and ($contrasena == '') ) {
            echo "<span class='help-block'>* Ingrese una contraseña</span>";
            $campoobligado = 1;
            }
          else {
          };

        ?>

        <!-- Boton de Envio -->
        <?php
          if ( isset ($_POST['btn']) )
          {
            if ( $campoobligado == 1 or $errorendato == 1 )
            {
              echo "<label><input type='submit' value='Enviar' class='btn btn-default' name='btn'/></label>";
            }
            else
            {
              // Buscar en la Base de Datos
                  $querybuscar = $mysqli->query("SELECT * FROM cliente where correo= '$correo'") or die ( "<br>No se puede ejecutar query para buscar datos ". $mysqli->error);
                  if (mysqli_num_rows($querybuscar) > 0 )
                  {
                    
                    $querybuscarC = $mysqli->query("SELECT * FROM cliente where correo='$correo' ") or die ( "<br>No se puede ejecutar query para buscar cedula ". $mysqli->error);
                    if (mysqli_num_rows($querybuscarC) > 0 )
                    {
                      echo "<span class='help-block'>* Este correo ya está registrado</span>";
                    }
                  }
                  else
                  {
                    // Insertar en la Base de Datos
                    $queryInsertar = $mysqli->query("INSERT INTO cliente (idCliente, Nombre, Apellido, Telefono, Correo, contrasena) values (
                    null, '$nombre', '$apellido', '$telefono', '$correo', '$contrasena')") or die ( "<br>No se puede ejecutar query para insertar datos ". $mysqli->error);                    
                    
                    if ($queryInsertar)
                    {
                      echo "<span class='help-block has-success'>Registro exitoso!</span>";

                      //Buscar el id del cliente
                      $querybuscar2 = $mysqli->query("SELECT idCliente FROM cliente where correo='$correo' ") or die ( "<br>No se puede ejecutar query para buscar datos 2 ". $mysqli->error);
                      while (($fila=mysqli_fetch_array($querybuscar2)))
                      {
                        $id= $fila['idCliente'];
                      //  echo "<br> el id es $id <br>";
                          
                          // Crea la carpeta que recibe los archivos del usuario
                         $ruta = "ordenes/".$id."";
                         
                        if(!is_dir($ruta)){ 
                        $crearcarpeta = mkdir($ruta, 0777);
                        } 
                      }
                    }
                  }
            }
          }
          else
          {
            echo "<label><input type='submit' value='Enviar' class='btn btn-default' name='btn' id='btnenv'/></label>";
          }
        ?>
</form>
</div>
</section>


<footer>
<?php include_once("footer.php") ?>
</footer>
<!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/modal.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>

</body>
</html>