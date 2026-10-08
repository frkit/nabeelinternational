<?php
// Completely overwrite footer.php
$footer_new = <<<HTML
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
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
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
</body>
</html>
HTML;

file_put_contents('f:\wamp64\www\nabeel\layout\footer.php', $footer_new);


// Append to style.css
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

// Let's just remove the old footer CSS blocks starting from .footer { to the end
$css = preg_replace('/\.footer \{.*/s', '', $css);

$css_new = <<<CSS
        /* Premium Footer Redesign */
        .footer-premium {
            background-color: #0b1120;
            color: #94a3b8;
            font-size: 0.95rem;
            position: relative;
        }
        
        .footer-premium-top {
            padding: 80px 5%;
            border-top: 5px solid var(--secondary-color);
        }

        .footer-premium-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1.2fr 1.2fr;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .widget-title {
            color: #fff;
            font-size: 1.3rem;
            margin-bottom: 25px;
            font-family: var(--font-heading);
            position: relative;
            padding-bottom: 10px;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: var(--secondary-color);
            border-radius: 2px;
        }

        .footer-about-text {
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
        }

        .footer-socials a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff;
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-socials a:hover {
            background: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .footer-links a i {
            margin-right: 8px;
            font-size: 0.8rem;
            color: var(--secondary-color);
            transition: transform 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--secondary-color);
        }

        .footer-links a:hover i {
            transform: translateX(5px);
        }

        .footer-map-wrapper {
            width: 100%;
            height: 120px;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }
        
        .footer-map-wrapper iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .footer-contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-contact-list li {
            margin-bottom: 12px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: #cbd5e1;
        }

        .footer-contact-list li i {
            color: var(--secondary-color);
            margin-top: 4px;
        }

        .footer-newsletter-text {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .footer-newsletter-form .input-group {
            display: flex;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            overflow: hidden;
            padding: 4px;
        }

        .footer-newsletter-form input {
            flex: 1;
            background: transparent;
            border: none;
            padding: 12px 15px;
            color: #fff;
            outline: none;
            font-family: inherit;
            width: 100%;
        }

        .footer-newsletter-form input::placeholder {
            color: #64748b;
        }

        .footer-newsletter-form button {
            background: var(--secondary-color);
            color: #fff;
            border: none;
            padding: 0 20px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .footer-newsletter-form button:hover {
            background: #bfa141;
        }

        .footer-premium-bottom {
            background: rgba(0,0,0,0.3);
            padding: 25px 5%;
        }

        .footer-bottom-inner {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #64748b;
        }

        .footer-bottom-links a {
            color: #64748b;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s ease;
        }

        .footer-bottom-links a:hover {
            color: var(--secondary-color);
        }

        @media (max-width: 992px) {
            .footer-premium-grid { grid-template-columns: 1fr 1fr; }
            .footer-bottom-inner { flex-direction: column; text-align: center; gap: 15px; }
            .footer-bottom-links a { margin: 0 10px; }
        }
        @media (max-width: 768px) {
            .footer-premium-grid { grid-template-columns: 1fr; }
        }
CSS;

$css .= $css_new;
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "Premium footer added!";
?>
