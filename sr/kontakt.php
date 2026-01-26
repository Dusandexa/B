<?php
$page_title = 'Kontakt - BnB LAW | Profesionalne Pravne Usluge';
$page_desc = 'Kontaktirajte BnB LAW za profesionalno pravno savetovanje u oblasti konkurencije, telekomunikacija i privrednog prava. Odgovaramo u roku od 1 radnog dana.';
$current_lang = 'sr';
$current_page = 'contact';
$page_image = 'https://yourwebsite.com/Assets/images/og-contact.jpg'; // Optional

include '../includes/head.php';
include '../includes/header.php';
?>

<!-- CONTACT SECTION -->
<section class="contact-section">
  <div class="container hero-container">
    <div class="row g-4 align-items-stretch">
      <!-- LEFT: title + intro -->
      <div class="col-12 col-lg-5">
        <div class="contact-left">
          <div class="about-label d-flex align-items-center mb-3">
            <span class="about-label-dot me-2"></span>
            <span class="about-label-text">Kontakt</span>
          </div>

          <h1 class="contact-title mb-3">
            Hajde da razgovaramo o vašem slučaju sa jasnoćom i diskrecijom.
          </h1>

          <p class="contact-lead mb-4">
            Podelite kratak pregled i brzo ćemo vam odgovoriti. Za hitne slučajeve, pozovite našu kancelariju direktno.
          </p>

          <div class="d-flex flex-wrap gap-3">
            <a class="btn-white-cut" href="tel:+3811182145">
              Pozovite +3811182145
              <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px" fill="currentColor"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/></svg>
            </a>
          </div>

        </div>
      </div>

      <!-- RIGHT: cards + form -->
      <div class="col-12 col-lg-7">
        <div class="contact-right">
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="contact-card">
                <div class="contact-card-top">
                  <span class="material-symbols-outlined contact-ico">location_on</span>
                  <div class="contact-card-title">Kancelarija</div>
                </div>
                <div class="contact-card-text">
                  Naziv ulice i broj<br />
                  Grad, Država
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="contact-card">
                <div class="contact-card-top">
                  <span class="material-symbols-outlined contact-ico">schedule</span>
                  <div class="contact-card-title">Radno vreme</div>
                </div>
                <div class="contact-card-text">
                  Pon–Pet, 09:00–17:00 (CET)
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="contact-card">
                <div class="contact-card-top">
                  <span class="material-symbols-outlined contact-ico">mail</span>
                  <div class="contact-card-title">Email</div>
                </div>
                <a class="contact-card-link" href="mailto:office@bnb-law.com">office@bnb-law.com</a>
                <div class="contact-card-sub">Obično odgovaramo u roku od 1 radnog dana.</div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="contact-card contact-card-accent">
                <div class="contact-card-top">
                  <span class="material-symbols-outlined contact-ico">lock</span>
                  <div class="contact-card-title">Poverljivost</div>
                </div>
                <div class="contact-card-text">
                  Vaša poruka se obrađuje diskretno i deli se samo sa odgovornim pravnikom.
                </div>
              </div>
            </div>
          </div>

          <div class="contact-form-wrap mt-3">
            <?php
            // Display success/error messages
            if (isset($_SESSION['form_success'])) {
                echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['form_success']) . '</div>';
                unset($_SESSION['form_success']);
            }
            if (isset($_SESSION['form_error'])) {
                echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['form_error']) . '</div>';
                unset($_SESSION['form_error']);
            }
            ?>
            <form id="contactForm" class="contact-form" action="/forms/handler.php" method="post">
              <input type="hidden" name="lang" value="sr">
              <div class="row g-3">

                <div class="col-12 col-md-6">
                  <label class="contact-label" for="cfName">Ime i prezime</label>
                  <input class="contact-input" id="cfName" name="name" type="text" placeholder="Vaše ime" 
                         value="<?= isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name']) : '' ?>" />
                </div>

                <div class="col-12 col-md-6">
                  <label class="contact-label" for="cfEmail">Email</label>
                  <input class="contact-input" id="cfEmail" name="email" type="email" placeholder="vas@email.com" 
                         value="<?= isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : '' ?>" />
                </div>

                <div class="col-12">
                  <label class="contact-label" for="cfSubject">Predmet</label>
                  <input class="contact-input" id="cfSubject" name="subject" type="text" placeholder="Kratka tema" 
                         value="<?= isset($_SESSION['form_data']['subject']) ? htmlspecialchars($_SESSION['form_data']['subject']) : '' ?>" />
                </div>

                <div class="col-12">
                  <label class="contact-label" for="cfMsg">Poruka</label>
                  <textarea class="contact-textarea" id="cfMsg" name="message" rows="5"
                    placeholder="Recite nam u čemu vam je potrebna pomoć..."><?= isset($_SESSION['form_data']['message']) ? htmlspecialchars($_SESSION['form_data']['message']) : '' ?></textarea>
                </div>

                <!-- Honeypot field (hidden from users) -->
                <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">

                <!-- reCAPTCHA -->
                <div class="col-12">
                  <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" data-callback="recaptchaCallback"></div>
                  <div class="captcha-error small mt-2" style="display:none;"></div>
                </div>

                <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn-black-cut">
                    Pošalji poruku
                    <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px" fill="currentColor">
                      <path d="M120-120v-720l760 360-760 360Zm80-126 474-234-474-234v168l240 66-240 66v168Z" />
                    </svg>
                  </button>
                </div>

              </div>
            </form>
            <?php unset($_SESSION['form_data']); ?>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
