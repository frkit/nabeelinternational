<?php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

$old_section_pattern = '/<section class="about-section">.*?<\/section>/s';

$new_section = <<<HTML
    <!-- About Section Redesign -->
    <section class="about-section">
        <div class="about-grid">
            <div class="about-image-grid-4">
                <div class="col-left">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel" class="img-1">
                    <img src="images/study.jpg" alt="Study" class="img-2">
                </div>
                <div class="col-right">
                    <img src="images/umrah.jpg" alt="Umrah" class="img-3">
                    <img src="images/istanbul.jpg" alt="Istanbul" class="img-4">
                </div>
                <div class="experience-badge">
                    <span class="exp-years">15+</span>
                    <span class="exp-text">Years</span>
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

$index = preg_replace($old_section_pattern, $new_section, $index, 1);
file_put_contents('f:\wamp64\www\nabeel\index.php', $index);

// Now ensure CSS is present (It might already be there from my previous attempts, but let's make sure it is correct)
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_new = <<<CSS
        /* About Section Redesign with 4 Images */
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

        .about-image-grid-4 {
            display: flex;
            gap: 20px;
            position: relative;
        }

        .col-left, .col-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 50%;
        }

        .col-left {
            margin-top: 40px;
        }

        .about-image-grid-4 img {
            width: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .about-image-grid-4 img:hover {
            transform: scale(1.03);
        }

        .img-1 { height: 280px; }
        .img-2 { height: 200px; }
        .img-3 { height: 220px; }
        .img-4 { height: 260px; }

        .about-image-grid-4 .experience-badge {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--primary-color);
            color: #fff;
            padding: 20px;
            border-radius: 50%;
            text-align: center;
            box-shadow: 0 10px 25px rgba(26, 86, 219, 0.4);
            border: 8px solid #fcfcfc;
            width: 130px;
            height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .about-image-grid-4 .exp-years {
            font-size: 2rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 5px;
            display: block;
        }
        
        .about-image-grid-4 .exp-text {
            font-size: 0.8rem;
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

// Let's remove the old about-section css and append the new one
$css = preg_replace('/\.about-section \{.*?\.features-list li i \{.*?\}/s', '', $css);
// Also in case my previous script inserted .about-image-grid-4, remove it too
$css = preg_replace('/\/\* About Section Redesign \*\/.*?\.features-grid \{.*?\}/s', '', $css);
$css = preg_replace('/\.about-image-grid-4 \{.*?\.feature-box p \{.*?\}/s', '', $css);

$css = str_replace('/* Popular Destinations */', $css_new . "\n\n        /* Popular Destinations */", $css);

file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "Real update complete!";
?>
