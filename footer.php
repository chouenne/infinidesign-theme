<footer>
  <div class="container">
    <div class="footer-grid">

      <!-- Footer Column 1 -->
      <div class="footer-col-1">
        <?php if (is_active_sidebar('footer-widget-1')): ?>
          <?php dynamic_sidebar('footer-widget-1'); ?>
        <?php endif; ?>
      </div>

      <!-- Footer Column 2 -->
      <div class="footer-col-2">
        <ul>
          <li>Contact</li>
          <li><a href="mailto:contact@infinidesignstudio.com">contact@infinidesignstudio.com</a></li>
          <li>
            <div class="social-container">
              <ul class="social-icon">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>

      <!-- Footer Column 3 -->
      <div class="footer-col-3">
        <?php the_custom_logo(); ?>
      </div>

      <!-- Footer Column 4 -->
      <div class="footer-col-4">
        <h4>Join our newsletter</h4>

        <?php echo do_shortcode('[mailpoet_form id="1"]'); ?>

      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
  jQuery(document).ready(function ($) {
    $('#burger').click(function () {
      $('.menu-list').toggleClass('show-menu');
    });
  });
</script>

<!-- AOS animation initialization -->
<script>
  AOS.init();
</script>

<!-- Back to Top Button -->
<div id="back-to-top">
  <a href="#" aria-label="Back to Top">
    <i class="fa-solid fa-arrow-up"></i>
  </a>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var backToTopButton = document.getElementById('back-to-top');

    window.addEventListener('scroll', function () {
      if (window.scrollY > 200) {
        backToTopButton.style.display = 'block';
      } else {
        backToTopButton.style.display = 'none';
      }
    });

    backToTopButton.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  });
</script>