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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Get in touch with Evolve Home & Care Solutions. We are here to provide compassionate, reliable care services to help you and your loved ones maintain comfort and independence at home." />
    <meta name="keywords" content="contact us, home care services, support services, elderly care, personal care, medical care, home assistance, contact Evolve Home & Care Solutions" />
    <meta name="author" content="Evolve Home & Care Solutions" />
    
    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="Contact Us | Evolve Home & Care Solutions" />
    <meta property="og:description" content="Contact Evolve Home & Care Solutions for reliable, compassionate home care services. We are committed to supporting individuals and families with their care needs." />
    <meta property="og:image" content="path_to_image.jpg" />
    <meta property="og:url" content="https://www.evolvehomeandcare.com/contact" />

    <title>Contact Us | Evolve Home & Care Solutions</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Page-Specific Styles -->
    <link rel="stylesheet" href="css/contact.css">
    
    <!-- Media Queries for Responsiveness -->
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br><br><br><br>
    <main class="contact-main">
        <!-- Hero Section -->
        <header class="contact-hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-heading">Get in Touch</h1>
                    <p class="hero-lead">We're here to help and answer any questions you may have</p>
                </div>
            </div>
        </header>

        <!-- Contact Info & Form Section -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-grid">
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <h2 class="info-title">Contact Information</h2>
                        <p class="info-description">Reach out to us through any of these channels. We're available to assist you.</p>

                        <div class="info-cards">
                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info-content">
                                    <h3 class="info-label">Phone</h3>
                                    <p class="info-value">+44 (0) 123 456 7890</p>
                                    <p class="info-detail">Mon-Fri, 9am-6pm</p>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="info-content">
                                    <h3 class="info-label">Email</h3>
                                    <p class="info-value">info@evolvecare.co.uk</p>
                                    <p class="info-detail">We'll respond within 24 hours</p>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h3 class="info-label">Address</h3>
                                    <p class="info-value">123 Care Street</p>
                                    <p class="info-detail">Manchester, M1 1AA</p>
                                </div>
                            </div>

                            <div class="info-card">
                                <div class="info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-content">
                                    <h3 class="info-label">Office Hours</h3>
                                    <p class="info-value">Monday - Friday</p>
                                    <p class="info-detail">9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="social-section">
                            <h3 class="social-title">Follow Us</h3>
                            <div class="social-links">
                                <a href="#" class="social-link" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-link" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="form-container">
                        <h2 class="form-title">Send Us a Message</h2>
                        <p class="form-description">Fill out the form below and we'll get back to you as soon as possible.</p>

                        <form class="contact-form" action="/submit-contact.php" method="POST">
                            <div class="form-group">
                                <label for="full-name" class="form-label">Full Name *</label>
                                <input type="text" id="full-name" name="full_name" class="form-input" required>
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-input">
                            </div>

                            <div class="form-group">
                                <label for="subject" class="form-label">Subject *</label>
                                <select id="subject" name="subject" class="form-select" required>
                                    <option value="">Please select a subject</option>
                                    <option value="general-inquiry">General Inquiry</option>
                                    <option value="care-services">Care Services</option>
                                    <option value="career-opportunities">Career Opportunities</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="complaint">Complaint</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Message *</label>
                                <textarea id="message" name="message" class="form-textarea" rows="6" required></textarea>
                            </div>

                            <button type="submit" class="form-submit">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section (Optional) -->
        <section class="map-section">
            <div class="container">
                <h2 class="section-title">Find Us</h2>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2374.4982091701!2d-2.2451148!3d53.4807593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1bcf8a576d5%3A0x6c4b2c5c5c5c5c5c!2sManchester!5e0!3m2!1sen!2suk!4v1234567890123!5m2!1sen!2suk" 
                        width="100%" 
                        height="450" 
                        style="border:0; border-radius: var(--radius-lg);" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>

        <!-- Emergency Contact Section -->
        <section class="emergency-section">
            <div class="container">
                <div class="emergency-card">
                    <div class="emergency-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="emergency-content">
                        <h2 class="emergency-title">Need Urgent Assistance?</h2>
                        <p class="emergency-text">If you require immediate support or have an emergency, please call our 24/7 helpline.</p>
                        <a href="tel:+441234567890" class="emergency-button">
                            <i class="fas fa-phone-alt"></i>
                            Call Emergency Line
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/back-to-top.php'; ?>
    <?php include 'includes/footer.php'; ?>
    
    <script src="js/script.js"></script>
    <script src="js/footer.js"></script>
</body>
</html>