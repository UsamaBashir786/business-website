<?php
session_start();
require_once 'config/db.php';  // Database connection

// Check if the user is logged in as an admin (if required)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and retrieve form inputs
    $first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_SPECIAL_CHARS);
    $support_type = filter_var(trim($_POST['support_type']), FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate required fields
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($address) || empty($support_type)) {
        die("All fields are required.");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Insert client data into the database
        $sql = "INSERT INTO clients (first_name, last_name, email, phone, address, support_type) 
                VALUES (:first_name, :last_name, :email, :phone, :address, :support_type)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':support_type', $support_type);
        
        $stmt->execute();

        // Redirect to the clients list or a success page
        header("Location: clients_list.php"); // Redirect to the client list page
        exit();

    } catch (PDOException $e) {
        // Log the error and show a generic message
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your request. Please try again later.");
    }
}
?>
