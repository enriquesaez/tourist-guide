<?php
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$mensaje = $_POST['mensaje'];
		$para = 'saez240@gmail.com, luisjlarrea@hotmail.com';
		$titulo = 'Mensaje de la web versión INGLES';
		$header = 'From: info@guiaturisticodecordoba.com' . "\r\n" .
		$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
		  
		if ($_POST['submit']) {
		if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
		alert('Your message has been sent. We will respond to your request as soon as possible. Thank you very much!');
		window.location.href = 'http://eng.guiaturisticodecordoba.com/contact.html';
		</script>";
		} else {
		echo 'Uh-Oh... Something was wrong';
		}
		}
	?>