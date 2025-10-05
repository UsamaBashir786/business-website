<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Login to Evolve Home & Care Solutions and manage your care requests and account information securely." />
    <meta name="keywords" content="login, secure login, account management, Evolve Home & Care Solutions" />
    <meta name="author" content="Evolve Home & Care Solutions">
    
    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="Login - Care Services | Evolve Home & Care Solutions" />
    <meta property="og:description" content="Login to manage your care requests securely at Evolve Home & Care Solutions." />
    <meta property="og:image" content="path_to_image.jpg" />
    <meta property="og:url" content="https://www.evolvehomeandcare.com/login" />

    <title>Login - Care Services</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Global Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/variables.css">
    
    <!-- Page-Specific Styles -->
    <link rel="stylesheet" href="css/login-register.css">
</head>
<body>
    <div class="auth-container">
        <!-- Logo -->
        <div class="auth-logo">
            <a href="#" class="logo-icon">
                <i class="fas fa-heart-pulse"></i>
                <span>Care Services</span>
            </a>
        </div>

        <!-- Login Form -->
        <div class="form-box active" id="loginForm">
            <div class="form-header">
                <h1 class="form-title">Sign In</h1>
                <p class="form-subtitle">
                    Don't have an account? <a href="register.html">Sign up</a>
                </p>
            </div>

            <form onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label class="form-label" for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" class="form-input" placeholder="your@email.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="loginPassword">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="loginPassword" class="form-input" placeholder="Enter password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('loginPassword')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="checkbox-group">
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="rememberMe">
                        <label class="checkbox-label" for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-primary">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>
