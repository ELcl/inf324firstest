<?php
	$ci=$_GET["ci"];
	include "conexion.inc.php";
	$sql="delete from alumno where ci='$ci'";
	//echo $sql;
	$resultado=mysqli_query($con, $sql);
	header("Location: inicial.php");
?>