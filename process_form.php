<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data here
    
    // Example: Sending an email
    $to = "savaduYT@gmail.com";
    $subject = "Form Submission";
    $message = "A form was submitted.";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
