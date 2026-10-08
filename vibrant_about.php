<?php
$about_content = <<<HTML
<?php
\$page_title = 'About Us - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant About Page Styles */
    .about-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('images/istanbul.jpg') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .about-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .about-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* About Intro Section */
    .about-intro-section {
        padding: 100px 5%;
        background-color: #fff;
    }

    .about-intro-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        max-width: 1200px;
        margin: auto;
        align-items: center;
    }

    .section-tag-color {
        color: var(--primary-color);
        background: rgba(58, 134, 255, 0.1);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 15px;
        padding: 8px 20px;
        border-radius: 8px;
        display: inline-block;
        font-size: 0.85rem;
    }

    .about-stats {
        display: flex;
        gap: 40px;
        border-top: 2px solid #f0f0f0;
        padding-top: 30px;
        margin-top: 30px;
    }

    /* Mission & Vision (Colorful Cards) */
    .mission-vision {
        padding: 100px 5%;
        background-color: #FFF4F4;
    }

    .mv-card {
        background: #fff;
        padding: 50px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .mv-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    }

    .mv-mission { border-bottom: 6px solid #3A86FF; }
    .mv-mission .mv-icon { background: rgba(58, 134, 255, 0.15); color: #3A86FF; }
    .mv-mission:hover .mv-icon { background: #3A86FF; color: #fff; transform: scale(1.1) rotate(-10deg); }

    .mv-vision { border-bottom: 6px solid #9b59b6; }
    .mv-vision .mv-icon { background: rgba(155, 89, 182, 0.15); color: #9b59b6; }
    .mv-vision:hover .mv-icon { background: #9b59b6; color: #fff; transform: scale(1.1) rotate(10deg); }

    .mv-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin-bottom: 25px;
        transition: all 0.4s ease;
    }

    /* Core Values */
    .core-values {
        padding: 100px 5%;
        background-color: #fff;
    }

    .value-card {
        padding: 40px 30px;
        background: #fdfdfd;
        border: 2px solid #f0f0f0;
        border-radius: 16px;
        text-align: center;
        transition: all 0.4s ease;
    }

    .value-card:hover {
        background: #fff;
        transform: translateY(-4px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }

    /* Colored Borders for Values */
    .val-1:hover { border-color: #3A86FF; }
    .val-2:hover { border-color: #f39c12; }
    .val-3:hover { border-color: #2ecc71; }
    .val-4:hover { border-color: #e74c3c; }

    /* Vibrant CTA Section */
    .about-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .about-cta::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        z-index: 1;
    }
    
    .about-cta::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255,255,255,0.2);
        border-radius: 50%;
        bottom: -200px;
        right: -100px;
        z-index: 1;
    }

    @media (max-width: 992px) {
        .about-intro-grid { grid-template-columns: 1fr; }
    }
</style>

    <!-- Page Header -->
    <div class="about-hero">
        <h1>Our Story</h1>
        <p>Discover the colorful journey behind Nabeel International</p>
    </div>

    <!-- About Intro Section -->
    <section class="about-intro-section">
        <div class="about-intro-grid">
            <div class="about-intro-text">
                <div class="section-tag-color">Who We Are</div>
                <h2 style="font-family: var(--font-heading); font-size: 3rem; color: var(--primary-color); margin-bottom: 25px; line-height: 1.2;">Your Trusted Partner in Global Travel</h2>
                <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 20px;">Nabeel International Tour Operators (Pvt. Ltd.) is a premier travel and tourism company dedicated to crafting comfortable, reliable, and deeply memorable travel experiences.</p>
                <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 20px;">With over 15 years of industry excellence, we specialize in comprehensive travel solutions ranging from specialized Umrah and Hajj services to bespoke holiday packages and seamless corporate travel management.</p>
                
                <div class="about-stats">
                    <div>
                        <h3 style="font-size: 2.8rem; color: #3A86FF; font-family: var(--font-heading);">15+</h3>
                        <p style="color: #666; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing:1px;">Years</p>
                    </div>
                    <div>
                        <h3 style="font-size: 2.8rem; color: #9b59b6; font-family: var(--font-heading);">50k+</h3>
                        <p style="color: #666; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing:1px;">Travelers</p>
                    </div>
                    <div>
                        <h3 style="font-size: 2.8rem; color: #2ecc71; font-family: var(--font-heading);">120+</h3>
                        <p style="color: #666; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing:1px;">Destinations</p>
                    </div>
                </div>
            </div>
            <div class="about-intro-image" style="position: relative;">
                <img loading="lazy" src="images/study.jpg" alt="About Us" style="width: 100%; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                <div style="position: absolute; bottom: -30px; left: -30px; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 20px 50px rgba(58, 134, 255, 0.15); max-width: 280px; border-bottom: 6px solid #FFD6E0;">
                    <i class="fas fa-quote-left" style="font-size: 2.5rem; color: #BDB2FF; margin-bottom: 15px;"></i>
                    <p style="font-size: 1.1rem; font-style: italic; line-height: 1.5; color:#333;">"Making every journey comfortable, organized, and truly unforgettable."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision">
        <div style="max-width: 1200px; margin: auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
            <!-- Mission -->
            <div class="mv-card mv-mission">
                <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                <h3 style="font-size: 2rem; font-family: var(--font-heading); margin-bottom: 20px; color: #0b1120;">Our Mission</h3>
                <p style="font-size: 1.1rem; color: #666; line-height: 1.7;">To provide highly dependable and professional services that make every journey comfortable and organized. We strive to exceed our clients' expectations by delivering tailored travel solutions with uncompromising quality and dedicated support.</p>
            </div>
            <!-- Vision -->
            <div class="mv-card mv-vision">
                <div class="mv-icon"><i class="fas fa-eye"></i></div>
                <h3 style="font-size: 2rem; font-family: var(--font-heading); margin-bottom: 20px; color: #0b1120;">Our Vision</h3>
                <p style="font-size: 1.1rem; color: #666; line-height: 1.7;">To be globally recognized as the most trusted and innovative travel partner, continually expanding our horizons while maintaining our core values of integrity, customer-centricity, and service excellence.</p>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="core-values">
        <div style="max-width: 1200px; margin: auto; text-align: center;">
            <div class="section-tag-color" style="background: rgba(189, 178, 255, 0.2); color: #9b59b6;">Why Trust Us</div>
            <h2 style="font-family: var(--font-heading); font-size: 3rem; color: var(--primary-color); margin-bottom: 60px;">Our Core Values</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <!-- Value 1 -->
                <div class="value-card val-1">
                    <i class="fas fa-shield-check" style="font-size: 2.5rem; color: #3A86FF; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Reliability</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">We deliver on our promises, ensuring your travel plans are executed flawlessly and on time.</p>
                </div>
                <!-- Value 2 -->
                <div class="value-card val-2">
                    <i class="fas fa-heart" style="font-size: 2.5rem; color: #f39c12; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Customer First</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Your comfort and satisfaction are at the heart of every package we design and service we provide.</p>
                </div>
                <!-- Value 3 -->
                <div class="value-card val-3">
                    <i class="fas fa-gem" style="font-size: 2.5rem; color: #2ecc71; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Excellence</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">We continuously strive for the highest standards in hospitality, ticketing, and customer support.</p>
                </div>
                <!-- Value 4 -->
                <div class="value-card val-4">
                    <i class="fas fa-globe" style="font-size: 2.5rem; color: #e74c3c; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Global Reach</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Extensive partnerships worldwide to bring you the best deals, accommodations, and experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="about-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Ready to Start Your Journey?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Contact our travel experts today and let us craft the perfect itinerary for your next adventure, business trip, or spiritual pilgrimage.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Plan Your Trip</a>
            <a href="management.php" style="background: #fff; border: 2px solid #fff; color: #0b1120; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">Meet Our Team</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\about.php', $about_content);
echo "about.php perfectly matched to vibrant pattern!";
?>
