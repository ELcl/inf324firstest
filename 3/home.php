<!DOCTYPE html>
<html>
<head>
	<style>
		table{
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  padding: 8px;
		  text-align: left;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {background-color: coral;}
	</style>
</head>
<body>

	<?php
		# Importamos la conexion
		include "conexion.inc.php";

		#Recibimos la veriables
		$user = $_POST['user'];
  	$password = $_POST['password'];


		$sql="select * from acceso where usuario='$user' and password='$password'";
		$resultado=mysqli_query($con, $sql);
		/*echo($resultado->num_rows);*/

/*		echo($resultado);
*/		/*var_dump($resultado);*/
		if ($resultado->num_rows != 0) {
			#echo "hay datos validos";
			
			//Iniciamos Sesion
			session_start();
			$_SESSION['user']=$user;

			header("HTTP/1.1 302 Moved Temporarily"); 
			header("Location: dashboard.php"); 

		}
		else{
			#echo "No hay datos validos";
			echo 'El email o password es incorrecto, <a href="/">vuelva a intenarlo</a>.<br/>';
		}
	?>
		<?php 
		//Iniciamos Sesion
		/*session_start();
		$_SESSION['contador'];*/
		//Recibimos los nombres del formulario
		/*$nombre = $_POST['nombre'];
  	$password = $_POST['password'];*/
  	//verificamos los nombres
  	// var_dump($nombre);
  	// var_dump($password);
  	//realizando la consuulta en mysql
  	

  	#var_dump($resultado);

		/*$_SESSION['contador']=$_SESSION['contador']+1;*/
	 	?>
	<!-- <a href="editar.php?tipo=nuevo">Nuevo</a> -->

<!-- <table>
	<tr>
	<th>ci</th>
	<th>nombre completo</th>
	<th>fecha de nacimiento</th>
	<th>departamento</th>
	<th>acciones</th>
	</tr> -->
	<!-- 
	<?php
		while($fila=mysqli_fetch_array($resultado))
		{
		  	echo "<tr>";
				echo "<td>$fila[ci]</td>";
				echo "<td>".$fila["nombre_completo"]."</td>";
				echo "<td>".$fila['fecha_nac']."</td>";
				echo "<td>".$fila['departamento']."</td>";
				echo "<td>";
				echo '<a href="editar.php?ci='.$fila["ci"].'">Editar</a> ';
				echo '<a href="eliminar.php?ci='.$fila["ci"].'">Eliminar</a>';
				echo "</td>";
				echo "</tr>";
		}
	?> -->
<!-- 
</table> -->
</body>