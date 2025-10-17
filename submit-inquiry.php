<?php
session_start();
require_once 'config/db.php'; // Database connection

// Check if the user is logged in (optional)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve form data
    $full_name = isset($_POST['full_name']) ? filter_var(trim($_POST['full_name']), FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $contact_number = isset($_POST['contact_number']) ? filter_var(trim($_POST['contact_number']), FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $support_for = isset($_POST['support_for']) ? filter_var(trim($_POST['support_for']), FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $address = isset($_POST['address']) ? filter_var(trim($_POST['address']), FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $support_type = isset($_POST['support_type']) ? filter_var(trim($_POST['support_type']), FILTER_SANITIZE_SPECIAL_CHARS) : '';
    $date_required = isset($_POST['date_required']) ? $_POST['date_required'] : '';
    $additional_comments = isset($_POST['additional_comments']) ? filter_var(trim($_POST['additional_comments']), FILTER_SANITIZE_SPECIAL_CHARS) : '';

    // Validate required fields
    if (empty($full_name) || empty($contact_number) || empty($email) || empty($support_for) || empty($address) || empty($support_type) || empty($date_required)) {
        die("All fields marked with * are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Insert form data into the database
        $sql = "INSERT INTO inquiries (full_name, contact_number, email, support_for, address, support_type, date_required, additional_comments) 
                VALUES (:full_name, :contact_number, :email, :support_for, :address, :support_type, :date_required, :additional_comments)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':contact_number', $contact_number);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':support_for', $support_for);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':support_type', $support_type);
        $stmt->bindParam(':date_required', $date_required);
        $stmt->bindParam(':additional_comments', $additional_comments);
        
        $stmt->execute();

        // Send confirmation email (use PHP built-in mail function)
        $subject = "Inquiry Submitted Successfully";
        $message = "Thank you for your inquiry. Our team will get back to you shortly.";
        $headers = "From: no-reply@yourdomain.com";

        // Suppress errors using @ in front of mail function
        @mail($email, $subject, $message, $headers);

        // Redirect to the thank you page
        header("Location: thanks_client.php");
        exit();

    } catch (PDOException $e) {
        // Log error and show generic message
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your request. Please try again later.");
    }
}
?>
