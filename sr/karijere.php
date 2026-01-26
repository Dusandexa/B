<?php
$page_title = 'Karijere - BnB LAW | Pridružite se Našem Pravnom Timu';
$page_desc = 'Pridružite se BnB LAW - tražimo talentovane pravne profesionalce sa strašću prema pravu konkurencije, telekomunikacija i privrednoj praksi. Istražite prilike za karijeru.';
$current_lang = 'sr';
$current_page = 'careers';
$page_image = 'https://yourwebsite.com/Assets/images/og-careers.jpg'; // Optional

include '../includes/head.php';
include '../includes/header.php';
?>

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
                Uvek tražimo talentovane pravne profesionalce koji deleše našu posvećenost izvrsnosti, preciznosti i usluzi klijentima.
              </p>
              <p class="contact-lead mb-4">
                Ako ste strastveni prema pravu konkurencije, telekomunikacija ili privrednoj praksi, voleli bismo da čujemo od vas.
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

<?php include '../includes/footer.php'; ?>
