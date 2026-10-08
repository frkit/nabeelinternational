<?php
$management_content = <<<HTML
<?php
\$page_title = 'Leadership & Management - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Management Page Specific Styles */
    .mgmt-hero {
        background: linear-gradient(to right, rgba(11, 17, 32, 0.9) 0%, rgba(11, 17, 32, 0.7) 100%), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 120px 5%;
        color: #fff;
        text-align: center;
        position: relative;
    }
    
    .mgmt-hero h1 {
        font-family: var(--font-heading);
        font-size: 3.5rem;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .mgmt-hero p {
        color: var(--secondary-color);
        font-size: 1.2rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    /* CEO Spotlight */
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

    .ceo-image-wrapper img {
        width: 100%;
        border-radius: 5px;
        box-shadow: -20px 20px 0px var(--primary-color);
        position: relative;
        z-index: 2;
    }
    
    .ceo-content {
        flex: 1.2;
    }

    .ceo-content h2 {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: #0b1120;
        margin-bottom: 5px;
    }

    .ceo-title {
        color: var(--secondary-color);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 30px;
        display: block;
        font-size: 0.9rem;
    }

    .ceo-quote {
        font-size: 1.4rem;
        font-style: italic;
        color: #333;
        line-height: 1.6;
        margin-bottom: 25px;
        border-left: 4px solid var(--secondary-color);
        padding-left: 20px;
    }

    .ceo-text {
        color: #555;
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 40px;
    }

    .ceo-signature {
        font-family: 'Playfair Display', serif;
        font-style: italic;
        font-size: 2.5rem;
        color: var(--primary-color);
    }

    /* Executive Board */
    .board-section {
        padding: 100px 5%;
        background-color: #0b1120;
        color: #fff;
    }
    
    .board-header {
        text-align: center;
        margin-bottom: 70px;
    }

    .board-header h2 {
        font-family: var(--font-heading);
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .board-header p {
        color: var(--secondary-color);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
    }

    .board-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }

    .exec-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        overflow: hidden;
        transition: all 0.4s ease;
        position: relative;
    }

    .exec-card:hover {
        transform: translateY(-4px);
        background: rgba(255, 255, 255, 0.08);
        border-color: var(--secondary-color);
        box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    }

    .exec-image {
        width: 100%;
        height: 350px;
        object-fit: cover;
        filter: grayscale(80%) contrast(120%);
        transition: all 0.5s ease;
    }

    .exec-card:hover .exec-image {
        filter: grayscale(0%) contrast(100%);
    }

    .exec-info {
        padding: 30px;
        text-align: center;
        border-top: 3px solid var(--secondary-color);
    }

    .exec-info h3 {
        font-family: var(--font-heading);
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .exec-info .role {
        color: var(--secondary-color);
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .exec-info p {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.95rem;
        line-height: 1.6;
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

    <!-- Page Header -->
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
                
                <p class="ceo-text">With over 20 years of transformative leadership in the global travel and tourism sector, Mr. Ahmed Raza founded Nabeel International with a singular vision: to redefine the standards of the travel industry. Under his authoritative guidance, the company has grown from a regional agency into a globally recognized powerhouse, successfully managing the complex itineraries of tens of thousands of pilgrims, corporate executives, and holidaymakers worldwide.</p>
                <p class="ceo-text">His commitment to strategic innovation and customer-first operations ensures that Nabeel International remains at the forefront of delivering powerful, seamless, and deeply memorable travel solutions.</p>
                
                <div class="ceo-signature">
                    A. Raza
                </div>
            </div>
        </div>
    </section>

    <!-- Executive Board Section -->
    <section class="board-section">
        <div class="board-header">
            <h2>The Executive Board</h2>
            <p>Driving Operational Excellence Globally</p>
        </div>
        
        <div class="board-grid">
            <!-- Member 2 -->
            <div class="exec-card">
                <img loading="lazy" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ms. Fatima Ali" class="exec-image">
                <div class="exec-info">
                    <h3>Ms. Fatima Ali</h3>
                    <div class="role">Director of Global Operations</div>
                    <p>Fatima oversees all international operations. With her meticulous attention to detail, she ensures our global supply chain, hotel networks, and aviation partnerships operate with flawless precision.</p>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="exec-card">
                <img loading="lazy" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mr. Salman Khan" class="exec-image">
                <div class="exec-info">
                    <h3>Mr. Salman Khan</h3>
                    <div class="role">Head of Corporate Strategy</div>
                    <p>Salman is the driving force behind our enterprise division. He specializes in designing robust corporate travel architectures that maximize efficiency for multinational corporations.</p>
                </div>
            </div>
            
            <!-- Member 4 -->
            <div class="exec-card">
                <img loading="lazy" src="https://images.unsplash.com/photo-1556157382-97eda2d62296?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mr. Tariq Mahmood" class="exec-image">
                <div class="exec-info">
                    <h3>Mr. Tariq Mahmood</h3>
                    <div class="role">VP of Hajj & Umrah Affairs</div>
                    <p>Bringing decades of religious travel expertise, Tariq leads our most critical department, ensuring the spiritual journeys of our pilgrims are profoundly peaceful, secure, and impeccably organized.</p>
                </div>
            </div>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\management.php', $management_content);
echo "management.php upgraded to powerful corporate style!";
?>
