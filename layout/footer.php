    <footer class="footer-premium">
        <div class="footer-premium-top">
            <div class="footer-premium-grid">
                <!-- Column 1: About -->
                <div class="footer-widget">
                    <a href="index.php" class="footer-logo" style="text-decoration: none;">
                        <div style="font-size: 2.2rem; font-weight: 900; line-height: 1.1; color: #fff; margin-bottom: 25px; font-family: var(--font-heading);">
                            <span style="color: var(--secondary-color);">NABEEL</span><br>INTERNATIONAL
                        </div>
                    </a>
                    <p class="footer-about-text">Your Journey. Our Commitment. Providing dependable and convenient travel services that make every journey comfortable, organized, and memorable.</p>
                    <div class="footer-socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Column 2: Links -->
                <div class="footer-widget">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="umrah.php"><i class="fas fa-chevron-right"></i> Umrah Packages</a></li>
                        <li><a href="study.php"><i class="fas fa-chevron-right"></i> Study Abroad</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Map & Contact -->
                <div class="footer-widget">
                    <h3 class="widget-title">Find Us</h3>
                    <div class="footer-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108815.42152843477!2d74.26903204364491!3d31.543265780517702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <ul class="footer-contact-list">
                        <li><i class="fas fa-map-marker-alt"></i> Office 123, ABC Plaza, Lahore</li>
                        <li><i class="fas fa-phone-alt"></i> +92 340 1192123</li>
                    </ul>
                </div>

                <!-- Column 4: Newsletter -->
                <div class="footer-widget">
                    <h3 class="widget-title">Newsletter</h3>
                    <p class="footer-newsletter-text">Subscribe to our newsletter for the latest travel offers and exclusive packages.</p>
                    <form class="footer-newsletter-form">
                        <div class="input-group">
                            <input type="email" placeholder="Email Address" required>
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-premium-bottom">
            <div class="footer-bottom-inner">
                <p>&copy; 2026 Nabeel International Tour Operators (Pvt. Ltd.). All Rights Reserved.</p>
                <div class="footer-bottom-links">
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="terms.php">Terms of Service</a>
                    <a href="sitemap.php">Sitemap</a>
                    <a href="cookie.php">Cookie Policy</a>
                    <a href="refund.php">Refund Policy</a>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (document.querySelector('.hero-swiper')) {
                new Swiper('.hero-swiper', {
                    slidesPerView: 1,
                    loop: true,
                    effect: 'fade',
                    autoplay: { delay: 5000, disableOnInteraction: false },
                    pagination: { el: '.hero-pagination', clickable: true },
                    navigation: { nextEl: '.hero-next', prevEl: '.hero-prev' },
                });
            }
            if (document.querySelector('.services-swiper')) {
                new Swiper('.services-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: { delay: 3500, disableOnInteraction: false },
                    pagination: { el: '.swiper-pagination', clickable: true },
                    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                    breakpoints: { 640: { slidesPerView: 2 }, 992: { slidesPerView: 3 }, 1200: { slidesPerView: 4 } }
                });
            }
        });
    </script>
    <script>
        // Global Language Switcher Helper Function
        function changeLanguage(langCode, langName) {
            const currentLang = document.getElementById('current-lang');
            if (currentLang) {
                currentLang.textContent = langName;
            }
            const googleCombo = document.querySelector('.goog-te-combo');
            if (googleCombo) {
                googleCombo.value = langCode;
                googleCombo.dispatchEvent(new Event('change'));
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-menu-toggle');
            const navLinks = document.getElementById('nav-links');
            const overlay = document.getElementById('mobile-menu-overlay');
            const drawerClose = document.getElementById('mobile-drawer-close');

            function toggleMobileMenu(open) {
                if (!navLinks) return;
                const isActive = typeof open === 'boolean' ? open : !navLinks.classList.contains('active');
                if (isActive) {
                    navLinks.classList.add('active');
                    if (overlay) overlay.classList.add('active');
                    if (mobileToggle) {
                        mobileToggle.classList.add('open');
                        const icon = mobileToggle.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-bars');
                            icon.classList.add('fa-times');
                        }
                    }
                    document.body.style.overflow = 'hidden';
                } else {
                    navLinks.classList.remove('active');
                    if (overlay) overlay.classList.remove('active');
                    if (mobileToggle) {
                        mobileToggle.classList.remove('open');
                        const icon = mobileToggle.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                    document.body.style.overflow = '';
                }
            }

            if (mobileToggle) {
                mobileToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    toggleMobileMenu();
                });
            }

            if (drawerClose) {
                drawerClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    toggleMobileMenu(false);
                });
            }

            if (overlay) {
                overlay.addEventListener('click', function(e) {
                    toggleMobileMenu(false);
                });
            }

            // Dropdown Toggles on Mobile Screens
            const dropdownItems = document.querySelectorAll('.nav-links .dropdown');
            dropdownItems.forEach(function(item) {
                const toggle = item.querySelector('.dropdown-toggle');
                if (toggle) {
                    toggle.addEventListener('click', function(e) {
                        if (window.innerWidth <= 992) {
                            const href = toggle.getAttribute('href');
                            if (href === '#' || href === 'javascript:void(0)' || !item.classList.contains('open')) {
                                e.preventDefault();
                                dropdownItems.forEach(function(otherItem) {
                                    if (otherItem !== item) {
                                        otherItem.classList.remove('open');
                                    }
                                });
                                item.classList.toggle('open');
                            }
                        }
                    });
                }
            });

            // Auto-close mobile menu on window resize if scaling up to desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992 && navLinks && navLinks.classList.contains('active')) {
                    toggleMobileMenu(false);
                }
            });
        });
    </script>
</body>
</html>
