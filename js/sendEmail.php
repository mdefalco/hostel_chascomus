<?php

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	$mailTo ="elhosteldechascomus@gmail.com";

//cuerpo del mail
	$cuerpo = "Formulario enviado desde la pagina Hostel Chascomus\n";

	$cuerpo .= "Nombre: " . $_POST["nombre"] . "\n";

	$cuerpo .= "Email: " . $_POST["email"] . "\n";

	$cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\n";
	
	$titulo .= "Consulta enviada por: " . $_POST["nombre"];
	
	$headers = "Reply-To: " . $_POST["email"] . "\r\n";

	$cabecera ="Date: ".date("l j F Y, G:i")."\n";
	$cabecera .="MIME-Version: 1.0\n";
	$cabecera .="From: ".$nombre."\n";
	$cabecera .="Return-path: ". $email."\n";
	$cabecera .="Reply-To: ".$mailTo."\n";
	$cabecera .="X-Mailer: PHP/". phpversion()."\n";


	//mando el correo...
		
	// ini_set ("sendmail_from","contacto@aplsconsultoria.com.ar");
	
	mail("elhosteldechascomus@gmail.com",$titulo,$cuerpo, $cabecera);

	echo "Gracias por consultarnos. El formulario fue enviado correctamente<a href='index.html'>Volver</a>";
	

?>
