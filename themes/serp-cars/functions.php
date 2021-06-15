<?php
function scars_enqueue_scripts()
{
    //Enqueuing Stylesheet
    wp_enqueue_style('wp-style', get_stylesheet_uri(), NULL, '1.0.1', 'all');
    wp_enqueue_style('scars-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap', NULL, '1.0.1', 'all');
    wp_enqueue_style('scars-icons', '//cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css');
    wp_enqueue_style('scars-bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', NULL, '1.0.1', 'all');
    wp_enqueue_style('scars-style', get_template_directory_uri() . '/styles/app.css', array('scars-fonts', 'scars-bootstrap'), '1.0.1', 'all');

    //Enqueuing Scripts
    wp_enqueue_script('scars-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('scars-js', get_template_directory_uri() . '/scripts/app.js', array('jquery', 'scars-bootstrap'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'scars_enqueue_scripts');

function scars_theme_features()
{
    $navmenu = array(
        'header_menu' => __('Header Menu', 'scars'),
        'footer_menu' => __('Footer Menu', 'scars'),
    );
    register_nav_menus($navmenu);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'scars_theme_features');


/** Overriding Default Behaviors */
// Custom Posts Per Page
function scars_custom_posts_per_page($query)
{
    switch ($query->query_vars['post_type']) {
        case 'cars':
            $query->query_vars['posts_per_page'] = 6;
            break;
        default:
            break;
    }
    return $query;
}

if (!is_admin()) {
    add_filter('pre_get_posts', 'scars_custom_posts_per_page');
}

// Adding `current-menu-item` to cars
function scars_add_nav_menu_classes($classes, $item)
{
    if (is_post_type_archive('cars') && ($item->title == "Cars")) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'scars_add_nav_menu_classes', 10, 2);
