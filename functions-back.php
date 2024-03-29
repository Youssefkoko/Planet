<?php
/**
 * Planet Gaming functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Planet_Gaming
 */
// First we check to see if acf_add_options_page is a function.
// If it is not, then we probably do not have ACF Pro installed
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
    ));

    // If we want to add multiple sections to our Options Page
    // we can do so with an Options Sub Page.
    acf_add_options_sub_page(array(
        'page_title' => "Onze Producten",
        'parent_slug' => 'theme-options', // 'menu_slug' on the parent options page
        'menu_title' => "Let's Work Together",
        'menu_slug' => 'lets-work-together',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Footer Settings',
        'parent_slug' => 'theme-options',
        'menu_title' => 'Footer Settings',
        'menu_slug' => 'footer-settings',
    ));

}

if (!function_exists('planet_gaming_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function planet_gaming_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Planet Gaming, use a find and replace
         * to change 'planet-gaming' to the name of your theme in all the template files.
         */
        load_theme_textdomain('planet-gaming', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('primary', 'planet-gaming'),
            'menu-2' => esc_html__('secondary', 'secondary'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('planet_gaming_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'planet_gaming_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function planet_gaming_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('planet_gaming_content_width', 640);
}
add_action('after_setup_theme', 'planet_gaming_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function planet_gaming_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'planet-gaming'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'planet-gaming'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'planet_gaming_widgets_init');

// Option

/**
 * Enqueue scripts and styles.
 */
function planet_gaming_scripts()
{
    wp_enqueue_style('planet-gaming-style', get_stylesheet_uri());
    wp_enqueue_style('planet-gaming-boots', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('planet-gaming', get_template_directory_uri() . '/assets/css/fontawesome-5.7.1-web/css/all.min.css');

    wp_enqueue_script('planet-gaming-jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array('jquery'), '20151215', true);
    wp_enqueue_script('planet-gaming-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true);

    // wp_enqueue_script('planet-gaming-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('planet-gaming-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'planet_gaming_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Bootstrap navwalker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
// PAGINATION
function pagination_bar($custom_query)
{

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'mid_size' => 2,
            'prev_text' => __('Verige', 'textdomain'),
            'next_text' => __('Volginde', 'textdomain'),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
