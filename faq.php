<?php
$page_title = 'FAQs - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Vibrant FAQ Page Styles */
    body {
        background-color: #f8fbff;
    }
    
    .faq-hero {
        background: linear-gradient(135deg, rgba(58, 134, 255, 0.9) 0%, rgba(189, 178, 255, 0.9) 100%), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 160px 5% 120px;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    
    .faq-hero h1 {
        font-family: var(--font-heading);
        font-size: 4rem;
        margin-bottom: 20px;
        font-weight: 800;
        position: relative;
        z-index: 2;
    }

    .faq-hero p {
        font-size: 1.3rem;
        font-weight: 300;
        max-width: 750px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        color: #e2e8f0;
    }

    /* FAQ Section */
    .faq-section {
        padding: 80px 5% 120px;
        position: relative;
        z-index: 3;
        margin-top: -60px;
    }

    .faq-container {
        max-width: 1000px;
        margin: 0 auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.05);
        border: 1px solid rgba(226, 232, 240, 0.8);
        padding: 50px;
    }
    
    /* Category Badges */
    .faq-categories {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 50px;
    }

    .cat-btn {
        padding: 10px 25px;
        background: #f1f5f9;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        color: #64748b;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .cat-btn.active, .cat-btn:hover {
        background: var(--primary-color);
        color: #fff;
        box-shadow: 0 10px 20px rgba(58, 134, 255, 0.3);
    }
    
    /* Accordion Styles */
    .faq-group {
        display: none;
    }
    
    .faq-group.active {
        display: block;
        animation: fadeIn 0.5s ease;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .faq-item {
        margin-bottom: 20px;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .faq-item.open {
        border-color: var(--primary-color);
        box-shadow: 0 10px 25px rgba(58, 134, 255, 0.1);
    }

    .faq-question {
        padding: 20px 25px;
        background: #fff;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: var(--font-heading);
        font-size: 1.15rem;
        font-weight: 600;
        color: #0f172a;
        transition: all 0.3s ease;
    }
    
    .faq-item.open .faq-question {
        color: var(--primary-color);
        background: #f8fafc;
    }

    .faq-question i {
        font-size: 1.2rem;
        color: #94a3b8;
        transition: transform 0.4s ease, color 0.3s ease;
    }
    
    .faq-item.open .faq-question i {
        transform: rotate(180deg);
        color: var(--primary-color);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        background: #fff;
    }
    
    .faq-answer-content {
        padding: 0 25px 25px;
        color: #475569;
        line-height: 1.7;
        font-size: 1rem;
        border-top: 1px solid transparent;
    }
    
    .faq-item.open .faq-answer-content {
        border-top: 1px solid #f1f5f9;
        padding-top: 20px;
    }

    /* Vibrant CTA Section */
    .faq-cta {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        padding: 100px 5%;
        text-align: center;
        color: #0b1120;
        position: relative;
        overflow: hidden;
    }

    .faq-cta::before {
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
    
    .faq-cta::after {
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
    <div class="faq-hero">
        <h1>Frequently Asked Questions</h1>
        <p>Find quick answers to common questions about our visas, flights, Umrah packages, and booking processes.</p>
    </div>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            
            <!-- Category Tabs -->
            <div class="faq-categories">
                <button class="cat-btn active" onclick="showCategory('cat-general')"><i class="fas fa-info-circle"></i> General</button>
                <button class="cat-btn" onclick="showCategory('cat-visa')"><i class="fas fa-passport"></i> Visas</button>
                <button class="cat-btn" onclick="showCategory('cat-umrah')"><i class="fas fa-kaaba"></i> Umrah & Hajj</button>
                <button class="cat-btn" onclick="showCategory('cat-flights')"><i class="fas fa-plane"></i> Flights</button>
            </div>

            <!-- General FAQs -->
            <div id="cat-general" class="faq-group active">
                <div class="faq-item">
                    <div class="faq-question">What are your working hours? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Our main office is open from Monday to Saturday, 9:00 AM to 6:00 PM. However, our 24/7 customer support line is always active for emergency flight changes and urgent inquiries.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Where is your head office located? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Our head office is located at Office No. 123, ABC Plaza, Main Boulevard, Lahore. You are always welcome to walk in for a free consultation.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer corporate travel management? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, we provide comprehensive B2B corporate travel solutions including dedicated account managers, negotiated hotel rates, and detailed expense reporting. Visit our <a href="corporate.php" style="color:var(--primary-color);">Corporate Travel</a> page for details.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What payment methods do you accept? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">We accept Bank Transfers, Credit/Debit Cards (Visa & Mastercard), EasyPaisa, JazzCash, and direct cash payments at our head office.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How can I cancel a tour booking? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Cancellations must be requested via email or WhatsApp. Full refunds are provided for cancellations made 30 days before departure. Cancellations within 14 days may incur a 50% deduction.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is Nabeel International IATA certified? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes! We are a fully accredited IATA (International Air Transport Association) travel agency, ensuring you get the most secure, legitimate, and globally recognized travel services.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer travel insurance? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Absolutely. We offer comprehensive travel insurance plans that cover medical emergencies, trip cancellations, and lost baggage globally. You can purchase it directly through us.</div></div>
                </div>
            </div>

            <!-- Visa FAQs -->
            <div id="cat-visa" class="faq-group">
                <div class="faq-item">
                    <div class="faq-question">Do you guarantee visa approval? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">While no agency can 100% guarantee a visa (as the final decision rests solely with the embassy), our expert consultants thoroughly review your documents to ensure your profile is extremely strong, giving you the highest possible chance of approval.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How long does a Dubai visit visa take? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Standard processing takes 2-3 working days. We also offer an express processing service that can get your UAE visa approved in as little as 24 hours!</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What documents do I need for a Schengen Visa? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Generally, you need a passport valid for 6 months, 6 months bank statement, employment letter, tax returns (FBR), flight itinerary, and hotel booking. We provide a complete checklist based on your specific profile.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can you help with Schengen visa appointments? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes! We assist with document preparation, itinerary creation, hotel reservations, and booking the earliest available appointments for Schengen countries.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What is the minimum passport validity required? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">For almost all international travel, your passport MUST be valid for at least six (6) months beyond your intended date of return.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you provide visa services for the USA? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, we provide end-to-end assistance for USA B1/B2 (Tourist/Business) visas. This includes filling the complex DS-160 form, paying the MRV fees, scheduling the appointment, and providing interview prep.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What happens if my visa gets rejected? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">If your visa is rejected, our consultants will review the embassy's rejection letter, identify the weak points in your application, and help you prepare a stronger case for re-application.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you help with student visas? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, our dedicated Study Abroad department handles student visa applications for the UK, Australia, Canada, USA, and Europe, ensuring all educational and financial documents meet the embassy's strict criteria.</div></div>
                </div>
            </div>

            <!-- Umrah FAQs -->
            <div id="cat-umrah" class="faq-group">
                <div class="faq-item">
                    <div class="faq-question">What is included in a Standard Umrah Package? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Our Standard Umrah package includes: Umrah Visa, Return Airline Tickets, 4-Star Hotel accommodation within walking distance of the Haram, Airport transfers, and Ziarat tours in both Makkah and Madinah.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is a Mahram required for women? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Recent Saudi regulations allow women of all ages to perform Umrah without a male Mahram. However, we still organize safe, dedicated group tours for female travelers.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer wheelchair assistance? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes. We arrange wheelchair assistance at the airports, during transport, and we can also hire dedicated wheelchair pushers for the Tawaf and Sa'ee rituals in Makkah.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I customize my Umrah package? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Absolutely. We specialize in customized VIP itineraries. You can choose your exact travel dates, preferred airline, specific 5-star hotels (like Fairmont or Swissôtel), and private transport.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you provide guidance for first-time pilgrims? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, every group is accompanied by an experienced religious scholar who will guide you step-by-step through the Umrah rituals. We also hold pre-departure training sessions.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you provide Ziarat services separately? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, if you already have your visa and hotel booked, you can hire our dedicated local guides and luxury transportation exclusively for Ziarat tours in Makkah and Madinah.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I get a SIM card upon arrival in Saudi Arabia? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, local SIM cards (STC, Mobily, Zain) are readily available at the airport. Our on-ground representatives will guide you to the correct kiosk to get connected immediately.</div></div>
                </div>
            </div>
            
            <!-- Flights FAQs -->
            <div id="cat-flights" class="faq-group">
                <div class="faq-item">
                    <div class="faq-question">How do I change or cancel my flight? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">To change or cancel a flight, simply contact our 24/7 support desk via phone or WhatsApp. Please note that airline penalties and our standard service fees may apply depending on your ticket class.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What is the standard baggage allowance? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Baggage limits vary by airline. Generally, Emirates, Qatar, and Saudia allow 30kg-40kg for checked baggage and 7kg for hand carry. Low-cost carriers like FlyDubai or AirArabia may charge extra for checked bags.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you assist with web check-in? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes! As a complimentary service, our agents can perform online web check-in for you 24 hours before your flight and secure your preferred seating (window/aisle).</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I book group flights for my family/company? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes! For groups of 10 or more, we can negotiate special group rates directly with the airlines to save you money. Please contact us at least 3 weeks before departure for the best group rates.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What are the rules for infant travel? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Infants (under 2 years old) usually travel for 10% of the adult fare and do not get their own seat. We can request bassinets on long-haul flights for your convenience.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer cheap last-minute flights? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes, due to our global network and IATA certification, we have access to special consolidator rates that often allow us to provide cheaper last-minute tickets than public search engines.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What is the difference between a direct and a non-stop flight? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">A <strong>non-stop flight</strong> goes from Point A to Point B without landing. A <strong>direct flight</strong> might land for refueling or dropping off passengers, but you do not need to change airplanes.</div></div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I request special meals on my flight? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer"><div class="faq-answer-content">Yes! When booking your ticket with us, just let us know your dietary preferences (Vegetarian, Diabetic, Halal, Kosher, Kids Meal) and we will automatically request it from the airline.</div></div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- JS for Accordion & Tabs -->
    <script>
        // Tab switching logic
        function showCategory(categoryId) {
            // Update buttons
            const btns = document.querySelectorAll('.cat-btn');
            btns.forEach(btn => btn.classList.remove('active'));
            event.currentTarget.classList.add('active');
            
            // Show category
            const groups = document.querySelectorAll('.faq-group');
            groups.forEach(group => group.classList.remove('active'));
            document.getElementById(categoryId).classList.add('active');
        }

        // Accordion logic
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const answer = item.querySelector('.faq-answer');
                
                // If opening this item, close all others first
                if (!item.classList.contains('open')) {
                    const allItems = document.querySelectorAll('.faq-item');
                    allItems.forEach(otherItem => {
                        otherItem.classList.remove('open');
                        otherItem.querySelector('.faq-answer').style.maxHeight = null;
                    });
                }
                
                // Toggle current item
                item.classList.toggle('open');
                
                if (item.classList.contains('open')) {
                    // Set max-height to scrollHeight for smooth animation
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });
    </script>

    <!-- Vibrant CTA Section -->
    <section class="faq-cta">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; margin-bottom: 20px; position: relative; z-index: 2;">Still Have Questions?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 40px; color: #333; max-width: 700px; margin-left: auto; margin-right: auto; position: relative; z-index: 2;">If you couldn't find the answer you were looking for, don't hesitate to reach out to our friendly support team directly.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; position: relative; z-index: 2;">
            <a href="contact.php" style="background: #0b1120; color: #fff; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1); text-decoration:none;">Contact Support</a>
            <a href="https://wa.me/923401192123" target="_blank" style="background: #fff; border: 2px solid #fff; color: #25D366; padding: 15px 40px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.05); text-decoration:none;"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
    </section>

<?php require 'layout/footer.php'; ?>
