<?php
$flights_content = file_get_contents('f:\wamp64\www\nabeel\flights.php');

// We need to replace the entire <div class="search-widget-container"> block and scripts
// with a clean container for the Travelpayouts widget.

$pattern = '/<div class="search-widget-container">.*?<!-- Popular Routes Section -->/s';

$widget_html = <<<HTML
    <!-- Real Live Flight Search Widget (Powered by Travelpayouts) -->
    <div class="search-widget-container" style="padding: 0; background: transparent; box-shadow: none; display: flex; justify-content: center; margin-bottom: 50px;">
        <!-- The widget script injected here will generate the real form and results -->
        <div style="background: #fff; padding: 30px; border-radius: 16px; box-shadow: 0 20px 50px rgba(0,0,0,0.15); width: 100%; max-width: 1000px;">
            <script charset="utf-8" src="//www.travelpayouts.com/widgets/50f53ce9daaa286b34000004.js?v=2340"></script>
        </div>
    </div>

    <!-- Popular Routes Section -->
HTML;

$flights_content = preg_replace($pattern, $widget_html, $flights_content);

// Remove the old searchOverlay if it exists (my regex above didn't catch the overlay)
$overlay_pattern = '/<!-- Loading Overlay for API Simulation -->.*?<\/script>/s';
$flights_content = preg_replace($overlay_pattern, '', $flights_content);

file_put_contents('f:\wamp64\www\nabeel\flights.php', $flights_content);
echo "Flights page updated to use Travelpayouts real widget!";
?>
