<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$first_name = $_SESSION['first_name'];
?>
<!doctype html>
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
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login-wrapper">
        <!-- Left Side - Form -->
        <div class="login-form-section">
            <div class="login-form-container">
                <!-- Logo -->
                <div class="login-logo">
                    <a href="index.php">
                        <h1>Evolve Care</h1>
                        <p>Home & Care Solutions</p>
                    </a>
                </div>

                <!-- Header -->
                <div class="login-header">
                    <h2>Welcome Back</h2>
                    <p>Please enter your credentials to continue</p>
                </div>

                <!-- Login Form -->
                <form class="login-form" action="login-process.php" method="POST">
                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="form-input-wrapper">
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input" 
                                placeholder="Enter your email"
                                required
                            />
                            <i class="fas fa-envelope form-icon"></i>
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="form-input-wrapper">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-input" 
                                placeholder="Enter your password"
                                required
                            />
                            <i class="fas fa-lock form-icon"></i>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <i class="fas fa-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Options -->
                    <div class="form-options">
                        <div class="checkbox-wrapper">
                            <input type="checkbox" id="remember" name="remember" />
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-login">
                        Sign In
                    </button>
                </form>

                <!-- Divider -->
                <div class="divider">
                    <span>Or continue with</span>
                </div>

                <!-- Social Login -->
                <div class="social-login">
                    <button type="button" class="btn-social">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                    <button type="button" class="btn-social">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                </div>

                <!-- Signup Link -->
                <div class="signup-link">
                    Don't have an account? <a href="register.php">Sign Up</a>
                </div>
            </div>
        </div>

        <!-- Right Side - Brand -->
        <div class="login-brand-section">
            <div class="brand-content">
                <div class="brand-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h2>Compassionate Care at Your Doorstep</h2>
                <p>Join thousands of families who trust us for reliable, professional home care services.</p>
                <div class="brand-features">
                    <div class="brand-feature">
                        <i class="fas fa-shield-alt"></i>
                        <span>CQC Registered & Fully Compliant</span>
                    </div>
                    <div class="brand-feature">
                        <i class="fas fa-user-check"></i>
                        <span>DBS Checked Professional Staff</span>
                    </div>
                    <div class="brand-feature">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Care Available</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>