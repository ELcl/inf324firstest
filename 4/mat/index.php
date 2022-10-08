
		<?php
		$nivel1= "../style.css";
		include "../cabecera.php";
		// include "../menu.php";
		?>

		<div id="menu">
			<td><a href="#"> 
			<?php 
			session_start();
			echo('Bienvenido '.$_SESSION['user']);
			 ?>
		</a></td>


			<td><a href="../inf/index.php">Informatica</a></td>
			<td><a href="#">Matem&aacutetica</a></td>
			<td><a href="../qmc/index.php">Qu&iacutemica</a></td>
			<br>
			<td><a href="/">Salir</a></td>
			
		</div>

		<div id="contenido" >
			Matem&aacutetica una carrera bonita

		<?php
		include "../pie.php";
		?>
