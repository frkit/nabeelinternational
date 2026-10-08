<?php
$flights_content = file_get_contents('f:\wamp64\www\nabeel\flights.php');

// Replace the old JavaScript block that created the demo results
$old_script_pattern = '/<script>.*?<\/script>/s';

$new_script = <<<HTML
    <script>
        function simulateSearch() {
            // Get input values
            const fromInput = document.getElementById('search-from').value;
            const toInput = document.getElementById('search-to').value;
            const dateInput = document.getElementById('search-date').value;
            
            // Extract the 3-letter IATA code from the input (e.g., "Lahore (LHE)" -> "LHE")
            const fromCodeMatch = fromInput.match(/\b[A-Z]{3}\b/);
            const toCodeMatch = toInput.match(/\b[A-Z]{3}\b/);
            
            const fromCode = fromCodeMatch ? fromCodeMatch[0].toLowerCase() : 'lhe';
            const toCode = toCodeMatch ? toCodeMatch[0].toLowerCase() : 'dxb';
            
            // Format date for Skyscanner (YYMMDD)
            let dateStr = '';
            if (dateInput) {
                const d = new Date(dateInput);
                const year = d.getFullYear().toString().substr(-2);
                const month = ('0' + (d.getMonth() + 1)).slice(-2);
                const day = ('0' + d.getDate()).slice(-2);
                dateStr = year + month + day;
            } else {
                // If no date, use a date 7 days from now
                const d = new Date();
                d.setDate(d.getDate() + 7);
                const year = d.getFullYear().toString().substr(-2);
                const month = ('0' + (d.getMonth() + 1)).slice(-2);
                const day = ('0' + d.getDate()).slice(-2);
                dateStr = year + month + day;
            }
            
            // Show Loader
            const overlay = document.getElementById('searchOverlay');
            overlay.classList.add('active');
            document.querySelector('#searchOverlay h3').innerText = "Connecting to Global Airlines...";
            document.querySelector('#searchOverlay p').innerText = "Redirecting you to live, real-time results...";
            
            // Redirect to Skyscanner for REAL free results!
            setTimeout(() => {
                const skyscannerUrl = `https://www.skyscanner.net/transport/flights/\${fromCode}/\${toCode}/\${dateStr}/`;
                window.open(skyscannerUrl, '_blank'); // Open real results in a new tab
                overlay.classList.remove('active');
            }, 1500);
        }
    </script>
HTML;

$flights_content = preg_replace($old_script_pattern, $new_script, $flights_content, 1);

file_put_contents('f:\wamp64\www\nabeel\flights.php', $flights_content);
echo "Flights page updated to redirect to real Skyscanner results!";
?>
