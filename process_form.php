<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Compose email message
    $to = "lawrenceseminiano25@gmail.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
