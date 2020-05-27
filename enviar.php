<?php  

// Llamando a los campos
$asunto = $_POST['asunto'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "wily.capote@gmail.com";

$carta = "Asunto: $asunto \n\n";
$carta .= "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>