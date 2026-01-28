<?php
$page_title = 'Careers - BnB LAW | Join Our Legal Team';
$page_desc = 'Join BnB LAW - we\'re looking for talented legal professionals passionate about competition law, telecommunications, and commercial practice. Explore career opportunities.';
$current_lang = 'en';
$current_page = 'careers';
$page_image = 'https://yourwebsite.com/assets/images/og-careers.jpg'; // Optional

include 'includes/head.php';
include 'includes/header.php';
?>

    <!-- CAREERS INTRO -->
    <section class="about-section">
      <div class="container hero-container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="about-label d-flex align-items-center mb-3">
              <span class="about-label-dot me-2"></span>
              <span class="about-label-text">Careers</span>
            </div>

            <h1 class="contact-title mb-0">
              Join our team.
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
                We're always looking for talented legal professionals who share our commitment to excellence, precision, and client service.
              </p>
              <p class="contact-lead mb-4">
                If you're passionate about competition law, telecommunications, or commercial practice, we'd love to hear from you.
              </p>
            </div>
          </div>

          <!-- RIGHT: form -->
          <div class="col-12 col-lg-7">
            <div class="contact-form-wrap">
              <form id="careerForm" class="contact-form" action="#" method="post" enctype="multipart/form-data">
                <div class="row g-3">

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerName">Full name</label>
                    <input class="contact-input" id="careerName" name="name" type="text" placeholder="Your name" />
                  </div>

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerEmail">Email</label>
                    <input class="contact-input" id="careerEmail" name="email" type="email" placeholder="you@email.com" />
                  </div>

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerPhone">Phone number</label>
                    <input class="contact-input" id="careerPhone" name="phone" type="tel" placeholder="+381 11..." />
                  </div>

                  <div class="col-12 col-md-6">
                    <label class="contact-label" for="careerPosition">Position of interest</label>
                    <select class="contact-input" id="careerPosition" name="position">
                      <option value="">Select a position...</option>
                      <option value="Associate Attorney">Associate Attorney</option>
                      <option value="Senior Associate">Senior Associate</option>
                      <option value="Legal Counsel">Legal Counsel</option>
                      <option value="Junior Lawyer">Junior Lawyer</option>
                      <option value="Paralegal">Paralegal</option>
                      <option value="Legal Assistant">Legal Assistant</option>
                      <option value="Internship">Internship</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label class="contact-label" for="careerMsg">Cover letter / Message</label>
                    <textarea class="contact-textarea" id="careerMsg" name="message" rows="5"
                      placeholder="Tell us about yourself and why you'd like to join our team..."></textarea>
                  </div>

                  <div class="col-12">
                    <label class="contact-label" for="careerCV">CV / Resume (PDF, DOC, DOCX)</label>
                    <input class="contact-input" id="careerCV" name="cv" type="file" accept=".pdf,.doc,.docx" />
                  </div>

                  <!-- reCAPTCHA -->
                  <div class="col-12">
                    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" data-callback="recaptchaCallbackCareer"></div>
                    <div class="captcha-error-career small mt-2" style="display:none;"></div>
                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn-black-cut">
                      Submit application
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

<?php include 'includes/footer.php'; ?>
