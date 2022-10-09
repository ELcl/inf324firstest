<div id=contenido>
	<?php 
		/*$departamento = $_GET['dp'];*/
		if (!isset($_GET['dp'])) {
			echo('Bienvenido al portal de Notas de la Carrera ');
		}
		else{
			include "conexion.inc.php";
			$sql = "SELECT notafinal, departamento FROM inscripcion INNER JOIN persona ON 
					inscripcion.ciEstudiante = persona.ci";
			$resultado=mysqli_query($con, $sql);




			if ($resultado->num_rows == 0) {
				echo('no hay');
			}
			$contador = 0;
			$acumulador = 0;

			while($fila=mysqli_fetch_array($resultado))
			{
				if ($fila['departamento'] == $_GET['dp']) {
					$contador = $contador + 1;
					$acumulador = $acumulador + $fila['notafinal'];
				}
			}
			if ($contador > 0) {
				echo ('Promedio para '. $_GET['dp']. ' es: '.$acumulador/$contador);
			}
			else{
				echo ('No hay notas de '. $_GET['dp']);
			}
					
		}
	 ?>

	

	
</div>