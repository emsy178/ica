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
            <div id="certificat-collaboration-appliquee" class="carte-principale">
                <span class="section-label">Notre certification</span>
                <h2>Certificat de la collaboration appliquée</h2>
                <p class="text-lead">
                    Un programme de certification complet destiné aux professionnels qui pilotent, coordonnent ou participent à des projets collaboratifs.
                </p>

                <div class="badge-et-texte">
                    <div class="badge-colonne">
                        <div class="badge-certification-container">
                            <div class="badge-certification" role="img" aria-label="Badge du Certificat de la collaboration appliquée">
                                <div class="anneau-exterieur"></div>
                                <div class="anneau-intermediaire"></div>
                                <div class="anneau-interieur">
                                    <div class="icone-centrale"><i class="fas fa-handshake"></i></div>
                                    <div class="texte-badge">
                                        Certificat
                                        <span class="sous-texte">Collaboration<br>Appliquée</span>
                                    </div>
                                </div>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <span class="point-deco"></span>
                                <div class="ruban">
                                    <div class="ruban-gauche"></div>
                                    <div class="ruban-centre">ICA — OQRC</div>
                                    <div class="ruban-droite"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="texte-colonne">
                        <h3>Pour qui ?</h3>
                        <p>
                            <strong>Directeurs et gestionnaires de projets</strong>, <strong>responsables d'approvisionnement</strong>, <strong>coordinateurs de projet</strong> et toute personne impliquée dans des projets collaboratifs (CCP, RPI, …).
                        </p>

                        <h3>Secteurs d'application</h3>
                        <div class="tags-secteurs">
                            <span class="tag">Santé</span>
                            <span class="tag">Logistique</span>
                            <span class="tag">Construction</span>
                            <span class="tag">Immobilier</span>
                            <span class="tag">Enseignement</span>
                            <span class="tag">Villes et communes</span>
                        </div>

                        <p style="margin-top: 1.2rem;">
                            Les apprentissages sont applicables tant aux <strong>projets d'envergure</strong> qu'aux <strong>projets de plus petite taille</strong>, notamment ceux réalisés selon des modes de réalisation collaboratifs tels que le <strong>Conception-Construction Progressif (CCP)</strong> et la <strong>Réalisation de projet intégrée (RPI)</strong>, dont le recours est désormais davantage encadré et favorisé dans le cadre législatif québécois applicable aux contrats publics.
                        </p>

                        <a href="#contact" class="bouton-inscription">
                            <i class="fas fa-certificate"></i>
                            En savoir plus
                        </a>
                    </div>
                </div>

                <hr class="separateur">

                <p class="text-sm" style="color: var(--neutral-600); margin-bottom: 0;">
                    <strong>Examen officiel requis</strong> pour l'obtention du certificat. Programme développé par l'Institut de la Collaboration Appliquée (ICA) en partenariat avec l'Observatoire Québécois de Recherche sur la Collaboration (OQRC).
                </p>
            </div>

            <hr class="certification-divider">

            <!-- Sous-section 2 : Certificat AERMQ (repositionnee, contenu inchange) -->
            <div id="certificat-aermq">
                <div class="titre-aermq">
                    <span class="section-label" style="margin-bottom: 0;">Certificats partenaires</span>
                    <span class="badge-aermq">AERMQ</span>
                </div>
                <h2>Certificat AERMQ en collaboration appliquée</h2>

                <div class="carte-secondaire" style="margin-top: 2rem;">
                    <div class="competences-visees">
                        <div class="competence-item">
                            <strong>Maîtriser la gouvernance</strong>
                            <span>Comprendre les enjeux et mécanismes de la gouvernance collaborative.</span>
                        </div>
                        <div class="competence-item">
                            <strong>Agilité de réalisation</strong>
                            <span>Adapter des stratégies collaboratives quel que soit le mode de réalisation du projet.</span>
                        </div>
                        <div class="competence-item">
                            <strong>Outillage opérationnel</strong>
                            <span>Utiliser les meilleurs outils de la collaboration selon le contexte et les équipes.</span>
                        </div>
                    </div>

                    <p style="font-size: 0.95rem; color: var(--neutral-600);">
                        Une formation intensive pensée pour répondre aux exigences croissantes de coordination interdisciplinaire et de gouvernance de projets, propre au secteur de l'<strong>isolation et du revêtement mural</strong>.
                    </p>

                    <div class="fiche-synthese">
                        <h4>Fiche synthèse — Détails du parcours</h4>
                        <ul>
                            <li><strong>Durée &amp; format :</strong> 2 jours — à distance (dates à venir)</li>
                            <li><strong>Contact :</strong> Caroline Rousseau — 450 655-1657 — <a href="mailto:caroline.rousseau@aermq.qc.ca">caroline.rousseau@aermq.qc.ca</a></li>
                            <li><strong>Partenaires concepteurs :</strong> ICA × AERMQ</li>
                            <li><strong>Public cible :</strong> Membres AERMQ, gestionnaires de projets, chargés de coordination</li>
                        </ul>
                    </div>

                    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 1.2rem;">
                        <span class="note-examen">Examen officiel requis pour l'obtention du certificat.</span>
                        <a href="<?php echo esc_url($aermq_url); ?>" class="bouton-inscription" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-file-signature"></i>
                            S'inscrire
                        </a>
                    </div>

                    <div style="margin-top: 1.5rem;">
                        <a href="https://aermq.qc.ca" class="lien-aermq" target="_blank" rel="noopener noreferrer">
                            En savoir plus sur l'AERMQ &rarr; aermq.qc.ca
                        </a>
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
