<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/homepage.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/main.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light container py-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Base Unity Logo"
                        height="50">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo esc_url(get_permalink(get_page_by_path('/about'))); ?>">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo esc_url(get_permalink(get_page_by_path('/recommandation'))); ?>">Recommandation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo esc_url(get_permalink(get_page_by_path('/ressources'))); ?>">Ressources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo esc_url(get_permalink(get_page_by_path('/faq'))); ?>">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo esc_url(get_permalink(get_page_by_path('/contact'))); ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo esc_url(get_permalink(get_page_by_path('/connexion'))); ?>">Se
                                connecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>