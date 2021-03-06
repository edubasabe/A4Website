<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

include_once('conexion.php')
 ?>
<!doctype html>
<html class="no-js" lang="">
<head>
<?php include_once('head.php') ?>
</head>
<body>
<header>
<?php  include_once("header.php") ?>
</header>

<main>
<!-- Comienza php -->

<?php
session_start();
if (!$_SESSION['autenticado']) {
echo "
<section class='login'>
  <div class='container'>
    <div class='row modal-body'>
    <div class='logo-login'>
      <img src='img/logo/A4Logo.svg' width='auto' height='80' alt='Logo' class='img-responsive'>
    </div>
      <div class='col-md-4'></div>
      <div class='col-md-4'>
          <h3 class='text-center'>Inicio de sesión</h3>
          <form name='inicia-sesion' action='sesion.php' method='post'> "; ?>

          <?php echo "
          <label for='correo'>Correo electrónico:</label>
          <input type='text' name='correo' id='correo' placeholder='Ingrese su correo electrónico' value=''>
          <br>
          <label for='password'>Contraseña</label>
          <input type='password' name='contrasena' id='contrasena' maxlength='8' placeholder='Ingrese su contraseña'  value=''>
          <br>
          <input type='submit' name='btn' id='btn' class='btn btn-azul' value='Iniciar Sesión'>"; ?>

          <?php   if ($_GET['error']=='si')
                  {
                    echo "<p class='error text-center'>Los datos que ingresaste no son válidos</p>";
                  }
          ?>
         <?php echo "
          </form>
        <a href='#' style='margin-top:1rem;'>¿Ha olvidado su contraseña?</a>
        <hr>
        <button class='btn btn-gris'><a href='registro.php'>Registrarse</a></button>
      </div>
      <div class='col-md-4'></div>
  </div>
  </div>
</section>";
}
else {
  #echo "Sesión Iniciada";
  echo "<script>window.top.location='index.php'</script>";
  #header("Location: index.php", true);
  }

?>
</main>
<footer>
<?php # include_once("footer.php") ?>
</footer>
<!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/modal.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
</body>
</html>
