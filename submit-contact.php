<?php
// Include database connection
require_once 'config/db.php'; // Make sure this file contains your PDO connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and retrieve form inputs
    $full_name = filter_var(trim($_POST['full_name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    // Validate required fields
    if (empty($full_name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields marked with * are required.");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Database insertion
        $sql = "INSERT INTO contact_messages (full_name, email, phone, subject, message) 
                VALUES (:full_name, :email, :phone, :subject, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        
        // Email sending (adjust the email address)
        $to = "info@evolvecare.co.uk"; // The email to which messages will be sent
        $subject_line = "New Contact Message: " . $subject;
        $body = "<strong>Name:</strong> $full_name<br><strong>Email:</strong> $email<br><strong>Phone:</strong> $phone<br><strong>Subject:</strong> $subject<br><strong>Message:</strong><br><p>$message</p>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: $email" . "\r\n";

        // Send email
        if (mail($to, $subject_line, $body, $headers)) {
            // Redirect to a thank you page
            header("Location: thanks_contact.php");
            exit();
        } else {
            die("An error occurred while sending your message. Please try again later.");
        }

    } catch (PDOException $e) {
        // Log the error and show a generic message
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your message. Please try again later.");
    }
}
?>
