<?php
    //$base_url="https://www.proyectodomus.com/HoyosLuque";
    $base_url="http://localhost/HoyosLuqueWEB"; 
    //$correoDestino = "subgerencia@hoyosluque.com";
    $correoDestino = "webmaster@hoyosluque.com";
    $nombre = $_POST['Nombre'];
    $email = $_POST['Email'];
    $telefono = $_POST['Telefono'];
    $mensaje = $_POST['Mensaje'];
    $asunto = "Nuevo contacto Quiere consignar un inmueble desde HOYOSLUQUE.COM";

	$email_message = "Detalles del formulario de contacto desde hoyosluque.com:\n\n";
	$email_message .= "Nombre: " . $nombre . "\n";
	$email_message .= "Email: " .$email . "\n";
	$email_message .= "Teléfono: " . $telefono . "\n";
	$email_message .= "Motivo: " . $mensaje . "\n\n";

    mail($correoDestino, $asunto, $email_message);
    header("Location:".$base_url."/thankYou.php");
?>