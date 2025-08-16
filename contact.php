<?php get_header();
/* Template Name: Contact */
?>

<main>
    <div class="text-center py-5">
        <h1 class="display-4 fw-light">Contact</h1>
    </div>

    <section class="faq-section container mb-5">
        <div class="about-content contact-section">
            <h2>Contactez-nous</h2>
            <p>Prêt à transformer votre entreprise ? Parlons de vos objectifs et découvrons comment nous pouvons
                vous accompagner vers le succès.</p>

            <form class="contact-form">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="company" class="form-label">Entreprise</label>
                    <input type="text" class="form-control" id="company">
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet</label>
                    <select class="form-select" id="subject" required>
                        <option value="">Choisissez un sujet</option>
                        <option value="consultation">Consultation stratégique</option>
                        <option value="coaching">Coaching d'entreprise</option>
                        <option value="formation">Formation</option>
                        <option value="partenariat">Partenariat</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5"
                        placeholder="Décrivez-nous votre projet et vos objectifs..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>