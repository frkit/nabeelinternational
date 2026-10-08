<?php
$umrah_content = <<<HTML
<?php
\$page_title = 'Umrah Packages - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Umrah Page Styles */
    .umrah-hero {
        background: linear-gradient(135deg, rgba(58, 134, 255, 0.85) 0%, rgba(189, 178, 255, 0.85) 100%), url('images/umrah.jpg') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .umrah-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .umrah-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 700px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Benefits Section */
    .benefits-section {
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

    .benefits-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    .benefit-card {
        background: #fdfdfd;
        border: 2px solid #f0f0f0;
        padding: 50px 30px;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 15px 35px rgba(0,0,0,0.02);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .benefit-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        background: #fff;
    }

    .benefit-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin: 0 auto 30px;
        transition: all 0.4s ease;
    }

    /* Card Hover Animations & Accents */
    .card-1 { border-bottom: 6px solid #3A86FF; }
    .card-1 .benefit-icon { background: rgba(58, 134, 255, 0.15); color: #3A86FF; }
    .card-1:hover .benefit-icon { background: #3A86FF; color: #fff; transform: scale(1.1) rotate(-10deg); }

    .card-2 { border-bottom: 6px solid #9b59b6; }
    .card-2 .benefit-icon { background: rgba(155, 89, 182, 0.15); color: #9b59b6; }
    .card-2:hover .benefit-icon { background: #9b59b6; color: #fff; transform: scale(1.1) rotate(10deg); }

    .card-3 { border-bottom: 6px solid #2ecc71; }
    .card-3 .benefit-icon { background: rgba(46, 204, 113, 0.15); color: #2ecc71; }
    .card-3:hover .benefit-icon { background: #2ecc71; color: #fff; transform: scale(1.1) rotate(-10deg); }

    .benefit-card h3 {
        font-size: 1.5rem;
        color: #0b1120;
        margin-bottom: 15px;
        font-family: var(--font-heading);
    }
    
    .benefit-card p {
        color: #666;
        line-height: 1.7;
        font-size: 1rem;
    }

    /* Plans Section */
    .plans-section {
        padding: 100px 5%;
        background-color: #FFF4F4; /* Soft warm background */
    }

    .plans-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .plan-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .plan-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .plan-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .plan-content {
        padding: 40px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    /* Popular Badge */
    .plan-popular {
        border: 2px solid var(--primary-color);
        transform: scale(1.05);
        z-index: 2;
    }
    
    .plan-popular:hover {
        transform: scale(1.05) translateY(-10px);
    }

    .popular-badge {
        position: absolute;
        top: 20px;
        right: -35px;
        background: var(--primary-color);
        color: #fff;
        padding: 8px 40px;
        transform: rotate(45deg);
        font-weight: 700;
        font-size: 0.8rem;
        letter-spacing: 1px;
        z-index: 3;
    }

    .plan-name {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        color: #0b1120;
        margin-bottom: 10px;
    }

    .plan-desc {
        color: #888;
        font-size: 0.9rem;
        margin-bottom: 30px;
    }

    .plan-features {
        list-style: none;
        padding: 0;
        margin-bottom: 40px;
        text-align: left;
        flex-grow: 1;
    }

    .plan-features li {
        margin-bottom: 15px;
        color: #555;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .plan-features li i {
        color: var(--primary-color);
        margin-top: 4px;
    }

    .btn-plan {
        display: inline-block;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-outline {
        background: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
    }
    
    .btn-outline:hover {
        background: var(--primary-color);
        color: #fff;
    }

    .btn-solid {
        background: var(--primary-color);
        color: #fff;
        border: 2px solid var(--primary-color);
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3);
    }
    
    .btn-solid:hover {
        background: #2563eb;
        transform: translateY(-2px);
    }

    /* Vibrant CTA Section */
    .umrah-cta {
        background: linear-gradient(135deg, #FFD6E0 0%, #BDB2FF 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .umrah-cta::before {
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
    
    .umrah-cta::after {
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
        .plan-popular { transform: scale(1); margin: 30px 0; }
        .plan-popular:hover { transform: translateY(-10px); }
    }
</style>

    <!-- Vibrant Page Header -->
    <div class="umrah-hero">
        <h1>Sacred Umrah Journeys</h1>
        <p>Experience a deeply spiritual, incredibly comfortable, and perfectly organized Umrah journey with our expert team.</p>
    </div>

    <!-- Why You Need It Section -->
    <section class="benefits-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 30px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Peace of Mind</span>
        </div>
        <h2 class="section-title-color">Why Choose Us for Umrah?</h2>
        
        <div class="benefits-grid">
            <div class="benefit-card card-1">
                <div class="benefit-icon"><i class="fas fa-kaaba"></i></div>
                <h3>Expert Guidance</h3>
                <p>Perform your Umrah with absolute confidence. We provide comprehensive religious guidance and perfectly organized itineraries.</p>
            </div>
            
            <div class="benefit-card card-2">
                <div class="benefit-icon"><i class="fas fa-hotel"></i></div>
                <h3>Premium Accommodations</h3>
                <p>Stay in highly rated, luxurious hotels located in extremely close proximity to the Haram in both Makkah and Madinah.</p>
            </div>
            
            <div class="benefit-card card-3">
                <div class="benefit-icon"><i class="fas fa-passport"></i></div>
                <h3>Complete Logistics</h3>
                <p>From seamless Umrah visa processing and premium flight bookings to dedicated air-conditioned transport within Saudi Arabia.</p>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">Featured Umrah Packages</h2>
        
        <div class="plans-grid">
            <!-- Economy Plan -->
            <div class="plan-card">
                <img src="https://images.unsplash.com/photo-1591504711145-2b476eb34f19?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Economy Umrah" class="plan-image">
                <div class="plan-content">
                    <h3 class="plan-name">Economy Umrah</h3>
                    <p class="plan-desc">Comfortable and budget-friendly 14-day package</p>
                    <ul class="plan-features">
                        <li><i class="fas fa-check-circle"></i> Return Flights Included</li>
                        <li><i class="fas fa-check-circle"></i> Umrah Visa Processing</li>
                        <li><i class="fas fa-check-circle"></i> 3-Star Hotels (Shuttle Service)</li>
                        <li><i class="fas fa-check-circle"></i> Shared Transport in KSA</li>
                        <li><i class="fas fa-check-circle"></i> Ziarat in Makkah & Madinah</li>
                    </ul>
                    <a href="contact.php" class="btn-plan btn-outline">Inquire Now</a>
                </div>
            </div>
            
            <!-- Standard Plan (Popular) -->
            <div class="plan-card plan-popular">
                <div class="popular-badge">POPULAR</div>
                <img src="images/umrah.jpg" alt="Standard Umrah" class="plan-image">
                <div class="plan-content">
                    <h3 class="plan-name" style="color: var(--primary-color);">Standard Umrah</h3>
                    <p class="plan-desc">Premium 14-day package with closer accommodations</p>
                    <ul class="plan-features">
                        <li><i class="fas fa-check-circle"></i> Direct Return Flights</li>
                        <li><i class="fas fa-check-circle"></i> Umrah Visa Processing</li>
                        <li><i class="fas fa-check-circle"></i> 4-Star Hotels (Walking Distance)</li>
                        <li><i class="fas fa-check-circle"></i> Dedicated AC Transport</li>
                        <li><i class="fas fa-check-circle"></i> Guided Ziarat Tours</li>
                    </ul>
                    <a href="contact.php" class="btn-plan btn-solid">Inquire Now</a>
                </div>
            </div>
            
            <!-- Premium Plan -->
            <div class="plan-card">
                <img src="https://images.unsplash.com/photo-1565257121288-028fbe906666?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Executive Umrah" class="plan-image">
                <div class="plan-content">
                    <h3 class="plan-name">Executive Umrah</h3>
                    <p class="plan-desc">Luxury VIP experience (Customized duration)</p>
                    <ul class="plan-features">
                        <li><i class="fas fa-check-circle"></i> Business Class Flights</li>
                        <li><i class="fas fa-check-circle"></i> VIP Umrah Visa Processing</li>
                        <li><i class="fas fa-check-circle"></i> 5-Star Hotels (Direct Haram View)</li>
                        <li><i class="fas fa-check-circle"></i> Private SUV Transfers</li>
                        <li><i class="fas fa-check-circle"></i> Personalized Ziarat Guides</li>
                    </ul>
                    <a href="contact.php" class="btn-plan btn-outline">Inquire Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section id="quote" class="umrah-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Book Your Spiritual Journey</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Our dedicated Umrah consultants are ready to tailor the perfect package for you and your family.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 30px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Contact Umrah Expert</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 30px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\umrah.php', $umrah_content);
echo "umrah.php successfully redesigned with the vibrant pattern!";
?>
