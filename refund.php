<?php
$page_title = 'Refund Policy - Nabeel International';
require 'layout/header.php';
?>

<style>
    .legal-hero {
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.9) 0%, rgba(58, 134, 255, 0.8) 100%), url('https://images.unsplash.com/photo-1580048915913-4f8f5cb481c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;
        padding: 150px 5% 100px;
        text-align: center;
        color: #fff;
    }
    .legal-hero h1 { font-size: 3.5rem; font-family: var(--font-heading); margin-bottom: 20px; }
    .legal-content { max-width: 900px; margin: 60px auto; padding: 0 5%; line-height: 1.8; color: #444; }
    .legal-content h2 { color: #0f294d; margin-top: 40px; margin-bottom: 20px; font-family: var(--font-heading); }
</style>

<div class="legal-hero">
    <h1>Refund Policy</h1>
    <p>Last updated: October 2026</p>
</div>

<div class="legal-content">
    <h2>1. Flight Cancellations</h2>
    <p>Refunds for flight cancellations are strictly subject to the airline's specific fare rules. Non-refundable tickets cannot be refunded. Processing fees may apply.</p>
    
    <h2>2. Visa Services</h2>
    <p>Visa processing fees are non-refundable once the application has been submitted to the respective embassy, regardless of whether the visa is granted or denied.</p>
    
    <h2>3. Tour Packages</h2>
    <p>Cancellations made 30 days prior to departure will receive a 90% refund. Cancellations within 14 days of departure are strictly non-refundable.</p>
    
    <h2>4. Processing Time</h2>
    <p>Approved refunds will be processed back to the original method of payment within 14-21 business days.</p>
</div>

<?php require 'layout/footer.php'; ?>
