
		<?php
		$nivel1 = "../style.css";
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
			<td><a href="#">Informatica</a></td>
			<td><a href="../mat/index.php">Matem&aacutetica</a></td>
			<td><a href="../qmc/index.php">Qu&iacutemica</a></td><br>
			<td><a href="/">Salir</a></td>
		</div>
		<div id="contenido" >
			Inform&aacutetica una carrera bonita e Importante
		<?php
		include "../pie.php";
		?>
