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
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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

<!-- Contenido del Sitio -->
<section class="calendarios">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="imagem-servicio">
					<img src="img/servicios/calendarios.jpg" alt="calendarios.jpg">
				</div>
			</div>
			<div class="col-md-7">
				<h2>Calendarios</h2>
				<p>Contamos unicamente con impresión de calendarios anillados de escritorio. Tamaño 15x10 con tapa en glasé 300.</p>
				<form action="" method="post" enctype="multipart/form-data">
				<!-- Input -->
				<div class="form-group">
					<label for="nombre-archivo">Nombre del archivo:</label>
					<input type="text" name="nombre-archivo" id="nombre-archivo" class="form-control">
				</div>
				<!-- Select -->
				<div class="form-group">
					<label for="cantidad">Cantidad:</label>
					<select name="cantidad" id="cantidad" class="form-control">
						<option value="10" id="cantidad">10</option>
						<option value="30" id="cantidad">30</option>
						<option value="50" id="cantidad">50</option>
						<option value="100" id="cantidad">100</option>
					</select>
				</div>
				<!-- Select -->
				<div class="form-group">
					<label for="paginas-int">Páginas internas:</label>
					<select name="paginas-int" id="paginas-int" class="form-control">
						<option value="Bond" id="paginas-int">Bond</option>
						<option value="Glase-150" id="paginas-int">Glase 150</option>
					</select>
				</div>
				<!-- Checkbox -->
				<div class="checkbox">
					<label for="adicional"><input type="checkbox" name="adicional">Uverizado en páginas internas</label><br>
					<label for="bordes"><input type="checkbox" name="bordes">Bordes redondeados</label>
				</div>
				<!-- Select -->
				<div class="form-group">
					<select name="tipo-anillado" id="tipo-anillado" class="form-control">
						<option value="metal-blanco">Metal blaco</option>
						<option value="metal-negro">Metal negro</option>
						<option value="metal-plateado">Metal plateado</option>
					</select>
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
				<span class="help-block">* Condiciones de Envío de la solicitud que tenemos que cambiar </span>
				<!-- Boton de Envio -->
				<button type="submit" class="btn btn-default">Enviar Solicitud</button>
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
