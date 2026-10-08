<?php
$study_content = <<<HTML
<?php
\$page_title = 'Study Abroad - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Study Page Styles */
    .study-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .study-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .study-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 700px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Popular Destinations Grid */
    .destinations-section {
        padding: 100px 5%;
        background-color: #fff;
    }

    .section-title-color {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 60px;
        text-align: center;
    }

    .dest-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    .dest-card {
        background: #fdfdfd;
        border: 2px solid #f0f0f0;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
    }

    .dest-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        background: #fff;
    }

    /* Colored Accents */
    .dest-1:hover { border-color: #3A86FF; }
    .dest-2:hover { border-color: #9b59b6; }
    .dest-3:hover { border-color: #2ecc71; }
    .dest-4:hover { border-color: #f39c12; }
    .dest-5:hover { border-color: #e74c3c; }
    .dest-6:hover { border-color: #1abc9c; }

    .dest-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .dest-card:hover .dest-image {
        transform: scale(1.05);
    }

    .dest-info {
        padding: 30px;
        position: relative;
        z-index: 2;
        background: #fff;
    }

    .dest-info h3 {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        color: #0b1120;
        margin-bottom: 10px;
    }

    .dest-tags {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
        flex-wrap: wrap;
    }

    .v-tag {
        padding: 5px 12px;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .tag-bachelor { background: rgba(58, 134, 255, 0.1); color: #3A86FF; }
    .tag-master { background: rgba(155, 89, 182, 0.1); color: #9b59b6; }
    .tag-phd { background: rgba(46, 204, 113, 0.1); color: #2ecc71; }

    .dest-info p {
        color: #666;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Services Section */
    .services-section {
        padding: 100px 5%;
        background-color: #FFF4F4; /* Soft pink background */
    }

    .services-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        text-align: center;
    }

    .service-card {
        background: #fff;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        position: relative;
    }

    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        background: rgba(58, 134, 255, 0.1);
        color: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin: 0 auto 25px;
        transition: all 0.3s ease;
    }

    /* Colored icon backgrounds */
    .service-card:nth-child(1):hover .service-icon { background: #3A86FF; color: #fff; transform: scale(1.1); }
    .service-card:nth-child(2) .service-icon { background: rgba(155, 89, 182, 0.1); color: #9b59b6; }
    .service-card:nth-child(2):hover .service-icon { background: #9b59b6; color: #fff; transform: scale(1.1); }
    .service-card:nth-child(3) .service-icon { background: rgba(243, 156, 18, 0.1); color: #f39c12; }
    .service-card:nth-child(3):hover .service-icon { background: #f39c12; color: #fff; transform: scale(1.1); }
    .service-card:nth-child(4) .service-icon { background: rgba(46, 204, 113, 0.1); color: #2ecc71; }
    .service-card:nth-child(4):hover .service-icon { background: #2ecc71; color: #fff; transform: scale(1.1); }

    .service-card h3 {
        font-size: 1.3rem;
        color: #0b1120;
        margin-bottom: 15px;
    }

    .service-card p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* Vibrant CTA Section */
    .study-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .study-cta::before {
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
    
    .study-cta::after {
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
</style>

    <!-- Vibrant Page Header -->
    <div class="study-hero">
        <h1>Study Abroad</h1>
        <p>Unlock your global academic potential with expert educational counseling and university placements.</p>
    </div>

    <!-- Popular Destinations Section -->
    <section class="destinations-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Global Universities</span>
        </div>
        <h2 class="section-title-color">Top Study Destinations</h2>
        
        <div class="dest-grid">
            <!-- UK -->
            <div class="dest-card dest-1">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1513622470522-26c311a07115?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="UK" class="dest-image"></div>
                <div class="dest-info">
                    <h3>United Kingdom</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-bachelor">Bachelors</span>
                        <span class="v-tag tag-master">Masters</span>
                    </div>
                    <p>Experience world-class education and a multicultural environment with fast-track admission processing.</p>
                </div>
            </div>

            <!-- Australia -->
            <div class="dest-card dest-2">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Australia" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Australia</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-bachelor">Bachelors</span>
                        <span class="v-tag tag-master">Masters</span>
                    </div>
                    <p>Study in top-ranked universities with excellent post-study work opportunities and high living standards.</p>
                </div>
            </div>

            <!-- Canada -->
            <div class="dest-card dest-3">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1550596334-7bb40a71b6bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Canada" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Canada</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-bachelor">Diploma</span>
                        <span class="v-tag tag-master">PG Pathway</span>
                    </div>
                    <p>Highly welcoming to international students, offering affordable tuition and clear pathways to permanent residency.</p>
                </div>
            </div>

            <!-- USA -->
            <div class="dest-card dest-4">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="USA" class="dest-image"></div>
                <div class="dest-info">
                    <h3>United States</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-bachelor">Bachelors</span>
                        <span class="v-tag tag-phd">PhD</span>
                    </div>
                    <p>Access the world's most prestigious universities and diverse academic programs with our expert guidance.</p>
                </div>
            </div>

            <!-- Germany -->
            <div class="dest-card dest-5">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Germany" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Germany</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-bachelor">Engineering</span>
                        <span class="v-tag tag-master">Business</span>
                    </div>
                    <p>Benefit from world-renowned public universities offering tuition-free or highly subsidized quality education.</p>
                </div>
            </div>

            <!-- Turkey -->
            <div class="dest-card dest-6">
                <div style="overflow: hidden;"><img loading="lazy" src="images/study.jpg" alt="Turkey" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Turkey</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-bachelor">Medicine</span>
                        <span class="v-tag tag-master">Engineering</span>
                    </div>
                    <p>A unique bridge between East and West, offering affordable living costs and excellent scholarship opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">How We Support You</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>Career Counseling</h3>
                <p>We help you identify the perfect course and university that aligns seamlessly with your academic background and career goals.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-university"></i></div>
                <h3>Admission Processing</h3>
                <p>From application forms to Statement of Purpose (SOP) reviews, we ensure your university application stands out.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-passport"></i></div>
                <h3>Visa Guidance</h3>
                <p>Our experts assist with financial documentation, interview preparation, and complete student visa application filing.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-home"></i></div>
                <h3>Pre-Departure Support</h3>
                <p>We provide comprehensive assistance with securing affordable student accommodation and booking discounted flights.</p>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="study-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Begin Your Global Journey Today</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Book a free counseling session with our certified education consultants and take the first step towards your dream university.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Book Free Session</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> Chat with Expert</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\study.php', $study_content);
echo "study.php successfully redesigned with the vibrant pattern!";
?>
