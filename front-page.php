<?php
/**
 * Template Name: Page d'accueil ICA
 * Description: Page d'accueil de l'Institut de la Collaboration Appliquée
 */

get_header();
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

            <div class="hero-visual ">
                <div class="floating-card">
                    <h3>Certificat AERMQ</h3>
                    <p>Formation de 2 jours en collaboration appliquée, certifiée suite à un examen.</p>
                </div>
                <div class="floating-card">
                    <h3>Réseau d'Experts</h3>
                    <p>Rejoignez notre communauté de praticiens et d'experts en collaboration organisationnelle.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section" id="mission">
        <div class="container">
            <div class="grid-2">
                <div class="mission-content">
                    <span class="section-label">Notre Mission</span>
                    <h2>Transformer la collaboration en avantage stratégique</h2>
                    <p class="text-lead">
                        L'Institut de la Collaboration Appliquée a pour mission de favoriser l'étude, l'accompagnement et le développement des processus, pratiques et outils collaboratifs au sein d'organisations, d'écosystèmes et de réseaux diversifiés.
                    </p>
                    <p>
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

    <?php $aermq_url = 'https://aermq.qc.ca/inscription-certificat-aermq-en-collaboration-appliquee/'; ?>

    <!-- Certification Section (Certificat AERMQ) -->
    <section class="certification-section section-lg" id="certification">
        <div class="decorative-shape"></div>
        <div class="decorative-shape"></div>
        <div class="container">
            <div class="grid-2">
                <div class="">
                    <span class="section-label">Partenariat AERMQ</span>
                    <h2>Certificat AERMQ en collaboration appliquée</h2>
                    <p class="text-lead">
                        Une reconnaissance formelle des compétences collaboratives propres au secteur de l'isolation et du revêtement mural, conçue pour les réalités de projet et les exigences croissantes de coordination interdisciplinaire.
                    </p>

                    <ul class="certification-features">
                        <li>Formation de 2 jours, à distance (dates à venir)</li>
                        <li>Certificat délivré suite à un examen de certification</li>
                        <li>Conçue pour les réalités de projet du secteur</li>
                        <li>Développée par l'ICA en collaboration avec l'AERMQ</li>
                    </ul>

                    <a href="<?php echo esc_url($aermq_url); ?>" class="btn-primary" style="margin-top: 1rem;" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-file-signature"></i>
                        S'inscrire
                    </a>
                    <p style="margin-top: 0.75rem; font-size: 0.9rem; opacity: 0.9;">
                        Formation gratuite — seuls les frais d'examen (900&nbsp;$ + taxes) s'appliquent.
                    </p>
                </div>

                <div class="">
                    <div class="card" style="background: rgba(255, 255, 255, 0.1); border-color: rgba(255, 255, 255, 0.2);">
                        <h3>Détails du programme</h3>
                        <p><strong>Durée :</strong> 2 jours</p>
                        <p><strong>Format :</strong> À distance (dates à venir)</p>
                        <p><strong>Coût :</strong> Formation gratuite, 900&nbsp;$ + taxes pour les examens</p>
                        <p><strong>Certification :</strong> Suite à un examen de certification</p>
                        <p><strong>Partenaire :</strong> AERMQ</p>
                        <p><strong>Développé par :</strong> ICA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Participants ciblés et objectifs AERMQ -->
    <section class="section section-sm" id="objectifs-aermq" style="background-color: var(--neutral-50);">
        <div class="container">
            <div class="grid-2">
                <div>
                    <span class="section-label">Participants ciblés</span>
                    <h2>À qui s'adresse cette formation ?</h2>
                    <p>
                        Tout individu d'une organisation membre de l'AERMQ qui sera amené à travailler
                        dans un projet considéré collaboratif sur le marché, qui désire implanter une
                        culture collaborative au sein de ses équipes et/ou projets, ou qui souhaite
                        comprendre les fondamentaux de la collaboration dans les projets.
                    </p>
                </div>

                <div>
                    <span class="section-label">Objectifs</span>
                    <h2>Ce que vous en retirerez</h2>
                    <ul class="certification-features">
                        <li>Comprendre les enjeux et mécanismes de la gouvernance collaborative</li>
                        <li>Adapter des stratégies collaboratives quel que soit le mode de réalisation du projet</li>
                        <li>Utiliser les meilleurs outils de la collaboration en fonction du contexte et des équipes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Formateurs AERMQ -->
    <section class="section" id="formateurs-aermq">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Vos formateurs</span>
                <h2>Une expertise reconnue en collaboration appliquée</h2>
            </div>

            <div class="grid-2">
                <div class="card">
                    <div class="card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Caroline Coulombe</h3>
                    <p><strong>Directrice de l'OQRC et experte de la collaboration</strong></p>
                    <p>
                        L'univers de la collaboration, des modes collaboratifs et des structures
                        collaboratives la passionne et fait l'objet de ses recherches partenariales,
                        de ses interventions en soutien organisationnel ainsi que de ses formations
                        et conférences. Elle a accompagné la mise en place de pratiques collaboratives
                        sur des projets menés en mode traditionnel comme en mode collaboratif.
                    </p>
                </div>

                <div class="card">
                    <div class="card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Jonathan Harvey</h3>
                    <p><strong>Formateur, professeur et expert de la collaboration</strong></p>
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
    <section class="section" id="conseil">
        <div class="container">
            <div class="section-header ">
                <span class="section-label">Gouvernance</span>
                <h2>Conseil d'administration</h2>
                <p class="text-lead">Notre conseil d'administration est composé de membres issus du milieu académique et du secteur privé, qui orientent nos grandes décisions stratégiques.</p>
            </div>

            <div class="grid-3">
                <div class="card">
                    <div class="card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Caroline Coulombe</h3>
                    <p><strong>Présidente du CA</strong></p>
                </div>

                <div class="card">
                    <div class="card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Octave Emmanuel Faye</h3>
                    <p><strong>Trésorière</strong></p>
                </div>

                <div class="card">
                    <div class="card-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Frédéric Lapierre</h3>
                    <p><strong>Secrétaire du CA</strong></p>
                </div>
            </div>
        </div>
    </section>

  <!-- Secteur d'activité Section -->
    <section class="section" id="secteur">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Secteur d'activité</span>
                <h2>À qui s'adresse cette certification ?</h2>
                <p class="text-lead">
                    Notre programme est conçu pour divers profils professionnels engagés dans l'amélioration des pratiques collaboratives
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
    <section class="section section-lg" id="contact">
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
