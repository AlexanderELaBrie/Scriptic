<?php
/**
 * Scriptic functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scriptic
 * @since 0.0.1
 */

if ( ! function_exists( 'scriptic_setup' ) ) :
    /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
    function scriptic_setup() {

        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Scriptic, use a find and replace
        * to change 'scriptic_translate' to the name of your theme in all the template files.
        */
        load_theme_textdomain('scriptic_translate', get_template_directory() . '/languages');

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

        // Registers an editor stylesheet for the theme.
        add_editor_style( 'style-editor.css' );
        
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(
            array(
                'header' => __( 'Header', 'scriptic_translate' ),
                'footer' => __( 'Footer Menu', 'scriptic_translate' ),
                'social' => __( 'Social Links Menu', 'scriptic_translate' ),
            )
        );

    } // function scriptic_setup()
endif;
add_action( 'after_setup_theme', 'scriptic_setup' );

// Adds scripts and styles.
function scriptic_scripts() {
    wp_enqueue_style( 'scriptic', get_stylesheet_uri() );
    //add_editor_style( 'style-editor.css' );
}

add_action( 'wp_enqueue_scripts', 'scriptic_scripts' );

?>