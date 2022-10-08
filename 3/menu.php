
<body>

	<div id="menu">
		
		<td><a href="#"> 
			<?php 
			session_start();
			echo('Bienvenido '.$_SESSION['user']);
			 ?>
		</a></td>
		<br>
		<td><a href="inf/index.php">Informatica</a></td>
		<td><a href="mat/index.php">Matematica</a></td>
		<td><a href="qmc/index.php">Qu&iacutemica</a></td>
		<br>
		<td><a href="/">Salir</a></td>
			
		
	</div>

	