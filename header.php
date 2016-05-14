<!-- Titulo para indexar -->
<h1 class="invisible">A4</h1>
<h2 class="invisible">Impresos</h2>
<!-- Navegacion   -->
<nav class="navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <div class="menu-burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <!-- Logo -->
      <a href="index.php" class="navbar-brand">
        <span class="invisible">A4Website</span>
        <div class="logo">
          <img src="img/logo/A4Logo.svg" width="auto" height="80px" alt="Logo">
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <span><a href="pdf/listadeprecios.pdf" class="lista-precios">Lista de Precios</a></span>
        <?php
        error_reporting(E_ERROR | E_PARSE);
        session_start();

        if ($_SESSION['autenticado']) {
         # echo "<li><a href='salir.php'>Hola, ".$_SESSION['usuario'] ,"</a></li>";
         # echo "<li><a href='salir.php'>Cerrar sesión</a></li>";

         echo "<li class='dropdown'>
                 <a href='editar-registro.php' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Hola, ".$_SESSION['nombre'] , " <span class='caret'></span></a>
                   <ul class='dropdown-menu'>
                     <li><a href='editar-registro.php'>Editar perfil</a></li>
                     <li><a href='salir.php'>Cerrar sesión</a></li>
                   </ul>
                 </li>";
        }
        else {
          
          echo "<li><a href='login.php'>Iniciar sesión</a></li>";
          echo "<li><a href='registro.php'>Regístrate</a></li>";
        }
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
  </nav>
<div class="bg-productos">
  <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
    <ul class="menu-productos">
      <li><h4>Servicios</h4></li>
      <li><a href="tdp.php">Tarjetas de presentación</a></li>
      <li><a href="volantes.php">Volantes</a></li>
      <li><a href="pendones.php">Pendondes</a></li>
      <li><a href="factureros.php">Factureros</a></li>
      <li><a href="calendarios.php">Calendarios</a></li>
      <li><a href="impindividual.php">Impresión Individual</a></li>
      <li><hr></li>
    </ul>
    </div>
    </div>
  </div>
</div>
