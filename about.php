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
    <meta name="description" content="Learn about Evolve Home & Care Solutions - our mission, vision, values, and commitment to providing compassionate, client-centered care services." />
    <meta name="keywords" content="about us, care company, mission, vision, values, home care team" />
    <title>About Us | Evolve Home & Care Solutions</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Global Styles -->
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/about.css">

    <style>

    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <br>
    <br>
    <br>
    <br>
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-heart"></i>
                    People-Focused Care
                </div>
                <h1>About Evolve Home & Care Solutions</h1>
                <p>Where compassion meets excellence in home care services</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="our-story-section">
        <div class="container">
            <div class="story-content">
                <div class="story-image">
                    <div class="story-image-main">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="story-floating-card">
                        <h4>Client-Centered</h4>
                        <p>We prioritize your needs, comfort, and wellbeing in everything we do</p>
                    </div>
                </div>

                <div class="story-text">
                    <h2>Our Focus is on People</h2>
                    <p>
                        At Evolve Home and Care Solutions, our focus is on people. We are client-centered and family-oriented, dedicated to providing support that makes daily life easier and more fulfilling.
                    </p>
                    <p>
                        We recognize that in today's fast-paced world, balancing professional and personal commitments can leave little time for managing household responsibilities or providing consistent care for vulnerable and loved ones. That's where we step in—to provide reliable, high-quality assistance that eases pressure, gives you peace of mind, and helps you maintain a higher standard of living.
                    </p>
                    <div class="story-highlight">
                        <p>
                            From everyday household tasks, move out/end of tenancy assistance to extra help before or after special events/occasions, our experienced team are ready to step in. Friendly, approachable, caring and hardworking, we take pride in prioritizing your needs and ensuring your comfort and well-being.
                        </p>
                    </div>
                    <p>
                        Being a diverse team gives us the insight and flexibility to meet our clients' needs with cultural sensitivity and understanding.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Years of Experience</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Families Served</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Care Available</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">DBS Checked Staff</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Our Purpose</div>
                <h2 class="section-title">Mission & Vision</h2>
            </div>

            <div class="mission-vision-grid">
                <div class="mission-vision-card">
                    <span class="quote-mark">"</span>
                    <div class="mv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>
                        Our mission is to care for every client as they are family—offering comfort, companionship, and support that nurtures both the heart and home. We strive to create meaningful connections while promoting independence, dignity, and peace of mind for loved ones.
                    </p>
                </div>

                <div class="mission-vision-card">
                    <span class="quote-mark">"</span>
                    <div class="mv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>
                        To be the leading provider of trusted home and care services, recognized for setting the standard in dedication, quality and compassion, while empowering individuals to live and enjoy their lives stress-free in the comfort of their own homes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">What We Stand For</div>
                <h2 class="section-title">Our Core Values</h2>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community</h3>
                    <p>
                        We value diversity and honor the cultural, spiritual, and personal needs of individuals, families, and communities.
                    </p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Trust</h3>
                    <p>
                        We build relationships with honesty, reliability, and confidentiality at every step of our journey together.
                    </p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Compassion</h3>
                    <p>
                        We care with empathy, kindness, and respect, treating every client as a valued member of our family.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Our Team</div>
                <h2 class="section-title">What Makes Us Different</h2>
            </div>

            <div class="team-intro">
                <p>
                    Our diverse, experienced team brings together a wealth of knowledge, cultural understanding, and genuine compassion to deliver exceptional care services tailored to your unique needs.
                </p>
            </div>

            <div class="team-features">
                <div class="team-feature">
                    <div class="team-feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4>Experienced Professionals</h4>
                    <p>Highly trained and qualified care specialists with years of expertise</p>
                </div>

                <div class="team-feature">
                    <div class="team-feature-icon">
                        <i class="fas fa-smile"></i>
                    </div>
                    <h4>Friendly & Approachable</h4>
                    <p>Warm, caring individuals who prioritize your comfort and happiness</p>
                </div>

                <div class="team-feature">
                    <div class="team-feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>Diverse Team</h4>
                    <p>Cultural sensitivity and flexibility to meet all clients' needs</p>
                </div>

                <div class="team-feature">
                    <div class="team-feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Fully Certified</h4>
                    <p>DBS checked, CQC registered, and regularly trained professionals</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-cta">
        <div class="container">
            <div class="cta-box">
                <div class="cta-content">
                    <h2>Ready to Experience Compassionate Care?</h2>
                    <p>
                        Join the hundreds of families who trust us for reliable, professional home care services. Contact us today for a free consultation.
                    </p>
                    <div class="cta-buttons">
                        <a href="clients.php" class="btn btn-white">
                            <i class="fas fa-phone"></i>
                            Get in Touch
                        </a>
                        <a href="services.php" class="btn btn-outline">
                            <i class="fas fa-concierge-bell"></i>
                            View Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <?php include 'includes/back-to-top.php'; ?>

    <!-- Footer Section -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="js/script.js"></script>
    <script src="js/footer.js"></script>

    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Animate cards on scroll
                document.querySelectorAll('.value-card, .team-feature').forEach((element) => {
            observer.observe(element);
        });
    </script>

</body>

</html>
