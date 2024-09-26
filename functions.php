<?php
//create a function, name it as you want
//this function has the purpose of managing the css/ script files connections

function infini_design_files()
{
  // wp_enqueue_style is a WordPress function used to enqueue (load) a CSS file
  // 'project_school_main_files' is a unique handle for this stylesheet, used to reference it later
  // get_stylesheet_uri() gets the URL of the current theme's stylesheet

  wp_enqueue_style('infini_design_main_files', get_stylesheet_uri());
}
// add_action is a WordPress function used to add a function to a specific action hook
// 'wp_enqueue_scripts' is a hook fired in the <head> section of the site
// 'project_school_files' is the name of the function to be executed when the hook is triggered
add_action('wp_enqueue_scripts', 'infini_design_files');

add_theme_support('custom-logo');

function my_menus()
{
  register_nav_menus(
    array(
      'headernav' => __('Header Nav Menu'),
      'footernav' => __('Footer Nav Menu')
    )
  );
}
add_action('init', 'my_menus');

// add_theme_support('widgets');

function infini_design_post_types()
{
  register_post_type(
    'service',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'services'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Services',
        'add_new_item' => 'Add New Service',
        'edit-item' => 'Edit Service',
        'all_items' => 'All Services',
        'singular_name' => 'Service'
      )
    )
  );

  register_post_type(
    'project',
    array(
      'supports' => array('title', 'editor'),
      'rewrite' => array('slug' => 'projects'),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-users',
      'labels' => array(
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit-item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project'
      )
    )
  );
}

add_action('init', 'infini_design_post_types');

//footer widgets start
function register_footer_widgets()
{
  register_sidebar(
    array(
      'name' => __('Footer Widget Area 1', 'Infini Design'),
      'id' => 'footer-widget-1',
      'description' => __('Widgets in this area will be displayed in the first column of the footer.', 'Infini Design'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name' => __('Footer Widget Area 2', 'Infini Design'),
      'id' => 'footer-widget-2',
      'description' => __('Widgets in this area will be displayed in the second column of the footer.', 'Infini Design'),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );

}
add_action('widgets_init', 'register_footer_widgets');

