<?php
$page_title = 'Travel Insurance - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Insurance Page Styles */
    .insure-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .insure-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .insure-hero p {
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
    .card-1 { border-bottom: 6px solid #e74c3c; }
    .card-1 .benefit-icon { background: rgba(231, 76, 60, 0.15); color: #e74c3c; }
    .card-1:hover .benefit-icon { background: #e74c3c; color: #fff; transform: scale(1.1) rotate(-10deg); }

    .card-2 { border-bottom: 6px solid #f39c12; }
    .card-2 .benefit-icon { background: rgba(243, 156, 18, 0.15); color: #f39c12; }
    .card-2:hover .benefit-icon { background: #f39c12; color: #fff; transform: scale(1.1) rotate(10deg); }

    .card-3 { border-bottom: 6px solid #3A86FF; }
    .card-3 .benefit-icon { background: rgba(58, 134, 255, 0.15); color: #3A86FF; }
    .card-3:hover .benefit-icon { background: #3A86FF; color: #fff; transform: scale(1.1) rotate(-10deg); }

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
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .plan-card {
        background: #fff;
        border-radius: 12px;
        padding: 40px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .plan-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    /* Popular Badge */
    .plan-popular {
        border: 2px solid var(--primary-color);
        transform: scale(1.05);
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
    }

    .plan-features li {
        margin-bottom: 15px;
        color: #555;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .plan-features li i {
        color: #2ecc71;
        margin-top: 4px;
    }
    
    .plan-features li.disabled {
        color: #ccc;
    }
    
    .plan-features li.disabled i {
        color: #ccc;
    }

    .btn-plan {
        display: inline-block;
        padding: 12px 30px;
        border-radius: 8px;
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
    .insure-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .insure-cta::before {
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
    
    .insure-cta::after {
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
    <div class="insure-hero">
        <h1>Travel With Peace of Mind</h1>
        <p>Comprehensive travel insurance plans to protect you and your family from unexpected emergencies worldwide.</p>
    </div>

    <!-- Why You Need It Section -->
    <section class="benefits-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Protection First</span>
        </div>
        <h2 class="section-title-color">Why Buy Travel Insurance?</h2>
        
        <div class="benefits-grid">
            <div class="benefit-card card-1">
                <div class="benefit-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Medical Emergencies</h3>
                <p>Healthcare abroad can be incredibly expensive. Our insurance covers hospitalization, medications, and emergency medical evacuation instantly.</p>
            </div>
            
            <div class="benefit-card card-2">
                <div class="benefit-icon"><i class="fas fa-plane-slash"></i></div>
                <h3>Trip Cancellations</h3>
                <p>If your flight gets cancelled or delayed due to weather, strikes, or emergencies, we reimburse your non-refundable tickets and hotel bookings.</p>
            </div>
            
            <div class="benefit-card card-3">
                <div class="benefit-icon"><i class="fas fa-suitcase-rolling"></i></div>
                <h3>Lost Baggage & Items</h3>
                <p>Whether your luggage is lost in transit, or your passport gets stolen, our plans provide immediate financial compensation and assistance.</p>
            </div>
        </div>
    </section>

    <!-- Plans Section -->
    <section class="plans-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">Our Coverage Plans</h2>
        
        <div class="plans-grid">
            <!-- Basic Plan -->
            <div class="plan-card">
                <h3 class="plan-name">Basic Cover</h3>
                <p class="plan-desc">Essential protection for short trips</p>
                <ul class="plan-features">
                    <li><i class="fas fa-check-circle"></i> Medical Expenses up to $50,000</li>
                    <li><i class="fas fa-check-circle"></i> Repatriation of Remains</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 Global Assistance</li>
                    <li class="disabled"><i class="fas fa-times-circle"></i> Trip Cancellation</li>
                    <li class="disabled"><i class="fas fa-times-circle"></i> Lost Baggage Cover</li>
                </ul>
                <a href="#quote" class="btn-plan btn-outline">Get Quote</a>
            </div>
            
            <!-- Standard Plan (Popular) -->
            <div class="plan-card plan-popular">
                <div class="popular-badge">POPULAR</div>
                <h3 class="plan-name" style="color: var(--primary-color);">Standard Cover</h3>
                <p class="plan-desc">Comprehensive coverage for family holidays</p>
                <ul class="plan-features">
                    <li><i class="fas fa-check-circle"></i> Medical Expenses up to $100,000</li>
                    <li><i class="fas fa-check-circle"></i> Repatriation of Remains</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 Global Assistance</li>
                    <li><i class="fas fa-check-circle"></i> Trip Cancellation / Delay</li>
                    <li><i class="fas fa-check-circle"></i> Lost Baggage Cover</li>
                </ul>
                <a href="#quote" class="btn-plan btn-solid">Get Quote</a>
            </div>
            
            <!-- Premium Plan -->
            <div class="plan-card">
                <h3 class="plan-name">Premium Cover</h3>
                <p class="plan-desc">Maximum protection for frequent flyers</p>
                <ul class="plan-features">
                    <li><i class="fas fa-check-circle"></i> Medical Expenses up to $500,000</li>
                    <li><i class="fas fa-check-circle"></i> Repatriation of Remains</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 Global Assistance</li>
                    <li><i class="fas fa-check-circle"></i> Trip Cancellation / Delay</li>
                    <li><i class="fas fa-check-circle"></i> Loss of Passport / Cash</li>
                </ul>
                <a href="#quote" class="btn-plan btn-outline">Get Quote</a>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section id="quote" class="insure-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Get Covered Before You Fly!</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Contact our insurance desk to get an instant customized quote for your upcoming journey.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Request a Quote</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> Buy via WhatsApp</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
