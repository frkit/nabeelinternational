<?php
$page_title = 'Flight Bookings - Nabeel International';
require 'layout/header.php';
?>

<style>
    /* Premium Redesign for Flights */
    :root {
        --flight-primary: #0f294d;
        --flight-accent: #3A86FF;
        --flight-gold: #d4af37;
        --bg-light: #f4f7fb;
    }

    body {
        background-color: var(--bg-light);
    }

    .flights-hero {
        background: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
        padding: 180px 5% 220px;
        text-align: center;
        color: #fff;
        position: relative;
    }
    
    .flights-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 41, 77, 0.85) 0%, rgba(58, 134, 255, 0.4) 100%);
    }

    .flights-hero-content {
        position: relative;
        z-index: 2;
    }
    
    .flights-hero h1 {
        font-family: var(--font-heading);
        font-size: 4.5rem;
        font-weight: 800;
        margin-bottom: 20px;
        letter-spacing: -1px;
    }

    .flights-hero p {
        font-size: 1.4rem;
        max-width: 600px;
        margin: 0 auto;
        opacity: 0.9;
    }

    /* Modern Pill Search Widget */
    .search-widget-container {
        max-width: 1200px;
        margin: -130px auto 80px;
        position: relative;
        z-index: 10;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.12);
        padding: 30px 40px;
        border: 1px solid rgba(255,255,255,0.4);
    }

    .search-tabs {
        display: flex;
        gap: 10px;
        margin-bottom: 25px;
    }

    .search-tab {
        padding: 10px 25px;
        border-radius: 30px;
        font-weight: 700;
        font-size: 0.95rem;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #555;
        background: #f0f4f8;
    }

    .search-tab.active {
        background: var(--flight-primary);
        color: #fff;
        box-shadow: 0 10px 20px rgba(15, 41, 77, 0.2);
    }

    .search-form {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr auto;
        gap: 15px;
        align-items: center;
        background: #fff;
        padding: 10px;
        border-radius: 100px;
        border: 2px solid #eef2f6;
        box-shadow: inset 0 2px 10px rgba(0,0,0,0.02);
    }

    .input-group {
        display: flex;
        flex-direction: column;
        padding: 10px 20px;
        position: relative;
    }

    .input-group:not(:last-child)::after {
        content: '';
        position: absolute;
        right: 0;
        top: 20%;
        height: 60%;
        width: 1px;
        background: #eef2f6;
    }

    .input-group label {
        font-size: 0.75rem;
        color: #888;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 5px;
        letter-spacing: 1px;
    }

    .input-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .input-wrapper i {
        color: var(--flight-accent);
        font-size: 1.2rem;
    }

    .search-input {
        width: 100%;
        border: none;
        background: transparent;
        font-size: 1.1rem;
        color: #333;
        font-weight: 600;
        outline: none;
    }

    .btn-search-flight {
        background: var(--flight-accent);
        color: #fff;
        padding: 20px 40px;
        border-radius: 100px;
        font-size: 1.2rem;
        font-weight: 700;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
        height: 100%;
    }

    .btn-search-flight:hover {
        background: #2563eb;
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(58, 134, 255, 0.3);
    }

    /* Ticket Layout */
    .flight-ticket {
        background: #fff;
        border-radius: 16px;
        display: flex;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: 1px solid #f0f0f0;
    }

    .flight-ticket:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: rgba(58, 134, 255, 0.3);
    }

    .ticket-main {
        flex: 3;
        padding: 30px;
        display: flex;
        align-items: center;
        gap: 30px;
    }
    
    .ticket-airline {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .ticket-airline img {
        height: 45px;
        width: auto;
        max-width: 90px;
        object-fit: contain;
    }

    .ticket-route {
        flex: 2;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .time-block {
        text-align: center;
    }

    .time-block h3 { font-size: 1.6rem; color: #0b1120; margin-bottom: 5px; }
    .time-block p { font-size: 1.1rem; color: #666; font-weight: 600; }

    .flight-duration {
        text-align: center;
        flex: 1;
        padding: 0 20px;
    }

    .flight-duration .line {
        height: 2px;
        background: #e2e8f0;
        margin: 10px 0;
        position: relative;
    }

    .flight-duration .line i {
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
        color: var(--flight-accent);
        font-size: 1.1rem;
    }

    .ticket-action {
        flex: 1;
        background: #f8fafc;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-left: 2px dashed #cbd5e1;
        position: relative;
    }

    .ticket-action::before, .ticket-action::after {
        content: '';
        position: absolute;
        left: -12px;
        width: 24px;
        height: 24px;
        background: var(--bg-light);
        border-radius: 50%;
    }
    .ticket-action::before { top: -12px; }
    .ticket-action::after { bottom: -12px; }

    .ticket-price {
        font-size: 2rem;
        font-weight: 800;
        color: var(--flight-primary);
        margin-bottom: 15px;
    }

    /* Filters Sidebar */
    .filters-sidebar {
        background: #fff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        position: sticky;
        top: 100px;
        border: 1px solid #f0f0f0;
    }

    .filter-group {
        margin-bottom: 30px;
    }
    .filter-group h4 {
        font-size: 1.1rem;
        color: #0b1120;
        margin-bottom: 15px;
        font-weight: 700;
    }

    /* Custom Checkbox */
    .custom-cb {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
        cursor: pointer;
        color: #555;
        font-weight: 500;
        transition: color 0.2s;
    }
    .custom-cb:hover { color: var(--flight-accent); }
    .custom-cb input {
        width: 18px;
        height: 18px;
        accent-color: var(--flight-accent);
        cursor: pointer;
    }

    /* Results layout */
    .results-layout {
        display: none;
        max-width: 1300px;
        margin: 0 auto 100px;
        padding: 0 5%;
        grid-template-columns: 320px 1fr;
        gap: 40px;
        align-items: start;
    }

    /* Routes Section */
    .trending-routes {
        padding: 80px 5%;
    }
    .route-card {
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        border: 1px solid #f0f0f0;
    }
    .route-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    .route-img-wrapper {
        height: 200px;
        width: 100%;
        position: relative;
        overflow: hidden;
    }
    .route-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    .route-card:hover .route-img-wrapper img {
        transform: scale(1.1);
    }
    .route-badge {
        position: absolute;
        top: 15px; left: 15px;
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(4px);
        color: #fff;
        padding: 6px 12px;
        border-radius: 30px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 1px;
    }
    .route-details {
        padding: 25px;
    }
    .route-dest {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--flight-primary);
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }
    .route-airline {
        color: #888;
        font-size: 0.95rem;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .route-price-tag {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--flight-accent);
    }

    @media (max-width: 1100px) {
        .search-form { grid-template-columns: 1fr 1fr; border-radius: 20px; padding: 20px; }
        .input-group:not(:last-child)::after { display: none; }
        .btn-search-flight { grid-column: span 2; border-radius: 12px; }
        .results-layout { grid-template-columns: 1fr; }
        .flight-ticket { flex-direction: column; }
        .ticket-action { border-left: none; border-top: 2px dashed #cbd5e1; }
        .ticket-action::before, .ticket-action::after {
            left: 50%; width: 24px; height: 24px;
        }
        .ticket-action::before { top: -12px; left: -12px; }
        .ticket-action::after { top: -12px; left: auto; right: -12px; }
    }
</style>

<!-- Premium Page Header -->
<div class="flights-hero">
    <div class="flights-hero-content">
        <h1>Find Your Next Adventure</h1>
        <p>Experience seamless flight bookings with world-class airlines.</p>
    </div>
</div>

<!-- Interactive Flight Search Widget -->
<div class="search-widget-container">
    <div class="search-tabs">
        <div class="search-tab active"><i class="fas fa-plane"></i> Flights</div>
        <div class="search-tab"><i class="fas fa-hotel"></i> Hotels</div>
        <div class="search-tab"><i class="fas fa-car"></i> Cars</div>
    </div>
    <form id="flightSearchForm" class="search-form">
        <div class="input-group">
            <label>Origin</label>
            <div class="input-wrapper">
                <i class="fas fa-plane-departure"></i>
                <input list="origins" id="flightFrom" class="search-input" placeholder="City or Airport" value="LHE" required>
                <datalist id="origins">
                    <option value="LHE">Lahore, Pakistan (LHE)</option>
                    <option value="ISB">Islamabad, Pakistan (ISB)</option>
                    <option value="KHI">Karachi, Pakistan (KHI)</option>
                    <option value="PEW">Peshawar, Pakistan (PEW)</option>
                    <option value="DXB">Dubai, UAE (DXB)</option>
                    <option value="JED">Jeddah, Saudi Arabia (JED)</option>
                    <option value="RUH">Riyadh, Saudi Arabia (RUH)</option>
                    <option value="IST">Istanbul, Turkey (IST)</option>
                    <option value="LHR">London, UK (LHR)</option>
                    <option value="JFK">New York, USA (JFK)</option>
                </datalist>
            </div>
        </div>
        <div class="input-group">
            <label>Destination</label>
            <div class="input-wrapper">
                <i class="fas fa-plane-arrival"></i>
                <input list="destinations" id="flightTo" class="search-input" placeholder="City or Airport" value="DXB" required>
                <datalist id="destinations">
                    <option value="DXB">Dubai, UAE (DXB)</option>
                    <option value="JED">Jeddah, Saudi Arabia (JED)</option>
                    <option value="RUH">Riyadh, Saudi Arabia (RUH)</option>
                    <option value="IST">Istanbul, Turkey (IST)</option>
                    <option value="LHR">London, UK (LHR)</option>
                    <option value="JFK">New York, USA (JFK)</option>
                    <option value="LHE">Lahore, Pakistan (LHE)</option>
                    <option value="ISB">Islamabad, Pakistan (ISB)</option>
                    <option value="KHI">Karachi, Pakistan (KHI)</option>
                    <option value="PEW">Peshawar, Pakistan (PEW)</option>
                </datalist>
            </div>
        </div>
        <div class="input-group">
            <label>Departure</label>
            <div class="input-wrapper">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" class="search-input" value="2026-11-01" required>
            </div>
        </div>
        <div class="input-group">
            <label>Travelers</label>
            <div class="input-wrapper">
                <i class="fas fa-user-friends"></i>
                <input type="number" class="search-input" value="1" min="1" required>
            </div>
        </div>
        <button type="submit" class="btn-search-flight"><i class="fas fa-search"></i> Search</button>
    </form>
</div>

<!-- Flight Results Section -->
<section id="flightResultsSection" class="results-layout">
    <!-- Filters Sidebar -->
    <div class="filters-sidebar">
        <h3 style="font-family: var(--font-heading); margin-bottom: 25px; color: var(--flight-primary); font-size: 1.5rem;">Filters</h3>
        
        <div class="filter-group">
            <h4>Stops</h4>
            <label class="custom-cb"><input type="checkbox" class="filter-stops" value="0" checked> Direct</label>
            <label class="custom-cb"><input type="checkbox" class="filter-stops" value="1" checked> 1 Stop</label>
            <label class="custom-cb"><input type="checkbox" class="filter-stops" value="2" checked> 2+ Stops</label>
        </div>
        
        <div class="filter-group">
            <h4>Airlines</h4>
            <div id="airlineFiltersContainer">
                <!-- Checkboxes generated by JS -->
            </div>
        </div>
        
        <div class="filter-group">
            <h4 style="display:flex; justify-content:space-between;">Price <span>Rs. <span id="priceDisplay">500,000</span></span></h4>
            <input type="range" id="priceRange" min="50000" max="500000" step="10000" value="500000" style="width: 100%; accent-color: var(--flight-accent); cursor: pointer; height: 6px;">
        </div>
    </div>
    
    <!-- Results List -->
    <div class="results-list">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="font-size: 1.6rem; color: #333; font-weight: 800;"><span id="resultsCount">0</span> flights found</h2>
            <select style="padding: 10px 20px; border-radius: 8px; border: 1px solid #e2e8f0; font-family: var(--font-main); outline:none;">
                <option>Recommended</option>
                <option>Cheapest First</option>
                <option>Fastest First</option>
            </select>
        </div>
        <div id="flightsContainer">
            <!-- Flights rendered by JS -->
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let allFlights = [];
    
    const form = document.getElementById("flightSearchForm");
    const resultsSection = document.getElementById("flightResultsSection");
    const container = document.getElementById("flightsContainer");
    const airlineFiltersContainer = document.getElementById("airlineFiltersContainer");
    
    const renderFlights = () => {
        const maxPrice = parseInt(document.getElementById("priceRange").value);
        const selectedStops = Array.from(document.querySelectorAll(".filter-stops:checked")).map(cb => parseInt(cb.value));
        const selectedAirlines = Array.from(document.querySelectorAll(".filter-airlines:checked")).map(cb => cb.value);
        
        const filtered = allFlights.filter(f => {
            const matchPrice = f.price <= maxPrice;
            const matchStops = selectedStops.includes(f.stops) || (f.stops >= 2 && selectedStops.includes(2));
            const matchAirline = selectedAirlines.length === 0 || selectedAirlines.includes(f.airline);
            return matchPrice && matchStops && matchAirline;
        });
        
        document.getElementById("resultsCount").innerText = filtered.length;
        
        if (filtered.length === 0) {
            container.innerHTML = '<div style="background:#fff; padding:60px; text-align:center; border-radius:16px; color:#888; font-size:1.2rem;">No flights found matching your criteria. Try adjusting your filters.</div>';
            return;
        }
        
        container.innerHTML = filtered.map(f => `
            <div class="flight-ticket">
                <div class="ticket-main">
                    <div class="ticket-airline">
                        <img src="${f.airline_logo}" alt="${f.airline}" onerror="this.style.display='none'">
                        <div>
                            <div style="font-weight: 800; color: var(--flight-primary); font-size: 1.1rem;">${f.airline}</div>
                            <div style="font-size: 0.85rem; color: #888; margin-top:3px;">Flight ${f.id} &bull; ${f.type}</div>
                        </div>
                    </div>
                    
                    <div class="ticket-route">
                        <div class="time-block">
                            <h3>${f.departure_time}</h3>
                            <p>${f.departure}</p>
                        </div>
                        
                        <div class="flight-duration">
                            <div style="font-size: 0.85rem; color: #888; font-weight:600;">${f.duration}</div>
                            <div class="line"><i class="fas fa-plane"></i></div>
                            <div style="font-size: 0.85rem; color: ${f.stops === 0 ? '#2ecc71' : '#e74c3c'}; font-weight: 700;">${f.stops === 0 ? 'Direct' : f.stops + ' Stop(s)'}</div>
                        </div>
                        
                        <div class="time-block">
                            <h3>${f.arrival_time}</h3>
                            <p>${f.arrival}</p>
                        </div>
                    </div>
                </div>
                
                <div class="ticket-action">
                    <div class="ticket-price">Rs. ${f.price.toLocaleString()}</div>
                    <a href="https://wa.me/923401192123?text=Hi, I would like to book flight ${f.id} (${f.airline}) from ${f.departure} to ${f.arrival} for Rs. ${f.price.toLocaleString()}." target="_blank" class="btn-primary" style="padding: 15px 30px; font-size: 1rem; border-radius: 30px; text-decoration: none; display: inline-block; box-shadow: 0 10px 20px rgba(58, 134, 255, 0.2);">Book via WhatsApp</a>
                </div>
            </div>
        `).join('');
    };

    const populateAirlines = (flights) => {
        const airlines = [...new Set(flights.map(f => f.airline))];
        airlineFiltersContainer.innerHTML = airlines.map(a => `
            <label class="custom-cb">
                <input type="checkbox" class="filter-airlines" value="${a}" checked> ${a}
            </label>
        `).join('');
        
        document.querySelectorAll('.filter-airlines').forEach(cb => cb.addEventListener('change', renderFlights));
    };

    form.addEventListener("submit", function(e) {
        e.preventDefault();
        
        const origin = document.getElementById("flightFrom").value.toUpperCase();
        const dest = document.getElementById("flightTo").value.toUpperCase();
        const btn = form.querySelector('button');
        const originalText = btn.innerHTML;
        
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
        btn.disabled = true;
        
        fetch('api_flights.php?_t=' + Date.now())
            .then(res => res.json())
            .then(data => {
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    
                    allFlights = data.data;
                    if(origin) allFlights = allFlights.filter(f => f.departure === origin);
                    if(dest) allFlights = allFlights.filter(f => f.arrival === dest);
                    
                    resultsSection.style.display = "grid";
                    populateAirlines(allFlights);
                    renderFlights();
                    
                    resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 800);
            })
            .catch(err => {
                console.error(err);
                btn.innerHTML = originalText;
                btn.disabled = false;
                alert("Error fetching flights.");
            });
    });

    document.querySelectorAll('.filter-stops').forEach(cb => cb.addEventListener('change', renderFlights));
    const priceRange = document.getElementById('priceRange');
    const priceDisplay = document.getElementById('priceDisplay');
    priceRange.addEventListener('input', (e) => {
        priceDisplay.innerText = parseInt(e.target.value).toLocaleString();
        renderFlights();
    });
});
</script>

<!-- Trending Routes Section -->
<section class="trending-routes">
    <div style="text-align:center; max-width: 600px; margin: 0 auto 50px;">
        <h2 style="font-family: var(--font-heading); font-size: 3rem; color: var(--flight-primary); margin-bottom: 15px;">Trending Fares</h2>
        <p style="color: #666; font-size: 1.1rem;">Discover the most popular routes chosen by our travelers this month.</p>
    </div>
    
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
        
        <div class="route-card">
            <div class="route-img-wrapper">
                <div class="route-badge">Economy Class</div>
                <img loading="lazy" src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Dubai">
            </div>
            <div class="route-details">
                <div class="route-dest">LHE <i class="fas fa-arrow-right" style="color: #cbd5e1;"></i> DXB</div>
                <div class="route-airline"><i class="fas fa-plane" style="color:var(--flight-accent);"></i> Emirates / PIA</div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px;">
                    <div class="route-price-tag">Rs. 85,000</div>
                    <span style="color:#888; font-size:0.9rem;">Return Fare</span>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-img-wrapper">
                <div class="route-badge" style="background: rgba(231, 76, 60, 0.8);">Best Seller</div>
                <img loading="lazy" src="images/istanbul.jpg" alt="Istanbul">
            </div>
            <div class="route-details">
                <div class="route-dest">ISB <i class="fas fa-arrow-right" style="color: #cbd5e1;"></i> IST</div>
                <div class="route-airline"><i class="fas fa-plane" style="color:var(--flight-accent);"></i> Turkish Airlines</div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px;">
                    <div class="route-price-tag">Rs. 145,000</div>
                    <span style="color:#888; font-size:0.9rem;">Return Fare</span>
                </div>
            </div>
        </div>

        <div class="route-card">
            <div class="route-img-wrapper">
                <div class="route-badge" style="background: rgba(46, 204, 113, 0.8);">Direct Flight</div>
                <img loading="lazy" src="images/umrah.jpg" alt="Jeddah">
            </div>
            <div class="route-details">
                <div class="route-dest">KHI <i class="fas fa-arrow-right" style="color: #cbd5e1;"></i> JED</div>
                <div class="route-airline"><i class="fas fa-plane" style="color:var(--flight-accent);"></i> Saudia Airlines</div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px;">
                    <div class="route-price-tag">Rs. 120,000</div>
                    <span style="color:#888; font-size:0.9rem;">Return Fare</span>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require 'layout/footer.php'; ?>
