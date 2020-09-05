<?php

function strategiczne_styles(){
	wp_enqueue_style('style', get_stylesheet_uri(), false, null, 'all');
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, 'all' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies, null, 'all' ); 
}

function strategiczne_scripts(){
	$deps = array('jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', $deps, false, $in_footer = true);
	wp_enqueue_script( 'navpos', get_template_directory_uri().'/js/navpos.js', $deps, $ver = false, $in_footer = false );
}
add_action('wp_enqueue_scripts', 'strategiczne_styles');
add_action('wp_enqueue_scripts', 'strategiczne_scripts');


//Navs Men
register_nav_menus( array('primary' => __('Primary Menu') ));

//Pobranie nazwy kategorii
function getCategory(){
	$categories = get_the_category();
	if($categories){
		foreach ($categories as $category) {
			return "<a href='" . get_category_link($category->term_id) . "'>" . $category->cat_name . "</a>";
		}
	}
}

//Excerpt custom length
function custom_excerpt_length() {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');


//Custom theme setup
function strategicznegry_setup(){
	register_nav_menus( array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		'footer2' => __('Footer 2 Menu'),
		'partnerzy' => __('Partnerzy'))
	);

	$defaults = array(
		'height' => 50,
		'width' => 500,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array('site-title', 'site-description')
	);

	add_theme_support('custom-logo', $defaults);
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 426, 240, true);
	add_image_size('banner-image', 920, 210, true);
}
add_action('after_setup_theme', 'strategicznegry_setup');
add_action( 'after_setup_theme', function() {
    add_theme_support( 'responsive-embeds' );
} );

//Widget Location

function widgetsInit(){
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1'));
}
add_action('widgets_init', 'widgetsInit');




//Load More Posts AJAX\/\/\/\/\/\/\/\/\/\/\/\/\/

function loadmore_scripts() {
 
	global $wp_query; 
 
	wp_enqueue_script('jquery');
 
	wp_register_script( 'loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );
 
	wp_localize_script( 'loadmore', 'loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
		'posts' => json_encode( $wp_query->query_vars ), 
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'loadmore' );
} 
add_action( 'wp_enqueue_scripts', 'loadmore_scripts' );



function loadmore_ajax_handler(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
 
	query_posts( $args );
 
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part( 'content' );
 
		endwhile;
 
	endif;
	die;
}
add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');



//Customize Options
function strategiczne_custom_reg($wp_customize){

	$wp_customize->add_setting('links_color', array(
		'default' => '#000',
		'transport' => 'refresh'
	));

	$wp_customize->add_section('standard_colors', array(
		'title' => __('Standard Colors', 'StrategiczneGry'),
		'priority' => 30
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'links_color_control', array(
		'label' => __('Link Color', 'StrategiczneGry'),
		'section' => 'standard_colors',
		'settings' => 'links_color'

	)));
}
add_action('customize_register', 'strategiczne_custom_reg');

//Output Customize CSS
function strategiczne_custom_css(){ ?>
	<style type="text/css">

		a:link,
		a:visited{
			color: <?php echo get_theme_mod('links_color'); ?>;
		}

	</style>
<?php
}
add_action('wp_head', 'strategiczne_custom_css');

//WP Bootstrap Navwalker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';