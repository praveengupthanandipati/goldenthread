<?php
define('SITE_NAME', 'Golden Thread Studios');
// Set the site URL - update this to your actual domain in production
// For local development, we manually set it to ensure consistency across subfolders
define('SITE_URL', 'http://localhost/projects/goldenthreads');
define('CONTACT_EMAIL', 'praveennandipati@gmail.com');
define('CONTACT_PHONE', '+91 999 999 9999');
define('CONTACT_ADDRESS', '13-1-173, SNEHAPURI COLONY, MOTHINAGAR, Hyderabad, Telangana, Pin: 500018');

// Page titles
$page_titles = [
    'index.php' => 'Home',
    'about.php' => 'About Us',
    'services.php' => 'Our Services',
    'portfolio.php' => 'Our Work',
    'gallery.php' => 'Gallery',
    'contact.php' => 'Contact Us',
    'ad-film-making.php' => 'Ad Film Making',
    'digital-marketing.php' => 'Digital Marketing'
];

$current_page = basename($_SERVER['PHP_SELF']);
$page_title = isset($page_titles[$current_page]) ? $page_titles[$current_page] : 'Golden Thread Studios';
?>