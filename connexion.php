<?php get_header();
/* Template Name: Connexion */
?>

<main>
    <div class="min-vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 col-sm-9">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <h1 class="h3 mb-1">Connexion</h1>
                                <p class="text-muted">Accédez à votre espace Basi Unity</p>
                            </div>

                            <form class="login-form">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" required>
                                        <button type="button"
                                            class="btn btn-link position-absolute end-0 top-50 translate-middle-y pe-3"
                                            onclick="togglePassword()">
                                            <i class="bi bi-eye" id="toggleIcon"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Rester connecté
                                        </label>
                                    </div>
                                    <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 mb-3">
                                    Se connecter
                                </button>
                            </form>

                            <div class="text-center mt-4">
                                <p class="mb-0">
                                    Pas encore de compte ?
                                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('/inscription'))); ?>"
                                        class="text-decoration-none">Créer un compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.className = 'bi bi-eye-slash';
        } else {
            passwordInput.type = 'password';
            toggleIcon.className = 'bi bi-eye';
        }
    }

    document.querySelector('.login-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (!email || !password) {
            alert('Veuillez remplir tous les champs.');
            return;
        }

        alert('Connexion réussie ! Redirection en cours...');
        window.location.href = 'http://localhost/wordpress2/';
    });

</script>

<?php get_footer(); ?>