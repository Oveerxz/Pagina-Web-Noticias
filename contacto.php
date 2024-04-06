<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes hacer lo que quieras con los datos del formulario, como enviar un correo electrónico, guardarlos en una base de datos, etc.
    // Por ejemplo:
    // Enviar un correo electrónico de notificación
    $destinatario = "tu@email.com";
    $asunto = "Nuevo mensaje de formulario de contacto";
    $contenido = "Email: $email\n";
    $contenido .= "Mensaje: $mensaje\n";
    mail($destinatario, $asunto, $contenido);

    // Redireccionar al usuario a una página de agradecimiento
    header("Location: gracias.html");
    exit;
}
?>
