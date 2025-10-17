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
    <link rel="stylesheet" href="css/register.css">
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