<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<script>/* JS state switch (runs immediately) */try{document.documentElement.classList.remove('no-js');document.documentElement.classList.add('js');}catch(e){/* no-op */}</script>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
                    <div class="logo-icon">ICA</div>
                </a>
                <div class="logo-text">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-main"><?php echo get_bloginfo('name') ?: 'Institut de la Collaboration Appliquée'; ?></a>
                    <a href="https://observatoire-collaboration.com/" class="logo-sub" target="_blank" rel="noopener noreferrer"><?php echo get_bloginfo('description') ?: 'Affilié à l\'OQRC'; ?></a>
                </div>
            </div>

            <nav id="nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-links',
                    'container'      => false,
                    'fallback_cb'    => 'ica_default_menu',
                    'walker'         => new ICA_Nav_Walker()
                ));
                ?>

                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>
