<?php


require 'vendor/autoload.php'; // Carregar PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configurações do servidor SMTP
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.example.com'; // Endereço do servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'seu_email@example.com'; // Seu e-mail
$mail->Password = 'sua_senha'; // Sua senha
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configurações adicionais
$mail->setFrom('seu_email@example.com', 'Seu Nome');
$mail->isHTML(true);

function sendEmail($to, $subject, $body) {
    global $mail;
    try {
        // Configurações do e-mail
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Enviar e-mail
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
