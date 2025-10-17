<?php
session_start();
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    try {
        // Check if the email already exists in the database
        $sql = "SELECT * FROM newsletter_subscribers WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            die("This email is already subscribed.");
        }

        // Insert the email into the database
        $sql = "INSERT INTO newsletter_subscribers (email, date_subscribed) VALUES (:email, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Send the confirmation email (use PHP built-in mail function)
        $subject = "Newsletter Subscription Confirmation";
        $message = "Thank you for subscribing to our newsletter. Stay tuned for the latest updates!";
        $headers = "From: no-reply@yourdomain.com";

        // Suppress errors using @ in front of mail function
        $mail_sent = @mail($email, $subject, $message, $headers);

        // Redirect or show success message based on the result
        if ($mail_sent) {
            // Redirect to the thank you page after successful subscription
            header("Location: newsletter-subscribe.php");
            exit();
        } else {
            // If mail failed, just redirect without error
            header("Location: newsletter-subscribe.php");
            exit();
        }

    } catch (PDOException $e) {
        // Log the error and show a generic message
        error_log("Error: " . $e->getMessage());
        die("An error occurred while processing your subscription. Please try again later.");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Received | Evolve Home & Care Solutions</title>
    <style>
        :root {
            --color-primary: #7B528F;
            --color-primary-light: #9B6FB0;
            --color-gray-100: #f3f4f6;
            --color-gray-600: #4b5563;
            --text-primary: #111827;
            --border-light: #e5e7eb;
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, var(--color-gray-100) 100%);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background: white;
            border: 1px solid var(--border-light);
            border-radius: 16px;
            padding: 50px 40px;
            max-width: 550px;
            text-align: center;
            box-shadow: var(--shadow-lg);
            animation: slideUp 0.5s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
            font-weight: bold;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: var(--text-primary);
        }

        .subtitle {
            color: var(--color-gray-600);
            margin-bottom: 25px;
            line-height: 1.6;
            font-size: 15px;
        }

        .info-box {
            background: var(--color-gray-100);
            border-left: 4px solid var(--color-primary);
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 8px;
            text-align: left;
            font-size: 14px;
        }

        .info-label {
            color: var(--color-gray-600);
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .info-text {
            color: var(--text-primary);
            font-weight: 600;
        }

        .buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .btn-secondary {
            background: var(--color-gray-100);
            color: var(--color-primary);
            border: 2px solid var(--color-primary);
        }

        .btn-secondary:hover {
            background: var(--color-primary);
            color: white;
        }

        @media (max-width: 600px) {
            .card {
                padding: 40px 25px;
            }

            h1 {
                font-size: 22px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .info-box {
                text-align: center;
                border-left: none;
                border-top: 4px solid var(--color-primary);
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">✓</div>
        <h1>Subscription Received!</h1>
        <p class="subtitle">Thank you for subscribing to our newsletter. You’ll be receiving the latest updates and offers soon!</p>
        
        <div class="info-box">
            <div class="info-label">What Happens Next?</div>
            <div class="info-text">Please check your email for a confirmation message. Stay tuned for exciting updates!</div>
        </div>

        <div class="buttons">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
            <a href="careers.php" class="btn btn-secondary">Explore Career Opportunities</a>
        </div>
    </div>
</body>
</html>

