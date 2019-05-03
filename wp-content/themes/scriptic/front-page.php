<?php
/**
 * Front page template file.
 *
 * @package Scriptic
 * @since 0.0.1
 */
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/hero/front-page' ); ?>

<main id="content" class="site-content">

    <section class="intro">
        <div class="intro__video-overlay">
            <?php if( get_field('intro_video_overlay_text')) : ?>
                <p class="intro__video-overlay--text"><?php echo get_field('intro_video_overlay_text'); ?></p>
            <?php endif; ?>
        </div>
        <video loop muted autoplay class="intro__video" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/homepage_background.mp4" preload="auto" type="video/mp4"></video>
    </section>

    <?php if ( have_rows('projects') ) : ?>
        <?php $count = 1; ?>

        <?php while ( have_rows('projects') ) : the_row()?>
            <?php
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $image = get_sub_field('image');
                $link = get_sub_field('link');
            ?>

            <section class="project <?php if ($count % 2 == 0) : ?>even<?php else : ?>odd<?php endif; ?>">
                <div class="container <?php if ($count % 2 == 0) : ?>even<?php else : ?>odd<?php endif; ?>">
                    <?php if ( $image ) : ?>
                        <img class="project__image <?php if ($count % 2 == 0) : ?>even<?php else : ?>odd<?php endif; ?>" src="<?php echo $image; ?>" alt="<?php echo esc_attr_e($title); ?>">
                    <?php endif; ?>

                    <div class="content-wrapper">
                        <?php if ($link) : ?>
                            <a class="project__title link <?php if ($count % 2 == 0) : ?>even<?php else : ?>odd<?php endif; ?>" href=<?php echo $link; ?>><?php echo $title; ?></a>
                        <?php else : ?>
                            <h3 class="project__title <?php if ($count % 2 == 0) : ?>even<?php else : ?>odd<?php endif; ?>"><?php echo $title; ?></h3>
                        <?php endif; ?>

                        <p class="project__description"><?php echo $description; ?></p>
                    </div>
                    
                </div>
            </section>

            <?php $count++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
</main>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main-menu-fadein.js'; ?>"></script>

<?php get_footer(); ?>