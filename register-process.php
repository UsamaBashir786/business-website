<?php
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and validate inputs
    $first_name = filter_var(trim($_POST['first_name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_SPECIAL_CHARS);
    $account_type = filter_var(trim($_POST['account_type']), FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the required fields are empty
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($account_type) || empty($password) || empty($confirm_password)) {
        die("All fields are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Validate password strength (at least 8 characters)
    if (strlen($password) < 8) {
        die("Password must be at least 8 characters long.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    try {
        // Prepare SQL query to insert data
        $sql = "INSERT INTO users (first_name, last_name, email, phone, account_type, password) 
                VALUES (:first_name, :last_name, :email, :phone, :account_type, :password)";
        
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':account_type', $account_type);
        $stmt->bindParam(':password', $hashed_password);

        // Execute the query
        $stmt->execute();

        // Redirect to the thank you page after successful registration
        header("Location: thank_you.php");
        exit();

    } catch (PDOException $e) {
        // Log the error to a secure location and show a generic message to the user
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your registration. Please try again later.");
    }
} else {
    // Redirect if accessed directly without form submission
    header("Location: register.php");
    exit();
}
?>
