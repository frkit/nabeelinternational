<?php
// 1. Update header.php
$header = file_get_contents('f:\wamp64\www\nabeel\layout\header.php');
$header = str_replace('<a href="#"><i class="fas fa-handshake"></i> Careers</a>', '<a href="career.php"><i class="fas fa-handshake"></i> Careers</a>', $header);
file_put_contents('f:\wamp64\www\nabeel\layout\header.php', $header);

// 2. Create career.php
$career_content = <<<HTML
<?php
\$page_title = 'Careers - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Career Page Styles */
    .career-hero {
        background: linear-gradient(rgba(11, 17, 32, 0.8), rgba(11, 17, 32, 0.9)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 120px 5%;
        text-align: center;
        color: #fff;
    }
    
    .career-hero h1 {
        font-family: var(--font-heading);
        font-size: 3.5rem;
        margin-bottom: 15px;
    }

    .career-hero p {
        color: var(--secondary-color);
        font-size: 1.2rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 600;
    }

    /* Benefits Section */
    .benefits-section {
        padding: 100px 5%;
        background-color: #f4f6f9;
        text-align: center;
    }
    
    .section-title-dark {
        font-family: var(--font-heading);
        font-size: 2.8rem;
        color: #0b1120;
        margin-bottom: 50px;
    }

    .benefits-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .benefit-card {
        background: #fff;
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        border-bottom: 4px solid var(--primary-color);
    }
    
    .benefit-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .benefit-icon {
        width: 70px;
        height: 70px;
        background: rgba(58, 134, 255, 0.1);
        color: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        margin: 0 auto 25px;
        transition: all 0.3s ease;
    }
    
    .benefit-card:hover .benefit-icon {
        background: var(--primary-color);
        color: #fff;
    }

    .benefit-card h3 {
        font-size: 1.3rem;
        color: #0b1120;
        margin-bottom: 15px;
    }
    
    .benefit-card p {
        color: #666;
        line-height: 1.6;
    }

    /* Openings Section */
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
        background: #fff;
        border: 1px solid #eee;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
        border-left: 5px solid transparent;
    }
    
    .job-card:hover {
        border-color: #eee;
        border-left-color: var(--secondary-color);
        box-shadow: 0 15px 30px rgba(0,0,0,0.08);
        transform: translateX(10px);
    }

    .job-info h3 {
        font-family: var(--font-heading);
        font-size: 1.6rem;
        color: #0b1120;
        margin-bottom: 10px;
    }
    
    .job-meta {
        display: flex;
        gap: 20px;
        color: #666;
        font-size: 0.9rem;
    }
    
    .job-meta span i {
        color: var(--primary-color);
        margin-right: 5px;
    }

    .btn-apply {
        background: var(--primary-color);
        color: #fff;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid var(--primary-color);
    }
    
    .btn-apply:hover {
        background: transparent;
        color: var(--primary-color);
    }

    /* Application Section */
    .apply-section {
        background: #0b1120;
        padding: 80px 5%;
        text-align: center;
        color: #fff;
    }
    
    .apply-section h2 {
        font-family: var(--font-heading);
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .apply-section p {
        color: rgba(255,255,255,0.7);
        margin-bottom: 30px;
        font-size: 1.1rem;
    }

    @media (max-width: 768px) {
        .job-card { flex-direction: column; text-align: center; gap: 20px; }
        .job-meta { justify-content: center; }
    }
</style>

    <!-- Page Header -->
    <div class="career-hero">
        <h1>Join Our Team</h1>
        <p>Build your career with global travel experts</p>
    </div>

    <!-- Why Work With Us Section -->
    <section class="benefits-section">
        <h2 class="section-title-dark">Why Work With Us?</h2>
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Career Growth</h3>
                <p>We believe in nurturing talent. Enjoy clear career progression paths and regular professional development opportunities in a rapidly growing global company.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon" style="background: rgba(189, 178, 255, 0.1); color: var(--secondary-color);"><i class="fas fa-plane"></i></div>
                <h3>Travel Perks</h3>
                <p>As a team member at a premier travel agency, enjoy exclusive discounts on flights, hotels, and holiday packages for you and your family.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon" style="background: rgba(46, 204, 113, 0.1); color: #2ecc71;"><i class="fas fa-users"></i></div>
                <h3>Great Culture</h3>
                <p>Join a diverse, inclusive, and highly motivated team. We foster a collaborative environment where every idea is valued and innovation is rewarded.</p>
            </div>
        </div>
    </section>

    <!-- Current Openings Section -->
    <section class="openings-section">
        <div class="openings-container">
            <h2 class="section-title-dark" style="text-align: center;">Current Openings</h2>
            
            <div class="job-card">
                <div class="job-info">
                    <h3>Senior Travel Consultant (Umrah & Hajj)</h3>
                    <div class="job-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Lahore Head Office</span>
                        <span><i class="fas fa-clock"></i> Full Time</span>
                        <span><i class="fas fa-briefcase"></i> 5+ Years Exp.</span>
                    </div>
                </div>
                <a href="#apply" class="btn-apply">Apply Now</a>
            </div>

            <div class="job-card">
                <div class="job-info">
                    <h3>Visa Processing Officer</h3>
                    <div class="job-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Lahore Head Office</span>
                        <span><i class="fas fa-clock"></i> Full Time</span>
                        <span><i class="fas fa-briefcase"></i> 2+ Years Exp.</span>
                    </div>
                </div>
                <a href="#apply" class="btn-apply">Apply Now</a>
            </div>
            
            <div class="job-card">
                <div class="job-info">
                    <h3>Corporate Sales Executive</h3>
                    <div class="job-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Remote / Hybrid</span>
                        <span><i class="fas fa-clock"></i> Full Time</span>
                        <span><i class="fas fa-briefcase"></i> 3+ Years Exp.</span>
                    </div>
                </div>
                <a href="#apply" class="btn-apply">Apply Now</a>
            </div>
        </div>
    </section>

    <!-- General Application -->
    <section id="apply" class="apply-section">
        <h2>Don't see a perfect fit?</h2>
        <p>We are always looking for passionate talent. Send your resume to our HR department.</p>
        <a href="mailto:hr@nabeelinternational.com" class="btn-primary" style="background: var(--secondary-color); border:none;">Email Resume: hr@nabeelinternational.com</a>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\career.php', $career_content);
echo "Careers page created and linked!";
?>
