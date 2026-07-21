<?php
/**
 * Liste des articles (page des publications, ou page d'accueil quand
 * aucune page statique n'est configurée dans Réglages > Lecture).
 *
 * @package ICA_Theme
 */

get_header();
?>

    <section class="section section-lg">
        <div class="container">

            <?php if ( is_home() && ! is_front_page() ) : ?>
                <header class="page-header">
                    <h1><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php if ( have_posts() ) : ?>

                <div class="post-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article <?php post_class( 'post-card' ); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="post-card-thumb">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            <?php endif; ?>
                            <div class="post-card-body">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="post-card-meta"><?php echo esc_html( get_the_date() ); ?></p>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn-secondary">Lire la suite</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <?php ica_the_pagination(); ?>

            <?php else : ?>
                <p>Aucun article pour le moment.</p>
            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>
