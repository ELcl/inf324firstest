<?php
	if (isset($_GET["ci"]))
	{
	$ci=$_GET["ci"];
	include "conexion.inc.php";
	$sql="select * from alumno where ci='$ci'";
	$resultado=mysqli_query($con, $sql);
	$fila=mysqli_fetch_array($resultado);
	$ci=$fila["ci"];
	$nombre=$fila["nombre"];
	$departamento=$fila["departamento"];
	$tipo="Modificar";
	}
	else
	{
	$ci="";
	$nombre="";
	$departamento="";
	$tipo="Adicionar";
	}
?>
<form action="guardar.php" method="GET">
	<input type="hidden" name="tipo" value="<?php echo $tipo; ?>" />
	CI
	<input type="text" name="ci" value="<?php echo $ci; ?>" /><br/>
	Nombre
	<input type="text" name="nombre" value="<?php echo $nombre;?>" /><br/>
	Departamento
	<input type="text" name="departamento" value="<?php echo $departamento;?>" /><br/>
	<input type="submit" name="Guardar" value="Guardar" /><br/>
</form>