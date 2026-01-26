<?php
$page_title = 'Pravne Oblasti - BnB LAW | Pravo Konkurencije, Telekomunikacije i Privredno Pravo';
$page_desc = 'Specijalizovane pravne usluge u oblasti prava konkurencije, telekomunikacionog prava i privrednog prava. Duboka ekspertiza u zaštiti vaših interesa širom Jugoistočne Evrope.';
$current_lang = 'sr';
$current_page = 'legal-fields';
$page_image = '/Assets/images/og-legal-fields.jpg';

?>
<!DOCTYPE html>
<html lang="sr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $page_title ?></title>
<meta name="description" content="<?= $page_desc ?>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/Assets/css/custom.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body>
<div class="site-wrapper">
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
<div class="container hero-container">
<a class="navbar-brand d-flex flex-column pl-20" href="/sr/"><span>BnB LAW</span><small class="navbar-brand-subtext">Bojan Vučković & Bojana Miljanović</small></a>
<button class="navbar-toggler custom-hamburger pr-20" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
<span class="hamburger-lines"><span class="line l1"></span><span class="line l2"></span><span class="line l3"></span><span class="line l4"></span></span>
</button>
<div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
<ul class="navbar-nav align-items-lg-center me-lg-3">
<li class="nav-item"><a class="nav-link" href="/sr/">Početna</a></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle active" href="/sr/pravne-oblasti" role="button" data-bs-toggle="dropdown">Pravne Oblasti</a>
<ul class="dropdown-menu dropdown-menu-dark ptb-0"><li class="d-lg-none"><a class="dropdown-item" href="/sr/pravne-oblasti">Sve Pravne Oblasti</a></li><li><a class="dropdown-item" href="#">Pravo Konkurencije</a></li><li><a class="dropdown-item" href="#">Telekomunikaciono Pravo</a></li><li><a class="dropdown-item" href="#">Privredno Pravo</a></li></ul>
</li>
<li class="nav-item"><a class="nav-link" href="/sr/jurisdikcije">Regioni</a></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/sr/nas-tim" role="button" data-bs-toggle="dropdown">Naš Tim</a>
<ul class="dropdown-menu dropdown-menu-dark ptb-0"><li class="d-lg-none"><a class="dropdown-item" href="/sr/nas-tim">Upoznajte Tim</a></li><li><a class="dropdown-item" href="/sr/karijere">Karijere</a></li></ul>
</li>
<li class="nav-item"><a class="nav-link" href="/sr/vesti">Vesti</a></li>
<li class="nav-item"><a class="nav-link" href="/sr/kontakt">Kontaktirajte nas</a></li>
</ul>
<button class="btn btn-white-cut mt-3 mt-lg-0">Pozovite +3811182145</button>
<div class="lang-switcher">
<button class="lang-toggle"><img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" /><span class="lang-arrow"></span></button>
<div class="lang-dropdown">
<a href="/legal-fields" class="lang-option"><img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" />English</a>
<a href="/sr/pravne-oblasti" class="lang-option active"><img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" />Srpski</a>
</div>
</div>
</div>
</div>
</nav>

<!-- LEGAL FIELDS – FULL WIDTH -->
<section class="legal-fields-section">

  <div class="row g-0 legal-fields-grid">

    <!-- Card 1 -->
    <div class="col-12 col-md-4 legal-field-col">
      <article class="legal-field-card legal-field-card--competition">
        <div class="legal-field-duotone"></div>
        <div class="legal-field-inner">
          <h3 class="legal-field-title">
            Pravo konkurencije /<br>Antimonopolsko pravo
          </h3>

          <div class="legal-field-divider"></div>

          <p class="legal-field-text">
            Kontrola koncentracija, karteli, zloupotreba dominantnog položaja i okviri za usklađenost sa propisima konkurencije.
          </p>
        </div>

        <div class="legal-field-bottom">
          <a href="#" class="btn-white-cut">
            Saznajte više
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
          </a>
        </div>
      </article>
    </div>

    <!-- Card 2 -->
    <div class="col-12 col-md-4 legal-field-col">
      <article class="legal-field-card legal-field-card--telecom">
        <div class="legal-field-duotone"></div>
        <div class="legal-field-inner">
          <h3 class="legal-field-title">
            Telekomunikaciono<br>Pravo
          </h3>

          <div class="legal-field-divider"></div>

          <p class="legal-field-text">
            Licenciranje, infrastruktura, regulativa spektra i pregovori sa nadležnim organima.
          </p>
        </div>

        <div class="legal-field-bottom">
          <a href="#" class="btn-white-cut">
            Saznajte više
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
          </a>
        </div>
      </article>
    </div>

    <!-- Card 3 -->
    <div class="col-12 col-md-4 legal-field-col">
      <article class="legal-field-card legal-field-card--commercial">
        <div class="legal-field-duotone"></div>
        <div class="legal-field-inner">
          <h3 class="legal-field-title">
            Privredno<br>Pravo
          </h3>

          <div class="legal-field-divider"></div>

          <p class="legal-field-text">
            Strukturiranje ugovora, pregovori, okviri za distribuciju i poslovna podrška.
          </p>
        </div>

        <div class="legal-field-bottom">
          <a href="#" class="btn-white-cut">
            Saznajte više
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
          </a>
        </div>
      </article>
    </div>

  </div>

