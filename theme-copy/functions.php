<?php

// Register Custom Navigation Walker
// require_once('functions/navbar.php');
require_once('functions/wp-bootstrap-navwalker.php');

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

	wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/requirejs/require.js', array(), false, true);
	wp_enqueue_script('require');

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('require'), false, true);
	wp_enqueue_script('global');

	wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
	wp_enqueue_script('livereload');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');
}

add_theme_support( 'custom-logo' );

function fp_theme_setup(){
	register_nav_menus( array(
	        'primary' => __( 'Primary Menu'),
	) );

	//Add logo area
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
}
add_action('after_setup_theme', 'fp_theme_setup');

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );

function ignore_upload_ext($checked, $file, $filename, $mimes){

	if(!$checked['type']){

		$wp_filetype = wp_check_filetype( $filename, $mimes );
		$ext = $wp_filetype['ext'];
		$type = $wp_filetype['type'];
		$proper_filename = $filename;

		if($type && 0 === strpos($type, 'image/') && $ext !== 'svg'){
			$ext = $type = false;
		}
		$checked = compact('ext','type','proper_filename');
	}

	return $checked;
}
add_filter('wp_check_filetype_and_ext', 'ignore_upload_ext', 10, 4);