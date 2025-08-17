<?php get_header();
/* Template Name: Anne Profil */
?>

<main>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creatrice/9.png"
                        alt="Mathilda Laurent" class="rounded-circle img-fluid mb-3"
                        style="width: 250px; height: 250px; object-fit: cover;">
                </div>
                <div class="col-lg-8">
                    <h1 class="display-4 mb-3">Anne Dumoulin</h1>
                    <h2 class="h4 text-muted mb-4">Consultante en Stratégie</h2>
                    <p class="lead mb-4">
                        Experte en transformation d'entreprise et stratégie organisationnelle, j'accompagne les
                        dirigeants
                        dans leurs défis les plus complexes. Avec plus de 12 ans d'expérience en conseil, je transforme
                        les visions en stratégies concrètes et les stratégies en résultats durables.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary px-3 py-2">Stratégie d'Entreprise</span>
                        <span class="badge bg-secondary px-3 py-2">Transformation</span>
                        <span class="badge bg-secondary px-3 py-2">Leadership</span>
                        <span class="badge bg-secondary px-3 py-2">Innovation</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center mb-5">À Propos</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h4>Mon Parcours</h4>
                            <p>
                                Diplômée de HEC Paris et forte d'une expérience chez McKinsey & Company, j'ai développé
                                une expertise pointue en stratégie d'entreprise. Mon parcours m'a menée à accompagner
                                des entreprises du CAC 40 aux startups innovantes dans leurs transformations majeures.
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h4>Ma Méthode</h4>
                            <p>
                                J'adopte une approche pragmatique et sur-mesure, alliant rigueur analytique et vision
                                stratégique. Mon objectif : transformer les défis complexes en opportunités de
                                croissance
                                durable et créer de la valeur à long terme.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Expertises</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Stratégie d'Entreprise</span>
                            <span>98%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 98%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Transformation Organisationnelle</span>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Leadership & Management</span>
                            <span>92%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Innovation & Croissance</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Analyse Financière</span>
                            <span>88%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 88%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Négociation Stratégique</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Portfolio</h2>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creatrice/cc1.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creatrice/cc2.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creatrice/cc3.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/creatrice/cc4.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Témoignages</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temoignages/tem.jpeg" 
                                         alt="Client 2" class="rounded-circle mb-3 testimony-picture">
                                    <blockquote class="blockquote">
                                        <p class="mb-3">"Anne a transformé notre approche stratégique. Sa vision claire et sa méthode rigoureuse nous ont permis de doubler notre chiffre d'affaires en 18 mois."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Philippe Durand</strong>, <cite title="Source Title">CEO TechCorp</cite>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temoignages/tem2.jpeg" 
                                         alt="Client 2" class="rounded-circle mb-3 testimony-picture">
                                    <blockquote class="blockquote">
                                        <p class="mb-3">"Un accompagnement exceptionnel dans notre transformation. Anne allie expertise technique et intelligence émotionnelle avec un rare talent."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Isabelle Martin</strong>, <cite title="Source Title">Directrice Générale InnovGroup</cite>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/temoignages/tem3.jpeg" 
                                         alt="Client 2" class="rounded-circle mb-3 testimony-picture">
                                    <blockquote class="blockquote">
                                        <p class="mb-3">"Anne ne se contente pas de conseiller, elle accompagne la mise en œuvre. Résultat : des transformations réussies et durables."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Marc Rousseau</strong>, <cite title="Source Title">Président RetailPlus</cite>
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Services</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-palette text-white fs-2"></i>
                        </div>
                        <h4>Stratégie d'Entreprise</h4>
                        <p>Définition de vision stratégique, analyse concurrentielle et élaboration de plans de
                            développement à long terme.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-printer text-white fs-2"></i>
                        </div>
                        <h4>Transformation Organisationnelle</h4>
                        <p>Accompagnement des mutations organisationnelles, optimisation des processus et conduite du
                            changement.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-phone text-white fs-2"></i>
                        </div>
                        <h4>Leadership & Gouvernance</h4>
                        <p>Développement du leadership, structuration de la gouvernance et accompagnement des équipes
                            dirigeantes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-brush text-white fs-2"></i>
                        </div>
                        <h4>Innovation & Croissance</h4>
                        <p>Stratégies d'innovation, développement de nouveaux marchés et accélération de la croissance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-box text-white fs-2"></i>
                        </div>
                        <h4>Fusions & Acquisitions</h4>
                        <p>Due diligence stratégique, évaluation d'entreprises et accompagnement des opérations de M&A.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-people text-white fs-2"></i>
                        </div>
                        <h4>Formation & Coaching</h4>
                        <p>Formation des dirigeants, coaching exécutif et développement des compétences stratégiques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center mb-5">Contactez-moi</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h4>Discutons de vos défis stratégiques</h4>
                            <p class="mb-4">
                                 Vous faites face à des enjeux stratégiques complexes ? Vous souhaitez transformer votre organisation ? 
                                Échangeons sur vos défis et explorons ensemble les solutions adaptées à votre contexte.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-envelope-fill text-primary me-3 fs-5"></i>
                                <span>anne.dumoulin@basiunity.com</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-phone-fill text-primary me-3 fs-5"></i>
                                <span>+32 1 23 45 67 89</span>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="bi bi-geo-alt-fill text-primary me-3 fs-5"></i>
                                <span>Bruxelles, Belgique</span>
                            </div>
                            <div class="d-flex gap-3">
                                <a href="https://fr.linkedin.com/" class="text-primary fs-4"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="https://www.instagram.com/" class="text-primary fs-4"><i
                                        class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="contact-form">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="project" class="form-label">Type de mission</label>
                                    <select class="form-select" id="project" required>
                                        <option value="">Sélectionnez un type</option>
                                        <option value="strategie">Stratégie d'entreprise</option>
                                        <option value="transformation">Transformation organisationnelle</option>
                                        <option value="leadership">Leadership & Gouvernance</option>
                                        <option value="innovation">Innovation & Croissance</option>
                                        <option value="ma">Fusions & Acquisitions</option>
                                        <option value="formation">Formation & Coaching</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">Décrivez vos enjeux</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary px-4 py-2">Envoyer le message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>