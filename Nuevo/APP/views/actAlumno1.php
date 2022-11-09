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
		<h1 style='text-aling: center; color:blue'>Formulario de Modificar</h1>
		<form action= '' method='post'>
			<h3 style= 'color:blue'><label> Id: </label>
				<input type='hidden' name='newIdAlumno' id='newIdAlumno'/></h3>
			<br>
			<h3 style= 'color:blue'><label> Nombre completo: </label>
				<input type='text' name='newNameAlumno' id='newNameAlumno'/></h3>
			<br>
			<h3 style= 'color:blue '><label> Correo: </label>
				<input type='email' name='newCorreoAlumno' id='newCorreoAlumno'/>
			</h3>
			<br>
			<h3 style= 'color:blue'><label> Telefono </label>
				<input type='text' name='newTelAlumno' id='newTelAlumno'/>
			</h3>
			<br>
            <h3 style= 'color: blue '><label> Programa: </label>
				<input type='text' name='newProgramaAlumno' id='newProgramaAlumno'/>
			</h3>
			<input type='submit' name='btnActAlumno' id='btnActAlumno'/>
			<input type='reset' name='' id='' value ='Limpiar'/>
			<a href='../views/viewAlumno.php'>Regresar</a>
		</form>
	</div>
</body>
</html>