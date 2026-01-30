<?php
$page_title = 'Bojan Vučković - Osnivač i Advokat | BnB LAW';
$page_desc = 'Partner u BnB LAW, priznat kao najbolji antimonopolski advokat u Istočnoj Evropi od strane Chambers. Ekspert za pravo konkurencije, telekomunikacije i privredna pitanja.';
$current_lang = 'srb';
$current_page = 'team';
$page_image = '/assets/images/Bojan_Vuckovic.jpg';

include '../includes/head.php';
?>
<link rel="alternate" hreflang="en" href="https://yourwebsite.com/lawyer-bojan-vuckovic">
<link rel="alternate" hreflang="srb" href="https://yourwebsite.com/srb/advokat-bojan-vuckovic">
<link rel="alternate" hreflang="x-default" href="https://yourwebsite.com/lawyer-bojan-vuckovic">

<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<!-- Custom styles -->
<link rel="stylesheet" href="/assets/css/custom.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
  <div class="site-wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
      <div class="container hero-container">
        <a class="navbar-brand pl-20" href="/srb/">
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
            <li class="nav-item">
              <a class="nav-link" href="/srb/">Početna</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= in_array($current_page, ['legal-fields', 'competition-law', 'telecommunications-law', 'commercial-law']) ? ' active' : '' ?>" href="/srb/pravne-oblasti" role="button" data-bs-toggle="dropdown">Pravne Oblasti</a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0"><li class="d-lg-none"><a class="dropdown-item<?= $current_page === 'legal-fields' ? ' active' : '' ?>" href="/srb/pravne-oblasti">Sve Pravne Oblasti</a></li><li><a class="dropdown-item<?= $current_page === 'competition-law' ? ' active' : '' ?>" href="/srb/pravo-konkurencije">Pravo Konkurencije</a></li><li><a class="dropdown-item<?= $current_page === 'telecommunications-law' ? ' active' : '' ?>" href="/srb/telekomunikaciono-pravo">Telekomunikaciono Pravo</a></li><li><a class="dropdown-item<?= $current_page === 'commercial-law' ? ' active' : '' ?>" href="/srb/privredno-pravo">Privredno Pravo</a></li></ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/srb/jurisdikcije">Regioni</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle<?= in_array($current_page, ['team', 'careers']) ? ' active' : '' ?>" href="/srb/nas-pravni-tim" role="button" data-bs-toggle="dropdown">Naš Tim</a>
<ul class="dropdown-menu dropdown-menu-dark ptb-0"><li class="d-lg-none"><a class="dropdown-item<?= $current_page === 'team' ? ' active' : '' ?>" href="/srb/nas-pravni-tim">Upoznajte Tim</a></li><li><a class="dropdown-item<?= $current_page === 'careers' ? ' active' : '' ?>" href="/srb/karijere">Karijere</a></li></ul>
</li>
            <li class="nav-item"><a class="nav-link" href="/srb/vesti">Vesti</a></li>
            <li class="nav-item"><a class="nav-link" href="/srb/kontakt">Kontaktirajte nas</a></li>
          </ul>
          <button class="btn btn-white-cut mt-3 mt-lg-0">Pozovite +3811182145</button>
          <div class="lang-switcher">
            <button class="lang-toggle"><img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" /><span class="lang-arrow"></span></button>
            <div class="lang-dropdown">
              <a href="/lawyer-bojan-vuckovic" class="lang-option"><img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" /><span>English</span></a>
              <a href="/srb/advokat-bojan-vuckovic" class="lang-option"><img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" /><span>Srpski</span></a>
            </div>
          </div>
        </div>
      </div>
    </nav>

<!-- HERO SECTION -->
<section class="team-profile-hero" style="background-color: var(--back-middle);">
  <div class="container hero-container">
    <div class="row align-items-center g-5">
      <div class="col-12 col-lg-5">
        <div class="team-profile-image">
          <img src="/assets/images/Bojan_Vuckovic.jpg" alt="Bojan Vučković" class="img-fluid rounded-3">
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <div class="about-label d-flex align-items-center mb-3">
          <span class="about-label-dot me-2"></span>
          <span class="about-label-text">Profil Partnera</span>
        </div>
        
        <h1 class="team-profile-name mb-2">Bojan Vučković</h1>
        <p class="team-profile-title mb-4">Osnivač i Advokat</p>
        
        <div class="team-profile-recognition mb-4">
          <p class="recognition-quote">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="quote-icon"><path d="M580-240h160l-40-120 100-80H680l-40-120-40 120H480l100 80-40 120Zm-340 0h160l-40-120 100-80H340l-40-120-40 120H140l100 80-40 120Zm40-240Zm340 0Z"/></svg>
            "On je najbolji antimonopolski advokat u Istočnoj Evropi. Ima izvanredne pravne veštine i pažnju na detalje, uz održavanje poslovnog pristupa i načina razmišljanja."
          </p>
          <p class="recognition-source">— Chambers Europe, Srbija, Pravo konkurencije, 2025</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BIO SECTION -->
