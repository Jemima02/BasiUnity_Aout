<?php get_header();
/* Template Name: Profil */
?>

<main>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/8.png"
                        alt="Elise Omni" class="rounded-circle img-fluid mb-3"
                        style="width: 250px; height: 250px; object-fit: cover;">
                </div>
                <div class="col-lg-8">
                    <h1 class="display-4 mb-3">Elise Omni</h1>
                    <h2 class="h4 text-muted mb-4">Designer Graphique</h2>
                    <p class="lead mb-4">
                        Passionnée par l'art visuel et la communication créative, je transforme vos idées en designs
                        impactants.
                        Avec plus de 8 ans d'expérience, je crée des identités visuelles uniques qui racontent votre
                        histoire.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary px-3 py-2">Identité Visuelle</span>
                        <span class="badge bg-secondary px-3 py-2">Branding</span>
                        <span class="badge bg-secondary px-3 py-2">Print Design</span>
                        <span class="badge bg-secondary px-3 py-2">Digital Design</span>
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
                                Diplômée des Beaux-Arts de Paris, j'ai développé une approche unique mêlant créativité
                                et stratégie. Mon parcours m'a menée à collaborer avec des startups innovantes et des
                                entreprises établies, créant des solutions visuelles qui marquent les esprits.
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h4>Ma Philosophie</h4>
                            <p>
                                Je crois que chaque projet raconte une histoire unique. Mon rôle est de donner vie à
                                cette histoire à travers des designs authentiques et mémorables qui résonnent avec
                                votre audience et renforcent votre message.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Compétences</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Adobe Creative Suite</span>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Identité Visuelle</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Design Print</span>
                            <span>88%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>UI/UX Design</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Illustration</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Motion Design</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 75%"></div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design/photo design 3.jpeg"
                            alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design/photo design 2.jpeg"
                            alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design/photo design 1.jpeg"
                            alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/design/photo design 4.jpeg"
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
                                        <p class="mb-3">"Elise a transformé notre vision en une identité visuelle exceptionnelle. Son professionnalisme et sa créativité ont dépassé nos attentes."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Marie Dubois</strong>, <cite title="Source Title">CEO TechStart</cite>
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
                                        <p class="mb-3">"Un travail remarquable sur notre campagne print. Elise a su capturer l'essence de notre marque avec une approche innovante."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Pierre Martin</strong>, <cite title="Source Title">Directeur Marketing EcoVert</cite>
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
                                        <p class="mb-3">"Collaboration exceptionnelle ! Elise écoute, comprend et livre des créations qui marquent. Je recommande vivement."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Sophie Laurent</strong>, <cite title="Source Title">Fondatrice Cosmétiques Luxe</cite>
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
                        <h4>Identité Visuelle</h4>
                        <p>Création de logos, chartes graphiques et identités visuelles complètes qui reflètent
                            l'essence de votre marque.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-printer text-white fs-2"></i>
                        </div>
                        <h4>Design Print</h4>
                        <p>Conception de supports print : brochures, flyers, affiches, packaging et tous vos supports de
                            communication.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-phone text-white fs-2"></i>
                        </div>
                        <h4>Design Digital</h4>
                        <p>Interfaces web et mobile, bannières digitales, réseaux sociaux et tous vos besoins
                            numériques.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-brush text-white fs-2"></i>
                        </div>
                        <h4>Illustration</h4>
                        <p>Illustrations personnalisées pour vos projets : édition, communication, décoration et projets
                            artistiques.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-box text-white fs-2"></i>
                        </div>
                        <h4>Packaging</h4>
                        <p>Design de packaging attractif et fonctionnel qui valorise vos produits et attire l'attention
                            en rayon.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-people text-white fs-2"></i>
                        </div>
                        <h4>Conseil & Formation</h4>
                        <p>Accompagnement stratégique et formation aux outils de design pour développer votre autonomie
                            créative.</p>
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
                            <h4>Discutons de votre projet</h4>
                            <p class="mb-4">
                                Vous avez un projet créatif en tête ? Parlons-en ! Je serais ravie de découvrir
                                vos besoins et de vous proposer des solutions sur mesure.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-envelope-fill text-primary me-3 fs-5"></i>
                                <span>elise.omni@basiunity.com</span>
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
                                    <label for="project" class="form-label">Type de projet</label>
                                    <select class="form-select" id="project" required>
                                        <option value="">Sélectionnez un type</option>
                                        <option value="identite">Identité visuelle</option>
                                        <option value="print">Design print</option>
                                        <option value="digital">Design digital</option>
                                        <option value="illustration">Illustration</option>
                                        <option value="packaging">Packaging</option>
                                        <option value="conseil">Conseil & Formation</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="message" class="form-label">Décrivez votre projet</label>
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