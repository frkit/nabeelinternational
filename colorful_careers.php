<?php
$career_content = <<<HTML
<?php
\$page_title = 'Careers - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Career Page Styles */
    .career-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .career-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .career-hero p {
        font-size: 1.3rem;
        letter-spacing: 1px;
        font-weight: 400;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Colorful Benefits Section */
    .benefits-section {
        padding: 100px 5%;
        background-color: #FFF4F4; /* Very soft pink/warm background */
        text-align: center;
    }
    
    .section-title-color {
        font-family: var(--font-heading);
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 60px;
    }

    .benefits-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    .benefit-card {
        background: #fff;
        padding: 50px 30px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    /* Card Hover Animations */
    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    }

    /* Card 1: Blue */
    .card-1 { border-bottom: 6px solid #3A86FF; }
    .card-1 .benefit-icon { background: rgba(58, 134, 255, 0.15); color: #3A86FF; }
    .card-1:hover .benefit-icon { background: #3A86FF; color: #fff; transform: scale(1.1) rotate(-10deg); }

    /* Card 2: Purple/Gold */
    .card-2 { border-bottom: 6px solid #9b59b6; }
    .card-2 .benefit-icon { background: rgba(155, 89, 182, 0.15); color: #9b59b6; }
    .card-2:hover .benefit-icon { background: #9b59b6; color: #fff; transform: scale(1.1) rotate(10deg); }

    /* Card 3: Green */
    .card-3 { border-bottom: 6px solid #2ecc71; }
    .card-3 .benefit-icon { background: rgba(46, 204, 113, 0.15); color: #2ecc71; }
    .card-3:hover .benefit-icon { background: #2ecc71; color: #fff; transform: scale(1.1) rotate(-10deg); }

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

    .benefit-card h3 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 15px;
        font-family: var(--font-heading);
    }
    
    .benefit-card p {
        color: #666;
        line-height: 1.7;
        font-size: 1rem;
    }

    /* Friendly Openings Section */
    .openings-section {
        padding: 100px 5%;
        background-color: #fff;
    }
    
    .openings-container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .job-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fdfdfd;
        border: 2px solid #f0f0f0;
        padding: 35px;
        border-radius: 16px;
        margin-bottom: 25px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
    }
    
    .job-card:hover {
        border-color: var(--secondary-color);
        box-shadow: 0 15px 40px rgba(189, 178, 255, 0.2);
        transform: translateY(-5px);
        background: #fff;
    }

    .job-info h3 {
        font-family: var(--font-heading);
        font-size: 1.7rem;
        color: #0b1120;
        margin-bottom: 15px;
    }
    
    .job-meta {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    
    /* Colorful Tags */
    .tag {
        padding: 6px 15px;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .tag-location { background: rgba(58, 134, 255, 0.1); color: #3A86FF; }
    .tag-type { background: rgba(46, 204, 113, 0.1); color: #2ecc71; }
    .tag-exp { background: rgba(243, 156, 18, 0.1); color: #f39c12; }

    .btn-apply {
        background: var(--primary-color);
        color: #fff;
        padding: 15px 35px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1.05rem;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3);
    }
    
    .btn-apply:hover {
        background: #2563eb; /* Darker blue */
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(0,0,0,0.1);
        color: #fff;
    }

    /* Vibrant Application Section */
    .apply-section {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }
    
    .apply-section h2 {
        font-family: var(--font-heading);
        font-size: 3rem;
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
    }
    
    .apply-section p {
        color: #333;
        margin-bottom: 40px;
        font-size: 1.2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        z-index: 2;
    }

    .btn-email {
        background: #0b1120;
        color: #fff;
        padding: 15px 40px;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
        z-index: 2;
        box-shadow: 0 15px 30px rgba(11, 17, 32, 0.2);
    }

    .btn-email:hover {
        background: #fff;
        color: #0b1120;
        transform: translateY(-5px);
    }

    /* Decorative circles for apply section */
    .apply-section::before {
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
    
    .apply-section::after {
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

    @media (max-width: 768px) {
        .job-card { flex-direction: column; text-align: left; gap: 25px; align-items: flex-start; }
        .job-meta { justify-content: flex-start; }
        .btn-apply { width: 100%; text-align: center; }
    }
</style>

    <!-- Vibrant Page Header -->
    <div class="career-hero">
        <h1>Join Our Global Family</h1>
        <p>Embark on a rewarding journey where your passion for travel meets endless opportunities.</p>
    </div>

    <!-- Colorful Benefits Section -->
    <section class="benefits-section">
        <h2 class="section-title-color">Why You'll Love It Here</h2>
        <div class="benefits-grid">
            <div class="benefit-card card-1">
                <div class="benefit-icon"><i class="fas fa-rocket"></i></div>
                <h3>Accelerated Growth</h3>
                <p>We nurture talent actively. Enjoy clear, dynamic career progression paths and regular professional development in our fast-growing global travel network.</p>
            </div>
            <div class="benefit-card card-2">
                <div class="benefit-icon"><i class="fas fa-globe-americas"></i></div>
                <h3>Amazing Travel Perks</h3>
                <p>Because we love to travel too! As a team member, enjoy massive exclusive discounts on flights, luxury hotels, and breathtaking holiday packages.</p>
            </div>
            <div class="benefit-card card-3">
                <div class="benefit-icon"><i class="fas fa-smile-beam"></i></div>
                <h3>Vibrant Culture</h3>
                <p>Join a diverse, inclusive, and incredibly fun team. We foster a highly collaborative environment where your ideas matter and every success is celebrated.</p>
            </div>
        </div>
    </section>

    <!-- Friendly Openings Section -->
    <section class="openings-section">
        <div class="openings-container">
            <h2 class="section-title-color" style="text-align: center; color: #0b1120;">Current Openings</h2>
            
            <div class="job-card">
                <div class="job-info">
                    <h3>Senior Travel Consultant (Umrah & Hajj)</h3>
                    <div class="job-meta">
                        <span class="tag tag-location"><i class="fas fa-map-marker-alt"></i> Lahore, PK</span>
                        <span class="tag tag-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        <span class="tag tag-exp"><i class="fas fa-star"></i> 5+ Years Exp.</span>
                    </div>
                </div>
                <a href="#apply" class="btn-apply">Apply Now</a>
            </div>

            <div class="job-card">
                <div class="job-info">
                    <h3>Visa Processing Expert</h3>
                    <div class="job-meta">
                        <span class="tag tag-location"><i class="fas fa-map-marker-alt"></i> Lahore, PK</span>
                        <span class="tag tag-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        <span class="tag tag-exp"><i class="fas fa-star"></i> 2+ Years Exp.</span>
                    </div>
                </div>
                <a href="#apply" class="btn-apply">Apply Now</a>
            </div>
            
            <div class="job-card">
                <div class="job-info">
                    <h3>Digital Marketing Strategist</h3>
                    <div class="job-meta">
                        <span class="tag tag-location"><i class="fas fa-wifi"></i> Remote / Hybrid</span>
                        <span class="tag tag-type"><i class="fas fa-briefcase"></i> Full Time</span>
                        <span class="tag tag-exp"><i class="fas fa-star"></i> 3+ Years Exp.</span>
                    </div>
                </div>
                <a href="#apply" class="btn-apply">Apply Now</a>
            </div>
        </div>
    </section>

    <!-- Vibrant General Application -->
    <section id="apply" class="apply-section">
        <h2>Don't see a perfect fit?</h2>
        <p>We are always hunting for passionate talent! If you love travel as much as we do, drop your resume to our friendly HR team.</p>
        <a href="mailto:hr@nabeelinternational.com" class="btn-email">Email Resume to HR <i class="fas fa-paper-plane" style="margin-left:8px;"></i></a>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\career.php', $career_content);
echo "Careers page made super colorful and friendly!";
?>
