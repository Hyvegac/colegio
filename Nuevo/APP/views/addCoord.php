<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<div style = 'background-color: #cf8af2; border: solid 1px black; text-align: center;width: 50%;
		height: 80%'>
		<h1 style='text-aling: center; color:blue'>Formulario de Crear</h1>
		<form action= '../controllers/controladorAlumno.php' method='post'>
			<h3 style= 'color:blue'><label> Nombre Completo</label>
				<input type='text' name='newNameCoord' id='newNameCoord'/></h3>
			<br>
			<h3 style= 'color:blue '><label> Correo: </label>
				<input type='email' name='newCorreoCoord' id='newCorreoCoord'/>
			</h3>
			<br>
            <h3 style= 'color: blue '><label> Novedades </label>
				<input type='text' name='newNovedadesCoord' id='newNovedadesCoord'/>
			</h3>
			<input type='submit' name='btnNewCoord' id='btnNewCoord'/>
			<input type='reset' name='' id='' value ='Limpiar'/>
			<br>
			<a href='../viewCoordinador.php'>Regresar</a>
		</form>
	</div>
</body>
</html>