<!DOCTYPE html>

<?php
	error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
	include_once('conexion.php');
	include_once('funciones.php');
	$campoobligado = 0; 
	$errorendato = 0; 

	session_start();
	//echo "Bienvenido su id es: ".$_SESSION['id'];
	$id = $_SESSION['id'];
	//echo "id = $id";	
?>
<html class="no-js" lang="">
    <head>
    	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A4 - Usuario</title>
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

<!-- USUARIO -->
<section class="usuario">
	<div class="container">
		<div class="row">
			<h2>Usuario</h2>
		</div>
		<div class="row">
	<?php

	$querybuscar = $mysqli->query("SELECT * FROM cliente where idCliente ='$id'");
	while (($fila=mysqli_fetch_array($querybuscar))) 
	{
		$nombre = $fila['Nombre'];
		$apellido = $fila['Apellido'];
		$telefono = $fila['Telefono'];
		$correo = $fila['Correo'];
		$contrasena = $fila['contrasena'];
	}

	if (mysqli_num_rows($querybuscar) > 0 )
	{
		echo "
			<div class='col-md-6'>
				<h3>Nombre:</h3>
				<p>$nombre</p>
				<h3>Apellido:</h3> 
				<p>$apellido</p>
				<h3>Teléfono:</h3>
				<p>$telefono</p>
			</div>
			<div class='col-md-6'>
				<h3>Correo electrónico:</h3>
				<p>$correo</p>
				<br><br>
				<input type='submit' value='Modificar datos' class='btn btn-default' name='btn'/>
	";
	}
	?>
			</div>
		</div>
	</div>
</section>

<!-- ORDENES -->
<section class="usuario">
<div class="container">
	<div class="row">
		<h2>Órdenes</h2>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<form action="" id="formulario">
				<br>
					<label for="usuario">Selecciona la fecha de tu orden</label>
					<select id="usuario" class="form-control">
						<?php 
							while ($rs = mysqli_fetch_array($query)) {
								echo "<option value='".$rs["cedula"]."'>".$rs["username"]."</option>";
							}
						 ?>
							<option selected="selected">Selecciona una fecha</option>

					</select>										
				</form>
			</div>
		</div>
		<div class="col-md-12">
		<!-- Table -->
			<br>
		  <table class="table">
		  	<thead>
				<tr>
					<!-- <th>#</th> -->
					<th>Fecha</th>
					<th>Producto</th>
					<th>Nombre</th>
					<th>Cantidad</th>
					<th>Especificaciones</th>
				</tr>
			</thead>
			<tbody id="resp">
			  	

			</tbody>
		  </table>
		  <br><br>
		</div>
	</div>
</div>

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

<script type="text/javascript">
	$(document).ready(function(){

	    $("#usuario").change(function(){
        $("#resp").empty();
    	});


		$("#usuario").change(function(e){
			e.preventDefault();
		
			var id = $("#usuario").val();

			$.ajax({
				url: "modules/solicitudes.php",
				type: "post",
				data: {
					cedula: id
				},
				dataType: "json"

			}).done(
				function(data)
				{
					for (var i = 0; i < data.length; i++) 
					{
						$("#resp").append(data[i]);
					
					}
				}
			).fail(
				function(error){
				}
			);
		});
	});
</script>

</html>
