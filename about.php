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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            color: var(--text-primary);
            background: var(--bg-primary);
        }

        /* Hero Section */
        .about-hero {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.5;
        }

        .container {
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 var(--spacing-xl);
            position: relative;
            z-index: 2;
        }

        .hero-content {
            text-align: center;
            color: var(--text-white);
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-sm);
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: var(--spacing-sm) var(--spacing-lg);
            border-radius: var(--radius-full);
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            margin-bottom: var(--spacing-lg);
        }

        .hero-content h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--spacing-lg);
            line-height: 1.2;
        }

        .hero-content p {
            font-size: var(--font-size-xl);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.95);
        }

        /* Story Section */
        .our-story-section {
            padding: 100px 0;
            background: var(--bg-primary);
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .story-image {
            position: relative;
        }

        .story-image-main {
            width: 100%;
            height: 500px;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-xl);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--font-size-3xl);
            color: var(--text-white);
            position: relative;
            overflow: hidden;
        }

        .story-image-main::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
        }

        .story-image-main i {
            position: relative;
            z-index: 2;
        }

        .story-floating-card {
            position: absolute;
            bottom: -30px;
            right: -30px;
            background: var(--bg-primary);
            padding: var(--spacing-2xl);
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-2xl);
            border: 1px solid var(--border-light);
            max-width: 250px;
        }

        .story-floating-card h4 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
            margin-bottom: var(--spacing-sm);
        }

        .story-floating-card p {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
            line-height: 1.6;
        }

        .story-text h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-lg);
            line-height: 1.2;
        }

        .story-text p {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: var(--spacing-lg);
        }

        .story-text p:last-child {
            margin-bottom: 0;
        }

        .story-highlight {
            background: var(--bg-overlay-light);
            border-left: 4px solid var(--color-primary);
            padding: var(--spacing-lg);
            border-radius: var(--radius-lg);
            margin: var(--spacing-xl) 0;
        }

        .story-highlight p {
            font-size: var(--font-size-base);
            color: var(--text-primary);
            font-style: italic;
            margin: 0;
        }

        /* Mission Vision Section */
        .mission-vision-section {
            padding: 100px 0;
            background: var(--bg-secondary);
        }

        .section-header {
            text-align: center;
            margin-bottom: var(--spacing-3xl);
        }

        .section-subtitle {
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-semibold);
            color: var(--color-primary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: var(--spacing-sm);
        }

        .section-title {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-md);
        }

        .mission-vision-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--spacing-2xl);
            margin-bottom: var(--spacing-3xl);
        }

        .mission-vision-card {
            background: var(--bg-primary);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-3xl);
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            position: relative;
            overflow: hidden;
        }

        .mission-vision-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light));
        }

        .mv-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            border-radius: var(--radius-2xl);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--spacing-xl);
            box-shadow: var(--shadow-purple);
        }

        .mv-icon i {
            font-size: 36px;
            color: var(--text-white);
        }

        .mission-vision-card h3 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-lg);
        }

        .mission-vision-card p {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            line-height: 1.8;
            font-style: italic;
        }

        .mission-vision-card .quote-mark {
            font-size: 60px;
            color: var(--color-primary);
            opacity: 0.2;
            position: absolute;
            top: 20px;
            right: 30px;
            font-family: Georgia, serif;
        }

        /* Values Section */
        .values-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .values-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots2" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots2)"/></svg>');
        }

        .values-section .container {
            position: relative;
            z-index: 2;
        }

        .values-section .section-header {
            color: var(--text-white);
        }

        .values-section .section-subtitle {
            color: rgba(255, 255, 255, 0.9);
        }

        .values-section .section-title {
            color: var(--text-white);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: var(--spacing-2xl);
        }

        .value-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-3xl);
            transition: all var(--transition-base);
        }

        .value-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-10px);
            box-shadow: var(--shadow-2xl);
        }

        .value-icon {
            width: 90px;
            height: 90px;
            background: var(--color-white);
            border-radius: var(--radius-full);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--spacing-xl);
            box-shadow: var(--shadow-lg);
        }

        .value-icon i {
            font-size: 40px;
            color: var(--color-primary);
        }

        .value-card h3 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-white);
            margin-bottom: var(--spacing-md);
            text-align: center;
        }

        .value-card p {
            font-size: var(--font-size-lg);
            color: rgba(255, 255, 255, 0.95);
            line-height: 1.8;
            text-align: center;
        }

        /* Team Section */
        .team-section {
            padding: 100px 0;
            background: var(--bg-primary);
        }

        .team-intro {
            text-align: center;
            max-width: 800px;
            margin: 0 auto var(--spacing-3xl);
        }

        .team-intro p {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            line-height: 1.8;
        }

        .team-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-2xl);
        }

        .team-feature {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-xl);
            padding: var(--spacing-2xl);
            text-align: center;
            transition: all var(--transition-base);
        }

        .team-feature:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--color-primary);
        }

        .team-feature-icon {
            width: 70px;
            height: 70px;
            background: var(--bg-overlay-light);
            border-radius: var(--radius-xl);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--spacing-lg);
        }

        .team-feature-icon i {
            font-size: 32px;
            color: var(--color-primary);
        }

        .team-feature h4 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-sm);
        }

        .team-feature p {
            font-size: var(--font-size-base);
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background: var(--bg-secondary);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: var(--spacing-2xl);
        }

        .stat-card {
            text-align: center;
            padding: var(--spacing-2xl);
        }

        .stat-number {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
            display: block;
            margin-bottom: var(--spacing-sm);
        }

        .stat-label {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            font-weight: var(--font-weight-medium);
        }

        /* CTA Section */
        .about-cta {
            padding: 100px 0;
            background: var(--bg-primary);
        }

        .cta-box {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            border-radius: var(--radius-2xl);
            padding: 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-box::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="squares" width="50" height="50" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23squares)"/></svg>');
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-content h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-white);
            margin-bottom: var(--spacing-lg);
        }

        .cta-content p {
            font-size: var(--font-size-xl);
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: var(--spacing-2xl);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: var(--spacing-lg);
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            border-radius: var(--radius-lg);
            font-size: var(--font-size-base);
            font-weight: var(--font-weight-semibold);
            text-decoration: none;
            transition: all var(--transition-base);
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-sm);
            border: none;
            cursor: pointer;
        }

        .btn-white {
            background: var(--color-white);
            color: var(--color-primary);
        }

        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }

        .btn-outline {
            background: transparent;
            color: var(--text-white);
            border: 2px solid var(--color-white);
        }

        .btn-outline:hover {
            background: var(--color-white);
            color: var(--color-primary);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .story-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .mission-vision-grid {
                grid-template-columns: 1fr;
            }

            .story-floating-card {
                position: static;
                margin-top: var(--spacing-lg);
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .about-hero {
                padding: 80px 0 60px;
            }

            .our-story-section,
            .mission-vision-section,
            .values-section,
            .team-section {
                padding: 60px 0;
            }

            .cta-box {
                padding: 40px 20px;
            }

            .cta-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .values-grid,
            .team-features {
                grid-template-columns: 1fr;
            }
        }
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
