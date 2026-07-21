<?php
/**
 * Template Name: Certificat AERMQ
 * Description: Page dédiée au Certificat AERMQ en collaboration appliquée,
 * développé par l'ICA en partenariat avec l'AERMQ.
 *
 * @package ICA_Theme
 */

get_header();

$aermq_url = 'https://aermq.qc.ca/inscription-certificat-aermq-en-collaboration-appliquee/';
?>

    <!-- Hero / présentation du programme -->
    <section class="certification-section section-lg" id="certificat-aermq">
        <div class="decorative-shape"></div>
        <div class="decorative-shape"></div>
        <div class="container">
            <div class="grid-2">
                <div>
                    <span class="section-label">Partenariat AERMQ</span>
                    <h1>Certificat AERMQ en collaboration appliquée</h1>
                    <p class="text-lead">
                        Une reconnaissance formelle des compétences collaboratives propres au secteur de l'isolation et du revêtement mural, conçue pour les réalités de projet et les exigences croissantes de coordination interdisciplinaire.
                    </p>

                    <ul class="certification-features">
                        <li>Formation de 2 jours</li>
                        <li>Certificat délivré suite à un examen de certification</li>
                        <li>Conçue pour les réalités de projet du secteur</li>
                        <li>Développée par l'ICA en collaboration avec l'AERMQ</li>
                    </ul>

                    <a href="<?php echo esc_url( $aermq_url ); ?>" class="btn-primary" style="margin-top: 1rem;" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-file-signature"></i>
                        S'inscrire
                    </a>
                </div>

                <div>
                    <div class="card" style="background: rgba(255, 255, 255, 0.1); border-color: rgba(255, 255, 255, 0.2);">
                        <h3>Détails du programme</h3>
                        <p><strong>Durée :</strong> 2 jours</p>
                        <p><strong>Certification :</strong> Suite à un examen de certification</p>
                        <p><strong>Partenaire :</strong> AERMQ</p>
                        <p><strong>Développé par :</strong> ICA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formateurs -->
    <section class="section" id="formateurs">
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
                <a href="<?php echo esc_url( $aermq_url ); ?>" class="btn-primary" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-file-signature"></i>
                    S'inscrire au Certificat AERMQ
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
