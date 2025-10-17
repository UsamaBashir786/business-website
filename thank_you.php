<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
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
            max-width: 500px;
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
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
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
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">✓</div>
        <h1>Registration Successful!</h1>
        <p class="subtitle">Your account has been created successfully. You're all set to get started.</p>
        
        <div class="buttons">
            <a href="login.php" class="btn btn-primary">Go to Login</a>
            <a href="dashboard.php" class="btn btn-secondary">Dashboard</a>
        </div>
    </div>
</body>
</html>