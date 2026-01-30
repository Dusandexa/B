<?php
$page_title = 'Karijere - BnB LAW | Pridružite se Našem Pravnom Timu';
$page_desc = 'Pridružite se BnB LAW - tražimo talentovane pravne profesionalce sa strašću prema pravu konkurencije, telekomunikacija i privrednoj praksi. Istražite prilike za karijeru.';
$current_lang = 'srb';
$current_page = 'careers';
$page_image = '/assets/images/og-careers.jpg';

include '../includes/head.php';
?>
<link rel="alternate" hreflang="en" href="https://yourwebsite.com/careers">
<link rel="alternate" hreflang="srb" href="https://yourwebsite.com/srb/karijere">
<link rel="alternate" hreflang="x-default" href="https://yourwebsite.com/careers">

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
          <img src="/assets/images/bnb-law-logotype2.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
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
              <a class="nav-link dropdown-toggle" href="/srb/pravne-oblasti" id="moreLinksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
              <a class="nav-link" href="/srb/jurisdikcije">Regioni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= in_array($current_page, ['team', 'careers']) ? ' active' : '' ?>" href="/srb/nas-pravni-tim" id="teamDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Naš Tim
              </a>
              <ul class="dropdown-menu dropdown-menu-dark ptb-0">
                <li class="d-lg-none"><a class="dropdown-item<?= $current_page === 'team' ? ' active' : '' ?>" href="/srb/nas-pravni-tim">Upoznajte Tim</a></li>
                <li><a class="dropdown-item<?= $current_page === 'careers' ? ' active' : '' ?>" href="/srb/karijere">Karijere</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/srb/vesti">Vesti</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/srb/kontakt">Kontaktirajte nas</a>
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
              <a href="/careers" class="lang-option" data-lang="en">
                <img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" />
                English
              </a>
              <a href="/srb/karijere" class="lang-option active" data-lang="srb">
                <img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" />
                Srpski
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- CAREERS INTRO -->
    <section class="about-section">
      <div class="container hero-container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="about-label d-flex align-items-center mb-3">
              <span class="about-label-dot me-2"></span>
              <span class="about-label-text">Karijere</span>
            </div>

            <h1 class="contact-title mb-0">
              Pridružite se našem timu.
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- CAREERS FORM SECTION -->
    <section class="contact-section pt-0">
      <div class="container hero-container">
        <div class="row g-4 align-items-stretch">
          <!-- LEFT: intro text -->
          <div class="col-12 col-lg-5">
            <div class="contact-left">
              <p class="contact-lead mb-4">
                Uvek smo u potrazi za talentovanim pravnim profesionalcima koji dele našu posvećenost visokom kvalitetu rada, preciznosti i odgovornom odnosu prema klijentima.
              </p>
              <p class="contact-lead mb-4">
                Ukoliko vas posebno interesuju pravo konkurencije, telekomunikacije ili privredno pravo, biće nam zadovoljstvo da vas upoznamo.
              </p>
            </div>
          </div>

          <!-- RIGHT: form -->
          <div class="col-12 col-lg-7">
            <div class="contact-form-wrap">
              <form id="careerForm" class="contact-form" action="#" method="post" enctype="multipart/form-data">
                <div class="row g-3">

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerName">Ime i prezime</label>
                    <input class="contact-input" id="careerName" name="name" type="text" placeholder="Vaše ime" />
                  </div>

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerEmail">Email</label>
                    <input class="contact-input" id="careerEmail" name="email" type="email" placeholder="vas@email.com" />
                  </div>

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerPhone">Broj telefona</label>
                    <input class="contact-input" id="careerPhone" name="phone" type="tel" placeholder="+381 11..." />
                  </div>

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerPosition">Pozicija koja vas interesuje</label>
                    <select class="contact-input" id="careerPosition" name="position">
                      <option value="">Izaberite poziciju...</option>
                      <option value="Associate Attorney">Saradnik advokat</option>
                      <option value="Senior Associate">Viši saradnik</option>
                      <option value="Legal Counsel">Pravni savetnik</option>
                      <option value="Junior Lawyer">Mlađi pravnik</option>
                      <option value="Paralegal">Pravni asistent</option>
                      <option value="Legal Assistant">Pomoćnik u kancelariji</option>
                      <option value="Internship">Praksa</option>
                      <option value="Other">Ostalo</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label class="contact-label" for="careerMsg">Propratno pismo / Poruka</label>
                    <textarea class="contact-textarea" id="careerMsg" name="message" rows="5"
                      placeholder="Recite nam nešto o sebi i zašto želite da se pridružite našem timu..."></textarea>
                  </div>

                  <div class="col-12">
                    <label class="contact-label" for="careerCV">CV / Biografija (PDF, DOC, DOCX)</label>
                    <input class="contact-input" id="careerCV" name="cv" type="file" accept=".pdf,.doc,.docx" />
                  </div>

                  <!-- reCAPTCHA -->
                  <div class="col-12">
                    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" data-callback="recaptchaCallbackCareer"></div>
                    <div class="captcha-error-career small mt-2" style="display:none;"></div>
                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn-black-cut">
                      Pošalji prijavu
                      <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px" fill="currentColor">
                        <path d="M120-120v-720l760 360-760 360Zm80-126 474-234-474-234v168l240 66-240 66v168Z" />
                      </svg>
                    </button>
                  </div>

                </div>
              </form>
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
          <img src="/assets/images/bnb-law-logotype2.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
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

