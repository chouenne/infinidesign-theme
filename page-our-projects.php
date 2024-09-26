<?php
/*
Template Name: Project
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
          <div class="project-grid-page">
            <?php
            $myProjects = new WP_Query(
              array(
                'posts_per_page' => -1,
                'post_type' => 'project',
              )
            );
            //the loop(opening)
            while ($myProjects->have_posts()) {
              $myProjects->the_post();

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
          <!-- end of project grid -->

        </div>
        <!-- end of container -->
      </section>
    </main>

    <?php
  endwhile;
endif;
?>
<!-- close the loop -->

<?php
get_footer(); ?>