</section>


<!-- CLIENT LOGOS SECTION -->
<section class="clients-section py-5">
  <div class="container text-center">
    <p class="clients-title mb-4">Poverenje nam je ukazalo preko 500 klijenata</p>
  </div>

  <!-- Full-width logos row -->
  <div class="container-fluid px-0">
    <div class="clients-logos-wrapper d-flex flex-wrap justify-content-center align-items-center gap-5 py-4">

      <!-- 6 logos total -->
      <img src="../Assets/images/resend-wordmark-black.svg" alt="Resend" class="client-logo-img">
      <img src="../Assets/images/logo_wordmark_1500.webp" alt="Wordmark" class="client-logo-img">
      <img src="../Assets/images/Google_2015_logo.svg" alt="Google" class="client-logo-img">
      <img src="../Assets/images/coderabbit-logo-light.svg" alt="CodeRabbit" class="client-logo-img">

    </div>
  </div>
</section>

<footer class="site-footer">
<div class="container hero-container footer-container">
<div class="row align-items-start footer-main-row">
<div class="col-12 col-lg-8">
<a class="navbar-brand d-flex flex-column" href="/sr/"><span>BnB LAW</span><small class="navbar-brand-subtext">Bojan Vučković & Bojana Miljanović</small></a>
<br><br>
<p class="footer-mission mb-4">Naša misija je da pružimo jasne, strateške pravne savete koji štite vaše interese, smanjuju složenost i omogućavaju vam da se fokusirate na ono što je najvažnije.</p>
<nav class="footer-nav d-flex flex-wrap gap-4">
<a href="/sr/" class="footer-nav-link">Početna</a>
<a href="/sr/pravne-oblasti" class="footer-nav-link">Pravne Oblasti</a>
<a href="/sr/jurisdikcije" class="footer-nav-link">Regioni</a>
<a href="/sr/nas-tim" class="footer-nav-link">Naš Tim</a>
<a href="/sr/karijere" class="footer-nav-link">Karijere</a>
<a href="/sr/vesti" class="footer-nav-link">Vesti</a>
<a href="/sr/kontakt" class="footer-nav-link">Kontaktirajte Nas</a>
</nav>
</div>
<div class="col-12 col-lg-4 mt-4 mt-lg-0">
<div class="row footer-cta-grid g-3">
<div class="col-5"><a href="tel:+3811182145" class="btn-white-cut footer-cta-btn">Pozovite <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6365b8"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg></a></div>
<div class="col-7"><a href="mailto:office@bnb-law.com" class="btn-partner-outline footer-cta-btn">Pošaljite Email <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M280-280q-33 0-56.5-23.5T200-360v-400q0-33 23.5-56.5T280-840h560q33 0 56.5 23.5T920-760v400q0 33-23.5 56.5T840-280H280Zm280-188L280-663v303h560v-303L560-468Zm0-98 280-194H280l280 194ZM120-120q-33 0-56.5-23.5T40-200v-500h80v500h660v80H120Zm720-546v-94H280v94-94h560v94Z"/></svg></a></div>
</div>
</div>
</div>
<div class="footer-divider"></div>
<div class="footer-bottom d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
<p class="footer-copy mb-3 mb-md-0">© 2025 BnB Law. Sva prava zadržana.</p>
<div class="footer-socials d-flex align-items-center gap-3">
<a href="#" class="footer-social"><span>f</span></a>
<a href="#" class="footer-social"><span>x</span></a>
<a href="#" class="footer-social"><span>ig</span></a>
<a href="#" class="footer-social"><span>in</span></a>
</div>
</div>
</div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Assets/js/custom.js"></script>
</body>
</html>


