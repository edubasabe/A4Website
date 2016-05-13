<!doctype html>
<?php
  error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.

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
  $correo     = $_POST['correo'];
  $nomusuario   = $_POST['nomusuario'];
  $clave  = $_POST['clave'];
?>
<div class="col-md-offset-3 col-md-6 col-md-offset-3 center">
        <form action="" method="post" enctype="multipart/form-data" id="formulario">
        <!-- Input -->
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
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
          <label for="nomusuario">Nombre de Usuario</label>
          <input type="text" name="nomusuario" id="nomusuario" class="form-control">
        </div>
        <?php
          // validar Nombre de usuario
          if ( isset($nomusuario) and ($nomusuario == '') ) {
            echo "<span class='help-block'>* Debe colocar el nombre de usuario</span>";
            $campoobligado = 1;
            }
          else {
          };

        ?>
        <div class="form-group">
          <label for="clave">Contraseña</label>
          <input type="text" name="clave" id="clave" class="form-control">
        </div>
        <?php
          // validar contraseña
          if ( isset($clave) and ($clave == '') ) {
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
              echo "<label><input type='submit' value='Enviar' class='btn btn-default' name='btn' id='btnenv'/></label>";
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
