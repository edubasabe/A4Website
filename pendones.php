<!DOCTYPE html>

<?php
	error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.

	include_once('funciones.php');
	$campoobligado = 0; 
	$errorendato = 0; 
?>

<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A4 - Pendones</title>
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
	$tamano = $_POST['tamano'];
	$cantidad  = $_POST['cantidad'];
	$calidad  = $_POST['calidad'];
	$adicional = $_POST['adicional'];
	$archivo = $_POST['archivo'];
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
					<img src="img/servicios/pendones2.jpg" alt="">
				</div>
			</div>
			<div class="col-md-7">
				<h2>Pendones</h2>
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
					<label for="tamano">Tamaño:</label>
					<select name="tamano" id="tamano" class="form-control" >
						<option value='' id='tamano'>Selecciona el tamaño</option>
						<option value="tamano1" id="tamano">90x120</option>
						<option value="tamano2" id="tamano">80x100</option>
						<option value="tamano3" id="tamano">100x150</option>
					</select>
				</div>

				<!--VALIDACIÓN-->
				<?php 
				if ( isset($tamano) and ($tamano == '') )
				{
					  echo "<span class='help-block'>* Debe seleccionar un tamaño</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Text -->	
				<div class="form-group">
					<label for="cantidad">Cantidad:</label>
					<input name='cantidad' type='text' id='cantidad' class="form-control">
				</div>

				<!--VALIDACIÓN-->
				<?php
					if ( isset($cantidad) and ($cantidad != '') )
						{
							if ( validaEntero($cantidad) )
							{
							  //echo $cantidad;
							}else {
								echo "<span class='help-block'>* La cantidad debe ser especificada en números</span>";
								$errorendato = 1;
							}
						}
						else
						{
							if ( isset($cantidad) and ($cantidad == '') ) { 
							echo "<span class='help-block'>* Debe especificar la cantidad</span>";
							$campoobligado = 1;
							}
						}
				?>

				<!-- Select -->
				<div class="form-group">
					<label for="calidad">Calidad:</label>
					<select name="calidad" id="calidad" class="form-control">
						<option value='' id='calidad'>Escoge la calidad de impresión</option>
						<option value="alta" id="calidad">Alta</option>
						<option value="media" id="calidad">Media</option>
					</select>
				</div>

				<!--VALIDACIÓN-->
				<?php 
				if ( isset($calidad) and ($calidad == '') )
				{
					  echo "<span class='help-block'>* Debe seleccionar un tamaño</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Checkbox -->
				<div class="checkbox">
					<label for="adicional"><input type="checkbox" name="adicional">Incluir Armado</label>
				</div>
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
