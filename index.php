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
<header>
<?php include_once("header.php") ?>
</header>
<main>
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
          <h2>¡Envíanos tu arte!</h2>
          <h4>Ahora no es necesario que vengas a nuestras oficinas <br>para entregar tus archivos. Regístrate y súbelos aquí</h4>
          <button class="button-primary"><a href="" >Comienza Ahora</a></button>
      </div>
  </div>
  </div>
</section>

<!-- Servicios -->
<section class="servicios">
  <div class="container">
    <div class="row">
      <h3>Servicios</h3>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box-servicio">
          <a href="tdp.php">
          <img src="img/servicios/tdp.jpg" alt="Servicios" class="img-responsive img-servicio">
          <h4>Tarjetas de Presentación</h4>
          <p>Imprime tus tarjetas de visita para todos tus potenciales clientes en las cantidades que necesites, tenemos diferentes modelos de muestra por una o ambas caras con o sin laminado.</p>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box-servicio">
          <a href="volantes.php">
          <img src="img/servicios/flyers.jpg" alt="Servicios" class="img-responsive img-servicio">
          <h4>Volantes / Flyers</h4>
          <p>Justo lo que necesitas para promocionar tus productos, impresión digital Offset de volantes, flyers, tripticos, dipticos con la información de tu empresa con precios accesibles a todas las empresas.</p>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box-servicio">
          <a href="pendones.php">
          <img src="img/servicios/pendones.jpg" alt="Servicios" class="img-responsive img-servicio">
          <h4>Pendones</h4>
          <p>Para publicidad exterior o interior de tu empresa, exposiciones y ponencias de diferentes actividades, eventos de promoción, conferencias, bazares, celebraciones y todo lo que necesites .</p>
          </a>
        </div>
      </div>
    </div>

    <!-- Servicios 2da Fila -->
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box-servicio">
          <a href="factureros.php">
          <img src="img/servicios/factureros.jpg" alt="Servicios" class="img-responsive img-servicio">
          <h4>Factureros</h4>
          <p>Impresión de hojas de factura o factureros en lotes, a full color, monocromático o escala de grises. Para que puedas brindarles a tus clientes un soporte de venta de tus productos o servicios.</p>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box-servicio">
          <a href="impindividual.php">
          <img src="img/servicios/tab.jpg" alt="Servicios" class="img-responsive img-servicio">
          <h4>Impresión Individual</h4>
          <p>También tenemos la capacidad de brindarte cosas simples, como las impresiones individuales de un formato específico. Para que puedas realizar de forma personalizada todo lo que esté al alcance de tus manos.</p>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="box-servicio">
          <a href="calendarios.php">
          <img src="img/servicios/calendarios.jpg" alt="Servicios" class="img-responsive img-servicio">
          <h4>Calendarios</h4>
          <p>Traemos para ti modelos impactantes de calendarios o almanaques que imprimimos con la mejor calidad digital Offset en tiempos record, y con acabados finales de laminado mate o brillante para que perduren en el tiempo.</p>
          </a>
        </div>
      </div>
    </div>
    </div><!-- Fin de 2da fila -->
 </div> <!-- Fin de container -->
</section>
<hr>
<!-- Quienes Somos -->
<section class="quienes-somos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <img src="img/quienes-somos/imprenta-digital.jpg" width="100%" height="auto">
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h3>Quiénes somos</h3>
        <p>Somos un equipo de profesionales con más de 30 años de experiencia en la industria gráfica, que tiene como principal objetivo producir impresos de calidad. Hacemos hincapié en la calidad de nuestros trabajos, teniendo como principal objetivo la atención personalizada para satisfacción de nuestros clientes.</p>
        <p>Imprimimos tanto para ambientes de exteriores como interiores y la resolución de nuestros equipos le brindará una calidad óptima de impresión. Si su necesidad es impactar visualmente a los consumidores, el gran formato es la solución. En A4 contamos con equipos de gran formato donde podrá imprimir pendones, afiches, banners, fotos a gran tamaño.</p>
      </div>
    </div>
  </div>
</section>

<!--Contactos-->
<section class="contacto">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h3>Formulario de Contacto</h3>
          <?php
          $nombre   =  $_POST['nombre'];
          $correo   =  $_POST['correo'];
          $asunto   =  $_POST['asunto'];
          $mensaje  =  $_POST['mensaje'];
          //echo "Su nombre es: $nombre";
          /*foreach ($_POST['CheckBox'] as $idh)
          {
            echo "<br>el hobie es: CheckBox$idh ";
          }*/
          ?>
          <form action="" method="post" enctype="multipart/form-data" id="formulario">
          <!-- Input -->
          <div class="form-group">
            <label for="nombre">Nombre:</label>
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
            <label for="correo">Correo:</label>
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
            <label for="asunto">Asunto:</label>
            <input type="text" name="asunto" id="asunto" class="form-control">
          </div>
          <?php
            // validar asunto
            if ( isset($asunto) and ($asunto == '') ) {
              echo "<span class='help-block'>* Debe colocar el asunto del mensaje</span>";
              $campoobligado = 1;
              }
            else {
            };

          ?>
          <div class="form-group">
            <label for="mensaje">Mensaje:</label><br>
            <textarea name="mensaje" id="mensaje" rows="3" class="form-control"></textarea>
          </div>
          <?php
            // validar mensaje
            if ( isset($mensaje) and ($mensaje == '') ) {
              echo "<span class='help-block'>* Debe escribir un mensaje</span>";
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

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="direccion">
          <h3>Dirección:</h3>
          <p>Maracaibo / Venezuela</p>
          <h3>Teléfonos:</h3>
          <p>+58 261 7156699</p>
          <p>+58 261 7156699</p>
          <h3>Correo:</h3>
          <p>info@grupoa4.com</p>
        </div>
      </div>
    </div>
</section>
</main>

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
