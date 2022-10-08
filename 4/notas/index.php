
		<?php
		$nivel1 = "../style.css";
		include "../cabecera.php";
		include "../conexion.inc.php";
		// include "../menu.php";
		
		?>
		<div id="menu">
			<td><a href="#"> 
			<?php 
			session_start();

			echo('Bienvenido');
			 ?>
		</a></td>
			<!-- <td><a href="#">Informatica</a></td>
			<td><a href="../mat/index.php">Matem&aacutetica</a></td>
			<td><a href="../qmc/index.php">Qu&iacutemica</a></td> -->
			<br>
			<td><a href="index.php?ci=
			<?php 
				echo ($_SESSION['user'])
			 ?>
			">Notas</a></td>
			<td><a href="/">Salir</a></td>
		</div>
		<div id="contenido" >
			<?php 
				$ci=$_GET["ci"];
				#include "../conexion.inc.php";
				$sql="select sigla, nota1, nota2, nota3, notafinal from inscripcion where ciEstudiante='$ci'";
				$resultado=mysqli_query($con, $sql);
/*				var_dump($fila=mysqli_fetch_array($resultado));
*/			?>
			 <table border="1">

				<tr>
					<th>MATERIA</th>
					<th>NOTA 1</th>
					<th>NOTA 2</th>
					<th>NOTA 3</th>
					<th>NOTA FINAL</th>
				</tr> 
				
				<?php
			while($fila=mysqli_fetch_array($resultado))
			{
			  	echo "<tr>";
					echo "<td>".$fila['sigla']."</td>";
					echo "<td>".$fila['nota1']."</td>";
					echo "<td>".$fila['nota2']."</td>";
					echo "<td>".$fila['nota3']."</td>";
					echo "<td>".$fila['notafinal']."</td>";
				echo "</tr>";
			}
				?>  
			</table> 
			 	
		<?php
		include "../pie.php";
		?>
