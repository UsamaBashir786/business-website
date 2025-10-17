    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --color-primary: #7B528F;
            --color-white: #ffffff;
            --color-gray-100: #f3f4f6;
            --color-gray-200: #e5e7eb;
            --color-gray-300: #d1d5db;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: var(--color-white);
        }

        .loader-container {
            width: 100%;
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        .loader-container.fade-out {
            opacity: 0;
        }

        .skeleton {
            background: linear-gradient(90deg, var(--color-gray-200) 25%, var(--color-gray-100) 50%, var(--color-gray-200) 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 4px;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }
        .skeleton-hero {
            padding: 80px 20px;
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .skeleton-hero-left {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .skeleton-badge {
            width: 280px;
            height: 32px;
        }

        .skeleton-title {
            width: 100%;
            height: 120px;
        }

        .skeleton-text {
            width: 90%;
            height: 60px;
        }

        .skeleton-buttons {
            display: flex;
            gap: 16px;
            margin-top: 10px;
        }

        .skeleton-button {
            width: 180px;
            height: 50px;
            border-radius: 8px;
        }

        .skeleton-stats {
            display: flex;
            gap: 40px;
            margin-top: 20px;
        }

        .skeleton-stat {
            width: 100px;
            height: 60px;
        }

        .skeleton-hero-image {
            width: 100%;
            height: 500px;
            border-radius: 16px;
        }
        .skeleton-services {
            padding: 80px 20px;
            background: var(--color-gray-100);
        }

        .skeleton-services-inner {
            max-width: 1400px;
            margin: 0 auto;
        }

        .skeleton-section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .skeleton-subtitle {
            width: 150px;
            height: 24px;
            margin: 0 auto 16px;
        }

        .skeleton-section-title {
            width: 400px;
            height: 48px;
            margin: 0 auto 16px;
        }

        .skeleton-section-desc {
            width: 600px;
            height: 40px;
            margin: 0 auto;
        }

        .skeleton-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .skeleton-service-card {
            background: var(--color-white);
            padding: 32px;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .skeleton-service-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
        }

        .skeleton-service-title {
            width: 80%;
            height: 28px;
        }

        .skeleton-service-text {
            width: 100%;
            height: 60px;
        }

        .skeleton-service-link {
            width: 120px;
            height: 24px;
        }
        .skeleton-about {
            padding: 80px 20px;
        }

        .skeleton-about-inner {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .skeleton-about-image {
            width: 100%;
            height: 500px;
            border-radius: 16px;
        }

        .skeleton-about-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .skeleton-about-title {
            width: 90%;
            height: 80px;
        }

        .skeleton-about-text {
            width: 100%;
            height: 80px;
        }

        .skeleton-features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
        }

        .skeleton-feature {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .skeleton-feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            flex-shrink: 0;
        }

        .skeleton-feature-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .skeleton-feature-title {
            width: 150px;
            height: 24px;
        }

        .skeleton-feature-text {
            width: 100%;
            height: 20px;
        }
        .skeleton-testimonials {
            padding: 80px 20px;
            background: var(--color-gray-100);
        }

        .skeleton-testimonials-inner {
            max-width: 1400px;
            margin: 0 auto;
        }

        .skeleton-testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .skeleton-testimonial-card {
            background: var(--color-white);
            padding: 32px;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .skeleton-testimonial-header {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .skeleton-avatar {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .skeleton-testimonial-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .skeleton-name {
            width: 140px;
            height: 20px;
        }

        .skeleton-stars {
            width: 100px;
            height: 16px;
        }

        .skeleton-testimonial-text {
            width: 100%;
            height: 100px;
        }

        @media (max-width: 1024px) {
            .skeleton-hero,
            .skeleton-about-inner {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .skeleton-services-grid,
            .skeleton-testimonials-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .skeleton-section-title,
            .skeleton-section-desc {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .skeleton-services-grid,
            .skeleton-testimonials-grid {
                grid-template-columns: 1fr;
            }

            .skeleton-stats {
                flex-wrap: wrap;
            }

            .skeleton-buttons {
                flex-direction: column;
            }

            .skeleton-button {
                width: 100%;
            }
        }

        .actual-content {
            display: none;
        }

        .actual-content.visible {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="loader-container" id="skeletonLoader">
        <div class="skeleton-header-wrapper">
            <div class="skeleton-top-bar">
                <div class="skeleton-top-bar-content">
                    <div class="skeleton-top-bar-left">
                        <div class="skeleton skeleton-top-item"></div>
                        <div class="skeleton skeleton-top-item"></div>
                        <div class="skeleton skeleton-top-item"></div>
                    </div>
                    <div class="skeleton-top-bar-right">
                        <div class="skeleton skeleton-social"></div>
                        <div class="skeleton skeleton-social"></div>
                        <div class="skeleton skeleton-social"></div>
                        <div class="skeleton skeleton-social"></div>
                    </div>
                </div>
            </div>
            <div class="skeleton-main-header">
                <div class="skeleton-nav-container">
                    <div class="skeleton skeleton-logo"></div>
                    <div class="skeleton-nav-menu">
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                        <div class="skeleton skeleton-nav-item"></div>
                    </div>
                    <div class="skeleton-nav-actions">
                        <div class="skeleton skeleton-icon-btn"></div>
                        <div class="skeleton skeleton-icon-btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skeleton-hero">
            <div class="skeleton-hero-left">
                <div class="skeleton skeleton-badge"></div>
                <div class="skeleton skeleton-title"></div>
                <div class="skeleton skeleton-text"></div>
                <div class="skeleton-buttons">
                    <div class="skeleton skeleton-button"></div>
                    <div class="skeleton skeleton-button"></div>
                </div>
                <div class="skeleton-stats">
                    <div class="skeleton skeleton-stat"></div>
                    <div class="skeleton skeleton-stat"></div>
                    <div class="skeleton skeleton-stat"></div>
                </div>
            </div>
            <div class="skeleton-hero-right">
                <div class="skeleton skeleton-hero-image"></div>
            </div>
        </div>
        <div class="skeleton-services">
            <div class="skeleton-services-inner">
                <div class="skeleton-section-header">
                    <div class="skeleton skeleton-subtitle"></div>
                    <div class="skeleton skeleton-section-title"></div>
                    <div class="skeleton skeleton-section-desc"></div>
                </div>
                <div class="skeleton-services-grid">
                    <div class="skeleton-service-card">
                        <div class="skeleton skeleton-service-icon"></div>
                        <div class="skeleton skeleton-service-title"></div>
                        <div class="skeleton skeleton-service-text"></div>
                        <div class="skeleton skeleton-service-link"></div>
                    </div>
                    <div class="skeleton-service-card">
                        <div class="skeleton skeleton-service-icon"></div>
                        <div class="skeleton skeleton-service-title"></div>
                        <div class="skeleton skeleton-service-text"></div>
                        <div class="skeleton skeleton-service-link"></div>
                    </div>
                    <div class="skeleton-service-card">
                        <div class="skeleton skeleton-service-icon"></div>
                        <div class="skeleton skeleton-service-title"></div>
                        <div class="skeleton skeleton-service-text"></div>
                        <div class="skeleton skeleton-service-link"></div>
                    </div>
                    <div class="skeleton-service-card">
                        <div class="skeleton skeleton-service-icon"></div>
                        <div class="skeleton skeleton-service-title"></div>
                        <div class="skeleton skeleton-service-text"></div>
                        <div class="skeleton skeleton-service-link"></div>
                    </div>
                    <div class="skeleton-service-card">
                        <div class="skeleton skeleton-service-icon"></div>
                        <div class="skeleton skeleton-service-title"></div>
                        <div class="skeleton skeleton-service-text"></div>
                        <div class="skeleton skeleton-service-link"></div>
                    </div>
                    <div class="skeleton-service-card">
                        <div class="skeleton skeleton-service-icon"></div>
                        <div class="skeleton skeleton-service-title"></div>
                        <div class="skeleton skeleton-service-text"></div>
                        <div class="skeleton skeleton-service-link"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skeleton-about">
            <div class="skeleton-about-inner">
                <div class="skeleton skeleton-about-image"></div>
                <div class="skeleton-about-content">
                    <div class="skeleton skeleton-subtitle"></div>
                    <div class="skeleton skeleton-about-title"></div>
                    <div class="skeleton skeleton-about-text"></div>
                    <div class="skeleton-features">
                        <div class="skeleton-feature">
                            <div class="skeleton skeleton-feature-icon"></div>
                            <div class="skeleton-feature-content">
                                <div class="skeleton skeleton-feature-title"></div>
                                <div class="skeleton skeleton-feature-text"></div>
                            </div>
                        </div>
                        <div class="skeleton-feature">
                            <div class="skeleton skeleton-feature-icon"></div>
                            <div class="skeleton-feature-content">
                                <div class="skeleton skeleton-feature-title"></div>
                                <div class="skeleton skeleton-feature-text"></div>
                            </div>
                        </div>
                        <div class="skeleton-feature">
                            <div class="skeleton skeleton-feature-icon"></div>
                            <div class="skeleton-feature-content">
                                <div class="skeleton skeleton-feature-title"></div>
                                <div class="skeleton skeleton-feature-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="skeleton skeleton-button"></div>
                </div>
            </div>
        </div>
        <div class="skeleton-testimonials">
            <div class="skeleton-testimonials-inner">
                <div class="skeleton-section-header">
                    <div class="skeleton skeleton-subtitle"></div>
                    <div class="skeleton skeleton-section-title"></div>
                    <div class="skeleton skeleton-section-desc"></div>
                </div>
                <div class="skeleton-testimonials-grid">
                    <div class="skeleton-testimonial-card">
                        <div class="skeleton-testimonial-header">
                            <div class="skeleton skeleton-avatar"></div>
                            <div class="skeleton-testimonial-info">
                                <div class="skeleton skeleton-name"></div>
                                <div class="skeleton skeleton-stars"></div>
                            </div>
                        </div>
                        <div class="skeleton skeleton-testimonial-text"></div>
                    </div>
                    <div class="skeleton-testimonial-card">
                        <div class="skeleton-testimonial-header">
                            <div class="skeleton skeleton-avatar"></div>
                            <div class="skeleton-testimonial-info">
                                <div class="skeleton skeleton-name"></div>
                                <div class="skeleton skeleton-stars"></div>
                            </div>
                        </div>
                        <div class="skeleton skeleton-testimonial-text"></div>
                    </div>
                    <div class="skeleton-testimonial-card">
                        <div class="skeleton-testimonial-header">
                            <div class="skeleton skeleton-avatar"></div>
                            <div class="skeleton-testimonial-info">
                                <div class="skeleton skeleton-name"></div>
                                <div class="skeleton skeleton-stars"></div>
                            </div>
                        </div>
                        <div class="skeleton skeleton-testimonial-text"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            const loader = document.getElementById('skeletonLoader');
            const content = document.getElementById('actualContent');            
            loader.classList.add('fade-out');
                        setTimeout(function() {
                loader.style.display = 'none';
                content.classList.add('visible');
            }, 300);
        }, 700);
    </script>
</body>
</html>