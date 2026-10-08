<?php
$page_title = 'World Tours - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant World Tours Page Styles */
    .tours-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .tours-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .tours-hero p {
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
    .card-1 { border-bottom: 6px solid #f39c12; }
    .card-1 .benefit-icon { background: rgba(243, 156, 18, 0.15); color: #f39c12; }
    .card-1:hover .benefit-icon { background: #f39c12; color: #fff; transform: scale(1.1) rotate(-10deg); }

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

    /* Tour Packages Grid */
    .tours-section {
        padding: 100px 5%;
        background-color: #FFF4F4;
    }

    .tours-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    .tour-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .tour-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.1);
    }

    /* Colored Accents */
    .tour-1:hover { border-bottom: 6px solid #3A86FF; }
    .tour-2:hover { border-bottom: 6px solid #9b59b6; }
    .tour-3:hover { border-bottom: 6px solid #2ecc71; }
    .tour-4:hover { border-bottom: 6px solid #f39c12; }
    .tour-5:hover { border-bottom: 6px solid #e74c3c; }
    .tour-6:hover { border-bottom: 6px solid #1abc9c; }

    .tour-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .tour-card:hover .tour-image {
        transform: scale(1.05);
    }
    
    .price-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--primary-color);
        color: #fff;
        padding: 8px 15px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 1.1rem;
        z-index: 2;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .tour-info {
        padding: 30px;
        position: relative;
        z-index: 2;
        background: #fff;
    }

    .tour-info h3 {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        color: #0b1120;
        margin-bottom: 10px;
    }

    .tour-tags {
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
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .tag-duration { background: rgba(58, 134, 255, 0.1); color: #3A86FF; }
    .tag-type { background: rgba(155, 89, 182, 0.1); color: #9b59b6; }

    .tour-info p {
        color: #666;
        line-height: 1.6;
        font-size: 0.95rem;
        margin-bottom: 20px;
    }
    
    .btn-tour {
        display: block;
        text-align: center;
        padding: 12px;
        background: #f4f6f9;
        color: #333;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .tour-card:hover .btn-tour {
        background: var(--primary-color);
        color: #fff;
    }

    /* Vibrant CTA Section */
    .tours-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .tours-cta::before {
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
    
    .tours-cta::after {
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
    <div class="tours-hero">
        <h1>Unforgettable World Tours</h1>
        <p>Discover breathtaking destinations with our carefully curated, all-inclusive international holiday packages.</p>
    </div>

    <!-- Why You Need It Section -->
    <section class="benefits-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Travel Better</span>
        </div>
        <h2 class="section-title-color">Why Travel With Us?</h2>
        
        <div class="benefits-grid">
            <div class="benefit-card card-1">
                <div class="benefit-icon"><i class="fas fa-map-marked-alt"></i></div>
                <h3>Curated Itineraries</h3>
                <p>Every tour is thoughtfully designed by travel experts to perfectly balance sightseeing, adventure, and relaxation.</p>
            </div>
            
            <div class="benefit-card card-2">
                <div class="benefit-icon"><i class="fas fa-bed"></i></div>
                <h3>Premium Stays</h3>
                <p>We handpick luxury and premium 4/5-star hotels globally to ensure your comfort is never compromised.</p>
            </div>
            
            <div class="benefit-card card-3">
                <div class="benefit-icon"><i class="fas fa-user-friends"></i></div>
                <h3>Expert Local Guides</h3>
                <p>Experience destinations like a local. Our professional guides bring history, culture, and hidden gems to life.</p>
            </div>
        </div>
    </section>

    <!-- Tours Grid Section -->
    <section class="tours-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">Popular Holiday Packages</h2>
        
        <div class="tours-grid">
            <!-- Europe -->
            <div class="tour-card tour-1">
                <div class="price-badge">From $1,499</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Europe" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Classic Europe</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 10 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-users"></i> Group Tour</span>
                    </div>
                    <p>Explore the romantic streets of Paris, the historic ruins of Rome, and the breathtaking Swiss Alps in one magical journey.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Turkey -->
            <div class="tour-card tour-2">
                <div class="price-badge">From $899</div>
                <div style="overflow: hidden;"><img loading="lazy" src="images/istanbul.jpg" alt="Turkey" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Taste of Turkey</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 7 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-heart"></i> Couples/Family</span>
                    </div>
                    <p>Experience the vibrant culture of Istanbul, the fairy chimneys of Cappadocia, and the thermal pools of Pamukkale.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Maldives -->
            <div class="tour-card tour-3">
                <div class="price-badge">From $1,299</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1514282401047-d79a71a590e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Maldives" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Maldives Escape</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 5 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-ring"></i> Honeymoon</span>
                    </div>
                    <p>Relax in overwater luxury villas, dive into crystal clear waters, and enjoy spectacular sunsets in this tropical paradise.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Dubai -->
            <div class="tour-card tour-4">
                <div class="price-badge">From $599</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dubai" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Dubai Extravaganza</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 4 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-shopping-bag"></i> Shopping/Leisure</span>
                    </div>
                    <p>Desert safaris, dhow cruises, towering skyscrapers, and world-class shopping. The perfect quick luxury getaway.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Thailand -->
            <div class="tour-card tour-5">
                <div class="price-badge">From $699</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Thailand" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Amazing Thailand</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 6 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-camera"></i> Adventure</span>
                    </div>
                    <p>From the bustling streets of Bangkok to the serene beaches of Phuket. A perfect mix of culture, food, and beaches.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Malaysia -->
            <div class="tour-card tour-6">
                <div class="price-badge">From $749</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1596422846543-74c6fc0e2418?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Malaysia" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Malaysia Truly Asia</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 6 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-child"></i> Family</span>
                    </div>
                    <p>Experience the Petronas Towers in Kuala Lumpur, the highlands of Genting, and beautiful island resorts.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section id="quote" class="tours-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Need a Custom Itinerary?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Our travel consultants can design a bespoke holiday package tailored exactly to your budget, dates, and dreams.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Plan Custom Holiday</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> Chat with Expert</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
