<html>
<head>
	<link rel ="stylesheet" href="./css/estilo.css">
</head>
<?php
	print ("
		<div style = 'background-color: rgb(225, 175, 82); border: solid 1px black; text-align: center;width: 50%;
		height: 80%'>
		<h1 style='text-aling: center; color:blue'>Formulario Principal</h1>
		<form action= 'validar.php' method='get'>
			<h3 style= 'color:blue'><label> Nombre: </label>
			<input type='text' name='nombre' style='text-aling: center'></h3>
			<br>
			<h3 style= 'color:blue '><label> Apellido: </label>
			<input type='text' name='apellido'></h3>
			<br>
			<h3 style= 'color:blue '><label> Usuario: </label>
			<input type='text' name='user'></h3>
			<br>
			<h3 style= 'color: blue '><label> Contraseña: </label>
			<input type='password' name='pass'></h3>
			<br>
			<input type='submit'>
			<br>
		</form>
		</div>
	");
	// Las variables son en minusculas y las constantes en mayusculas
?>
