<?php
/**
 * Header Include - Contains navigation and language switcher
 * 
 * Required variables:
 * @param string $current_lang - Language code: 'en' or 'srb'
 * @param string $current_page - Current page identifier for URL mapping
 */

// Default values
$current_lang = $current_lang ?? 'en';
$current_page = $current_page ?? 'home';

// URL Mapping for Language Switcher (must match head.php mapping)
$url_mapping = [
    'home' => ['en' => '/', 'srb' => '/srb/'],
    'contact' => ['en' => '/contact', 'srb' => '/srb/kontakt'],
    'about' => ['en' => '/about', 'srb' => '/srb/o-nama'],
    'team' => ['en' => '/our-legal-team', 'srb' => '/srb/nas-pravni-tim'],
    'legal-fields' => ['en' => '/legal-fields', 'srb' => '/srb/pravne-oblasti'],
    'competition-law' => ['en' => '/competition-law', 'srb' => '/srb/pravo-konkurencije'],
    'telecommunications-law' => ['en' => '/telecommunications-law', 'srb' => '/srb/telekomunikaciono-pravo'],
    'commercial-law' => ['en' => '/commercial-law', 'srb' => '/srb/privredno-pravo'],
    'jurisdictions' => ['en' => '/jurisdictions', 'srb' => '/srb/jurisdikcije'],
    'careers' => ['en' => '/careers', 'srb' => '/srb/karijere'],
    'news' => ['en' => '/news', 'srb' => '/srb/vesti'],
    'news-single' => ['en' => '/news-single', 'srb' => '/srb/vest']
];

// Determine alternate language URL
if ($current_lang === 'en') {
    $alt_url = $url_mapping[$current_page]['srb'] ?? '/srb/';
} else {
    $alt_url = $url_mapping[$current_page]['en'] ?? '/';
}
?>
<body>
  <div class="site-wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
      <div class="container hero-container">
        <a class="navbar-brand pl-20" href="<?= $current_lang === 'srb' ? '/srb/' : '/' ?>">
          <img src="/assets/images/bnb-law-logotype.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
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
                <li><a class="dropdown-item" href="/competition-law">Competition / Antitrust Law</a></li>
                <li><a class="dropdown-item" href="/telecommunications-law">Telecommunications Law</a></li>
                <li><a class="dropdown-item" href="/commercial-law">Commercial Law</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'jurisdictions' ? ' active' : '' ?>" href="/jurisdictions">Regions</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'team' ? ' active' : '' ?>" href="/our-legal-team" id="teamDropdown"
                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Our Team
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0">
                <li class="d-lg-none"><a class="dropdown-item" href="/our-legal-team">Meet the Team</a></li>
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
              <a class="nav-link<?= $current_page === 'home' ? ' active' : '' ?>" href="/srb/">Početna</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'legal-fields' ? ' active' : '' ?>" href="/srb/pravne-oblasti" id="moreLinksDropdown"
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pravne Oblasti
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0" aria-labelledby="moreLinksDropdown">
                <li class="d-lg-none"><a class="dropdown-item" href="/srb/pravne-oblasti">Sve Pravne Oblasti</a></li>
                <li><a class="dropdown-item" href="/srb/pravo-konkurencije">Pravo Konkurencije</a></li>
                <li><a class="dropdown-item" href="/srb/telekomunikaciono-pravo">Telekomunikaciono Pravo</a></li>
                <li><a class="dropdown-item" href="/srb/privredno-pravo">Privredno Pravo</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'jurisdictions' ? ' active' : '' ?>" href="/srb/jurisdikcije">Regioni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= $current_page === 'team' ? ' active' : '' ?>" href="/srb/nas-pravni-tim" id="teamDropdown"
                 role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Naš Tim
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0">
                <li class="d-lg-none"><a class="dropdown-item" href="/srb/nas-pravni-tim">Upoznajte Tim</a></li>
                <li><a class="dropdown-item" href="/srb/karijere">Karijere</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'news' ? ' active' : '' ?>" href="/srb/vesti">Vesti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= $current_page === 'contact' ? ' active' : '' ?>" href="/srb/kontakt">Kontaktirajte nas danas</a>
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
              <a href="<?= $alt_url ?>" class="lang-option<?= $current_lang === 'srb' ? ' active' : '' ?>" data-lang="srb">
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
