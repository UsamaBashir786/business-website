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


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            background: var(--bg-secondary);
        }

        /* Login Container */
        .login-wrapper {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        /* Left Side - Form */
        .login-form-section {
            background: var(--bg-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--spacing-2xl);
        }

        .login-form-container {
            width: 100%;
            max-width: 450px;
        }

        .login-logo {
            text-align: center;
            margin-bottom: var(--spacing-2xl);
        }

        .login-logo a {
            text-decoration: none;
        }

        .login-logo h1 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
            margin-bottom: var(--spacing-xs);
        }

        .login-logo p {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
        }

        .login-header {
            text-align: center;
            margin-bottom: var(--spacing-2xl);
        }

        .login-header h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-sm);
        }

        .login-header p {
            font-size: var(--font-size-base);
            color: var(--text-secondary);
        }

        .login-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: var(--spacing-xl);
        }

        .form-label {
            display: block;
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            color: var(--text-primary);
            margin-bottom: var(--spacing-sm);
        }

        .form-input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 0.875rem 1rem;
            padding-left: 3rem;
            font-size: var(--font-size-base);
            color: var(--text-primary);
            background: var(--bg-primary);
            border: 2px solid var(--border-light);
            border-radius: var(--radius-lg);
            transition: all var(--transition-base);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px var(--bg-overlay-light);
        }

        .form-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            font-size: var(--font-size-lg);
        }

        .form-input:focus ~ .form-icon {
            color: var(--color-primary);
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            font-size: var(--font-size-lg);
            padding: var(--spacing-sm);
        }

        .password-toggle:hover {
            color: var(--color-primary);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--spacing-xl);
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--color-primary);
        }

        .checkbox-wrapper label {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
            cursor: pointer;
        }

        .forgot-password {
            font-size: var(--font-size-sm);
            color: var(--color-primary);
            text-decoration: none;
            font-weight: var(--font-weight-medium);
            transition: color var(--transition-base);
        }

        .forgot-password:hover {
            color: var(--color-primary-dark);
        }

        .btn-login {
            width: 100%;
            padding: 1rem;
            font-size: var(--font-size-base);
            font-weight: var(--font-weight-semibold);
            color: var(--text-white);
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            border: none;
            border-radius: var(--radius-lg);
            cursor: pointer;
            transition: all var(--transition-base);
            box-shadow: var(--shadow-purple);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover-purple);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: var(--spacing-2xl) 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid var(--border-light);
        }

        .divider span {
            padding: 0 var(--spacing-md);
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
        }

        .social-login {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-2xl);
        }

        .btn-social {
            padding: 0.875rem;
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            color: var(--text-primary);
            background: var(--bg-primary);
            border: 2px solid var(--border-light);
            border-radius: var(--radius-lg);
            cursor: pointer;
            transition: all var(--transition-base);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--spacing-sm);
        }

        .btn-social:hover {
            border-color: var(--color-primary);
            color: var(--color-primary);
        }

        .signup-link {
            text-align: center;
            font-size: var(--font-size-base);
            color: var(--text-secondary);
        }

        .signup-link a {
            color: var(--color-primary);
            font-weight: var(--font-weight-semibold);
            text-decoration: none;
            transition: color var(--transition-base);
        }

        .signup-link a:hover {
            color: var(--color-primary-dark);
        }

        /* Right Side - Brand */
        .login-brand-section {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--spacing-3xl);
            position: relative;
            overflow: hidden;
        }

        .login-brand-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.5;
        }

        .brand-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--text-white);
            max-width: 500px;
        }

        .brand-icon {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-2xl);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--spacing-2xl);
        }

        .brand-icon i {
            font-size: 48px;
            color: var(--text-white);
        }

        .brand-content h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--spacing-lg);
            line-height: 1.2;
        }

        .brand-content p {
            font-size: var(--font-size-lg);
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: var(--spacing-xl);
        }

        .brand-features {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-md);
            text-align: left;
        }

        .brand-feature {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            padding: var(--spacing-md);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-lg);
        }

        .brand-feature i {
            font-size: 24px;
            color: var(--text-white);
        }

        .brand-feature span {
            font-size: var(--font-size-base);
            color: rgba(255, 255, 255, 0.95);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .login-wrapper {
                grid-template-columns: 1fr;
            }

            .login-brand-section {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .login-form-section {
                padding: var(--spacing-lg);
            }

            .social-login {
                grid-template-columns: 1fr;
            }
        }
    </style>
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