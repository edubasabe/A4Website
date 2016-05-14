<?php 
	
	$conn = new mysqli("localhost","root","","oac");
	
	$idparroquia = $_POST["idparroquia"];
	
	$sql = "SELECT * from usuarios join solicitudes on usuarios.cedula = solicitudes.cedula join parroquias on usuarios.parroquia=parroquias.idparroquia where idparroquia = ".$idparroquia.";";
	

	//$sql = "select * from solicitudes where cedula = ".$cedula.";";
	$query = $conn->query($sql);


	$i = 0;

	while ($rs = mysqli_fetch_array($query)) {
		$vector[$i] = "<tr><td>".$rs["idsolicitud"]." </td><td> ".$rs["fecha"]." </td><td> ".$rs["requerimiento"]." </td><td> ".$rs["justificacion"]." </td><td> ".$rs["asunto"]." </td><td> ".$rs["estado"]." </td><td> ".$rs["codigo"]." </td><td> ".$rs["validado"]." </td><td> ".$rs["cedula"]." </td><td>".$rs["tipo"]."</td></tr>";
		$i = $i + 1;
	}


	$conn->close();

	header("Type: application/json");
	echo json_encode($vector);


 ?>