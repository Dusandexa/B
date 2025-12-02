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
