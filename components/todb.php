<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

include '../config/db.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "Please use a valid email";
        } else {
            $sql = "INSERT INTO jv.new_table (name, email, phone, subject, message)
                VALUES (:name, :email, :phone, :subject, :message)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':phone', $phone);
            $stmt->bindValue(':subject', $subject);
            $stmt->bindValue(':message', $message);

            $stmt->execute();
            $mail = new PHPMailer(true);

            //Server settings
//            $mail->SMTPDebug = 4;
            $mail->isSMTP();
            $mail->Host = getenv('SMTP_ADDRESS');
            $mail->Port = getenv('SMTP_PORT');
            $mail->SMTPAuth = true;
            $mail->Username = getenv('SMTP_USERNAME');
            $mail->Password = getenv('SMTP_PASSWORD');
            $mail->SMTPSecure = getenv('SMTP_SECURE');

            //Recipients
            $mail->setFrom(getenv('MAIL'), 'From website');
            $mail->addAddress(getenv('MAIL'));
            $mail->Subject = $subject;

            // Content
            $mail->isHTML(true);
            $mail->Body = "
            <h3>Отзыв с сайта</h3>
            <p><b>Имя: $name</b></p>
            <p><b>Телефон: $phone</b></p>
            <p><b>Текст: $message</b></p>
            ";
            $mail->send();
            header('Location:' . '/success');
        }
    } else {
        $msg = "Please fill all fields with: '*'";
    }

}

