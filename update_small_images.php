<?php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

// Replace small images in Slide 1
$slide1_old = <<<HTML
                        <div class="hero-small-images">
                            <img src="images/study.jpg" alt="Study">
                            <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Travel">
                        </div>
HTML;
$slide1_new = <<<HTML
                        <div class="hero-small-images">
                            <div class="hero-small-card">
                                <img src="images/study.jpg" alt="Study">
                                <div class="hero-small-info">
                                    <h4>Study Abroad</h4>
                                    <a href="study.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Travel">
                                <div class="hero-small-info">
                                    <h4>Holidays</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
HTML;
$index = str_replace($slide1_old, $slide1_new, $index);

// Replace small images in Slide 2
$slide2_old = <<<HTML
                        <div class="hero-small-images">
                            <img src="images/hajj.jpg" alt="Hajj">
                            <img src="images/umrah.jpg" alt="Umrah">
                        </div>
HTML;
$slide2_new = <<<HTML
                        <div class="hero-small-images">
                            <div class="hero-small-card">
                                <img src="images/hajj.jpg" alt="Hajj">
                                <div class="hero-small-info">
                                    <h4>Hajj Services</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img src="images/umrah.jpg" alt="Umrah">
                                <div class="hero-small-info">
                                    <h4>Umrah Packages</h4>
                                    <a href="umrah.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
HTML;
$index = str_replace($slide2_old, $slide2_new, $index);

// Replace small images in Slide 3
$slide3_old = <<<HTML
                        <div class="hero-small-images">
                            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Visa">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Business">
                        </div>
HTML;
$slide3_new = <<<HTML
                        <div class="hero-small-images">
                            <div class="hero-small-card">
                                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Visa">
                                <div class="hero-small-info">
                                    <h4>Visa Assist</h4>
                                    <a href="visa.php" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero-small-card">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Business">
                                <div class="hero-small-info">
                                    <h4>Corporate</h4>
                                    <a href="#" class="btn-tiny"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
HTML;
$index = str_replace($slide3_old, $slide3_new, $index);

file_put_contents('f:\wamp64\www\nabeel\index.php', $index);


// Now update CSS
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

$css_add = <<<CSS

        /* Hero Small Image Cards */
        .hero-small-card {
            position: relative;
            width: 180px;
            height: 260px;
            border-radius: 15px;
            border: 4px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            overflow: hidden;
            transition: transform 0.4s ease, border-color 0.4s ease;
        }

        .hero-small-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        
        .hero-small-card::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 60%;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        }

        .hero-small-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-small-info h4 {
            color: #fff;
            font-size: 0.95rem;
            margin: 0;
            text-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }

        .btn-tiny {
            background: var(--primary-color);
            color: #fff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            transition: all 0.3s ease;
        }
        
        .btn-tiny:hover {
            background: var(--secondary-color);
            transform: scale(1.1);
            color: #fff;
        }

        .hero-small-card:nth-child(2) {
            transform: translateY(40px);
        }

        .hero-small-card:hover {
            transform: scale(1.05) translateY(10px);
            border-color: var(--secondary-color);
        }
        
        .hero-small-card:nth-child(2):hover {
            transform: scale(1.05) translateY(30px);
        }

        .hero-small-card:hover img {
            transform: scale(1.1);
        }
CSS;

// Remove the old .hero-small-images img rules to avoid conflict
$css = preg_replace('/\.hero-small-images img\s*\{[^}]+\}/s', '', $css);
$css = preg_replace('/\.hero-small-images img:nth-child\(2\)\s*\{[^}]+\}/s', '', $css);
$css = preg_replace('/\.hero-small-images img:hover\s*\{[^}]+\}/s', '', $css);

$css = str_replace('/* Hero Slider */', '/* Hero Slider */' . $css_add, $css);
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "Small image cards added!";
?>
