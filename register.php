<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Register for Care Services at Evolve Home & Care Solutions. Create an account and start managing your care needs." />
    <meta name="keywords" content="register, create account, Evolve Home & Care Solutions, caregiver registration" />
    <meta name="author" content="Evolve Home & Care Solutions">
    
    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="Register - Care Services | Evolve Home & Care Solutions" />
    <meta property="og:description" content="Create an account to access and manage care services at Evolve Home & Care Solutions." />
    <meta property="og:image" content="path_to_image.jpg" />
    <meta property="og:url" content="https://www.evolvehomeandcare.com/register" />

    <title>Register - Care Services</title>

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

        <!-- Register Form -->
        <div class="form-box active" id="registerForm">
            <div class="form-header">
                <h1 class="form-title">Create Account</h1>
                <p class="form-subtitle">
                    Already have an account? <a href="login.html">Sign in</a>
                </p>
            </div>

            <form onsubmit="handleRegister(event)">
                <div class="name-row">
                    <div class="form-group">
                        <label class="form-label" for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-input" placeholder="John" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="lastName">Last Name</label>
                        <input type="text" id="lastName" class="form-input" placeholder="Doe" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" class="form-input" placeholder="your@email.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="registerPhone">Phone Number</label>
                    <input type="tel" id="registerPhone" class="form-input" placeholder="+1 (555) 000-0000" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="registerPassword">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="registerPassword" class="form-input" placeholder="Create password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('registerPassword')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="confirmPassword" class="form-input" placeholder="Confirm password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="checkbox-wrapper" style="margin-bottom: 1.5rem;">
                    <input type="checkbox" id="agreeTerms" required>
                    <label class="checkbox-label" for="agreeTerms">
                        I agree to the <a href="#" style="color: #7c3aed; text-decoration: none;">Terms & Conditions</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">
                    Create Account
                </button>

                <p class="terms-text">
                    By signing up, you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
