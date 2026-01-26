<?php
/**
 * Header Include - Contains navigation and language switcher
 * 
 * Required variables:
 * @param string $current_lang - Language code: 'en' or 'sr'
 * @param string $current_page - Current page identifier for URL mapping
 */

// Default values
$current_lang = $current_lang ?? 'en';
$current_page = $current_page ?? 'home';

// URL Mapping for Language Switcher (must match head.php mapping)
$url_mapping = [
    'home' => ['en' => '/', 'sr' => '/sr/'],
    'contact' => ['en' => '/contact', 'sr' => '/sr/kontakt'],
    'about' => ['en' => '/about', 'sr' => '/sr/o-nama'],
    'team' => ['en' => '/our-team', 'sr' => '/sr/nas-tim'],
    'legal-fields' => ['en' => '/legal-fields', 'sr' => '/sr/pravne-oblasti'],
    'jurisdictions' => ['en' => '/jurisdictions', 'sr' => '/sr/jurisdikcije'],
    'careers' => ['en' => '/careers', 'sr' => '/sr/karijere'],
    'news' => ['en' => '/news', 'sr' => '/sr/vesti'],
    'news-single' => ['en' => '/news-single', 'sr' => '/sr/vest']
];

// Determine alternate language URL
if ($current_lang === 'en') {
    $alt_url = $url_mapping[$current_page]['sr'] ?? '/sr/';
} else {
    $alt_url = $url_mapping[$current_page]['en'] ?? '/';
}
?>
<body>
  <div class="site-wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
      <div class="container hero-container">
        <a class="navbar-brand d-flex flex-column pl-20" href="<?= $current_lang === 'sr' ? '/sr/' : '/' ?>">
          <span>BnB LAW</span>
          <small class="navbar-brand-subtext">
            Bojan Vučković & Bojana Miljanović
          </small>
        </a>

        <button class="navbar-toggler custom-hamburger pr-20" type="button" data-bs-toggle="collapse"
        data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false"
        aria-label="Toggle navigation">
    <span class="hamburger-lines">
      <span class="line l1"></span>
      <span class="line l2"></span>
      <span class="line l3"></span>
      <span class="line l4"></span>
    </span>
</button>


        <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
          <ul class="navbar-nav align-items-lg-center me-lg-3">
            <?php if ($current_lang === 'en'): ?>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'home' ? ' active' : '' ?>" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'legal-fields' ? ' active' : '' ?>" href="/legal-fields" id="moreLinksDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Legal Fields
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0" aria-labelledby="moreLinksDropdown">
                <li class="d-lg-none"><a class="dropdown-item" href="/legal-fields">All Legal Fields</a></li>
                <li><a class="dropdown-item" href="#">Competition / Antitrust Law</a></li>
                <li><a class="dropdown-item" href="#">Telecommunications Law</a></li>
                <li><a class="dropdown-item" href="#">Commercial Law</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'jurisdictions' ? ' active' : '' ?>" href="/jurisdictions">Regions</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'team' ? ' active' : '' ?>" href="/our-team" id="teamDropdown"
                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Team
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0">
                <li class="d-lg-none"><a class="dropdown-item" href="/our-team">Meet the Team</a></li>
                <li><a class="dropdown-item" href="/careers">Careers</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'news' ? ' active' : '' ?>" href="/news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'contact' ? ' active' : '' ?>" href="/contact">Contact us today</a>
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'home' ? ' active' : '' ?>" href="/sr/">Početna</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'legal-fields' ? ' active' : '' ?>" href="/sr/pravne-oblasti" id="moreLinksDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pravne Oblasti
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0" aria-labelledby="moreLinksDropdown">
                <li class="d-lg-none"><a class="dropdown-item" href="/sr/pravne-oblasti">Sve Pravne Oblasti</a></li>
                <li><a class="dropdown-item" href="#">Pravo Konkurencije</a></li>
                <li><a class="dropdown-item" href="#">Telekomunikaciono Pravo</a></li>
                <li><a class="dropdown-item" href="#">Privredno Pravo</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'jurisdictions' ? ' active' : '' ?>" href="/sr/jurisdikcije">Regioni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'team' ? ' active' : '' ?>" href="/sr/nas-tim" id="teamDropdown"
                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Naš Tim
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0">
                <li class="d-lg-none"><a class="dropdown-item" href="/sr/nas-tim">Upoznajte Tim</a></li>
                <li><a class="dropdown-item" href="/sr/karijere">Karijere</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'news' ? ' active' : '' ?>" href="/sr/vesti">Vesti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'contact' ? ' active' : '' ?>" href="/sr/kontakt">Kontaktirajte nas danas</a>
            </li>
            <?php endif; ?>
          </ul>

          <button class="btn btn-white-cut mt-3 mt-lg-0">Call +3811182145</button>

          <!-- Language Switcher -->
          <div class="lang-switcher">
            <button class="lang-toggle" aria-label="Change language">
              <img src="https://flagcdn.com/w40/<?= $current_lang === 'en' ? 'gb' : 'rs' ?>.png" alt="<?= $current_lang === 'en' ? 'English' : 'Serbian' ?>" class="lang-flag" />
              <span class="lang-arrow"></span>
            </button>
            <div class="lang-dropdown">
              <a href="<?= $alt_url ?>" class="lang-option<?= $current_lang === 'sr' ? ' active' : '' ?>" data-lang="sr">
                <img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" />
                Srpski
              </a>
              <a href="<?= $alt_url ?>" class="lang-option<?= $current_lang === 'en' ? ' active' : '' ?>" data-lang="en">
                <img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" />
                English
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
