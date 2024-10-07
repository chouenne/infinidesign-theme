<?php
// Function to enqueue styles and scripts
function infini_design_files()
{
  // Enqueue main stylesheet
  wp_enqueue_style('infini_design_main_files', get_stylesheet_uri());

  // Example: Enqueue additional styles or scripts if necessary
  // wp_enqueue_style('custom_css', get_template_directory_uri() . '/css/custom.css');
  // wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'infini_design_files');

// Add theme support for custom logo
add_theme_support('custom-logo');

// Register custom menus
function my_menus()
{
  register_nav_menus(
    array(
      'headernav' => __('Header Nav Menu', 'infini-design'), // Make translation ready
      'footernav' => __('Footer Nav Menu', 'infini-design')
    )
  );
}
add_action('init', 'my_menus');

// Register custom post types for Services and Projects
function infini_design_post_types()
{
  // Service post type
  register_post_type(
    'service',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'services'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => __('Services', 'infini-design'), // Make translation ready
        'add_new_item' => __('Add New Service', 'infini-design'),
        'edit_item' => __('Edit Service', 'infini-design'),
        'all_items' => __('All Services', 'infini-design'),
        'singular_name' => __('Service', 'infini-design')
      )
    )
  );

  // Project post type
  register_post_type(
    'project',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'projects'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => __('Projects', 'infini-design'), // Make translation ready
        'add_new_item' => __('Add New Project', 'infini-design'),
        'edit_item' => __('Edit Project', 'infini-design'),
        'all_items' => __('All Projects', 'infini-design'),
        'singular_name' => __('Project', 'infini-design')
      )
    )
  );
}
add_action('init', 'infini_design_post_types');

// Register footer widget areas
function register_footer_widgets()
{
  register_sidebar(
    array(
      'name' => __('Footer Widget Area 1', 'infini-design'),
      'id' => 'footer-widget-1',
      'description' => __('Widgets in this area will be displayed in the first column of the footer.', 'infini-design'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name' => __('Footer Widget Area 2', 'infini-design'),
      'id' => 'footer-widget-2',
      'description' => __('Widgets in this area will be displayed in the second column of the footer.', 'infini-design'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
}
add_action('widgets_init', 'register_footer_widgets');
