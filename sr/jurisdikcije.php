<?php
$page_title = 'Jurisdikcije - BnB LAW | Pravne Usluge u Jugoistočnoj Evropi';
$page_desc = 'Strateško pravno savetovanje širom ključnih tržišta Jugoistočne Evrope. Pružamo usluge klijentima u Srbiji, Bosni i Hercegovini, Crnoj Gori, Hrvatskoj i šire.';
$current_lang = 'sr';
$current_page = 'jurisdictions';
$page_image = 'https://yourwebsite.com/Assets/images/og-jurisdictions.jpg'; // Optional

include '../includes/head.php';
include '../includes/header.php';
?>

    <!-- JURISDICTIONS INTRO -->
    <section class="about-section">
      <div class="container hero-container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="about-label d-flex align-items-center mb-3">
              <span class="about-label-dot me-2"></span>
              <span class="about-label-text">Naša Regionalna Prisutnost</span>
            </div>

            <h1 class="contact-title mb-0">
              Strateško savetovanje širom ključnih tržišta u Jugoistočnoj Evropi i šire.
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- JURISDICTIONS LIST & CLIENTS -->
    <section class="value-steps-section py-5" style="background-color: #ffffff; color: #000000;">
      <div class="container hero-container">
        <div class="row">
          <!-- Left column: Countries -->
          <div class="col-12 col-lg-6">
            <div class="vs-steps mb-5" style="margin-top: 0;">

              <div class="vs-step">
                <span>Srbija</span>
                <div class="vs-line"></div>
              </div>

              <div class="vs-step">
                <span>Bosna i Hercegovina</span>
                <div class="vs-line"></div>
              </div>

              <div class="vs-step">
                <span>Crna Gora</span>
                <div class="vs-line"></div>
              </div>

              <div class="vs-step">
                <span>Hrvatska</span>
                <div class="vs-line"></div>
              </div>
            </div>
          </div>

          <!-- Right column: Trusted by -->
          <div class="col-12 col-lg-6">
            <div class="text-center text-lg-start">
              <p class="clients-title mb-4" style="color: #133034;">Poverenje od preko 500 klijenata</p>
            </div>

            <div class="clients-logos-wrapper d-flex flex-wrap justify-content-center justify-content-lg-start align-items-center gap-4 py-3">
              <img src="../Assets/images/resend-wordmark-black.svg" alt="Resend" class="client-logo-img">
              <img src="../Assets/images/logo_wordmark_1500.webp" alt="Wordmark" class="client-logo-img">
              <img src="../Assets/images/Google_2015_logo.svg" alt="Google" class="client-logo-img">
              <img src="../Assets/images/coderabbit-logo-light.svg" alt="CodeRabbit" class="client-logo-img">
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>
