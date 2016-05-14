<?php
session_start();
include_once('conexion.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

if ($correo != '' or $contrasena !='') {
		
	//BUSCAR EN BASE DE DATOS
	$querybuscar = $mysqli->query("SELECT * FROM cliente where Correo='$correo' and contrasena='$contrasena' ");
	while (($fila=mysqli_fetch_array($querybuscar))) 
	{
		$correobd = $fila['Correo'];
		$contrasenabd = $fila['contrasena'];
		$id = $fila['id'];
		$nombrebd = $fila['Nombre'];
	}


	if( $correo == $correobd && $contrasena == $contrasenabd )
		{
			header("Location: login.php");
			$_SESSION['autenticado'] = true;
			$_SESSION['correo'] = $correo;
			$_SESSION['id'] = $id;
			$_SESSION['nombre'] = $nombrebd;
		}
		else{
			header("Location: login.php?error=si");
		}
}
else{
	header("Location: login.php?error=si");
}

	
?>