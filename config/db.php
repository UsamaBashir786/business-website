<?php
$host = 'localhost';
$dbname = 'evolve_home_care';
$username = 'root';
$password = '';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $pdo = new PDO($dsn, $username, $password, $options);
    // echo "Connected to the database successfully!";

} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Connection failed. Please try again later.");
}
?>
