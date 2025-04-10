<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../config.php';
require '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $area = htmlspecialchars($_POST["area"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $mensagem = nl2br(htmlspecialchars($_POST["message"]));

    $mail = new PHPMailer(true);

    try {
        configureMail($mail); // Sua função de configuração SMTP

        $mail->addAddress('colegioalianca.midia@gmail.com', 'Admin');
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = "Novo contato | Trabalhe Conosco";
        $mail->Body    = "
            <h3>Detalhes da mensagem de Trabalhe Conosco do site Colégio Aliança</h3>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $phone</p>
            <p><strong>Área:</strong> $area</p>
            <p><strong>Mensagem:</strong><br> $mensagem</p>
        ";

        // Valida e anexa o currículo
        if (isset($_FILES['curriculo']) && $_FILES['curriculo']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['curriculo']['tmp_name'];
            $fileName = $_FILES['curriculo']['name'];
            $fileSize = $_FILES['curriculo']['size'];
            $fileType = $_FILES['curriculo']['type'];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            $allowedExts = ['pdf', 'doc', 'docx'];

            if (in_array($fileExt, $allowedExts)) {
                $mail->addAttachment($fileTmpPath, $fileName);
            } else {
                echo "Tipo de arquivo inválido. Apenas PDF, DOC e DOCX são permitidos.";
                exit;
            }
        } else {
            echo "Erro ao fazer upload do currículo.";
            exit;
        }

        $mail->send();
        echo "OK";
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
} else {
    echo "Método inválido!";
}
?>
