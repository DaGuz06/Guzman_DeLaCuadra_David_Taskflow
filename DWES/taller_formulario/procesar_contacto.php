<?php

$nombre = isset($_POST['nombre_contacto']) ? htmlspecialchars($_POST['nombre_contacto']) : 'No proporcionado';
$email = isset($_POST['email_contacto']) ? htmlspecialchars($_POST['email_contacto']) : 'No proporcionado';
$mensaje = isset($_POST['mensaje_contacto']) ? htmlspecialchars($_POST['mensaje_contacto']) : 'No proporcionado';

echo "Gracias por tu mensaje, $nombre ($email)";