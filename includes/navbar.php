<!-- Header Wrapper -->
<div class="header-wrapper">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-content">
            <div class="top-bar-left">
                <div class="top-bar-item">
                    <i class="fas fa-phone"></i>
                    <span>+1 (555) 123-4567</span>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-envelope"></i>
                    <span>info@careservices.com</span>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-clock"></i>
                    <span>24/7 Available</span>
                </div>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-link-top"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link-top"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link-top"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link-top"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <header class="main-header" id="mainHeader">
        <nav class="nav-container">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <style>
                    .logo-icon{
                        /* margin-left: -100px; */
                        width: 400px;
                        height: 100px;
                        margin-top: 30px;
                        background-color: transparent;
                    }
                    .logo-icon img{
                        width: 100%;
                    }
                    @media (max-width:768px) {
                        .logo-icon{
                        width: 350px;
                        height: 100px;
                        margin-left: -56px;
                        margin-top: 30px;
                        background-color: transparent;
                    }
                    }
        
                </style>
                <div class="logo-icon">
                    <img src="../img/logo-v2.png" alt="">
                </div>
            </a>

            <!-- Desktop Navigation Menu -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item nav-dropdown">
                    <a href="#services" class="nav-link">
                        Our Services
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-header">Our Services</div>
                        <a href="index.php-support" class="dropdown-item">
                            <div class="dropdown-item-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Home Support Services</div>
                                <div class="dropdown-item-desc">Daily living assistance at home</div>
                            </div>
                        </a>
                        <a href="#companionship" class="dropdown-item">
                            <div class="dropdown-item-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Companionship & Social Support</div>
                                <div class="dropdown-item-desc">Emotional and social wellbeing</div>
                            </div>
                        </a>
                        <a href="#personal-care" class="dropdown-item">
                            <div class="dropdown-item-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Personal Care Services</div>
                                <div class="dropdown-item-desc">Dignified personal care</div>
                            </div>
                        </a>
                        <a href="#medical-care" class="dropdown-item">
                            <div class="dropdown-item-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Medical Care</div>
                                <div class="dropdown-item-desc">Professional medical support</div>
                            </div>
                        </a>
                        <a href="#specialist-care" class="dropdown-item">
                            <div class="dropdown-item-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Specialist Care</div>
                                <div class="dropdown-item-desc">Specialized healthcare services</div>
                            </div>
                        </a>
                        <a href="#additional" class="dropdown-item">
                            <div class="dropdown-item-icon">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Additional Support</div>
                                <div class="dropdown-item-desc">Extra care and support services</div>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="careers.php" class="nav-link">Careers</a>
                </li>
                <li class="nav-item">
                    <a href="clients.php" class="nav-link">Clients</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="faqs.php" class="nav-link">FAQs</a>
                </li> -->
            </ul>

            <!-- Navigation Actions -->
            <div class="nav-actions">
                <button class="icon-btn" id="searchBtn" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
                <!-- <a
                    href="contact.php"
                    class="__display-none__at_ottf btn btn-primary"
                    onclick="window.location.href='login-register.php'">
                    <i class="fas fa-phone-alt"></i>
                    Get Started
                </a> -->
                <button class="icon-btn mobile-toggle" id="mobileToggle" aria-label="Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>
</div>

<!-- Search Overlay -->
<div class="search-overlay" id="searchOverlay"></div>

<!-- Search Panel -->
<div class="search-panel" id="searchPanel">
    <div class="search-container">
        <div class="search-header">
            <h2 class="search-title">Search Our Services</h2>
            <button class="search-close" id="searchClose" aria-label="Close Search">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <form class="search-box" onsubmit="return false;">
            <input
                type="text"
                class="search-input"
                placeholder="What are you looking for?"
                id="searchInput"
                aria-label="Search input" />
            <button class="search-submit" type="submit" aria-label="Submit Search">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-header">
        <a href="#" class="logo">
            <div class="logo-icon">
                <img src="../img/logo-v2.png" alt="">
            </div>
        </a>
        <button class="mobile-close" id="mobileClose" aria-label="Close Menu">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <ul class="mobile-nav-list">
        <li class="mobile-nav-item">
            <a href="index.php" class="mobile-nav-link">
                <span><i class="fas fa-home"></i> Home</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="mobile-nav-item">
            <a href="about.php" class="mobile-nav-link">
                <span><i class="fas fa-info-circle"></i> About Us</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="mobile-nav-item">
            <button class="mobile-dropdown-toggle" id="mobileServicesToggle">
                <span><i class="fas fa-concierge-bell"></i> Our Services</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="mobile-dropdown-menu" id="mobileServicesMenu">
                <a href="index.php-support" class="mobile-dropdown-item">
                    <i class="fas fa-home"></i>
                    Home Support Services
                </a>
                <a href="#companionship" class="mobile-dropdown-item">
                    <i class="fas fa-users"></i>
                    Companionship & Social Support
                </a>
                <a href="#personal-care" class="mobile-dropdown-item">
                    <i class="fas fa-hand-holding-heart"></i>
                    Personal Care Services
                </a>
                <a href="#medical-care" class="mobile-dropdown-item">
                    <i class="fas fa-user-md"></i>
                    Medical Care
                </a>
                <a href="#specialist-care" class="mobile-dropdown-item">
                    <i class="fas fa-heartbeat"></i>
                    Specialist Care
                </a>
                <a href="#additional" class="mobile-dropdown-item">
                    <i class="fas fa-plus-circle"></i>
                    Additional Support
                </a>
            </div>
        </li>
        <li class="mobile-nav-item">
            <a href="careers.php" class="mobile-nav-link">
                <span><i class="fas fa-briefcase"></i> Careers</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="mobile-nav-item">
            <a href="clients.php" class="mobile-nav-link">
                <span><i class="fas fa-user-friends"></i> Clients</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="mobile-nav-item">
            <a href="contact.php" class="mobile-nav-link">
                <span><i class="fas fa-envelope"></i> Contact Us</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
        <li class="mobile-nav-item">
            <a href="faqs.php" class="mobile-nav-link">
                <span><i class="fas fa-question-circle"></i> FAQs</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>

    <div style="margin-top: 2rem; padding-top: 2rem; border-top: 2px solid var(--border-light)">
        <a href="contact.php" class="btn btn-primary" style="width: 100%">
            <i class="fas fa-phone-alt"></i>
            Get Started Now
        </a>
    </div>
</div>