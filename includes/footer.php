<?php
/**
 * Footer Include
 * 
 * Required variables:
 * @param string $current_lang - Language code: 'en' or 'srb'
 */

$current_lang = $current_lang ?? 'en';
$current_year = date('Y');
?>

<!-- FOOTER -->
<footer class="site-footer">
  <div class="container hero-container footer-container">
    <!-- TOP ROW -->
    <div class="row align-items-start footer-main-row">
      <!-- LEFT: logo, mission, nav -->
      <div class="col-12 col-lg-8">
        <a class="navbar-brand" href="<?= $current_lang === 'srb' ? '/srb/' : '/' ?>">
          <img src="/assets/images/bnb-law-logotype2.png" alt="BnB LAW - Bojan Vučković & Bojana Miljanović" height="40">
        </a>
<br><br>
        <p class="footer-mission mb-4">
          <?= $current_lang === 'en' ? 
            'Our mission is to provide clear, strategic legal guidance that protects your interests, reduces complexity, and lets you focus on what matters most.' :
            'Naša misija je pružanje jasnog, strateškog pravnog saveta koji štiti vaše interese, smanjuje složenost i omogućava vam da se fokusirate na ono što je najvažnije.'
          ?>
        </p>

        <nav class="footer-nav d-flex flex-wrap gap-4">
          <?php if ($current_lang === 'en'): ?>
            <a href="/" class="footer-nav-link">Home</a>
            <a href="/legal-fields" class="footer-nav-link">Legal Fields</a>
            <a href="/jurisdictions" class="footer-nav-link">Regions</a>
            <a href="/our-legal-team" class="footer-nav-link">Our Team</a>
            <a href="/careers" class="footer-nav-link">Careers</a>
            <a href="/news" class="footer-nav-link">News</a>
            <a href="/contact" class="footer-nav-link">Contact Us</a>
          <?php else: ?>
            <a href="/srb/" class="footer-nav-link">Početna</a>
            <a href="/srb/pravne-oblasti" class="footer-nav-link">Pravne Oblasti</a>
            <a href="/srb/jurisdikcije" class="footer-nav-link">Regioni</a>
            <a href="/srb/nas-pravni-tim" class="footer-nav-link">Naš Tim</a>
            <a href="/srb/karijere" class="footer-nav-link">Karijere</a>
            <a href="/srb/vesti" class="footer-nav-link">Vesti</a>
            <a href="/srb/kontakt" class="footer-nav-link">Kontakt</a>
          <?php endif; ?>
        </nav>
      </div>

      <!-- RIGHT -->
      <div class="col-12 col-lg-4 mt-4 mt-lg-0">
        <div class="row footer-cta-grid g-3">
          <div class="col-5">
            <a href="tel:+3811182145" class="btn-white-cut footer-cta-btn">
              <?= $current_lang === 'en' ? 'Call Us' : 'Pozovite nas' ?>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12Z"/></svg>
            </a>
          </div>
          <div class="col-7">
            <a href="mailto:office@bnb-law.com" class="btn-partner-outline footer-cta-btn">
              <?= $current_lang === 'en' ? 'Email our team' : 'Pošaljite email' ?>
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M280-280q-33 0-56.5-23.5T200-360v-400q0-33 23.5-56.5T280-840h560q33 0 56.5 23.5T920-760v400q0 33-23.5 56.5T840-280H280Zm280-188L280-663v303h560v-303L560-468Zm0-98 280-194H280l280 194ZM120-120q-33 0-56.5-23.5T40-200v-500h80v500h660v80H120Zm720-546v-94H280v94-94h560v94Z"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- DIVIDER -->
    <div class="footer-divider"></div>

    <!-- BOTTOM ROW -->
    <div class="footer-bottom d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between">
      <p class="footer-copy mb-3 mb-md-0">
        © <?= $current_year ?> BnB Law. <?= $current_lang === 'en' ? 'All rights reserved.' : 'Sva prava zadržana.' ?>
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

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- jQuery Validation plugin -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

  <!-- Custom JS -->
  <script src="/assets/js/custom.js"></script>

  <!-- Google reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>
