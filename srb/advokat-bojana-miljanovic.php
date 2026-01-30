<?php
$page_title = 'Bojana Miljanović - Osnivač i Advokat | BnB LAW';
$page_desc = 'Partner u BnB LAW sa ekspertizom u pravu konkurencije, telekomunikacijama i privrednim pitanjima. Chambers-rangiran pravni profesionalac sa preko 10 godina iskustva.';
$current_lang = 'srb';
$current_page = 'team';
$page_image = '/assets/images/bojana-miljanovic.png';

include '../includes/head.php';
?>
<link rel="alternate" hreflang="en" href="https://yourwebsite.com/lawyer-bojana-miljanovic">
<link rel="alternate" hreflang="srb" href="https://yourwebsite.com/srb/advokat-bojana-miljanovic">
<link rel="alternate" hreflang="x-default" href="https://yourwebsite.com/lawyer-bojana-miljanovic">

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
          <img src="/assets/images/logo-updatedcolor.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
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
              <a href="/lawyer-bojana-miljanovic" class="lang-option"><img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" /><span>English</span></a>
              <a href="/srb/advokat-bojana-miljanovic" class="lang-option"><img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" /><span>Srpski</span></a>
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
          <img src="/assets/images/bojana-miljanovic.png" alt="Bojana Miljanović" class="img-fluid rounded-3">
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <div class="about-label d-flex align-items-center mb-3">
          <span class="about-label-dot me-2"></span>
          <span class="about-label-text">Profil Partnera</span>
        </div>
        
        <h1 class="team-profile-name mb-2">Bojana Miljanović</h1>
        <p class="team-profile-title mb-4">Osnivač i Advokat</p>
        
        <div class="team-profile-recognition mb-4">
          <p class="recognition-quote">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor" class="quote-icon"><path d="M580-240h160l-40-120 100-80H680l-40-120-40 120H480l100 80-40 120Zm-340 0h160l-40-120 100-80H340l-40-120-40 120H140l100 80-40 120Zm40-240Zm340 0Z"/></svg>
            "Njen rad je dobro obavljen, efikasan i precizan. Isporučuje ono što nam je potrebno kada nam je potrebno."
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
            Bojana Miljanović je osnivač i partner u BnB LAW, sa preko decenije specijalizovanog iskustva u pravu konkurencije, telekomunikacionoj regulativi i privrednim pravnim pitanjima širom Jugoistočne Evrope.
          </p>
          <p class="mb-4">
            Njena praksa se fokusira na antimonopolske istrage, kontrolu koncentracija, regulatornu usklađenost i strateške privredne transakcije. Savetovala je multinacionalne korporacije i regionalna preduzeća o složenim pitanjima konkurencije, telekomunikacionim dozvolama i strategijama ulaska na tržište.
          </p>
          <p class="mb-4">
            Bojana je priznata od strane Chambers Europe za svoj efikasan i precizan pravni rad, sa klijentima koji hvale njenu sposobnost da isporuči praktična rešenja pod strogim rokovima. Njeno duboko razumevanje regionalnih regulatornih okvira i poslovnog okruženja čini je pouzdanim savetnikom za kompanije koje posluju u više jurisdikcija.
          </p>
        </div>

        <h3 class="section-subtitle mt-5 mb-4">Oblasti Ekspertize</h3>
        <div class="expertise-list">
          <ul class="custom-list">
            <li>Pravo Konkurencije i Antimonopolsko Pravo</li>
            <li>Kontrola Koncentracija i Regulatorna Odobrenja</li>
            <li>Telekomunikaciono Pravo i Licenciranje</li>
            <li>Privredni Ugovori i Transakcije</li>
            <li>Regulatorna Usklađenost i Odnosi sa Državom</li>
            <li>Prekogranično Pravno Savetovanje</li>
          </ul>
        </div>

        <h3 class="section-subtitle mt-5 mb-4">Priznanja</h3>
        <div class="recognition-list">
          <ul class="custom-list">
            <li><strong>Chambers Europe 2025</strong> - Rangirana u Pravu konkurencije (Srbija)</li>
            <li><strong>The Legal 500 EMEA</strong> - Vodeći Partner</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="team-profile-sidebar">
          <h3 class="sidebar-title mb-4">Kontakt Informacije</h3>
          
          <div class="contact-item mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
            <a href="mailto:bojana@bnblaw.com">bojana@bnblaw.com</a>
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
<footer class="site-footer">
  <div class="container hero-container footer-container">
    <div class="row align-items-start footer-main-row">
      <div class="col-12 col-lg-8">
        <a class="navbar-brand" href="/srb/">
          <img src="/assets/images/logo-updatedcolor.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
        </a>
<br><br>
        <p class="footer-mission mb-4">
          Naša misija je da pružimo jasne, strateške pravne savete koji štite vaše interese,
          smanjuju složenost i omogućavaju vam da se fokusirate na ono što je najvažnije.
        </p>

        <nav class="footer-nav d-flex flex-wrap gap-4">
          <a href="/srb/" class="footer-nav-link">Početna</a>
          <a href="/srb/pravne-oblasti" class="footer-nav-link">Pravne Oblasti</a>
          <a href="/srb/jurisdikcije" class="footer-nav-link">Regioni</a>
          <a href="/srb/nas-pravni-tim" class="footer-nav-link">Naš Tim</a>
          <a href="/srb/karijere" class="footer-nav-link">Karijere</a>
          <a href="/srb/vesti" class="footer-nav-link">Vesti</a>
          <a href="/srb/kontakt" class="footer-nav-link">Kontaktirajte Nas</a>
        </nav>
      </div>

      <div class="col-12 col-lg-4 mt-4 mt-lg-0">
        <div class="row footer-cta-grid g-3">
          <div class="col-5">
            <a href="tel:+3811182145" class="btn-white-cut footer-cta-btn">
              Pozovite <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#6365b8"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg>
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
  <script src="../assets/js/custom.js"></script>

</body>
</html>
