<?php
$css_path = 'f:\wamp64\www\nabeel\layout\style.css';
$css = file_get_contents($css_path);

$large_cards_css = <<<CSS

/* Enlarged Hero Small Cards */
.hero-small-images {
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 20px !important;
    width: 100%;
    max-width: 500px; /* Increase overall width constraint */
}

.hero-small-card {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    height: 220px !important; /* Significantly increased height */
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    transition: transform 0.4s ease;
}

.hero-small-card:hover {
    transform: translateY(-5px);
}

.hero-small-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.hero-small-card:hover img {
    transform: scale(1.1);
}

.hero-small-info {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 15px;
    background: linear-gradient(to top, rgba(15, 41, 77, 0.9), transparent);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.hero-small-info h4 {
    color: #fff;
    margin: 0;
    font-size: 1.1rem;
    font-weight: 600;
}

.btn-tiny {
    background: #d4af37;
    color: #0f294d;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.3s ease;
}

.btn-tiny:hover {
    background: #fff;
    transform: scale(1.1);
}
CSS;

// Let's remove old versions if any exist to prevent conflicts
$css = preg_replace('/\.hero-small-card\s*\{[^}]+\}/s', '', $css);
$css = preg_replace('/\.hero-small-info\s*\{[^}]+\}/s', '', $css);

file_put_contents($css_path, $css . "\n" . $large_cards_css);

echo "Hero small images increased in size!";
?>
