<?php

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];

	$para = "huggut@hotmail.com";
	$asunto1 = "Prueba PHP $asunto $nombre";

	$mensaje = "
		Nombre del remitente: ".$nombre."
		correo: ".$email."
		asunto: ".$asunto."
		mensaje: ".$mensaje."
	";

/*	if(mail($para,$asunto1,utf8_decode($mensaje))){
		echo "$nombre " . "Gracias por enviarnos tus comentarios";
	}else{
		echo "El mensaje no pudo ser enviado, por favor intente más tarde";
	}*/
  header ("location: index.html");

 ?>
