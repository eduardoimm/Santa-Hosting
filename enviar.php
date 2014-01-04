<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$empresa = $_POST['empresa'];
	$telefono=$_POST['telefono'];
	$contactar=$_POST['contactar'];

	$header = 'From: ' . $email . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . ", de la empresa " . $empresa . " \r\n";
	$mensaje .= "Su e-mail es: " . $email . " \r\n";
	$mensaje .= "Su telefono es: " . $telefono . " \r\n";
	$mensaje .= "Desea que lo contacten por: " . $contactar . " \r\n";
	$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = 'admin@santahosting.com.ve';
	$asunto = 'Contacto';

mail($para, $asunto, utf8_decode($mensaje), $header);


?> <script type="text/javascript">
	alert("Su mensaje fue enviado exitosamente.");
	history.back();
</script>