<?php
session_start(); // Start session to store user data

// Include database connection
require_once 'config/db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize and retrieve user inputs
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Check if the required fields are empty
    if (empty($email) || empty($password)) {
        die("Both email and password are required.");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Prepare SQL query to fetch the user by email
        $sql = "SELECT id, first_name, last_name, email, password, account_type FROM users WHERE email = :email LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Fetch the user record
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Start session and store user info
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['account_type'] = $user['account_type'];

                // Redirect to dashboard or any other page
                header("Location: index.php");
                exit();
            } else {
                die("Invalid password. Please try again.");
            }
        } else {
            die("No user found with this email address.");
        }
    } catch (PDOException $e) {
        // Log the error and show a generic message
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your login. Please try again later.");
    }

} else {
    // Redirect if the page is accessed directly without form submission
    header("Location: login.php");
    exit();
}
?>
