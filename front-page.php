<?php
/**
 * Template Name: Page d'accueil ICA
 * Description: Page d'accueil de l'Institut de la Collaboration Appliquée
 */

get_header();

$aermq_url = 'https://aermq.qc.ca/inscription-certificat-aermq-en-collaboration-appliquee/';
?>

    <!-- Hero Section -->
    <section class="hero section-lg" id="accueil" data-hero-style="gradient-animated">
        <div class="hero-background"></div>
        <div class="decorative-shape"></div>
        <div class="decorative-shape"></div>
        <div class="decorative-shape"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <h1>Développez vos compétences en <span class="highlight">collaboration appliquée</span></h1>
                <p class="text-lead">
                    L'Institut de la Collaboration Appliquée forme les leaders de demain avec des certifications reconnues basées sur des méthodologies éprouvées et des données scientifiques.
                </p>
                <div class="hero-cta">
                    <a href="#certification" class="btn-primary">
                        <i class="fas fa-graduation-cap"></i>
                        Découvrir la certification
                    </a>
                    <a href="#mission" class="btn-secondary">En savoir plus</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="floating-card floating-card-offer floating-card-lg">
                    <span class="floating-card-badge">Formation à distance</span>
                    <h3>Certificat AERMQ <span class="floating-card-subtitle">en collaboration appliquée</span></h3>
                    <p>Formation certifiante développée par l'ICA pour le secteur de l'isolation et du revêtement mural.</p>

                    <div class="floating-card-bento">
                        <div class="floating-card-bento-item">
                            <i class="fas fa-calendar-day"></i>
                            <span>2 jours intensifs</span>
                        </div>
                        <div class="floating-card-bento-item">
                            <i class="fas fa-file-signature"></i>
                            <span>Examen inclus</span>
                        </div>
                        <div class="floating-card-bento-item">
                            <i class="fas fa-laptop"></i>
                            <span>100&nbsp;% à distance</span>
                        </div>
                        <div class="floating-card-bento-item">
                            <i class="fas fa-handshake"></i>
                            <span>Partenariat AERMQ</span>
                        </div>
                    </div>

                    <div class="floating-card-price">
                        <span class="floating-card-price-label">Coût de la formation</span>
                        <strong>Formation gratuite</strong>
                        <span class="floating-card-price-note">Frais d'examen : 900&nbsp;$ + taxes</span>
                    </div>

                    <a href="<?php echo esc_url($aermq_url); ?>" class="btn-primary floating-card-cta" target="_blank" rel="noopener noreferrer">
                        Réserver votre place
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Partenaires / Affiliations -->
    <section class="partners-strip" aria-label="Nos partenaires et affiliations">
        <div class="container">
            <p class="partners-strip-label">Partenaires et institutions affiliées</p>
        </div>
        <?php
        $ica_partner_logos = array(
            array('file' => 'logo-oqrc.png', 'alt' => 'OQRC — Observatoire Québécois de Recherche sur la Collaboration'),
            array('file' => 'logo-AERMQ-RVB-vert-2048x533.png', 'alt' => "AERMQ — Association de l'Enveloppe et des Revêtements Muraux du Québec"),
        );
        ?>
        <div class="container">
            <div class="partners-row">
                <?php foreach ($ica_partner_logos as $ica_partner) : ?>
                    <span class="partner-logo">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $ica_partner['file']); ?>"
                            alt="<?php echo esc_attr($ica_partner['alt']); ?>"
                            loading="lazy"
                        >
                    </span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section" id="mission" style="background-color: white;">
        <div class="container">
            <div class="grid-2">
                <div class="mission-content">
                    <span class="section-label">Notre Mission</span>
                    <h2>Transformer la collaboration en avantage stratégique</h2>
                    <p class="text-lead">
                        L'Institut de la Collaboration Appliquée a pour mission de favoriser l'étude, l'accompagnement et le développement des processus, pratiques et outils collaboratifs au sein d'organisations, d'écosystèmes et de réseaux diversifiés.
                    </p>
                    <p class="text-lead">
                        Nous visons à soutenir les acteurs dans l'adoption de stratégies, d'outils et de réflexions fondées sur des données scientifiques et terrain pour améliorer la collaboration de manière concrète et mesurable.
                    </p>
                </div>

                <div class="mission-visual ">
                    <div class="mission-image">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=80&auto=format&fit=crop" alt="Workshop collaboratif">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valeurs Section -->
    <section class="section section-sm" id="valeurs" style="background-color: var(--neutral-50);">
        <div class="container">
            <div class="section-header ">
                <span class="section-label">Nos Principes</span>
                <h2>Nos Valeurs Fondamentales</h2>
                <p class="text-lead">
                    Des principes qui guident notre approche de la collaboration appliquée
                </p>
            </div>

            <div class="grid-3">
                <div class="card ">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Ouverture</h3>
                    <p>Ouverture à tous les acteurs par la collaboration et diversité des points de vue.</p>
                </div>

                <div class="card ">
                    <div class="card-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Rigueur scientifique</h3>
                    <p>Rigueur scientifique dans la production et la diffusion des connaissances sur la collaboration.</p>
                </div>

                <div class="card ">
                    <div class="card-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Partage</h3>
                    <p>Partage de l'information et des outils de collaboration pour maximiser l'impact.</p>
                </div>

                <div class="card ">
                    <div class="card-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Innovation dans les façons de faire collaboratives adaptées aux défis actuels.</p>
                </div>

                <div class="card ">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Engagement</h3>
                    <p>Engagement envers les communautés et partenaires impliqués.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Section (Certificat de la collaboration appliquee + Certificat AERMQ) -->
    <section class="section section-lg" id="certification" style="background-color: white;">
        <div class="container">

            <!-- Sous-section 1 : Certificat de la collaboration appliquee -->
            <div id="certificat-collaboration-appliquee">
                <span class="section-label">Notre certification</span>
                <h2>Certificat de la collaboration appliquée</h2>

                <div class="aermq-card">
                    <div class="aermq-card-left">
                        <p>
                            Un programme de certification complet destiné aux professionnels qui pilotent, coordonnent ou participent à des projets collaboratifs.
                        </p>

                        <ul class="aermq-benefits">
                            <li><strong>Public visé :</strong> Directeur / gestionnaires de projets, responsable d'approvisionnement, coordinateur de projet, toute personne impliquée dans des projets collaboratifs (CCP/RPI, …)</li>
                            <li><strong>Secteurs :</strong> santé, logistique, construction, immobilier, enseignement, villes et communes.</li>
                            <li><strong>Type de projets :</strong> les apprentissages sont applicables tant aux projets d'envergure qu'aux projets de plus petite taille, notamment ceux réalisés selon des modes de réalisation collaboratifs tels que le Conception-Construction Progressif (CCP) et la Réalisation de projet intégrée (RPI), dont le recours est désormais davantage encadré et favorisé dans le cadre législatif québécois applicable aux contrats publics.</li>
                        </ul>

                        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                            <!-- Bouton visuel uniquement pour l'instant : aucune fiche PDF n'existe encore, a brancher une fois le fichier fourni. -->
                            <a href="#" class="btn-primary">
                                <i class="fas fa-download"></i>
                                Télécharger la fiche
                            </a>
                            <a href="#certificat-aermq" class="btn-secondary">
                                Autre certification
                            </a>
                        </div>

                        <!-- Espace reserve pour un futur visuel de certificat ICA (badge/image) — pas de substitut pour l'instant, voir demande utilisateur. -->
                        <div style="min-height: 60px; margin-top: 1.5rem;"></div>
                    </div>

                    <div class="aermq-card-right">
                        <span class="aermq-card-right-label">Fiche synthèse</span>
                        <h3>En bref</h3>

                        <p style="color: rgba(255, 255, 255, 0.85);">
                            Une certification conçue pour les gestionnaires et coordinateurs de projets collaboratifs, applicable à tous les secteurs et à toutes les tailles de projets — y compris les modes de réalisation CCP et RPI, désormais davantage encadrés dans le cadre législatif québécois.
                        </p>
                    </div>
                </div>
            </div>

            <hr class="certification-divider">

            <!-- Sous-section 2 : Certificat AERMQ (repositionnee, contenu inchange) -->
            <div id="certificat-aermq">
                <span class="section-label">Certificats partenaires</span>
                <h2>Certificat AERMQ en collaboration appliquée</h2>

                <div class="aermq-card">
                <div class="aermq-card-left">
                    <h3>Compétences visées</h3>
                    <p>
                        Une formation intensive pensée pour répondre aux exigences croissantes de coordination interdisciplinaire et de gouvernance de projets, propre au secteur de l'isolation et du revêtement mural.
                    </p>

                    <ul class="aermq-benefits">
                        <li><strong>Maîtriser la gouvernance :</strong> comprendre les enjeux et mécanismes de la gouvernance collaborative.</li>
                        <li><strong>Agilité de réalisation :</strong> adapter des stratégies collaboratives quel que soit le mode de réalisation du projet.</li>
                        <li><strong>Outillage opérationnel :</strong> utiliser les meilleurs outils de la collaboration selon le contexte et les équipes.</li>
                    </ul>

                    <a href="<?php echo esc_url($aermq_url); ?>" class="btn-primary" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-file-signature"></i>
                        S'inscrire
                    </a>

                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/certificat-aermq-ica-light.jpg'); ?>"
                        alt="Certificat AERMQ de la collaboration appliquée, en partenariat avec l'ICA"
                        class="certification-partner-badge"
                    >
                </div>

                <div class="aermq-card-right">
                    <span class="aermq-card-right-label">Fiche synthèse</span>
                    <h3>Détails du parcours</h3>

                    <div class="aermq-detail">
                        <span class="aermq-detail-label">Durée &amp; format</span>
                        <strong>2 jours — à distance (dates à venir)</strong>
                        <p class="aermq-detail-contact">Communiquez avec Caroline Rousseau au 450 655-1657 ou par courriel à <a href="mailto:caroline.rousseau@aermq.qc.ca">caroline.rousseau@aermq.qc.ca</a></p>
                    </div>
                    <div class="aermq-detail">
                        <span class="aermq-detail-label">Partenaires concepteurs</span>
                        <strong>ICA × AERMQ</strong>
                    </div>
                    <div class="aermq-detail">
                        <span class="aermq-detail-label">Public cible</span>
                        <strong>Membres AERMQ, gestionnaires de projets, chargés de coordination</strong>
                    </div>

                    <p class="aermq-card-note">Examen officiel requis pour l'obtention du certificat.</p>
                </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Formateurs AERMQ -->
    <section class="section" id="formateurs-aermq" style="background-color: var(--neutral-50);">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Équipe d'experts dédiée</span>
                <h2>Une expertise reconnue en collaboration appliquée</h2>
            </div>

            <div class="grid-2">
                <div class="card">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/carolineimg.webp'); ?>"
                        alt="Caroline Coulombe"
                        class="profile-photo"
                    >
                    <h3>Caroline Coulombe</h3>
                    <p class="profile-role">Directrice de l'OQRC et experte de la collaboration</p>
                    <p>
                        L'univers de la collaboration, des modes collaboratifs et des structures
                        collaboratives la passionne et fait l'objet de ses recherches partenariales,
                        de ses interventions en soutien organisationnel ainsi que de ses formations
                        et conférences. Elle a accompagné la mise en place de pratiques collaboratives
                        sur des projets menés en mode traditionnel comme en mode collaboratif.
                    </p>
                </div>

                <div class="card">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/jonathan-harvey-2025-web.jpg'); ?>"
                        alt="Jonathan Harvey"
                        class="profile-photo"
                    >
                    <h3>Jonathan Harvey</h3>
                    <p class="profile-role">Formateur, professeur et expert de la collaboration</p>
                    <p>
                        Après une maîtrise en gestion de projet, il s'est spécialisé dans les
                        approches collaboratives au cours de ses études de doctorat à l'ESG UQAM.
                        Ses recherches portent sur la prise de décision éthique ainsi que sur la
                        dynamique de la complexité et du paradoxe dans les grands projets
                        d'infrastructures publiques.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="<?php echo esc_url($aermq_url); ?>" class="btn-primary" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-file-signature"></i>
                    S'inscrire au Certificat AERMQ
                </a>
            </div>
        </div>
    </section>

        <!-- Conseil d'administration Section (regroupe aussi "Notre équipe") -->
    <a id="equipe"></a>
    <section class="section" id="conseil" style="background-color: white;">
        <div class="container">
            <div class="section-header ">
                <span class="section-label">Gouvernance</span>
                <h2>Conseil d'administration</h2>
                <p class="text-lead">Notre conseil d'administration est composé de membres issus du milieu académique et du secteur privé, qui orientent nos grandes décisions stratégiques.</p>
            </div>

            <div class="grid-3">
                <div class="card">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/carolineimg.webp'); ?>"
                        alt="Caroline Coulombe"
                        class="profile-photo"
                    >
                    <h3>Caroline Coulombe</h3>
                    <p class="profile-role">Présidente du CA</p>
                </div>

                <div class="card">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Kenza-photo-pro-1.webp'); ?>"
                        alt="Kenza Benkrid"
                        class="profile-photo"
                    >
                    <h3>Kenza Benkrid</h3>
                    <p class="profile-role">Trésorière du CA</p>
                </div>

                <div class="card">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/frederic-lapierre.jpg'); ?>"
                        alt="Frédéric Lapierre"
                        class="profile-photo"
                    >
                    <h3>Frédéric Lapierre</h3>
                    <p class="profile-role">Secrétaire du CA</p>
                </div>
            </div>
        </div>
    </section>

  <!-- Secteur d'activité Section -->
    <section class="section" id="secteur" style="background-color: var(--neutral-50);">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Secteurs d'intervention</span>
                <h2>Une expertise qui s'applique à plusieurs secteurs</h2>
                <p class="text-lead">
                    Au-delà du Certificat AERMQ, l'approche collaborative de l'ICA s'adresse à divers profils professionnels engagés dans l'amélioration des pratiques collaboratives.
                </p>
            </div>
            
            <div class="grid-3">
                <div class="public-card card ">
                    <div class="public-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Projets majeurs d'infrastructure</h3>
                    <p>Interventions et accompagnement pour projets d'envergure nécessitant coordination multi-acteurs.</p>
                </div>

                <div class="public-card card ">
                    <div class="public-icon"><i class="fas fa-building"></i></div>
                    <h3>Immobilier</h3>
                    <p>Solutions pour promoteurs, gestionnaires et investisseurs pour améliorer la collaboration entre parties prenantes.</p>
                </div>

                <div class="public-card card ">
                    <div class="public-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>OBNL</h3>
                    <p>Programmes adaptés aux organisations à but non lucratif : gouvernance et mobilisation communautaire.</p>
                </div>

                <div class="public-card card">
                    <div class="public-icon"><i class="fas fa-hospital"></i></div>
                    <h3>Santé</h3>
                    <p>Approches pour équipes de soins et projets interprofessionnels en santé.</p>
                </div>

                <div class="public-card card ">
                    <div class="public-icon"><i class="fas fa-ship"></i></div>
                    <h3>Activités portuaires</h3>
                    <p>Accompagnement spécialisé pour acteurs portuaires et logistiques impliqués dans des chaînes complexes.</p>
                </div>
            </div>


        </div>
    </section>

    <!-- Contact Section -->
    <section class="section section-lg" id="contact" style="background-color: white;">
        <div class="container">
            <div class="section-header ">
                <span class="section-label">Contact</span>
                <h2>Intéressé par notre certification ?</h2>
                <p class="text-lead">
                    Contactez-nous pour plus d'informations sur nos programmes de formation
                </p>
            </div>

            <div class="contact-form ">
                <form id="contactForm">
                    <div class="grid-2" style="gap: 1.5rem;">
                        <div class="form-group">
                            <label class="form-label" for="nom">Nom complet *</label>
                            <input type="text" id="nom" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Adresse courriel *</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="organisation">Organisation</label>
                        <input type="text" id="organisation" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="sujet">Sujet *</label>
                        <select id="sujet" class="form-control" required>
                            <option value="">Sélectionnez un sujet</option>
                            <option value="certification">Inscription à la certification</option>
                            <option value="information">Demande d'information</option>
                            <option value="partenariat">Partenariat</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">Message *</label>
                        <textarea id="message" class="form-control" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i>
                        Envoyer le message
                    </button>
                </form>

                <div style="margin-top: 2rem; text-align: center; color: var(--neutral-500);">
                    <p>Vous pouvez également nous joindre directement :</p>
                    <p><strong>Courriel :</strong> info@ica.ca | <strong>Téléphone :</strong> +1 (000) 000-000</p>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
