<?php
$page_title = 'Corporate Travel - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Corporate Page Styles */
    .corp-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .corp-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .corp-hero p {
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
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .benefit-card {
        background: #fdfdfd;
        border: 2px solid #f0f0f0;
        padding: 40px 30px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 15px 35px rgba(0,0,0,0.02);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    
    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
        background: #fff;
    }

    .benefit-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 25px;
        transition: all 0.4s ease;
    }

    /* Card Hover Animations & Accents */
    .card-1 { border-bottom: 6px solid #3A86FF; }
    .card-1 .benefit-icon { background: rgba(58, 134, 255, 0.15); color: #3A86FF; }
    .card-1:hover .benefit-icon { background: #3A86FF; color: #fff; transform: scale(1.1); }

    .card-2 { border-bottom: 6px solid #9b59b6; }
    .card-2 .benefit-icon { background: rgba(155, 89, 182, 0.15); color: #9b59b6; }
    .card-2:hover .benefit-icon { background: #9b59b6; color: #fff; transform: scale(1.1); }

    .card-3 { border-bottom: 6px solid #2ecc71; }
    .card-3 .benefit-icon { background: rgba(46, 204, 113, 0.15); color: #2ecc71; }
    .card-3:hover .benefit-icon { background: #2ecc71; color: #fff; transform: scale(1.1); }
    
    .card-4 { border-bottom: 6px solid #f39c12; }
    .card-4 .benefit-icon { background: rgba(243, 156, 18, 0.15); color: #f39c12; }
    .card-4:hover .benefit-icon { background: #f39c12; color: #fff; transform: scale(1.1); }

    .benefit-card h3 {
        font-size: 1.3rem;
        color: #0b1120;
        margin-bottom: 15px;
    }
    
    .benefit-card p {
        color: #666;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Services Split Section */
    .services-section {
        padding: 100px 5%;
        background-color: #FFF4F4;
    }

    .services-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .service-row {
        display: flex;
        gap: 50px;
        align-items: center;
        margin-bottom: 80px;
    }
    
    .service-row:nth-child(even) {
        flex-direction: row-reverse;
    }

    .service-image {
        flex: 1;
        position: relative;
    }
    
    .service-image img {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        transition: all 0.5s ease;
    }
    
    .service-image:hover img {
        transform: scale(1.02);
    }

    .service-content {
        flex: 1;
    }

    .service-content h3 {
        font-family: var(--font-heading);
        font-size: 2.2rem;
        color: #0b1120;
        margin-bottom: 15px;
    }
    
    .service-content p {
        color: #555;
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 25px;
    }
    
    .service-list {
        list-style: none;
        padding: 0;
    }
    
    .service-list li {
        margin-bottom: 10px;
        color: #333;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .service-list li i {
        color: var(--primary-color);
    }

    /* Vibrant CTA Section */
    .corp-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .corp-cta::before {
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
    
    .corp-cta::after {
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
        .service-row, .service-row:nth-child(even) {
            flex-direction: column;
            text-align: center;
        }
        .service-list li {
            justify-content: center;
        }
    }
</style>

    <!-- Vibrant Page Header -->
    <div class="corp-hero">
        <h1>Premium Corporate Travel</h1>
        <p>Streamlined business travel solutions designed to reduce costs, ensure compliance, and maximize executive comfort.</p>
    </div>

    <!-- Why Choose Us Section -->
    <section class="benefits-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">The Corporate Advantage</span>
        </div>
        <h2 class="section-title-color">Why Partner With Us?</h2>
        
        <div class="benefits-grid">
            <div class="benefit-card card-1">
                <div class="benefit-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Dedicated Account Manager</h3>
                <p>You get a single point of contact who understands your company's unique travel policy and executive preferences.</p>
            </div>
            
            <div class="benefit-card card-2">
                <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Cost Optimization</h3>
                <p>We leverage our global airline and hotel partnerships to secure exclusive corporate rates, drastically reducing your travel spend.</p>
            </div>
            
            <div class="benefit-card card-3">
                <div class="benefit-icon"><i class="fas fa-headset"></i></div>
                <h3>24/7 VIP Support</h3>
                <p>Business doesn't sleep. Our emergency support desk is available around the clock to handle last-minute flight changes or cancellations.</p>
            </div>
            
            <div class="benefit-card card-4">
                <div class="benefit-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>Comprehensive Reporting</h3>
                <p>Receive detailed monthly analytics and expense reports to track your company's travel budget and compliance perfectly.</p>
            </div>
        </div>
    </section>

    <!-- Services Split Section -->
    <section class="services-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">Our B2B Services</h2>
        
        <div class="services-container">
            <!-- Row 1 -->
            <div class="service-row">
                <div class="service-image">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Flight Management">
                </div>
                <div class="service-content">
                    <h3>Global Flight Management</h3>
                    <p>We handle complex multi-city itineraries, executive class upgrades, and rapid re-routing for your entire workforce.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check-circle"></i> Priority Boarding & Seating</li>
                        <li><i class="fas fa-check-circle"></i> Corporate Mileage Tracking</li>
                        <li><i class="fas fa-check-circle"></i> Private Charter Bookings</li>
                    </ul>
                </div>
            </div>
            
            <!-- Row 2 -->
            <div class="service-row">
                <div class="service-image">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="MICE Events">
                </div>
                <div class="service-content">
                    <h3>M.I.C.E. & Events</h3>
                    <p>Meetings, Incentives, Conferences, and Exhibitions. We orchestrate flawless large-scale corporate events anywhere in the world.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check-circle"></i> Large Group Flight Bookings</li>
                        <li><i class="fas fa-check-circle"></i> Conference Venue Sourcing</li>
                        <li><i class="fas fa-check-circle"></i> On-Ground Logistics & Transfers</li>
                    </ul>
                </div>
            </div>
            
            <!-- Row 3 -->
            <div class="service-row">
                <div class="service-image">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hotel & Visa">
                </div>
                <div class="service-content">
                    <h3>Hotels & Priority Visas</h3>
                    <p>Ensure your team rests well and travels legally with our premium accommodation network and expedited business visa processing.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check-circle"></i> Executive Hotel Contracting</li>
                        <li><i class="fas fa-check-circle"></i> Fast-Track Business Visas</li>
                        <li><i class="fas fa-check-circle"></i> VIP Airport Meet & Greet</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="corp-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Ready to Upgrade Your Business Travel?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Open a corporate account today and let us take the stress out of your company's global travel management.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Open Corporate Account</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> Speak to B2B Expert</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
