<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function wpdocs_theme_name_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.min.css');

    if (is_page('apropos')) {
        wp_enqueue_style('apropos', get_stylesheet_directory_uri() . '/assets/styles/apropos.css');
    }

    if (is_page('faq')) {
        wp_enqueue_style('faq', get_stylesheet_directory_uri() . '/assets/styles/faq.css');
    }

    if (is_page('mentions-legales')) {
        wp_enqueue_style('mentionslegales', get_stylesheet_directory_uri() . '/assets/styles/mentionslegales.css');
    }

    if (is_page('politique-confidentialite')) {
        wp_enqueue_style('politique', get_stylesheet_directory_uri() . '/assets/styles/politique.css');
    }

    if (is_page('recommandation')) {
        wp_enqueue_style('recommandation', get_stylesheet_directory_uri() . '/assets/styles/recommandation.css');
    }

    if (is_page('ressources')) {
        wp_enqueue_style('ressources', get_stylesheet_directory_uri() . '/assets/styles/ressources.css');
    }

    if (is_page('contact')) {
        wp_enqueue_style('ressources', get_stylesheet_directory_uri() . '/assets/styles/contact.css');
    }

    if (is_page('profil') || is_page('mathilde-profil') || is_page('anne-profil')) {
        wp_enqueue_style('ressources', get_stylesheet_directory_uri() . '/assets/styles/profil.css');
    }

    if (is_page('connexion')) {
        wp_enqueue_style('ressources', get_stylesheet_directory_uri() . '/assets/styles/connexion.css');
    }

    if (is_page('inscription')) {
        wp_enqueue_style('ressources', get_stylesheet_directory_uri() . '/assets/styles/inscription.css');
    }
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

?>