<section class="team-profile-bio py-5" style="background-color: var(--back-middle);">
  <div class="container hero-container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <h2 class="section-subtitle mb-4">O partneru</h2>
        <div class="bio-content">
          <p class="mb-4">
            Bojan Vučković je osnivač i partner u BnB LAW, priznat od strane Chambers Europe kao najbolji antimonopolski advokat u Istočnoj Evropi. Sa preko 10 godina specijalizovanog iskustva, uspostavio se kao vodeći autoritet u pravu konkurencije i telekomunikacionoj regulativi širom regiona.
          </p>
          <p class="mb-4">
            Njegova praksa obuhvata složene antimonopolske istrage, odobrenja koncentracija, regulatorne postupke i strateške privredne transakcije. Bojan je uspešno zastupao velike multinacionalne korporacije i regionalna preduzeća u visoko-rizičnim pitanjima konkurencije, obezbeđujući povoljne ishode u izazovnim regulatornim okruženjima.
          </p>
          <p class="mb-4">
            Poznat po svojim izvanrednim pravnim veštinama i pedantnoj pažnji na detalje, Bojan kombinuje rigoroznu pravnu analizu sa praktičnim poslovnim pristupom. Njegova duboka ekspertiza u tržištima Jugoistočne Evrope i regulatornim okvirima, u kombinaciji sa njegovim strateškim pristupom, čini ga najpoželjnijim savetnikom za kompanije koje se kreću kroz složena pitanja konkurencije i telekomunikacija u regionu.
          </p>
        </div>

        <h3 class="section-subtitle mt-5 mb-4">Oblasti Ekspertize</h3>
        <div class="expertise-list">
          <ul class="custom-list">
            <li>Pravo Konkurencije i Antimonopolsko Pravo</li>
            <li>Kontrola Koncentracija i Strateške Transakcije</li>
            <li>Antimonopolske Istrage i Pretresi</li>
            <li>Telekomunikaciona Regulativa</li>
            <li>Privredna Parnica i Rešavanje Sporova</li>
            <li>Regulatorna Strategija i Državni Poslovi</li>
            <li>Prekogranična Pitanja Konkurencije</li>
          </ul>
        </div>

        <h3 class="section-subtitle mt-5 mb-4">Priznanja</h3>
        <div class="recognition-list">
          <ul class="custom-list">
            <li><strong>Chambers Europe 2025</strong> - Najviše rangiran, Pravo konkurencije (Srbija) - "Najbolji antimonopolski advokat u Istočnoj Evropi"</li>
            <li><strong>The Legal 500 EMEA</strong> - Vodeći Partner</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="team-profile-sidebar">
          <h3 class="sidebar-title mb-4">Kontakt Informacije</h3>
          
          <div class="contact-item mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
            <a href="mailto:bojan@bnblaw.com">bojan@bnblaw.com</a>
          </div>
          
          <div class="contact-item mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/></svg>
            <a href="tel:+3811182145">+381 11 82145</a>
          </div>

          <h4 class="sidebar-subtitle mb-3 mt-4">Obrazovanje</h4>
          <p class="mb-2"><strong>Magistar prava</strong> - Univerzitet u Beogradu</p>
          <p class="mb-4"><strong>Diplomirani pravnik</strong> - Univerzitet u Beogradu</p>

          <h4 class="sidebar-subtitle mb-3">Jezici</h4>
          <ul class="language-list">
            <li>Srpski (Maternji)</li>
            <li>Engleski (Tečno)</li>
          </ul>

          <div class="mt-4">
            <a href="/srb/kontakt" class="btn btn-white-cut w-100">
              Zakažite Konsultaciju
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-12 col-md-4">
        <a href="/srb/" class="footer-logo d-inline-block mb-3">
          <img src="/assets/images/bnb-law-logotype.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
        </a>
        <p class="footer-desc">Regionalna ekspertiza u pravu konkurencije, telekomunikacijama i privrednim pitanjima.</p>
      </div>
      <div class="col-6 col-md-2">
        <h5 class="footer-heading">Praksa</h5>
        <nav class="footer-nav">
          <a href="/srb/pravo-konkurencije" class="footer-nav-link">Pravo Konkurencije</a>
          <a href="/srb/telekomunikaciono-pravo" class="footer-nav-link">Telekomunikacije</a>
          <a href="/srb/privredno-pravo" class="footer-nav-link">Privredno Pravo</a>
        </nav>
      </div>
      <div class="col-6 col-md-2">
        <h5 class="footer-heading">Firma</h5>
        <nav class="footer-nav">
          <a href="/srb/nas-pravni-tim" class="footer-nav-link">Naš Tim</a>
          <a href="/srb/jurisdikcije" class="footer-nav-link">Regioni</a>
          <a href="/srb/karijere" class="footer-nav-link">Karijere</a>
        </nav>
      </div>
      <div class="col-12 col-md-4">
        <h5 class="footer-heading">Kontakt</h5>
        <div class="footer-contact">
          <p class="mb-2"><strong>Beograd, Srbija</strong></p>
          <p class="mb-1">Tel: +381 11 82 145</p>
          <p class="mb-3">Email: office@bnblaw.com</p>
          <a href="/srb/kontakt" class="btn btn-white-cut">Pozovite</a>
        </div>
      </div>
    </div>
    <hr class="footer-divider my-4" />
    <div class="row">
      <div class="col-12 text-center">
        <p class="footer-copyright mb-0">&copy; 2025 BnB LAW. Sva prava zadržana.</p>
      </div>
    </div>
  </div>
</footer>

</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="/assets/js/custom.js"></script>
</body>
</html>
