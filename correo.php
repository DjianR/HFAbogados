<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = "especializacionpenal@gmail.com,contacto@hfabogados.cl";
$titulo = $_POST['asunto'];
$header = "From:" . $email;
$msjCorreo = "Nombre: $nombre\n\nE-mail: $email \n\nMensaje:\n \t\t $mensaje \n\n\n Mensaje enviado desde www.hfabogados.cl.";
  

if ($_POST['submit']) 
{
	if(empty($nombre) || empty($email) || empty($mensaje) || empty($titulo)  )
	{
		echo "<script language='javascript'>
		alert('Ingrese sus datos');
		</script>";
	}
	else if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
		alert('!Mensaje Enviado¡. Nos comunicaremos a la brevedad.');
		window.location.href = 'http://www.hfabogados.cl';
		</script>";
	}
	else {
		echo "<script language='javascript'>
		alert('Problema al enviar correo. Intente comunicarse con el número de teléfono');
		window.location.href = 'http://www.hfabogados.cl';
		</script>";
	}
}
?>
