<?php
$page_title = 'Leadership & Management - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Management Page Styles */
    .mgmt-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }

    .mgmt-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .mgmt-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Vibrant CEO Spotlight */
    .ceo-section {
        padding: 100px 5%;
        background-color: #fff;
    }

    .ceo-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 60px;
        align-items: center;
    }

    .ceo-image-wrapper {
        flex: 1;
        position: relative;
    }

    /* Colorful shadow/border for CEO */
    .ceo-image-wrapper img {
        width: 100%;
        border-radius: 12px;
        box-shadow: -20px 20px 0px rgba(189, 178, 255, 0.5);
        position: relative;
        z-index: 2;
        transition: all 0.4s ease;
    }

    .ceo-image-wrapper:hover img {
        transform: translate(5px, -5px);
        box-shadow: -25px 25px 0px var(--primary-color);
    }

    .ceo-content {
        flex: 1.2;
    }

    .ceo-content h2 {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    .ceo-title {
        color: #9b59b6;
        background: rgba(155, 89, 182, 0.1);
        padding: 6px 15px;
        border-radius: 8px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 30px;
        display: inline-block;
        font-size: 0.85rem;
    }

    .ceo-quote {
        font-size: 1.4rem;
        font-style: italic;
        color: #0b1120;
        line-height: 1.6;
        margin-bottom: 25px;
        border-left: 5px solid #2ecc71;
        padding-left: 20px;
        background: rgba(46, 204, 113, 0.05);
        padding: 20px;
        border-radius: 0 15px 15px 0;
    }

    .ceo-text {
        color: #555;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 25px;
    }

    .ceo-signature {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-size: 2.8rem;
        color: var(--secondary-color);
        margin-top: 20px;
    }

    /* Vibrant Executive Board */
    .board-section {
        padding: 100px 5%;
        background-color: #FFF4F4;
        /* Friendly soft background */
    }

    .board-header {
        text-align: center;
        margin-bottom: 70px;
    }

    .board-header h2 {
        font-family: var(--font-heading);
        font-size: 3.5rem;
        margin-bottom: 15px;
        color: var(--primary-color);
    }

    .board-header p {
        color: #666;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .board-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    .exec-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        position: relative;
    }

    .exec-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
    }

    /* Colorful Card Accents */
    .exec-1 {
        border-bottom: 6px solid #3A86FF;
    }

    .exec-1 .role {
        color: #3A86FF;
        background: rgba(58, 134, 255, 0.1);
    }

    .exec-2 {
        border-bottom: 6px solid #f39c12;
    }

    .exec-2 .role {
        color: #f39c12;
        background: rgba(243, 156, 18, 0.1);
    }

    .exec-3 {
        border-bottom: 6px solid #2ecc71;
    }

    .exec-3 .role {
        color: #2ecc71;
        background: rgba(46, 204, 113, 0.1);
    }

    .exec-image {
        width: 100%;
        height: 350px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .exec-card:hover .exec-image {
        transform: scale(1.05);
    }

    .exec-info {
        padding: 35px 30px;
        text-align: center;
        background: #fff;
        position: relative;
        z-index: 2;
    }

    .exec-info h3 {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        margin-bottom: 10px;
        color: #0b1120;
    }

    .exec-info .role {
        padding: 6px 15px;
        border-radius: 8px;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        display: inline-block;
        font-weight: 700;
    }

    .exec-info p {
        color: #666;
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Vibrant CTA Section */
    .mgmt-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .mgmt-cta::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        z-index: 1;
    }

    .mgmt-cta::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        bottom: -200px;
        right: -100px;
        z-index: 1;
    }

    @media (max-width: 992px) {
        .ceo-container {
            flex-direction: column;
        }

        .ceo-image-wrapper {
            margin-bottom: 40px;
        }
    }
</style>

<!-- Vibrant Page Header -->
<div class="mgmt-hero">
    <h1>Leadership</h1>
    <p>The Visionaries Behind Nabeel International</p>
</div>

