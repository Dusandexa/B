<?php
/**
 * Home Page (Serbian)
 * Početna stranica
 */

// Page-specific variables for SEO
$page_title = 'BnB LAW - Bojan Vučković & Bojana Miljanović';
$page_desc = 'Sa preko 10 godina specijalizovanog pravnog iskustva, pružamo precizne, strateške savete osmišljene da zaštite vaše interese i ojačaju vašu poziciju.';
$current_lang = 'sr';
$current_page = 'home';
$page_image = '/Assets/images/og-home.jpg';

// Include head (DOCTYPE, meta tags, hreflang)
include '../includes/head.php';
?>

<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<!-- Custom styles -->
<link rel="stylesheet" href="../Assets/css/custom.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=favorite" />
</head>

<body>
  <div class="site-wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3">
      <div class="container hero-container">
        <a class="navbar-brand d-flex flex-column pl-20" href="/sr/">
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
            <li class="nav-item">
              <a class="nav-link active" href="/sr/">Početna</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/sr/pravne-oblasti" id="moreLinksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link" href="/sr/jurisdikcije">Regioni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/sr/nas-tim" id="teamDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Naš Tim
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0">
                <li class="d-lg-none"><a class="dropdown-item" href="/sr/nas-tim">Upoznajte Tim</a></li>
                <li><a class="dropdown-item" href="/sr/karijere">Karijere</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sr/vesti">Vesti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sr/kontakt">Kontaktirajte nas danas</a>
            </li>
          </ul>

          <button class="btn btn-white-cut mt-3 mt-lg-0">Pozovite +3811182145</button>

          <!-- Language Switcher -->
          <div class="lang-switcher">
            <button class="lang-toggle" aria-label="Change language">
              <img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" />
              <span class="lang-arrow"></span>
            </button>
            <div class="lang-dropdown">
              <a href="/" class="lang-option" data-lang="en">
                <img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" />
                English
              </a>
              <a href="/sr/" class="lang-option active" data-lang="sr">
                <img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" />
                Srpski
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

<!-- HERO -->
<section class="hero hero-law">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>

  <div class="container hero-container">
    <div class="row  align-items-end hero-row">
      <div class="col-12 col-lg-7">
        <div class="hero-text-block">
          <h1 class="hero-title mb-3 text-metallic">
            Vaši <span class="hero-title-em">pouzdani partneri</span><br />
            u pravnoj strategiji
          </h1>

          <p class="hero-subtitle mb-0">
            Sa preko 10 godina specijalizovanog pravnog iskustva, pružamo
            precizne, strateške savete <em>osmišljene da zaštite vaše</em> interese i
            ojačaju vašu poziciju.
          </p>
        </div>
      </div>

<div class="col-12 col-lg-5">
  <div class="hero-stats-panel">
    <div class="hero-stats">
      <div class="hero-stat hero-stat-logo">
  <img src="../Assets/images/chambers-top-ranked-europe-2025.png" alt="Chambers Top Ranked Europe 2025" class="hero-stat-logo-img">
</div>

<div class="hero-stat hero-stat-logo">
  <img src="../Assets/images/Legal-500-leading-partner-EMEA.jpg" alt="Legal 500 Leading Partner EMEA" class="hero-stat-logo-img">
</div>

<div class="hero-stat">
  <div class="hero-stat-value" data-start="2" data-end="15" data-suffix="+" data-duration="400">15+</div>
  <div class="hero-stat-label">Godina prakse</div>
</div>
    </div>
  </div>
</div>

    </div><br>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="about-section">
  <div class="container hero-container">
    <div class="row justify-content-center align-items-start about-top-row">
      <div class="col-12 col-md-3 mb-3 mb-md-0">
        <div class="about-label d-flex align-items-center">
          <span class="about-label-dot me-2"></span>
          <span class="about-label-text">Naš Pristup</span>
        </div>  
      </div>

<div class="col-12 col-md-9">
  <p class="about-intro">
    Pružamo precizne, strateške savete osmišljene da zaštite vaše interese i ojačaju vašu poziciju. Kombinujući
    <span class="underline-accent">duboku stručnost sa pažljivom pažnjom prema detaljima</span>, pružamo prilagođena rešenja
    i jasno vođenje kroz složena pitanja - uvek sa diskrecijom, izuzetnošću i posvećenošću trajnim rezultatima.
  </p>

<div class="row g-4 mt-4 about-highlight-stats">
  <div class="col-3 col-md-3">
    <div class="about-highlight-stat">
      <div class="about-highlight-value">800+</div>
      <div class="about-highlight-label">uspešno rešenih predmeta</div>
    </div>
  </div>

  <div class="col-3 col-md-3">
    <div class="about-highlight-stat">
      <div class="about-highlight-value">98%</div>
      <div class="about-highlight-label">Uspešnih rešenja</div>
    </div>
  </div>
</div>
</div>

    </div> 
  </div>
</section>

