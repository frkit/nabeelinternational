<?php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

$old_services_pattern = '/<section id="services" class="services-intro">.*?<\/section>\s*<!-- About Section/s';

$new_services = <<<HTML
    <section id="services" class="services-intro">
        <div class="section-tag" style="text-align: center; margin-bottom: 10px;">Our Services</div>
        <h2 class="section-title">Complete Travel Solutions</h2>
        <p class="section-subtitle">Let us take care of the details while you focus on enjoying your journey. Complete travel solutions under one roof.</p>
        
        <div class="swiper services-swiper">
            <div class="swiper-wrapper">
                
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="service-premium-card" style="background-image: url('images/umrah.jpg');">
                        <div class="spc-overlay"></div>
                        <div class="spc-content">
                            <div class="spc-icon" style="color: #2ecc71;"><i class="fas fa-kaaba"></i></div>
                            <h3>Umrah Packages</h3>
                            <p>Experience a peaceful and well-organized spiritual journey with our comprehensive travel solutions.</p>
                            <a href="umrah.php" class="spc-btn">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="service-premium-card" style="background-image: url('images/hajj.jpg');">
                        <div class="spc-overlay"></div>
                        <div class="spc-content">
                            <div class="spc-icon" style="color: #9b59b6;"><i class="fas fa-mosque"></i></div>
                            <h3>Hajj Services</h3>
                            <p>Organized Hajj travel assistance designed to help pilgrims focus purely on their spiritual journey.</p>
                            <a href="#" class="spc-btn">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="service-premium-card" style="background-image: url('https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="spc-overlay"></div>
                        <div class="spc-content">
                            <div class="spc-icon" style="color: #3498db;"><i class="fas fa-plane-departure"></i></div>
                            <h3>Holiday Packages</h3>
                            <p>Discover exciting destinations worldwide with customized holiday packages for individuals and families.</p>
                            <a href="#" class="spc-btn">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="service-premium-card" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="spc-overlay"></div>
                        <div class="spc-content">
                            <div class="spc-icon" style="color: #e67e22;"><i class="fas fa-passport"></i></div>
                            <h3>Visa Assistance</h3>
                            <p>Get professional assistance with visa documentation, processing, and application procedures.</p>
                            <a href="visa.php" class="spc-btn">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="service-premium-card" style="background-image: url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        <div class="spc-overlay"></div>
                        <div class="spc-content">
                            <div class="spc-icon" style="color: #34495e;"><i class="fas fa-briefcase"></i></div>
                            <h3>Corporate Travel</h3>
                            <p>Streamline your business trips with our dedicated corporate travel management ensuring efficiency.</p>
                            <a href="#" class="spc-btn">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <div class="service-premium-card" style="background-image: url('images/study.jpg');">
                        <div class="spc-overlay"></div>
                        <div class="spc-content">
                            <div class="spc-icon" style="color: #e74c3c;"><i class="fas fa-user-graduate"></i></div>
                            <h3>Study Abroad</h3>
                            <p>Expert guidance and admission assistance for students looking to pursue higher education worldwide.</p>
                            <a href="study.php" class="spc-btn">Explore <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- About Section
HTML;

$index = preg_replace($old_services_pattern, $new_services, $index, 1);
file_put_contents('f:\wamp64\www\nabeel\index.php', $index);

// Now update CSS
$css = file_get_contents('f:\wamp64\www\nabeel\layout\style.css');

// Remove old card styles
$css = preg_replace('/\.card \{.*?\.icon-corporate \{.*?\}/s', '', $css);

$css_new = <<<CSS

        /* Premium Background-Image Service Cards */
        .service-premium-card {
            position: relative;
            height: 400px;
            border-radius: 12px;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            cursor: pointer;
        }

        .service-premium-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 45px rgba(0,0,0,0.2);
        }

        .spc-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.85) 100%);
            transition: opacity 0.5s ease;
        }

        .service-premium-card:hover .spc-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.95) 100%);
        }

        .spc-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px 25px;
            color: #fff;
            text-align: left;
            z-index: 2;
            transform: translateY(20px);
            transition: transform 0.5s ease;
        }

        .service-premium-card:hover .spc-content {
            transform: translateY(0);
        }

        .spc-icon {
            width: 45px;
            height: 45px;
            background: #fff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            transition: transform 0.4s ease;
        }

        .service-premium-card:hover .spc-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .spc-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-family: var(--font-heading);
            text-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }

        .spc-content p {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.8);
            line-height: 1.5;
            margin-bottom: 20px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .service-premium-card:hover .spc-content p {
            opacity: 1;
        }

        .spc-btn {
            display: inline-flex;
            align-items: center;
            color: var(--secondary-color);
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .spc-btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .spc-btn:hover {
            color: #fff;
        }
        
        .spc-btn:hover i {
            transform: translateX(5px);
        }
CSS;

$css = str_replace('/* Intro Cards Section */', '/* Intro Cards Section */' . $css_new, $css);
file_put_contents('f:\wamp64\www\nabeel\layout\style.css', $css);

echo "Redesigned services section!";
?>
