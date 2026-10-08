<?php
// Replace index.php content
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

$about_old = <<<HTML
    <section class="about-section">
        <div class="about-grid">
            <div class="about-image">
                <img loading="lazy" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Travel Journey">
            </div>
            <div class="about-content">
                <h2 class="section-title" style="text-align: left;">Why Choose Nabeel International?</h2>
                <p>Nabeel International Tour Operators (Pvt. Ltd.) is a travel and tourism company dedicated to providing comfortable, reliable, and memorable travel experiences. Our mission is to provide dependable services that make every journey comfortable and organized.</p>
                
                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Reliable & Professional Travel Solutions</li>
                    <li><i class="fas fa-check-circle"></i> Customized Packages for All Needs</li>
                    <li><i class="fas fa-check-circle"></i> International Air Ticketing & Hotel Bookings</li>
                    <li><i class="fas fa-check-circle"></i> Dedicated Support Throughout Your Journey</li>
                </ul>
            </div>
        </div>
    </section>
HTML;

$about_new = <<<HTML
    <!-- About Section -->
    <section class="about-section">
        <div class="about-grid">
            <div class="about-image-collage">
                <img loading="lazy" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel Experience" class="img-main">
                <img loading="lazy" src="images/istanbul.jpg" alt="Destination" class="img-sub">
                <div class="experience-badge">
                    <span class="exp-years">15+</span>
                    <span class="exp-text">Years of<br>Experience</span>
                </div>
            </div>
            <div class="about-content">
                <div class="section-tag">About Our Company</div>
                <h2 class="section-title" style="text-align: left; margin-bottom: 20px;">Why Choose Nabeel International?</h2>
                <p class="about-lead">Nabeel International Tour Operators (Pvt. Ltd.) is a travel and tourism company dedicated to providing comfortable, reliable, and memorable travel experiences.</p>
                <p class="about-desc">Our mission is to provide dependable services that make every journey comfortable and organized, no matter where your destination is.</p>
                
                <div class="features-grid">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h4>Reliable & Professional</h4>
                            <p>Dependable travel solutions you can trust.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-box-open"></i></div>
                        <div>
                            <h4>Customized Packages</h4>
                            <p>Tailored for all your specific needs.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-ticket-alt"></i></div>
                        <div>
                            <h4>Global Ticketing</h4>
                            <p>International air & hotel bookings.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-headset"></i></div>
                        <div>
                            <h4>Dedicated Support</h4>
                            <p>24/7 assistance throughout your journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
HTML;

$index = str_replace($about_old, $about_new, $index);
file_put_contents('f:\wamp64\www\nabeel\index.php', $index);

// Replace style.css content
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_old = <<<CSS
        .about-section {
            padding: 80px 5%;
            background-color: #f9f9f9;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: center;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .features-list {
            list-style: none;
        }

        .features-list li {
            font-size: 1.1rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .features-list li i {
            color: #2ecc71;
            margin-right: 15px;
            font-size: 1.2rem;
        }
CSS;

$css_new = <<<CSS
        /* About Section Redesign */
        .about-section {
            padding: 100px 5%;
            background-color: #fcfcfc;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: center;
        }

        .about-image-collage {
            position: relative;
            height: 550px;
        }

        .img-main {
            width: 80%;
            height: 90%;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .img-sub {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            border: 10px solid #fcfcfc;
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .experience-badge {
            position: absolute;
            top: 40px;
            right: 40px;
            background: var(--primary-color);
            color: #fff;
            padding: 20px 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(26, 86, 219, 0.3);
        }

        .exp-years {
            display: block;
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 5px;
        }

        .exp-text {
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-tag {
            color: var(--secondary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .about-lead {
            font-size: 1.25rem;
            color: #333;
            font-weight: 600;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .about-desc {
            color: #666;
            line-height: 1.7;
            margin-bottom: 40px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .feature-box {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 214, 224, 0.4);
            color: var(--secondary-color);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .feature-box:hover .feature-icon {
            background: var(--secondary-color);
            color: #fff;
            transform: translateY(-5px);
        }

        .feature-box h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--primary-color);
        }

        .feature-box p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
            margin: 0;
        }
CSS;

$css = str_replace($css_old, $css_new, $css);

// Inject media queries updates
$media_css = <<<CSS
        @media (max-width: 992px) {
            .about-grid { grid-template-columns: 1fr; }
            .about-image-collage { height: 450px; width: 100%; max-width: 500px; margin: 0 auto 40px; }
            .features-grid { grid-template-columns: 1fr; }
CSS;

$css = str_replace('@media (max-width: 992px) {', $media_css, $css);

file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);
echo "Redesign complete!";
?>
