<?php
session_start();
require_once 'config/db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
try {
    $sql = "SELECT * FROM career_applications ORDER BY date_added DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $applications = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error: " . $e->getMessage());
    die("An error occurred while fetching applications. Please try again later.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Applications - Evolve Home & Care Solutions</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    
    <main class="career-list-main">
        <div class="container">
            <h1>Career Applications</h1>
            <p>Below are all the career applications submitted to Evolve Home & Care Solutions.</p>

            <table class="career-applications-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Support Type</th>
                        <th>Availability</th>
                        <th>Date Applied</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($applications) > 0): ?>
                        <?php foreach ($applications as $application): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($application['id']); ?></td>
                                <td><?php echo htmlspecialchars($application['full_name']); ?></td>
                                <td><?php echo htmlspecialchars($application['email']); ?></td>
                                <td><?php echo htmlspecialchars($application['contact_number']); ?></td>
                                <td><?php echo htmlspecialchars($application['support_type']); ?></td>
                                <td><?php echo htmlspecialchars($application['availability']); ?></td>
                                <td><?php echo htmlspecialchars($application['date_added']); ?></td>
                                <td>
                                    <a href="view-application.php?id=<?php echo htmlspecialchars($application['id']); ?>" class="btn btn-view">View</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8">No applications found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
