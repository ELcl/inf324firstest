
<?php
	# Importamos la conexion
	include "conexion.inc.php";

	#Recibimos la veriables
	$user = $_POST['user'];
	$password = $_POST['password'];
	#Realizamos la consulta para procesar y verificar el acceso
	$sql="select * from acceso where ci='$user' and password='$password'";
	$resultado=mysqli_query($con, $sql);
	
	if ($resultado->num_rows != 0) {
		session_start();
		$_SESSION['user']=$user;
		header("Location: dashboard.php"); 
	}
	else{
		
		echo 'El email o password es incorrecto, <a href="/">vuelva a intenarlo</a>.<br/>';
	}
?>
		
	