<!-- CLIENT LOGOS SECTION -->
<section class="clients-section py-5">
  <div class="container text-center">
    <p class="clients-title mb-4">Poverenje više od 500+ klijenata</p>
  </div>

  <div class="container-fluid px-0">
    <div class="clients-logos-wrapper d-flex flex-wrap justify-content-center align-items-center gap-5 py-4">
      <img src="../Assets/images/resend-wordmark-black.svg" alt="Resend" class="client-logo-img">
      <img src="../Assets/images/logo_wordmark_1500.webp" alt="Wordmark" class="client-logo-img">
      <img src="../Assets/images/Google_2015_logo.svg" alt="Google" class="client-logo-img">
      <img src="../Assets/images/coderabbit-logo-light.svg" alt="CodeRabbit" class="client-logo-img">
    </div>
  </div>
</section>

<!-- VALUE STEPS -->
<section class="value-steps-section py-7">
  <div class="container hero-container">

    <div class="about-label d-flex align-items-center mb-3">
      <span class="about-label-dot me-2"></span>
      <span class="about-label-white">Naša Pravna Stručnost</span>
    </div>

    <div class="vs-steps  mb-5">

      <div class="vs-step">
        <span>Pravo konkurencije</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
        <div class="vs-line"></div>
      </div>

      <div class="vs-step">
        <span>Telekomunikaciono pravo</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
        <div class="vs-line"></div>
      </div>

      <div class="vs-step">
        <span>Privredno pravo</span>
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
        <div class="vs-line"></div>
      </div>
    </div>
  <h2 class="vs-title">
      Donosimo duboko pravno razumevanje da zaštitimo vaše interese u brzim i visoko regulisanim sektorima.
    </h2>

  </div>
</section>

<!-- PARTNERS SECTION -->
<section class="partners-section">
  <div class="container-fluid px-0">
    <div class="row g-0">
      <div class="col-12 col-md-6">
        <article class="partner-card partner-card-left">
              <div class="partner-gradient-bottom"></div>
                <div class="partner-duo-spot"></div>
          <div class="partner-card-overlay">
            
            <h3 class="partner-name text-metallic">Bojana Miljanović</h3>
            <p class="partner-role underline-accent">Suosnivač & Advokat</p>
            <p class="partner-text">
              "Njen rad je dobro urađen, efikasan i precizan. Ona pruža ono što nam je potrebno kada nam je potrebno."
- Chambers, Evropa, Srbija, Pravo konkurencije, 2025
            </p>
            <a href="#" class="btn-partner-outline">
              Više o Bojani
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
            </a>
          </div>
        </article>
      </div>

      <div class="col-12 col-md-6">
        <article class="partner-card partner-card-right">
              <div class="partner-gradient-bottom"></div>
                <div class="partner-duo-spot"></div>
          <div class="partner-card-overlay">
           
            <h3 class="partner-name text-metallic">Bojan Vučković</h3>
             <p class="partner-role underline-accent">Suosnivač & Advokat</p>
            <p class="partner-text">
              "On je najbolji advokat za pravo konkurencije u Istočnoj Evropi. Ima izvanredne pravne veštine i pažnju prema detaljima, uz poslovni pristup i način razmišljanja."
- Chambers, Evropa, Srbija, Pravo konkurencije, 2025
            </p>
            <a href="#" class="btn-partner-outline">
              Više o Bojanu
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z"/></svg>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

 <!-- FOOTER -->
<footer class="site-footer">
  <div class="container hero-container footer-container">
    <div class="row align-items-start footer-main-row">
      <div class="col-12 col-lg-8">
        <a class="navbar-brand d-flex flex-column" href="/sr/">
          <span>BnB LAW</span>
          <small class="navbar-brand-subtext">
            Bojan Vučković & Bojana Miljanović
          </small>
        </a>
<br><br>
        <p class="footer-mission mb-4">
          Naša misija je da pružimo jasne, strateške pravne savete koji štite vaše interese,
          smanjuju složenost i omogućavaju vam da se fokusirate na ono što je najvažnije.
        </p>

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
          <div class="col-5">
            <a href="tel:+3811182145" class="btn-white-cut footer-cta-btn">
              Pozovite Nas <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6365b8"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg>
            </a>
          </div>
          <div class="col-7">
            <a href="mailto:office@bnb-law.com" class="btn-partner-outline footer-cta-btn">
              Pošaljite Email <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M280-280q-33 0-56.5-23.5T200-360v-400q0-33 23.5-56.5T280-840h560q33 0 56.5 23.5T920-760v400q0 33-23.5 56.5T840-280H280Zm280-188L280-663v303h560v-303L560-468Zm0-98 280-194H280l280 194ZM120-120q-33 0-56.5-23.5T40-200v-500h80v500h660v80H120Zm720-546v-94H280v94-94h560v94Z"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-bottom d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
      <p class="footer-copy mb-3 mb-md-0">
        © 2025 BnB Law. Sva prava zadržana.
      </p>

      <div class="footer-socials d-flex align-items-center gap-3">
        <a href="#" class="footer-social" aria-label="Facebook">
          <span>f</span>
        </a>
        <a href="#" class="footer-social" aria-label="X">
          <span>x</span>
        </a>
        <a href="#" class="footer-social" aria-label="Instagram">
          <span>ig</span>
        </a>
        <a href="#" class="footer-social" aria-label="LinkedIn">
          <span>in</span>
        </a>
      </div>
    </div>
  </div>
</footer>
   
  </div> 

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../Assets/js/custom.js"></script>

</body>
</html>
