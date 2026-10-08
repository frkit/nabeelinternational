<?php
// Update footer.php
$footer = file_get_contents('f:\wamp64\www\nabeel\layout\footer.php');

$old_footer = <<<HTML
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-col">
                <a href="index.php" class="logo" style="color: #fff;">
                    <span style="color: var(--secondary-color);">NABEEL</span><br>INTERNATIONAL
                </a>
                <p>Your Journey. Our Commitment. Providing dependable and convenient travel services that make every journey comfortable, organized, and memorable.</p>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="management.php">Management Team</a></li>
                    <li><a href="packages.php">Umrah & Hajj</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Info</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> Office No. 123, ABC Plaza, Main Boulevard, Lahore, Pakistan</li>
                    <li><i class="fas fa-phone"></i> +92 340 1192123</li>
                    <li><i class="fas fa-envelope"></i> info@nabeelinternational.com</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Nabeel International Tour Operators (Pvt. Ltd.). All Rights Reserved.</p>
        </div>
    </footer>
HTML;

$new_footer = <<<HTML
    <footer class="footer">
        <div class="footer-grid">
            <div class="footer-col">
                <a href="index.php" class="logo" style="color: #fff;">
                    <span style="color: var(--secondary-color);">NABEEL</span><br>INTERNATIONAL
                </a>
                <p>Your Journey. Our Commitment. Providing dependable and convenient travel services that make every journey comfortable, organized, and memorable.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="umrah.php">Umrah Packages</a></li>
                    <li><a href="study.php">Study Abroad</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Info</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-map-marker-alt"></i> Office No. 123, ABC Plaza, Lahore, Pakistan</li>
                    <li><i class="fas fa-phone"></i> +92 340 1192123</li>
                    <li><i class="fas fa-envelope"></i> info@nabeelinternational.com</li>
                </ul>
                <div class="footer-map" style="margin-top: 20px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108815.42152843477!2d74.26903204364491!3d31.543265780517702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" width="100%" height="150" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="footer-col">
                <h3>Newsletter</h3>
                <p style="margin-bottom: 15px; font-size: 0.9rem; color: #ccc;">Subscribe to our newsletter for the latest travel offers and packages.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your Email Address" required>
                    <button type="submit" class="btn-primary" style="border-radius: 5px; padding: 12px; display: flex; justify-content: center;"><i class="fas fa-paper-plane" style="margin-right: 8px;"></i> Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Nabeel International Tour Operators (Pvt. Ltd.). All Rights Reserved.</p>
        </div>
    </footer>
HTML;

$footer = str_replace($old_footer, $new_footer, $footer);
file_put_contents('f:\wamp64\www\nabeel\layout\footer.php', $footer);

// Update style.css
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_add = <<<CSS

        /* Footer Additions */
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .social-links a:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .newsletter-form input {
            padding: 12px 15px;
            border-radius: 5px;
            border: 1px solid rgba(255,255,255,0.2);
            background: rgba(255,255,255,0.1);
            color: #fff;
            outline: none;
            font-family: inherit;
        }

        .newsletter-form input::placeholder {
            color: rgba(255,255,255,0.6);
        }
        
        .newsletter-form input:focus {
            border-color: var(--secondary-color);
            background: rgba(255,255,255,0.15);
        }
CSS;

$css = preg_replace('/\.footer-grid \{.*?\}/s', ".footer-grid {\n            display: grid;\n            grid-template-columns: 1.2fr 1fr 1.2fr 1fr;\n            gap: 40px;\n            max-width: 1200px;\n            margin: 0 auto;\n        }", $css);
$css = str_replace('.footer-bottom {', $css_add . "\n\n        .footer-bottom {", $css);
$css = str_replace('@media (max-width: 768px) {', "@media (max-width: 992px) {\n            .footer-grid { grid-template-columns: 1fr 1fr; }\n        }\n\n        @media (max-width: 768px) {", $css);

file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);
echo "Footer updated with everything!";
?>
