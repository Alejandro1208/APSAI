<?php

if (isset($_POST['submit'])) {
  $nombre = $_POST['firstname'];
  $apellido = $_POST['laststname'];
  $email = $_POST['email'];
  $telefono = $_POST['phone'];
  $mensaje = $_POST['message'];

  $to = "tucorreo@ejemplo.com";
  $subject = "Mensaje desde el formulario de contacto";

  $message = "
  <html>
  <head>
    <title>Mensaje desde el formulario de contacto</title>
  </head>
  <body>
    <p>Nombre: $nombre</p>
    <p>Apellido: $apellido</p>
    <p>Email: $email</p>
    <p>Telefono: $telefono</p>
    <p>Mensaje: $mensaje</p>
  </body>
  </html>
  ";

  // cabeceras para el correo HTML
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // cabeceras adicionales
  $headers .= "From: $nombre <$email>" . "\r\n";

  mail($to, $subject, $message, $headers);

  echo "Mensaje enviado";
}

?>