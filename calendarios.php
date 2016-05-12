<!DOCTYPE html>

<?php
	error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.

	include_once('funciones.php');
	$campoobligado = 0; 
	$errorendato = 0; 
?>

<html class="no-js" lang="">
    <head>
    	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A4 - Calendarios</title>
        <meta name="description" content="">
        <meta name="author" content="David Basabe, Mariam Torres, Maria Racines">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#313280">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/modal.css">
        <!-- <link rel="stylesheet" href="css/skeleton.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
<body>
<header>
<?php include_once("header.php") ?>
</header>

<?php
	$nombre = $_POST['nombre-archivo'];
	$cantidad  = $_POST['cantidad'];
	$pag  = $_POST['pagin'];
	$anillado  = $_POST['anillado'];
	$adic1  = $_POST['uv'];
	$adic2  = $_POST['bordes'];
	$archivo   = $_POST['archivo'];
	$obs     = $_POST['observaciones'];
	
	//echo "Su nombre es: $nombre";

	/*foreach ($_POST['CheckBox'] as $idh)
	{
		echo "<br>el hobie es: CheckBox$idh ";
	}*/
?>

<!-- FORMULARIO -->
<section class="img-serv">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="imagem-servicio">
					<img src="img/servicios/calendarios2.jpg">
				</div>
			</div>
			<div class="col-md-7">
				<h2>Calendarios</h2>
				<br>
				<p>Contamos unicamente con impresión de calendarios anillados de escritorio. Tamaño 15x10 con tapa en glasé 300.</p>
				<br>

				<form action="" method="post" enctype="multipart/form-data">

				<!-- Input -->
				<div class="form-group">
					<label for="nombre-archivo" class="control-label">Nombre del archivo:</label>
					<input type="text" name="nombre-archivo" id="nombre-archivo" class="form-control" value="">
				</div>

				<!--VALIDACIÓN-->
				<?php
					// el isset determina si una variable está definida, es decir posee algún valor, en cuyo caso nos devolvera el valor booleano.
					if ( isset($nombre) and ($nombre == '') ) { 
						echo "<span class='help-block'>* Debe colocar un nombre al archivo</span>";
						$campoobligado = 1;
						}
					else {
					};
				?>

				<!-- Select -->
				<div class="form-group">
					<label for="cantidad">Cantidad:</label>
					<select name="cantidad" id="cantidad" class="form-control">
						<option value="" id="cantidad">Seleccione la cantidad</option>
						<option value="10" id="cantidad">10</option>
						<option value="30" id="cantidad">30</option>
						<option value="50" id="cantidad">50</option>
						<option value="100" id="cantidad">100</option>
					</select>
				</div>

				<!--VALIDACIÓN-->
				<?php 
				if ( isset($cantidad) and ($cantidad == '') )
				{
					  echo "<span class='help-block'>* Debe seleccionar la cantidad</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Select -->
				<div class="form-group">
					<label for="pagin">Páginas internas:</label>
					<select name="pagin" id="pagin" class="form-control">
						<option value="" id="pagin">Seleccione el tipo de papel para las páginas internas</option>
						<option value="Bond" id="pagin">Bond</option>
						<option value="Glase150" id="pagin">Glase 150</option>
					</select>
				</div>

				<!--VALIDACIÓN-->
				<?php 
				if ( isset($pag) and ($pag == '') )
				{
					  echo "<span class='help-block'>* Debe elegir el tipo de papel para las páginas internas</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Checkbox -->
				<div class="checkbox">
					<label for="uv"><input type="checkbox" name="uv">Uverizado en páginas internas</label><br>
					<label for="bordes"><input type="checkbox" name="bordes">Bordes redondeados</label>
				</div>

				<!-- Select -->
				<div class="form-group">
					<label for="anillado">Anillado:</label>
					<select name="anillado" id="anillado" class="form-control">
						<option value="">Seleccione el tipo de anillado</option>
						<option value="blanco">Metal blaco</option>
						<option value="negro">Metal negro</option>
						<option value="plateado">Metal plateado</option>
					</select>
				</div>
				
				<!--VALIDACIÓN-->
				<?php 
				if ( isset($anillado) and ($anillado == '') )
				{
					  echo "<span class='help-block'>* Debe seleccionar el color para el anillado</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Input subir archivo -->
				<div class="form-group">
					<input type="file" name="archivo" id="subiendo-archivo" data-multiple-caption="{count} files selected" class="btn btn-default" multiple />
				</div>
				<!-- Input textarea -->
				<div class="form-group">
					<label for="observaciones">Observaciones:</label><br>
					<textarea name="observaciones" id="observaciones" rows="3" class="form-control"></textarea>
				</div>
				
				<span class="adv">* Asegúrate de haber ingresado las especificaciones correctas antes de enviar el archivo. Al hacer clic, tu trabajo automáticamente estará en la lista de trabajo, por lo que podrá ser impreso minutos después de enviarlo.</span>

				<!-- Boton de Envio -->
				<?php 
					if ( isset ($_POST['btn']) )
					{
						if ( $campoobligado == 1 or $errorendato == 1 )
						{
							echo "<br /><br /><label><input type='submit' value='Enviar Archivo' class='btn btn-default' name='btn'/></label>";
						}
						else
						{
							echo "<br /><br /><label><input type='submit' value='Enviar Archivo' class='btn btn-default' name='btn'/></label>";
						}
					}
					else
					{
						echo "<br /><br /><label><input type='submit' value='Enviar Archivo' class='btn btn-default' name='btn'/></label>";
					}
				?>

				<!--<button type="submit" class="btn btn-default">Enviar Archivo</button>-->
				</form>
			</div>
		</div>
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
