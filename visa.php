<?php
$page_title = 'Visa Assistance - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Visa Page Styles */
    .visa-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .visa-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .visa-hero p {
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

    .tag-tourist { background: rgba(58, 134, 255, 0.1); color: #3A86FF; }
    .tag-business { background: rgba(155, 89, 182, 0.1); color: #9b59b6; }
    .tag-study { background: rgba(46, 204, 113, 0.1); color: #2ecc71; }

    .dest-info p {
        color: #666;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Process Section */
    .process-section {
        padding: 100px 5%;
        background-color: #FFF4F4; /* Soft pink background */
    }

    .process-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        text-align: center;
    }

    .step-card {
        background: #fff;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        position: relative;
    }

    .step-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    .step-number {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 800;
        font-family: var(--font-heading);
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3);
    }

    /* Colored step numbers */
    .step-card:nth-child(1) .step-number { background: #3A86FF; box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3); }
    .step-card:nth-child(2) .step-number { background: #9b59b6; box-shadow: 0 10px 20px rgba(155, 89, 182, 0.3); }
    .step-card:nth-child(3) .step-number { background: #f39c12; box-shadow: 0 10px 20px rgba(243, 156, 18, 0.3); }
    .step-card:nth-child(4) .step-number { background: #2ecc71; box-shadow: 0 10px 20px rgba(46, 204, 113, 0.3); }

    .step-icon {
        font-size: 3rem;
        color: #e0e0e0;
        margin-bottom: 20px;
        margin-top: 15px;
        transition: all 0.3s ease;
    }

    .step-card:hover .step-icon {
        color: var(--secondary-color);
        transform: scale(1.1);
    }

    .step-card h3 {
        font-size: 1.3rem;
        color: #0b1120;
        margin-bottom: 15px;
    }

    .step-card p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /* Vibrant CTA Section */
    .visa-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .visa-cta::before {
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
    
    .visa-cta::after {
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
    <div class="visa-hero">
        <h1>Global Visa Assistance</h1>
        <p>Expert guidance and seamless processing for tourist, business, and study visas worldwide.</p>
    </div>

    <!-- Popular Destinations Section -->
    <section class="destinations-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Where to Next?</span>
        </div>
        <h2 class="section-title-color">Top Visa Destinations</h2>
        
        <div class="dest-grid">
            <!-- Dubai -->
            <div class="dest-card dest-1">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dubai" class="dest-image"></div>
                <div class="dest-info">
                    <h3>United Arab Emirates</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-tourist">Tourist</span>
                        <span class="v-tag tag-business">Business</span>
                    </div>
                    <p>Fast-track 30-day and 60-day visit visas for Dubai and all other Emirates with minimal documentation required.</p>
                </div>
            </div>

            <!-- Turkey -->
            <div class="dest-card dest-2">
                <div style="overflow: hidden;"><img loading="lazy" src="images/istanbul.jpg" alt="Turkey" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Turkey</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-tourist">Tourist</span>
                        <span class="v-tag tag-study">Study</span>
                    </div>
                    <p>Comprehensive assistance for Turkish e-Visas and sticker visas. Explore the beauty of Istanbul seamlessly.</p>
                </div>
            </div>

            <!-- UK -->
            <div class="dest-card dest-3">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1513622470522-26c311a07115?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="UK" class="dest-image"></div>
                <div class="dest-info">
                    <h3>United Kingdom</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-tourist">Standard Visitor</span>
                        <span class="v-tag tag-study">Student (Tier 4)</span>
                    </div>
                    <p>Expert consultation for UK visa applications, including documentation review and appointment scheduling.</p>
                </div>
            </div>

            <!-- Schengen -->
            <div class="dest-card dest-4">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Europe" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Schengen Area</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-tourist">Tourist</span>
                        <span class="v-tag tag-business">Business</span>
                    </div>
                    <p>Access 27 European countries with a single visa. We help you build a strong profile for higher approval chances.</p>
                </div>
            </div>

            <!-- USA -->
            <div class="dest-card dest-5">
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="USA" class="dest-image"></div>
                <div class="dest-info">
                    <h3>United States</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-tourist">B1/B2 Visa</span>
                        <span class="v-tag tag-study">F1 Student</span>
                    </div>
                    <p>Complete DS-160 form assistance, fee payment processing, and expert interview preparation guidance.</p>
                </div>
            </div>

            <!-- Saudi Arabia -->
            <div class="dest-card dest-6">
                <div style="overflow: hidden;"><img loading="lazy" src="images/umrah.jpg" alt="Saudi Arabia" class="dest-image"></div>
                <div class="dest-info">
                    <h3>Saudi Arabia</h3>
                    <div class="dest-tags">
                        <span class="v-tag tag-tourist">Umrah</span>
                        <span class="v-tag tag-business">Business</span>
                    </div>
                    <p>Specialized processing for Umrah electronic visas, family visits, and commercial business visas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="process-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">Our Simple Process</h2>
        
        <div class="process-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <i class="fas fa-comments step-icon"></i>
                <h3>Free Consultation</h3>
                <p>Discuss your travel plans with our experts to determine the exact visa type and requirements for your profile.</p>
            </div>
            
            <div class="step-card">
                <div class="step-number">2</div>
                <i class="fas fa-folder-open step-icon"></i>
                <h3>Documentation</h3>
                <p>We provide a precise checklist and help you organize, translate, and verify all necessary documents perfectly.</p>
            </div>
            
            <div class="step-card">
                <div class="step-number">3</div>
                <i class="fas fa-paper-plane step-icon"></i>
                <h3>File Submission</h3>
                <p>We handle the complex application forms, secure your embassy appointments, and submit the file on your behalf.</p>
            </div>
            
            <div class="step-card">
                <div class="step-number">4</div>
                <i class="fas fa-passport step-icon"></i>
                <h3>Visa Approval</h3>
                <p>Track your application status with us until your passport is returned with your freshly stamped visa!</p>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="visa-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Ready to Apply?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Don't let visa rejections ruin your travel plans. Trust our experienced consultants for a hassle-free process.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Contact Visa Expert</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
