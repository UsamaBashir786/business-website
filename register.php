<!doctype html>
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

        /* Register Container */
        .register-wrapper {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }


        .register-brand-section {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--spacing-3xl);
            position: relative;
            overflow: hidden;
        }

        .register-brand-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
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

        .brand-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--spacing-lg);
            margin-top: var(--spacing-2xl);
        }

        .stat-item {
            text-align: center;
            padding: var(--spacing-lg);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-xl);
        }

        .stat-number {
            display: block;
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-white);
            margin-bottom: var(--spacing-xs);
        }

        .stat-label {
            font-size: var(--font-size-sm);
            color: rgba(255, 255, 255, 0.9);
        }

        /* Right Side - Form */
        .register-form-section {
            background: var(--bg-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: var(--spacing-2xl);
            overflow-y: auto;
        }

        .register-form-container {
            width: 100%;
            max-width: 500px;
            padding: var(--spacing-xl) 0;
        }

        .register-logo {
            text-align: center;
            margin-bottom: var(--spacing-2xl);
        }

        .register-logo a {
            text-decoration: none;
        }

        .register-logo h1 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
            margin-bottom: var(--spacing-xs);
        }

        .register-logo p {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
        }

        .register-header {
            text-align: center;
            margin-bottom: var(--spacing-2xl);
        }

        .register-header h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-sm);
        }

        .register-header p {
            font-size: var(--font-size-base);
            color: var(--text-secondary);
        }

        .register-form {
            width: 100%;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--spacing-lg);
        }

        .form-group {
            margin-bottom: var(--spacing-lg);
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            color: var(--text-primary);
            margin-bottom: var(--spacing-sm);
        }

        .form-label .required {
            color: #ef4444;
        }

        .form-input-wrapper {
            position: relative;
        }

        .form-input,
        .form-select {
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

        .form-select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236b7280' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
        }

        .form-input:focus,
        .form-select:focus {
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

        .form-input:focus ~ .form-icon,
        .form-select:focus ~ .form-icon {
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

        .password-strength {
            margin-top: var(--spacing-sm);
            height: 4px;
            background: var(--bg-secondary);
            border-radius: var(--radius-full);
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            width: 0;
            transition: all var(--transition-base);
            border-radius: var(--radius-full);
        }

        .password-strength-bar.weak {
            width: 33%;
            background: #ef4444;
        }

        .password-strength-bar.medium {
            width: 66%;
            background: #f59e0b;
        }

        .password-strength-bar.strong {
            width: 100%;
            background: #10b981;
        }

        .form-hint {
            font-size: var(--font-size-xs);
            color: var(--text-secondary);
            margin-top: var(--spacing-xs);
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: var(--spacing-sm);
            margin-bottom: var(--spacing-xl);
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: var(--color-primary);
            margin-top: 2px;
            flex-shrink: 0;
        }

        .checkbox-group label {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
            cursor: pointer;
            line-height: 1.5;
        }

        .checkbox-group label a {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: var(--font-weight-medium);
        }

        .checkbox-group label a:hover {
            text-decoration: underline;
        }

        .btn-register {
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

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover-purple);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .btn-register:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: var(--spacing-xl) 0;
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

        .social-register {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-xl);
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

        .login-link {
            text-align: center;
            font-size: var(--font-size-base);
            color: var(--text-secondary);
        }

        .login-link a {
            color: var(--color-primary);
            font-weight: var(--font-weight-semibold);
            text-decoration: none;
            transition: color var(--transition-base);
        }

        .login-link a:hover {
            color: var(--color-primary-dark);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .register-wrapper {
                grid-template-columns: 1fr;
            }

            .register-brand-section {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }

            .register-form-section {
                padding: var(--spacing-lg);
            }

            .social-register {
                grid-template-columns: 1fr;
            }

            .brand-stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="register-wrapper">
        <!-- Left Side - Brand -->
        <div class="register-brand-section">
            <div class="brand-content">
                <div class="brand-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h2>Join Our Care Community</h2>
                <p>Create your account and access professional home care services tailored to your needs.</p>
                
                <div class="brand-stats">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Families</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Years</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="register-form-section">
            <div class="register-form-container">
                <!-- Logo -->
                <div class="register-logo">
                    <a href="index.php">
                        <h1>Evolve Care</h1>
                        <p>Home & Care Solutions</p>
                    </a>
                </div>

                <!-- Header -->
                <div class="register-header">
                    <h2>Create Your Account</h2>
                    <p>Get started with professional home care services</p>
                </div>

                <!-- Register Form -->
                <form class="register-form" action="register-process.php" method="POST">
                    <div class="form-row">
                        <!-- First Name -->
                        <div class="form-group">
                            <label for="first_name" class="form-label">
                                First Name <span class="required">*</span>
                            </label>
                            <div class="form-input-wrapper">
                                <input 
                                    type="text" 
                                    id="first_name" 
                                    name="first_name" 
                                    class="form-input" 
                                    placeholder="John"
                                    required
                                />
                                <i class="fas fa-user form-icon"></i>
                            </div>
                        </div>

                        <!-- Last Name -->
                        <div class="form-group">
                            <label for="last_name" class="form-label">
                                Last Name <span class="required">*</span>
                            </label>
                            <div class="form-input-wrapper">
                                <input 
                                    type="text" 
                                    id="last_name" 
                                    name="last_name" 
                                    class="form-input" 
                                    placeholder="Doe"
                                    required
                                />
                                <i class="fas fa-user form-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">
                            Email Address <span class="required">*</span>
                        </label>
                        <div class="form-input-wrapper">
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input" 
                                placeholder="john.doe@example.com"
                                required
                            />
                            <i class="fas fa-envelope form-icon"></i>
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone" class="form-label">
                                Phone Number <span class="required">*</span>
                            </label>
                            <div class="form-input-wrapper">
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone" 
                                    class="form-input" 
                                    placeholder="+44 1234 567890"
                                    required
                                />
                                <i class="fas fa-phone form-icon"></i>
                            </div>
                        </div>

                        <!-- Account Type -->
                        <div class="form-group">
                            <label for="account_type" class="form-label">
                                Account Type <span class="required">*</span>
                            </label>
                            <div class="form-input-wrapper">
                                <select 
                                    id="account_type" 
                                    name="account_type" 
                                    class="form-select"
                                    required
                                >
                                    <option value="">Select type</option>
                                    <option value="client">Client / Family</option>
                                    <option value="caregiver">Caregiver</option>
                                    <option value="professional">Healthcare Professional</option>
                                </select>
                                <i class="fas fa-user-tag form-icon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">
                            Password <span class="required">*</span>
                        </label>
                        <div class="form-input-wrapper">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-input" 
                                placeholder="Create a strong password"
                                required
                                onkeyup="checkPasswordStrength()"
                            />
                            <i class="fas fa-lock form-icon"></i>
                            <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                <i class="fas fa-eye" id="toggleIcon1"></i>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="password-strength-bar" id="strengthBar"></div>
                        </div>
                        <p class="form-hint">At least 8 characters with uppercase, lowercase, and numbers</p>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirm_password" class="form-label">
                            Confirm Password <span class="required">*</span>
                        </label>
                        <div class="form-input-wrapper">
                            <input 
                                type="password" 
                                id="confirm_password" 
                                name="confirm_password" 
                                class="form-input" 
                                placeholder="Re-enter your password"
                                required
                            />
                            <i class="fas fa-lock form-icon"></i>
                            <button type="button" class="password-toggle" onclick="togglePassword('confirm_password')">
                                <i class="fas fa-eye" id="toggleIcon2"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Terms & Conditions -->
                    <div class="checkbox-group">
                        <input 
                            type="checkbox" 
                            id="terms" 
                            name="terms" 
                            required
                        />
                        <label for="terms">
                            I agree to the <a href="terms.php">Terms & Conditions</a> and <a href="privacy.php">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Newsletter -->
                    <div class="checkbox-group">
                        <input 
                            type="checkbox" 
                            id="newsletter" 
                            name="newsletter"
                        />
                        <label for="newsletter">
                            Send me updates about services, news, and special offers
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-register">
                        Create Account
                    </button>
                </form>

                <!-- Divider -->
                <div class="divider">
                    <span>Or sign up with</span>
                </div>

                <!-- Social Register -->
                <div class="social-register">
                    <button type="button" class="btn-social">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                    <button type="button" class="btn-social">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                </div>

                <!-- Login Link -->
                <div class="login-link">
                    Already have an account? <a href="login.php">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = fieldId === 'password' ? document.getElementById('toggleIcon1') : document.getElementById('toggleIcon2');
            
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

        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBar = document.getElementById('strengthBar');
            
            let strength = 0;
            
            // Check length
            if (password.length >= 8) strength++;
            
            // Check for uppercase
            if (/[A-Z]/.test(password)) strength++;
            
            // Check for lowercase
            if (/[a-z]/.test(password)) strength++;
            
            // Check for numbers
            if (/[0-9]/.test(password)) strength++;
            
            // Check for special characters
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            // Update strength bar
            strengthBar.className = 'password-strength-bar';
            
            if (strength <= 2) {
                strengthBar.classList.add('weak');
            } else if (strength <= 4) {
                strengthBar.classList.add('medium');
            } else {
                strengthBar.classList.add('strong');
            }
        }

        // Form validation
        document.querySelector('.register-form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
                return false;
            }
            
            if (password.length < 8) {
                e.preventDefault();
                alert('Password must be at least 8 characters long!');
                return false;
            }
        });
    </script>
</body>

</html>