<?php get_header();
/* Template Name: Mathithia Profil */
?>

<main>
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/4.png"
                        alt="Mathilda Laurent" class="rounded-circle img-fluid mb-3"
                        style="width: 250px; height: 250px; object-fit: cover;">
                </div>
                <div class="col-lg-8">
                    <h1 class="display-4 mb-3">Mathithia Laurent</h1>
                    <h2 class="h4 text-muted mb-4">Vidéaste</h2>
                    <p class="lead mb-4">
                        Créatrice d'histoires visuelles captivantes, je donne vie à vos projets à travers la vidéo.
                        Avec plus de 6 ans d'expérience dans la production audiovisuelle, je transforme vos idées en
                        contenus vidéo percutants et mémorables.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-secondary px-3 py-2">Production Vidéo</span>
                        <span class="badge bg-secondary px-3 py-2">Montage</span>
                        <span class="badge bg-secondary px-3 py-2">Motion Design</span>
                        <span class="badge bg-secondary px-3 py-2">Storytelling</span>
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
                                Formée à l'École Supérieure de Réalisation Audiovisuelle, j'ai développé une expertise
                                complète dans la chaîne de production vidéo. Mon expérience couvre la publicité,
                                le corporate, les réseaux sociaux et les documentaires.
                            </p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h4>Ma Vision</h4>
                            <p>
                                Chaque projet vidéo est une opportunité de créer une connexion émotionnelle.
                                Je m'attache à comprendre votre message pour le traduire en images qui touchent
                                et engagent votre audience.
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
                            <span>Réalisation & Direction</span>
                            <span>92%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 92%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Montage (Premiere Pro)</span>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Motion Design (After Effects)</span>
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
                            <span>Prise de Vue</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Étalonnage (DaVinci)</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Sound Design</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%"></div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/videast/95743A4A-6E8A-4D3D-B80D-DDF263A95C65.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/videast/IMG_7369.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/videast/IMG_7371.jpeg"
                        alt="Affiche en rose d'une femme" class="img-fluid rounded w-100 resource-image">
                </div>
                <div class="col-lg-3 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/videast/IMG_7373.jpeg"
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
                                         alt="Client 1" class="rounded-circle mb-3 testimony-picture">
                                    <blockquote class="blockquote">
                                        <p class="mb-3">"Mathilda a créé un film corporate exceptionnel qui reflète parfaitement nos valeurs. Son approche créative et son professionnalisme sont remarquables."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Jean-Pierre Moreau</strong>, <cite title="Source Title">CEO InnovTech</cite>
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
                                        <p class="mb-3">"Une collaboration fantastique ! Mathilda a su capturer l'essence de notre marque dans une campagne vidéo percutante et mémorable."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Clara Rousseau</strong>, <cite title="Source Title">Directrice Artistique Mode Éthique</cite>
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
                                         alt="Client 3" class="rounded-circle mb-3 testimony-picture" >
                                    <blockquote class="blockquote">
                                        <p class="mb-3">"Mathilda transforme chaque projet en œuvre d'art. Son talent pour le storytelling et sa maîtrise technique font la différence."</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <strong>Thomas Leroy</strong>, <cite title="Source Title">Producteur Indépendant</cite>
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
                        <h4>Production Vidéo</h4>
                        <p>Réalisation complète de vos projets vidéo : de la conception à la post-production, pour tous
                            types de contenus.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-printer text-white fs-2"></i>
                        </div>
                        <h4>Montage & Post-Production</h4>
                        <p>Montage professionnel, étalonnage, sound design et effets visuels pour sublimer vos images.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-phone text-white fs-2"></i>
                        </div>
                        <h4>Motion Design</h4>
                        <p>Création d'animations graphiques, génériques, transitions et effets visuels pour dynamiser
                            vos contenus.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-brush text-white fs-2"></i>
                        </div>
                        <h4>Publicité & Communication</h4>
                        <p>Spots publicitaires, films corporate et contenus de communication adaptés à vos objectifs
                            marketing.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-box text-white fs-2"></i>
                        </div>
                        <h4>Contenu Réseaux Sociaux</h4>
                        <p>Création de contenus vidéo optimisés pour les réseaux sociaux, formats courts et engageants.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="text-center p-4">
                        <div class="bg-primary rounded-circle d-inline-flex mb-3 service-icons">
                            <i class="bi bi-people text-white fs-2"></i>
                        </div>
                        <h4>Formation & Conseil</h4>
                        <p>Formation aux techniques vidéo et conseil stratégique pour développer votre communication
                            audiovisuelle.</p>
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
                                Vous avez une histoire à raconter ? Un message à transmettre ? Discutons ensemble
                                de votre projet et créons des contenus vidéo qui marquent les esprits.
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <i class="bi bi-envelope-fill text-primary me-3 fs-5"></i>
                                <span>mathilda.laurent@basiunity.com</span>
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
                                        <option value="corporate">Film corporate</option>
                                        <option value="publicite">Publicité</option>
                                        <option value="documentaire">Documentaire</option>
                                        <option value="clip">Clip musical</option>
                                        <option value="social">Contenu réseaux sociaux</option>
                                        <option value="formation">Formation vidéo</option>
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