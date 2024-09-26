<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<!-- start the loop -->

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    ?>


    <main>
      <section>
        <div class="container">
          <div class="misson-flex">
            <div class="mission-image">
              <?php
              $imgMisson = get_field('about_page_image');
              ?>
              <img src="<?php echo esc_url($imgMisson['url']); ?>" alt="<?php echo esc_attr($imgMisson['alt']); ?>">
            </div>

            <p>
              <?php the_field('about_paragraph_content'); ?>
            </p>

          </div>

        </div>
      </section>
    </main>

    <?php
  endwhile;
endif;
?>
<!-- close the loop -->

<?php
get_footer(); ?>