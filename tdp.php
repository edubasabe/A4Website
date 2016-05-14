<!DOCTYPE html>
<?php
	session_start();
	error_reporting(E_ERROR | E_PARSE); // Desactiva la notificación y warnings de error en php.
	include_once('conexion.php');
	include_once('funciones.php');
	$campoobligado = 0;
	$errorendato = 0;
?>

<html lang="en">
<head>
<?php include_once('head.php') ?>
</head>
<body>
<header>
<?php include_once("header.php") ?>
</header>

<?php
	$nombre = $_POST['nombre-archivo'];
	$tamano     = $_POST['tamano'];
	$papel   = $_POST['tipopapel'];
	$cantidad  = $_POST['cantidad'];
	$caras  = $_POST['caras'];
	$archivo   = $_POST['archivo'];
	$obs     = $_POST['observaciones'];
?>

<!-- FORMULARIO -->
<section class="img-serv">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="imagem-servicio">
					<img src="img/servicios/tdp2.jpg" alt="">
				</div>
			</div>
			<div class="col-md-7">
				<h2>Tarjetas de presentación</h2>
				<form action="tdp.php" method="post" enctype="multipart/form-data" class="" id="formulario">

				<!-- Input -->
				<?php echo "
				<div class='form-group'>
					<label for='nombre-archivo' class='control-label'>Nombre del archivo:</label>
					<input type='text' name='nombre-archivo' id='nombre-archivo' class='form-control' value='$nombre'>
				</div> "; ?>

				<!--VALIDACIÓN-->
				<?php
					// el isset determina si una variable está definida, es decir posee algún valor, en cuyo caso nos devolvera el valor booleano.
					if ( isset($nombre) and ($nombre == '') ) {
						echo "<span class='help-block'>* Debe colocar un nombre al archivo</span>";
						$campoobligado = 1;
						}
					else {
					}
				?>

				<!-- Select -->
				<?php echo "
				<div class='form-group'>
					<label for='tamano'>Tipo:</label>
					<select name='tamano' id='tamano' class='form-control' >
						<option value='' id='tamano'>Selecciona el tipo de tarjeta</option>
						<option value='estandar' id='tamano'";
						 if ( $tamano == 'estandar') { echo "selected";}
						echo ">Estandar (9x5)</option>
						<option value='cuadrada' id='tamano'";
						if ( $tamano == 'cuadrada') { echo "selected";}
						echo ">Cuadrada (6x6)</option>
					</select>
				</div>"; ?>

				<!--VALIDACIÓN-->
				<?php
				if ( isset($tamano) and ($tamano == '') )
				{
					  echo "<span class='help-block'>* Debe seleccionar un tipo de tarjeta</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Select -->
				<?php echo "
				<div class='form-group'>
					<label for='tipopapel'>Papel:</label>
					<select name='tipopapel' id='tipopapel' class='form-control'>
						<option value='' id='tipopapel'>Selecciona el tipo de papel</option>;
						<option value='opalina' id='tipopapel'";
						if ( $papel == 'opalina') { echo "selected";}
						echo " >Opalina</option>
						<option value='glasse300' id='tipopapel'";
						if ( $papel == 'glasse300') { echo "selected";}
						echo " >Glasse 300</option>
					</select>
					<span class='help-block'></span>
				</div>"; ?>

				<!--VALIDACIÓN-->
				<?php
				if ( isset($papel) and ($papel == '') )
				{
					  echo "<span class='help-block'>* Debe seleccionar un tipo de papel</span> ";
					  $campoobligado = 1;
				}
				else{
				};
				?>

				<!-- Select -->
				<?php echo "
				<div class='form-group'>
					<label for='cantidad'>Cantidad:</label>
					<select name='cantidad' id='cantidad' class='form-control'>
						<option value='' id='cantidad'>Selecciona la cantidad</option>
						<option value='50' id='cantidad'";
						if ($cantidad == '50') {echo "selected";}
						echo ">50</option>
						<option value='100' id='cantidad'";
						if ($cantidad == '100') {echo "selected";}
						echo ">100</option>
						<option value='150' id='cantidad'";
						if ($cantidad == '150') {echo "selected";}
						echo ">150</option>
						<option value='200' id='cantidad'";
						if ($cantidad == '200') {echo "selected";}
						echo ">200</option>
						<option value='250' id='cantidad'";
						if ($cantidad == '250') {echo "selected";}
						echo ">250</option>
						<option value='500' id='cantidad'";
						if ($cantidad == '500') {echo "selected";}
						echo ">500</option>
						<option value='1000' id='cantidad'";
						if ($cantidad == '1000') {echo "selected";}
						echo ">1000</option>
						<option value='1500' id='cantidad'";
						if ($cantidad == '1500') {echo "selected";}
						echo ">1500</option>
						<option value='2000' id='cantidad'";
						if ($cantidad == '2000') {echo "selected";}
						echo ">2000</option>
					</select>
				</div>"; ?>

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

				<!-- Radio -->
				<?php echo "
				<div class='radio'>
					<label for='caras'>
					<input type='radio' name='caras' id='caras' value='1'";
					if ($caras == '1') { echo "checked";}
					echo ">Una Cara</label>
					<label for='2caras'>
					<input type='radio' name='caras' id='2caras' value='2'";
					if ($caras == '2') { echo "checked";}
					echo ">Dos Caras</label>
				</div>"; ?>


				<!-- Input subir archivo -->
				<div class="form-group">
					<input type="file" name="archivo" id="archivo" data-multiple-caption="{count} files selected" class="inputfile inputfile-1" multiple />
					<label for="archivo">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>
					<span>Seleccione un archivo&nbsp;</span></label>
				</div>

				<?php

					$formatos = array('.jpg', '.png', '.pdf', '.tiff', '.doc');
					$directorio = 'archivos';
					$contArchivos = 0;
					$idcliente = $_SESSION['id'];
					$nombreInput = $_POST['nombre-archivo'];

					if ( isset ($_POST['btn']) )	{
						$nombreNuevo = $nombreInput.$ext;
						$nombreArchivo = $_FILES['archivo']['name'];
						$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
						$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));

							if (in_array($ext, $formatos))
							{
								if (move_uploaded_file($nombreTmpArchivo, "ordenes/$idcliente/$nombreNuevo"))
								{
								echo "Felicitaciones, el archivo <b>$nombreArchivo</b> se ha subido exitosamente " .$_SESSION['id'];
								}
								else{
									echo "<span class='help-block'>Ocurrió un error al subir archivo</span>" .$_SESSION['id'];
								}
							}
							else{
								echo "El formato de archivo seleccionado no está permitido";
							}
						}



				 ?>

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
						if ($_SESSION['autenticado'] > 0) {

							if ( $campoobligado == 1 or $errorendato == 1 )
							{
							echo "<input type='submit' value='Enviar Archivo' class='btn btn-default' name='btn'/>";
							}
							else
							{
								// Buscar en la Base de Datos
								$querybuscar = $mysqli->query("SELECT * FROM cliente join orden on cliente.id = orden.Cliente_idCliente where id='$id' or usuario='$usuario' ") or die ( "<br>No se puede ejecutar query para buscar datos ". $mysqli->error);
								if (mysqli_num_rows($querybuscar) > 0 )
								{

								$querybuscarC = $mysqli->query("SELECT * FROM datospersonales where cedula='$cedula' ") or die ( "<br>No se puede ejecutar query para buscar cedula ". $mysqli->error);
								if (mysqli_num_rows($querybuscarC) > 0 )
								{
									echo "<span class='error'><br><br>C&eacute;dula ya registrada</span>";
								}
								$querybuscarU = $mysqli->query("SELECT * FROM usuario where usuario='$usuario' ") or die ( "<br>No se puede ejecutar query para buscar usuario ". $mysqli->error);
								if (mysqli_num_rows($querybuscarU) > 0 )
								{
									echo "<span class='error'><br><br>Usuario ya registrado</span>";
								}
								echo "<br><br><label><input name='BtnEnviar' type='submit' id='BtnEnviar' value='Enviar' ></label>";

								}
								else
								{

								// Insertar en la Base de Datos
								$queryInsertar = $mysqli->query("INSERT INTO datospersonales(
								id,    cedula,     nombre,    apellido,   genero,       edocivil,     fechanac,  correo   ) values (
								null, '$cedula', '$nombre', '$apellido', '$RadOpcion', '$Seleccion', '$fechanac', '$correo' )") or die ( "<br>No se puede ejecutar query para insertar datos ". $mysqli->error);

									// Buscar Datos
									$querybuscar2 = $mysqli->query("SELECT id FROM datospersonales where cedula='$cedula' ") or die ( "<br>No se puede ejecutar query para buscar datos 2 ". $mysqli->error);
									while (($fila=mysqli_fetch_array($querybuscar2)))
									{
									$id= $fila['id'];
									//echo "<br> el id es $id <br>";
								}
								if ($querybuscar2)
								{
									// Insertar en la Base de Datos
									$queryInsertar2 = $mysqli->query("INSERT INTO usuario( idusuario,    usuario,     clave,    id ) values ( null, '$usuario', '$clave', '$id' )") or die ( "<br>No se puede ejecutar query para insertar datos 2 ". $mysqli->error);
								}

								foreach ($_POST['CheckBox'] as $idh)
								{
									// Insertar en la Base de Datos
									$queryInsertar3 = $mysqli->query("INSERT INTO hobiesdp( idhobiedp, id, idhobie ) values ( null, '$id', $idh )") or die ( "<br>No se puede ejecutar query para insertar datos hobies". $mysqli->error);
								}

								/*if($CheckBox1 == 'CheckBox1')
									{
									// Insertar en la Base de Datos
									$queryInsertar3 = $mysqli->query("INSERT INTO hobiesdp( idhobiedp, id, idhobie ) values ( null, '$id', 1 )") or die ( "<br>No se puede ejecutar query para insertar datos 3". $mysqli->error);
									}
									if($CheckBox2 == 'CheckBox2')
									{
									// Insertar en la Base de Datos
									$queryInsertar4 = $mysqli->query("INSERT INTO hobiesdp( idhobiedp, id, idhobie ) values ( null, '$id', 2 )") or die ( "<br>No se puede ejecutar query para insertar datos 4". $mysqli->error);
									}
									if($CheckBox3 == 'CheckBox3')
									{
									// Insertar en la Base de Datos
									$queryInsertar5 = $mysqli->query("INSERT INTO hobiesdp( idhobiedp, id, idhobie ) values ( null, '$id', 3 )") or die ( "<br>No se puede ejecutar query para insertar datos 5". $mysqli->error);
									}
								*/


								if ($queryInsertar && $queryInsertar2 )
								{
									echo "<span class='error'><br><br>Datos registrados exitosamente<br><br></span>";
								}
							}
							}
						}
						else{
							echo "<span class='help-block'>* Debe iniciar sesión para enviar archivos</span>";
						}
					}
					else
					{
						echo "<input type='submit' value='Enviar Archivo' class='btn btn-default' name='btn' id='btn'>";
					}
				?>

				<!--<button type="submit" class="btn btn-default" id="btn">Enviar Archivo</button>-->
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
<!--<script src="js/modal.js"></script>-->
<script src="js/vendor/bootstrap.min.js"></script>


</body>
</html>
