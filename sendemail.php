<?php
// Set email-related configurations
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "kalepratik0019@gmail.com");

$status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address where you want to receive the contact form submissions.
    $to = "kalepratik0019@gmail.com";
    
    // Set the subject for the email.
    $subject = "Contact Form Submission from $name";
    
    // Compose the message.
    $message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Set the headers.
    $headers = "From: $email";
    
    // Send the email.
    if (mail($to, $subject, $message, $headers)) {
        $status = "success";
    } else {
        $status = "error";
    }
}

// Redirect back to the contact page with a status message.
header("Location: contact.html?status=" . $status);
?>
