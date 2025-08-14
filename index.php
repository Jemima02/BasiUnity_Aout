<?php
get_header();
?>

<main>
    <section class="position-relative">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil/hero.png" alt="Trois femmes discutant"
            class="hero-image w-100">
    </section>

    <section class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title mb-4">À propos de Basi Unity?</h2>
                    <p class="mb-4">Basi Unity est une entreprise innovante qui aide les entrepreneurs et
                        professionnels
                        à développer leur potentiel. Nous proposons un accompagnement sur mesure dans le domaine du
                        développement personnel, des stratégies d'affaires et du marketing. Notre approche se
                        distingue
                        par une méthodologie unique et personnalisée.</p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/about'))); ?>"
                        class="btn btn-primary px-4">En savoir plus</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/photo.jpeg"
                        alt="Photos des deux fondatrices du site web" class="img-fluid rounded w-50 resource-image">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="testimonials py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Recommandations</h2>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-card">
                            <div class="testimonial-profile">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil/carrousel/testimony.jpeg"
                                    alt="Visage d'une femme" class="testimonial-img">
                            </div>
                            <div class="testimonial-content">
                                <h5>Sophie Laurent</h5>
                                <p class="testimonial-position">Directrice Marketing, Innovex</p>
                                <p class="testimonial-text">"Travailler avec Basi Unity a transformé ma vision du
                                    leadership. Leur approche personnalisée et leurs conseils stratégiques ont
                                    propulsé
                                    mon entreprise vers de nouveaux sommets. Je recommande vivement leurs services à
                                    tous les entrepreneurs ambitieux."</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-profile">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil/carrousel/testimony2.jpeg"
                                    alt="Visage d'une femme" class="testimonial-img">
                            </div>
                            <div class="testimonial-content">
                                <h5>Marc Dupont</h5>
                                <p class="testimonial-position">Fondateur, TechVision</p>
                                <p class="testimonial-text">"Basi Unity a été un partenaire exceptionnel dans le
                                    développement de mon entreprise. Leur expertise et leur dévouement ont été des
                                    atouts précieux pour atteindre mes objectifs commerciaux."</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <div class="testimonial-profile">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil/carrousel/testimony3.jpeg"
                                    alt="Visage d'une femme" class="testimonial-img">
                            </div>
                            <div class="testimonial-content">
                                <h5>Claire Moreau</h5>
                                <p class="testimonial-position">Consultante indépendante</p>
                                <p class="testimonial-text">"Grâce aux conseils de Basi Unity, j'ai pu redéfinir ma
                                    stratégie de marque et attirer une clientèle plus ciblée. Leur approche
                                    holistique a
                                    été déterminante dans ma réussite professionnelle."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-indicators custom-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="resources py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 px-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil/femme.jpeg"
                        alt="Femme regardant son IPad" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title mb-4">Ressources</h2>
                    <p class="mb-4">Découvrez notre collection de ressources exclusives conçues pour vous aider à
                        exceller dans votre parcours professionnel. Nos guides, webinaires et outils pratiques sont
                        développés par nos experts pour répondre aux défis spécifiques des entrepreneurs et
                        professionnels d'aujourd'hui.</p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/ressources'))); ?>"
                        class="btn btn-primary px-4">Accéder aux ressources</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>