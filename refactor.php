<?php
$index = file_get_contents('f:\wamp64\www\nabeel\index.php');

// Extract head and nav
$header_end = strpos($index, '<!-- Hero Slider -->');
$header = substr($index, 0, $header_end);

// Extract footer
$footer_start = strpos($index, '<!-- Footer -->');
$footer = substr($index, $footer_start);

// Extract CSS
$css_start = strpos($header, '<style>');
$css_end = strpos($header, '</style>') + 8;
$css = substr($header, $css_start + 7, $css_end - $css_start - 15);

// Update header to use link and title variable
$header = substr($header, 0, $css_start) . '<link rel="stylesheet" href="layout/style.css">' . "\n" . substr($header, $css_end);
$header = str_replace('<title>Nabeel International - Tour Operators</title>', '<title><?= $page_title ?? \'Nabeel International\' ?></title>', $header);

if(!is_dir('layout')) mkdir('layout');
file_put_contents('layout/header.php', $header);
file_put_contents('layout/footer.php', $footer);
file_put_contents('layout/style.css', $css);

// Update index.php
$index_content = "<?php\n\$page_title = 'Home - Nabeel International';\nrequire 'layout/header.php';\n?>\n";
$index_content .= substr($index, $header_end, $footer_start - $header_end);
$index_content .= "<?php require 'layout/footer.php'; ?>\n";
file_put_contents('f:\wamp64\www\nabeel\index.php', $index_content);

// Update management.php
$management = file_get_contents('f:\wamp64\www\nabeel\management.php');
$m_header_end = strpos($management, '<!-- Page Header -->');
$m_footer_start = strpos($management, '<!-- Footer -->');
$m_content = substr($management, $m_header_end, $m_footer_start - $m_header_end);

// Extract team-specific css and append to style.css
$m_css_start = strpos($management, '/* Page Header */');
$m_css_end = strpos($management, '</style>');
if($m_css_start !== false) {
    $m_css = substr($management, $m_css_start, $m_css_end - $m_css_start);
    file_put_contents('layout/style.css', "\n\n/* Management Page Styles */\n" . $m_css, FILE_APPEND);
}

$new_management = "<?php\n\$page_title = 'Management Team - Nabeel International';\nrequire 'layout/header.php';\n?>\n" . $m_content . "<?php require 'layout/footer.php'; ?>\n";
file_put_contents('f:\wamp64\www\nabeel\management.php', $new_management);

// Create new template.php for the generator
$new_template = "<?php\n\$page_title = '{{TITLE}} - Nabeel International';\nrequire 'layout/header.php';\n?>\n";
$new_template .= "    <!-- Page Header -->\n    <div class=\"page-header\" style=\"background: linear-gradient(rgba(58, 134, 255, 0.7), rgba(58, 134, 255, 0.8)), url('{{IMAGE_URL}}') center/cover;\">\n        <h1>{{TITLE}}</h1>\n        <p>Explore our premium {{TITLE}} services</p>\n    </div>\n\n    <!-- Content Section -->\n    <section class=\"content-section\">\n        <h2>Welcome to our {{TITLE}} page</h2>\n        <p>This page is currently under construction. Please check back later for detailed information about our {{TITLE}} services.</p>\n    </section>\n\n";
$new_template .= "<?php require 'layout/footer.php'; ?>\n";
file_put_contents('f:\wamp64\www\nabeel\template.php', $new_template);

// Update gen.php
$gen = file_get_contents('f:\wamp64\www\nabeel\gen.php');
$gen = str_replace("file_get_contents('template.html')", "file_get_contents('template.php')", $gen);
file_put_contents('f:\wamp64\www\nabeel\gen.php', $gen);

echo "Refactored successfully!";
?>
