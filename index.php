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
    <meta name="description" content="Evolve Home & Care Solutions provides compassionate, reliable, and flexible care services at home. Our services range from personal care, medical care, specialist care to companionship and social support." />
    <meta name="keywords" content="home care services, elderly care, personal care, companionship services, medical care, home support services, dementia care, palliative care, respite care, flexible care packages" />
    <meta name="author" content="Evolve Home & Care Solutions" />
    <meta property="og:title" content="Clients | Evolve Home & Care Solutions" />
    <meta property="og:description" content="Evolve Home & Care Solutions offers tailored care services to support independence, dignity, and comfort at home for you or your loved ones." />
    <meta property="og:image" content="path_to_image.jpg" />
    <meta property="og:url" content="https://www.evolvehomeandcare.com/clients" />
    <title>Clients | Evolve Home & Care Solutions</title>

    <!-- ****************** Font Awesome CSS ****************** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- ****************** Global Styles ****************** -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/variables.css">

    <!-- ****************** Navbar and Footer Styles ****************** -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- ****************** Media Queries for Responsiveness ****************** -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- ****************** Page-Specific Styles ****************** -->
    <link rel="stylesheet" href="css/clients.css"> <!-- Clients Page -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            color: var(--text-primary);
        }

        .hero-section {
            position: relative;
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            background: var(--bg-primary);
            overflow: hidden;
        }

        .hero-left {
            padding: 0 80px;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-sm);
            background: var(--bg-overlay-light);
            color: var(--color-primary);
            padding: var(--spacing-sm) var(--spacing-lg);
            border-radius: var(--radius-full);
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            margin-bottom: var(--spacing-xl);
        }

        .hero-left h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            line-height: 1.1;
            margin-bottom: var(--spacing-lg);
        }

        .hero-left h1 .highlight {
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-left p {
            font-size: var(--font-size-xl);
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: var(--spacing-2xl);
            max-width: 550px;
        }

        .hero-buttons {
            display: flex;
            gap: var(--spacing-lg);
            margin-bottom: var(--spacing-3xl);
        }

        .btn {
            padding: 1rem 2.5rem;
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

        .btn-primary {
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            color: var(--text-white);
            box-shadow: var(--shadow-purple);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover-purple);
        }

        .btn-secondary {
            background: var(--bg-primary);
            color: var(--text-primary);
            border: 2px solid var(--border-medium);
        }

        .btn-secondary:hover {
            border-color: var(--color-primary);
            color: var(--color-primary);
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: var(--spacing-xl);
        }

        .stat-item {
            text-align: left;
        }

        .stat-number {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
            display: block;
            margin-bottom: var(--spacing-xs);
        }

        .stat-label {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
        }

        .hero-right {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-right::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        }

        .hero-image-wrapper {
            position: relative;
            z-index: 2;
            width: 80%;
            height: 70%;
            background: var(--color-white);
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-2xl);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--font-size-4xl);
            color: var(--color-gray-300);
        }

        /* Services Section - Card Grid */
        .services-section {
            padding: 120px 0;
            background: var(--bg-secondary);
        }

        .container {
            max-width: var(--container-max-width);
            margin: 0 auto;
            padding: 0 var(--spacing-xl);
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
            font-size: var(--font-size-4xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-md);
        }

        .section-description {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: var(--spacing-xl);
        }

        .service-card {
            background: var(--bg-primary);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-2xl);
            transition: all var(--transition-base);
            border: 1px solid var(--border-light);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: linear-gradient(180deg, var(--color-primary), var(--color-primary-light));
            transition: height var(--transition-base);
        }

        .service-card:hover::before {
            height: 100%;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--color-primary);
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            border-radius: var(--radius-xl);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--spacing-lg);
            box-shadow: var(--shadow-purple);
        }

        .service-icon i {
            font-size: 28px;
            color: var(--text-white);
        }

        .service-card h3 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-md);
        }

        .service-card p {
            font-size: var(--font-size-base);
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: var(--spacing-lg);
        }

        .service-link {
            color: var(--color-primary);
            font-weight: var(--font-weight-semibold);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-sm);
            transition: gap var(--transition-base);
        }

        .service-link:hover {
            gap: var(--spacing-md);
        }

        /* About Section - Split Layout */
        .about-section {
            padding: 120px 0;
            background: var(--bg-primary);
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-image {
            position: relative;
        }

        .about-image-main {
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
        }

        .about-stats-box {
            position: absolute;
            bottom: -30px;
            right: -30px;
            background: var(--bg-primary);
            padding: var(--spacing-2xl);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-2xl);
            border: 1px solid var(--border-light);
        }

        .about-stats-box h4 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
            margin-bottom: var(--spacing-xs);
        }

        .about-stats-box p {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
        }

        .about-text h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-lg);
            line-height: 1.2;
        }

        .about-text p {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: var(--spacing-xl);
        }

        .about-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--spacing-lg);
            margin-bottom: var(--spacing-2xl);
        }

        .about-feature {
            display: flex;
            align-items: flex-start;
            gap: var(--spacing-md);
        }

        .about-feature-icon {
            width: 40px;
            height: 40px;
            background: var(--bg-overlay-light);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primary);
            flex-shrink: 0;
        }

        .about-feature-text h4 {
            font-size: var(--font-size-base);
            font-weight: var(--font-weight-semibold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-xs);
        }

        .about-feature-text p {
            font-size: var(--font-size-sm);
            color: var(--text-secondary);
            margin: 0;
        }

        /* Values Section - Icon Cards */
        .values-section {
            padding: 120px 0;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .values-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
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

        .values-section .section-description {
            color: rgba(255, 255, 255, 0.9);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: var(--spacing-2xl);
        }

        .value-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-2xl);
            text-align: center;
            transition: all var(--transition-base);
        }

        .value-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-8px);
            box-shadow: var(--shadow-2xl);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            background: var(--color-white);
            border-radius: var(--radius-full);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto var(--spacing-lg);
            box-shadow: var(--shadow-lg);
        }

        .value-icon i {
            font-size: 32px;
            color: var(--color-primary);
        }

        .value-card h3 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-white);
            margin-bottom: var(--spacing-md);
        }

        .value-card p {
            font-size: var(--font-size-base);
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.7;
        }

        /* Why Choose Section - Alternating Layout */
        .why-choose-section {
            padding: 120px 0;
            background: var(--bg-secondary);
        }

        .feature-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            margin-bottom: 100px;
        }

        .feature-row:last-child {
            margin-bottom: 0;
        }

        .feature-row.reverse {
            direction: rtl;
        }

        .feature-row.reverse > * {
            direction: ltr;
        }

        .feature-visual {
            position: relative;
        }

        .feature-number {
            position: absolute;
            top: -20px;
            left: -20px;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            border-radius: var(--radius-full);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-white);
            box-shadow: var(--shadow-purple-lg);
            z-index: 2;
        }

        .feature-box {
            width: 100%;
            height: 350px;
            background: var(--bg-primary);
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--font-size-2xl);
            color: var(--color-gray-300);
        }

        .feature-content h3 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-lg);
        }

        .feature-content p {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: var(--spacing-xl);
        }

        .feature-list {
            list-style: none;
        }

        .feature-list li {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            font-size: var(--font-size-base);
            color: var(--text-secondary);
            margin-bottom: var(--spacing-md);
        }

        .feature-list li i {
            color: var(--color-primary);
            font-size: 18px;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 120px 0;
            background: var(--bg-primary);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: var(--spacing-2xl);
        }

        .testimonial-card {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-2xl);
            transition: all var(--transition-base);
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--color-primary);
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: var(--spacing-lg);
            margin-bottom: var(--spacing-lg);
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            border-radius: var(--radius-full);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-white);
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-bold);
            flex-shrink: 0;
        }

        .testimonial-info h4 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-xs);
        }

        .testimonial-stars {
            color: #fbbf24;
            font-size: var(--font-size-sm);
        }

        .testimonial-text {
            font-size: var(--font-size-base);
            color: var(--text-secondary);
            line-height: 1.7;
            font-style: italic;
        }

        /* CTA Section */
        .cta-section {
            padding: 120px 0;
            background: var(--bg-secondary);
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
            font-size: var(--font-size-4xl);
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
            .hero-section {
                grid-template-columns: 1fr;
            }

            .hero-right {
                display: none;
            }

            .hero-left {
                padding: 80px 40px;
            }

            .about-content,
            .feature-row {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .feature-row.reverse {
                direction: ltr;
            }

            .hero-stats {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hero-left {
                padding: 60px 20px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: var(--spacing-lg);
            }

            .services-grid,
            .values-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .about-features {
                grid-template-columns: 1fr;
            }

            .cta-box {
                padding: 40px 20px;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .about-stats-box {
                position: static;
                margin-top: var(--spacing-lg);
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    
    <div class="d-theme-none">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-left">
            <div class="hero-badge">
                <i class="fas fa-award"></i>
                CQC Registered & Fully Compliant
            </div>
            <h1>
                Professional Care in the <span class="highlight">Comfort of Your Home</span>
            </h1>
            <p>
                Compassionate, reliable, and flexible services designed to support independence, dignity, and comfort for you and your loved ones.
            </p>
            <div class="hero-buttons">
                <a href="clients.php" class="btn btn-primary">
                    Get Started Today
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="services.php" class="btn btn-secondary">
                    Explore Services
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Care Available</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">DBS Checked</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-image-wrapper">
                <i class="fas fa-image"></i>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Our Services</div>
                <h2 class="section-title">Comprehensive Care Solutions</h2>
                <p class="section-description">
                    From daily assistance to specialized medical care, we provide a full range of services tailored to your unique needs
                </p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Home Support Services</h3>
                    <p>Housekeeping, meal planning, grocery shopping, and daily errands to keep your home running smoothly.</p>
                    <a href="services.php#home-support" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>Companionship Support</h3>
                    <p>Friendly conversations, outings, and activities to prevent loneliness and promote wellbeing.</p>
                    <a href="services.php#companionship" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Personal Care</h3>
                    <p>Assistance with bathing, dressing, grooming, mobility, and all daily personal care needs.</p>
                    <a href="services.php#personal-care" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Medical Care</h3>
                    <p>Professional medical support including wound care, vital monitoring, and medication management.</p>
                    <a href="services.php#medical-care" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Specialist Care</h3>
                    <p>Expert care for dementia, stroke recovery, palliative care, and respite support.</p>
                    <a href="services.php#specialist-care" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>24/7 Live-In Care</h3>
                    <p>Round-the-clock support, transportation, wellness checks, and continuous care whenever needed.</p>
                    <a href="services.php#additional-support" class="service-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <div class="about-image-main">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="about-stats-box">
                        <h4>500+</h4>
                        <p>Families Served</p>
                    </div>
                </div>
                <div class="about-text">
                    <div class="section-subtitle">About Us</div>
                    <h2>Client-Centered, Family-Oriented Care Solutions</h2>
                    <p>
                        At Evolve Home and Care Solutions, our focus is on people. We recognize that balancing professional and personal commitments can leave little time for managing household responsibilities or providing consistent care for vulnerable and loved ones.
                    </p>
                    <div class="about-features">
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="about-feature-text">
                                <h4>Experienced Team</h4>
                                <p>Friendly, approachable, and hardworking professionals</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="about-feature-text">
                                <h4>Diverse Expertise</h4>
                                <p>Cultural sensitivity and flexibility to meet all needs</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="about-feature-text">
                                <h4>Quality Assured</h4>
                                <p>CQC registered and fully compliant services</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="about-feature-text">
                                <h4>Peace of Mind</h4>
                                <p>Reliable support you can trust</p>
                            </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary">
                        Learn More About Us
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Our Core Values</div>
                <h2 class="section-title">What Drives Us Every Day</h2>
                <p class="section-description">
                    The principles that guide everything we do and every decision we make
                </p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community</h3>
                    <p>We value diversity and honor the cultural, spiritual, and personal needs of individuals, families, and communities.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Trust</h3>
                    <p>We build relationships with honesty, reliability, and confidentiality at every step of our journey together.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Compassion</h3>
                    <p>We care with empathy, kindness, and respect, treating every client as a valued member of our family.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Why Choose Us</div>
                <h2 class="section-title">What Makes Us Different</h2>
                <p class="section-description">
                    Dedicated to providing exceptional care with professionalism and heart
                </p>
            </div>

            <div class="feature-row">
                <div class="feature-visual">
                    <div class="feature-number">01</div>
                    <div class="feature-box">
                        <i class="fas fa-user-shield"></i>
                    </div>
                </div>
                <div class="feature-content">
                    <h3>Trained & Qualified Professionals</h3>
                    <p>
                        Every member of our team is thoroughly vetted, professionally trained, and committed to delivering the highest standards of care.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> All staff DBS checked and verified</li>
                        <li><i class="fas fa-check-circle"></i> Regular training in first aid and safeguarding</li>
                        <li><i class="fas fa-check-circle"></i> CQC registered and fully compliant</li>
                        <li><i class="fas fa-check-circle"></i> Ongoing professional development</li>
                    </ul>
                </div>
            </div>

            <div class="feature-row reverse">
                <div class="feature-visual">
                    <div class="feature-number">02</div>
                    <div class="feature-box">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </div>
                <div class="feature-content">
                    <h3>Flexible Care Packages</h3>
                    <p>
                        We understand that everyone's needs are different. That's why we offer fully customizable care packages to suit your schedule and requirements.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> From a few hours to 24/7 live-in care</li>
                        <li><i class="fas fa-check-circle"></i> Flexible scheduling around your lifestyle</li>
                        <li><i class="fas fa-check-circle"></i> Short-term or long-term support options</li>
                        <li><i class="fas fa-check-circle"></i> Adaptable as your needs change</li>
                    </ul>
                </div>
            </div>

            <div class="feature-row">
                <div class="feature-visual">
                    <div class="feature-number">03</div>
                    <div class="feature-box">
                        <i class="fas fa-user-check"></i>
                    </div>
                </div>
                <div class="feature-content">
                    <h3>Personalized Approach</h3>
                    <p>
                        We take the time to understand your unique situation, preferences, and goals to create a care plan that's truly tailored to you.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Detailed care assessment and planning</li>
                        <li><i class="fas fa-check-circle"></i> Dedicated care coordinators</li>
                        <li><i class="fas fa-check-circle"></i> Regular reviews and adjustments</li>
                        <li><i class="fas fa-check-circle"></i> Family involvement encouraged</li>
                    </ul>
                </div>
            </div>

            <div class="feature-row reverse">
                <div class="feature-visual">
                    <div class="feature-number">04</div>
                    <div class="feature-box">
                        <i class="fas fa-home-heart"></i>
                    </div>
                </div>
                <div class="feature-content">
                    <h3>Local & Community Focused</h3>
                    <p>
                        As a local, family-oriented provider, we're responsive to your needs and deeply committed to our community.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Consistent support from familiar faces</li>
                        <li><i class="fas fa-check-circle"></i> Quick response times</li>
                        <li><i class="fas fa-check-circle"></i> Understanding of local resources</li>
                        <li><i class="fas fa-check-circle"></i> Building lasting relationships</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Testimonials</div>
                <h2 class="section-title">What Families Say About Us</h2>
                <p class="section-description">
                    Real experiences from the families we've had the privilege to serve
                </p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">SM</div>
                        <div class="testimonial-info">
                            <h4>Sarah Mitchell</h4>
                            <div class="testimonial-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "The care team has been absolutely wonderful. They treat my mother with such kindness and respect. It's given our family incredible peace of mind knowing she's in such good hands."
                    </p>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">JT</div>
                        <div class="testimonial-info">
                            <h4>James Thompson</h4>
                            <div class="testimonial-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "Professional, reliable, and genuinely caring. The team has made such a positive difference in my father's life. I couldn't recommend them more highly."
                    </p>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">EP</div>
                        <div class="testimonial-info">
                            <h4>Emily Parker</h4>
                            <div class="testimonial-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="testimonial-text">
                        "From the first consultation to ongoing care, everything has been seamless. The team is flexible, understanding, and truly goes above and beyond."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-content">
                    <h2>Ready to Get Started?</h2>
                    <p>
                        Contact us today for a free consultation and discover how we can provide the support you and your loved ones deserve.
                    </p>
                    <div class="cta-buttons">
                        <a href="clients.php" class="btn btn-white">
                            <i class="fas fa-phone"></i>
                            Get in Touch
                        </a>
                        <a href="careers.php" class="btn btn-outline">
                            <i class="fas fa-briefcase"></i>
                            Join Our Team
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
</body>

</html>