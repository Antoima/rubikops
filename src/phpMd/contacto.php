<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';

// Cargar configuración
//$config = require 'config.php';
$config = include('/home/dh_292vea/configuracion/config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var(trim($_POST['name'] ?? ''), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $message = filter_var(trim($_POST['message'] ?? ''), FILTER_SANITIZE_STRING);

    if (empty($name) || !$email || empty($message)) {
        echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios y el correo debe ser válido."]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = $config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPSecure = $config['smtp_secure'];
        $mail->Port = $config['smtp_port'];

        // Correo para ti
        $mail->setFrom($config['smtp_username'], 'Rubikops');
        $mail->addAddress('ing.antoima@gmail.com');
        $mail->Subject = "Nuevo mensaje de contacto de $name";
        $mail->Body = "Nombre: $name\nCorreo Electrónico: $email\nMensaje:\n$message";

        $mail->send();

        // Correo para el cliente
        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = "Hemos recibido tu mensaje";

        // Cargar el contenido del archivo HTML
        $htmlContent = file_get_contents('email_template.html');
        $htmlContent = str_replace('{{name}}', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'), $htmlContent);

        $mail->isHTML(true);
        $mail->Body = $htmlContent;

        $mail->send();

        echo json_encode(["status" => "success", "message" => "Mensaje enviado con éxito."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Hubo un error al enviar el mensaje: " . $e->getMessage()]);
    }
}