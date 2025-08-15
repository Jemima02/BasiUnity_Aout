<?php get_header();
/* Template Name: Recommandation */
?>

<main>
    <div class="text-center py-5">
        <h1 class="display-4 fw-light">Recommandation</h1>
    </div>

    <section class="search-section container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="search-container">
                    <input type="text" class="form-control search-input" placeholder="Recherche...">
                </div>
            </div>
        </div>
    </section>

    <section class="recommendations container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/8.png"
                                    alt="Visage de la designeuse graphique" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Designeuse graphique</h3>
                                <p class="card-text">Une designer graphique exceptionnelle qui allie créativité, rigueur
                                    et sens du détail. Son approche est toujours innovante, et elle sait parfaitement
                                    traduire des idées en visuels percutants et élégants.</p>
                                <a class="nav-link"
                                    href="<?php echo esc_url(get_permalink(get_page_by_path('/profil'))); ?>"><button
                                        class="btn custom-btn">Voir le Profil</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/4.png"
                                    alt="Visage de la vidéaste" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Vidéaste</h3>
                                <p class="card-text">Son sens du cadre, sa maîtrise de la lumière et sa capacité à
                                    capturer l’émotion dans chaque plan rendent ses vidéos uniques et mémorables.Que ce
                                    soit pour des vidéos promotionnelles, des documentaires ou des contenus créatifs,
                                    Léa sait parfaitement s’adapter aux besoins du projet tout en y apportant sa touche
                                    artistique distinctive. Elle est également une collaboratrice fiable, réactive et
                                    toujours à l’écoute..</p>
                                <a class="nav-link"
                                    href="<?php echo esc_url(get_permalink(get_page_by_path('/mathilde-profil'))); ?>"><button
                                        class="btn custom-btn">Voir le Profil</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/9.png"
                                    alt="Visage de la consultante en stratégie" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Consultante en Stratégie</h3>
                                <p class="card-text">Son esthétique visuelle et sa maîtrise des tendances digitales en
                                    font une collaboratrice précieuse pour tout projet.Que ce soit pour des articles,
                                    des vidéos, ou des publications sur les réseaux sociaux, Anne excelle à captiver son
                                    audience tout en répondant aux objectifs de communication. Sa créativité, son
                                    professionnalisme et son adaptabilité font d’elle une véritable force pour toute
                                    équipe.</p>
                                <a class="nav-link"
                                    href="<?php echo esc_url(get_permalink(get_page_by_path('/anne-profil'))); ?>"><button
                                        class="btn custom-btn">Voir le Profil</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/2.png"
                                    alt="Visage de l'illustratrice" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Illustratrice</h3>
                                <p class="card-text">Fiable, réactive et toujours passionnée, Camille est une
                                    collaboratrice de choix pour tous ceux qui recherchent des illustrations à fort
                                    impact. Je la recommande sans hésitation.</p>
                                <button class="btn custom-btn">Voir le Profil</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/3.png"
                                    alt="Visage de la photographe" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Photographe</h3>
                                <p class="card-text">Son professionnalisme, sa capacité à mettre les modèles à l’aise et
                                    son œil infaillible pour la lumière et la composition sont impressionnants. Elle est
                                    également très attentive aux besoins de ses clients, ce qui garantit des résultats
                                    parfaitement alignés avec leurs attentes.</p>
                                <button class="btn custom-btn">Voir le Profil</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/1.png"
                                    alt="Visage de la directrice artistique" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Direction Artistique</h3>
                                <p class="card-text">Elle possède un talent unique pour transformer des idées abstraites
                                    en concepts visuels cohérents et percutants Elle a une vision claire et innovante,
                                    ainsi qu’une capacité impressionnante à coordonner les équipes créatives pour donner
                                    vie à des projets ambitieux.</p>
                                <button class="btn custom-btn">Voir le Profil</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/6.png"
                                    alt="Visage de la musicienne'" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Musique Son</h3>
                                <p class="card-text">Capable de créer des compositions et des paysages sonores qui
                                    marquent les esprits. Son talent réside dans sa capacité à allier créativité
                                    musicale et expertise technique, offrant ainsi des expériences sonores uniques et
                                    immersives.
                                    Que ce soit pour la musique de films, les publicités ou la création de sound design
                                    pour des projets multimédias, Nora se distingue par sa sensibilité artistique et sa
                                    précision. Elle sait parfaitement comprendre les besoins d’un projet et y apporter
                                    une ambiance sonore qui enrichit l’histoire.</p>
                                <button class="btn custom-btn">Voir le Profil</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/5.png"
                                    alt="Visage de la production" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Production</h3>
                                <p class="card-text">Son expertise couvre une large gamme de productions, des films aux
                                    événements en passant par des projets multimédias, toujours avec une approche
                                    créative et professionnelle. Elle sait gérer les défis avec calme et efficacité,
                                    tout en restant fidèle à la vision artistique du projet. Sa capacité à coordonner
                                    les équipes et à garantir la qualité des productions est impressionnante.</p>
                                <button class="btn custom-btn">Voir le Profil</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommendation-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recommendation/7.png"
                                    alt="Visage de la storytelleuse" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-content">
                                <h3 class="card-title">Storytelling</h3>
                                <p class="card-text">Sa capacité à allier narration et stratégie numérique permet de
                                    créer des histoires percutantes et engageantes sur toutes les plateformes digitales.
                                    Que ce soit pour des campagnes de marketing, des blogs ou des contenus vidéo, Elle
                                    sait exactement comment structurer une histoire pour maximiser l’impact et
                                    l’engagement. Son approche créative et analytique en fait une collaboratrice idéale
                                    pour tout projet nécessitant une communication authentique et inspirante.</p>
                                <button class="btn custom-btn">Voir le Profil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>