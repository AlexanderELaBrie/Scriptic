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

<div id="content" class="site-content">
    <?php if (have_posts()) : while (have_posts()) : ?>
        <div class="homepage__section">
            <?php the_post(); ?>
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>