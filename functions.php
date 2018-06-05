<?php

// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );

/*
 * Remove this action and callback function if you do not whish to use LESS to style your site or overwrite UIkit variables.
 * If you are using LESS, make sure to enable development mode via the Admin->Appearance->Settings option. LESS will then be processed on the fly.
 */
add_action( 'beans_uikit_enqueue_scripts', function() {
	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/style.less', 'less' );
});
add_action( 'beans_uikit_enqueue_scripts', function(){
	beans_uikit_enqueue_components( array('flex'));
	beans_uikit_enqueue_components( array( 'sticky'), 'add-ons');
});

add_action( 'wp_enqueue_scripts', function() {
	wp_register_script('hospo-typed', get_stylesheet_directory_uri() . '/js/typed.min.js', array('jquery'), '1.0.0', false);
  	wp_register_script('hospo-custom', get_stylesheet_directory_uri() . '/js/custom.js', array('hospo-typed'), '1.0.0', false);
	wp_enqueue_script( 'hospo-typed' );
	wp_enqueue_script( 'hospo-custom' );
});
/*
 *
 * The Great Ditch
 *
 */
// beans_remove_action( 'beans_header_partial_template' );
beans_remove_action( 'beans_footer_partial_template' );
remove_theme_support( 'offcanvas-menu' );
beans_remove_attribute('beans_header', 'class', 'uk-block');
beans_remove_attribute('beans_main', 'class', 'uk-block');
beans_remove_output('beans_site_title_tag_text');

beans_remove_markup('beans_fixed_wrap[_main]');
beans_remove_markup('beans_primary');
beans_remove_markup('beans_content');
beans_remove_markup('beans_main_grid');






/* Header */
if(is_user_logged_in()){
    beans_add_attribute('beans_header', 'data-uk-sticky', '{top:32}');
}
else{
    beans_add_attribute('beans_header', 'data-uk-sticky', '');
}






/*
 * Debug code for outputting of UIKit Enqueued componenets
 */
add_action('beans_footer_after_markup', 'function_name');

function function_name(){
	global $_beans_uikit_enqueued_items;

	print_r( $_beans_uikit_enqueued_items );
}


/*
 * Carbon Field Initalization
 */
add_action( 'after_setup_theme', function() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
});
require_once('custom-fields.php');
