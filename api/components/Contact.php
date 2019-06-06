<?php
require_once '../config/db.php';

$msg = "";

if(filter_has_var(INPUT_POST, 'submit')){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $msg = "Please use a valid email";
        } else {
            $sql = "INSERT INTO sys.ContactForm (name, email, phone, subject, message)
                VALUES (:name, :email, :phone, :subject, :message)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':phone', $phone);
            $stmt->bindValue(':subject', $subject);
            $stmt->bindValue(':message', $message);

            $stmt->execute();
        }
    } else {
        $msg = "Please fill all fields with: '*'";
    }

}
