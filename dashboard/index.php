<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get the user's first name from the session
$first_name = $_SESSION['first_name'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $first_name; ?>!</h1>
    <p>You are successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
