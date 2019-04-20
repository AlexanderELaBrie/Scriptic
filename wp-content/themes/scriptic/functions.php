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

        // Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

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

// Create Theme Options ACF page.
add_action('acf/init', 'scriptic_acf_init');

function scriptic_acf_init() {
	
	if( function_exists( 'acf_add_options_page' ) ) {
		
		$theme_options_page = acf_add_options_page( array(
			'page_title' 	=> __('Theme General Settings', 'my_text_domain'),
			'menu_title' 	=> __('Theme Settings', 'my_text_domain'),
            'menu_slug' 	=> 'theme-general-settings',
            
            /* (string) The title displayed on the options page. Required. */
            'page_title' => __('Theme Options', 'scriptic_translate'),
            
            /* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
            'menu_title' => __('Theme Options', 'scriptic_translate'),
            
            /* (string) The URL slug used to uniquely identify this options page. 
            Defaults to a url friendly version of menu_title */
            'menu_slug' => 'theme-options',
            
            /* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
            Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
            'capability' => 'administrator',
            
            /* (int|string) The position in the menu order this menu should appear. 
            WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
            Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
            Defaults to bottom of utility menu items */
            'position' => false,
            
            /* (string) The slug of another WP admin page. if set, this will become a child page. */
            'parent_slug' => '',
            
            /* (string) The icon class for this menu. Defaults to default WordPress gear.
            Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
            'icon_url' => false,
            
            /* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists). 
            If set to false, this parent page will appear alongside any child pages. Defaults to true */
            'redirect' => true,
            
            /* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2'). 
            Defaults to 'options'. Added in v5.2.7 */
            'post_id' => 'options',
            
            /* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up. 
            Defaults to false. Added in v5.2.8. */
            'autoload' => false,
            
            /* (string) The update button text. Added in v5.3.7. */
            'update_button'	=> __('Update', 'acf'),
            
            /* (string) The message shown above the form on submit. Added in v5.6.0. */
            'updated_message'=> __("Options Updated", 'acf'),
        ));
		
	}
	
}

?>