<?php
require_once 'config/db.php';  // Database connection

// Check if the user is logged in as an admin (if required)
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

try {
    // Fetch all clients from the database
    $sql = "SELECT * FROM clients";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch the results
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Log the error and show a generic message
    error_log("Error: " . $e->getMessage());
    die("An error occurred while fetching client data.");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clients List | Evolve Home & Care Solutions</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <?php include 'includes/navbar.php' ?>

    <main class="clients-main">
        <h1>Clients List</h1>
        
        <table class="clients-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Support Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($client['id']); ?></td>
                        <td><?php echo htmlspecialchars($client['first_name']); ?></td>
                        <td><?php echo htmlspecialchars($client['last_name']); ?></td>
                        <td><?php echo htmlspecialchars($client['email']); ?></td>
                        <td><?php echo htmlspecialchars($client['phone']); ?></td>
                        <td><?php echo htmlspecialchars($client['support_type']); ?></td>
                        <td>
                            <a href="edit_client.php?id=<?php echo $client['id']; ?>">Edit</a> | 
                            <a href="delete_client.php?id=<?php echo $client['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php include 'includes/footer.php' ?>
</body>
</html>
