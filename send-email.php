<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = 'fayasmuhammedhashim7@gmail.com'; // Replace with your email address
    $subject = 'Contact Form Submission';
    $headers = "From: $name <no-reply@example.com>\r\n";
    $headers .= "Reply-To: $name <no-reply@example.com>\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email content
    $email_message = "<html><body>";
    $email_message .= "<h2>Contact Form Submission</h2>";
    $email_message .= "<p><strong>Name:</strong> $name</p>";
    $email_message .= "<p><strong>Message:</strong><br>$message</p>";
    $email_message .= "</body></html>";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
