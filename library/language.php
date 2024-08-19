<?php

// set up a global for the current language.
session_start();


// get languages
function get_languages() {
	if ( function_exists( 'get_field' ) ) {
		$languages = get_field( 'languages', 'option' );
		return $languages;
	}
}


// get the default language
function get_default_language() {
	$languages = get_languages();
	foreach ( $languages as $lang ) {
		if ( $lang['default'] ) return $lang['abbreviation'];
	}
	return false;
}


// get the current language based on url
function get_current_language() {

    // if the language session var isn't set
    if ( !isset( $_SESSION['language'] ) ) {
        $_SESSION['language'] = array();
    }

	// loop through the languages
	foreach ( get_languages() as $lang ) {
        
        // if the current language in url matches the abbreviation for this language
		if ( substr( $_SERVER['REQUEST_URI'], 1, 2 ) == $lang['abbreviation']  ) {

            // set the current language global
            $_SESSION['language'] = $lang;

            // return the current language
			return $_SESSION['language'];
		}

        if ( empty( $language ) && is_single() ) {

            // if it's a single post in the 'spanish' category or it is the spanish category listing and we're checking for spanish
            if ( ( in_category( 'spanish' ) || is_category( 'spanish' ) ) && $lang['abbreviation'] == 'es' ) {
                
                // set the language global
                $_SESSION['language'] = $lang;

            } else { // fallback to english

                // set the language global
                $_SESSION['language'] = $lang;

            }

            return $_SESSION['language'];
        } 

	}

}
// set the current language based on url
add_action( 'init', 'get_current_language' );


// get the current language based on url
function get_current_language_abbrev() {

    // return false if no languages
	return $_SESSION['language']['abbreviation'];

}


function get_logo() {

    // return the logo url from the language info.
    return $_SESSION['language']['logo']['url'];

}


// get the current language based on url
function get_address() {

    // return false if no languages
	return $_SESSION['language']['address'];

}

// get all the languages
$languages = get_languages();

// loop through them and register a menu location for each language
foreach ( $languages as $lang ) {
    // register only the main menu
    register_nav_menus( array( 'main-' . $lang['abbreviation'] => 'Main (' . $lang['name'] . ')' ) );
}


// if there's a default language and we're on thge homepage, redirect to the default language
$default_language = get_default_language();
if ( $default_language && $_SERVER['REQUEST_URI'] == '/' ) {
	wp_redirect( '/' . $default_language );
	exit;
}

