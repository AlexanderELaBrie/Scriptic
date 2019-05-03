<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scriptic
 * @since 0.0.1
 */

	$logo = get_field('site_logo', 'options');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico" />
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="site-header" class="site-header">
		<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" <?php if($logo): ?> style="background-image: url('<?php echo $logo; ?>')" alt="Scriptic site logo."><?php else: ?>><?php bloginfo( 'name' ); endif; ?></a>
		<div class="site-header__menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
		</div>
	</header><!-- .site-header -->
