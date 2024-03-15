<?php
if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    $to = "lawrenceseminiano25@gmail.com"; 
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";
    mail($to, $subject, $body, $headers);

   
    header("Location: contact.php?message=sent");
    exit();
}
?>
