<?php
/**
 * Gabarit de secours universel : affiche un article seul tant qu'aucun
 * single.php n'existe dans ce thème, ou une liste (archives, recherche)
 * pour tout le reste.
 *
 * @package ICA_Theme
 */

get_header();
?>

    <section class="section section-lg">
        <div class="container">

            <?php if ( have_posts() ) : ?>

                <?php if ( is_search() ) : ?>
                    <header class="page-header">
                        <h1>
                            <?php
                            printf(
                                /* translators: %s: search query */
                                esc_html__( 'Résultats de recherche pour : %s', 'ica-theme' ),
                                '<span>' . esc_html( get_search_query() ) . '</span>'
                            );
                            ?>
                        </h1>
                    </header>
                <?php elseif ( ! is_singular() ) : ?>
                    <header class="page-header">
                        <h1><?php the_archive_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php if ( is_singular() ) : ?>

                        <article <?php post_class(); ?>>
                            <header class="page-header">
                                <h1><?php the_title(); ?></h1>
                                <p class="post-card-meta"><?php echo esc_html( get_the_date() ); ?></p>
                            </header>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="page-thumbnail">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </article>

                    <?php else : ?>

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

                    <?php endif; ?>

                <?php endwhile; ?>

                <?php if ( ! is_singular() ) : ?>
                    <?php ica_the_pagination(); ?>
                <?php endif; ?>

            <?php else : ?>

                <header class="page-header">
                    <h1>Aucun contenu trouvé</h1>
                </header>
                <p>Désolé, aucun contenu ne correspond à votre requête.</p>
                <?php get_search_form(); ?>

            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>
