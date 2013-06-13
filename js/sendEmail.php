<?php

	// if (isset($_POST['nombre']) & isset($_POST['email']) & isset($_POST['mensaje']){
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];


		$para = 'elhosteldechascomus@gmail.com';
		$titulo = 'Consulta HostelChascomus: $nombre';
		$header = 'From: ' . $email;
		$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

		//Preparamos el mensaje de contacto
		$cabeceras = "From: $email\n" //La persona que envia el correo
		 . "Reply-To: $email\n";
		$asunto = "Mensaje desde la pagina Web Hostel Chascomús"; //asunto aparecera en la bandeja del servidor de correo
		$email_to = "<elhosteldechascomus@gmail.com>"; //cambiar por tu email
		$contenido = "$nombre ha enviado un mensaje desde la web www.elhosteldechascomus.com.ar\n"
		. "\n"
		. "Nombre: $nombre\n"
		. "Email: $email\n"
		. "Mensaje: $mensaje\n"
		. "\n";
	 
		//Enviamos el mensaje y comprobamos el resultado
		if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {
			//Si el mensaje se envía muestra una confirmación
			$mensaje = "Gracias, su mensaje se envio correctamente."; 
			header('Location: ../contacts.php');
		}else{ 
			$mensaje ="Error: Su información no pudo ser enviada, intente más tarde";
		}

	// } else {
	// 	$mensaje="Debe completar todos los campos requeridos.";
	// 	header('Location: http://www.google.com');
	// }

?>	

