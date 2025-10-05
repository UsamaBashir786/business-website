<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Evolve Home & Care Solutions provides comprehensive home care services including personal care, medical care, companionship, and specialist care." />
    <meta name="keywords" content="home care services, personal care, medical care, dementia care, companionship, home support" />
    <title>Our Services | Evolve Home & Care Solutions</title>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Global Styles -->
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <link rel="stylesheet" href="css/services.css">

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
        .services-hero {
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .services-hero::before {
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
            margin: 0 auto var(--spacing-2xl);
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.95);
        }

        .hero-cta {
            display: inline-flex;
            gap: var(--spacing-lg);
            flex-wrap: wrap;
            justify-content: center;
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

        /* Services Overview */
        .services-overview {
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

        .section-description {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Service Cards */
        .service-category {
            padding: 80px 0;
        }

        .service-category:nth-child(even) {
            background: var(--bg-secondary);
        }

        .service-category:nth-child(odd) {
            background: var(--bg-primary);
        }

        .service-content {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
            align-items: start;
        }

        .service-header {
            position: sticky;
            top: 120px;
        }

        .service-icon-box {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
            border-radius: var(--radius-2xl);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: var(--spacing-lg);
            box-shadow: var(--shadow-purple);
        }

        .service-icon-box i {
            font-size: 36px;
            color: var(--text-white);
        }

        .service-header h2 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-bold);
            color: var(--text-primary);
            margin-bottom: var(--spacing-md);
        }

        .service-header p {
            font-size: var(--font-size-lg);
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: var(--spacing-xl);
        }

        .service-link {
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-sm);
            color: var(--color-primary);
            font-weight: var(--font-weight-semibold);
            text-decoration: none;
            transition: gap var(--transition-base);
        }

        .service-link:hover {
            gap: var(--spacing-md);
        }

        .service-items {
            display: grid;
            gap: var(--spacing-lg);
        }

        .service-item {
            background: var(--bg-primary);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-xl);
            padding: var(--spacing-xl);
            transition: all var(--transition-base);
        }

        .service-category:nth-child(even) .service-item {
            background: var(--bg-primary);
        }

        .service-item:hover {
            transform: translateX(10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--color-primary);
        }

        .service-item-header {
            display: flex;
            align-items: center;
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-md);
        }

        .service-item-icon {
            width: 50px;
            height: 50px;
            background: var(--bg-overlay-light);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primary);
            font-size: 20px;
            flex-shrink: 0;
        }

        .service-item h3 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            color: var(--text-primary);
        }

        .service-item p {
            font-size: var(--font-size-base);
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* Features List */
        .features-list {
            list-style: none;
            display: grid;
            gap: var(--spacing-sm);
        }

        .features-list li {
            display: flex;
            align-items: flex-start;
            gap: var(--spacing-md);
            font-size: var(--font-size-base);
            color: var(--text-secondary);
        }

        .features-list li i {
            color: var(--color-primary);
            font-size: 18px;
            margin-top: 3px;
            flex-shrink: 0;
        }

        /* CTA Section */
        .services-cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .services-cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
        }

        .cta-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--text-white);
        }

        .cta-content h2 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--spacing-lg);
        }

        .cta-content p {
            font-size: var(--font-size-xl);
            margin-bottom: var(--spacing-2xl);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            color: rgba(255, 255, 255, 0.95);
        }

        .cta-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: var(--spacing-xl);
            margin-bottom: var(--spacing-2xl);
        }

        .cta-feature {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--spacing-md);
            padding: var(--spacing-lg);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: var(--radius-xl);
        }

        .cta-feature i {
            font-size: 28px;
        }

        .cta-feature span {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-medium);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .service-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .service-header {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .services-hero {
                padding: 80px 0 60px;
            }

            .hero-cta {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .service-category {
                padding: 60px 0;
            }

            .cta-features {
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
    <section class="services-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-award"></i>
                    Comprehensive Care Services
                </div>
                <h1>Professional Care Tailored to Your Needs</h1>
                <p>At Evolve Home and Care Solutions, we provide a wide range of compassionate and reliable services designed to support your loved ones in the comfort of their own home.</p>
                <div class="hero-cta">
                    <a href="clients.php" class="btn btn-white">
                        <i class="fas fa-phone"></i>
                        Get Started Today
                    </a>
                    <a href="#home-support" class="btn btn-outline">
                        <i class="fas fa-arrow-down"></i>
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Home Support Services -->
    <section id="home-support" class="service-category">
        <div class="container">
            <div class="service-content">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-home"></i>
                    </div>
                    <h2>Home Support Services</h2>
                    <p>Professional household assistance to keep your home running smoothly and maintain a comfortable living environment.</p>
                    <a href="clients.php" class="service-link">
                        Request This Service <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-broom"></i>
                            </div>
                            <h3>Housekeeping</h3>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Laundry and clothes care</li>
                            <li><i class="fas fa-check-circle"></i> Dishes and kitchen cleaning</li>
                            <li><i class="fas fa-check-circle"></i> General tidying and organization</li>
                            <li><i class="fas fa-check-circle"></i> Ironing and wardrobe management</li>
                        </ul>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h3>Meal Planning & Preparation</h3>
                        </div>
                        <p>Nutritious meal planning tailored to dietary requirements and preferences, with professional preparation and presentation.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3>Grocery Shopping & Errands</h3>
                        </div>
                        <p>Convenient shopping services for groceries and household essentials, plus assistance with general errands and tasks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Companionship Services -->
    <section id="companionship" class="service-category">
        <div class="container">
            <div class="service-content">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h2>Companionship & Social Support</h2>
                    <p>Meaningful connections and social engagement to enhance wellbeing and prevent loneliness and isolation.</p>
                    <a href="clients.php" class="service-link">
                        Request This Service <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3>Friendly Conversations & Social Support</h3>
                        </div>
                        <p>Engaging conversations and emotional support to provide comfort, reduce anxiety, and promote mental wellbeing.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-car-side"></i>
                            </div>
                            <h3>Accompaniment Services</h3>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Medical appointments and check-ups</li>
                            <li><i class="fas fa-check-circle"></i> Social outings and events</li>
                            <li><i class="fas fa-check-circle"></i> Shopping trips and errands</li>
                            <li><i class="fas fa-check-circle"></i> Community activities</li>
                        </ul>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                            <h3>Hobbies, Games & Activities</h3>
                        </div>
                        <p>Assistance with favorite hobbies, games, puzzles, and activities that bring joy and mental stimulation.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Preventing Loneliness & Isolation</h3>
                        </div>
                        <p>Regular visits and meaningful interactions to combat social isolation and maintain quality of life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Care Services -->
    <section id="personal-care" class="service-category">
        <div class="container">
            <div class="service-content">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h2>Personal Care Services</h2>
                    <p>Dignified assistance with daily personal care needs, delivered with respect, compassion, and professionalism.</p>
                    <a href="clients.php" class="service-link">
                        Request This Service <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-shower"></i>
                            </div>
                            <h3>Bathing, Dressing & Grooming</h3>
                        </div>
                        <p>Respectful assistance with personal hygiene, bathing, dressing, grooming, and maintaining personal appearance.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-restroom"></i>
                            </div>
                            <h3>Toileting & Incontinence Care</h3>
                        </div>
                        <p>Sensitive and dignified support with toileting needs and comprehensive incontinence management.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-walking"></i>
                            </div>
                            <h3>Mobility Assistance</h3>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Safe transfers (bed, chair, wheelchair)</li>
                            <li><i class="fas fa-check-circle"></i> Walking support and supervision</li>
                            <li><i class="fas fa-check-circle"></i> Use of mobility aids</li>
                            <li><i class="fas fa-check-circle"></i> Fall prevention strategies</li>
                        </ul>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-apple-alt"></i>
                            </div>
                            <h3>Feeding Assistance</h3>
                        </div>
                        <p>Patient and supportive help with eating and drinking, ensuring proper nutrition and hydration.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-pills"></i>
                            </div>
                            <h3>Medication Reminders</h3>
                        </div>
                        <p>Timely reminders to take prescribed medications, helping maintain treatment schedules and health routines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Care -->
    <section id="medical-care" class="service-category">
        <div class="container">
            <div class="service-content">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h2>Medical Care</h2>
                    <p>Professional medical support delivered by qualified healthcare professionals for complex care needs.</p>
                    <a href="clients.php" class="service-link">
                        Request This Service <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-band-aid"></i>
                            </div>
                            <h3>Wound Care & Dressing Changes</h3>
                        </div>
                        <p>Professional wound assessment, cleaning, and dressing changes following medical protocols and best practices.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h3>Monitoring Vital Signs</h3>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Blood pressure monitoring</li>
                            <li><i class="fas fa-check-circle"></i> Blood sugar testing</li>
                            <li><i class="fas fa-check-circle"></i> Temperature and pulse checks</li>
                            <li><i class="fas fa-check-circle"></i> Oxygen saturation monitoring</li>
                        </ul>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-syringe"></i>
                            </div>
                            <h3>Medication Administration</h3>
                        </div>
                        <p>Safe administration of medications and injections by trained healthcare professionals, with accurate documentation.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <h3>Chronic Disease Management</h3>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Diabetes management and monitoring</li>
                            <li><i class="fas fa-check-circle"></i> Heart disease care coordination</li>
                            <li><i class="fas fa-check-circle"></i> Respiratory condition support</li>
                            <li><i class="fas fa-check-circle"></i> Regular health assessments</li>
                        </ul>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <h3>Post-Surgery & Hospital Discharge Care</h3>
                        </div>
                        <p>Specialized care following surgery or hospital discharge, ensuring smooth recovery and adherence to medical instructions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialist Care -->
    <section id="specialist-care" class="service-category">
        <div class="container">
            <div class="service-content">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h2>Specialist Care</h2>
                    <p>Expert care for complex conditions requiring specialized knowledge, training, and compassionate support.</p>
                    <a href="clients.php" class="service-link">
                        Request This Service <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-head-side-brain"></i>
                            </div>
                            <h3>Dementia & Alzheimer's Care</h3>
                        </div>
                        <p>Person-centered care with specialized dementia training, focusing on dignity, routine, and quality of life for those living with memory conditions.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-ambulance"></i>
                            </div>
                            <h3>Stroke Recovery Support</h3>
                        </div>
                        <p>Rehabilitation support, mobility assistance, and encouragement throughout the stroke recovery journey, promoting independence and confidence.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h3>Palliative & End of Life Care</h3>
                        </div>
                        <p>Compassionate, dignified care focused on comfort, pain management, and emotional support during life's final journey.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-user-clock"></i>
                            </div>
                            <h3>Respite Care for Family Caregivers</h3>
                        </div>
                        <p>Temporary relief for family caregivers, providing peace of mind while you take necessary breaks to rest and recharge.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Support -->
    <section id="additional-support" class="service-category">
        <div class="container">
            <div class="service-content">
                <div class="service-header">
                    <div class="service-icon-box">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h2>Additional Support</h2>
                    <p>Flexible care options and supplementary services to meet your unique scheduling and support requirements.</p>
                    <a href="clients.php" class="service-link">
                        Request This Service <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-24"></i>
                            </div>
                            <h3>24-Hour or Live-In Care</h3>
                        </div>
                        <p>Round-the-clock care and support with dedicated caregivers providing continuous assistance and companionship in your own home.</p>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <h3>Transportation Services</h3>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check-circle"></i> Medical appointments and hospital visits</li>
                            <li><i class="fas fa-check-circle"></i> Social outings and community events</li>
                            <li><i class="fas fa-check-circle"></i> Shopping and errands</li>
                            <li><i class="fas fa-check-circle"></i> Safe, reliable transportation with assistance</li>
                        </ul>
                    </div>

                    <div class="service-item">
                        <div class="service-item-header">
                            <div class="service-item-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h3>Wellness Checks</h3>
                        </div>
                        <p>Regular visits to ensure safety, wellbeing, and peace of mind for families who live at a distance or need periodic monitoring.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="services-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Experience Quality Care?</h2>
                <p>Contact us today for a free consultation and personalized care plan tailored to your needs</p>
                
                <div class="cta-features">
                    <div class="cta-feature">
                        <i class="fas fa-user-check"></i>
                        <span>Trained Professionals</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Flexible Scheduling</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-shield-alt"></i>
                        <span>CQC Registered</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-heart"></i>
                        <span>Compassionate Care</span>
                    </div>
                </div>

                <div class="hero-cta">
                    <a href="clients.php" class="btn btn-white">
                        <i class="fas fa-phone"></i>
                        Get in Touch
                    </a>
                    <a href="about.php" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        Learn More About Us
                    </a>
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
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

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

        // Observe service items
        document.querySelectorAll('.service-item').forEach(item => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'all 0.6s ease-out';
            observer.observe(item);
        });

        // Active section highlighting in navigation (if you have a sticky services nav)
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('.service-category');
            const scrollPosition = window.pageYOffset + 150;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    // Add active state logic here if needed
                }
            });
        });
    </script>
</body>

</html>