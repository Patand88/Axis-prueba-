<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = htmlspecialchars($_POST['nombre']);
  $email = htmlspecialchars($_POST['email']);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  $to = "contacto@axiacapital.com"; // Cambia esto
  $subject = "Nuevo mensaje de $nombre";
  $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Mensaje enviado con éxito.";
  } else {
    echo "Hubo un error al enviar el mensaje.";
  }
}
?>
