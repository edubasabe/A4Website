<?php 
# session_start();
# error_reporting(E_ERROR | E_PARSE);
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A4 - Inicio</title>
        <meta name="description" content="">
        <meta name="author" content="David Basabe, Mariam Torres, Maria Racines">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#313280">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" sizes="any" type="image/icon" href="favicon.ico" >
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/modal.css">
        <!-- <link rel="stylesheet" href="css/skeleton.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css' -->
        <link rel="stylesheet" href="css/normalize.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
          <label for='usuario'>Usuario</label>
          <input type='text' name='txtusuario' id='txtusuario' maxlength='12' placeholder='Ingrese su nombre de usuario' value=''>
          <br>
          <label for='password'>Contraseña</label>
          <input type='password' name='txtclave' id='txtclave' maxlength='12' placeholder='Ingrese su contraseña'  value=''>
          <br>
          <input type='submit' name='BtnEnviar' id='BtnEnviar' class='btn btn-azul' value='Iniciar Sesión'>"; ?>

          <?php   if ($_GET['error']=='si')
                  {
                    echo "p class='error text-center'>Los datos que ingresaste no son válidos</p>";
                  }
          ?>
         <?php echo "
          </form>
        <a href='#' style='margin-top:1rem;'>¿Ha olvidado su usuario o contraseña?</a>
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
