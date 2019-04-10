<?php
/**
 * Front page template file.
 *
 * @package Scriptic
 * @since 0.0.1
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>