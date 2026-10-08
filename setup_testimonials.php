<?php
// 1. Update header.php to link Testimonials
$header = file_get_contents('f:\wamp64\www\nabeel\layout\header.php');
$header = str_replace('<a href="#"><i class="fas fa-star"></i> Testimonials</a>', '<a href="testimonials.php"><i class="fas fa-star"></i> Testimonials</a>', $header);
file_put_contents('f:\wamp64\www\nabeel\layout\header.php', $header);

// 2. Create testimonials.php
$test_content = <<<HTML
<?php
\$page_title = 'Client Testimonials - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Premium Testimonials Page Styles */
    body {
        background-color: #f8fbff;
    }
    
    .test-hero {
        background: linear-gradient(135deg, rgba(58, 134, 255, 0.85) 0%, rgba(189, 178, 255, 0.85) 100%), url('https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 160px 5% 100px;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    .test-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 20px;
        font-weight: 800;
        position: relative;
        z-index: 2;
    }

    .test-hero p {
        font-size: 1.3rem;
        font-weight: 300;
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        color: #e2e8f0;
    }

    /* Overall Rating Box */
    .rating-box {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        max-width: 400px;
        margin: 40px auto 0;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        position: relative;
        z-index: 2;
        color: #0b1120;
    }
    
    .rating-box h3 {
        font-size: 2.5rem;
        font-family: var(--font-heading);
        margin: 0;
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .stars {
        color: #fbbf24;
        font-size: 1.2rem;
        display: flex;
        gap: 5px;
    }
    
    .rating-box p {
        margin: 5px 0 0;
        font-size: 0.9rem;
        color: #64748b;
        font-weight: 600;
    }

    /* Testimonials Grid Section */
    .test-section {
        padding: 80px 5% 120px;
        position: relative;
        z-index: 3;
    }

    .test-grid {
        max-width: 1300px;
        margin: 0 auto;
        columns: 3;
        column-gap: 30px;
    }
    
    @media (max-width: 1024px) { .test-grid { columns: 2; } }
    @media (max-width: 768px) { .test-grid { columns: 1; } }

    .test-card {
        break-inside: avoid;
        margin-bottom: 30px;
        background: #fff;
        border-radius: 24px;
        padding: 30px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.04);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(226, 232, 240, 0.8);
        position: relative;
    }
    
    .test-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(58, 134, 255, 0.1);
        border-color: rgba(58, 134, 255, 0.2);
    }
    
    .quote-icon {
        position: absolute;
        top: 25px;
        right: 25px;
        font-size: 2.5rem;
        color: #f1f5f9;
        z-index: 1;
        transition: color 0.4s;
    }
    
    .test-card:hover .quote-icon {
        color: rgba(58, 134, 255, 0.1);
    }

    .test-text {
        font-size: 1.05rem;
        line-height: 1.7;
        color: #334155;
        margin-bottom: 25px;
        position: relative;
        z-index: 2;
        font-style: italic;
    }

    .test-author {
        display: flex;
        align-items: center;
        gap: 15px;
        position: relative;
        z-index: 2;
    }

    .author-img {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e2e8f0;
    }

    .author-info h4 {
        margin: 0;
        font-family: var(--font-heading);
        font-size: 1.1rem;
        color: #0f172a;
    }
    
    .author-info p {
        margin: 0;
        font-size: 0.85rem;
        color: var(--primary-color);
        font-weight: 600;
    }
    
    .author-info .stars-small {
        color: #fbbf24;
        font-size: 0.75rem;
        margin-top: 3px;
    }

    /* Submit Review Banner */
    .submit-review-banner {
        max-width: 1000px;
        margin: 0 auto 80px;
        background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        border-radius: 24px;
        padding: 40px;
        text-align: center;
        color: #fff;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }
    
    .banner-text {
        text-align: left;
        flex: 1;
        min-width: 300px;
    }
    
    .banner-text h3 {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        margin-bottom: 10px;
    }
    
    .banner-text p {
        color: #94a3b8;
        margin: 0;
    }
    
    .btn-review {
        background: var(--primary-color);
        color: #fff;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 700;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }
    
    .btn-review:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.4);
    }

    /* Vibrant CTA Section */
    .test-cta {
        background: linear-gradient(135deg, #FFD6E0 0%, #BDB2FF 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .test-cta::before {
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
</style>

    <!-- Vibrant Page Header -->
    <div class="test-hero">
        <h1>Stories from Our Travelers</h1>
        <p>Don't just take our word for it. Read what thousands of happy clients have to say about their journey with Nabeel International.</p>
        
        <div class="rating-box">
            <h3>4.9 <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div></h3>
            <p>Based on 10,000+ Client Reviews</p>
        </div>
    </div>

    <!-- Testimonials Section -->
    <section class="test-section">
        
        <!-- Submit Review Banner -->
        <div class="submit-review-banner">
            <div class="banner-text">
                <h3>Did you recently travel with us?</h3>
                <p>We'd love to hear about your experience! Your feedback helps us improve.</p>
            </div>
            <button class="btn-review"><i class="fas fa-pen"></i> Write a Review</button>
        </div>

        <!-- Masonry Grid -->
        <div class="test-grid">
            
            <!-- Card 1 -->
            <div class="test-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"I booked the VIP Umrah package for my parents and the service was absolutely flawless. From the wheelchair assistance at Jeddah airport to the 5-star Fairmont hotel facing the Kaaba, Nabeel International took care of everything perfectly. Highly recommended!"</p>
                <div class="test-author">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="author-img">
                    <div class="author-info">
                        <h4>Ahmed Raza</h4>
                        <p>VIP Umrah Package</p>
                        <div class="stars-small"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="test-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"My Schengen visa was rejected twice before I came to Nabeel International. Their consultants thoroughly analyzed my profile, corrected my documentation mistakes, and I finally got my visa approved in just two weeks! Truly expert consultants."</p>
                <div class="test-author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="author-img">
                    <div class="author-info">
                        <h4>Sara Khan</h4>
                        <p>Europe Visa Assistance</p>
                        <div class="stars-small"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="test-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"We booked a 7-day family trip to Hunza Valley and it was magical. The coaster was brand new and very comfortable, the driver was an excellent guide, and the hotels they booked for us had the best views of Rakaposhi. Best domestic tour operator by far."</p>
                <div class="test-author">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="author-img">
                    <div class="author-info">
                        <h4>Usman Tariq</h4>
                        <p>Pakistan Tour (Hunza)</p>
                        <div class="stars-small"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="test-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"Our company shifted all our corporate travel accounts to Nabeel International earlier this year. Their dedicated B2B portal and 24/7 support has saved us countless hours. They handle last-minute flight changes effortlessly."</p>
                <div class="test-author">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="author-img">
                    <div class="author-info">
                        <h4>Ayesha Mehmood</h4>
                        <p>Corporate Travel Client</p>
                        <div class="stars-small"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="test-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"I needed a last-minute flight to Dubai for an emergency. The online prices were sky-high, but Nabeel's ticketing agent found a consolidator fare that saved me almost 40%. Their agents are incredibly helpful and fast!"</p>
                <div class="test-author">
                    <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="author-img">
                    <div class="author-info">
                        <h4>Ali Hassan</h4>
                        <p>Flight Ticketing</p>
                        <div class="stars-small"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="test-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"My husband and I went on our honeymoon to the Maldives through their holiday packages. It was a completely stress-free experience. The water villa was exactly as pictured, and the seaplane transfer was perfectly coordinated. A dream vacation."</p>
                <div class="test-author">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" class="author-img">
                    <div class="author-info">
                        <h4>Fatima Zahra</h4>
                        <p>World Tour (Maldives)</p>
                        <div class="stars-small"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section class="test-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Ready to Start Your Journey?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Become one of our thousands of happy travelers. Contact us today to start planning your perfect itinerary.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 30px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1); text-decoration:none;">Plan a Trip</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
HTML;

file_put_contents('f:\wamp64\www\nabeel\testimonials.php', $test_content);
echo "testimonials.php created and linked successfully!";
?>
