<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the body tag.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scriptic
 * @since 0.0.1
 */

?>

	<footer id="site-footer" class="site-footer">

		<div class="site-footer__social-media"></div>
	
		<div class="site-footer__site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'scriptic_translate' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->

		<div class="site-footer__credits">
			<div class="site-footer__credits--favicon">
				Favicon made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
