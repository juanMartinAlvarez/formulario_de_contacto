<?php
	// Llamando a los campos del form
	$asunto = $_POST['asunto'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	// Formato del correo
	$envio = "$asunto \n";
	$envio .= "Nombre:  $nombre \n";
	$envio .= "Apellido: $apellido \n";
	$envio .= "Correo: $email \n";
	$envio .= "Mensaje: $mensaje";	

	//$destinatario = "mcferrocroce@gmail.com";
	$destinatario = "juan_martin_alvarez@yahoo.com.ar";
	mail($destinatario, $asunto, utf8_decode($envio));

	header("Location: mensaje-de-envio.html");
?>
