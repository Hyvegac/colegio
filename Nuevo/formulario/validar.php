<?php
	$usuario = $_REQUEST ["user"];
	$pass = $_REQUEST ["pass"];
	$nombre = $_REQUEST ["nombre"];
	$apellido = $_REQUEST ["apellido"];
	
	$dato1 = "HeidyVega";
	$dato2 = "12345";
	if(($dato1 == $usuario) && ($dato2 == $pass)){
		print ("<h1 style= 'background-color: aqua'>Datos validos...</h1> <br><br>");
		print "<h3 style='color: red'>Nombre: </h3>".$nombre. "<br>";
		print "<h3 style='color: red'>Apellido: </h3>".$apellido."<br>";	
		print "<h3 style='color: red'>Usuario: </h3>".$usuario. "<br>";
		print "<h3 style='color: red'>Contraseña: </h3>".$pass."<br>";
		
		print "<a href='otro.php'> Regresar...</a>";
	}else{
		header ("Location:notFound.php");
	}
?>