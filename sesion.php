<?php
session_start();
include_once('conexion.php');

$usuario = $_POST['txtusuario'];
$clave = $_POST['txtclave'];

if ($usuario != '' or $clave !='') {
		
	//BUSCAR EN BASE DE DATOS
	$querybuscar = $mysqli->query("SELECT * FROM usuario_login where usuario='$usuario' and clave='$clave' ");
	while (($fila=mysqli_fetch_array($querybuscar))) 
	{
		$usuariobd = $fila['usuario'];
		$clavebd = $fila['clave'];
		$id = $fila['id'];
	}


	if( $usuario == $usuariobd && $clave == $clavebd )
		{
			header("Location: login.php");
			$_SESSION['autenticado'] = true;
			$_SESSION['usuario'] = $usuario;
			$_SESSION['id'] = $id;
		}
		else{
			header("Location: login.php?error=si");
		}
}
else{
	header("Location: login.php?error=si");
}

	
?>