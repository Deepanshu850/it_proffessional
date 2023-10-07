<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize them
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate the form fields
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are no errors, send the email
    if (empty($errors)) {
        $to = "dipanshu23@gmail.com"; // Replace with your own email address

        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'dipanshu23kumar@gmail.com'; // Replace with your SMTP username
            $mail->Password = 'dgpampgt'; // Replace with your SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            // Email sent successfully
            $successMessage = "Thank you for contacting us!";
        } catch (Exception $e) {
            // Error sending email
            $errorMessage = "Oops! Something went wrong. Please try again later.";
            $errorMessage .= " Error details: " . $e->getMessage();
        }
    } else {
        // Form validation errors occurred
        $errorMessage = "Please correct the following errors: " . implode(", ", $errors);
    }
}
