<?php
/**
 * Tom theme functions and definitions
 * */

$themeVersion = '2.8.2';

function theme_setup() {

	add_theme_support( 'post-thumbnails' );

	// Add custom image size used in Cover Template.
	add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_image_size( 'fullWidth', 1200, 9999 );
}

add_action( 'after_setup_theme', 'theme_setup' );


/**
 * Register and Enqueue Scripts.
 */
function register_scripts() {
	global $themeVersion;
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), $themeVersion, false );
	wp_enqueue_script( 'matchheight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array(), $themeVersion, false );
	wp_enqueue_script( 'slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), $themeVersion, false );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array(), $themeVersion, false );
	wp_enqueue_script( 'gsap', get_template_directory_uri() . '/js/lib/gsap.min.js', array(), $themeVersion, false );
	wp_enqueue_script( 'scrolltrigger', get_template_directory_uri() . '/js/lib/ScrollTrigger.min.js', array(), $themeVersion, false );
	wp_enqueue_script( 'isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), $themeVersion, false );

}
add_action( 'wp_enqueue_scripts', 'register_scripts' );


/**
 * Register and Enqueue Styles.
 */
function register_styles() {

	global $themeVersion;
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css', array(), $themeVersion );
	wp_enqueue_style( 'slickstyles', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), $themeVersion, false );

}
add_action( 'wp_enqueue_scripts', 'register_styles' );


/**
 * Register navigation menus
 */
function register_my_menus() {
    register_nav_menus(
      array(
        'header'  => 'Header Menu',
        'side'  => 'Side Menu',
		'mobile'  => 'Mobile Menu',
        'footer'   => 'Footer Menu'
      )
    );
  }
  add_action( 'init', 'register_my_menus' );



/**
 * Customizer field -  Tracking code
 */
function tracking_customizer_settings($wp_customize) {

    $wp_customize->add_section('tracking', array('title' => 'Analytics Tracking Codes', 'priority' => 0));
    $wp_customize->add_setting('tracking_code');
    $wp_customize->add_control('tracking_code',
        array(
            'type' => 'textarea',
            'label' => 'Analytics Tracking Codes',
            'description' => 'Paste all analytics and tracking scripts here to be output into the template.',
            'section' => 'tracking',
            'settings' => 'tracking_code',
        )
    );
}
add_action('customize_register', 'tracking_customizer_settings');


// Disable WordPress Admin Bar for all users
add_filter( 'show_admin_bar', '__return_false' );

// Remove unnecessary header information
function remove_header_info() {
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'start_post_rel_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head',10,0); // for WordPress >= 3.0
}
add_action('init', 'remove_header_info');

// Remove wp version meta tag and from rss feed
add_filter('the_generator', '__return_false');

// Disable ping back scanner
add_filter('wp_xmlrpc_server_class', '__return_false');
add_filter('xmlrpc_enabled', '__return_false');


