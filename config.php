<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;

// Configuração do servidor SMTP
function configureMail(PHPMailer $mail) {
    $mail->isSMTP();
    $mail->Host = 'email-ssl.com.br'; // Use o servidor SMTP do seu provedor de e-mail
    $mail->SMTPAuth = true;
    $mail->Username = 'smtp@colegioaliancamk.com.br'; // Seu e-mail
    $mail->Password = 'xpto'; // Sua senha ou senha de aplicativo
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    
    // Remetente padrão
    $mail->setFrom('smtp@colegioaliancamk.com.br', 'Colégio Aliança');
}

