<?php
/**
 * ICA Theme Functions
 *
 * @package ICA_Theme
 * @since 1.0.0
 */

// Sécurité: empêcher l'accès direct
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuration du thème
 */
function ica_theme_setup() {
    // Support du titre dans l'en-tête
    add_theme_support('title-tag');

    // Support des images à la une
    add_theme_support('post-thumbnails');

    // Support du logo personnalisé
    add_theme_support('custom-logo', array(
        'height'      => 48,
        'width'       => 48,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Support HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Enregistrer les menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'ica-theme'),
    ));
}
add_action('after_setup_theme', 'ica_theme_setup');

/**
 * Enqueue des styles et scripts
 */
function ica_enqueue_scripts() {
    // Enqueue du fichier CSS principal
    wp_enqueue_style('ica-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Enqueue du fichier JavaScript principal
    wp_enqueue_script('ica-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'ica_enqueue_scripts');

/**
 * Custom Nav Walker pour supporter les menus déroulants
 */
class ICA_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= '<ul class="sub-menu">';
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = '';
        if ($has_children) {
            $class_names = ' class="has-dropdown"';
        }

        $output .= '<li' . $class_names . '>';

        $attributes  = !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="nav-link"';

        $item_output = '<a' . $attributes . '>';
        $item_output .= $item->title;
        if ($has_children) {
            $item_output .= ' <i class="fas fa-chevron-down"></i>';
        }
        $item_output .= '</a>';

        $output .= $item_output;
    }
}

/**
 * Menu par défaut si aucun menu n'est configuré
 */
function ica_default_menu() {
    echo '<ul class="nav-links">';
    echo '<li><a href="#accueil" class="nav-link">Accueil</a></li>';
    echo '<li class="has-dropdown">';
    echo '<a href="#qui-sommes-nous" class="nav-link">Qui sommes-nous <i class="fas fa-chevron-down"></i></a>';
    echo '<ul class="sub-menu">';
    echo '<li><a href="#mission" class="nav-link">Mission</a></li>';
    echo '<li><a href="#valeurs" class="nav-link">Valeurs</a></li>';
    echo '<li><a href="#conseil" class="nav-link">Conseil d\'administration</a></li>';
    echo '<li><a href="#equipe" class="nav-link">Équipe</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="#certification" class="nav-link">Certification</a></li>';
    echo '<li><a href="#secteur" class="nav-link">Secteur d\'activité</a></li>'; 
    echo '<li><a href="#contact" class="nav-link">Contact</a></li>';
    echo '</ul>';
}

/**
 * Modifier la classe des liens du menu
 */
function ica_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ica_nav_menu_link_attributes', 10, 3);

/**
 * Ajouter des classes personnalisées aux éléments de menu
 */
function ica_nav_menu_css_class($classes, $item, $args) {
    if ($args->theme_location == 'primary') {
        $classes = array(); // Supprimer les classes par défaut de WordPress
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'ica_nav_menu_css_class', 10, 3);

/**
 * Pagination des listes d'articles (home.php, index.php).
 *
 * N'utilise volontairement PAS the_posts_pagination() : son conteneur de
 * liens est toujours rendu avec class="nav-links" (codé en dur dans WP
 * core, non personnalisable), qui entre en collision avec la classe
 * .nav-links du menu principal de ce thème (display:flex non scopé dans
 * main.css) et casserait la mise en page des numéros de page.
 */
function ica_the_pagination() {
    $links = paginate_links( array(
        'mid_size'  => 2,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'type'      => 'array',
    ) );

    if ( empty( $links ) ) {
        return;
    }
    ?>
    <nav class="ica-pagination" aria-label="<?php esc_attr_e( 'Navigation entre les pages', 'ica-theme' ); ?>">
        <ul>
            <?php foreach ( $links as $link ) : ?>
                <li><?php echo wp_kses_post( $link ); ?></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php
}
