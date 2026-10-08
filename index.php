<?php
$page_title = 'Home - Nabeel International';
require 'layout/header.php';
?>

<style>
/* Left Side Sticky Social Bar */
.sticky-social-bar {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    z-index: 9999;
    display: flex;
    flex-direction: column;
    box-shadow: 2px 0 15px rgba(0,0,0,0.15);
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    overflow: hidden;
}

.sticky-social-bar a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    color: #fff;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    text-decoration: none;
    position: relative;
}

.sticky-social-bar a.sticky-wa { background-color: #25D366; }
.sticky-social-bar a.sticky-fb { background-color: #1877F2; }
.sticky-social-bar a.sticky-ig { background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); }
.sticky-social-bar a.sticky-tw { background-color: #1DA1F2; }

.sticky-social-bar a:hover {
    width: 65px;
    background-blend-mode: darken;
}

/* Mobile Responsive Bottom Bar */
@media (max-width: 768px) {
    .sticky-social-bar {
        top: auto;
        bottom: 0;
        left: 0;
        width: 100%;
        transform: none;
        flex-direction: row;
        border-radius: 0;
        box-shadow: 0 -5px 15px rgba(0,0,0,0.15);
    }
    
    .sticky-social-bar a {
        flex: 1;
        width: auto;
        height: 60px;
        font-size: 1.8rem;
    }
    
    .sticky-social-bar a:hover {
        width: auto;
    }
}
</style>

<div class="sticky-social-bar">
    <a href="https://wa.me/923401192123" class="sticky-wa" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    <a href="#" class="sticky-fb" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="sticky-ig" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" class="sticky-tw" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
</div>

<!-- Hero Slider -->
    <section class="hero-section">
                <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                
                <!-- Slide 1 (Was Slide 3: Corporate) -->
                <div class="swiper-slide hero-slide" style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
                    <div class="hero-content-wrapper">
                        <div class="hero-text">
                            <div style="font-size: 1.2rem; text-transform: uppercase; letter-spacing: 2px; color: #d4af37; margin-bottom: 10px; font-weight: 600;">Nabeel International</div>
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
                            <div style="font-size: 1.2rem; text-transform: uppercase; letter-spacing: 2px; color: #d4af37; margin-bottom: 10px; font-weight: 600;">Nabeel International</div>
                            <h2>Explore the World with<br><span style="color: var(--secondary-color);">Us</span></h2>
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
                            <div style="font-size: 1.2rem; text-transform: uppercase; letter-spacing: 2px; color: #d4af37; margin-bottom: 10px; font-weight: 600;">Nabeel International</div>
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

    <!-- Intro Cards Section -->
    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Start Your Journey?</h2>
            <p>Contact our travel experts today and let us craft the perfect itinerary for your next adventure.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn-primary" style="background-color: #fff; color: var(--primary-color);">Plan Your Trip</a>
                <a href="tel:+923401192123" class="btn-primary" style="background-color: transparent; border: 2px solid #fff;">Call Us Now</a>
            </div>
        </div>
    </section>

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

    <!-- About Section -->
        <!-- About Section Redesign -->
    <section class="about-section">
        <div class="about-grid">
            <div class="about-image-grid-4">
                <div class="col-left">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Travel" class="img-1">
                    <img loading="lazy" src="images/study.jpg" alt="Study" class="img-2">
                </div>
                <div class="col-right">
                    <img loading="lazy" src="images/umrah.jpg" alt="Umrah" class="img-3">
                    <img loading="lazy" src="images/istanbul.jpg" alt="Istanbul" class="img-4">
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

    <!-- Popular Destinations Section -->
    <section class="destinations-section">
        <h2 class="section-title">Popular Destinations</h2>
        <p class="section-subtitle">Explore our most requested global destinations tailored for unforgettable experiences.</p>
        <div class="destinations-grid">
            <div class="destination-card">
                <img loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dubai">
                <div class="dest-info">
                    <h3>Dubai, UAE</h3>
                    <p>Experience luxury, shopping, and stunning modern architecture.</p>
                </div>
            </div>
            <div class="destination-card">
                <img loading="lazy" src="images/istanbul.jpg" alt="Istanbul">
                <div class="dest-info">
                    <h3>Istanbul, Turkey</h3>
                    <p>Where history meets breathtaking views and vibrant culture.</p>
                </div>
            </div>
            <div class="destination-card">
                <img loading="lazy" src="https://images.unsplash.com/photo-1513407030348-c983a97b98d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Tokyo">
                <div class="dest-info">
                    <h3>Tokyo, Japan</h3>
                    <p>Discover a mesmerizing blend of tradition and future-tech.</p>
                </div>
            </div>
        </div>
    </section>

    

    <?php require 'layout/footer.php'; ?>
