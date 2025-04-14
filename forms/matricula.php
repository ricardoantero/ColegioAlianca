<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../config.php';
require '../vendor/autoload.php'; // Certifique-se de ter o PHPMailer instalado via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $mensagem = nl2br(htmlspecialchars($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        configureMail($mail); // Aplica as configurações do SMTP

        // Destinatário
        $mail->addAddress('colegioalianca.midia@gmail.com', 'Admin');
        $mail->CharSet = 'UTF-8';

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = "Nova solicitação de matrícula | $nome";
        $mail->Body    = "
            <h3>Detalhes da solicitação de matrícula</h3>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $phone</p>
            <p><strong>Mensagem:</strong><br> $mensagem</p>
        ";

        $mail->send();
        echo "OK";
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
} else {
    echo "Método inválido!";
}
?>