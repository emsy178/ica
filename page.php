<?php
/**
 * Template générique pour les pages WordPress standards.
 *
 * @package ICA_Theme
 */

get_header();
?>

    <section class="section section-lg">
        <div class="container">
            <?php while ( have_posts() ) : the_post(); ?>

                <header class="page-header">
                    <h1><?php the_title(); ?></h1>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="page-thumbnail">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <?php
                wp_link_pages( array(
                    'before' => '<nav class="page-links">' . esc_html__( 'Pages :', 'ica-theme' ),
                    'after'  => '</nav>',
                ) );
                ?>

            <?php endwhile; ?>
        </div>
    </section>

<?php get_footer(); ?>
