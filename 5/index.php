<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
			  border-collapse: collapse;
			  width: 100%;
			}

			th, td {
			  padding: 8px;
			  text-align: left;
			  border-bottom: 1px solid #ddd;
			}

			tr:hover {background-color: coral;}

			.box {
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  
			}

			.box div {
			  width: 100px;
			  height: 100px;
			  
			}
		</style>
	</head>
<body>


	<?php
		
	 ?>
	 	<div class="box">
		  <div>
		  	<h2>Login</h2>
		  	<form action="home.php" method="POST">
		  		<label>Nombre</label><br>
		  		<input type="text" name="user">
		  		<label>Usuario</label><br>
		  		<input type="password" name="password"><br>
		  		<br>
		  		<input type="submit" value="INGRESAR" name="Enviar">
		  	</form>
		  </div>
		</div>
      
	<!-- <form action="index2.php" method="GET">
		<input type="submit" value="Enviar" name="Enviar">
	</form> -->
</body>

