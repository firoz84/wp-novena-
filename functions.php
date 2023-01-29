<?php
/**
 * novena functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package novena
 */
require_once(get_theme_file_path('./lib/codestar-framework/codestar-framework.php') );

require_once(get_theme_file_path('./inc/novena-options.php') );


//novena custom post 
require_once(get_theme_file_path('./inc/novena-ctp.php') );

//novena metabox post 
require_once(get_theme_file_path('./inc/novena-metabox.php') );

//doctors metabox post 
require_once(get_theme_file_path('./inc/doctor-metabox.php') );





if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function novena_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on novena, use a find and replace
		* to change 'novena' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'novena', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'novena' ),
		)
	);

	function add_additional_class_on_li($classes, $item, $args) {
		if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}
	add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);
	
	// link a add class kora 

			function add_additional_class_on_a($classes, $item, $args)
		{
			if (isset($args->add_a_class)) {
				$classes['class'] = $args->add_a_class;
			}
			return $classes;
		}

		add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

		// submenu 
		function my_nav_menu_submenu_css_class( $classes ) {
			$classes[] = 'dropdown-menu';
			return $classes;
		}
		add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );



	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'novena_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'novena_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function novena_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'novena_content_width', 640 );
}
add_action( 'after_setup_theme', 'novena_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function novena_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'novena' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'novena' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'novena_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function novena_scripts() {
	wp_enqueue_style( 'novena-style', get_stylesheet_uri(), array(), _S_VERSION , 'all');

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/plugins/bootstrap/css/bootstrap.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'icoFont-style', get_template_directory_uri().'/assets/plugins/icofont/icofont.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'carousel-style', get_template_directory_uri().'/assets/plugins/slick-carousel/slick/slick.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'slick-style', get_template_directory_uri().'/assets/plugins/slick-carousel/slick/slick-theme.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css', array(), _S_VERSION , 'all');
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css', array(), _S_VERSION , 'all');

	

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/plugins/jquery/jquery.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/plugins/bootstrap/js/popper.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/plugins/counterup/jquery.easing.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick-carousel', get_template_directory_uri() . '/assets/plugins/slick-carousel/slick/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/plugins/counterup/jquery.waypoints.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'shuffle', get_template_directory_uri() . '/assets/plugins/shuffle/shuffle.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'counterupjs', get_template_directory_uri() . '/assets/plugins/counterup/jquery.counterup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'google-map', get_template_directory_uri() . '/assets/plugins/google-map/map.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'googless-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'novena_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}





function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );

// for pleceholder
// =================================================================



/**
 * Change default fields, add placeholder and change type attributes.
 *
 * @param  array $fields
 * @return array
 */
function wpse_62742_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'theme_text_domain' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Name',
                'novena'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Email"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="Subject" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}
add_filter( 'comment_form_default_fields', 'wpse_62742_comment_placeholders' );


/**
 * Comment Form Placeholder Comment Field
 */
function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Message', 'novena');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );