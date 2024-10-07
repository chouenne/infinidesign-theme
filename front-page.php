<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<!-- start the loop -->

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    ?>

    <body>
      <section class="hero">
        <div class="container">
          <div class="hero-flex">
            <div class="hero-text">
              <h1>
                <?php

                the_field('section_hero_title')
                  // ?>
              </h1>
              <p>
                <?php the_field('section_hero_subtitle'); ?>
              </p>
              <?php
              $btnHero = get_field('section_hero_btn');

              $btnHeroLink = $btnHero['url'];
              $btnHeroText = $btnHero['title'];
              $btnHeroTarget = $btnHero['target'];

              ?>

              <a class="btn" target="<?php $btnHeroTarget; ?>" href="<?php echo $btnHeroLink; ?>">
                <?php echo $btnHeroText; ?>
              </a>
            </div>

            <div class="hero-image">
              <?php
              $imgHero = get_field('section_hero_img');
              ?>
              <img src="<?php echo esc_url($imgHero['url']); ?>" alt="<?php echo esc_attr($$imgHero['alt']); ?>">
            </div>
          </div>
        </div>
      </section>
      <!-- hero section end -->

      <section class="project">
        <div class="project-container">
          <div class="project-flex">
            <div class="project-left" data-aos="fade-down-left" data-aos-easing="linear" data-aos-duration="1500">
              <h2>
                <?php the_field('section_about_title'); ?>
              </h2>
              <h3>
                <?php the_field('section_about_subtitle'); ?>
              </h3>
              <p>
                <?php the_field('section_about_paragraph'); ?>
              </p>
              <?php
              $btnAbout = get_field('section_about_btn');

              $btnAboutLink = $btnAbout['url'];
              $btnAboutText = $btnAbout['title'];
              $btnAboutTarget = $btnAbout['target'];

              ?>
              <a class="btn" target="<?php $btnAboutTarget; ?>" href="<?php echo $btnAboutLink; ?>">
                <?php echo $btnAboutText; ?>
              </a>
            </div>
            <div class="project-right">

              <div class="project-grid">
                <?php

                //custom query
                $homepageProjects = new WP_Query(
                  array(
                    'posts_per_page' => 3,
                    'post_type' => 'project',
                  )
                );

                //the loop(opening)
                while ($homepageProjects->have_posts()) {
                  $homepageProjects->the_post();

                  ?>
                  <div class="card-projects">

                    <?php
                    $imgProject = get_field('project_hero_image');
                    ?>
                    <img src="<?php echo esc_url($imgProject['url']); ?>" alt="<?php echo esc_attr($imgProject['alt']); ?>">
                    <h4><?php the_title(); ?></h4>
                    <a href="<?php the_permalink(); ?>" class="btn-gold">
                      View More
                    </a>

                  </div>
                  <!-- end of the card -->
                  <?php


                }
                wp_reset_postdata();

                ?>
              </div>
              <!-- end of card grid  -->
            </div>
            <!-- end of project right -->

          </div>
          <!-- end of card flex -->
        </div>
        <!-- end of container -->
      </section>

      <!-- about section end -->

      <section class="service" id="service">
        <div class="service-header">
          <div class="service-flex">
            <div class="service-text">
              <h2>
                <?php the_field('section_service_title'); ?>
              </h2>
              <h3>
                <?php the_field('section_service_subtitle'); ?>
              </h3>
              <p>We create captivating brands and digital experiences that shape culture and drive brands towards
                extraordinary growth. From the beginning, we have concentrated on offering strategies and services that
                empower our clients to thrive in today's fast-paced, ever-changing landscape.</p>
            </div>

          </div>
        </div>

        <div class="service-grid">
          <?php

          //custom query
          $homepageServices = new WP_Query(
            array(
              'posts_per_page' => 4,
              'post_type' => 'service',
              'orderby' => 'menu_order',
              'order' => 'ASC', // or 'DESC'
            )
          );

          //the loop(opening)
          while ($homepageServices->have_posts()) {
            $homepageServices->the_post();
            //$homepageBlog relate to the post
      

            ?>
            <div class="card-services" style="background-image: url(<?php the_field('section_service_thumnail_img'); ?>);"
              data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
              <div class="overlay">

                <a href="<?php the_permalink(); ?>" class="btn-service">
                  <?php the_title(); ?>
                </a>


              </div>

            </div>
            <?php


          }
          wp_reset_postdata();

          ?> <!--CLOSE THE LOOP-->
        </div><!--end of service-grid-->
        <!--</div>end of container-->
      </section>

      <!-- end of the section service -->


      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-flex" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <div class="contact-text">
              <h2>
                <?php the_field('section_contact_title'); ?>
              </h2>
              <h3>
                <?php the_field('section_contact_subtitle'); ?>
              </h3>

              <p>Every great product, solution, and campaign starts with a conversation. We'd love to hear about your
                project and discuss how we can bring your vision to life. Get in touch with us today!</p>

            </div>
            <!-- end of contact-text -->
            <div class="contact-form">
              <?php echo apply_shortcodes('[contact-form-7 id="5185731" title="contact form"]'); ?>
            </div>

            <!-- end of contact-form -->
          </div>
          <!-- end of flex -->

        </div>

        <!-- end of container -->

      </section>

      <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
      <!-- end of section contact -->

    </body>

    <?php
  endwhile;
endif;
?>
<!-- close the loop -->

<?php
get_footer(); ?>