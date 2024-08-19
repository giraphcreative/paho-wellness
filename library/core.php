<?php

// include the main.js script in the header on the front-end.
function p_scripts() {
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'p_scripts' );


// register a generic sidebar.
register_sidebar( array(
	'id' => 'sidebar-generic',
	'name'=> 'General Sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title"><h4>',
    'after_title' => '</h4></div>',
) );


// hide the editor from pages
add_action( 'init', 'hide_editor' );
function hide_editor() {
    remove_post_type_support('page', 'editor');
}


// function to display individual social icons
function theme_social_icon( $network ) {
	$social_link = get_field( 'social-' . $network, 'option' );
	if ( !empty( $social_link ) ) {
		?><a href="<?php print $social_link ?>" target="_blank"><img src="<?php bloginfo( 'template_url' ) ?>/img/social/<?php print $network ?>.svg" class="social-icon" /></a><?php
	}
}