<!-- CEO Spotlight Section -->
<section class="ceo-section">
    <div class="ceo-container">
        <div class="ceo-image-wrapper">
            <img loading="lazy" src="images/ceo.jpg" alt="Mr. Ibrar Ahmad - CEO">
        </div>
        <div class="ceo-content">
            <h2 style="font-weight: 800; font-size: 3.5rem; letter-spacing: -1px; color: var(--primary-color);">Mr. Ibrar Ahmad</h2>
            <span class="ceo-title" style="font-size: 1.1rem; padding: 8px 20px;">Founder & Chief Executive Officer</span>

            <div class="ceo-quote" style="border-left: 6px solid #2ecc71; font-weight: 600; font-size: 1.5rem; line-height: 1.5; color: #0b1120;">
                "Our mission goes beyond facilitating travel; we architect transformative global experiences built on an ironclad foundation of trust, absolute reliability, and uncompromising excellence."
            </div>

            <p class="ceo-text" style="font-size: 1.15rem; font-weight: 500;">With decades of formidable, visionary leadership in the global travel and tourism sector,
                Mr. Ibrar Ahmad established Nabeel International with an unyielding ambition: to dominate and redefine the absolute standards of the travel industry. Under his resolute guidance, the company has rapidly evolved from a regional agency into an unstoppable, globally recognized powerhouse.</p>
            <p class="ceo-text" style="font-size: 1.15rem; font-weight: 500;">His aggressive commitment to strategic innovation and a relentless demand for operational perfection ensures that Nabeel International executes the highly complex itineraries of tens of thousands of pilgrims, elite corporate executives, and international travelers with flawless precision.</p>

            <div class="ceo-signature" style="font-weight: 700;">
                Mr. Ibrar Ahmad
            </div>
        </div>
    </div>
</section>

<!-- Managing Director Spotlight Section -->
<section class="ceo-section" style="background-color: #FFF4F4;">
    <div class="ceo-container" style="flex-direction: row-reverse;">
        <div class="ceo-image-wrapper">
            <img loading="lazy" src="images/director.jpg" alt="Ishtiaq Ahmed - Managing Director">
        </div>
        <div class="ceo-content">
            <h2 style="font-weight: 800; font-size: 3.5rem; letter-spacing: -1px; color: var(--primary-color);">Ishtiaq Ahmed</h2>
            <span class="ceo-title" style="font-size: 1.1rem; padding: 8px 20px; background: rgba(58, 134, 255, 0.1); color: #3A86FF;">Managing Director</span>

            <div class="ceo-quote" style="border-left: 6px solid #3A86FF; font-weight: 600; font-size: 1.5rem; line-height: 1.5; color: #0b1120;">
                "Operational excellence is not an act, but a habit. We ensure that every journey is executed with unparalleled precision and care."
            </div>

            <p class="ceo-text" style="font-size: 1.15rem; font-weight: 500;">As the Managing Director, Ishtiaq Ahmed brings a wealth of expertise in strategic operations and global supply chain management. His unwavering dedication to maintaining the highest standards of service ensures that Nabeel International continually exceeds the expectations of its diverse, global clientele.</p>
            <p class="ceo-text" style="font-size: 1.15rem; font-weight: 500;">Working in seamless tandem with the CEO, his leadership fosters a culture of innovation and a relentless commitment to client satisfaction, making every single travel experience truly exceptional.</p>
            
            <div class="ceo-signature" style="font-weight: 700;">
                Ishtiaq Ahmed
            </div>
        </div>
    </div>
</section>

<!-- Vibrant CTA Section -->
<section class="mgmt-cta">
    <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">
        Join Our Winning Team</h2>
    <p
        style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">
        We are always looking for passionate talent to join our dynamic leadership and operational teams.</p>
    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
        <a href="career.php"
            style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Explore
            Careers</a>
        <a href="contact.php"
            style="background: #fff; border: 2px solid #fff; color: #0b1120; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">Contact
            Us</a>
    </div>
</section>

<?php require 'layout/footer.php'; ?>