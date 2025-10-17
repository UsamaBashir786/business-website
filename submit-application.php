<?php
session_start();
require_once 'config/db.php';  
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $full_name = htmlspecialchars(trim($_POST['full_name']));  
    $date_of_birth = $_POST['date_of_birth']; 
    $contact_number = htmlspecialchars(trim($_POST['contact_number']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL); 
    $current_address = htmlspecialchars(trim($_POST['current_address']));
    $availability = htmlspecialchars(trim($_POST['availability']));
    $uk_eligible = $_POST['uk_eligible'];
    $visa_sponsorship = $_POST['visa_sponsorship'];
    $driving_licence = $_POST['driving_licence'];

    if (empty($full_name) || empty($date_of_birth) || empty($contact_number) || empty($email) || empty($current_address) || empty($availability) || empty($uk_eligible) || empty($visa_sponsorship) || empty($driving_licence)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $date = DateTime::createFromFormat('Y-m-d', $date_of_birth);
    if (!$date || $date->format('Y-m-d') !== $date_of_birth) {
        die("Invalid date format for Date of Birth. Please use YYYY-MM-DD format.");
    }

    try {
        $sql = "INSERT INTO career_applications (full_name, date_of_birth, contact_number, email, current_address, availability, uk_eligible, visa_sponsorship, driving_licence) 
                VALUES (:full_name, :date_of_birth, :contact_number, :email, :current_address, :availability, :uk_eligible, :visa_sponsorship, :driving_licence)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':date_of_birth', $date_of_birth);
        $stmt->bindParam(':contact_number', $contact_number);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':current_address', $current_address);
        $stmt->bindParam(':availability', $availability);
        $stmt->bindParam(':uk_eligible', $uk_eligible);
        $stmt->bindParam(':visa_sponsorship', $visa_sponsorship);
        $stmt->bindParam(':driving_licence', $driving_licence);
        
        $stmt->execute();

        header("Location: thanks_career.php"); 
        exit();

    } catch (PDOException $e) {
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your application. Please try again later.");
    }
}
?>
