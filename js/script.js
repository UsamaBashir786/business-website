           // Header scroll effect
            const mainHeader = document.getElementById("mainHeader");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 50) {
                    mainHeader.classList.add("scrolled");
                } else {
                    mainHeader.classList.remove("scrolled");
                }
            });

            // Search functionality
            const searchBtn = document.getElementById("searchBtn");
            const searchOverlay = document.getElementById("searchOverlay");
            const searchPanel = document.getElementById("searchPanel");
            const searchClose = document.getElementById("searchClose");
            const searchInput = document.getElementById("searchInput");

            function openSearch() {
                searchOverlay.classList.add("active");
                searchPanel.classList.add("active");
                document.body.style.overflow = "hidden";
                setTimeout(() => searchInput.focus(), 400);
            }

            function closeSearch() {
                searchOverlay.classList.remove("active");
                searchPanel.classList.remove("active");
                document.body.style.overflow = "";
                searchInput.value = "";
            }

            searchBtn.addEventListener("click", openSearch);
            searchClose.addEventListener("click", closeSearch);
            searchOverlay.addEventListener("click", (e) => {
                if (e.target === searchOverlay) {
                    closeSearch();
                    if (mobileMenu.classList.contains("active")) {
                        closeMobileMenu();
                    }
                }
            });

            // Close search with Escape key
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape") {
                    if (searchPanel.classList.contains("active")) {
                        closeSearch();
                    }
                    if (mobileMenu.classList.contains("active")) {
                        closeMobileMenu();
                    }
                }
            });

            // Mobile menu functionality
            const mobileToggle = document.getElementById("mobileToggle");
            const mobileMenu = document.getElementById("mobileMenu");
            const mobileClose = document.getElementById("mobileClose");
            const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");

            function openMobileMenu() {
                mobileMenu.classList.add("active");
                searchOverlay.classList.add("active");
                document.body.style.overflow = "hidden";
            }

            function closeMobileMenu() {
                mobileMenu.classList.remove("active");
                if (!searchPanel.classList.contains("active")) {
                    searchOverlay.classList.remove("active");
                }
                document.body.style.overflow = "";
            }

            mobileToggle.addEventListener("click", openMobileMenu);
            mobileClose.addEventListener("click", closeMobileMenu);

            // Close mobile menu when clicking nav links
            mobileNavLinks.forEach((link) => {
                link.addEventListener("click", closeMobileMenu);
            });

            // Mobile dropdown functionality
            const mobileServicesToggle = document.getElementById("mobileServicesToggle");
            const mobileServicesMenu = document.getElementById("mobileServicesMenu");

            mobileServicesToggle.addEventListener("click", () => {
                const isActive = mobileServicesMenu.classList.toggle("active");
                mobileServicesToggle.classList.toggle("active");

                const icon = mobileServicesToggle.querySelector("i:last-child");
                if (isActive) {
                    icon.classList.remove("fa-chevron-down");
                    icon.classList.add("fa-chevron-up");
                } else {
                    icon.classList.remove("fa-chevron-up");
                    icon.classList.add("fa-chevron-down");
                }
            });

            // Close mobile menu when clicking dropdown items
            const mobileDropdownItems = document.querySelectorAll(".mobile-dropdown-item");
            mobileDropdownItems.forEach((item) => {
                item.addEventListener("click", closeMobileMenu);
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function (e) {
                    const href = this.getAttribute("href");
                    if (href && href !== "#") {
                        e.preventDefault();
                        closeMobileMenu();

                        setTimeout(() => {
                            const target = document.querySelector(href);
                            if (target) {
                                const offsetTop = target.offsetTop - 90;
                                window.scrollTo({
                                    top: offsetTop,
                                    behavior: "smooth",
                                });
                            }
                        }, 300);
                    }
                });
            });

            // Close overlay when clicking outside mobile menu
            searchOverlay.addEventListener("click", (e) => {
                if (e.target === searchOverlay && mobileMenu.classList.contains("active")) {
                    closeMobileMenu();
                }
            });