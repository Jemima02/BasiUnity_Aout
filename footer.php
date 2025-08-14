<?php wp_footer(); ?>
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h3 class="footer-logo">B</h3>
                <p>Transformez votre vision en réalité avec Basi Unity.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Liens rapides</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/about'))); ?>">À propos</a></li>
                    <li><a
                            href="<?php echo esc_url(get_permalink(get_page_by_path('/recommandation'))); ?>">Recommandation</a>
                    </li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/ressources'))); ?>">Ressources</a>
                    </li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/faq'))); ?>">FAQ</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/profil'))); ?>">Mon profil</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Aide</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/contact'))); ?>">Contact</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/mentions-legales'))); ?>">Mentions Légales</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('/politique-confidentialite'))); ?>">Politique de confidentialité</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Suivez-nous</h5>
                <div class="social-icons">
                    <a href="https://www.instagram.com/" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="https://fr.linkedin.com/" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    <a href="https://x.com/" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; 2025 Basi Unity. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>