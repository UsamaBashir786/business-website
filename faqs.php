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

    <meta name="description" content="Find answers to frequently asked questions about Evolve Home & Care Solutions. Learn about our services, policies, and how we can help support you and your loved ones." />
    <meta name="keywords" content="FAQs, home care services, elderly care, personal care, medical care, frequently asked questions, Evolve Home & Care Solutions, client support" />
    <meta name="author" content="Evolve Home & Care Solutions" />
    
    <!-- Open Graph Meta Tags for Social Sharing -->
    <meta property="og:title" content="FAQs | Evolve Home & Care Solutions" />
    <meta property="og:description" content="Get answers to frequently asked questions about our services, home care assistance, and support options. Find the information you need at Evolve Home & Care Solutions." />
    <meta property="og:image" content="path_to_image.jpg" />
    <meta property="og:url" content="https://www.evolvehomeandcare.com/faqs" />

    <title>FAQs | Evolve Home & Care Solutions</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Page-Specific Styles -->
    <link rel="stylesheet" href="css/faqs.css">
    
    <!-- Media Queries for Responsiveness -->
    <link rel="stylesheet" href="css/media-queries.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br><br><br><br>
    <main class="faqs-main">
        <!-- Hero Section -->
        <header class="faqs-hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-heading">Frequently Asked Questions</h1>
                    <p class="hero-lead">Find answers to common questions about our services, pricing, and care options</p>
                </div>
            </div>
        </header>

        <!-- Quick Links Section -->
        <section class="quick-links-section">
            <div class="container">
                <div class="quick-links">
                    <a href="#general" class="quick-link">
                        <i class="fas fa-info-circle"></i>
                        <span>General</span>
                    </a>
                    <a href="#services" class="quick-link">
                        <i class="fas fa-hands-helping"></i>
                        <span>Services</span>
                    </a>
                    <a href="#pricing" class="quick-link">
                        <i class="fas fa-pound-sign"></i>
                        <span>Pricing</span>
                    </a>
                    <a href="#care" class="quick-link">
                        <i class="fas fa-heart"></i>
                        <span>Care</span>
                    </a>
                    <a href="#careers" class="quick-link">
                        <i class="fas fa-briefcase"></i>
                        <span>Careers</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQs Content Section -->
        <section class="faqs-content-section">
            <div class="container">
                
                <!-- General Questions -->
                <div id="general" class="faq-category">
                    <h2 class="category-title">General Questions</h2>
                    
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What is Evolve Home and Care Solutions?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Evolve Home and Care Solutions is a client-centered, family-oriented care provider dedicated to supporting independence, dignity, and comfort at home. We offer a wide range of services from household support to specialist medical care, helping individuals and families manage daily life with peace of mind.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What areas do you serve?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We are a local and community-focused provider. Please contact us directly to confirm if we serve your area. We're committed to being responsive to our community's needs.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Are you CQC registered?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we are CQC registered and fully compliant with all regulatory standards. Your safety and wellbeing are at the heart of everything we do.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Are your staff qualified and vetted?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Absolutely. All our caregivers are trained, qualified, and DBS checked. We provide regular training including first aid and safeguarding to ensure the highest standards of care.</p>
                        </div>
                    </div>
                </div>

                <!-- Services Questions -->
                <div id="services" class="faq-category">
                    <h2 class="category-title">Our Services</h2>
                    
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What services do you provide?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We offer a comprehensive range of services including:</p>
                            <ul>
                                <li><strong>Home Support:</strong> Housekeeping, meal preparation, grocery shopping</li>
                                <li><strong>Companionship:</strong> Social support, accompaniment to appointments</li>
                                <li><strong>Personal Care:</strong> Bathing, dressing, grooming, mobility assistance</li>
                                <li><strong>Medical Care:</strong> Wound care, medication administration, vital signs monitoring</li>
                                <li><strong>Specialist Care:</strong> Dementia care, stroke recovery, palliative care</li>
                                <li><strong>Additional Support:</strong> 24-hour care, live-in care, respite care</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Do you provide 24-hour or live-in care?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we offer both 24-hour care and live-in care options. Our flexible packages range from a few hours per week to full-time live-in support, tailored to your specific needs.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Can you help with dementia and Alzheimer's care?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we provide specialist dementia and Alzheimer's care. Our trained caregivers understand the unique challenges of these conditions and provide compassionate, person-centered support.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Do you offer respite care for family caregivers?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we understand that family caregivers need breaks too. Our respite care services provide temporary relief, allowing you to rest while knowing your loved one is in safe, capable hands.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Can you provide transportation services?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we offer transportation for both medical and social purposes, including accompaniment to appointments, outings, and social events.</p>
                        </div>
                    </div>
                </div>

                <!-- Pricing Questions -->
                <div id="pricing" class="faq-category">
                    <h2 class="category-title">Pricing & Payment</h2>
                    
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>How much do your services cost?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We offer clear, upfront pricing with no hidden fees. Costs vary depending on the type and frequency of care needed. Contact us for a free consultation and personalized quote tailored to your budget and requirements.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What payment options are available?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We accept various payment methods and can provide guidance on funding options including local authority funding, NHS continuing healthcare, and private pay arrangements.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Can I get help with funding?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we provide guidance on funding options including local authority support, NHS funding, and private pay. We'll help you understand what financial assistance may be available to you.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Are there any hidden fees?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>No, we believe in complete transparency. We provide clear, upfront pricing with no hidden fees or surprise charges.</p>
                        </div>
                    </div>
                </div>

                <!-- Care & Support Questions -->
                <div id="care" class="faq-category">
                    <h2 class="category-title">Care & Support</h2>
                    
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>How do I get started?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Getting started is easy:</p>
                            <ol>
                                <li><strong>Get in touch:</strong> Call or message us to arrange a free consultation</li>
                                <li><strong>Care plan created:</strong> We'll listen to your needs and design a tailored plan</li>
                                <li><strong>Team introduction:</strong> Meet your dedicated team and allocated support worker</li>
                                <li><strong>Ongoing review:</strong> We adapt as your needs change over time</li>
                            </ol>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Will I have the same caregiver?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We believe in consistency and familiarity. Wherever possible, we assign the same caregivers to provide continuity of care and build meaningful relationships with our clients.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Can I customize my care plan?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Absolutely. We offer a personalized approach tailored to your individual needs and preferences. Your care plan is flexible and can be adjusted as your needs change.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What if my needs change?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We conduct ongoing reviews and adapt your care plan as your needs change. Our flexible approach ensures you always receive the right level of support.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>How do you ensure privacy and confidentiality?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We provide confidential and respectful services that prioritize your privacy. All our staff are trained in data protection and confidentiality protocols.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Do you honor cultural and spiritual needs?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Yes, we value diversity and honor the cultural, spiritual, and personal needs of individuals, families, and communities. Our diverse team gives us the insight and flexibility to meet our clients' unique requirements.</p>
                        </div>
                    </div>
                </div>

                <!-- Careers Questions -->
                <div id="careers" class="faq-category">
                    <h2 class="category-title">Working With Us</h2>
                    
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Do I need experience to work at Evolve?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>While professional experience is valuable, we also welcome individuals with a genuine desire to help others. We provide comprehensive training and opportunities for personal growth.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What working hours are available?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We offer flexible hours to fit around your lifestyle, including full-time, part-time, flexible, and specific shift options.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>What training do you provide?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>We provide opportunities for training and personal growth, including first aid, safeguarding, and specialist care training. We're committed to supporting your professional development.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFAQ(this)">
                            <span>Do I need a driving license?</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="faq-answer">
                            <p>A valid driving license is preferred for many roles, especially those involving transportation services, but it's not always required. We encourage you to apply and discuss your circumstances with us.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Still Have Questions Section -->
        <section class="contact-cta-section">
            <div class="container">
                <div class="contact-cta-card">
                    <div class="cta-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <h2 class="cta-title">Still Have Questions?</h2>
                    <p class="cta-text">Can't find the answer you're looking for? Our friendly team is here to help.</p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="cta-button primary">
                            <i class="fas fa-envelope"></i>
                            Contact Us
                        </a>
                        <a href="tel:+441234567890" class="cta-button secondary">
                            <i class="fas fa-phone"></i>
                            Call Us Now
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
    <script src="js/faqs.js"></script>
</body>
</html>