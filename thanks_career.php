<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Received | Evolve Home & Care Solutions</title>
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
        <h1>Application Received!</h1>
        <p class="subtitle">Thank you for applying to Evolve Home & Care Solutions. We appreciate your interest in joining our team.</p>
        
        <div class="info-box">
            <div class="info-label">What happens next?</div>
            <div class="info-text">Our HR team will review your application and contact you within 5-7 business days.</div>
        </div>

        <div class="buttons">
            <a href="careers.php" class="btn btn-primary">View Other Positions</a>
            <a href="index.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</body>
</html>