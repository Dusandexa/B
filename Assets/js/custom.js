document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".hero-stat-value[data-start][data-end]");
  const statsSection = document.querySelector(".hero-stats-panel");
  let hasAnimated = false;

  // Shared duration for ALL counters (slightly faster)
  const COUNTER_DURATION = 600; // ms

  function animateCounter(el) {
    const start = parseInt(el.dataset.start, 10);
    const end = parseInt(el.dataset.end, 10);
    const suffix = el.dataset.suffix || "";

    const range = end - start;
    let startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      const elapsed = timestamp - startTime;
      const progress = Math.min(elapsed / COUNTER_DURATION, 1);

      // Fast but smooth easing – slightly faster than before
      const eased = Math.pow(progress, 0.65);

      const value = Math.round(start + range * eased);
      el.textContent = value + suffix;

      // All counters run full duration so they end together
      if (progress < 1) {
        requestAnimationFrame(step);
      }
    }

    requestAnimationFrame(step);
  }

  function runCounters() {
    if (hasAnimated) return;
    counters.forEach(animateCounter);
    hasAnimated = true;
  }

  // Trigger when stats enter viewport
  if ("IntersectionObserver" in window && statsSection) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            runCounters();
            observer.disconnect();
          }
        });
      },
      { threshold: 0.3 }
    );

    observer.observe(statsSection);
  } else {
    // Fallback: run on load
    runCounters();
  }

  // =============================
  // DROPDOWN HOVER ON DESKTOP
  // =============================
  const dropdownToggle = document.getElementById('moreLinksDropdown');
  const dropdownItem = dropdownToggle ? dropdownToggle.closest('.nav-item.dropdown') : null;

  if (dropdownToggle && dropdownItem) {
    // Desktop: hover to show, click to navigate to link
    if (window.innerWidth >= 992) {
      // Prevent Bootstrap toggle on desktop
      dropdownToggle.addEventListener('click', function(e) {
        // Allow navigation to legal-fields.html
        window.location.href = this.getAttribute('href');
      });

      // Show dropdown on hover
      dropdownItem.addEventListener('mouseenter', function() {
        this.querySelector('.dropdown-menu').classList.add('show');
      });

      dropdownItem.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-menu').classList.remove('show');
      });
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {

  // ...your existing code above stays as-is...

  if (window.jQuery && $.fn.validate) {
    // Add custom email validation with stricter pattern
    $.validator.addMethod("strictEmail", function(value, element) {
      // Pattern requires: name@domain.tld (at least 2 chars for TLD)
      var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      return this.optional(element) || pattern.test(value);
    }, "Please enter a valid email address.");

    $("#contactForm").validate({
      rules: {
        name: { required: true, minlength: 2 },
        email: { required: true, strictEmail: true },
        subject: { required: true, minlength: 3 },
        message: { required: true, minlength: 10 }
      },
      messages: {
        name: "Please enter your full name.",
        email: "Please enter a valid email address.",
        subject: "Please add a short subject.",
        message: "Please write at least 10 characters."
      },
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.after(error);
      },
      highlight: function (element) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function (element) {
        $(element).removeClass("is-invalid").addClass("is-valid");
      },
      submitHandler: function (form) {
        if (!grecaptcha.getResponse()) {
          $(".captcha-error").text("Please confirm you're not a robot.").show();
          return false;
        }
        $(".captcha-error").hide();
        form.submit();
      }
    });

    // Career form validation
    $("#careerForm").validate({
      rules: {
        name: { required: true, minlength: 2 },
        email: { required: true, strictEmail: true },
        phone: { required: true, minlength: 8 },
        position: { required: true },
        message: { required: true, minlength: 20 },
        cv: { required: true, extension: "pdf|doc|docx" }
      },
      messages: {
        name: "Please enter your full name.",
        email: "Please enter a valid email address.",
        phone: "Please enter your phone number.",
        position: "Please select a position.",
        message: "Please write at least 20 characters about yourself.",
        cv: "Please upload your CV (PDF, DOC, or DOCX format)."
      },
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.after(error);
      },
      highlight: function (element) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function (element) {
        $(element).removeClass("is-invalid").addClass("is-valid");
      },
      submitHandler: function (form) {
        if (!grecaptcha.getResponse()) {
          $(".captcha-error-career").text("Please confirm you're not a robot.").show();
          return false;
        }
        $(".captcha-error-career").hide();
        form.submit();
      }
    });
  } else {
    console.warn("jQuery or jQuery Validation is missing.");
  }
});

// reCAPTCHA callbacks
function recaptchaCallback() {
  $(".captcha-error").hide();
}

function recaptchaCallbackCareer() {
  $(".captcha-error-career").hide();
}