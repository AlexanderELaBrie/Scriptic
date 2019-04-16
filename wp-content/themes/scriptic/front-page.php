<?php
/**
 * Front page template file.
 *
 * @package Scriptic
 * @since 0.0.1
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/header/front-page' ); ?>

<main id="content" class="site-content">
    <?php if (have_posts()) : while (have_posts()) : ?>
        <div class="homepage__section">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</main>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main-menu-fadein.js'; ?>"></script>

<?php get_footer(); ?>