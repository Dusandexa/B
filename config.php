<?php
/**
 * Configuration File
 * 
 * Store all your website settings in one place for easy management.
 * Include this file at the top of includes/head.php or other files that need config.
 */

// ============================================
// SITE CONFIGURATION
// ============================================

// Base URL - IMPORTANT: Change this to your actual domain
define('SITE_URL', 'https://yourwebsite.com');

// Site Name
define('SITE_NAME', 'BnB LAW');
define('SITE_NAME_FULL', 'Bojan Vučković & Bojana Miljanović');

// ============================================
// CONTACT INFORMATION
// ============================================

define('CONTACT_EMAIL', 'info@yourwebsite.com');
define('CONTACT_PHONE', '+381 XX XXX XXXX');
define('CONTACT_ADDRESS', 'Your Address Here');
define('CONTACT_CITY', 'City, Country');

// ============================================
// SOCIAL MEDIA
// ============================================

define('SOCIAL_FACEBOOK', 'https://facebook.com/yourpage');
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/yourcompany');
define('SOCIAL_TWITTER', 'https://twitter.com/yourhandle');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/yourhandle');

// ============================================
// SEO DEFAULTS
// ============================================

define('DEFAULT_TITLE_EN', 'BnB LAW - Professional Legal Services');
define('DEFAULT_TITLE_SR', 'BnB LAW - Profesionalne pravne usluge');
define('DEFAULT_DESC_EN', 'Leading law firm providing expert legal services across multiple jurisdictions.');
define('DEFAULT_DESC_SR', 'Vodeća advokatska kancelarija koja pruža stručne pravne usluge u više jurisdikcija.');

// ============================================
// FORM SETTINGS
// ============================================

define('FORM_TO_EMAIL', 'info@yourwebsite.com');
define('FORM_FROM_NAME', 'Contact Form');

// ============================================
// LANGUAGE SETTINGS
// ============================================

// Available languages
$available_languages = ['en', 'sr'];

// Default language
define('DEFAULT_LANG', 'en');

// ============================================
// URL MAPPING FOR BILINGUAL PAGES
// ============================================

// This is the master URL mapping used throughout the site
// Keep this synchronized with your actual pages
$GLOBALS['url_mapping'] = [
    'home' => [
        'en' => '/',
        'sr' => '/sr/'
    ],
    'contact' => [
        'en' => '/contact',
        'sr' => '/sr/kontakt'
    ],
    'about' => [
        'en' => '/about',
        'sr' => '/sr/o-nama'
    ],
    'team' => [
        'en' => '/our-team',
        'sr' => '/sr/nas-tim'
    ],
    'legal-fields' => [
        'en' => '/legal-fields',
        'sr' => '/sr/pravne-oblasti'
    ],
    'jurisdictions' => [
        'en' => '/jurisdictions',
        'sr' => '/sr/jurisdikcije'
    ],
    'careers' => [
        'en' => '/careers',
        'sr' => '/sr/karijere'
    ],
    'news' => [
        'en' => '/news',
        'sr' => '/sr/vesti'
    ],
    'news-single' => [
        'en' => '/news-single',
        'sr' => '/sr/vest'
    ]
];

// ============================================
// NAVIGATION ITEMS
// ============================================

$GLOBALS['nav_items'] = [
    'en' => [
        ['url' => '/', 'text' => 'Home', 'page' => 'home'],
        ['url' => '/about', 'text' => 'About Us', 'page' => 'about'],
        ['url' => '/our-team', 'text' => 'Our Team', 'page' => 'team'],
        ['url' => '/legal-fields', 'text' => 'Legal Fields', 'page' => 'legal-fields'],
        ['url' => '/jurisdictions', 'text' => 'Jurisdictions', 'page' => 'jurisdictions'],
        ['url' => '/careers', 'text' => 'Careers', 'page' => 'careers'],
        ['url' => '/news', 'text' => 'News', 'page' => 'news'],
        ['url' => '/contact', 'text' => 'Contact', 'page' => 'contact']
    ],
    'sr' => [
        ['url' => '/sr/', 'text' => 'Početna', 'page' => 'home'],
        ['url' => '/sr/o-nama', 'text' => 'O Nama', 'page' => 'about'],
        ['url' => '/sr/nas-tim', 'text' => 'Naš Tim', 'page' => 'team'],
        ['url' => '/sr/pravne-oblasti', 'text' => 'Pravne Oblasti', 'page' => 'legal-fields'],
        ['url' => '/sr/jurisdikcije', 'text' => 'Jurisdikcije', 'page' => 'jurisdictions'],
        ['url' => '/sr/karijere', 'text' => 'Karijere', 'page' => 'careers'],
        ['url' => '/sr/vesti', 'text' => 'Vesti', 'page' => 'news'],
        ['url' => '/sr/kontakt', 'text' => 'Kontakt', 'page' => 'contact']
    ]
];

// ============================================
// HELPER FUNCTIONS
// ============================================

/**
 * Get URL mapping for a specific page
 */
function get_page_urls($page_id) {
    return $GLOBALS['url_mapping'][$page_id] ?? ['en' => '/', 'sr' => '/sr/'];
}

/**
 * Get alternate language URL
 */
function get_alternate_url($current_page, $current_lang) {
    $urls = get_page_urls($current_page);
    $alt_lang = ($current_lang === 'en') ? 'sr' : 'en';
    return $urls[$alt_lang] ?? ($alt_lang === 'sr' ? '/sr/' : '/');
}

/**
 * Check if current page is active
 */
function is_active_page($url) {
    $current_uri = $_SERVER['REQUEST_URI'];
    $current_path = parse_url($current_uri, PHP_URL_PATH);
    return ($url === $current_path || $url === $current_uri);
}

/**
 * Sanitize output
 */
function safe_output($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

?>
