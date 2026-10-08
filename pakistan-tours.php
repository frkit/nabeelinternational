<?php
$page_title = 'Pakistan Tours - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant Pakistan Tours Page Styles */
    .paktours-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(30, 58, 138, 0.9) 100%), url('https://images.unsplash.com/photo-1627894483216-2138af692e32?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 140px 5%;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .paktours-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 15px;
        text-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .paktours-hero p {
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
    .card-1 { border-bottom: 6px solid #2ecc71; }
    .card-1 .benefit-icon { background: rgba(46, 204, 113, 0.15); color: #2ecc71; }
    .card-1:hover .benefit-icon { background: #2ecc71; color: #fff; transform: scale(1.1) rotate(-10deg); }

    .card-2 { border-bottom: 6px solid #e74c3c; }
    .card-2 .benefit-icon { background: rgba(231, 76, 60, 0.15); color: #e74c3c; }
    .card-2:hover .benefit-icon { background: #e74c3c; color: #fff; transform: scale(1.1) rotate(10deg); }

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
    .paktours-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .paktours-cta::before {
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
    
    .paktours-cta::after {
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
    <div class="paktours-hero">
        <h1>Discover Northern Pakistan</h1>
        <p>Experience the majestic mountains, crystal-clear lakes, and rich heritage of Pakistan's most breathtaking valleys.</p>
    </div>

    <!-- Why You Need It Section -->
    <section class="benefits-section">
        <div style="text-align: center; margin-bottom: 15px;">
            <span style="color: var(--primary-color); background: rgba(58, 134, 255, 0.1); padding: 8px 20px; border-radius: 8px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Local Expertise</span>
        </div>
        <h2 class="section-title-color">Why Tour With Us?</h2>
        
        <div class="benefits-grid">
            <div class="benefit-card card-1">
                <div class="benefit-icon"><i class="fas fa-mountain"></i></div>
                <h3>Majestic Landscapes</h3>
                <p>We take you to the most pristine and untouched locations across Northern Pakistan, ensuring awe-inspiring views every day.</p>
            </div>
            
            <div class="benefit-card card-2">
                <div class="benefit-icon"><i class="fas fa-car-side"></i></div>
                <h3>Luxury Transport</h3>
                <p>Travel comfortably through rugged terrains in our premium, fully air-conditioned SUVs and dedicated coasters.</p>
            </div>
            
            <div class="benefit-card card-3">
                <div class="benefit-icon"><i class="fas fa-campground"></i></div>
                <h3>Best Accommodations</h3>
                <p>Enjoy guaranteed stays at the highest-rated resorts, luxury camps, and premium hotels in every valley.</p>
            </div>
        </div>
    </section>

    <!-- Tours Grid Section -->
    <section class="tours-section">
        <h2 class="section-title-color" style="text-align: center; margin-bottom: 80px;">Popular Domestic Packages</h2>
        
        <div class="tours-grid">
            <!-- Hunza -->
            <div class="tour-card tour-1">
                <div class="price-badge">From Rs. 35,000</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1601633532729-23c21350ec6a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Hunza Valley" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Magical Hunza Valley</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 7 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-users"></i> Group/Family Tour</span>
                    </div>
                    <p>Witness the towering peaks of Rakaposhi, the historical Altit & Baltit forts, and the mesmerizing blue waters of Attabad Lake.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Skardu -->
            <div class="tour-card tour-2">
                <div class="price-badge">From Rs. 42,000</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1594916892648-5c4f24c3a633?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Skardu" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Skardu & Deosai Plains</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 8 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-camera"></i> Adventure/Nature</span>
                    </div>
                    <p>Explore the cold desert of Sarfaranga, the serene Upper Kachura Lake, and the vast, breathtaking plains of Deosai.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Fairy Meadows -->
            <div class="tour-card tour-3">
                <div class="price-badge">From Rs. 28,000</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1590483864070-5ce508b5f3a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Fairy Meadows" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Fairy Meadows Trek</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 5 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-hiking"></i> Trekking/Camping</span>
                    </div>
                    <p>Experience an adventurous jeep ride and a thrilling trek to the lush green meadows at the base of the mighty Nanga Parbat.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Naran Kaghan -->
            <div class="tour-card tour-4">
                <div class="price-badge">From Rs. 18,000</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1628178122393-2708307db11c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Naran Kaghan" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Naran & Kaghan Valleys</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 4 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-child"></i> Family Getaway</span>
                    </div>
                    <p>A perfect short escape to enjoy the cool breeze of the Kunhar River, the mythical Lake Saif-ul-Malook, and Babusar Top.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Swat -->
            <div class="tour-card tour-5">
                <div class="price-badge">From Rs. 22,000</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1616422285623-1498fa75e5fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Swat Valley" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Swat - The Switzerland of East</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 5 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-snowflake"></i> Winter/Summer</span>
                    </div>
                    <p>Discover the alpine meadows of Kalam, the ski resort of Malam Jabba, and the rushing waters of the Swat River.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>

            <!-- Kashmir -->
            <div class="tour-card tour-6">
                <div class="price-badge">From Rs. 25,000</div>
                <div style="overflow: hidden;"><img loading="lazy" src="https://images.unsplash.com/photo-1619448834458-450be88bbaea?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Kashmir" class="tour-image"></div>
                <div class="tour-info">
                    <h3>Neelum Valley, Kashmir</h3>
                    <div class="tour-tags">
                        <span class="v-tag tag-duration"><i class="far fa-clock"></i> 5 Days</span>
                        <span class="v-tag tag-type"><i class="fas fa-heart"></i> Couples/Honeymoon</span>
                    </div>
                    <p>Experience heaven on earth. Explore the lush green valleys of Arang Kel, the stunning Sharda Peeth, and Kutton waterfalls.</p>
                    <a href="contact.php" class="btn-tour">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Vibrant CTA Section -->
    <section id="quote" class="paktours-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Plan Your Custom Tour</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">Want a private jeep tour or a customized family itinerary? Contact our domestic travel experts to plan your perfect trip.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">Book Custom Tour</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05);"><i class="fab fa-whatsapp"></i> Chat with Expert</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
