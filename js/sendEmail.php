<?php

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	$para = 'elhosteldechascomus@gmail.com';
	$titulo = 'Consulta HostelChascomus: $nombre';
	$header = 'From: ' . $email;
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";








	// $headers_mensaje = "From: magui2002@gmail.com\r\n" . "Reply-To: elhosteldechascomus@gmail.com\r\n" . "Return-path:  magui2002@gmail.com\r\n" . "MIME-Version: 1.0\n" . "Content-type: text/plain; charset=iso-8859-1";	  
	// mail($headers_mensaje);


	// if ($_POST['submit']) {
		// if (mail($para, $titulo, $msjCorreo, $header)) {
		// 	echo "<script language='javascript'>
		// 	alert('Mensaje enviado, muchas gracias.');
		// 	window.location.href = 'www.google.com';
		// 	</script>";
		// } else {
		// 	echo 'Falló el envio';
		// }
// }


	//Importamos las variables del formulario de contacto

 
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "<elhosteldechascomus@gmail.com>"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web www.miweb.com\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";
 

//Enviamos el mensaje y comprobamos el resultado
if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
//Si el mensaje se envía muestra una confirmación
die("Gracias, su mensaje se envio correctamente.");
}else{
 
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>
