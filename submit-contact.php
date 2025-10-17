<?php
require_once 'config/db.php'; 

// Suppress any warnings or notices during form submission
error_reporting(0); // Disable all errors
ini_set('display_errors', '0'); // Do not display errors on the page

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and retrieve form inputs (using FILTER_SANITIZE_SPECIAL_CHARS instead of FILTER_SANITIZE_STRING)
    $full_name = filter_var(trim($_POST['full_name']), FILTER_SANITIZE_SPECIAL_CHARS); // Fixed sanitization
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_SPECIAL_CHARS); // Fixed sanitization
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_SPECIAL_CHARS); // Fixed sanitization
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_SPECIAL_CHARS); // Fixed sanitization

    // Validate required fields
    if (empty($full_name) || empty($email) || empty($subject) || empty($message)) {
        die("All fields marked with * are required.");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Database insertion (optional)
        $sql = "INSERT INTO contact_messages (full_name, email, phone, subject, message) 
                VALUES (:full_name, :email, :phone, :subject, :message)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        
        // Send email using PHP's built-in mail() function
        $to = "info@evolvecare.co.uk"; // Recipient email
        $subject_line = "New Contact Message: " . $subject;
        $body = "<strong>Name:</strong> $full_name<br><strong>Email:</strong> $email<br><strong>Phone:</strong> $phone<br><strong>Subject:</strong> $subject<br><strong>Message:</strong><br><p>$message</p>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: $email" . "\r\n"; // Set From email to be the sender's email

        // Send email
        if (mail($to, $subject_line, $body, $headers)) {
            // Redirect to thank you page
            header("Location: thanks_contact.php");
            exit();
        } else {
            // Email sending failed but we do not show errors
            header("Location: thanks_contact.php"); // Redirect to thank you page even if email fails
            exit();
        }

    } catch (PDOException $e) {
        // Log the error and show a generic message
        error_log("Error: " . $e->getMessage()); // Log error internally
        header("Location: thanks_contact.php"); // Redirect without showing error
        exit();
    }
}
?>
