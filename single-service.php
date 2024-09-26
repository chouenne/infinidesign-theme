<?php get_header(); ?>

<!-- start the loop -->
<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    ?>

    <main>
      <section class="single-hero">
        <div class="container">
          <h1>
            <?php the_title(); ?>
          </h1>
          <p>
            <?php the_field('page_service_hero_subtitle'); ?>
          </p>
        </div>
      </section>

      <section class="single-custome" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
        <div class="container">
          <div class="single-custome-text">
            <h2>
              <?php the_field('service_main_title'); ?>
            </h2>
            <h3>
              <?php the_field('service_main_subtitle'); ?>
            </h3>
            <p>
              <?php the_content(); ?>
            </p>
          </div>

          <div class="single-grid">
            <?php

            for ($i = 1; $i <= 9; $i++) {
              $image = get_field('service_gallery_img_' . $i);

              if ($image) {
                ?>
                <div class="single-item">
                  <?php
                  // Output the image for all items
                  echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                  ?>
                </div>
                <?php
              }
            }
            ?>
          </div>
        </div>
      </section>


      <section class="single-cta">
        <div class="container">
          <div class="single-cta-textinfo">
            <h3>
              <?php the_field('service_cta_title'); ?>
            </h3>
            <p>
              <?php the_field('service_cta_description'); ?>
            </p>
            <a href="<?php the_field('service_cta_button'); ?>" class="btn">Contact Us</a>
          </div>

        </div>

      </section>

      <?php
  endwhile;
endif;
?>
  <!-- close the loop -->
  <?php get_footer(); ?>