<?php
require_once get_stylesheet_directory() . "/class.wp-auto-theme-update.php";


function theme_js() {
    wp_enqueue_script( 'scrollreveal', get_stylesheet_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 1000 );

function woodmart_child_enqueue_styles() {
	$version = woodmart_get_theme_info( 'Version' );
	
	if( woodmart_get_opt( 'minified_css' ) ) {
		wp_enqueue_style( 'woodmart-style', get_template_directory_uri() . '/style.min.css', array('bootstrap'), $version );
	} else {
		wp_enqueue_style( 'woodmart-style', get_template_directory_uri() . '/style.css', array('bootstrap'), $version );
	}
    
    wp_enqueue_style( 'bulma', get_stylesheet_directory_uri() . '/css/bulma.min.css', array('bootstrap'), $version );
    
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'), $version );
    
}


// -------------------------------------------------------
// Desactivar opciones del menu del dashboard de Wordpress
// -------------------------------------------------------

function remove_menus(){
  
  remove_menu_page( 'edit.php?post_type=cms_block' );          //HTML BLOCKS
  remove_menu_page( 'edit.php?post_type=woodmart_size_guide' );          //	 WOODMART SIZE GUIDE
  remove_menu_page( 'edit.php?post_type=portfolio' );
  remove_menu_page( 'woodmart_dashboard' );  // DUMMY CONTENT
  remove_menu_page( 'edit.php?post_type=woodmart_sidebar' );
}
add_action( 'admin_menu', 'remove_menus', '999' );