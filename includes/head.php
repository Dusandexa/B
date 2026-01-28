<?php
// Password protection - remove this line when ready to go public
require __DIR__ . '/../auth.php';

/**
 * Head Include - Contains all meta tags, SEO, and hreflang logic
 * 
 * Required variables:
 * @param string $page_title - The page title
 * @param string $page_desc - The page meta description
 * @param string $current_lang - Language code: 'en' or 'srb'
 * @param string $current_page - Current page identifier for URL mapping (e.g., 'home', 'contact', 'about')
 */

// Default values if not set
$page_title = $page_title ?? 'Default Title';
$page_desc = $page_desc ?? 'Default description';
$current_lang = $current_lang ?? 'en';
$current_page = $current_page ?? 'home';
$page_image = $page_image ?? '/Assets/images/og-default.jpg'; // Default social sharing image

// Base URL - IMPORTANT: Change this to your actual domain
$base_url = 'https://yourwebsite.com';

// URL Mapping: Maps page identifiers to their English and Serbian URLs
$url_map = [
    'home' => [
        'en' => '/',
        'srb' => '/srb/'
    ],
    'contact' => [
        'en' => '/contact',
        'srb' => '/srb/kontakt'
    ],
    'about' => [
        'en' => '/about',
        'srb' => '/srb/o-nama'
    ],
    'team' => [
        'en' => '/our-team',
        'srb' => '/srb/nas-tim'
    ],
    'legal-fields' => [
        'en' => '/legal-fields',
        'srb' => '/srb/pravne-oblasti'
    ],
    'jurisdictions' => [
        'en' => '/jurisdictions',
        'srb' => '/srb/jurisdikcije'
    ],
    'careers' => [
        'en' => '/careers',
        'srb' => '/srb/karijere'
    ],
    'news' => [
        'en' => '/news',
        'srb' => '/srb/vesti'
    ],
    'news-single' => [
        'en' => '/news-single',
        'srb' => '/srb/vest'
    ]
];

// Get current URL path for canonical
$current_uri = $_SERVER['REQUEST_URI'];
$current_path = parse_url($current_uri, PHP_URL_PATH);

// Get canonical URL (self-referencing without .php)
$canonical_url = $base_url . $current_path;

// Get full image URL for social sharing
$page_image_full = (strpos($page_image, 'http') === 0) ? $page_image : $base_url . $page_image;

// Get alternate language URLs for hreflang
$en_url = $base_url . ($url_map[$current_page]['en'] ?? '/');
$sr_url = $base_url . ($url_map[$current_page]['srb'] ?? '/srb/');
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="author" content="Your Company Name">
    <meta name="robots" content="noindex, nofollow, noarchive">
    
    <!-- Canonical URL (Self-referencing) -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
    
    <!-- Hreflang Tags for Bilingual SEO -->
    <link rel="alternate" hreflang="en" href="<?= htmlspecialchars($en_url) ?>">
    <link rel="alternate" hreflang="srb" href="<?= htmlspecialchars($sr_url) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars($en_url) ?>">
    
    <!-- Open Graph Meta Tags (for social media) -->
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($page_image_full) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= $current_lang === 'srb' ? 'sr_RS' : 'en_US' ?>">
    <meta property="og:locale:alternate" content="<?= $current_lang === 'srb' ? 'en_US' : 'sr_RS' ?>">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($page_image_full) ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/Assets/images/favicon.ico">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material Symbols Outlined icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Assets/css/custom.css">
</head>