// Remove unnecessary feeds
function fb_disable_feed() {
    wp_die( __('No feed available, please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
}

add_action('do_feed', 'fb_disable_feed', 1);
add_action('do_feed_rdf', 'fb_disable_feed', 1);
add_action('do_feed_rss', 'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'fb_disable_feed', 1);
add_action('do_feed_atom_comments', 'fb_disable_feed', 1);

// Remove xpingback header
function remove_x_pingback($headers) {
    unset($headers['X-Pingback']);
    return $headers;
}
add_filter('wp_headers', 'remove_x_pingback');




add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});


function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_comments' );

// custom thumbnail sizes
//add_image_size( 'news-home', 640, 420, true );
//add_image_size( 'logo', 180, 80, false );
//add_image_size( 'square', 600, 600, true );
//add_image_size( 'innerImage', 1200, 600, false );
//add_image_size( 'partnerLogo', 250, 90, false );
//add_image_size( 'newsSquare', 600, 542, true );
// Poole Dick
add_image_size( 'projectThumb', 600, 302, true );
add_image_size( 'projectBannerSlide', 1903, 1070, true );
add_image_size( 'serviceBanner', 1400, 540, true );
add_image_size( 'CareersBanner', 1640, 612, true );
add_image_size( 'CareersImage', 812, 775, true );
add_image_size( 'teamsBanner', 812, 562, true );
add_image_size( 'teamMember', 1000, 667, true );


// Crop & upscale smaller images
if(!function_exists('mit_thumbnail_upscale')) {
	function mit_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
	
			if ( !$crop ) return null; // let the wordpress default function handle this
	
			$aspect_ratio = $orig_w / $orig_h;
			$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
	
			$crop_w = round($new_w / $size_ratio);
			$crop_h = round($new_h / $size_ratio);
	
			$s_x = floor( ($orig_w - $crop_w) / 2 );
			$s_y = floor( ($orig_h - $crop_h) / 2 );
	
			return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
	}
	}
	add_filter( 'image_resize_dimensions', 'mit_thumbnail_upscale', 10, 6 );



// excerpt length
add_filter( 'excerpt_length', function($length) {
    return 17;
} );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// options page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Contact Settings',
		'menu_title'	=> 'Contact',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// select dropdown on form


function my_wpcf7_dropdown_form($html) {
	$text = 'Please select...';
	$html = str_replace('---', '' . $text . '', $html);
	return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_dropdown_form');


add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});



// Register Custom Post Type
function projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Project', 'text_domain' ),
		'archives'              => __( 'Projects Archives', 'text_domain' ),
		'attributes'            => __( 'Projects Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Project:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'text_domain' ),
		'add_new_item'          => __( 'Add New Project', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Project', 'text_domain' ),
		'edit_item'             => __( 'Edit Project', 'text_domain' ),
		'update_item'           => __( 'Update Project', 'text_domain' ),
		'view_item'             => __( 'View Project', 'text_domain' ),
		'view_items'            => __( 'View Projects', 'text_domain' ),
		'search_items'          => __( 'Search Project', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Project', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'text_domain' ),
		'items_list'            => __( 'Projects list', 'text_domain' ),
		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Projects list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'Projects Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects', 0 );

function insights() {

	$labels = array(
		'name'                  => _x( 'Insight', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Insight', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Insights', 'text_domain' ),
		'name_admin_bar'        => __( 'Insight', 'text_domain' ),
		'archives'              => __( 'Insight Archives', 'text_domain' ),
		'attributes'            => __( 'Insight Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Insight:', 'text_domain' ),
		'all_items'             => __( 'All Insight', 'text_domain' ),
		'add_new_item'          => __( 'Add New Insight', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Insight', 'text_domain' ),
		'edit_item'             => __( 'Edit Insight', 'text_domain' ),
		'update_item'           => __( 'Update Insight', 'text_domain' ),
		'view_item'             => __( 'View Insight', 'text_domain' ),
		'view_items'            => __( 'View Insight', 'text_domain' ),
		'search_items'          => __( 'Search Insight', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Insight', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Insight', 'text_domain' ),
		'items_list'            => __( 'Insight list', 'text_domain' ),
		'items_list_navigation' => __( 'Insight list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Insight list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Insight', 'text_domain' ),
		'description'           => __( 'Insight Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'menu_icon'             => 'dashicons-lightbulb',
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'insights', $args );

}
add_action( 'init', 'insights', 0 );

// remove p tag wrapper from around img tags in content of posts

// Remove P Tags Around Images 
// From: http://justlearnwp.com/remove-p-tag-around-wordpress-images/
function filter_ptags_on_images($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// remove single view for thinkers custom post type

/* Reomved by LW
add_action( 'template_redirect', 'wpse_128636_redirect_post' );

function wpse_128636_redirect_post() {
  if ( is_singular( 'thinkers' ) ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}
*/