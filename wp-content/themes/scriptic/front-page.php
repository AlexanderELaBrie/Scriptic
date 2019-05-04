<?php
/**
 * Front page template file.
 *
 * @package Scriptic
 * @since 0.0.1
 */

    $pre_footer_image = get_field('pre-footer_image');
    $pre_footer_link = get_field('pre-footer_overlay_link');
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
                <div class="project__image-wrapper">
                    <img class="project__image-wrapper--image" src="<?php echo $image; ?>" alt="<?php echo esc_attr_e($title); ?>">
                </div>

                <div class="project__content-wrapper">
                    <?php if ($link) : ?>
                        <a class="project__content-wrapper--title link" href=<?php echo $link; ?>><?php echo $title; ?></a>
                    <?php else : ?>
                        <h3 class="project__content-wrapper--title"><?php echo $title; ?></h3>
                    <?php endif; ?>

                    <p class="project__content-wrapper--description"><?php echo $description; ?></p>
                </div>
            </section>

            <?php $count++; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <section class="pre-footer">
        <?php if ($pre_footer_image) : ?><img class="pre-footer__background-image" src="<?php echo $pre_footer_image; ?>"><?php endif; ?>
        <div class="pre-footer__text-wrapper">
            <p class="pre-footer__text-wrapper--overlay-text">Our services are available for contract-based work.</p>
            <?php if ($pre_footer_link) : ?><a class="pre-footer__text-wrapper--overlay-text-link">Contact us here.</a><?php endif; ?>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main-menu-fadein.js'; ?>"></script>
