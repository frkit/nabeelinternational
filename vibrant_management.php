<?php
$management_content = <<<HTML
<?php
\$page_title = 'Leadership & Management - Nabeel International';
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
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .mgmt-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
        background-color: #FFF4F4; /* Friendly soft background */
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
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        position: relative;
    }

    .exec-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    }
    
    /* Colorful Card Accents */
    .exec-1 { border-bottom: 6px solid #3A86FF; }
    .exec-1 .role { color: #3A86FF; background: rgba(58, 134, 255, 0.1); }
    
    .exec-2 { border-bottom: 6px solid #f39c12; }
    .exec-2 .role { color: #f39c12; background: rgba(243, 156, 18, 0.1); }
    
    .exec-3 { border-bottom: 6px solid #2ecc71; }
    .exec-3 .role { color: #2ecc71; background: rgba(46, 204, 113, 0.1); }

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
        background: rgba(255,255,255,0.2);
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
        background: rgba(255,255,255,0.2);
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
                <img loading="lazy" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mr. Ahmed Raza - CEO">
            </div>
            <div class="ceo-content">
                <h2>Mr. Ahmed Raza</h2>
                <span class="ceo-title">Founder & Chief Executive Officer</span>
                
                <div class="ceo-quote">
                    "Our goal is not simply to sell travel packages, but to forge lifelong relationships based on trust, unparalleled reliability, and uncompromising excellence."
                </div>
                
                <p class="ceo-text">With over 20 years of transformative leadership in the global travel and tourism sector, Mr. Ahmed Raza founded Nabeel International with a singular vision: to redefine the standards of the travel industry. Under his guidance, the company has grown from a regional agency into a globally recognized powerhouse, successfully managing the complex itineraries of tens of thousands of pilgrims, corporate executives, and holidaymakers worldwide.</p>
                <p class="ceo-text">His commitment to strategic innovation and customer-first operations ensures that Nabeel International remains at the forefront of delivering powerful, seamless, and deeply memorable travel solutions.</p>
                
                <div class="ceo-signature">
                    A. Raza
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant Executive Board Section -->
    <section class="board-section">
        <div class="board-header">
            <h2>The Executive Board</h2>
            <p>Driving Operational Excellence Globally</p>
        </div>
        
        <div class="board-grid">
            <!-- Member 1 -->
            <div class="exec-card exec-1">
                <div style="overflow: hidden;">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ms. Fatima Ali" class="exec-image">
                </div>
                <div class="exec-info">
                    <h3>Ms. Fatima Ali</h3>
                    <div class="role">Director of Global Operations</div>
                    <p>Fatima oversees all international operations. With her meticulous attention to detail, she ensures our global supply chain, hotel networks, and aviation partnerships operate with flawless precision.</p>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="exec-card exec-2">
                <div style="overflow: hidden;">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mr. Salman Khan" class="exec-image">
                </div>
                <div class="exec-info">
                    <h3>Mr. Salman Khan</h3>
                    <div class="role">Head of Corporate Strategy</div>
                    <p>Salman is the driving force behind our enterprise division. He specializes in designing robust corporate travel architectures that maximize efficiency for multinational corporations.</p>
                </div>
            </div>
            
            <!-- Member 3 -->
            <div class="exec-card exec-3">
                <div style="overflow: hidden;">
                    <img loading="lazy" src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mr. Tariq Mahmood" class="exec-image">
                </div>
                <div class="exec-info">
                    <h3>Mr. Tariq Mahmood</h3>
                    <div class="role">VP of Hajj & Umrah Affairs</div>
                    <p>Bringing decades of religious travel expertise, Tariq leads our most critical department, ensuring the spiritual journeys of our pilgrims are profoundly peaceful, secure, and impeccably organized.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="mgmt-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Join Our Winning Team</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">We are always looking for passionate talent to join our dynamic leadership and operational teams.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="career.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Explore Careers</a>
            <a href="contact.php" style="background: #fff; border: 2px solid #fff; color: #0b1120; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);">Contact Us</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\management.php', $management_content);
echo "management.php matches vibrant pattern!";
?>
