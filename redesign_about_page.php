<?php
$about_content = <<<HTML
<?php
\$page_title = 'About Us - Nabeel International';
require 'layout/header.php';
?>

    <!-- Page Header -->
    <div class="page-header" style="background: linear-gradient(rgba(11, 17, 32, 0.7), rgba(11, 17, 32, 0.8)), url('images/istanbul.jpg') center/cover;">
        <h1>Our Story</h1>
        <p style="color: var(--secondary-color);">Discover the journey behind Nabeel International</p>
    </div>

    <!-- About Intro Section -->
    <section class="about-intro-section" style="padding: 100px 5%; background-color: #FFF4F4;">
        <div class="about-intro-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; max-width: 1200px; margin: auto; align-items: center;">
            <div class="about-intro-text">
                <div class="section-tag" style="color: var(--primary-color); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">Who We Are</div>
                <h2 style="font-family: var(--font-heading); font-size: 2.8rem; color: #0b1120; margin-bottom: 25px; line-height: 1.2;">Your Trusted Partner in Global Travel</h2>
                <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 20px;">Nabeel International Tour Operators (Pvt. Ltd.) is a premier travel and tourism company dedicated to crafting comfortable, reliable, and deeply memorable travel experiences.</p>
                <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 30px;">With over 15 years of industry excellence, we specialize in comprehensive travel solutions ranging from specialized Umrah and Hajj services to bespoke holiday packages and seamless corporate travel management.</p>
                
                <div class="about-stats" style="display: flex; gap: 40px; border-top: 1px solid #ddd; padding-top: 30px;">
                    <div>
                        <h3 style="font-size: 2.5rem; color: var(--primary-color); font-family: var(--font-heading);">15+</h3>
                        <p style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Years Experience</p>
                    </div>
                    <div>
                        <h3 style="font-size: 2.5rem; color: var(--primary-color); font-family: var(--font-heading);">50k+</h3>
                        <p style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Happy Travelers</p>
                    </div>
                    <div>
                        <h3 style="font-size: 2.5rem; color: var(--primary-color); font-family: var(--font-heading);">120+</h3>
                        <p style="color: #666; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Global Destinations</p>
                    </div>
                </div>
            </div>
            <div class="about-intro-image" style="position: relative;">
                <img loading="lazy" src="images/study.jpg" alt="About Us" style="width: 100%; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                <div style="position: absolute; bottom: -30px; left: -30px; background: var(--primary-color); color: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 15px 30px rgba(58, 134, 255, 0.3); max-width: 250px;">
                    <i class="fas fa-quote-left" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px;"></i>
                    <p style="font-size: 1.1rem; font-style: italic; line-height: 1.5;">"Making every journey comfortable, organized, and truly unforgettable."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision" style="padding: 100px 5%; background-color: #0b1120; color: #fff;">
        <div style="max-width: 1200px; margin: auto; display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <!-- Mission -->
            <div style="background: rgba(255,255,255,0.05); padding: 50px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                <div style="width: 60px; height: 60px; background: var(--primary-color); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 25px;">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 style="font-size: 2rem; font-family: var(--font-heading); margin-bottom: 20px; color: var(--secondary-color);">Our Mission</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); line-height: 1.7;">To provide highly dependable and professional services that make every journey comfortable and organized. We strive to exceed our clients' expectations by delivering tailored travel solutions with uncompromising quality and dedicated support.</p>
            </div>
            <!-- Vision -->
            <div style="background: rgba(255,255,255,0.05); padding: 50px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); transition: transform 0.3s ease;">
                <div style="width: 60px; height: 60px; background: var(--secondary-color); color: #0b1120; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 25px;">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 style="font-size: 2rem; font-family: var(--font-heading); margin-bottom: 20px; color: var(--secondary-color);">Our Vision</h3>
                <p style="font-size: 1.1rem; color: rgba(255,255,255,0.8); line-height: 1.7;">To be globally recognized as the most trusted and innovative travel partner, continually expanding our horizons while maintaining our core values of integrity, customer-centricity, and service excellence.</p>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="core-values" style="padding: 100px 5%; background-color: #fff;">
        <div style="max-width: 1200px; margin: auto; text-align: center;">
            <div class="section-tag" style="color: var(--secondary-color); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">Why Trust Us</div>
            <h2 style="font-family: var(--font-heading); font-size: 2.8rem; color: #0b1120; margin-bottom: 60px;">Our Core Values</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <!-- Value 1 -->
                <div style="padding: 40px 30px; background: #f8fafc; border-radius: 15px; text-align: center; transition: all 0.3s ease; border-bottom: 4px solid var(--primary-color);">
                    <i class="fas fa-shield-check" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Reliability</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">We deliver on our promises, ensuring your travel plans are executed flawlessly and on time.</p>
                </div>
                <!-- Value 2 -->
                <div style="padding: 40px 30px; background: #f8fafc; border-radius: 15px; text-align: center; transition: all 0.3s ease; border-bottom: 4px solid var(--secondary-color);">
                    <i class="fas fa-heart" style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Customer First</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Your comfort and satisfaction are at the heart of every package we design and service we provide.</p>
                </div>
                <!-- Value 3 -->
                <div style="padding: 40px 30px; background: #f8fafc; border-radius: 15px; text-align: center; transition: all 0.3s ease; border-bottom: 4px solid #2ecc71;">
                    <i class="fas fa-gem" style="font-size: 2.5rem; color: #2ecc71; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Excellence</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">We continuously strive for the highest standards in hospitality, ticketing, and customer support.</p>
                </div>
                <!-- Value 4 -->
                <div style="padding: 40px 30px; background: #f8fafc; border-radius: 15px; text-align: center; transition: all 0.3s ease; border-bottom: 4px solid #e74c3c;">
                    <i class="fas fa-globe" style="font-size: 2.5rem; color: #e74c3c; margin-bottom: 20px;"></i>
                    <h4 style="font-size: 1.3rem; margin-bottom: 15px; color: #0b1120;">Global Reach</h4>
                    <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Extensive partnerships worldwide to bring you the best deals, accommodations, and experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background: linear-gradient(rgba(15, 41, 77, 0.9), rgba(58, 134, 255, 0.95)), url('images/umrah.jpg') center/cover; padding: 100px 5%; text-align: center; color: #fff;">
        <div style="max-width: 800px; margin: auto;">
            <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px;">Ready to Start Your Journey?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9;">Contact our travel experts today and let us craft the perfect itinerary for your next adventure, business trip, or spiritual pilgrimage.</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" style="background: #fff; color: var(--primary-color); padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Plan Your Trip</a>
                <a href="management.php" style="background: transparent; border: 2px solid #fff; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease;">Meet Our Team</a>
            </div>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\about.php', $about_content);
echo "about.php completely redesigned!";
?>
