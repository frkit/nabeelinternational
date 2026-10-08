<?php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

$hero_pattern = '/<div class="swiper hero-swiper">.*?<\/div>\s*<\/section>/s';

$hero_new = <<<HTML
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                
                <!-- Slide 1 (Was Slide 3: Corporate) -->
                <div class="swiper-slide hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="hero-content-wrapper">
                        <div class="hero-text">
                            <h2>Premium Corporate &<br><span style="color: var(--secondary-color);">Business Travel</span></h2>
                            <p>Streamline your business travel with our comprehensive corporate solutions. From priority visa assistance to executive hotel bookings, we have you covered.</p>
                            <a href="contact.php" class="btn-primary">Contact Us</a>
                        </div>
                        <div class="hero-small-images">
                            <div class="hero-small-card">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Visa">
                                <div class="hero-small-info">
                                    <h4>Visa Assist</h4>
                                    <a href="visa.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Business">
                                <div class="hero-small-info">
                                    <h4>Corporate</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/istanbul.jpg" alt="Istanbul">
                                <div class="hero-small-info">
                                    <h4>Istanbul</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Holiday">
                                <div class="hero-small-info">
                                    <h4>Holiday</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 (Was Slide 1: General) -->
                <div class="swiper-slide hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="hero-content-wrapper">
                        <div class="hero-text">
                            <h2>Explore the World with<br><span style="color: var(--secondary-color);">Nabeel International</span></h2>
                            <p>Travel | Explore | Discover. Whether you are planning Umrah, Hajj, a family holiday, or a business trip, we are here to make your journey smooth from start to finish.</p>
                            <a href="#services" class="btn-primary">Discover Services</a>
                        </div>
                        <div class="hero-small-images">
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/study.jpg" alt="Study">
                                <div class="hero-small-info">
                                    <h4>Study Abroad</h4>
                                    <a href="study.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Travel">
                                <div class="hero-small-info">
                                    <h4>Holidays</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/istanbul.jpg" alt="Istanbul">
                                <div class="hero-small-info">
                                    <h4>Istanbul</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/umrah.jpg" alt="Umrah">
                                <div class="hero-small-info">
                                    <h4>Umrah</h4>
                                    <a href="umrah.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 (Was Slide 2: Spiritual) -->
                <div class="swiper-slide hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/umrah.jpg');">
                    <div class="hero-content-wrapper">
                        <div class="hero-text">
                            <h2>Spiritual Journeys with<br><span style="color: var(--secondary-color);">Complete Peace of Mind</span></h2>
                            <p>Experience the ultimate spiritual fulfillment with our expertly crafted Umrah and Hajj packages. We handle the logistics so you can focus on your prayers.</p>
                            <a href="umrah.php" class="btn-primary">View Packages</a>
                        </div>
                        <div class="hero-small-images">
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/hajj.jpg" alt="Hajj">
                                <div class="hero-small-info">
                                    <h4>Hajj Services</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/umrah.jpg" alt="Umrah">
                                <div class="hero-small-info">
                                    <h4>Umrah Packages</h4>
                                    <a href="umrah.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="images/study.jpg" alt="Study">
                                <div class="hero-small-info">
                                    <h4>Study Abroad</h4>
                                    <a href="study.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Visa">
                                <div class="hero-small-info">
                                    <h4>Visa Assist</h4>
                                    <a href="visa.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Pagination -->
            <div class="swiper-pagination hero-pagination"></div>
            <!-- Navigation -->
            <div class="swiper-button-next hero-next"></div>
            <div class="swiper-button-prev hero-prev"></div>
        </div>
    </section>
HTML;

$index = preg_replace($hero_pattern, $hero_new, $index, 1);
file_put_contents('f:\wamp64\www\nabeel\index.php', $index);


// Now update CSS for the 2x2 grid
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_old = <<<CSS
        .hero-small-images {
            display: flex;
            gap: 20px;
            opacity: 0;
            transform: translateX(50px);
            transition: all 1s ease-out;
            transition-delay: 0.3s;
        }
CSS;

$css_new = <<<CSS
        .hero-small-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            opacity: 0;
            transform: translateX(50px);
            transition: all 1s ease-out;
            transition-delay: 0.3s;
        }
CSS;
$css = str_replace($css_old, $css_new, $css);

$css = preg_replace('/\.hero-small-card\s*\{.*?border-color 0\.4s ease;\s*\}/s', ".hero-small-card {\n            position: relative;\n            width: 140px;\n            height: 190px;\n            border-radius: 12px;\n            border: 3px solid rgba(255, 255, 255, 0.5);\n            box-shadow: 0 15px 30px rgba(0,0,0,0.4);\n            overflow: hidden;\n            transition: transform 0.4s ease, border-color 0.4s ease;\n        }", $css);

$css = preg_replace('/\.hero-small-card:nth-child\(2\)\s*\{.*?\.hero-small-card:nth-child\(2\):hover\s*\{.*?\}/s', ".hero-small-card:nth-child(2), .hero-small-card:nth-child(4) {\n            transform: translateY(30px);\n        }\n\n        .hero-small-card:hover {\n            transform: scale(1.05) translateY(-5px);\n            border-color: var(--secondary-color);\n            z-index: 5;\n        }\n\n        .hero-small-card:nth-child(2):hover, .hero-small-card:nth-child(4):hover {\n            transform: scale(1.05) translateY(20px);\n        }", $css);

file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "Hero rebuilt!";
?>
