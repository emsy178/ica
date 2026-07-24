    <!-- Footer -->
    <footer>
        <div class="decorative-shape"></div>
        <div class="decorative-shape"></div>
        <div class="container">
            <div class="footer-container">
                <div class="footer-logo">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link logo-link-chip" aria-label="<?php echo esc_attr(get_bloginfo('name') ?: "Institut de la Collaboration Appliquée"); ?>">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-ica.png'); ?>"
                                alt="<?php echo esc_attr(get_bloginfo('name') ?: "Institut de la Collaboration Appliquée"); ?>"
                                class="logo-image"
                            >
                        </a>
                        <a href="https://observatoire-collaboration.com/" class="logo-affiliation logo-affiliation-dark" target="_blank" rel="noopener noreferrer"><?php echo esc_html(get_bloginfo('description') ?: "Affilié à l'OQRC"); ?></a>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.8); margin-top: 1rem; font-size: 0.875rem;">
                        Formons les leaders de demain en collaboration appliquée.
                    </p>
                </div>

                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Institut</h4>
                        <ul>
                            <li><a href="#mission">Mission</a></li>
                            <li><a href="#valeurs">Valeurs</a></li>
                            <li><a href="#certification">Certification</a></li>
                            <li><a href="#secteur">Secteur d'activité</a></li>
                            <li><a href="https://observatoire-collaboration.com/" target="_blank" rel="noopener noreferrer">OQRC</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4>Contact</h4>
                        <ul>
                            <li><a href="mailto:info@ica-oqrc.ca">info@ica.ca</a></li>
                            <li><a href="tel:+15141234567"> +1 (000) 000-000</a></li>
                            <li><a href="https://observatoire-collaboration.com/" target="_blank">Site OQRC</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name') ?: 'Institut de la Collaboration Appliquée'; ?>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>


    <?php wp_footer(); ?>
</body>
</html>
