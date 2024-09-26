<?php get_header(); ?>

<!-- start the loop -->
<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    ?>

    <main>
      <section class="project-body">
        <div class="container">
          <div class="project-single-flex">
            <div class="project-preview">
              <ul>
                <li><strong>Client Name: </strong><?php the_field('project_client_name'); ?></li>
                <li><strong>Project Year: </strong><?php the_field('project_year'); ?></li>
                <li><strong>Service: </strong> <?php the_field('project_services'); ?></li>
              </ul>
            </div>
            <div class="project-single-right">
              <h1>
                <?php the_title(); ?>
              </h1>
              <div class="project-img" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <?php
                $imgProject = get_field('project_hero_image');

                ?>

                <img src="<?php echo esc_url($imgProject['url']); ?>" alt="<?php echo esc_attr($imgProject['alt']); ?>">
              </div>
              <div class="study-case">
                <p><?php the_field('project_study_case'); ?></p>
              </div>

            </div>
            <!-- project-single-right end -->

          </div>
        </div>
      </section>

      <?php
  endwhile;
endif;
?>
  <!-- close the loop -->
  <?php get_footer(); ?>