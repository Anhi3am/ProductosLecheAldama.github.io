<?php
	$conectar=@mysql_connect('localhost','root','');
	
	if(!$conectar){
		echo"No se pudo conectar con el servidor";
	}else{
		
		$base=mysql_select_db('contacto');
		if(!$base){
			echo"No se encontro la base de datos";
		}
	}
	
	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$email= $_POST['email'];
	$asunto= $_POST['asunto'];
	$comentarios= $_POST['comentarios'];
	
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$apellidos',
								   '$email',
								   '$asunto',
								   '$comentarios')";
	
	$ejecutar=mysql_query($sql);
	
	if(!$ejecutar){
		echo"Hubo algun Error";
	}else{
		echo"<br><a href='formulario.html'>Volver a Contactanos</a>";
	}
	
?>