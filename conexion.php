<?php
$mysqli = new mysqli("localhost","root","root","a4");
if ($mysqli->connect_error) {
	die('ERROR: No se establecio la conexi&oacuten. ' . mysqli_connect_error() );
}
 # else {	echo "<h5 class='connect'>Conexi&oacuten Existosa</h5>";}
?>
