<?php
$flights_content = file_get_contents('f:\wamp64\www\nabeel\flights.php');

// Replace the <script> block and add the results container placeholder
$old_script_pattern = '/<script>.*?<\/script>\s*<!-- Popular Routes Section/s';

$new_script = <<<HTML
    <!-- Dynamic Flight Results Section (Hidden initially) -->
    <div id="flight-results-container" style="display: none; max-width: 1000px; margin: 0 auto 100px; padding: 0 5%;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-bottom: 2px solid #eee; padding-bottom: 15px;">
            <div>
                <h2 style="font-family: var(--font-heading); color: var(--primary-color); font-size: 2.2rem; margin-bottom: 5px;">Available Flights</h2>
                <p id="results-meta" style="color: #666; font-size: 1.1rem; font-weight: 600;"></p>
            </div>
            <button onclick="resetSearch()" style="background: #f0f0f0; border: none; padding: 10px 20px; border-radius: 30px; cursor: pointer; font-weight: 600; transition: all 0.3s ease;"><i class="fas fa-redo"></i> Modify Search</button>
        </div>
        
        <div id="results-list" style="display: flex; flex-direction: column; gap: 20px;">
            <!-- Flights injected here via JS -->
        </div>
    </div>

    <script>
        function simulateSearch() {
            // Get input values
            const from = document.getElementById('search-from').value || 'Lahore (LHE)';
            const to = document.getElementById('search-to').value || 'Dubai (DXB)';
            const date = document.getElementById('search-date').value || 'Next Week';
            
            // Show Loader
            const overlay = document.getElementById('searchOverlay');
            overlay.classList.add('active');
            
            // Simulate API Network Delay (2 seconds)
            setTimeout(() => {
                overlay.classList.remove('active');
                displayResults(from, to, date);
            }, 2000);
        }

        function displayResults(from, to, date) {
            // Hide normal page content
            document.getElementById('marketing-content').style.display = 'none';
            
            // Show results container
            const resultsContainer = document.getElementById('flight-results-container');
            resultsContainer.style.display = 'block';
            
            // Update Meta
            document.getElementById('results-meta').innerHTML = `<i class="fas fa-plane-departure"></i> \${from} &nbsp; <i class="fas fa-long-arrow-alt-right"></i> &nbsp; <i class="fas fa-plane-arrival"></i> \${to}`;
            
            // Generate Realistic Mock Data based on standard airlines
            const airlines = [
                { name: 'Emirates', icon: 'fas fa-plane', color: '#d32f2f' },
                { name: 'Qatar Airways', icon: 'fas fa-plane', color: '#5C0632' },
                { name: 'Turkish Airlines', icon: 'fas fa-plane', color: '#c0392b' },
                { name: 'Etihad Airways', icon: 'fas fa-plane', color: '#B8860B' }
            ];
            
            let html = '';
            
            // Generate 4 random flights
            for(let i=0; i<4; i++) {
                const airline = airlines[i % airlines.length];
                const price = Math.floor(Math.random() * (150000 - 80000 + 1)) + 80000;
                
                // Random times
                const deptHour = Math.floor(Math.random() * 12) + 1;
                const deptMin = Math.random() > 0.5 ? '00' : '30';
                const ampm1 = Math.random() > 0.5 ? 'AM' : 'PM';
                
                const durationHrs = Math.floor(Math.random() * 6) + 3;
                const durationMins = Math.floor(Math.random() * 59);
                
                html += `
                    <div style="background: #fff; border: 1px solid #eee; border-radius: 16px; padding: 25px; box-shadow: 0 10px 20px rgba(0,0,0,0.03); display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 15px 30px rgba(58, 134, 255, 0.1)'; this.style.borderColor='var(--secondary-color)';" onmouseout="this.style.boxShadow='0 10px 20px rgba(0,0,0,0.03)'; this.style.borderColor='#eee';">
                        
                        <!-- Airline -->
                        <div style="display: flex; align-items: center; gap: 15px; width: 25%;">
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: \${airline.color}15; color: \${airline.color}; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                <i class="\${airline.icon}"></i>
                            </div>
                            <h3 style="font-size: 1.1rem; color: #333; margin:0;">\${airline.name}</h3>
                        </div>

                        <!-- Timing -->
                        <div style="display: flex; align-items: center; gap: 20px; width: 45%; justify-content: center;">
                            <div style="text-align: right;">
                                <div style="font-size: 1.4rem; font-weight: 700; color: #0b1120;">\${deptHour}:\${deptMin} \${ampm1}</div>
                                <div style="color: #888; font-size: 0.85rem;">Departure</div>
                            </div>
                            
                            <div style="text-align: center; position: relative; width: 120px;">
                                <div style="color: #888; font-size: 0.8rem; margin-bottom: 5px;">\${durationHrs}h \${durationMins}m</div>
                                <div style="height: 2px; background: #ddd; position: relative;">
                                    <i class="fas fa-plane" style="position: absolute; top: -7px; left: 50%; transform: translateX(-50%); color: var(--primary-color);"></i>
                                </div>
                                <div style="color: var(--secondary-color); font-size: 0.75rem; margin-top: 5px; font-weight: 600;">1 Stop</div>
                            </div>

                            <div style="text-align: left;">
                                <div style="font-size: 1.4rem; font-weight: 700; color: #0b1120;">\${(deptHour + durationHrs) % 12 || 12}:\${deptMin} \${ampm1 === 'AM' ? 'PM' : 'AM'}</div>
                                <div style="color: #888; font-size: 0.85rem;">Arrival</div>
                            </div>
                        </div>

                        <!-- Price & Action -->
                        <div style="width: 25%; text-align: right;">
                            <div style="font-size: 1.8rem; font-weight: 800; color: var(--primary-color); margin-bottom: 10px;">Rs. \${price.toLocaleString()}</div>
                            <button onclick="alert('Proceeding to checkout for \${airline.name} flight...')" style="background: var(--primary-color); color: #fff; border: none; padding: 12px 25px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; width: 100%;">Select Flight</button>
                        </div>

                    </div>
                `;
            }
            
            document.getElementById('results-list').innerHTML = html;
        }

        function resetSearch() {
            document.getElementById('flight-results-container').style.display = 'none';
            document.getElementById('marketing-content').style.display = 'block';
        }
    </script>

    <div id="marketing-content">
    <!-- Popular Routes Section
HTML;

$flights_content = preg_replace($old_script_pattern, $new_script, $flights_content);

// We also need to add IDs to inputs to fetch their values, and wrap the bottom sections in a div
$flights_content = str_replace('<input type="text" class="search-input" placeholder="City or Airport" value="Lahore (LHE)" required>', '<input type="text" id="search-from" class="search-input" placeholder="City or Airport" value="Lahore (LHE)" required>', $flights_content);
$flights_content = str_replace('<input type="text" class="search-input" placeholder="City or Airport" required>', '<input type="text" id="search-to" class="search-input" placeholder="City or Airport" required>', $flights_content);
$flights_content = str_replace('<input type="date" class="search-input" required>', '<input type="date" id="search-date" class="search-input" required>', $flights_content);

// Ensure the closing </div> for marketing-content is added before the footer
$flights_content = str_replace("<?php require 'layout/footer.php';", "    </div>\n\n<?php require 'layout/footer.php';", $flights_content);


file_put_contents('f:\wamp64\www\nabeel\flights.php', $flights_content);
echo "Flights page updated with realistic dynamic search results!";
?>
