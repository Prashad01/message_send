<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set the recipient email address
    $to = 'prashadnath15@gmail.com';
    
    // Subject
    $subject = 'New Message from Website Contact Form';
    
    // Message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
} else {
    // If not a POST request, redirect back to the form
    header("Location: index.html");
}
?>
