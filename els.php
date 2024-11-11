<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    // Настройка SMTP
    $mail->isSMTP();
    $mail->Host = 'elbyrsbusiness@gmail.com';  // Используйте свой SMTP сервер
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';  // Ваш email
    $mail->Password = 'your-email-password';  // Ваш пароль
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Получатель
    $mail->setFrom($email, $name);
    $mail->addAddress('your-email@example.com');  // Ваш email

    // Контент
    $mail->isHTML(true);
    $mail->Subject = "Message from $name";
    $mail->Body    = "You have received a new message from the contact form.<br><br>Name: $name<br>Email: $email<br><br>Message: $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

